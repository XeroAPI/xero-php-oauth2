# PayRun

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payroll_calendar_id** | **string** | Xero identifier for pay run | 
**pay_run_id** | **string** | Xero identifier for pay run | [optional] 
**pay_run_period_start_date** | **string** | Period Start Date for the PayRun (YYYY-MM-DD) | [optional] 
**pay_run_period_end_date** | **string** | Period End Date for the PayRun (YYYY-MM-DD) | [optional] 
**pay_run_status** | [**\XeroAPI\XeroPHP\Models\PayrollAu\PayRunStatus**](PayRunStatus.md) |  | [optional] 
**payment_date** | **string** | Payment Date for the PayRun (YYYY-MM-DD) | [optional] 
**payslip_message** | **string** | Payslip message for the PayRun | [optional] 
**updated_date_utc** | **string** | Last modified timestamp | [optional] 
**payslips** | [**\XeroAPI\XeroPHP\Models\PayrollAu\PayslipSummary[]**](PayslipSummary.md) | The payslips in the payrun | [optional] 
**wages** | **float** | The total Wages for the Payrun | [optional] 
**deductions** | **float** | The total Deductions for the Payrun | [optional] 
**tax** | **float** | The total Tax for the Payrun | [optional] 
**super** | **float** | The total Super for the Payrun | [optional] 
**reimbursement** | **float** | The total Reimbursements for the Payrun | [optional] 
**net_pay** | **float** | The total NetPay for the Payrun | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


