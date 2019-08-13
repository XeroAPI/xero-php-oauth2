# SidneyAllen\XeroPHP\IdentityApi

All URIs are relative to *https://api.xero.com/api.xro/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConnections**](IdentityApi.md#getConnections) | **GET** /connections | Allows you to retrieve the connections for this users
[**refreshToken**](IdentityApi.md#refreshToken) | **POST** /connect/token | Allows you to refresh your access token


# **getConnections**
> \SidneyAllen\XeroPHP\Models\Identity\Connection[] getConnections()

Allows you to retrieve the connections for this users

Override the base server url that include version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConnections();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->getConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SidneyAllen\XeroPHP\Models\Identity\Connection[]**](../Model/Connection.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshToken**
> \SidneyAllen\XeroPHP\Models\Identity\AccessToken refreshToken($grant_type, $grant_type, $refresh_token, $client_id, $client_secret)

Allows you to refresh your access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = SidneyAllen\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SidneyAllen\XeroPHP\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = 'grant_type_example'; // string | the grant type for token
$grant_type = 'grant_type_example'; // string | Xero grant type
$refresh_token = 'refresh_token_example'; // string | refresh token provided during authentication flow
$client_id = 'client_id_example'; // string | client id for Xero app
$client_secret = 'client_secret_example'; // string | client secret for Xero app 2

try {
    $result = $apiInstance->refreshToken($grant_type, $grant_type, $refresh_token, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| the grant type for token | [optional]
 **grant_type** | **string**| Xero grant type | [optional]
 **refresh_token** | **string**| refresh token provided during authentication flow | [optional]
 **client_id** | **string**| client id for Xero app | [optional]
 **client_secret** | **string**| client secret for Xero app 2 | [optional]

### Return type

[**\SidneyAllen\XeroPHP\Models\Identity\AccessToken**](../Model/AccessToken.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

