# XeroAPI\XeroPHP\PayrollAUApi

All URIs are relative to *https://api.xero.com/payroll.xro/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmployee**](PayrollAUApi.md#createEmployee) | **POST** /Employees | Use this method to create a payroll employee
[**createLeaveApplication**](PayrollAUApi.md#createLeaveApplication) | **POST** /LeaveApplications | Use this method to create a Leave Application
[**createPayItem**](PayrollAUApi.md#createPayItem) | **POST** /PayItems | Use this method to create a Pay Item
[**createPayRun**](PayrollAUApi.md#createPayRun) | **POST** /PayRuns | Use this method to create a PayRun
[**createPayrollCalendar**](PayrollAUApi.md#createPayrollCalendar) | **POST** /PayrollCalendars | Use this method to create a Payroll Calendars
[**createSuperfund**](PayrollAUApi.md#createSuperfund) | **POST** /Superfunds | Use this method to create a super fund
[**createTimesheet**](PayrollAUApi.md#createTimesheet) | **POST** /Timesheets | Use this method to create a timesheet
[**getEmployee**](PayrollAUApi.md#getEmployee) | **GET** /Employees/{EmployeeId} | searches for an employee by unique id
[**getEmployees**](PayrollAUApi.md#getEmployees) | **GET** /Employees | searches employees
[**getLeaveApplication**](PayrollAUApi.md#getLeaveApplication) | **GET** /LeaveApplications/{LeaveApplicationId} | searches for an Leave Application by unique id
[**getLeaveApplications**](PayrollAUApi.md#getLeaveApplications) | **GET** /LeaveApplications | searches Leave Applications
[**getPayItems**](PayrollAUApi.md#getPayItems) | **GET** /PayItems | searches Pay Items
[**getPayRun**](PayrollAUApi.md#getPayRun) | **GET** /PayRuns/{PayRunID} | searches for an payrun by unique id
[**getPayRuns**](PayrollAUApi.md#getPayRuns) | **GET** /PayRuns | searches PayRuns
[**getPayrollCalendar**](PayrollAUApi.md#getPayrollCalendar) | **GET** /PayrollCalendars/{PayrollCalendarID} | searches Payroll Calendars
[**getPayrollCalendars**](PayrollAUApi.md#getPayrollCalendars) | **GET** /PayrollCalendars | searches Payroll Calendars
[**getPayslip**](PayrollAUApi.md#getPayslip) | **GET** /Payslip/{PayslipID} | searches for an payslip by unique id
[**getSettings**](PayrollAUApi.md#getSettings) | **GET** /Settings | retrieve settings
[**getSuperfund**](PayrollAUApi.md#getSuperfund) | **GET** /Superfunds/{SuperFundID} | searches for an Superfund by unique id
[**getSuperfundProducts**](PayrollAUApi.md#getSuperfundProducts) | **GET** /SuperfundProducts | searches SuperfundProducts
[**getSuperfunds**](PayrollAUApi.md#getSuperfunds) | **GET** /Superfunds | searches SuperFunds
[**getTimesheet**](PayrollAUApi.md#getTimesheet) | **GET** /Timesheets/{TimesheetID} | searches for an timesheet by unique id
[**getTimesheets**](PayrollAUApi.md#getTimesheets) | **GET** /Timesheets | searches timesheets
[**updateEmployee**](PayrollAUApi.md#updateEmployee) | **POST** /Employees/{EmployeeId} | Update an Employee
[**updateLeaveApplication**](PayrollAUApi.md#updateLeaveApplication) | **POST** /LeaveApplications/{LeaveApplicationId} | Use this method to update a Leave Application
[**updatePayRun**](PayrollAUApi.md#updatePayRun) | **POST** /PayRuns/{PayRunID} | Update a PayRun
[**updatePayslipByID**](PayrollAUApi.md#updatePayslipByID) | **POST** /Payslip/{PayslipID} | Update a Payslip
[**updateSuperfund**](PayrollAUApi.md#updateSuperfund) | **POST** /Superfunds/{SuperFundID} | Update a Superfund
[**updateTimesheet**](PayrollAUApi.md#updateTimesheet) | **POST** /Timesheets/{TimesheetID} | Update a Timesheet


# **createEmployee**
> \XeroAPI\XeroPHP\Models\PayrollAu\Employees createEmployee($xero_tenant_id, $employee)

Use this method to create a payroll employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee = [ { "FirstName": "Albus", "LastName": "Dumbledore", "DateOfBirth": "/Date(321523200000+0000)/", "HomeAddress": { "AddressLine1": "101 Green St", "City": "Island Bay", "Region": "NSW", "PostalCode": "6023", "Country": "AUSTRALIA" }, "StartDate": "/Date(321523200000+0000)/", "MiddleNames": "Percival", "Email": "albus39608@hogwarts.edu", "Gender": "M", "Phone": "444-2323", "Mobile": "555-1212", "IsAuthorisedToApproveLeave": true, "IsAuthorisedToApproveTimesheets": true, "JobTitle": "Regional Manager", "Classification": "corporate", "OrdinaryEarningsRateID": "ab874dfb-ab09-4c91-954e-43acf6fc23b4", "Status": "ACTIVE" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\Employee[] | 

try {
    $result = $apiInstance->createEmployee($xero_tenant_id, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee** | [**\XeroAPI\XeroPHP\Models\PayrollAu\Employee[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLeaveApplication**
> \XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications createLeaveApplication($xero_tenant_id, $leave_application)

Use this method to create a Leave Application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$leave_application = [ { "EmployeeID": "cdfb8371-0b21-4b8a-8903-1024df6c391e", "LeaveTypeID": "184ea8f7-d143-46dd-bef3-0c60e1aa6fca", "Title": "Hello World", "StartDate": "/Date(1572559200000+0000)/", "EndDate": "/Date(1572645600000+0000)/" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplication[] | 

try {
    $result = $apiInstance->createLeaveApplication($xero_tenant_id, $leave_application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createLeaveApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **leave_application** | [**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplication[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayItem**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayItems createPayItem($xero_tenant_id, $pay_item)

Use this method to create a Pay Item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_item = [ { "EarningsRates": [ { "Name": "MyRate", "AccountCode": "400", "TypeOfUnits": "4.00", "IsExemptFromTax": true, "IsExemptFromSuper": true, "IsReportableAsW1": false, "EarningsType": "FIXED", "EarningsRateID": "ab874dfb-ab09-4c91-954e-43acf6fc23b4", "RateType": "FIXEDAMOUNT", "RatePerUnit": "10.0", "Multiplier": 1.5, "AccrueLeave": 1, "Amount": 5, "EmploymentTerminationPaymentType": "O" } ], "DeductionTypes": [ { "Name": "My Deduction", "AccountCode": "400" } ] } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\PayItem[] | 

try {
    $result = $apiInstance->createPayItem($xero_tenant_id, $pay_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createPayItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_item** | [**\XeroAPI\XeroPHP\Models\PayrollAu\PayItem[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayItems**](../Model/PayItems.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayRun**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayRuns createPayRun($xero_tenant_id, $pay_run)

Use this method to create a PayRun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run = [ { "PayrollCalendarID": "78bb86b9-e1ea-47ac-b75d-f087a81931de", "PayRunPeriodStartDate": "/Date(1572566400000+0000)/", "PayRunPeriodEndDate": "/Date(1573084800000+0000)/", "PayRunStatus": "DRAFT", "PaymentDate": "/Date(1573171200000+0000)/" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\PayRun[] | 

try {
    $result = $apiInstance->createPayRun($xero_tenant_id, $pay_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createPayRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run** | [**\XeroAPI\XeroPHP\Models\PayrollAu\PayRun[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayRuns**](../Model/PayRuns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayrollCalendar**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendars createPayrollCalendar($xero_tenant_id, $payroll_calendar)

Use this method to create a Payroll Calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payroll_calendar = [ { "PayrollCalendarID":"78bb86b9-e1ea-47ac-b75d-f087a81931de", "PayRunPeriodStartDate":"/Date(1572566400000+0000)/", "PayRunPeriodEndDate":"/Date(1573084800000+0000)/", "PayRunStatus":"DRAFT", "PaymentDate":"/Date(1573171200000+0000)/" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendar[] | 

try {
    $result = $apiInstance->createPayrollCalendar($xero_tenant_id, $payroll_calendar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createPayrollCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payroll_calendar** | [**\XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendar[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendars**](../Model/PayrollCalendars.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSuperfund**
> \XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds createSuperfund($xero_tenant_id, $super_fund)

Use this method to create a super fund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$super_fund = [ { "usi":"PTC0133AU", "Type":"REGULATED", "Name":"Bar99359", "AccountNumber":"FB36350", "AccountName":"Foo38428", "USI":"PTC0133AU" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\SuperFund[] | 

try {
    $result = $apiInstance->createSuperfund($xero_tenant_id, $super_fund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createSuperfund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **super_fund** | [**\XeroAPI\XeroPHP\Models\PayrollAu\SuperFund[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds**](../Model/SuperFunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollAu\Timesheets createTimesheet($xero_tenant_id, $timesheet)

Use this method to create a timesheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet = [ { "EmployeeID":"b34e89ff-770d-4099-b7e5-f968767118bc", "StartDate":"/Date(1573171200000+0000)/", "EndDate":"/Date(1573689600000+0000)/", "Status":"DRAFT", "TimesheetLines":[ { "EarningsRateID":"ab874dfb-ab09-4c91-954e-43acf6fc23b4", "TrackingItemID":"af5e9ce2-2349-4136-be99-3561b189f473", "NumberOfUnits":[ 2.0, 10.0, 0.0, 0.0, 5.0, 0.0, 5.0 ] } ] } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\Timesheet[] | 

try {
    $result = $apiInstance->createTimesheet($xero_tenant_id, $timesheet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet** | [**\XeroAPI\XeroPHP\Models\PayrollAu\Timesheet[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployee**
> \XeroAPI\XeroPHP\Models\PayrollAu\Employees getEmployee($xero_tenant_id, $employee_id)

searches for an employee by unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployee($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployees**
> \XeroAPI\XeroPHP\Models\PayrollAu\Employees getEmployees($xero_tenant_id, $if_modified_since, $where, $order, $page)

searches employees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = 'if_modified_since_example'; // string | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 employees will be returned in a single API call

try {
    $result = $apiInstance->getEmployees($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 employees will be returned in a single API call | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaveApplication**
> \XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications getLeaveApplication($xero_tenant_id, $leave_application_id)

searches for an Leave Application by unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$leave_application_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Leave Application id for single object

try {
    $result = $apiInstance->getLeaveApplication($xero_tenant_id, $leave_application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getLeaveApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **leave_application_id** | [**string**](../Model/.md)| Leave Application id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaveApplications**
> \XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications getLeaveApplications($xero_tenant_id, $if_modified_since, $where, $order, $page)

searches Leave Applications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = 'if_modified_since_example'; // string | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 objects will be returned in a single API call

try {
    $result = $apiInstance->getLeaveApplications($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getLeaveApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 objects will be returned in a single API call | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayItems**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayItems getPayItems($xero_tenant_id, $if_modified_since, $where, $order, $page)

searches Pay Items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = 'if_modified_since_example'; // string | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 objects will be returned in a single API call

try {
    $result = $apiInstance->getPayItems($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 objects will be returned in a single API call | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayItems**](../Model/PayItems.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayRun**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayRuns getPayRun($xero_tenant_id, $pay_run_id)

searches for an payrun by unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | PayRun id for single object

try {
    $result = $apiInstance->getPayRun($xero_tenant_id, $pay_run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run_id** | [**string**](../Model/.md)| PayRun id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayRuns**](../Model/PayRuns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayRuns**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayRuns getPayRuns($xero_tenant_id, $if_modified_since, $where, $order, $page)

searches PayRuns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = 'if_modified_since_example'; // string | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 PayRuns will be returned in a single API call

try {
    $result = $apiInstance->getPayRuns($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 PayRuns will be returned in a single API call | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayRuns**](../Model/PayRuns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayrollCalendar**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendars getPayrollCalendar($xero_tenant_id, $payroll_calendar_id)

searches Payroll Calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payroll_calendar_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payroll Calendar id for single object

try {
    $result = $apiInstance->getPayrollCalendar($xero_tenant_id, $payroll_calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayrollCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payroll_calendar_id** | [**string**](../Model/.md)| Payroll Calendar id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendars**](../Model/PayrollCalendars.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayrollCalendars**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendars getPayrollCalendars($xero_tenant_id, $if_modified_since, $where, $order, $page)

searches Payroll Calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = 'if_modified_since_example'; // string | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 objects will be returned in a single API call

try {
    $result = $apiInstance->getPayrollCalendars($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayrollCalendars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 objects will be returned in a single API call | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayrollCalendars**](../Model/PayrollCalendars.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayslip**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayslipObject getPayslip($xero_tenant_id, $payslip_id)

searches for an payslip by unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payslip_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payslip id for single object

try {
    $result = $apiInstance->getPayslip($xero_tenant_id, $payslip_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayslip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payslip_id** | [**string**](../Model/.md)| Payslip id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayslipObject**](../Model/PayslipObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettings**
> \XeroAPI\XeroPHP\Models\PayrollAu\SettingsObject getSettings($xero_tenant_id)

retrieve settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getSettings($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\SettingsObject**](../Model/SettingsObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuperfund**
> \XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds getSuperfund($xero_tenant_id, $super_fund_id)

searches for an Superfund by unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$super_fund_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Superfund id for single object

try {
    $result = $apiInstance->getSuperfund($xero_tenant_id, $super_fund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSuperfund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **super_fund_id** | [**string**](../Model/.md)| Superfund id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds**](../Model/SuperFunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuperfundProducts**
> \XeroAPI\XeroPHP\Models\PayrollAu\SuperFundProducts getSuperfundProducts($xero_tenant_id, $abn, $usi)

searches SuperfundProducts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$abn = 40022701955; // string | The ABN of the Regulated SuperFund
$usi = OSF0001AU; // string | The USI of the Regulated SuperFund

try {
    $result = $apiInstance->getSuperfundProducts($xero_tenant_id, $abn, $usi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSuperfundProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **abn** | **string**| The ABN of the Regulated SuperFund | [optional]
 **usi** | **string**| The USI of the Regulated SuperFund | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\SuperFundProducts**](../Model/SuperFundProducts.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuperfunds**
> \XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds getSuperfunds($xero_tenant_id, $if_modified_since, $where, $order, $page)

searches SuperFunds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = 'if_modified_since_example'; // string | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 SuperFunds will be returned in a single API call

try {
    $result = $apiInstance->getSuperfunds($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSuperfunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 SuperFunds will be returned in a single API call | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds**](../Model/SuperFunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollAu\TimesheetObject getTimesheet($xero_tenant_id, $timesheet_id)

searches for an timesheet by unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Timesheet id for single object

try {
    $result = $apiInstance->getTimesheet($xero_tenant_id, $timesheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Timesheet id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\TimesheetObject**](../Model/TimesheetObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimesheets**
> \XeroAPI\XeroPHP\Models\PayrollAu\Timesheets getTimesheets($xero_tenant_id, $if_modified_since, $where, $order, $page)

searches timesheets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = 'if_modified_since_example'; // string | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 timesheets will be returned in a single API call

try {
    $result = $apiInstance->getTimesheets($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 timesheets will be returned in a single API call | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployee**
> \XeroAPI\XeroPHP\Models\PayrollAu\Employees updateEmployee($xero_tenant_id, $employee_id, $employee)

Update an Employee

Update properties on a single employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employee = [ { "MiddleNames": "Frank" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\Employee[] | 

try {
    $result = $apiInstance->updateEmployee($xero_tenant_id, $employee_id, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **employee** | [**\XeroAPI\XeroPHP\Models\PayrollAu\Employee[]**](../Model/array.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLeaveApplication**
> \XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications updateLeaveApplication($xero_tenant_id, $leave_application_id, $leave_application)

Use this method to update a Leave Application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$leave_application_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Leave Application id for single object
$leave_application = [ { "EmployeeID": "cdfb8371-0b21-4b8a-8903-1024df6c391e", "LeaveTypeID": "184ea8f7-d143-46dd-bef3-0c60e1aa6fca", "StartDate": "/Date(1572559200000+0000)/", "EndDate": "/Date(1572645600000+0000)/", "Description": "My updated Description" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplication[] | 

try {
    $result = $apiInstance->updateLeaveApplication($xero_tenant_id, $leave_application_id, $leave_application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateLeaveApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **leave_application_id** | [**string**](../Model/.md)| Leave Application id for single object |
 **leave_application** | [**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplication[]**](../Model/array.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayRun**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayRuns updatePayRun($xero_tenant_id, $pay_run_id, $pay_run)

Update a PayRun

Update properties on a single PayRun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | PayRun id for single object
$pay_run = array(new \XeroAPI\XeroPHP\Models\PayrollAu\array()); // \XeroAPI\XeroPHP\Models\PayrollAu\PayRun[] | 

try {
    $result = $apiInstance->updatePayRun($xero_tenant_id, $pay_run_id, $pay_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updatePayRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run_id** | [**string**](../Model/.md)| PayRun id for single object |
 **pay_run** | [**\XeroAPI\XeroPHP\Models\PayrollAu\PayRun[]**](../Model/array.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayRuns**](../Model/PayRuns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayslipByID**
> \XeroAPI\XeroPHP\Models\PayrollAu\PayslipObject updatePayslipByID($xero_tenant_id, $payslip_id, $payslip_object)

Update a Payslip

Update lines on a single payslips

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payslip_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payslip id for single object
$payslip_object = { "Payslip": { "EmployeeID": "cdfb8371-0b21-4b8a-8903-1024df6c391e", "DeductionLines": [ { "DeductionTypeID": "727af5e8-b347-4ae7-85fc-9b82266d0aec", "CalculationType": "FIXEDAMOUNT", "NumberOfUnits": 10 } ] } }; // \XeroAPI\XeroPHP\Models\PayrollAu\PayslipObject | 

try {
    $result = $apiInstance->updatePayslipByID($xero_tenant_id, $payslip_id, $payslip_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updatePayslipByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payslip_id** | [**string**](../Model/.md)| Payslip id for single object |
 **payslip_object** | [**\XeroAPI\XeroPHP\Models\PayrollAu\PayslipObject**](../Model/PayslipObject.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\PayslipObject**](../Model/PayslipObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSuperfund**
> \XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds updateSuperfund($xero_tenant_id, $super_fund_id, $super_fund)

Update a Superfund

Update properties on a single Superfund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$super_fund_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Superfund id for single object
$super_fund =  [ { "Type":"REGULATED", "Name":"Nice23534" } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\SuperFund[] | 

try {
    $result = $apiInstance->updateSuperfund($xero_tenant_id, $super_fund_id, $super_fund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateSuperfund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **super_fund_id** | [**string**](../Model/.md)| Superfund id for single object |
 **super_fund** | [**\XeroAPI\XeroPHP\Models\PayrollAu\SuperFund[]**](../Model/array.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\SuperFunds**](../Model/SuperFunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollAu\Timesheets updateTimesheet($xero_tenant_id, $timesheet_id, $timesheet)

Update a Timesheet

Update properties on a single timesheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Timesheet id for single object
$timesheet = [ { "EmployeeID":"b34e89ff-770d-4099-b7e5-f968767118bc", "StartDate":"/Date(1573171200000+0000)/", "EndDate":"/Date(1573689600000+0000)/", "Status":"APPROVED", "Hours":22.0, "TimesheetID":"a7eb0a79-8511-4ee7-b473-3a25f28abcb9", "TimesheetLines":[ { "EarningsRateID":"ab874dfb-ab09-4c91-954e-43acf6fc23b4", "TrackingItemID":"af5e9ce2-2349-4136-be99-3561b189f473", "NumberOfUnits":[ 2.0, 10.0, 0.0, 0.0, 5.0, 0.0, 5.0 ], "UpdatedDateUTC":"/Date(1573516185127+0000)/" } ] } ]; // \XeroAPI\XeroPHP\Models\PayrollAu\Timesheet[] | 

try {
    $result = $apiInstance->updateTimesheet($xero_tenant_id, $timesheet_id, $timesheet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Timesheet id for single object |
 **timesheet** | [**\XeroAPI\XeroPHP\Models\PayrollAu\Timesheet[]**](../Model/array.md)|  | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollAu\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

