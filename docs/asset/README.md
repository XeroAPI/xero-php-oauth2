# xero-php-oauth2

## Documentations

Please follow the [README instructions](https://github.com/XeroAPI/xero-php-oauth2/blob/master/README.md) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

  // Init your oAuth2 provider
  $provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => '__YOUR_CLIENT_ID__',   
    'clientSecret'            => '__YOUR_CLIENT_SECRET__',
    'redirectUri'             => '__YOUR_REDIRECT_URI__',  //same as at developer.xero.com/myapps
    'urlAuthorize'            => 'https://login.xero.com/identity/connect/authorize',
    'urlAccessToken'          => 'https://identity.xero.com/connect/token'
  ]);


  // Configure OAuth2 access token for authorization: OAuth2
  $config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
  
  $config->setHost("https://api.xero.com/assets.xro/1.0");        

  $apiInstance = new XeroAPI\XeroPHP\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
  );


  $xeroTenantId = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

  // \XeroAPI\XeroPHP\Models\Accounting\Account | Request of type Account
  $account = new XeroAPI\XeroPHP\Models\Accounting\Account;
  $account->setCode($this->getRandNum());
  $account->setName("Foo" . $this->getRandNum());
  $account->setType("EXPENSE");
  $account->setDescription("Hello World");  

  try {
      $result = $apiInstance->createAccount($xero_tenant_id, $account);
      print_r($result);
  } catch (Exception $e) {
      echo 'Exception when calling AccountingApi->createAccount: ', $e->getMessage(), PHP_EOL;
  }

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.xero.com/assets.xro/1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssetApi* | [**createAsset**](Api/AssetApi.md#createasset) | **POST** /Assets | adds a fixed asset
*AssetApi* | [**createAssetType**](Api/AssetApi.md#createassettype) | **POST** /AssetTypes | adds a fixed asset type
*AssetApi* | [**getAssetById**](Api/AssetApi.md#getassetbyid) | **GET** /Assets/{id} | retrieves fixed asset by id
*AssetApi* | [**getAssetSettings**](Api/AssetApi.md#getassetsettings) | **GET** /Settings | searches fixed asset settings
*AssetApi* | [**getAssetTypes**](Api/AssetApi.md#getassettypes) | **GET** /AssetTypes | searches fixed asset types
*AssetApi* | [**getAssets**](Api/AssetApi.md#getassets) | **GET** /Assets | searches fixed asset


## Documentation For Models

 - [Asset](Model/Asset.md)
 - [AssetType](Model/AssetType.md)
 - [Assets](Model/Assets.md)
 - [BookDepreciationDetail](Model/BookDepreciationDetail.md)
 - [BookDepreciationSetting](Model/BookDepreciationSetting.md)
 - [Pagination](Model/Pagination.md)
 - [Setting](Model/Setting.md)


## Documentation For Authorization


## OAuth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://login.xero.com/identity/connect/authorize
- **Scopes**: 
 - **email**: Grant read-only access to your email
 - **openid**: Grant read-only access to your open id
 - **profile**: your profile information
 - **accounting.transactions**: Grant read-write access to bank transactions, credit notes, invoices, repeating invoices
 - **accounting.transactions.read**: Grant read-only access to invoices
 - **accounting.reports.read**: Grant read-only access to accounting reports
 - **accounting.journals.read**: Grant read-only access to journals
 - **accounting.settings**: Grant read-write access to organisation and account settings
 - **accounting.settings.read**: Grant read-only access to organisation and account settings
 - **accounting.contacts**: Grant read-write access to contacts and contact groups
 - **accounting.contacts.read**: Grant read-only access to contacts and contact groups
 - **accounting.attachments**: Grant read-write access to attachments
 - **accounting.attachments.read**: Grant read-only access to attachments
 - **assets assets.read**: Grant read-only access to fixed assets
 - **bankfeeds**: Grant read-write access to bankfeeds
 - **files**: Grant read-write access to files and folders
 - **files.read**: Grant read-only access to files and folders
 - **payroll**: Grant read-write access to payroll
 - **payroll.read**: Grant read-only access to payroll
 - **payroll.employees**: Grant read-write access to payroll employees
 - **payroll.employees.read**: Grant read-only access to payroll employees
 - **payroll.leaveapplications**: Grant read-write access to payroll leaveapplications
 - **payroll.leaveapplications.read**: Grant read-only access to payroll leaveapplications
 - **payroll.payitems**: Grant read-write access to payroll payitems
 - **payroll.payitems.read**: Grant read-only access to payroll payitems
 - **payroll.payrollcalendars**: Grant read-write access to payroll calendars
 - **payroll.payrollcalendars.read**: Grant read-only access to payroll calendars
 - **payroll.payruns**: Grant read-write access to payroll payruns
 - **payroll.payruns.read**: Grant read-only access to payroll payruns
 - **payroll.payslip**: Grant read-write access to payroll payslips
 - **payroll.payslip.read**: Grant read-only access to payroll payslips
 - **payroll.settings.read**: Grant read-only access to payroll settings
 - **payroll.superfunds**: Grant read-write access to payroll superfunds
 - **payroll.superfunds.read**: Grant read-only access to payroll superfunds
 - **payroll.superfundproducts.read**: Grant read-only access to payroll superfundproducts
 - **payroll.timesheets**: Grant read-write access to payroll timesheets
 - **payroll.timesheets.read**: Grant read-only access to payroll timesheets
 - **paymentservices**: Grant read-write access to payment services
 - **projects**: Grant read-write access to projects
 - **projects.read**: Grant read-only access to projects


## Author

api@xero.com


