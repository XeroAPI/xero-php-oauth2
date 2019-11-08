# XeroAPI\XeroPHP\IdentityApi

All URIs are relative to *https://api.xero.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConnections**](IdentityApi.md#getConnections) | **GET** /connections | Allows you to retrieve the connections for this users


# **getConnections**
> \XeroAPI\XeroPHP\Models\Identity\Connection[] getConnections()

Allows you to retrieve the connections for user

Override the base server url that include version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$accessToken = '';

$config = \XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken( (string)$accessToken );

$config->setHost('https://api.xero.com');

$apiInstance = new XeroAPI\XeroPHP\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new \GuzzleHttp\Client(),
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

[**\XeroAPI\XeroPHP\Models\Identity\Connection[]**](../Model/Connection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

