# Payslip

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee_id** | **string** | The Xero identifier for an employee | [optional] 
**payslip_id** | **string** | Xero identifier for the payslip | [optional] 
**first_name** | **string** | First name of employee | [optional] 
**last_name** | **string** | Last name of employee | [optional] 
**wages** | **float** | The Wages for the Payslip | [optional] 
**deductions** | **float** | The Deductions for the Payslip | [optional] 
**tax** | **float** | The Tax for the Payslip | [optional] 
**super** | **float** | The Super for the Payslip | [optional] 
**reimbursements** | **float** | The Reimbursements for the Payslip | [optional] 
**net_pay** | **float** | The NetPay for the Payslip | [optional] 
**earnings_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]**](EarningsLine.md) |  | [optional] 
**leave_earnings_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveEarningsLine[]**](LeaveEarningsLine.md) |  | [optional] 
**timesheet_earnings_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]**](EarningsLine.md) |  | [optional] 
**deduction_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]**](DeductionLine.md) |  | [optional] 
**leave_accrual_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\LeaveAccrualLine[]**](LeaveAccrualLine.md) |  | [optional] 
**reimbursement_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]**](ReimbursementLine.md) |  | [optional] 
**superannuation_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationLine[]**](SuperannuationLine.md) |  | [optional] 
**tax_lines** | [**\XeroAPI\XeroPHP\Models\PayrollAu\TaxLine[]**](TaxLine.md) |  | [optional] 
**updated_date_utc** | **string** | Last modified timestamp | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


