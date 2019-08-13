# ManualJournal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**narration** | **string** | Description of journal being posted | 
**journal_lines** | [**\XeroAPI\XeroPHP\Models\Accounting\ManualJournalLine[]**](ManualJournalLine.md) | See JournalLines | 
**date** | [**\DateTime**](\DateTime.md) | Date journal was posted – YYYY-MM-DD | [optional] 
**line_amount_types** | [**\XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**status** | **string** | See Manual Journal Status Codes | [optional] 
**url** | **string** | Url link to a source document – shown as “Go to [appName]” in the Xero app | [optional] 
**show_on_cash_basis_reports** | **bool** | Boolean – default is true if not specified | [optional] 
**has_attachments** | **bool** | Boolean to indicate if a manual journal has an attachment | [optional] 
**updated_date_utc** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**manual_journal_id** | **string** | The Xero identifier for a Manual Journal | [optional] 
**warnings** | [**\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]**](ValidationError.md) | Displays array of warning messages from the API | [optional] 
**validation_errors** | [**\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 
**attachments** | [**\XeroAPI\XeroPHP\Models\Accounting\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


