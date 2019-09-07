# Xero PHP oAuth2

## Current release of SDK with oAuth 2 support
This beta release only supports oAuth2 authentication and the following API sets.
* accounting

Coming soon
* fixed asset 
* bank feeds 
* files 
* payroll
* projects
* xero hq

All third party libraries dependencies managed with Composer.

## Requirements

PHP 5.5 and later


## Getting Started

### Create a Xero App
Follow these steps to create your Xero app

* Create a [free Xero user account](https://www.xero.com/us/signup/api/) (if you don't have one)
* Login to [Xero developer center](https://developer.xero.com/myapps)
* Click "Try oAuth2" link
* Enter your App name, company url, privacy policy url.
* Enter the redirect URI (this is your callback url - localhost, etc)
* Agree to terms and condition and click "Create App".
* Click "Generate a secret" button.
* Copy your client id and client secret and save for use later.
* Click the "Save" button. You secret is now hidden.


## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
"require": {
    "xeroapi/xero-php-oauth2": "0.2.0",
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/xeroapi/autoload.php');
```

## How to use the xero-php-oauth2 SDK

See [SDK reference](https://github.com/XeroAPI/xero-php-oauth2/tree/master/docs) for all methods and models

### authorization.php

```php
<?php
  require __DIR__ . '/vendor/autoload.php';
  require_once('storage.php');

  // Storage Class uses sessions for storing access token (demo only)
  // you'll need to extend to your Database for a scalable solution
  $storage = new StorageClass();

  session_start();

  $provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => '__YOUR_CLIENT_ID__',   
    'clientSecret'            => '__YOUR_CLIENT_SECRET__',
    'redirectUri'             => '__YOUR_REDIRECT_URI__',  //same as at developer.xero.com/myapps
    'urlAuthorize'            => 'https://login.xero.com/identity/connect/authorize',
    'urlAccessToken'          => 'https://identity.xero.com/connect/token'
  ]);

  // If we don't have an authorization code then get one
  if (!isset($_GET['code'])) {
    $options = [
        'scope' => ['openid email profile offline_access accounting.settings accounting.transactions accounting.contacts accounting.journals.read accounting.reports.read accounting.attachments']
    ];

    // Fetch the authorization URL from the provider; this returns the urlAuthorize option and generates and applies any necessary parameters (e.g. state).
    $authorizationUrl = $provider->getAuthorizationUrl($options);

    // Get the state generated for you and store it to the session.
    $_SESSION['oauth2state'] = $provider->getState();

    // Redirect the user to the authorization URL.
    header('Location: ' . $authorizationUrl);
    exit();

  // Check given state against previously stored one to mitigate CSRF attack
  } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
      unset($_SESSION['oauth2state']);
      exit('Invalid state');
  } else {
    //no action
  }
?>
```

### callback.php

```php
<?php
  require __DIR__ . '/vendor/autoload.php';
  require_once('storage.php');

  // Storage Classe uses sessions for storing token > extend to your DB of choice
  $storage = new StorageClass();  

  $provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => '__YOUR_CLIENT_ID__',   
    'clientSecret'            => '__YOUR_CLIENT_SECRET__',
    'redirectUri'             => '__YOUR_REDIRECT_URI__',  //same as at developer.xero.com/myapps
    'urlAuthorize'            => 'https://login.xero.com/identity/connect/authorize',
    'urlAccessToken'          => 'https://identity.xero.com/connect/token'
  ]);
   
  // If we don't have an authorization code then get one
  if (!isset($_GET['code'])) {
      header("Location: index.php?error=true");
      exit();

  // Check given state against previously stored one to mitigate CSRF attack
  } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
    echo "Invalid State";
    unset($_SESSION['oauth2state']);
    exit('Invalid state');
  } else {
  
    try {
      // Try to get an access token using the authorization code grant.
      $accessToken = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
      ]);
           
      $config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken( (string)$accessToken->getToken() );
          
      $config->setHost("https://api.xero.com"); 
      $identityInstance = new XeroAPI\XeroPHP\Api\IdentityApi(
        new GuzzleHttp\Client(),
        $config
      );
       
      $result = $identityInstance->getConnections();

      // Save my token, expiration and tenant_id
      $storage->setToken(
          $accessToken->getToken(),
          $accessToken->getExpires(),
          $result[0]->getTenantId(),  
          $accessToken->getRefreshToken()
      );
   
      header('Location: ' . './get.php');
      exit();
     
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
      echo "Callback failed";
      exit();
    }
  }
