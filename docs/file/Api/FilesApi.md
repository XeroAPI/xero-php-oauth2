# XeroAPI\XeroPHP\FilesApi

All URIs are relative to *https://api.xero.com/files.xro/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFileAssociation**](FilesApi.md#createFileAssociation) | **POST** /Files/{FileID}/Associations | Creates a new file association
[**createFolder**](FilesApi.md#createFolder) | **POST** /Folders | Creates a new folder
[**deleteFile**](FilesApi.md#deleteFile) | **DELETE** /Files/{FileID} | Deletes a specific file
[**deleteFileAssociation**](FilesApi.md#deleteFileAssociation) | **DELETE** /Files/{FileID}/Associations/{ObjectID} | Deletes an existing file association
[**deleteFolder**](FilesApi.md#deleteFolder) | **DELETE** /Folders/{FolderID} | Deletes a folder
[**getAssociationsByObject**](FilesApi.md#getAssociationsByObject) | **GET** /Associations/{ObjectID} | Retrieves an association object using a unique object ID
[**getFile**](FilesApi.md#getFile) | **GET** /Files/{FileID} | Retrieves a file by a unique file ID
[**getFileAssociations**](FilesApi.md#getFileAssociations) | **GET** /Files/{FileID}/Associations | Retrieves a specific file associations
[**getFileContent**](FilesApi.md#getFileContent) | **GET** /Files/{FileID}/Content | Retrieves the content of a specific file
[**getFiles**](FilesApi.md#getFiles) | **GET** /Files | Retrieves files
[**getFolder**](FilesApi.md#getFolder) | **GET** /Folders/{FolderID} | Retrieves specific folder by using a unique folder ID
[**getFolders**](FilesApi.md#getFolders) | **GET** /Folders | Retrieves folders
[**getInbox**](FilesApi.md#getInbox) | **GET** /Inbox | Retrieves inbox folder
[**updateFile**](FilesApi.md#updateFile) | **PUT** /Files/{FileID} | Update a file
[**updateFolder**](FilesApi.md#updateFolder) | **PUT** /Folders/{FolderID} | Updates an existing folder
[**uploadFile**](FilesApi.md#uploadFile) | **POST** /Files | Uploads a File


# **createFileAssociation**
> \XeroAPI\XeroPHP\Models\File\Association createFileAssociation($xero_tenant_id, $file_id, $association)

Creates a new file association

By passing in the appropriate options, you can create a new folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$file_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object
$association = new \XeroAPI\XeroPHP\Models\File\Association(); // \XeroAPI\XeroPHP\Models\File\Association | 

try {
    $result = $apiInstance->createFileAssociation($xero_tenant_id, $file_id, $association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFileAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **file_id** | [**string**](../Model/.md)| File id for single object |
 **association** | [**\XeroAPI\XeroPHP\Models\File\Association**](../Model/Association.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\File\Association**](../Model/Association.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFolder**
> \XeroAPI\XeroPHP\Models\File\Folder createFolder($xero_tenant_id, $folder)

Creates a new folder

By passing in the appropriate properties, you can create a new folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$folder = new \XeroAPI\XeroPHP\Models\File\Folder(); // \XeroAPI\XeroPHP\Models\File\Folder | 

try {
    $result = $apiInstance->createFolder($xero_tenant_id, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **folder** | [**\XeroAPI\XeroPHP\Models\File\Folder**](../Model/Folder.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\File\Folder**](../Model/Folder.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFile**
> \XeroAPI\XeroPHP\Models\File\FileResponse204 deleteFile($xero_tenant_id, $file_id)

Deletes a specific file

Delete a specific file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$file_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->deleteFile($xero_tenant_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **file_id** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\File\FileResponse204**](../Model/FileResponse204.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFileAssociation**
> \XeroAPI\XeroPHP\Models\File\FileResponse204 deleteFileAssociation($xero_tenant_id, $file_id, $object_id)

Deletes an existing file association

By passing in the appropriate options, you can create a new folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$file_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object
$object_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Object id for single object

try {
    $result = $apiInstance->deleteFileAssociation($xero_tenant_id, $file_id, $object_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFileAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **file_id** | [**string**](../Model/.md)| File id for single object |
 **object_id** | [**string**](../Model/.md)| Object id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\File\FileResponse204**](../Model/FileResponse204.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolder**
> \XeroAPI\XeroPHP\Models\File\FileResponse204 deleteFolder($xero_tenant_id, $folder_id)

Deletes a folder

By passing in the appropriate ID, you can delete a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$folder_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Folder id for single object

try {
    $result = $apiInstance->deleteFolder($xero_tenant_id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **folder_id** | [**string**](../Model/.md)| Folder id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\File\FileResponse204**](../Model/FileResponse204.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssociationsByObject**
> \XeroAPI\XeroPHP\Models\File\Association[] getAssociationsByObject($xero_tenant_id, $object_id)

Retrieves an association object using a unique object ID

By passing in the appropriate options,

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$object_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Object id for single object

try {
    $result = $apiInstance->getAssociationsByObject($xero_tenant_id, $object_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getAssociationsByObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **object_id** | [**string**](../Model/.md)| Object id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\File\Association[]**](../Model/Association.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFile**
> \XeroAPI\XeroPHP\Models\File\FileObject getFile($xero_tenant_id, $file_id)

Retrieves a file by a unique file ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$file_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->getFile($xero_tenant_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **file_id** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\File\FileObject**](../Model/FileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileAssociations**
> \XeroAPI\XeroPHP\Models\File\Association[] getFileAssociations($xero_tenant_id, $file_id)

Retrieves a specific file associations

By passing in the appropriate options,

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$file_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->getFileAssociations($xero_tenant_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileAssociations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **file_id** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\File\Association[]**](../Model/Association.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileContent**
> \SplFileObject getFileContent($xero_tenant_id, $file_id)

Retrieves the content of a specific file

By passing in the appropriate options, retrieve data for specific file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$file_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->getFileContent($xero_tenant_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **file_id** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFiles**
> \XeroAPI\XeroPHP\Models\File\Files getFiles($xero_tenant_id, $pagesize, $page, $sort)

Retrieves files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$pagesize = 50; // int | pass an optional page size value
$page = 2; // int | number of records to skip for pagination
$sort = CreatedDateUTC DESC; // string | values to sort by

try {
    $result = $apiInstance->getFiles($xero_tenant_id, $pagesize, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pagesize** | **int**| pass an optional page size value | [optional]
 **page** | **int**| number of records to skip for pagination | [optional]
 **sort** | **string**| values to sort by | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\File\Files**](../Model/Files.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolder**
> \XeroAPI\XeroPHP\Models\File\Folder getFolder($xero_tenant_id, $folder_id)

Retrieves specific folder by using a unique folder ID

By passing in the appropriate ID, you can search for specific folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$folder_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Folder id for single object

try {
    $result = $apiInstance->getFolder($xero_tenant_id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **folder_id** | [**string**](../Model/.md)| Folder id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\File\Folder**](../Model/Folder.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolders**
> \XeroAPI\XeroPHP\Models\File\Folder[] getFolders($xero_tenant_id, $sort)

Retrieves folders

By passing in the appropriate options, you can search for available folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$sort = CreatedDateUTC DESC; // string | values to sort by

try {
    $result = $apiInstance->getFolders($xero_tenant_id, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **sort** | **string**| values to sort by | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\File\Folder[]**](../Model/Folder.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInbox**
> \XeroAPI\XeroPHP\Models\File\Folder getInbox($xero_tenant_id)

Retrieves inbox folder

Search for the user inbox

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getInbox($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\File\Folder**](../Model/Folder.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFile**
> \XeroAPI\XeroPHP\Models\File\FileObject updateFile($xero_tenant_id, $file_id, $file_object)

Update a file

Updates file properties of a single file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$file_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object
$file_object = new \XeroAPI\XeroPHP\Models\File\FileObject(); // \XeroAPI\XeroPHP\Models\File\FileObject | 

try {
    $result = $apiInstance->updateFile($xero_tenant_id, $file_id, $file_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **file_id** | [**string**](../Model/.md)| File id for single object |
 **file_object** | [**\XeroAPI\XeroPHP\Models\File\FileObject**](../Model/FileObject.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\File\FileObject**](../Model/FileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFolder**
> \XeroAPI\XeroPHP\Models\File\Folder updateFolder($xero_tenant_id, $folder_id, $folder)

Updates an existing folder

By passing in the appropriate ID and properties, you can update a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$folder_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Folder id for single object
$folder = new \XeroAPI\XeroPHP\Models\File\Folder(); // \XeroAPI\XeroPHP\Models\File\Folder | 

try {
    $result = $apiInstance->updateFolder($xero_tenant_id, $folder_id, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **folder_id** | [**string**](../Model/.md)| Folder id for single object |
 **folder** | [**\XeroAPI\XeroPHP\Models\File\Folder**](../Model/Folder.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\File\Folder**](../Model/Folder.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \XeroAPI\XeroPHP\Models\File\FileObject uploadFile($xero_tenant_id, $folder_id, $body, $name, $filename, $mime_type)

Uploads a File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = YOUR_XERO_TENANT_ID; // string | Xero identifier for Tenant
$folder_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | pass an optional folder id to save file to specific folder
$body = 'body_example'; // string | 
$name = 'name_example'; // string | exact name of the file you are uploading
$filename = 'filename_example'; // string | 
$mime_type = 'mime_type_example'; // string | 

try {
    $result = $apiInstance->uploadFile($xero_tenant_id, $folder_id, $body, $name, $filename, $mime_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **folder_id** | [**string**](../Model/.md)| pass an optional folder id to save file to specific folder | [optional]
 **body** | **string**|  | [optional]
 **name** | **string**| exact name of the file you are uploading | [optional]
 **filename** | **string**|  | [optional]
 **mime_type** | **string**|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\File\FileObject**](../Model/FileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

