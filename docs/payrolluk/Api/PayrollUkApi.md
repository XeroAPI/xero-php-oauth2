# XeroAPI\XeroPHP\PayrollUkApi

All URIs are relative to *https://api.xero.com/payroll.xro/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveTimesheet**](PayrollUkApi.md#approveTimesheet) | **POST** /Timesheets/{TimesheetID}/Approve | approve a timesheet
[**createBenefit**](PayrollUkApi.md#createBenefit) | **POST** /Benefits | create a new benefit
[**createDeduction**](PayrollUkApi.md#createDeduction) | **POST** /Deductions | create a new deduction
[**createEarningsRate**](PayrollUkApi.md#createEarningsRate) | **POST** /EarningsRates | create a new earnings rate
[**createEmployee**](PayrollUkApi.md#createEmployee) | **POST** /Employees | creates employees
[**createEmployeeEarningsTemplate**](PayrollUkApi.md#createEmployeeEarningsTemplate) | **POST** /Employees/{EmployeeId}/PayTemplates/earnings | creates employee earnings template records
[**createEmployeeLeave**](PayrollUkApi.md#createEmployeeLeave) | **POST** /Employees/{EmployeeId}/Leave | creates employee leave records
[**createEmployeeLeaveType**](PayrollUkApi.md#createEmployeeLeaveType) | **POST** /Employees/{EmployeeId}/LeaveTypes | creates employee leave type records
[**createEmployeeOpeningBalances**](PayrollUkApi.md#createEmployeeOpeningBalances) | **POST** /Employees/{EmployeeId}/ukopeningbalances | creates employee opening balances
[**createEmployeePaymentMethod**](PayrollUkApi.md#createEmployeePaymentMethod) | **POST** /Employees/{EmployeeId}/PaymentMethods | creates employee payment method
[**createEmployeeSalaryAndWage**](PayrollUkApi.md#createEmployeeSalaryAndWage) | **POST** /Employees/{EmployeeId}/SalaryAndWages | creates employee salary and wage record
[**createEmployeeStatutorySickLeave**](PayrollUkApi.md#createEmployeeStatutorySickLeave) | **POST** /StatutoryLeaves/Sick | creates employee statutory sick leave records
[**createEmployment**](PayrollUkApi.md#createEmployment) | **POST** /Employees/{EmployeeId}/Employment | creates employment
[**createLeaveType**](PayrollUkApi.md#createLeaveType) | **POST** /LeaveTypes | create a new leave type
[**createMultipleEmployeeEarningsTemplate**](PayrollUkApi.md#createMultipleEmployeeEarningsTemplate) | **POST** /Employees/{EmployeeId}/paytemplateearnings | creates multiple employee earnings template records
[**createPayRunCalendar**](PayrollUkApi.md#createPayRunCalendar) | **POST** /PayRunCalendars | create a new payrun calendar
[**createReimbursement**](PayrollUkApi.md#createReimbursement) | **POST** /Reimbursements | create a new reimbursement
[**createTimesheet**](PayrollUkApi.md#createTimesheet) | **POST** /Timesheets | create a new timesheet
[**createTimesheetLine**](PayrollUkApi.md#createTimesheetLine) | **POST** /Timesheets/{TimesheetID}/Lines | create a new timesheet line
[**deleteEmployeeEarningsTemplate**](PayrollUkApi.md#deleteEmployeeEarningsTemplate) | **DELETE** /Employees/{EmployeeId}/PayTemplates/earnings/{PayTemplateEarningID} | deletes an employee earnings template record
[**deleteEmployeeLeave**](PayrollUkApi.md#deleteEmployeeLeave) | **DELETE** /Employees/{EmployeeId}/Leave/{LeaveID} | deletes an employee leave record
[**deleteEmployeeSalaryAndWage**](PayrollUkApi.md#deleteEmployeeSalaryAndWage) | **DELETE** /Employees/{EmployeeId}/SalaryAndWages/{SalaryAndWagesID} | deletes an employee salary and wages record
[**deleteTimesheet**](PayrollUkApi.md#deleteTimesheet) | **DELETE** /Timesheets/{TimesheetID} | delete a timesheet
[**deleteTimesheetLine**](PayrollUkApi.md#deleteTimesheetLine) | **DELETE** /Timesheets/{TimesheetID}/Lines/{TimesheetLineID} | delete a timesheet line
[**getBenefit**](PayrollUkApi.md#getBenefit) | **GET** /Benefits/{id} | retrieve a single benefit by id
[**getBenefits**](PayrollUkApi.md#getBenefits) | **GET** /Benefits | searches benefits
[**getDeduction**](PayrollUkApi.md#getDeduction) | **GET** /Deductions/{deductionId} | retrieve a single deduction by id
[**getDeductions**](PayrollUkApi.md#getDeductions) | **GET** /Deductions | searches deductions
[**getEarningsOrder**](PayrollUkApi.md#getEarningsOrder) | **GET** /EarningsOrders/{id} | retrieve a single deduction by id
[**getEarningsOrders**](PayrollUkApi.md#getEarningsOrders) | **GET** /EarningsOrders | searches earnings orders
[**getEarningsRate**](PayrollUkApi.md#getEarningsRate) | **GET** /EarningsRates/{EarningsRateID} | retrieve a single earnings rates by id
[**getEarningsRates**](PayrollUkApi.md#getEarningsRates) | **GET** /EarningsRates | searches earnings rates
[**getEmployee**](PayrollUkApi.md#getEmployee) | **GET** /Employees/{EmployeeId} | searches employees
[**getEmployeeLeave**](PayrollUkApi.md#getEmployeeLeave) | **GET** /Employees/{EmployeeId}/Leave/{LeaveID} | retrieve a single employee leave record
[**getEmployeeLeaveBalances**](PayrollUkApi.md#getEmployeeLeaveBalances) | **GET** /Employees/{EmployeeId}/LeaveBalances | search employee leave balances
[**getEmployeeLeavePeriods**](PayrollUkApi.md#getEmployeeLeavePeriods) | **GET** /Employees/{EmployeeId}/LeavePeriods | searches employee leave periods
[**getEmployeeLeaveTypes**](PayrollUkApi.md#getEmployeeLeaveTypes) | **GET** /Employees/{EmployeeId}/LeaveTypes | searches employee leave types
[**getEmployeeLeaves**](PayrollUkApi.md#getEmployeeLeaves) | **GET** /Employees/{EmployeeId}/Leave | search employee leave records
[**getEmployeeOpeningBalances**](PayrollUkApi.md#getEmployeeOpeningBalances) | **GET** /Employees/{EmployeeId}/ukopeningbalances | retrieve employee openingbalances
[**getEmployeePayTemplate**](PayrollUkApi.md#getEmployeePayTemplate) | **GET** /Employees/{EmployeeId}/PayTemplates | searches employee pay templates
[**getEmployeePaymentMethod**](PayrollUkApi.md#getEmployeePaymentMethod) | **GET** /Employees/{EmployeeId}/PaymentMethods | retrieves an employee&#39;s payment method
[**getEmployeeSalaryAndWage**](PayrollUkApi.md#getEmployeeSalaryAndWage) | **GET** /Employees/{EmployeeId}/SalaryAndWages/{SalaryAndWagesID} | get employee salary and wages record by id
[**getEmployeeSalaryAndWages**](PayrollUkApi.md#getEmployeeSalaryAndWages) | **GET** /Employees/{EmployeeId}/SalaryAndWages | retrieves an employee&#39;s salary and wages
[**getEmployeeStatutoryLeaveBalances**](PayrollUkApi.md#getEmployeeStatutoryLeaveBalances) | **GET** /Employees/{EmployeeId}/StatutoryLeaveBalance | search employee leave balances
[**getEmployeeStatutorySickLeave**](PayrollUkApi.md#getEmployeeStatutorySickLeave) | **GET** /StatutoryLeaves/Sick/{StatutorySickLeaveID} | retrieve a statutory sick leave for an employee
[**getEmployeeTax**](PayrollUkApi.md#getEmployeeTax) | **GET** /Employees/{EmployeeId}/Tax | searches tax records for an employee
[**getEmployees**](PayrollUkApi.md#getEmployees) | **GET** /Employees | searches employees
[**getLeaveType**](PayrollUkApi.md#getLeaveType) | **GET** /LeaveTypes/{LeaveTypeID} | retrieve a single leave type by id
[**getLeaveTypes**](PayrollUkApi.md#getLeaveTypes) | **GET** /LeaveTypes | searches leave types
[**getPayRun**](PayrollUkApi.md#getPayRun) | **GET** /PayRuns/{PayRunID} | retrieve a single pay run by id
[**getPayRunCalendar**](PayrollUkApi.md#getPayRunCalendar) | **GET** /PayRunCalendars/{PayRunCalendarID} | retrieve a single payrun calendar by id
[**getPayRunCalendars**](PayrollUkApi.md#getPayRunCalendars) | **GET** /PayRunCalendars | searches payrun calendars
[**getPayRuns**](PayrollUkApi.md#getPayRuns) | **GET** /PayRuns | searches pay runs
[**getPaySlip**](PayrollUkApi.md#getPaySlip) | **GET** /Payslips/{PayslipID} | retrieve a single payslip by id
[**getPaySlips**](PayrollUkApi.md#getPaySlips) | **GET** /Payslips | searches payslips
[**getReimbursement**](PayrollUkApi.md#getReimbursement) | **GET** /Reimbursements/{ReimbursementID} | retrieve a single reimbursement by id
[**getReimbursements**](PayrollUkApi.md#getReimbursements) | **GET** /Reimbursements | searches reimbursements
[**getSettings**](PayrollUkApi.md#getSettings) | **GET** /Settings | searches settings
[**getStatutoryLeaveSummary**](PayrollUkApi.md#getStatutoryLeaveSummary) | **GET** /statutoryleaves/summary/{EmployeeId} | retrieve a summary of statutory leaves for an employee
[**getTimesheet**](PayrollUkApi.md#getTimesheet) | **GET** /Timesheets/{TimesheetID} | retrieve a single timesheet by id
[**getTimesheets**](PayrollUkApi.md#getTimesheets) | **GET** /Timesheets | searches timesheets
[**getTrackingCategories**](PayrollUkApi.md#getTrackingCategories) | **GET** /settings/trackingCategories | searches tracking categories
[**revertTimesheet**](PayrollUkApi.md#revertTimesheet) | **POST** /Timesheets/{TimesheetID}/RevertToDraft | revert a timesheet to draft
[**updateEmployee**](PayrollUkApi.md#updateEmployee) | **PUT** /Employees/{EmployeeId} | updates employee
[**updateEmployeeEarningsTemplate**](PayrollUkApi.md#updateEmployeeEarningsTemplate) | **PUT** /Employees/{EmployeeId}/PayTemplates/earnings/{PayTemplateEarningID} | updates employee earnings template records
[**updateEmployeeLeave**](PayrollUkApi.md#updateEmployeeLeave) | **PUT** /Employees/{EmployeeId}/Leave/{LeaveID} | updates employee leave records
[**updateEmployeeOpeningBalances**](PayrollUkApi.md#updateEmployeeOpeningBalances) | **PUT** /Employees/{EmployeeId}/ukopeningbalances | updates employee opening balances
[**updateEmployeeSalaryAndWage**](PayrollUkApi.md#updateEmployeeSalaryAndWage) | **PUT** /Employees/{EmployeeId}/SalaryAndWages/{SalaryAndWagesID} | updates employee salary and wages record
[**updatePayRun**](PayrollUkApi.md#updatePayRun) | **PUT** /PayRuns/{PayRunID} | update a pay run
[**updateTimesheetLine**](PayrollUkApi.md#updateTimesheetLine) | **PUT** /Timesheets/{TimesheetID}/Lines/{TimesheetLineID} | update a timesheet line


# **approveTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject approveTimesheet($xero_tenant_id, $timesheet_id)

approve a timesheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 'timesheet_id_example'; // string | Identifier for the timesheet

try {
    $result = $apiInstance->approveTimesheet($xero_tenant_id, $timesheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->approveTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Identifier for the timesheet |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject**](../Model/TimesheetObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBenefit**
> \XeroAPI\XeroPHP\Models\PayrollUk\BenefitObject createBenefit($xero_tenant_id, $benefit)

create a new benefit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$benefit = { "name": "My Big Bennie", "category": "StakeholderPension", "liabilityAccountId": "e0faa299-ca0d-4b0a-9e32-0dfabdf9179a", "expenseAccountId": "4b03500d-32fd-4616-8d70-e1e56e0519c6", "standardAmount": 50, "percentage": 25, "calculationType": "PercentageOfGross" }; // \XeroAPI\XeroPHP\Models\PayrollUk\Benefit | 

try {
    $result = $apiInstance->createBenefit($xero_tenant_id, $benefit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createBenefit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **benefit** | [**\XeroAPI\XeroPHP\Models\PayrollUk\Benefit**](../Model/Benefit.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\BenefitObject**](../Model/BenefitObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeduction**
> \XeroAPI\XeroPHP\Models\PayrollUk\DeductionObject createDeduction($xero_tenant_id, $deduction)

create a new deduction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$deduction = { "deductionName": "My new deducation", "deductionCategory": "SalarySacrifice", "liabilityAccountId": "e0faa299-ca0d-4b0a-9e32-0dfabdf9179a", "calculationType": "FixedAmount" }; // \XeroAPI\XeroPHP\Models\PayrollUk\Deduction | 

try {
    $result = $apiInstance->createDeduction($xero_tenant_id, $deduction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createDeduction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **deduction** | [**\XeroAPI\XeroPHP\Models\PayrollUk\Deduction**](../Model/Deduction.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\DeductionObject**](../Model/DeductionObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEarningsRate**
> \XeroAPI\XeroPHP\Models\PayrollUk\EarningsRateObject createEarningsRate($xero_tenant_id, $earnings_rate)

create a new earnings rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$earnings_rate = { "name": "My Earnings Rate", "earningsType": "RegularEarnings", "rateType": "RatePerUnit", "typeOfUnits": "hours", "expenseAccountID": "4b03500d-32fd-4616-8d70-e1e56e0519c6" }; // \XeroAPI\XeroPHP\Models\PayrollUk\EarningsRate | 

try {
    $result = $apiInstance->createEarningsRate($xero_tenant_id, $earnings_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEarningsRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **earnings_rate** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsRate**](../Model/EarningsRate.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsRateObject**](../Model/EarningsRateObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployee**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeObject createEmployee($xero_tenant_id, $employee)

creates employees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee = { "title":"Mr", "firstName":"Mike", "lastName":"Fancy", "dateOfBirth":"1999-01-01", "address":{ "addressLine1":"101 Green St", "city":"San Francisco", "postCode":"6TGR4F", "country":"UK" }, "email":"mike@starkindustries.com", "gender":"M" }; // \XeroAPI\XeroPHP\Models\PayrollUk\Employee | 

try {
    $result = $apiInstance->createEmployee($xero_tenant_id, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee** | [**\XeroAPI\XeroPHP\Models\PayrollUk\Employee**](../Model/Employee.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeObject**](../Model/EmployeeObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeeEarningsTemplate**
> \XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplateObject createEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $earnings_template)

creates employee earnings template records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$earnings_template = new \XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplate(); // \XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplate | 

try {
    $result = $apiInstance->createEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $earnings_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployeeEarningsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **earnings_template** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplate**](../Model/EarningsTemplate.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplateObject**](../Model/EarningsTemplateObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeeLeave**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject createEmployeeLeave($xero_tenant_id, $employee_id, $employee_leave)

creates employee leave records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employee_leave = { "leaveTypeID": "1d2778ee-86ea-45c0-bbf8-1045485f6b3f", "description": "Creating a Desription", "startDate": "2020-03-24", "endDate": "2020-03-26" }; // \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeave | 

try {
    $result = $apiInstance->createEmployeeLeave($xero_tenant_id, $employee_id, $employee_leave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployeeLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **employee_leave** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeave**](../Model/EmployeeLeave.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject**](../Model/EmployeeLeaveObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeeLeaveType**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveTypeObject createEmployeeLeaveType($xero_tenant_id, $employee_id, $employee_leave_type)

creates employee leave type records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employee_leave_type = { "leaveTypeID": "4918f233-bd31-43f9-9633-bcc6de1178f2", "scheduleOfAccrual": "BeginningOfCalendarYear", "hoursAccruedAnnually": 10 }; // \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveType | 

try {
    $result = $apiInstance->createEmployeeLeaveType($xero_tenant_id, $employee_id, $employee_leave_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployeeLeaveType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **employee_leave_type** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveType**](../Model/EmployeeLeaveType.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveTypeObject**](../Model/EmployeeLeaveTypeObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeeOpeningBalances**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalancesObject createEmployeeOpeningBalances($xero_tenant_id, $employee_id, $employee_opening_balances)

creates employee opening balances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employee_opening_balances = { "statutoryAdoptionPay": 10, "statutoryMaternityPay": 10, "statutoryPaternityPay": 10, "statutorySharedParentalPay": 10, "statutorySickPay": 10, "priorEmployeeNumber": 10 }; // \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalances | 

try {
    $result = $apiInstance->createEmployeeOpeningBalances($xero_tenant_id, $employee_id, $employee_opening_balances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployeeOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **employee_opening_balances** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalances**](../Model/EmployeeOpeningBalances.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalancesObject**](../Model/EmployeeOpeningBalancesObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeePaymentMethod**
> \XeroAPI\XeroPHP\Models\PayrollUk\PaymentMethodObject createEmployeePaymentMethod($xero_tenant_id, $employee_id, $payment_method)

creates employee payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$payment_method = { "paymentMethod": "Electronically", "bankAccounts": [ { "accountName": "Sid BofA", "accountNumber": "24987654", "sortCode": "287654" } ] }; // \XeroAPI\XeroPHP\Models\PayrollUk\PaymentMethod | 

try {
    $result = $apiInstance->createEmployeePaymentMethod($xero_tenant_id, $employee_id, $payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployeePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **payment_method** | [**\XeroAPI\XeroPHP\Models\PayrollUk\PaymentMethod**](../Model/PaymentMethod.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PaymentMethodObject**](../Model/PaymentMethodObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeeSalaryAndWage**
> \XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWageObject createEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wage)

creates employee salary and wage record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$salary_and_wage = { "earningsRateID": "87f5b43a-cf51-4b74-92de-94c819e82d27", "numberOfUnitsPerWeek": 2, "ratePerUnit": 10, "numberOfUnitsPerDay": 2, "effectiveFrom": "2020-05-01", "annualSalary": 100, "status": "ACTIVE", "paymentType": "Salary" }; // \XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWage | 

try {
    $result = $apiInstance->createEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployeeSalaryAndWage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **salary_and_wage** | [**\XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWage**](../Model/SalaryAndWage.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWageObject**](../Model/SalaryAndWageObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeeStatutorySickLeave**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutorySickLeaveObject createEmployeeStatutorySickLeave($xero_tenant_id, $employee_statutory_sick_leave)

creates employee statutory sick leave records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_statutory_sick_leave = { "employeeID": "aad6b292-7b94-408b-93f6-e489867e3fb0", "leaveTypeID": "aab78802-e9d3-4bbd-bc87-df858054988f", "startDate": "2020-04-21", "endDate": "2020-04-24", "workPattern": [ "Monday", "Tuesday", "Wednesday", "Thursday", "Friday" ], "isPregnancyRelated": false, "sufficientNotice": true }; // \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutorySickLeave | 

try {
    $result = $apiInstance->createEmployeeStatutorySickLeave($xero_tenant_id, $employee_statutory_sick_leave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployeeStatutorySickLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_statutory_sick_leave** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutorySickLeave**](../Model/EmployeeStatutorySickLeave.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutorySickLeaveObject**](../Model/EmployeeStatutorySickLeaveObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployment**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmploymentObject createEmployment($xero_tenant_id, $employee_id, $employment)

creates employment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employment = { "PayrollCalendarID": "216d80e6-af55-47b1-b718-9457c3f5d2fe", "StartDate": "2020-04-01", "EmployeeNumber": "123ABC", "NICategory": "A" }; // \XeroAPI\XeroPHP\Models\PayrollUk\Employment | 

try {
    $result = $apiInstance->createEmployment($xero_tenant_id, $employee_id, $employment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createEmployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **employment** | [**\XeroAPI\XeroPHP\Models\PayrollUk\Employment**](../Model/Employment.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmploymentObject**](../Model/EmploymentObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLeaveType**
> \XeroAPI\XeroPHP\Models\PayrollUk\LeaveTypeObject createLeaveType($xero_tenant_id, $leave_type)

create a new leave type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$leave_type = { "name": "My opebvwbfxf Leave", "isPaidLeave": false, "showOnPayslip": true }; // \XeroAPI\XeroPHP\Models\PayrollUk\LeaveType | 

try {
    $result = $apiInstance->createLeaveType($xero_tenant_id, $leave_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createLeaveType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **leave_type** | [**\XeroAPI\XeroPHP\Models\PayrollUk\LeaveType**](../Model/LeaveType.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\LeaveTypeObject**](../Model/LeaveTypeObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMultipleEmployeeEarningsTemplate**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeePayTemplates createMultipleEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $earnings_template)

creates multiple employee earnings template records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$earnings_template = [ { "ratePerUnit":20.0, "numberOfUnits":8.0, "earningsRateID":"87f5b43a-cf51-4b74-92de-94c819e82d27" }, { "ratePerUnit":20.0, "numberOfUnits":8.0, "earningsRateID":"973365f3-66b2-4c33-8ae6-14b75f78f68b" } ]; // \XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplate[] | 

try {
    $result = $apiInstance->createMultipleEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $earnings_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createMultipleEmployeeEarningsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **earnings_template** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplate[]**](../Model/EarningsTemplate.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeePayTemplates**](../Model/EmployeePayTemplates.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayRunCalendar**
> \XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendarObject createPayRunCalendar($xero_tenant_id, $pay_run_calendar)

create a new payrun calendar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run_calendar = { "name": "My Weekly Cal", "calendarType": "Weekly", "periodStartDate": "2020-05-01", "paymentDate": "2020-05-15" }; // \XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendar | 

try {
    $result = $apiInstance->createPayRunCalendar($xero_tenant_id, $pay_run_calendar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createPayRunCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run_calendar** | [**\XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendar**](../Model/PayRunCalendar.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendarObject**](../Model/PayRunCalendarObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReimbursement**
> \XeroAPI\XeroPHP\Models\PayrollUk\ReimbursementObject createReimbursement($xero_tenant_id, $reimbursement)

create a new reimbursement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$reimbursement = { "name": "My new Reimburse", "accountID": "9ee28149-32a9-4661-8eab-a28738696983" }; // \XeroAPI\XeroPHP\Models\PayrollUk\Reimbursement | 

try {
    $result = $apiInstance->createReimbursement($xero_tenant_id, $reimbursement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createReimbursement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **reimbursement** | [**\XeroAPI\XeroPHP\Models\PayrollUk\Reimbursement**](../Model/Reimbursement.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\ReimbursementObject**](../Model/ReimbursementObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject createTimesheet($xero_tenant_id, $timesheet)

create a new timesheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet = { "payrollCalendarID": "216d80e6-af55-47b1-b718-9457c3f5d2fe", "employeeID": "aad6b292-7b94-408b-93f6-e489867e3fb0", "startDate": "2020-04-13", "endDate": "2020-04-19", "timesheetLines": [ { "date": "2020-04-13", "earningsRateID": "87f5b43a-cf51-4b74-92de-94c819e82d27", "numberOfUnits": 8 }, { "date": "2020-04-15", "earningsRateID": "87f5b43a-cf51-4b74-92de-94c819e82d27", "numberOfUnits": 6 } ] }; // \XeroAPI\XeroPHP\Models\PayrollUk\Timesheet | 

try {
    $result = $apiInstance->createTimesheet($xero_tenant_id, $timesheet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet** | [**\XeroAPI\XeroPHP\Models\PayrollUk\Timesheet**](../Model/Timesheet.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject**](../Model/TimesheetObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTimesheetLine**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLineObject createTimesheetLine($xero_tenant_id, $timesheet_id, $timesheet_line)

create a new timesheet line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 'timesheet_id_example'; // string | Identifier for the timesheet
$timesheet_line = { "date": "2020-04-14", "earningsRateID": "87f5b43a-cf51-4b74-92de-94c819e82d27", "numberOfUnits": 1 }; // \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine | 

try {
    $result = $apiInstance->createTimesheetLine($xero_tenant_id, $timesheet_id, $timesheet_line);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->createTimesheetLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Identifier for the timesheet |
 **timesheet_line** | [**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine**](../Model/TimesheetLine.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLineObject**](../Model/TimesheetLineObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmployeeEarningsTemplate**
> deleteEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $pay_template_earning_id)

deletes an employee earnings template record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$pay_template_earning_id = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | Id for single pay template earnings object

try {
    $apiInstance->deleteEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $pay_template_earning_id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->deleteEmployeeEarningsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **pay_template_earning_id** | [**string**](../Model/.md)| Id for single pay template earnings object |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmployeeLeave**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject deleteEmployeeLeave($xero_tenant_id, $employee_id, $leave_id)

deletes an employee leave record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$leave_id = c4be24e5-e840-4c92-9eaa-2d86cd596314; // string | Leave id for single object

try {
    $result = $apiInstance->deleteEmployeeLeave($xero_tenant_id, $employee_id, $leave_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->deleteEmployeeLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **leave_id** | [**string**](../Model/.md)| Leave id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject**](../Model/EmployeeLeaveObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmployeeSalaryAndWage**
> deleteEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wages_id)

deletes an employee salary and wages record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$salary_and_wages_id = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | Id for single salary and wages object

try {
    $apiInstance->deleteEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wages_id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->deleteEmployeeSalaryAndWage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **salary_and_wages_id** | [**string**](../Model/.md)| Id for single salary and wages object |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine deleteTimesheet($xero_tenant_id, $timesheet_id)

delete a timesheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 'timesheet_id_example'; // string | Identifier for the timesheet

try {
    $result = $apiInstance->deleteTimesheet($xero_tenant_id, $timesheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->deleteTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Identifier for the timesheet |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine**](../Model/TimesheetLine.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTimesheetLine**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine deleteTimesheetLine($xero_tenant_id, $timesheet_id, $timesheet_line_id)

delete a timesheet line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 'timesheet_id_example'; // string | Identifier for the timesheet
$timesheet_line_id = 'timesheet_line_id_example'; // string | Identifier for the timesheet line

try {
    $result = $apiInstance->deleteTimesheetLine($xero_tenant_id, $timesheet_id, $timesheet_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->deleteTimesheetLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Identifier for the timesheet |
 **timesheet_line_id** | [**string**](../Model/.md)| Identifier for the timesheet line |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine**](../Model/TimesheetLine.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBenefit**
> \XeroAPI\XeroPHP\Models\PayrollUk\BenefitObject getBenefit($xero_tenant_id, $id)

retrieve a single benefit by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$id = 'id_example'; // string | Identifier for the benefit

try {
    $result = $apiInstance->getBenefit($xero_tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getBenefit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **id** | [**string**](../Model/.md)| Identifier for the benefit |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\BenefitObject**](../Model/BenefitObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBenefits**
> \XeroAPI\XeroPHP\Models\PayrollUk\Benefits getBenefits($xero_tenant_id, $page)

searches benefits

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getBenefits($xero_tenant_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getBenefits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\Benefits**](../Model/Benefits.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeduction**
> \XeroAPI\XeroPHP\Models\PayrollUk\DeductionObject getDeduction($xero_tenant_id, $deduction_id)

retrieve a single deduction by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$deduction_id = 'deduction_id_example'; // string | Identifier for the deduction

try {
    $result = $apiInstance->getDeduction($xero_tenant_id, $deduction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getDeduction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **deduction_id** | [**string**](../Model/.md)| Identifier for the deduction |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\DeductionObject**](../Model/DeductionObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeductions**
> \XeroAPI\XeroPHP\Models\PayrollUk\Deductions getDeductions($xero_tenant_id, $page)

searches deductions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getDeductions($xero_tenant_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getDeductions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\Deductions**](../Model/Deductions.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEarningsOrder**
> \XeroAPI\XeroPHP\Models\PayrollUk\EarningsOrderObject getEarningsOrder($xero_tenant_id, $id)

retrieve a single deduction by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$id = 'id_example'; // string | Identifier for the deduction

try {
    $result = $apiInstance->getEarningsOrder($xero_tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEarningsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **id** | [**string**](../Model/.md)| Identifier for the deduction |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsOrderObject**](../Model/EarningsOrderObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEarningsOrders**
> \XeroAPI\XeroPHP\Models\PayrollUk\EarningsOrders getEarningsOrders($xero_tenant_id, $page)

searches earnings orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getEarningsOrders($xero_tenant_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEarningsOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsOrders**](../Model/EarningsOrders.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEarningsRate**
> \XeroAPI\XeroPHP\Models\PayrollUk\EarningsRateObject getEarningsRate($xero_tenant_id, $earnings_rate_id)

retrieve a single earnings rates by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$earnings_rate_id = 'earnings_rate_id_example'; // string | Identifier for the earnings rate

try {
    $result = $apiInstance->getEarningsRate($xero_tenant_id, $earnings_rate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEarningsRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **earnings_rate_id** | [**string**](../Model/.md)| Identifier for the earnings rate |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsRateObject**](../Model/EarningsRateObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEarningsRates**
> \XeroAPI\XeroPHP\Models\PayrollUk\EarningsRates getEarningsRates($xero_tenant_id, $page)

searches earnings rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getEarningsRates($xero_tenant_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEarningsRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsRates**](../Model/EarningsRates.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployee**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeObject getEmployee($xero_tenant_id, $employee_id)

searches employees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
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
    echo 'Exception when calling PayrollUkApi->getEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeObject**](../Model/EmployeeObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeLeave**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject getEmployeeLeave($xero_tenant_id, $employee_id, $leave_id)

retrieve a single employee leave record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$leave_id = c4be24e5-e840-4c92-9eaa-2d86cd596314; // string | Leave id for single object

try {
    $result = $apiInstance->getEmployeeLeave($xero_tenant_id, $employee_id, $leave_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **leave_id** | [**string**](../Model/.md)| Leave id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject**](../Model/EmployeeLeaveObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeLeaveBalances**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveBalances getEmployeeLeaveBalances($xero_tenant_id, $employee_id)

search employee leave balances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployeeLeaveBalances($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeLeaveBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveBalances**](../Model/EmployeeLeaveBalances.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeLeavePeriods**
> \XeroAPI\XeroPHP\Models\PayrollUk\LeavePeriods getEmployeeLeavePeriods($xero_tenant_id, $employee_id, $start_date, $end_date)

searches employee leave periods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by start date
$end_date = Johnson; // \DateTime | Filter by end date

try {
    $result = $apiInstance->getEmployeeLeavePeriods($xero_tenant_id, $employee_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeLeavePeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **start_date** | **\DateTime**| Filter by start date | [optional]
 **end_date** | **\DateTime**| Filter by end date | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\LeavePeriods**](../Model/LeavePeriods.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeLeaveTypes**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveTypes getEmployeeLeaveTypes($xero_tenant_id, $employee_id)

searches employee leave types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployeeLeaveTypes($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeLeaveTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveTypes**](../Model/EmployeeLeaveTypes.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeLeaves**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaves getEmployeeLeaves($xero_tenant_id, $employee_id)

search employee leave records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployeeLeaves($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeLeaves: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaves**](../Model/EmployeeLeaves.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeOpeningBalances**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalancesObject getEmployeeOpeningBalances($xero_tenant_id, $employee_id)

retrieve employee openingbalances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployeeOpeningBalances($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalancesObject**](../Model/EmployeeOpeningBalancesObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeePayTemplate**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeePayTemplateObject getEmployeePayTemplate($xero_tenant_id, $employee_id)

searches employee pay templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployeePayTemplate($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeePayTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeePayTemplateObject**](../Model/EmployeePayTemplateObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeePaymentMethod**
> \XeroAPI\XeroPHP\Models\PayrollUk\PaymentMethodObject getEmployeePaymentMethod($xero_tenant_id, $employee_id)

retrieves an employee's payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployeePaymentMethod($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PaymentMethodObject**](../Model/PaymentMethodObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeSalaryAndWage**
> \XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWages getEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wages_id)

get employee salary and wages record by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$salary_and_wages_id = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | Id for single pay template earnings object

try {
    $result = $apiInstance->getEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wages_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeSalaryAndWage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **salary_and_wages_id** | [**string**](../Model/.md)| Id for single pay template earnings object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWages**](../Model/SalaryAndWages.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeSalaryAndWages**
> \XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWages getEmployeeSalaryAndWages($xero_tenant_id, $employee_id, $page)

retrieves an employee's salary and wages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getEmployeeSalaryAndWages($xero_tenant_id, $employee_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeSalaryAndWages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWages**](../Model/SalaryAndWages.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeStatutoryLeaveBalances**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutoryLeaveBalanceObject getEmployeeStatutoryLeaveBalances($xero_tenant_id, $employee_id, $leave_type, $as_of_date)

search employee leave balances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$leave_type = sick; // string | Filter by the type of statutory leave
$as_of_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date from which to calculate balance remaining. If not specified, current date UTC is used.

try {
    $result = $apiInstance->getEmployeeStatutoryLeaveBalances($xero_tenant_id, $employee_id, $leave_type, $as_of_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeStatutoryLeaveBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **leave_type** | **string**| Filter by the type of statutory leave | [optional]
 **as_of_date** | **\DateTime**| The date from which to calculate balance remaining. If not specified, current date UTC is used. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutoryLeaveBalanceObject**](../Model/EmployeeStatutoryLeaveBalanceObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeStatutorySickLeave**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutorySickLeaveObject getEmployeeStatutorySickLeave($xero_tenant_id, $statutory_sick_leave_id)

retrieve a statutory sick leave for an employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$statutory_sick_leave_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Statutory sick leave id for single object

try {
    $result = $apiInstance->getEmployeeStatutorySickLeave($xero_tenant_id, $statutory_sick_leave_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeStatutorySickLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **statutory_sick_leave_id** | [**string**](../Model/.md)| Statutory sick leave id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutorySickLeaveObject**](../Model/EmployeeStatutorySickLeaveObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeTax**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeTaxObject getEmployeeTax($xero_tenant_id, $employee_id)

searches tax records for an employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployeeTax($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployeeTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeTaxObject**](../Model/EmployeeTaxObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployees**
> \XeroAPI\XeroPHP\Models\PayrollUk\Employees getEmployees($xero_tenant_id, $first_name, $last_name, $page)

searches employees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$first_name = John; // string | Filter by first name
$last_name = Johnson; // string | Filter by last name
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getEmployees($xero_tenant_id, $first_name, $last_name, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **first_name** | **string**| Filter by first name | [optional]
 **last_name** | **string**| Filter by last name | [optional]
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaveType**
> \XeroAPI\XeroPHP\Models\PayrollUk\LeaveTypeObject getLeaveType($xero_tenant_id, $leave_type_id)

retrieve a single leave type by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$leave_type_id = 'leave_type_id_example'; // string | Identifier for the leave type

try {
    $result = $apiInstance->getLeaveType($xero_tenant_id, $leave_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getLeaveType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **leave_type_id** | [**string**](../Model/.md)| Identifier for the leave type |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\LeaveTypeObject**](../Model/LeaveTypeObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaveTypes**
> \XeroAPI\XeroPHP\Models\PayrollUk\LeaveTypes getLeaveTypes($xero_tenant_id, $page, $active_only)

searches leave types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.
$active_only = True; // bool | Filters leave types by active status. By default the API returns all leave types.

try {
    $result = $apiInstance->getLeaveTypes($xero_tenant_id, $page, $active_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getLeaveTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]
 **active_only** | **bool**| Filters leave types by active status. By default the API returns all leave types. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\LeaveTypes**](../Model/LeaveTypes.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayRun**
> \XeroAPI\XeroPHP\Models\PayrollUk\PayRunObject getPayRun($xero_tenant_id, $pay_run_id)

retrieve a single pay run by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run_id = 'pay_run_id_example'; // string | Identifier for the pay run

try {
    $result = $apiInstance->getPayRun($xero_tenant_id, $pay_run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getPayRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run_id** | [**string**](../Model/.md)| Identifier for the pay run |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PayRunObject**](../Model/PayRunObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayRunCalendar**
> \XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendarObject getPayRunCalendar($xero_tenant_id, $pay_run_calendar_id)

retrieve a single payrun calendar by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run_calendar_id = 'pay_run_calendar_id_example'; // string | Identifier for the payrun calendars

try {
    $result = $apiInstance->getPayRunCalendar($xero_tenant_id, $pay_run_calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getPayRunCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run_calendar_id** | [**string**](../Model/.md)| Identifier for the payrun calendars |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendarObject**](../Model/PayRunCalendarObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayRunCalendars**
> \XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendars getPayRunCalendars($xero_tenant_id, $page)

searches payrun calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getPayRunCalendars($xero_tenant_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getPayRunCalendars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PayRunCalendars**](../Model/PayRunCalendars.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayRuns**
> \XeroAPI\XeroPHP\Models\PayrollUk\PayRuns getPayRuns($xero_tenant_id, $page, $status)

searches pay runs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.
$status = 'status_example'; // string | By default get payruns will return all the payruns for an organization. You can add GET https://api.xero.com/payroll.xro/2.0/payRuns?statu={PayRunStatus} to filter the payruns by status.

try {
    $result = $apiInstance->getPayRuns($xero_tenant_id, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getPayRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]
 **status** | **string**| By default get payruns will return all the payruns for an organization. You can add GET https://api.xero.com/payroll.xro/2.0/payRuns?statu&#x3D;{PayRunStatus} to filter the payruns by status. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PayRuns**](../Model/PayRuns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaySlip**
> \XeroAPI\XeroPHP\Models\PayrollUk\PayslipObject getPaySlip($xero_tenant_id, $payslip_id)

retrieve a single payslip by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payslip_id = 'payslip_id_example'; // string | Identifier for the payslip

try {
    $result = $apiInstance->getPaySlip($xero_tenant_id, $payslip_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getPaySlip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payslip_id** | [**string**](../Model/.md)| Identifier for the payslip |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PayslipObject**](../Model/PayslipObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaySlips**
> \XeroAPI\XeroPHP\Models\PayrollUk\Payslips getPaySlips($xero_tenant_id, $pay_run_id, $page)

searches payslips

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run_id = 'pay_run_id_example'; // string | PayrunID which specifies the containing payrun of payslips to retrieve. By default, the API does not group payslips by payrun.
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getPaySlips($xero_tenant_id, $pay_run_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getPaySlips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run_id** | [**string**](../Model/.md)| PayrunID which specifies the containing payrun of payslips to retrieve. By default, the API does not group payslips by payrun. |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\Payslips**](../Model/Payslips.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReimbursement**
> \XeroAPI\XeroPHP\Models\PayrollUk\ReimbursementObject getReimbursement($xero_tenant_id, $reimbursement_id)

retrieve a single reimbursement by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$reimbursement_id = 'reimbursement_id_example'; // string | Identifier for the reimbursement

try {
    $result = $apiInstance->getReimbursement($xero_tenant_id, $reimbursement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getReimbursement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **reimbursement_id** | [**string**](../Model/.md)| Identifier for the reimbursement |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\ReimbursementObject**](../Model/ReimbursementObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReimbursements**
> \XeroAPI\XeroPHP\Models\PayrollUk\Reimbursements getReimbursements($xero_tenant_id, $page)

searches reimbursements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.

try {
    $result = $apiInstance->getReimbursements($xero_tenant_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getReimbursements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\Reimbursements**](../Model/Reimbursements.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettings**
> \XeroAPI\XeroPHP\Models\PayrollUk\Settings getSettings($xero_tenant_id)

searches settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
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
    echo 'Exception when calling PayrollUkApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\Settings**](../Model/Settings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatutoryLeaveSummary**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutoryLeavesSummaries getStatutoryLeaveSummary($xero_tenant_id, $employee_id, $active_only)

retrieve a summary of statutory leaves for an employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$active_only = True; // bool | Filter response with leaves that are currently active or yet to be taken. If not specified, all leaves (past, current, and future scheduled) are returned

try {
    $result = $apiInstance->getStatutoryLeaveSummary($xero_tenant_id, $employee_id, $active_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getStatutoryLeaveSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **active_only** | **bool**| Filter response with leaves that are currently active or yet to be taken. If not specified, all leaves (past, current, and future scheduled) are returned | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeStatutoryLeavesSummaries**](../Model/EmployeeStatutoryLeavesSummaries.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject getTimesheet($xero_tenant_id, $timesheet_id)

retrieve a single timesheet by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 'timesheet_id_example'; // string | Identifier for the timesheet

try {
    $result = $apiInstance->getTimesheet($xero_tenant_id, $timesheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Identifier for the timesheet |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject**](../Model/TimesheetObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimesheets**
> \XeroAPI\XeroPHP\Models\PayrollUk\Timesheets getTimesheets($xero_tenant_id, $page, $employee_id, $payroll_calendar_id)

searches timesheets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 100.
$employee_id = 'employee_id_example'; // string | By default get Timesheets will return the timesheets for all employees in an organization. You can add GET https://…/timesheets?filter=employeeId=={EmployeeId} to get only the timesheets of a particular employee.
$payroll_calendar_id = 'payroll_calendar_id_example'; // string | By default get Timesheets will return all the timesheets for an organization. You can add GET https://…/timesheets?filter=payrollCalendarId=={PayrollCalendarID} to filter the timesheets by payroll calendar id

try {
    $result = $apiInstance->getTimesheets($xero_tenant_id, $page, $employee_id, $payroll_calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 100. | [optional]
 **employee_id** | [**string**](../Model/.md)| By default get Timesheets will return the timesheets for all employees in an organization. You can add GET https://…/timesheets?filter&#x3D;employeeId&#x3D;&#x3D;{EmployeeId} to get only the timesheets of a particular employee. | [optional]
 **payroll_calendar_id** | [**string**](../Model/.md)| By default get Timesheets will return all the timesheets for an organization. You can add GET https://…/timesheets?filter&#x3D;payrollCalendarId&#x3D;&#x3D;{PayrollCalendarID} to filter the timesheets by payroll calendar id | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingCategories**
> \XeroAPI\XeroPHP\Models\PayrollUk\TrackingCategories getTrackingCategories($xero_tenant_id)

searches tracking categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getTrackingCategories($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->getTrackingCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revertTimesheet**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject revertTimesheet($xero_tenant_id, $timesheet_id)

revert a timesheet to draft

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 'timesheet_id_example'; // string | Identifier for the timesheet

try {
    $result = $apiInstance->revertTimesheet($xero_tenant_id, $timesheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->revertTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Identifier for the timesheet |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetObject**](../Model/TimesheetObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployee**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeObject updateEmployee($xero_tenant_id, $employee_id, $employee)

updates employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employee = { "title":"Mr", "firstName":"Mike", "lastName":"Johnllsbkrhwopson", "dateOfBirth":"1999-01-01", "address":{ "addressLine1":"101 Green St", "city":"San Francisco", "postCode":"6TGR4F", "country":"UK" }, "email":"84044@starkindustries.com", "gender":"M" }; // \XeroAPI\XeroPHP\Models\PayrollUk\Employee | 

try {
    $result = $apiInstance->updateEmployee($xero_tenant_id, $employee_id, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **employee** | [**\XeroAPI\XeroPHP\Models\PayrollUk\Employee**](../Model/Employee.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeObject**](../Model/EmployeeObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployeeEarningsTemplate**
> \XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplateObject updateEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $pay_template_earning_id, $earnings_template)

updates employee earnings template records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$pay_template_earning_id = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | Id for single pay template earnings object
$earnings_template = { "ratePerUnit": 30, "numberOfUnits": 4, "earningsRateID": "87f5b43a-cf51-4b74-92de-94c819e82d27" }; // \XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplate | 

try {
    $result = $apiInstance->updateEmployeeEarningsTemplate($xero_tenant_id, $employee_id, $pay_template_earning_id, $earnings_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->updateEmployeeEarningsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **pay_template_earning_id** | [**string**](../Model/.md)| Id for single pay template earnings object |
 **earnings_template** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplate**](../Model/EarningsTemplate.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EarningsTemplateObject**](../Model/EarningsTemplateObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployeeLeave**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject updateEmployeeLeave($xero_tenant_id, $employee_id, $leave_id, $employee_leave)

updates employee leave records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$leave_id = c4be24e5-e840-4c92-9eaa-2d86cd596314; // string | Leave id for single object
$employee_leave = { "leaveTypeID": "ed08dffe-788e-4b24-9630-f0fa2f4d164c", "description": "Creating a Description", "startDate": "2020-04-24", "endDate": "2020-04-26", "periods": [ { "periodStartDate": "2020-04-20", "periodEndDate": "2020-04-26", "numberOfUnits": 1, "periodStatus": "Approved" } ] }; // \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeave | 

try {
    $result = $apiInstance->updateEmployeeLeave($xero_tenant_id, $employee_id, $leave_id, $employee_leave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->updateEmployeeLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **leave_id** | [**string**](../Model/.md)| Leave id for single object |
 **employee_leave** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeave**](../Model/EmployeeLeave.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeLeaveObject**](../Model/EmployeeLeaveObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployeeOpeningBalances**
> \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalancesObject updateEmployeeOpeningBalances($xero_tenant_id, $employee_id, $employee_opening_balances)

updates employee opening balances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employee_opening_balances = { "statutoryAdoptionPay": 20, "statutoryMaternityPay": 20, "statutoryPaternityPay": 20, "statutorySharedParentalPay": 20, "statutorySickPay": 20, "priorEmployeeNumber": 20 }; // \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalances | 

try {
    $result = $apiInstance->updateEmployeeOpeningBalances($xero_tenant_id, $employee_id, $employee_opening_balances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->updateEmployeeOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **employee_opening_balances** | [**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalances**](../Model/EmployeeOpeningBalances.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalancesObject**](../Model/EmployeeOpeningBalancesObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployeeSalaryAndWage**
> \XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWageObject updateEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wages_id, $salary_and_wage)

updates employee salary and wages record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$salary_and_wages_id = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | Id for single pay template earnings object
$salary_and_wage = { "earningsRateID": "87f5b43a-cf51-4b74-92de-94c819e82d27", "numberOfUnitsPerWeek": 3, "ratePerUnit": 11, "effectiveFrom": "2020-05-15", "annualSalary": 101, "status": "ACTIVE", "paymentType": "Salary" }; // \XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWage | 

try {
    $result = $apiInstance->updateEmployeeSalaryAndWage($xero_tenant_id, $employee_id, $salary_and_wages_id, $salary_and_wage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->updateEmployeeSalaryAndWage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Employee id for single object |
 **salary_and_wages_id** | [**string**](../Model/.md)| Id for single pay template earnings object |
 **salary_and_wage** | [**\XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWage**](../Model/SalaryAndWage.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\SalaryAndWageObject**](../Model/SalaryAndWageObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayRun**
> \XeroAPI\XeroPHP\Models\PayrollUk\PayRunObject updatePayRun($xero_tenant_id, $pay_run_id, $pay_run)

update a pay run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$pay_run_id = 'pay_run_id_example'; // string | Identifier for the pay run
$pay_run = { "paymentDate": "2020-05-01" }; // \XeroAPI\XeroPHP\Models\PayrollUk\PayRun | 

try {
    $result = $apiInstance->updatePayRun($xero_tenant_id, $pay_run_id, $pay_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->updatePayRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **pay_run_id** | [**string**](../Model/.md)| Identifier for the pay run |
 **pay_run** | [**\XeroAPI\XeroPHP\Models\PayrollUk\PayRun**](../Model/PayRun.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\PayRunObject**](../Model/PayRunObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTimesheetLine**
> \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLineObject updateTimesheetLine($xero_tenant_id, $timesheet_id, $timesheet_line_id, $timesheet_line)

update a timesheet line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\PayrollUkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$timesheet_id = 'timesheet_id_example'; // string | Identifier for the timesheet
$timesheet_line_id = 'timesheet_line_id_example'; // string | Identifier for the timesheet line
$timesheet_line = { "date": "2020-04-14", "earningsRateID": "87f5b43a-cf51-4b74-92de-94c819e82d27", "numberOfUnits": 2 }; // \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine | 

try {
    $result = $apiInstance->updateTimesheetLine($xero_tenant_id, $timesheet_id, $timesheet_line_id, $timesheet_line);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollUkApi->updateTimesheetLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **timesheet_id** | [**string**](../Model/.md)| Identifier for the timesheet |
 **timesheet_line_id** | [**string**](../Model/.md)| Identifier for the timesheet line |
 **timesheet_line** | [**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLine**](../Model/TimesheetLine.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetLineObject**](../Model/TimesheetLineObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

