# xero-php-oauth2

## Payroll (Australian) API Documentation

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

  $payrollAuApi = new XeroAPI\XeroPHP\Api\PayrollAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
  );

  $xeroTenantId = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

  // \XeroAPI\XeroPHP\Models\Accounting\Employee | Request of type Employee
  $employee = new XeroAPI\XeroPHP\Models\PayrollAu\Employee;
  $employee->setFirstName("Fred");
  $employee->setLastName("Potter");
  $employee->setEmail("albus@hogwarts.edu");
  $dateOfBirth = DateTime::createFromFormat('m/d/Y', '05/29/2000');
  $employee->setDateOfBirthAsDate($dateOfBirth);

  $address = new XeroAPI\XeroPHP\Models\PayrollAu\HomeAddress;
  $address->setAddressLine1("101 Green St");
  $address->setCity("Island Bay");
  $address->setRegion(\XeroAPI\XeroPHP\Models\PayrollAu\State::NSW);
  $address->setCountry("AUSTRALIA");
  $address->setPostalCode("6023");
  $employee->setHomeAddress($address);

  $newEmployees = [];		
  array_push($newEmployees, $employee);  

  try {
      $result = $payrollAuApi->createEmployee($xero_tenant_id, $newEmployees);
      print_r($result);
  } catch (Exception $e) {
      echo 'Exception when calling payrollAuApi->createEmployee: ', $e->getMessage(), PHP_EOL;
  }

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.xero.com/payroll.xro/1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PayrollAUApi* | [**createEmployee**](docs/Api/PayrollAUApi.md#createemployee) | **POST** /Employees | Use this method to create a payroll employee
*PayrollAUApi* | [**createLeaveApplication**](docs/Api/PayrollAUApi.md#createleaveapplication) | **POST** /LeaveApplications | Use this method to create a Leave Application
*PayrollAUApi* | [**createPayItem**](docs/Api/PayrollAUApi.md#createpayitem) | **POST** /PayItems | Use this method to create a Pay Item
*PayrollAUApi* | [**createPayRun**](docs/Api/PayrollAUApi.md#createpayrun) | **POST** /PayRuns | Use this method to create a PayRun
*PayrollAUApi* | [**createPayrollCalendar**](docs/Api/PayrollAUApi.md#createpayrollcalendar) | **POST** /PayrollCalendars | Use this method to create a Payroll Calendars
*PayrollAUApi* | [**createSuperfund**](docs/Api/PayrollAUApi.md#createsuperfund) | **POST** /Superfunds | Use this method to create a super fund
*PayrollAUApi* | [**createTimesheet**](docs/Api/PayrollAUApi.md#createtimesheet) | **POST** /Timesheets | Use this method to create a timesheet
*PayrollAUApi* | [**getEmployee**](docs/Api/PayrollAUApi.md#getemployee) | **GET** /Employees/{EmployeeId} | searches for an employee by unique id
*PayrollAUApi* | [**getEmployees**](docs/Api/PayrollAUApi.md#getemployees) | **GET** /Employees | searches employees
*PayrollAUApi* | [**getLeaveApplication**](docs/Api/PayrollAUApi.md#getleaveapplication) | **GET** /LeaveApplications/{LeaveApplicationId} | searches for an Leave Application by unique id
*PayrollAUApi* | [**getLeaveApplications**](docs/Api/PayrollAUApi.md#getleaveapplications) | **GET** /LeaveApplications | searches Leave Applications
*PayrollAUApi* | [**getPayItems**](docs/Api/PayrollAUApi.md#getpayitems) | **GET** /PayItems | searches Pay Items
*PayrollAUApi* | [**getPayRun**](docs/Api/PayrollAUApi.md#getpayrun) | **GET** /PayRuns/{PayRunID} | searches for an payrun by unique id
*PayrollAUApi* | [**getPayRuns**](docs/Api/PayrollAUApi.md#getpayruns) | **GET** /PayRuns | searches PayRuns
*PayrollAUApi* | [**getPayrollCalendar**](docs/Api/PayrollAUApi.md#getpayrollcalendar) | **GET** /PayrollCalendars/{PayrollCalendarID} | searches Payroll Calendars
*PayrollAUApi* | [**getPayrollCalendars**](docs/Api/PayrollAUApi.md#getpayrollcalendars) | **GET** /PayrollCalendars | searches Payroll Calendars
*PayrollAUApi* | [**getPayslip**](docs/Api/PayrollAUApi.md#getpayslip) | **GET** /Payslip/{PayslipID} | searches for an payslip by unique id
*PayrollAUApi* | [**getSettings**](docs/Api/PayrollAUApi.md#getsettings) | **GET** /Settings | retrieve settings
*PayrollAUApi* | [**getSuperfund**](docs/Api/PayrollAUApi.md#getsuperfund) | **GET** /Superfunds/{SuperFundID} | searches for an Superfund by unique id
*PayrollAUApi* | [**getSuperfundProducts**](docs/Api/PayrollAUApi.md#getsuperfundproducts) | **GET** /SuperfundProducts | searches SuperfundProducts
*PayrollAUApi* | [**getSuperfunds**](docs/Api/PayrollAUApi.md#getsuperfunds) | **GET** /Superfunds | searches SuperFunds
*PayrollAUApi* | [**getTimesheet**](docs/Api/PayrollAUApi.md#gettimesheet) | **GET** /Timesheets/{TimesheetID} | searches for an timesheet by unique id
*PayrollAUApi* | [**getTimesheets**](docs/Api/PayrollAUApi.md#gettimesheets) | **GET** /Timesheets | searches timesheets
*PayrollAUApi* | [**updateEmployee**](docs/Api/PayrollAUApi.md#updateemployee) | **POST** /Employees/{EmployeeId} | Update an Employee
*PayrollAUApi* | [**updateLeaveApplication**](docs/Api/PayrollAUApi.md#updateleaveapplication) | **POST** /LeaveApplications/{LeaveApplicationId} | Use this method to update a Leave Application
*PayrollAUApi* | [**updatePayRun**](docs/Api/PayrollAUApi.md#updatepayrun) | **POST** /PayRuns/{PayRunID} | Update a PayRun
*PayrollAUApi* | [**updatePayslipByID**](docs/Api/PayrollAUApi.md#updatepayslipbyid) | **POST** /Payslip/{PayslipID} | Update a Payslip
*PayrollAUApi* | [**updateSuperfund**](docs/Api/PayrollAUApi.md#updatesuperfund) | **POST** /Superfunds/{SuperFundID} | Update a Superfund
*PayrollAUApi* | [**updateTimesheet**](docs/Api/PayrollAUApi.md#updatetimesheet) | **POST** /Timesheets/{TimesheetID} | Update a Timesheet


## Documentation For Models

 - [APIException](docs/Model/APIException.md)
 - [Account](docs/Model/Account.md)
 - [AccountType](docs/Model/AccountType.md)
 - [BankAccount](docs/Model/BankAccount.md)
 - [CalendarType](docs/Model/CalendarType.md)
 - [DeductionLine](docs/Model/DeductionLine.md)
 - [DeductionType](docs/Model/DeductionType.md)
 - [DeductionTypeCalculationType](docs/Model/DeductionTypeCalculationType.md)
 - [EarningsLine](docs/Model/EarningsLine.md)
 - [EarningsRate](docs/Model/EarningsRate.md)
 - [EarningsRateCalculationType](docs/Model/EarningsRateCalculationType.md)
 - [EarningsType](docs/Model/EarningsType.md)
 - [Employee](docs/Model/Employee.md)
 - [EmployeeStatus](docs/Model/EmployeeStatus.md)
 - [Employees](docs/Model/Employees.md)
 - [EmploymentBasis](docs/Model/EmploymentBasis.md)
 - [EmploymentTerminationPaymentType](docs/Model/EmploymentTerminationPaymentType.md)
 - [EntitlementFinalPayPayoutType](docs/Model/EntitlementFinalPayPayoutType.md)
 - [HomeAddress](docs/Model/HomeAddress.md)
 - [LeaveAccrualLine](docs/Model/LeaveAccrualLine.md)
 - [LeaveApplication](docs/Model/LeaveApplication.md)
 - [LeaveApplications](docs/Model/LeaveApplications.md)
 - [LeaveBalance](docs/Model/LeaveBalance.md)
 - [LeaveEarningsLine](docs/Model/LeaveEarningsLine.md)
 - [LeaveLine](docs/Model/LeaveLine.md)
 - [LeaveLineCalculationType](docs/Model/LeaveLineCalculationType.md)
 - [LeaveLines](docs/Model/LeaveLines.md)
 - [LeavePeriod](docs/Model/LeavePeriod.md)
 - [LeavePeriodStatus](docs/Model/LeavePeriodStatus.md)
 - [LeaveType](docs/Model/LeaveType.md)
 - [LeaveTypeContributionType](docs/Model/LeaveTypeContributionType.md)
 - [ManualTaxType](docs/Model/ManualTaxType.md)
 - [OpeningBalances](docs/Model/OpeningBalances.md)
 - [PayItem](docs/Model/PayItem.md)
 - [PayItems](docs/Model/PayItems.md)
 - [PayRun](docs/Model/PayRun.md)
 - [PayRunStatus](docs/Model/PayRunStatus.md)
 - [PayRuns](docs/Model/PayRuns.md)
 - [PayTemplate](docs/Model/PayTemplate.md)
 - [PaymentFrequencyType](docs/Model/PaymentFrequencyType.md)
 - [PayrollCalendar](docs/Model/PayrollCalendar.md)
 - [PayrollCalendars](docs/Model/PayrollCalendars.md)
 - [Payslip](docs/Model/Payslip.md)
 - [PayslipObject](docs/Model/PayslipObject.md)
 - [PayslipSummary](docs/Model/PayslipSummary.md)
 - [RateType](docs/Model/RateType.md)
 - [ReimbursementLine](docs/Model/ReimbursementLine.md)
 - [ReimbursementLines](docs/Model/ReimbursementLines.md)
 - [ReimbursementType](docs/Model/ReimbursementType.md)
 - [ResidencyStatus](docs/Model/ResidencyStatus.md)
 - [Settings](docs/Model/Settings.md)
 - [SettingsObject](docs/Model/SettingsObject.md)
 - [SettingsTrackingCategories](docs/Model/SettingsTrackingCategories.md)
 - [SettingsTrackingCategoriesEmployeeGroups](docs/Model/SettingsTrackingCategoriesEmployeeGroups.md)
 - [SettingsTrackingCategoriesTimesheetCategories](docs/Model/SettingsTrackingCategoriesTimesheetCategories.md)
 - [State](docs/Model/State.md)
 - [SuperFund](docs/Model/SuperFund.md)
 - [SuperFundProduct](docs/Model/SuperFundProduct.md)
 - [SuperFundProducts](docs/Model/SuperFundProducts.md)
 - [SuperFundType](docs/Model/SuperFundType.md)
 - [SuperFunds](docs/Model/SuperFunds.md)
 - [SuperLine](docs/Model/SuperLine.md)
 - [SuperMembership](docs/Model/SuperMembership.md)
 - [SuperannuationCalculationType](docs/Model/SuperannuationCalculationType.md)
 - [SuperannuationContributionType](docs/Model/SuperannuationContributionType.md)
 - [SuperannuationLine](docs/Model/SuperannuationLine.md)
 - [TFNExemptionType](docs/Model/TFNExemptionType.md)
 - [TaxDeclaration](docs/Model/TaxDeclaration.md)
 - [TaxLine](docs/Model/TaxLine.md)
 - [Timesheet](docs/Model/Timesheet.md)
 - [TimesheetLine](docs/Model/TimesheetLine.md)
 - [TimesheetObject](docs/Model/TimesheetObject.md)
 - [TimesheetStatus](docs/Model/TimesheetStatus.md)
 - [Timesheets](docs/Model/Timesheets.md)


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
