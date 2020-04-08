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
*PayrollAUApi* | [**createEmployee**](Api/PayrollAUApi.md#createemployee) | **POST** /Employees | Use this method to create a payroll employee
*PayrollAUApi* | [**createLeaveApplication**](Api/PayrollAUApi.md#createleaveapplication) | **POST** /LeaveApplications | Use this method to create a Leave Application
*PayrollAUApi* | [**createPayItem**](Api/PayrollAUApi.md#createpayitem) | **POST** /PayItems | Use this method to create a Pay Item
*PayrollAUApi* | [**createPayRun**](Api/PayrollAUApi.md#createpayrun) | **POST** /PayRuns | Use this method to create a PayRun
*PayrollAUApi* | [**createPayrollCalendar**](Api/PayrollAUApi.md#createpayrollcalendar) | **POST** /PayrollCalendars | Use this method to create a Payroll Calendars
*PayrollAUApi* | [**createSuperfund**](Api/PayrollAUApi.md#createsuperfund) | **POST** /Superfunds | Use this method to create a super fund
*PayrollAUApi* | [**createTimesheet**](Api/PayrollAUApi.md#createtimesheet) | **POST** /Timesheets | Use this method to create a timesheet
*PayrollAUApi* | [**getEmployee**](Api/PayrollAUApi.md#getemployee) | **GET** /Employees/{EmployeeId} | searches for an employee by unique id
*PayrollAUApi* | [**getEmployees**](Api/PayrollAUApi.md#getemployees) | **GET** /Employees | searches employees
*PayrollAUApi* | [**getLeaveApplication**](Api/PayrollAUApi.md#getleaveapplication) | **GET** /LeaveApplications/{LeaveApplicationId} | searches for an Leave Application by unique id
*PayrollAUApi* | [**getLeaveApplications**](Api/PayrollAUApi.md#getleaveapplications) | **GET** /LeaveApplications | searches Leave Applications
*PayrollAUApi* | [**getPayItems**](Api/PayrollAUApi.md#getpayitems) | **GET** /PayItems | searches Pay Items
*PayrollAUApi* | [**getPayRun**](Api/PayrollAUApi.md#getpayrun) | **GET** /PayRuns/{PayRunID} | searches for an payrun by unique id
*PayrollAUApi* | [**getPayRuns**](Api/PayrollAUApi.md#getpayruns) | **GET** /PayRuns | searches PayRuns
*PayrollAUApi* | [**getPayrollCalendar**](Api/PayrollAUApi.md#getpayrollcalendar) | **GET** /PayrollCalendars/{PayrollCalendarID} | searches Payroll Calendars
*PayrollAUApi* | [**getPayrollCalendars**](Api/PayrollAUApi.md#getpayrollcalendars) | **GET** /PayrollCalendars | searches Payroll Calendars
*PayrollAUApi* | [**getPayslip**](Api/PayrollAUApi.md#getpayslip) | **GET** /Payslip/{PayslipID} | searches for an payslip by unique id
*PayrollAUApi* | [**getSettings**](Api/PayrollAUApi.md#getsettings) | **GET** /Settings | retrieve settings
*PayrollAUApi* | [**getSuperfund**](Api/PayrollAUApi.md#getsuperfund) | **GET** /Superfunds/{SuperFundID} | searches for an Superfund by unique id
*PayrollAUApi* | [**getSuperfundProducts**](Api/PayrollAUApi.md#getsuperfundproducts) | **GET** /SuperfundProducts | searches SuperfundProducts
*PayrollAUApi* | [**getSuperfunds**](Api/PayrollAUApi.md#getsuperfunds) | **GET** /Superfunds | searches SuperFunds
*PayrollAUApi* | [**getTimesheet**](Api/PayrollAUApi.md#gettimesheet) | **GET** /Timesheets/{TimesheetID} | searches for an timesheet by unique id
*PayrollAUApi* | [**getTimesheets**](Api/PayrollAUApi.md#gettimesheets) | **GET** /Timesheets | searches timesheets
*PayrollAUApi* | [**updateEmployee**](Api/PayrollAUApi.md#updateemployee) | **POST** /Employees/{EmployeeId} | Update an Employee
*PayrollAUApi* | [**updateLeaveApplication**](Api/PayrollAUApi.md#updateleaveapplication) | **POST** /LeaveApplications/{LeaveApplicationId} | Use this method to update a Leave Application
*PayrollAUApi* | [**updatePayRun**](Api/PayrollAUApi.md#updatepayrun) | **POST** /PayRuns/{PayRunID} | Update a PayRun
*PayrollAUApi* | [**updatePayslipByID**](Api/PayrollAUApi.md#updatepayslipbyid) | **POST** /Payslip/{PayslipID} | Update a Payslip
*PayrollAUApi* | [**updateSuperfund**](Api/PayrollAUApi.md#updatesuperfund) | **POST** /Superfunds/{SuperFundID} | Update a Superfund
*PayrollAUApi* | [**updateTimesheet**](Api/PayrollAUApi.md#updatetimesheet) | **POST** /Timesheets/{TimesheetID} | Update a Timesheet


## Documentation For Models

 - [APIException](Model/APIException.md)
 - [Account](Model/Account.md)
 - [AccountType](Model/AccountType.md)
 - [BankAccount](Model/BankAccount.md)
 - [CalendarType](Model/CalendarType.md)
 - [DeductionLine](Model/DeductionLine.md)
 - [DeductionType](Model/DeductionType.md)
 - [DeductionTypeCalculationType](Model/DeductionTypeCalculationType.md)
 - [EarningsLine](Model/EarningsLine.md)
 - [EarningsRate](Model/EarningsRate.md)
 - [EarningsRateCalculationType](Model/EarningsRateCalculationType.md)
 - [EarningsType](Model/EarningsType.md)
 - [Employee](Model/Employee.md)
 - [EmployeeStatus](Model/EmployeeStatus.md)
 - [Employees](Model/Employees.md)
 - [EmploymentBasis](Model/EmploymentBasis.md)
 - [EmploymentTerminationPaymentType](Model/EmploymentTerminationPaymentType.md)
 - [EntitlementFinalPayPayoutType](Model/EntitlementFinalPayPayoutType.md)
 - [HomeAddress](Model/HomeAddress.md)
 - [LeaveAccrualLine](Model/LeaveAccrualLine.md)
 - [LeaveApplication](Model/LeaveApplication.md)
 - [LeaveApplications](Model/LeaveApplications.md)
 - [LeaveBalance](Model/LeaveBalance.md)
 - [LeaveEarningsLine](Model/LeaveEarningsLine.md)
 - [LeaveLine](Model/LeaveLine.md)
 - [LeaveLineCalculationType](Model/LeaveLineCalculationType.md)
 - [LeaveLines](Model/LeaveLines.md)
 - [LeavePeriod](Model/LeavePeriod.md)
 - [LeavePeriodStatus](Model/LeavePeriodStatus.md)
 - [LeaveType](Model/LeaveType.md)
 - [LeaveTypeContributionType](Model/LeaveTypeContributionType.md)
 - [ManualTaxType](Model/ManualTaxType.md)
 - [OpeningBalances](Model/OpeningBalances.md)
 - [PayItem](Model/PayItem.md)
 - [PayItems](Model/PayItems.md)
 - [PayRun](Model/PayRun.md)
 - [PayRunStatus](Model/PayRunStatus.md)
 - [PayRuns](Model/PayRuns.md)
 - [PayTemplate](Model/PayTemplate.md)
 - [PaymentFrequencyType](Model/PaymentFrequencyType.md)
 - [PayrollCalendar](Model/PayrollCalendar.md)
 - [PayrollCalendars](Model/PayrollCalendars.md)
 - [Payslip](Model/Payslip.md)
 - [PayslipObject](Model/PayslipObject.md)
 - [PayslipSummary](Model/PayslipSummary.md)
 - [RateType](Model/RateType.md)
 - [ReimbursementLine](Model/ReimbursementLine.md)
 - [ReimbursementLines](Model/ReimbursementLines.md)
 - [ReimbursementType](Model/ReimbursementType.md)
 - [ResidencyStatus](Model/ResidencyStatus.md)
 - [Settings](Model/Settings.md)
 - [SettingsObject](Model/SettingsObject.md)
 - [SettingsTrackingCategories](Model/SettingsTrackingCategories.md)
 - [SettingsTrackingCategoriesEmployeeGroups](Model/SettingsTrackingCategoriesEmployeeGroups.md)
 - [SettingsTrackingCategoriesTimesheetCategories](Model/SettingsTrackingCategoriesTimesheetCategories.md)
 - [State](Model/State.md)
 - [SuperFund](Model/SuperFund.md)
 - [SuperFundProduct](Model/SuperFundProduct.md)
 - [SuperFundProducts](Model/SuperFundProducts.md)
 - [SuperFundType](Model/SuperFundType.md)
 - [SuperFunds](Model/SuperFunds.md)
 - [SuperLine](Model/SuperLine.md)
 - [SuperMembership](Model/SuperMembership.md)
 - [SuperannuationCalculationType](Model/SuperannuationCalculationType.md)
 - [SuperannuationContributionType](Model/SuperannuationContributionType.md)
 - [SuperannuationLine](Model/SuperannuationLine.md)
 - [TFNExemptionType](Model/TFNExemptionType.md)
 - [TaxDeclaration](Model/TaxDeclaration.md)
 - [TaxLine](Model/TaxLine.md)
 - [Timesheet](Model/Timesheet.md)
 - [TimesheetLine](Model/TimesheetLine.md)
 - [TimesheetObject](Model/TimesheetObject.md)
 - [TimesheetStatus](Model/TimesheetStatus.md)
 - [Timesheets](Model/Timesheets.md)


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