?>
```

### storage.php

```php
<?php
class StorageClass
{
  function __construct() {
    if( !isset($_SESSION) ){
          $this->init_session();
      }
    }

    public function init_session(){
      session_start();
  }

    public function getSession() {
      return $_SESSION['oauth2'];
    }

  public function startSession($token, $secret, $expires = null)
  {
        session_start();
  }

  public function setToken($token, $expires = null, $tenantId, $refreshToken)
  {    
      $_SESSION['oauth2'] = [
          'token' => $token,
          'expires' => $expires,
          'tenant_id' => $tenantId,
          'refresh_token' => $refreshToken
      ];
  }

  public function getToken()
  {
      //If it doesn't exist or is expired, return null
      if (!empty($this->getSession())
          || ($_SESSION['oauth2']['expires'] !== null
          && $_SESSION['oauth2']['expires'] <= time())
      ) {
          return null;
      }
      return $this->getSession();
  }

  public function getAccessToken()
  {
      return $_SESSION['oauth2']['token'];
  }

  public function getRefreshToken()
  {
      return $_SESSION['oauth2']['refresh_token'];
  }

  public function getExpires()
  {
      return $_SESSION['oauth2']['expires'];
  }

  public function getXeroTenantId()
  {
      return $_SESSION['oauth2']['tenant_id'];
  }

  public function getHasExpired()
  {
    if (!empty($this->getSession())) 
    {
      if(time() > $this->getExpires())
      {
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }
  }
}
?>
```

### authorizedResource.php

```php
<?php
  require __DIR__ . '/vendor/autoload.php';
  require_once('storage.php');

  // Storage Classe uses sessions for storing token > extend to your DB of choice
  $storage = new StorageClass();
  $xeroTenantId = (string)$storage->getSession()['tenant_id'];

  if ($storage->getHasExpired()) {
    $provider = new \League\OAuth2\Client\Provider\GenericProvider([
      'clientId'                => '__YOUR_CLIENT_ID__',   
      'clientSecret'            => '__YOUR_CLIENT_SECRET__',
      'redirectUri'             => '__YOUR_REDIRECT_URI__',  //same as at developer.xero.com/myapps
      'urlAuthorize'            => 'https://login.xero.com/identity/connect/authorize',
      'urlAccessToken'          => 'https://identity.xero.com/connect/token'
    ]);

    $newAccessToken = $provider->getAccessToken('refresh_token', [
      'refresh_token' => $storage->getRefreshToken()
    ]);
    
    // Save my token, expiration and refresh token
    $storage->setToken(
      $newAccessToken->getToken(),
      $newAccessToken->getExpires(), 
      $xeroTenantId,
      $newAccessToken->getRefreshToken()
    );
  }

  $config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken( (string)$storage->getSession()['token'] );
  $config->setHost("https://api.xero.com/api.xro/2.0");        

  $apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
      new GuzzleHttp\Client(),
      $config
  );

  // Get all Account
  $getAccountResponse = $apiInstance->getAccounts($xeroTenantId); 

  // Create Account
  $account = new XeroAPI\XeroPHP\Models\Accounting\Account;
  $account->setCode($this->getRandNum());
  $account->setName("Foo" . $this->getRandNum());
  $account->setType("EXPENSE");
  $account->setDescription("Hello World");  
  $createAccountResponse = $apiInstance->createAccount($xeroTenantId,$account);

?>
```


## License

This software is published under the [MIT License](http://en.wikipedia.org/wiki/MIT_License).

  Copyright (c) 2019 Xero Limited

  Permission is hereby granted, free of charge, to any person
  obtaining a copy of this software and associated documentation
  files (the "Software"), to deal in the Software without
  restriction, including without limitation the rights to use,
  copy, modify, merge, publish, distribute, sublicense, and/or sell
  copies of the Software, and to permit persons to whom the
  Software is furnished to do so, subject to the following
  conditions:

  The above copyright notice and this permission notice shall be
  included in all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
  EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
  OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
  NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
  HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
  WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
  FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
  OTHER DEALINGS IN THE SOFTWARE.


