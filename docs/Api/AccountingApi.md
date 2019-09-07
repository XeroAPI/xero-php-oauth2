# XeroAPI\XeroPHP\AccountingApi

All URIs are relative to *https://api.xero.com/api.xro/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](AccountingApi.md#createAccount) | **PUT** /Accounts | Allows you to create a new chart of accounts
[**createAccountAttachmentByFileName**](AccountingApi.md#createAccountAttachmentByFileName) | **PUT** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to create Attachment on Account
[**createBankTransaction**](AccountingApi.md#createBankTransaction) | **PUT** /BankTransactions | Allows you to create a spend or receive money transaction
[**createBankTransactionAttachmentByFileName**](AccountingApi.md#createBankTransactionAttachmentByFileName) | **PUT** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to createa an Attachment on BankTransaction by Filename
[**createBankTransactionHistoryRecord**](AccountingApi.md#createBankTransactionHistoryRecord) | **PUT** /BankTransactions/{BankTransactionID}/History | Allows you to create history record for a bank transactions
[**createBankTransfer**](AccountingApi.md#createBankTransfer) | **PUT** /BankTransfers | Allows you to create a bank transfers
[**createBankTransferAttachmentByFileName**](AccountingApi.md#createBankTransferAttachmentByFileName) | **PUT** /BankTransfers/{BankTransferID}/Attachments/{FileName} | 
[**createBankTransferHistoryRecord**](AccountingApi.md#createBankTransferHistoryRecord) | **PUT** /BankTransfers/{BankTransferID}/History | 
[**createBatchPayment**](AccountingApi.md#createBatchPayment) | **PUT** /BatchPayments | Create one or many BatchPayments for invoices
[**createBatchPaymentHistoryRecord**](AccountingApi.md#createBatchPaymentHistoryRecord) | **PUT** /BatchPayments/{BatchPaymentID}/History | Allows you to create a history record for a Batch Payment
[**createBrandingThemePaymentServices**](AccountingApi.md#createBrandingThemePaymentServices) | **POST** /BrandingThemes/{BrandingThemeID}/PaymentServices | Allow for the creation of new custom payment service for specified Branding Theme
[**createContact**](AccountingApi.md#createContact) | **PUT** /Contacts | 
[**createContactAttachmentByFileName**](AccountingApi.md#createContactAttachmentByFileName) | **PUT** /Contacts/{ContactID}/Attachments/{FileName} | 
[**createContactGroup**](AccountingApi.md#createContactGroup) | **PUT** /ContactGroups | Allows you to create a contact group
[**createContactGroupContacts**](AccountingApi.md#createContactGroupContacts) | **PUT** /ContactGroups/{ContactGroupID}/Contacts | Allows you to add Contacts to a Contract Group
[**createContactHistory**](AccountingApi.md#createContactHistory) | **PUT** /Contacts/{ContactID}/History | Allows you to retrieve a history records of an Contact
[**createCreditNote**](AccountingApi.md#createCreditNote) | **PUT** /CreditNotes | Allows you to create a credit note
[**createCreditNoteAllocation**](AccountingApi.md#createCreditNoteAllocation) | **PUT** /CreditNotes/{CreditNoteID}/Allocations | Allows you to create Allocation on CreditNote
[**createCreditNoteAttachmentByFileName**](AccountingApi.md#createCreditNoteAttachmentByFileName) | **PUT** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to create Attachments on CreditNote by file name
[**createCreditNoteHistory**](AccountingApi.md#createCreditNoteHistory) | **PUT** /CreditNotes/{CreditNoteID}/History | Allows you to retrieve a history records of an CreditNote
[**createCurrency**](AccountingApi.md#createCurrency) | **PUT** /Currencies | 
[**createEmployee**](AccountingApi.md#createEmployee) | **PUT** /Employees | Allows you to create new employees used in Xero payrun
[**createExpenseClaim**](AccountingApi.md#createExpenseClaim) | **PUT** /ExpenseClaims | Allows you to retrieve expense claims
[**createExpenseClaimHistory**](AccountingApi.md#createExpenseClaimHistory) | **PUT** /ExpenseClaims/{ExpenseClaimID}/History | Allows you to create a history records of an ExpenseClaim
[**createInvoice**](AccountingApi.md#createInvoice) | **PUT** /Invoices | Allows you to create any sales invoices or purchase bills
[**createInvoiceAttachmentByFileName**](AccountingApi.md#createInvoiceAttachmentByFileName) | **PUT** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to create an Attachment on invoices or purchase bills by it&#39;s filename
[**createInvoiceHistory**](AccountingApi.md#createInvoiceHistory) | **PUT** /Invoices/{InvoiceID}/History | Allows you to retrieve a history records of an invoice
[**createItem**](AccountingApi.md#createItem) | **PUT** /Items | Allows you to create an item
[**createItemHistory**](AccountingApi.md#createItemHistory) | **PUT** /Items/{ItemID}/History | Allows you to create a history record for items
[**createLinkedTransaction**](AccountingApi.md#createLinkedTransaction) | **PUT** /LinkedTransactions | Allows you to create linked transactions (billable expenses)
[**createManualJournal**](AccountingApi.md#createManualJournal) | **PUT** /ManualJournals | Allows you to create a manual journal
[**createManualJournalAttachmentByFileName**](AccountingApi.md#createManualJournalAttachmentByFileName) | **PUT** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to create a specified Attachment on ManualJournal by file name
[**createOverpaymentAllocation**](AccountingApi.md#createOverpaymentAllocation) | **PUT** /Overpayments/{OverpaymentID}/Allocations | Allows you to retrieve Allocations for overpayments
[**createOverpaymentHistory**](AccountingApi.md#createOverpaymentHistory) | **PUT** /Overpayments/{OverpaymentID}/History | Allows you to create history records of an Overpayment
[**createPayment**](AccountingApi.md#createPayment) | **PUT** /Payments | Allows you to create payments for invoices and credit notes
[**createPaymentHistory**](AccountingApi.md#createPaymentHistory) | **PUT** /Payments/{PaymentID}/History | Allows you to create a history record for a payment
[**createPaymentService**](AccountingApi.md#createPaymentService) | **PUT** /PaymentServices | Allows you to create payment services
[**createPrepaymentAllocation**](AccountingApi.md#createPrepaymentAllocation) | **PUT** /Prepayments/{PrepaymentID}/Allocations | Allows you to create an Allocation for prepayments
[**createPrepaymentHistory**](AccountingApi.md#createPrepaymentHistory) | **PUT** /Prepayments/{PrepaymentID}/History | Allows you to create a history record for an Prepayment
[**createPurchaseOrder**](AccountingApi.md#createPurchaseOrder) | **PUT** /PurchaseOrders | Allows you to create purchase orders
[**createPurchaseOrderHistory**](AccountingApi.md#createPurchaseOrderHistory) | **PUT** /PurchaseOrders/{PurchaseOrderID}/History | Allows you to create HistoryRecord for purchase orders
[**createReceipt**](AccountingApi.md#createReceipt) | **PUT** /Receipts | Allows you to create draft expense claim receipts for any user
[**createReceiptAttachmentByFileName**](AccountingApi.md#createReceiptAttachmentByFileName) | **PUT** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to create Attachment on expense claim receipts by file name
[**createReceiptHistory**](AccountingApi.md#createReceiptHistory) | **PUT** /Receipts/{ReceiptID}/History | Allows you to retrieve a history records of an Receipt
[**createRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#createRepeatingInvoiceAttachmentByFileName) | **PUT** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to create attachment on repeating invoices by file name
[**createRepeatingInvoiceHistory**](AccountingApi.md#createRepeatingInvoiceHistory) | **PUT** /RepeatingInvoices/{RepeatingInvoiceID}/History | Allows you to create history for a repeating invoice
[**createTaxRate**](AccountingApi.md#createTaxRate) | **PUT** /TaxRates | Allows you to create Tax Rates
[**createTrackingCategory**](AccountingApi.md#createTrackingCategory) | **PUT** /TrackingCategories | Allows you to create tracking categories
[**createTrackingOptions**](AccountingApi.md#createTrackingOptions) | **PUT** /TrackingCategories/{TrackingCategoryID}/Options | Allows you to create options for a specified tracking category
[**deleteAccount**](AccountingApi.md#deleteAccount) | **DELETE** /Accounts/{AccountID} | Allows you to delete a chart of accounts
[**deleteContactGroupContact**](AccountingApi.md#deleteContactGroupContact) | **DELETE** /ContactGroups/{ContactGroupID}/Contacts/{ContactID} | Allows you to delete a specific Contact from a Contract Group
[**deleteContactGroupContacts**](AccountingApi.md#deleteContactGroupContacts) | **DELETE** /ContactGroups/{ContactGroupID}/Contacts | Allows you to delete  all Contacts from a Contract Group
[**deleteItem**](AccountingApi.md#deleteItem) | **DELETE** /Items/{ItemID} | Allows you to delete a specified item
[**deleteLinkedTransaction**](AccountingApi.md#deleteLinkedTransaction) | **DELETE** /LinkedTransactions/{LinkedTransactionID} | Allows you to delete a specified linked transactions (billable expenses)
[**deletePayment**](AccountingApi.md#deletePayment) | **POST** /Payments/{PaymentID} | Allows you to update a specified payment for invoices and credit notes
[**deleteTrackingCategory**](AccountingApi.md#deleteTrackingCategory) | **DELETE** /TrackingCategories/{TrackingCategoryID} | Allows you to delete tracking categories
[**deleteTrackingOptions**](AccountingApi.md#deleteTrackingOptions) | **DELETE** /TrackingCategories/{TrackingCategoryID}/Options/{TrackingOptionID} | Allows you to delete a specified option for a specified tracking category
[**emailInvoice**](AccountingApi.md#emailInvoice) | **POST** /Invoices/{InvoiceID}/Email | Allows you to email a copy of invoice to related Contact
[**getAccount**](AccountingApi.md#getAccount) | **GET** /Accounts/{AccountID} | Allows you to retrieve a single chart of accounts
[**getAccountAttachmentByFileName**](AccountingApi.md#getAccountAttachmentByFileName) | **GET** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to retrieve Attachment on Account by Filename
[**getAccountAttachmentById**](AccountingApi.md#getAccountAttachmentById) | **GET** /Accounts/{AccountID}/Attachments/{AttachmentID} | Allows you to retrieve specific Attachment on Account
[**getAccountAttachments**](AccountingApi.md#getAccountAttachments) | **GET** /Accounts/{AccountID}/Attachments | Allows you to retrieve Attachments for accounts
[**getAccounts**](AccountingApi.md#getAccounts) | **GET** /Accounts | Allows you to retrieve the full chart of accounts
[**getBankTransaction**](AccountingApi.md#getBankTransaction) | **GET** /BankTransactions/{BankTransactionID} | Allows you to retrieve a single spend or receive money transaction
[**getBankTransactionAttachmentByFileName**](AccountingApi.md#getBankTransactionAttachmentByFileName) | **GET** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to retrieve Attachments on BankTransaction by Filename
[**getBankTransactionAttachmentById**](AccountingApi.md#getBankTransactionAttachmentById) | **GET** /BankTransactions/{BankTransactionID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on a specific BankTransaction
[**getBankTransactionAttachments**](AccountingApi.md#getBankTransactionAttachments) | **GET** /BankTransactions/{BankTransactionID}/Attachments | Allows you to retrieve any attachments to bank transactions
[**getBankTransactions**](AccountingApi.md#getBankTransactions) | **GET** /BankTransactions | Allows you to retrieve any spend or receive money transactions
[**getBankTransactionsHistory**](AccountingApi.md#getBankTransactionsHistory) | **GET** /BankTransactions/{BankTransactionID}/History | Allows you to retrieve history from a bank transactions
[**getBankTransfer**](AccountingApi.md#getBankTransfer) | **GET** /BankTransfers/{BankTransferID} | Allows you to retrieve any bank transfers
[**getBankTransferAttachmentByFileName**](AccountingApi.md#getBankTransferAttachmentByFileName) | **GET** /BankTransfers/{BankTransferID}/Attachments/{FileName} | Allows you to retrieve Attachments on BankTransfer by file name
[**getBankTransferAttachmentById**](AccountingApi.md#getBankTransferAttachmentById) | **GET** /BankTransfers/{BankTransferID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on BankTransfer
[**getBankTransferAttachments**](AccountingApi.md#getBankTransferAttachments) | **GET** /BankTransfers/{BankTransferID}/Attachments | Allows you to retrieve Attachments from  bank transfers
[**getBankTransferHistory**](AccountingApi.md#getBankTransferHistory) | **GET** /BankTransfers/{BankTransferID}/History | Allows you to retrieve history from a bank transfers
[**getBankTransfers**](AccountingApi.md#getBankTransfers) | **GET** /BankTransfers | Allows you to retrieve all bank transfers
[**getBatchPaymentHistory**](AccountingApi.md#getBatchPaymentHistory) | **GET** /BatchPayments/{BatchPaymentID}/History | Allows you to retrieve history from a Batch Payment
[**getBatchPayments**](AccountingApi.md#getBatchPayments) | **GET** /BatchPayments | Retrieve either one or many BatchPayments for invoices
[**getBrandingTheme**](AccountingApi.md#getBrandingTheme) | **GET** /BrandingThemes/{BrandingThemeID} | Allows you to retrieve a specific BrandingThemes
[**getBrandingThemePaymentServices**](AccountingApi.md#getBrandingThemePaymentServices) | **GET** /BrandingThemes/{BrandingThemeID}/PaymentServices | Allows you to retrieve the Payment services for a Branding Theme
[**getBrandingThemes**](AccountingApi.md#getBrandingThemes) | **GET** /BrandingThemes | Allows you to retrieve all the BrandingThemes
[**getContact**](AccountingApi.md#getContact) | **GET** /Contacts/{ContactID} | Allows you to retrieve, add and update contacts in a Xero organisation
[**getContactAttachmentByFileName**](AccountingApi.md#getContactAttachmentByFileName) | **GET** /Contacts/{ContactID}/Attachments/{FileName} | Allows you to retrieve Attachments on Contacts by file name
[**getContactAttachmentById**](AccountingApi.md#getContactAttachmentById) | **GET** /Contacts/{ContactID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on Contacts
[**getContactAttachments**](AccountingApi.md#getContactAttachments) | **GET** /Contacts/{ContactID}/Attachments | Allows you to retrieve, add and update contacts in a Xero organisation
[**getContactCISSettings**](AccountingApi.md#getContactCISSettings) | **GET** /Contacts/{ContactID}/CISSettings | Allows you to retrieve CISSettings for a contact in a Xero organisation
[**getContactGroup**](AccountingApi.md#getContactGroup) | **GET** /ContactGroups/{ContactGroupID} | Allows you to retrieve a unique Contract Group by ID
[**getContactGroups**](AccountingApi.md#getContactGroups) | **GET** /ContactGroups | Allows you to retrieve the ContactID and Name of all the contacts in a contact group
[**getContactHistory**](AccountingApi.md#getContactHistory) | **GET** /Contacts/{ContactID}/History | Allows you to retrieve a history records of an Contact
[**getContacts**](AccountingApi.md#getContacts) | **GET** /Contacts | Allows you to retrieve, add and update contacts in a Xero organisation
[**getCreditNote**](AccountingApi.md#getCreditNote) | **GET** /CreditNotes/{CreditNoteID} | Allows you to retrieve a specific credit note
[**getCreditNoteAsPdf**](AccountingApi.md#getCreditNoteAsPdf) | **GET** /CreditNotes/{CreditNoteID}/pdf | Allows you to retrieve Credit Note as PDF files
[**getCreditNoteAttachmentByFileName**](AccountingApi.md#getCreditNoteAttachmentByFileName) | **GET** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to retrieve Attachments on CreditNote by file name
[**getCreditNoteAttachmentById**](AccountingApi.md#getCreditNoteAttachmentById) | **GET** /CreditNotes/{CreditNoteID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on CreditNote
[**getCreditNoteAttachments**](AccountingApi.md#getCreditNoteAttachments) | **GET** /CreditNotes/{CreditNoteID}/Attachments | Allows you to retrieve Attachments for credit notes
[**getCreditNoteHistory**](AccountingApi.md#getCreditNoteHistory) | **GET** /CreditNotes/{CreditNoteID}/History | Allows you to retrieve a history records of an CreditNote
[**getCreditNotes**](AccountingApi.md#getCreditNotes) | **GET** /CreditNotes | Allows you to retrieve any credit notes
[**getCurrencies**](AccountingApi.md#getCurrencies) | **GET** /Currencies | Allows you to retrieve currencies for your organisation
[**getEmployee**](AccountingApi.md#getEmployee) | **GET** /Employees/{EmployeeID} | Allows you to retrieve a specific employee used in Xero payrun
[**getEmployees**](AccountingApi.md#getEmployees) | **GET** /Employees | Allows you to retrieve employees used in Xero payrun
[**getExpenseClaim**](AccountingApi.md#getExpenseClaim) | **GET** /ExpenseClaims/{ExpenseClaimID} | Allows you to retrieve a specified expense claim
[**getExpenseClaimHistory**](AccountingApi.md#getExpenseClaimHistory) | **GET** /ExpenseClaims/{ExpenseClaimID}/History | Allows you to retrieve a history records of an ExpenseClaim
[**getExpenseClaims**](AccountingApi.md#getExpenseClaims) | **GET** /ExpenseClaims | Allows you to retrieve expense claims
[**getInvoice**](AccountingApi.md#getInvoice) | **GET** /Invoices/{InvoiceID} | Allows you to retrieve a specified sales invoice or purchase bill
[**getInvoiceAsPdf**](AccountingApi.md#getInvoiceAsPdf) | **GET** /Invoices/{InvoiceID}/pdf | Allows you to retrieve invoices or purchase bills as PDF files
[**getInvoiceAttachmentByFileName**](AccountingApi.md#getInvoiceAttachmentByFileName) | **GET** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to retrieve Attachment on invoices or purchase bills by it&#39;s filename
[**getInvoiceAttachmentById**](AccountingApi.md#getInvoiceAttachmentById) | **GET** /Invoices/{InvoiceID}/Attachments/{AttachmentID} | Allows you to retrieve a specified Attachment on invoices or purchase bills by it&#39;s ID
[**getInvoiceAttachments**](AccountingApi.md#getInvoiceAttachments) | **GET** /Invoices/{InvoiceID}/Attachments | Allows you to retrieve Attachments on invoices or purchase bills
[**getInvoiceHistory**](AccountingApi.md#getInvoiceHistory) | **GET** /Invoices/{InvoiceID}/History | Allows you to retrieve a history records of an invoice
[**getInvoiceReminders**](AccountingApi.md#getInvoiceReminders) | **GET** /InvoiceReminders/Settings | Allows you to retrieve invoice reminder settings
[**getInvoices**](AccountingApi.md#getInvoices) | **GET** /Invoices | Allows you to retrieve any sales invoices or purchase bills
[**getItem**](AccountingApi.md#getItem) | **GET** /Items/{ItemID} | Allows you to retrieve a specified item
[**getItemHistory**](AccountingApi.md#getItemHistory) | **GET** /Items/{ItemID}/History | Allows you to retrieve history for items
[**getItems**](AccountingApi.md#getItems) | **GET** /Items | Allows you to retrieve any items
[**getJournal**](AccountingApi.md#getJournal) | **GET** /Journals/{JournalID} | Allows you to retrieve a specified journals.
[**getJournals**](AccountingApi.md#getJournals) | **GET** /Journals | Allows you to retrieve any journals.
[**getLinkedTransaction**](AccountingApi.md#getLinkedTransaction) | **GET** /LinkedTransactions/{LinkedTransactionID} | Allows you to retrieve a specified linked transactions (billable expenses)
[**getLinkedTransactions**](AccountingApi.md#getLinkedTransactions) | **GET** /LinkedTransactions | Retrieve linked transactions (billable expenses)
[**getManualJournal**](AccountingApi.md#getManualJournal) | **GET** /ManualJournals/{ManualJournalID} | Allows you to retrieve a specified manual journals
[**getManualJournalAttachmentByFileName**](AccountingApi.md#getManualJournalAttachmentByFileName) | **GET** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to retrieve specified Attachment on ManualJournal by file name
[**getManualJournalAttachmentById**](AccountingApi.md#getManualJournalAttachmentById) | **GET** /ManualJournals/{ManualJournalID}/Attachments/{AttachmentID} | Allows you to retrieve specified Attachment on ManualJournals
[**getManualJournalAttachments**](AccountingApi.md#getManualJournalAttachments) | **GET** /ManualJournals/{ManualJournalID}/Attachments | Allows you to retrieve Attachment for manual journals
[**getManualJournals**](AccountingApi.md#getManualJournals) | **GET** /ManualJournals | Allows you to retrieve any manual journals
[**getOnlineInvoice**](AccountingApi.md#getOnlineInvoice) | **GET** /Invoices/{InvoiceID}/OnlineInvoice | Allows you to retrieve a URL to an online invoice
[**getOrganisationCISSettings**](AccountingApi.md#getOrganisationCISSettings) | **GET** /Organisation/{OrganisationID}/CISSettings | Allows you To verify if an organisation is using contruction industry scheme, you can retrieve the CIS settings for the organistaion.
[**getOrganisations**](AccountingApi.md#getOrganisations) | **GET** /Organisation | Allows you to retrieve Organisation details
[**getOverpayment**](AccountingApi.md#getOverpayment) | **GET** /Overpayments/{OverpaymentID} | Allows you to retrieve a specified overpayments
[**getOverpaymentHistory**](AccountingApi.md#getOverpaymentHistory) | **GET** /Overpayments/{OverpaymentID}/History | Allows you to retrieve a history records of an Overpayment
[**getOverpayments**](AccountingApi.md#getOverpayments) | **GET** /Overpayments | Allows you to retrieve overpayments
[**getPayment**](AccountingApi.md#getPayment) | **GET** /Payments/{PaymentID} | Allows you to retrieve a specified payment for invoices and credit notes
[**getPaymentHistory**](AccountingApi.md#getPaymentHistory) | **GET** /Payments/{PaymentID}/History | Allows you to retrieve history records of a payment
[**getPaymentServices**](AccountingApi.md#getPaymentServices) | **GET** /PaymentServices | Allows you to retrieve payment services
[**getPayments**](AccountingApi.md#getPayments) | **GET** /Payments | Allows you to retrieve payments for invoices and credit notes
[**getPrepayment**](AccountingApi.md#getPrepayment) | **GET** /Prepayments/{PrepaymentID} | Allows you to retrieve a specified prepayments
[**getPrepaymentHistory**](AccountingApi.md#getPrepaymentHistory) | **GET** /Prepayments/{PrepaymentID}/History | Allows you to retrieve a history records of an Prepayment
[**getPrepayments**](AccountingApi.md#getPrepayments) | **GET** /Prepayments | Allows you to retrieve prepayments
[**getPurchaseOrder**](AccountingApi.md#getPurchaseOrder) | **GET** /PurchaseOrders/{PurchaseOrderID} | Allows you to retrieve a specified purchase orders
[**getPurchaseOrderHistory**](AccountingApi.md#getPurchaseOrderHistory) | **GET** /PurchaseOrders/{PurchaseOrderID}/History | Allows you to retrieve history for PurchaseOrder
[**getPurchaseOrders**](AccountingApi.md#getPurchaseOrders) | **GET** /PurchaseOrders | Allows you to retrieve purchase orders
[**getReceipt**](AccountingApi.md#getReceipt) | **GET** /Receipts/{ReceiptID} | Allows you to retrieve a specified draft expense claim receipts
[**getReceiptAttachmentByFileName**](AccountingApi.md#getReceiptAttachmentByFileName) | **GET** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to retrieve Attachments on expense claim receipts by file name
[**getReceiptAttachmentById**](AccountingApi.md#getReceiptAttachmentById) | **GET** /Receipts/{ReceiptID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on expense claim receipts by ID
[**getReceiptAttachments**](AccountingApi.md#getReceiptAttachments) | **GET** /Receipts/{ReceiptID}/Attachments | Allows you to retrieve Attachments for expense claim receipts
[**getReceiptHistory**](AccountingApi.md#getReceiptHistory) | **GET** /Receipts/{ReceiptID}/History | Allows you to retrieve a history records of an Receipt
[**getReceipts**](AccountingApi.md#getReceipts) | **GET** /Receipts | Allows you to retrieve draft expense claim receipts for any user
[**getRepeatingInvoice**](AccountingApi.md#getRepeatingInvoice) | **GET** /RepeatingInvoices/{RepeatingInvoiceID} | Allows you to retrieve a specified repeating invoice
[**getRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#getRepeatingInvoiceAttachmentByFileName) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to retrieve specified attachment on repeating invoices by file name
[**getRepeatingInvoiceAttachmentById**](AccountingApi.md#getRepeatingInvoiceAttachmentById) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{AttachmentID} | Allows you to retrieve a specified Attachments on repeating invoices
[**getRepeatingInvoiceAttachments**](AccountingApi.md#getRepeatingInvoiceAttachments) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments | Allows you to retrieve Attachments on repeating invoice
[**getRepeatingInvoiceHistory**](AccountingApi.md#getRepeatingInvoiceHistory) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/History | Allows you to retrieve history for a repeating invoice
[**getRepeatingInvoices**](AccountingApi.md#getRepeatingInvoices) | **GET** /RepeatingInvoices | Allows you to retrieve any repeating invoices
[**getReportAgedPayablesByContact**](AccountingApi.md#getReportAgedPayablesByContact) | **GET** /Reports/AgedPayablesByContact | Allows you to retrieve report for AgedPayablesByContact
[**getReportAgedReceivablesByContact**](AccountingApi.md#getReportAgedReceivablesByContact) | **GET** /Reports/AgedReceivablesByContact | Allows you to retrieve report for AgedReceivablesByContact
[**getReportBASorGST**](AccountingApi.md#getReportBASorGST) | **GET** /Reports/{ReportID} | Allows you to retrieve report for BAS only valid for AU orgs
[**getReportBASorGSTList**](AccountingApi.md#getReportBASorGSTList) | **GET** /Reports | Allows you to retrieve report for BAS only valid for AU orgs
[**getReportBalanceSheet**](AccountingApi.md#getReportBalanceSheet) | **GET** /Reports/BalanceSheet | Allows you to retrieve report for BalanceSheet
[**getReportBankSummary**](AccountingApi.md#getReportBankSummary) | **GET** /Reports/BankSummary | Allows you to retrieve report for BankSummary
[**getReportBudgetSummary**](AccountingApi.md#getReportBudgetSummary) | **GET** /Reports/BudgetSummary | Allows you to retrieve report for Budget Summary
[**getReportExecutiveSummary**](AccountingApi.md#getReportExecutiveSummary) | **GET** /Reports/ExecutiveSummary | Allows you to retrieve report for ExecutiveSummary
[**getReportProfitAndLoss**](AccountingApi.md#getReportProfitAndLoss) | **GET** /Reports/ProfitAndLoss | Allows you to retrieve report for ProfitAndLoss
[**getReportTenNinetyNine**](AccountingApi.md#getReportTenNinetyNine) | **GET** /Reports/TenNinetyNine | Allows you to retrieve report for TenNinetyNine
[**getReportTrialBalance**](AccountingApi.md#getReportTrialBalance) | **GET** /Reports/TrialBalance | Allows you to retrieve report for TrialBalance
[**getTaxRates**](AccountingApi.md#getTaxRates) | **GET** /TaxRates | Allows you to retrieve Tax Rates
[**getTrackingCategories**](AccountingApi.md#getTrackingCategories) | **GET** /TrackingCategories | Allows you to retrieve tracking categories and options
[**getTrackingCategory**](AccountingApi.md#getTrackingCategory) | **GET** /TrackingCategories/{TrackingCategoryID} | Allows you to retrieve tracking categories and options for specified category
[**getUser**](AccountingApi.md#getUser) | **GET** /Users/{UserID} | Allows you to retrieve a specified user
[**getUsers**](AccountingApi.md#getUsers) | **GET** /Users | Allows you to retrieve users
[**updateAccount**](AccountingApi.md#updateAccount) | **POST** /Accounts/{AccountID} | Allows you to update a chart of accounts
[**updateAccountAttachmentByFileName**](AccountingApi.md#updateAccountAttachmentByFileName) | **POST** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to update Attachment on Account by Filename
[**updateBankTransaction**](AccountingApi.md#updateBankTransaction) | **POST** /BankTransactions/{BankTransactionID} | Allows you to update a single spend or receive money transaction
[**updateBankTransactionAttachmentByFileName**](AccountingApi.md#updateBankTransactionAttachmentByFileName) | **POST** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to update an Attachment on BankTransaction by Filename
[**updateBankTransferAttachmentByFileName**](AccountingApi.md#updateBankTransferAttachmentByFileName) | **POST** /BankTransfers/{BankTransferID}/Attachments/{FileName} | 
[**updateContact**](AccountingApi.md#updateContact) | **POST** /Contacts/{ContactID} | 
[**updateContactAttachmentByFileName**](AccountingApi.md#updateContactAttachmentByFileName) | **POST** /Contacts/{ContactID}/Attachments/{FileName} | 
[**updateContactGroup**](AccountingApi.md#updateContactGroup) | **POST** /ContactGroups/{ContactGroupID} | Allows you to update a Contract Group
[**updateCreditNote**](AccountingApi.md#updateCreditNote) | **POST** /CreditNotes/{CreditNoteID} | Allows you to update a specific credit note
[**updateCreditNoteAttachmentByFileName**](AccountingApi.md#updateCreditNoteAttachmentByFileName) | **POST** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to update Attachments on CreditNote by file name
[**updateEmployee**](AccountingApi.md#updateEmployee) | **POST** /Employees/{EmployeeID} | Allows you to update a specific employee used in Xero payrun
[**updateExpenseClaim**](AccountingApi.md#updateExpenseClaim) | **POST** /ExpenseClaims/{ExpenseClaimID} | Allows you to update specified expense claims
[**updateInvoice**](AccountingApi.md#updateInvoice) | **POST** /Invoices/{InvoiceID} | Allows you to update a specified sales invoices or purchase bills
[**updateInvoiceAttachmentByFileName**](AccountingApi.md#updateInvoiceAttachmentByFileName) | **POST** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to update Attachment on invoices or purchase bills by it&#39;s filename
[**updateItem**](AccountingApi.md#updateItem) | **POST** /Items/{ItemID} | Allows you to udpate a specified item
[**updateLinkedTransaction**](AccountingApi.md#updateLinkedTransaction) | **POST** /LinkedTransactions/{LinkedTransactionID} | Allows you to update a specified linked transactions (billable expenses)
[**updateManualJournal**](AccountingApi.md#updateManualJournal) | **POST** /ManualJournals/{ManualJournalID} | Allows you to update a specified manual journal
[**updateManualJournalAttachmentByFileName**](AccountingApi.md#updateManualJournalAttachmentByFileName) | **POST** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to update a specified Attachment on ManualJournal by file name
[**updatePurchaseOrder**](AccountingApi.md#updatePurchaseOrder) | **POST** /PurchaseOrders/{PurchaseOrderID} | Allows you to update a specified purchase order
[**updateReceipt**](AccountingApi.md#updateReceipt) | **POST** /Receipts/{ReceiptID} | Allows you to retrieve a specified draft expense claim receipts
[**updateReceiptAttachmentByFileName**](AccountingApi.md#updateReceiptAttachmentByFileName) | **POST** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to update Attachment on expense claim receipts by file name
[**updateRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#updateRepeatingInvoiceAttachmentByFileName) | **POST** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to update specified attachment on repeating invoices by file name
[**updateTaxRate**](AccountingApi.md#updateTaxRate) | **POST** /TaxRates | Allows you to update Tax Rates
[**updateTrackingCategory**](AccountingApi.md#updateTrackingCategory) | **POST** /TrackingCategories/{TrackingCategoryID} | Allows you to update tracking categories


# **createAccount**
> \XeroAPI\XeroPHP\Models\Accounting\Accounts createAccount($xero_tenant_id, $account)

Allows you to create a new chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account = { "Code":"123456", "Name":"Foobar", "Type":"EXPENSE", "Description":"Hello World" }; // \XeroAPI\XeroPHP\Models\Accounting\Account | Request of type Account

try {
    $result = $apiInstance->createAccount($xero_tenant_id, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account** | [**\XeroAPI\XeroPHP\Models\Accounting\Account**](../Model/Account.md)| Request of type Account |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Accounts**](../Model/Accounts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createAccountAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createAccountAttachmentByFileName($xero_tenant_id, $account_id, $file_name, $body)

Allows you to create Attachment on Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$file_name = 'file_name_example'; // string | Name of the attachment
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createAccountAttachmentByFileName($xero_tenant_id, $account_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **file_name** | **string**| Name of the attachment |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBankTransaction**
> \XeroAPI\XeroPHP\Models\Accounting\BankTransactions createBankTransaction($xero_tenant_id, $bank_transactions, $summarize_errors)

Allows you to create a spend or receive money transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transactions = { "BankTransactions":[ { "Type":"SPEND", "Contact":{ "ContactID":"5cc8cf28-567e-4d43-b287-687cfcaec47c" }, "LineItems":[ { "Description":"Foobar", "Quantity":1.0, "UnitAmount":20.0, "AccountCode":"400" } ], "BankAccount":{ "Code":"088" } } ] }; // \XeroAPI\XeroPHP\Models\Accounting\BankTransactions | 
$summarize_errors = True; // bool | response format that shows validation errors for each bank transaction

try {
    $result = $apiInstance->createBankTransaction($xero_tenant_id, $bank_transactions, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transactions** | [**\XeroAPI\XeroPHP\Models\Accounting\BankTransactions**](../Model/BankTransactions.md)|  |
 **summarize_errors** | **bool**| response format that shows validation errors for each bank transaction | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBankTransactionAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createBankTransactionAttachmentByFileName($xero_tenant_id, $bank_transaction_id, $file_name, $body)

Allows you to createa an Attachment on BankTransaction by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$file_name = 'file_name_example'; // string | The name of the file being attached
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createBankTransactionAttachmentByFileName($xero_tenant_id, $bank_transaction_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **file_name** | **string**| The name of the file being attached |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBankTransactionHistoryRecord**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createBankTransactionHistoryRecord($xero_tenant_id, $bank_transaction_id, $history_records)

Allows you to create history record for a bank transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$history_records = new \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords(); // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createBankTransactionHistoryRecord($xero_tenant_id, $bank_transaction_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransactionHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBankTransfer**
> \XeroAPI\XeroPHP\Models\Accounting\BankTransfers createBankTransfer($xero_tenant_id, $bank_transfers)

Allows you to create a bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfers = { "BankTransfers":[ { "FromBankAccount":{ "Code":"090", "Name":"My Savings", "AccountID":"7e5e243b-9fcd-4aef-8e3a-c70be1e39bfa", "Type":"BANK", "BankAccountNumber":"123455", "Status":"ACTIVE", "BankAccountType":"BANK", "CurrencyCode":"USD", "TaxType":"NONE", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"ASSET", "ReportingCode":"ASS", "ReportingCodeName":"Assets", "HasAttachments":false, "UpdatedDateUTC":"2016-10-17T13:45:33.993-07:00" }, "ToBankAccount":{ "Code":"088", "Name":"Business Wells Fargo", "AccountID":"6f7594f2-f059-4d56-9e67-47ac9733bfe9", "Type":"BANK", "BankAccountNumber":"123455", "Status":"ACTIVE", "BankAccountType":"BANK", "CurrencyCode":"USD", "TaxType":"NONE", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"ASSET", "ReportingCode":"ASS", "ReportingCodeName":"Assets", "HasAttachments":false, "UpdatedDateUTC":"2016-06-03T08:31:14.517-07:00" }, "Amount":"50.00" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\BankTransfers | 

try {
    $result = $apiInstance->createBankTransfer($xero_tenant_id, $bank_transfers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfers** | [**\XeroAPI\XeroPHP\Models\Accounting\BankTransfers**](../Model/BankTransfers.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BankTransfers**](../Model/BankTransfers.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBankTransferAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createBankTransferAttachmentByFileName($xero_tenant_id, $bank_transfer_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$file_name = 'file_name_example'; // string | The name of the file being attached to a Bank Transfer
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createBankTransferAttachmentByFileName($xero_tenant_id, $bank_transfer_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **file_name** | **string**| The name of the file being attached to a Bank Transfer |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBankTransferHistoryRecord**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createBankTransferHistoryRecord($xero_tenant_id, $bank_transfer_id, $history_records)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$history_records = new \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords(); // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createBankTransferHistoryRecord($xero_tenant_id, $bank_transfer_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransferHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBatchPayment**
> \XeroAPI\XeroPHP\Models\Accounting\BatchPayments createBatchPayment($xero_tenant_id, $batch_payments)

Create one or many BatchPayments for invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$batch_payments = { "BatchPayments":[ { "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Reference":"Foobar38515", "Date":"2019-02-22", "Amount":3.0, "Payments":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"e6039672-b161-40cd-b07b-a0178e7186ad" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 }, { "Invoice":{ "LineItems":[
], "InvoiceID":"e4abafb4-1f5b-4d9f-80b3-9a7b815bc302" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 }, { "Invoice":{ "LineItems":[
], "InvoiceID":"3323652c-155e-433b-8a73-4dde7cfbf410" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 } ] } ] }; // \XeroAPI\XeroPHP\Models\Accounting\BatchPayments | Request of type BatchPayments containing a Payments array with one or more Payment objects

try {
    $result = $apiInstance->createBatchPayment($xero_tenant_id, $batch_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBatchPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **batch_payments** | [**\XeroAPI\XeroPHP\Models\Accounting\BatchPayments**](../Model/BatchPayments.md)| Request of type BatchPayments containing a Payments array with one or more Payment objects |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BatchPayments**](../Model/BatchPayments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBatchPaymentHistoryRecord**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createBatchPaymentHistoryRecord($xero_tenant_id, $batch_payment_id, $history_records)

Allows you to create a history record for a Batch Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$batch_payment_id = 'batch_payment_id_example'; // string | Unique identifier for BatchPayment
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createBatchPaymentHistoryRecord($xero_tenant_id, $batch_payment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBatchPaymentHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **batch_payment_id** | [**string**](../Model/.md)| Unique identifier for BatchPayment |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createBrandingThemePaymentServices**
> \XeroAPI\XeroPHP\Models\Accounting\PaymentServices createBrandingThemePaymentServices($xero_tenant_id, $branding_theme_id, $payment_service)

Allow for the creation of new custom payment service for specified Branding Theme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$branding_theme_id = 'branding_theme_id_example'; // string | Unique identifier for a Branding Theme
$payment_service = { "PaymentServiceID":"dede7858-14e3-4a46-bf95-4d4cc491e645", "PaymentServiceName":"ACME Payments", "PaymentServiceUrl":"https://www.payupnow.com/", "PayNowText":"Pay Now" }; // \XeroAPI\XeroPHP\Models\Accounting\PaymentService | 

try {
    $result = $apiInstance->createBrandingThemePaymentServices($xero_tenant_id, $branding_theme_id, $payment_service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBrandingThemePaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **branding_theme_id** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |
 **payment_service** | [**\XeroAPI\XeroPHP\Models\Accounting\PaymentService**](../Model/PaymentService.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createContact**
> \XeroAPI\XeroPHP\Models\Accounting\Contacts createContact($xero_tenant_id, $contact)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact = { "Name":"Foo9987", "EmailAddress":"sid32476@blah.com", "Phones":[ { "PhoneType":"MOBILE", "PhoneNumber":"555-1212", "PhoneAreaCode":"415" } ], "PaymentTerms":{ "Bills":{ "Day":15, "Type":"OFCURRENTMONTH" }, "Sales":{ "Day":10, "Type":"DAYSAFTERBILLMONTH" } } }; // \XeroAPI\XeroPHP\Models\Accounting\Contact | 

try {
    $result = $apiInstance->createContact($xero_tenant_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact** | [**\XeroAPI\XeroPHP\Models\Accounting\Contact**](../Model/Contact.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Contacts**](../Model/Contacts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createContactAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createContactAttachmentByFileName($xero_tenant_id, $contact_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$file_name = 'file_name_example'; // string | Name for the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createContactAttachmentByFileName($xero_tenant_id, $contact_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **file_name** | **string**| Name for the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createContactGroup**
> \XeroAPI\XeroPHP\Models\Accounting\ContactGroups createContactGroup($xero_tenant_id, $contact_groups)

Allows you to create a contact group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_groups = { "ContactGroups":[ { "Name":"Suppliers" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\ContactGroups | an array of contact groups with names specified

try {
    $result = $apiInstance->createContactGroup($xero_tenant_id, $contact_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_groups** | [**\XeroAPI\XeroPHP\Models\Accounting\ContactGroups**](../Model/ContactGroups.md)| an array of contact groups with names specified |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createContactGroupContacts**
> \XeroAPI\XeroPHP\Models\Accounting\Contacts createContactGroupContacts($xero_tenant_id, $contact_group_id, $contacts)

Allows you to add Contacts to a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group
$contacts = { "Contacts":[ { "ContactID":"a3675fc4-f8dd-4f03-ba5b-f1870566bcd7" }, { "ContactID":"4e1753b9-018a-4775-b6aa-1bc7871cfee3" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Contacts | an array of contacts with ContactID to be added to ContactGroup

try {
    $result = $apiInstance->createContactGroupContacts($xero_tenant_id, $contact_group_id, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactGroupContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contacts** | [**\XeroAPI\XeroPHP\Models\Accounting\Contacts**](../Model/Contacts.md)| an array of contacts with ContactID to be added to ContactGroup |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Contacts**](../Model/Contacts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createContactHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createContactHistory($xero_tenant_id, $contact_id, $history_records)

Allows you to retrieve a history records of an Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createContactHistory($xero_tenant_id, $contact_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createCreditNote**
> \XeroAPI\XeroPHP\Models\Accounting\CreditNotes createCreditNote($xero_tenant_id, $credit_notes, $summarize_errors)

Allows you to create a credit note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_notes = { "CreditNotes":[ { "Type":"ACCPAYCREDIT", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Date":"2019-01-05", "LineItems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400" } ] } ] }; // \XeroAPI\XeroPHP\Models\Accounting\CreditNotes | an array of Credit Notes with a single CreditNote object.
$summarize_errors = True; // bool | shows validation errors for each credit note

try {
    $result = $apiInstance->createCreditNote($xero_tenant_id, $credit_notes, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_notes** | [**\XeroAPI\XeroPHP\Models\Accounting\CreditNotes**](../Model/CreditNotes.md)| an array of Credit Notes with a single CreditNote object. |
 **summarize_errors** | **bool**| shows validation errors for each credit note | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createCreditNoteAllocation**
> \XeroAPI\XeroPHP\Models\Accounting\Allocations createCreditNoteAllocation($xero_tenant_id, $credit_note_id, $allocations)

Allows you to create Allocation on CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c45720a1-ade3-4a38-a064-d15489be6841" }, "Amount":1.0, "Date":"2019-03-05" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Allocations | an array of Allocations with single Allocation object defined.

try {
    $result = $apiInstance->createCreditNoteAllocation($xero_tenant_id, $credit_note_id, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **allocations** | [**\XeroAPI\XeroPHP\Models\Accounting\Allocations**](../Model/Allocations.md)| an array of Allocations with single Allocation object defined. |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Allocations**](../Model/Allocations.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createCreditNoteAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createCreditNoteAttachmentByFileName($xero_tenant_id, $credit_note_id, $file_name, $body)

Allows you to create Attachments on CreditNote by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$file_name = 'file_name_example'; // string | Name of the file you are attaching to Credit Note
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createCreditNoteAttachmentByFileName($xero_tenant_id, $credit_note_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **file_name** | **string**| Name of the file you are attaching to Credit Note |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createCreditNoteHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createCreditNoteHistory($xero_tenant_id, $credit_note_id, $history_records)

Allows you to retrieve a history records of an CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createCreditNoteHistory($xero_tenant_id, $credit_note_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createCurrency**
> \XeroAPI\XeroPHP\Models\Accounting\Currencies createCurrency($xero_tenant_id, $currencies)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$currencies = { "Currencies":[ { "Code":"USD", "Description":"United States Dollar" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Currencies | 

try {
    $result = $apiInstance->createCurrency($xero_tenant_id, $currencies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **currencies** | [**\XeroAPI\XeroPHP\Models\Accounting\Currencies**](../Model/Currencies.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Currencies**](../Model/Currencies.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createEmployee**
> \XeroAPI\XeroPHP\Models\Accounting\Employees createEmployee($xero_tenant_id, $employees)

Allows you to create new employees used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employees = { "Employees":[ { "FirstName":"Nick", "LastName":"Fury", "ExternalLink":{ "Url":"http://twitter.com/#!/search/Nick+Fury" } } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Employees | 

try {
    $result = $apiInstance->createEmployee($xero_tenant_id, $employees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employees** | [**\XeroAPI\XeroPHP\Models\Accounting\Employees**](../Model/Employees.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createExpenseClaim**
> \XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims createExpenseClaim($xero_tenant_id, $expense_claims, $summarize_errors)

Allows you to retrieve expense claims

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$expense_claims = { "ExpenseClaims":[ { "Status":"SUBMITTED", "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Receipts":[ { "LineItems":[
], "ReceiptID":"dc1c7f6d-0a4c-402f-acac-551d62ce5816" } ] } ] }; // \XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims | 
$summarize_errors = True; // bool | shows validation errors for each expense claim

try {
    $result = $apiInstance->createExpenseClaim($xero_tenant_id, $expense_claims, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **expense_claims** | [**\XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims**](../Model/ExpenseClaims.md)|  |
 **summarize_errors** | **bool**| shows validation errors for each expense claim | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createExpenseClaimHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createExpenseClaimHistory($xero_tenant_id, $expense_claim_id, $history_records)

Allows you to create a history records of an ExpenseClaim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createExpenseClaimHistory($xero_tenant_id, $expense_claim_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createExpenseClaimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createInvoice**
> \XeroAPI\XeroPHP\Models\Accounting\Invoices createInvoice($xero_tenant_id, $invoices, $summarize_errors)

Allows you to create any sales invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoices = { "Invoices":[ { "Type":"ACCREC", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "LineItems":[ { "Description":"Acme Tires", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"200", "TaxType":"NONE", "LineAmount":40.0 } ], "Date":"2019-03-11", "DueDate":"2018-12-10", "Reference":"Website Design", "Status":"AUTHORISED" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Invoices | 
$summarize_errors = True; // bool | shows validation errors for each invoice

try {
    $result = $apiInstance->createInvoice($xero_tenant_id, $invoices, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoices** | [**\XeroAPI\XeroPHP\Models\Accounting\Invoices**](../Model/Invoices.md)|  |
 **summarize_errors** | **bool**| shows validation errors for each invoice | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Invoices**](../Model/Invoices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createInvoiceAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createInvoiceAttachmentByFileName($xero_tenant_id, $invoice_id, $file_name, $body)

Allows you to create an Attachment on invoices or purchase bills by it's filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$file_name = 'file_name_example'; // string | Name of the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createInvoiceAttachmentByFileName($xero_tenant_id, $invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **file_name** | **string**| Name of the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createInvoiceHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createInvoiceHistory($xero_tenant_id, $invoice_id, $history_records)

Allows you to retrieve a history records of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createInvoiceHistory($xero_tenant_id, $invoice_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createItem**
> \XeroAPI\XeroPHP\Models\Accounting\Items createItem($xero_tenant_id, $items)

Allows you to create an item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$items = { "Items":[ { "Code":"abc65591", "Name":"Hello11350", "Description":"foobar" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Items | 

try {
    $result = $apiInstance->createItem($xero_tenant_id, $items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **items** | [**\XeroAPI\XeroPHP\Models\Accounting\Items**](../Model/Items.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Items**](../Model/Items.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createItemHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createItemHistory($xero_tenant_id, $item_id, $history_records)

Allows you to create a history record for items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$item_id = 'item_id_example'; // string | Unique identifier for an Item
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createItemHistory($xero_tenant_id, $item_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createItemHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createLinkedTransaction**
> \XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions createLinkedTransaction($xero_tenant_id, $linked_transactions)

Allows you to create linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$linked_transactions = { "LinkedTransactions":[ { "SourceTransactionID":"a848644a-f20f-4630-98c3-386bd7505631", "SourceLineItemID":"b0df260d-3cc8-4ced-9bd6-41924f624ed3" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions | 

try {
    $result = $apiInstance->createLinkedTransaction($xero_tenant_id, $linked_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **linked_transactions** | [**\XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions**](../Model/LinkedTransactions.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createManualJournal**
> \XeroAPI\XeroPHP\Models\Accounting\ManualJournals createManualJournal($xero_tenant_id, $manual_journals)

Allows you to create a manual journal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journals = { "ManualJournals":[ { "Narration":"Foo bar", "JournalLines":[ { "LineAmount":100.0, "AccountCode":"400", "Description":"Hello there" }, { "LineAmount":-100.0, "AccountCode":"400", "Description":"Goodbye", "Tracking":[ { "Name":"Simpsons", "Option":"Bart" } ] } ], "Date":"2019-03-14" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\ManualJournals | 

try {
    $result = $apiInstance->createManualJournal($xero_tenant_id, $manual_journals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journals** | [**\XeroAPI\XeroPHP\Models\Accounting\ManualJournals**](../Model/ManualJournals.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createManualJournalAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createManualJournalAttachmentByFileName($xero_tenant_id, $manual_journal_id, $file_name, $body)

Allows you to create a specified Attachment on ManualJournal by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$file_name = 'file_name_example'; // string | The name of the file being attached to a ManualJournal
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createManualJournalAttachmentByFileName($xero_tenant_id, $manual_journal_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **file_name** | **string**| The name of the file being attached to a ManualJournal |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createOverpaymentAllocation**
> \XeroAPI\XeroPHP\Models\Accounting\Allocations createOverpaymentAllocation($xero_tenant_id, $overpayment_id, $allocations)

Allows you to retrieve Allocations for overpayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c45720a1-ade3-4a38-a064-d15489be6841" }, "Amount":1.0, "Date":"2019-03-12" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Allocations | 

try {
    $result = $apiInstance->createOverpaymentAllocation($xero_tenant_id, $overpayment_id, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createOverpaymentAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |
 **allocations** | [**\XeroAPI\XeroPHP\Models\Accounting\Allocations**](../Model/Allocations.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Allocations**](../Model/Allocations.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createOverpaymentHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createOverpaymentHistory($xero_tenant_id, $overpayment_id, $history_records)

Allows you to create history records of an Overpayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment
$history_records = new \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords(); // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createOverpaymentHistory($xero_tenant_id, $overpayment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createOverpaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createPayment**
> \XeroAPI\XeroPHP\Models\Accounting\Payments createPayment($xero_tenant_id, $payments)

Allows you to create payments for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payments = { "Payments":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c7c37b83-ac95-45ea-88ba-8ad83a5f22fe" }, "Account":{ "Code":"970" }, "Date":"2019-03-12", "Amount":1.0 } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Payments | 

try {
    $result = $apiInstance->createPayment($xero_tenant_id, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payments** | [**\XeroAPI\XeroPHP\Models\Accounting\Payments**](../Model/Payments.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Payments**](../Model/Payments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createPaymentHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createPaymentHistory($xero_tenant_id, $payment_id, $history_records)

Allows you to create a history record for a payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createPaymentHistory($xero_tenant_id, $payment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createPaymentService**
> \XeroAPI\XeroPHP\Models\Accounting\PaymentServices createPaymentService($xero_tenant_id, $payment_services)

Allows you to create payment services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payment_services = { "PaymentServices":[ { "PaymentServiceName":"PayUpNow", "PaymentServiceUrl":"https://www.payupnow.com/", "PayNowText":"Time To Pay" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\PaymentServices | 

try {
    $result = $apiInstance->createPaymentService($xero_tenant_id, $payment_services);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPaymentService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payment_services** | [**\XeroAPI\XeroPHP\Models\Accounting\PaymentServices**](../Model/PaymentServices.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createPrepaymentAllocation**
> \XeroAPI\XeroPHP\Models\Accounting\Allocations createPrepaymentAllocation($xero_tenant_id, $prepayment_id, $allocations)

Allows you to create an Allocation for prepayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$prepayment_id = 'prepayment_id_example'; // string | 
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c7c37b83-ac95-45ea-88ba-8ad83a5f22fe" }, "Amount":1.0, "Date":"2019-03-13" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Allocations | 

try {
    $result = $apiInstance->createPrepaymentAllocation($xero_tenant_id, $prepayment_id, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPrepaymentAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **prepayment_id** | [**string**](../Model/.md)|  |
 **allocations** | [**\XeroAPI\XeroPHP\Models\Accounting\Allocations**](../Model/Allocations.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Allocations**](../Model/Allocations.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createPrepaymentHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createPrepaymentHistory($xero_tenant_id, $prepayment_id, $history_records)

Allows you to create a history record for an Prepayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$prepayment_id = 'prepayment_id_example'; // string | Unique identifier for a PrePayment
$history_records = new \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords(); // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createPrepaymentHistory($xero_tenant_id, $prepayment_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPrepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **prepayment_id** | [**string**](../Model/.md)| Unique identifier for a PrePayment |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createPurchaseOrder**
> \XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders createPurchaseOrder($xero_tenant_id, $purchase_orders, $summarize_errors)

Allows you to create purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$purchase_orders = { "PurchaseOrders":[ { "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "LineItems":[ { "Description":"Foobar", "Quantity":1.0, "UnitAmount":20.0, "AccountCode":"710" } ], "Date":"2019-03-13" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders | 
$summarize_errors = True; // bool | shows validation errors for each purchase order.

try {
    $result = $apiInstance->createPurchaseOrder($xero_tenant_id, $purchase_orders, $summarize_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **purchase_orders** | [**\XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders**](../Model/PurchaseOrders.md)|  |
 **summarize_errors** | **bool**| shows validation errors for each purchase order. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createPurchaseOrderHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createPurchaseOrderHistory($xero_tenant_id, $purchase_order_id, $history_records)

Allows you to create HistoryRecord for purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder
$history_records = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createPurchaseOrderHistory($xero_tenant_id, $purchase_order_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPurchaseOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createReceipt**
> \XeroAPI\XeroPHP\Models\Accounting\Receipts createReceipt($xero_tenant_id, $receipts)

Allows you to create draft expense claim receipts for any user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipts = { "Receipts":[ { "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "LineItems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400", "TaxType":"NONE", "LineAmount":40.0 } ], "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "LineAmountTypes":"NoTax", "Status":"DRAFT" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Receipts | 

try {
    $result = $apiInstance->createReceipt($xero_tenant_id, $receipts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipts** | [**\XeroAPI\XeroPHP\Models\Accounting\Receipts**](../Model/Receipts.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Receipts**](../Model/Receipts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createReceiptAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createReceiptAttachmentByFileName($xero_tenant_id, $receipt_id, $file_name, $body)

Allows you to create Attachment on expense claim receipts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$file_name = 'file_name_example'; // string | The name of the file being attached to the Receipt
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createReceiptAttachmentByFileName($xero_tenant_id, $receipt_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **file_name** | **string**| The name of the file being attached to the Receipt |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createReceiptHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createReceiptHistory($xero_tenant_id, $receipt_id, $history_records)

Allows you to retrieve a history records of an Receipt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$history_records = new \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords(); // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createReceiptHistory($xero_tenant_id, $receipt_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceiptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createRepeatingInvoiceAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments createRepeatingInvoiceAttachmentByFileName($xero_tenant_id, $repeating_invoice_id, $file_name, $body)

Allows you to create attachment on repeating invoices by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$file_name = 'file_name_example'; // string | The name of the file being attached to a Repeating Invoice
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createRepeatingInvoiceAttachmentByFileName($xero_tenant_id, $repeating_invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **file_name** | **string**| The name of the file being attached to a Repeating Invoice |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createRepeatingInvoiceHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords createRepeatingInvoiceHistory($xero_tenant_id, $repeating_invoice_id, $history_records)

Allows you to create history for a repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$history_records = new \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords(); // \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords | 

try {
    $result = $apiInstance->createRepeatingInvoiceHistory($xero_tenant_id, $repeating_invoice_id, $history_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createRepeatingInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **history_records** | [**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createTaxRate**
> \XeroAPI\XeroPHP\Models\Accounting\TaxRates createTaxRate($xero_tenant_id, $tax_rates)

Allows you to create Tax Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tax_rates = { "TaxRates":[ { "Name":"SDKTax29067", "TaxComponents":[ { "Name":"State Tax", "Rate":2.25 } ], "ReportTaxType":"INPUT" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\TaxRates | 

try {
    $result = $apiInstance->createTaxRate($xero_tenant_id, $tax_rates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tax_rates** | [**\XeroAPI\XeroPHP\Models\Accounting\TaxRates**](../Model/TaxRates.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TaxRates**](../Model/TaxRates.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createTrackingCategory**
> \XeroAPI\XeroPHP\Models\Accounting\TrackingCategories createTrackingCategory($xero_tenant_id, $tracking_category)

Allows you to create tracking categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tracking_category = { "Name":"FooBar" }; // \XeroAPI\XeroPHP\Models\Accounting\TrackingCategory | 

try {
    $result = $apiInstance->createTrackingCategory($xero_tenant_id, $tracking_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tracking_category** | [**\XeroAPI\XeroPHP\Models\Accounting\TrackingCategory**](../Model/TrackingCategory.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createTrackingOptions**
> \XeroAPI\XeroPHP\Models\Accounting\TrackingOptions createTrackingOptions($xero_tenant_id, $tracking_category_id, $tracking_option)

Allows you to create options for a specified tracking category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory
$tracking_option = { "Name":"Bar40423" }; // \XeroAPI\XeroPHP\Models\Accounting\TrackingOption | 

try {
    $result = $apiInstance->createTrackingOptions($xero_tenant_id, $tracking_category_id, $tracking_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTrackingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **tracking_option** | [**\XeroAPI\XeroPHP\Models\Accounting\TrackingOption**](../Model/TrackingOption.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TrackingOptions**](../Model/TrackingOptions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteAccount**
> \XeroAPI\XeroPHP\Models\Accounting\Accounts deleteAccount($xero_tenant_id, $account_id)

Allows you to delete a chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for retrieving single object

try {
    $result = $apiInstance->deleteAccount($xero_tenant_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for retrieving single object |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Accounts**](../Model/Accounts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteContactGroupContact**
> deleteContactGroupContact($xero_tenant_id, $contact_group_id, $contact_id)

Allows you to delete a specific Contact from a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $apiInstance->deleteContactGroupContact($xero_tenant_id, $contact_group_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteContactGroupContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

void (empty response body)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteContactGroupContacts**
> deleteContactGroupContacts($xero_tenant_id, $contact_group_id)

Allows you to delete  all Contacts from a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group

try {
    $apiInstance->deleteContactGroupContacts($xero_tenant_id, $contact_group_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteContactGroupContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |

### Return type

void (empty response body)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItem**
> deleteItem($xero_tenant_id, $item_id)

Allows you to delete a specified item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$item_id = 'item_id_example'; // string | Unique identifier for an Item

try {
    $apiInstance->deleteItem($xero_tenant_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

void (empty response body)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLinkedTransaction**
> deleteLinkedTransaction($xero_tenant_id, $linked_transaction_id)

Allows you to delete a specified linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$linked_transaction_id = 'linked_transaction_id_example'; // string | Unique identifier for a LinkedTransaction

try {
    $apiInstance->deleteLinkedTransaction($xero_tenant_id, $linked_transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **linked_transaction_id** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |

### Return type

void (empty response body)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deletePayment**
> \XeroAPI\XeroPHP\Models\Accounting\Payments deletePayment($xero_tenant_id, $payment_id, $payments)

Allows you to update a specified payment for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment
$payments = { "Payments":[ { "Status":"DELETED" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Payments | 

try {
    $result = $apiInstance->deletePayment($xero_tenant_id, $payment_id, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deletePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |
 **payments** | [**\XeroAPI\XeroPHP\Models\Accounting\Payments**](../Model/Payments.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Payments**](../Model/Payments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteTrackingCategory**
> \XeroAPI\XeroPHP\Models\Accounting\TrackingCategories deleteTrackingCategory($xero_tenant_id, $tracking_category_id)

Allows you to delete tracking categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory

try {
    $result = $apiInstance->deleteTrackingCategory($xero_tenant_id, $tracking_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteTrackingOptions**
> \XeroAPI\XeroPHP\Models\Accounting\TrackingOptions deleteTrackingOptions($xero_tenant_id, $tracking_category_id, $tracking_option_id)

Allows you to delete a specified option for a specified tracking category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory
$tracking_option_id = 'tracking_option_id_example'; // string | Unique identifier for a Tracking Option

try {
    $result = $apiInstance->deleteTrackingOptions($xero_tenant_id, $tracking_category_id, $tracking_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteTrackingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **tracking_option_id** | [**string**](../Model/.md)| Unique identifier for a Tracking Option |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TrackingOptions**](../Model/TrackingOptions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **emailInvoice**
> emailInvoice($xero_tenant_id, $invoice_id, $request_empty)

Allows you to email a copy of invoice to related Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$request_empty = new \XeroAPI\XeroPHP\Models\Accounting\RequestEmpty(); // \XeroAPI\XeroPHP\Models\Accounting\RequestEmpty | 

try {
    $apiInstance->emailInvoice($xero_tenant_id, $invoice_id, $request_empty);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->emailInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **request_empty** | [**\XeroAPI\XeroPHP\Models\Accounting\RequestEmpty**](../Model/RequestEmpty.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAccount**
> \XeroAPI\XeroPHP\Models\Accounting\Accounts getAccount($xero_tenant_id, $account_id)

Allows you to retrieve a single chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for retrieving single object

try {
    $result = $apiInstance->getAccount($xero_tenant_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for retrieving single object |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Accounts**](../Model/Accounts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAccountAttachmentByFileName**
> \SplFileObject getAccountAttachmentByFileName($xero_tenant_id, $account_id, $file_name, $content_type)

Allows you to retrieve Attachment on Account by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$file_name = 'file_name_example'; // string | Name of the attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getAccountAttachmentByFileName($xero_tenant_id, $account_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **file_name** | **string**| Name of the attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAccountAttachmentById**
> \SplFileObject getAccountAttachmentById($xero_tenant_id, $account_id, $attachment_id, $content_type)

Allows you to retrieve specific Attachment on Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$attachment_id = 'attachment_id_example'; // string | Unique identifier for Attachment object
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getAccountAttachmentById($xero_tenant_id, $account_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for Attachment object |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAccountAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getAccountAttachments($xero_tenant_id, $account_id)

Allows you to retrieve Attachments for accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for Account object

try {
    $result = $apiInstance->getAccountAttachments($xero_tenant_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAccounts**
> \XeroAPI\XeroPHP\Models\Accounting\Accounts getAccounts($xero_tenant_id, $if_modified_since, $where, $order)

Allows you to retrieve the full chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getAccounts($xero_tenant_id, $if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Accounts**](../Model/Accounts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransaction**
> \XeroAPI\XeroPHP\Models\Accounting\BankTransactions getBankTransaction($xero_tenant_id, $bank_transaction_id)

Allows you to retrieve a single spend or receive money transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransaction($xero_tenant_id, $bank_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransactionAttachmentByFileName**
> \SplFileObject getBankTransactionAttachmentByFileName($xero_tenant_id, $bank_transaction_id, $file_name, $content_type)

Allows you to retrieve Attachments on BankTransaction by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$file_name = 'file_name_example'; // string | The name of the file being attached
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransactionAttachmentByFileName($xero_tenant_id, $bank_transaction_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **file_name** | **string**| The name of the file being attached |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransactionAttachmentById**
> \SplFileObject getBankTransactionAttachmentById($xero_tenant_id, $bank_transaction_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on a specific BankTransaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$attachment_id = 'attachment_id_example'; // string | Xero generated unique identifier for an attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransactionAttachmentById($xero_tenant_id, $bank_transaction_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **attachment_id** | [**string**](../Model/.md)| Xero generated unique identifier for an attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransactionAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getBankTransactionAttachments($xero_tenant_id, $bank_transaction_id)

Allows you to retrieve any attachments to bank transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransactionAttachments($xero_tenant_id, $bank_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransactions**
> \XeroAPI\XeroPHP\Models\Accounting\BankTransactions getBankTransactions($xero_tenant_id, $if_modified_since, $where, $order, $page, $unitdp)

Allows you to retrieve any spend or receive money transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 bank transactions will be returned in a single API call with line items shown for each bank transaction
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getBankTransactions($xero_tenant_id, $if_modified_since, $where, $order, $page, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 bank transactions will be returned in a single API call with line items shown for each bank transaction | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransactionsHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getBankTransactionsHistory($xero_tenant_id, $bank_transaction_id)

Allows you to retrieve history from a bank transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransactionsHistory($xero_tenant_id, $bank_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransfer**
> \XeroAPI\XeroPHP\Models\Accounting\BankTransfers getBankTransfer($xero_tenant_id, $bank_transfer_id)

Allows you to retrieve any bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransfer($xero_tenant_id, $bank_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BankTransfers**](../Model/BankTransfers.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransferAttachmentByFileName**
> \SplFileObject getBankTransferAttachmentByFileName($xero_tenant_id, $bank_transfer_id, $file_name, $content_type)

Allows you to retrieve Attachments on BankTransfer by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$file_name = 'file_name_example'; // string | The name of the file being attached to a Bank Transfer
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransferAttachmentByFileName($xero_tenant_id, $bank_transfer_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **file_name** | **string**| The name of the file being attached to a Bank Transfer |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransferAttachmentById**
> \SplFileObject getBankTransferAttachmentById($xero_tenant_id, $bank_transfer_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on BankTransfer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$attachment_id = 'attachment_id_example'; // string | Xero generated unique identifier for an Attachment to a bank transfer
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransferAttachmentById($xero_tenant_id, $bank_transfer_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **attachment_id** | [**string**](../Model/.md)| Xero generated unique identifier for an Attachment to a bank transfer |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransferAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getBankTransferAttachments($xero_tenant_id, $bank_transfer_id)

Allows you to retrieve Attachments from  bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransferAttachments($xero_tenant_id, $bank_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransferHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getBankTransferHistory($xero_tenant_id, $bank_transfer_id)

Allows you to retrieve history from a bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransferHistory($xero_tenant_id, $bank_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBankTransfers**
> \XeroAPI\XeroPHP\Models\Accounting\BankTransfers getBankTransfers($xero_tenant_id, $if_modified_since, $where, $order)

Allows you to retrieve all bank transfers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getBankTransfers($xero_tenant_id, $if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BankTransfers**](../Model/BankTransfers.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBatchPaymentHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getBatchPaymentHistory($xero_tenant_id, $batch_payment_id)

Allows you to retrieve history from a Batch Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$batch_payment_id = 'batch_payment_id_example'; // string | Unique identifier for BatchPayment

try {
    $result = $apiInstance->getBatchPaymentHistory($xero_tenant_id, $batch_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBatchPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **batch_payment_id** | [**string**](../Model/.md)| Unique identifier for BatchPayment |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBatchPayments**
> \XeroAPI\XeroPHP\Models\Accounting\BatchPayments getBatchPayments($xero_tenant_id, $if_modified_since, $where, $order)

Retrieve either one or many BatchPayments for invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getBatchPayments($xero_tenant_id, $if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBatchPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BatchPayments**](../Model/BatchPayments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBrandingTheme**
> \XeroAPI\XeroPHP\Models\Accounting\BrandingThemes getBrandingTheme($xero_tenant_id, $branding_theme_id)

Allows you to retrieve a specific BrandingThemes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$branding_theme_id = 'branding_theme_id_example'; // string | Unique identifier for a Branding Theme

try {
    $result = $apiInstance->getBrandingTheme($xero_tenant_id, $branding_theme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **branding_theme_id** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BrandingThemes**](../Model/BrandingThemes.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBrandingThemePaymentServices**
> \XeroAPI\XeroPHP\Models\Accounting\PaymentServices getBrandingThemePaymentServices($xero_tenant_id, $branding_theme_id)

Allows you to retrieve the Payment services for a Branding Theme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$branding_theme_id = 'branding_theme_id_example'; // string | Unique identifier for a Branding Theme

try {
    $result = $apiInstance->getBrandingThemePaymentServices($xero_tenant_id, $branding_theme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingThemePaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **branding_theme_id** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBrandingThemes**
> \XeroAPI\XeroPHP\Models\Accounting\BrandingThemes getBrandingThemes($xero_tenant_id)

Allows you to retrieve all the BrandingThemes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getBrandingThemes($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BrandingThemes**](../Model/BrandingThemes.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContact**
> \XeroAPI\XeroPHP\Models\Accounting\Contacts getContact($xero_tenant_id, $contact_id)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContact($xero_tenant_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Contacts**](../Model/Contacts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactAttachmentByFileName**
> \SplFileObject getContactAttachmentByFileName($xero_tenant_id, $contact_id, $file_name, $content_type)

Allows you to retrieve Attachments on Contacts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$file_name = 'file_name_example'; // string | Name for the file you are attaching
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getContactAttachmentByFileName($xero_tenant_id, $contact_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **file_name** | **string**| Name for the file you are attaching |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactAttachmentById**
> \SplFileObject getContactAttachmentById($xero_tenant_id, $contact_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on Contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getContactAttachmentById($xero_tenant_id, $contact_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getContactAttachments($xero_tenant_id, $contact_id)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactAttachments($xero_tenant_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactCISSettings**
> \XeroAPI\XeroPHP\Models\Accounting\CISSettings getContactCISSettings($xero_tenant_id, $contact_id)

Allows you to retrieve CISSettings for a contact in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactCISSettings($xero_tenant_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactCISSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\CISSettings**](../Model/CISSettings.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactGroup**
> \XeroAPI\XeroPHP\Models\Accounting\ContactGroups getContactGroup($xero_tenant_id, $contact_group_id)

Allows you to retrieve a unique Contract Group by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group

try {
    $result = $apiInstance->getContactGroup($xero_tenant_id, $contact_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactGroups**
> \XeroAPI\XeroPHP\Models\Accounting\ContactGroups getContactGroups($xero_tenant_id, $where, $order)

Allows you to retrieve the ContactID and Name of all the contacts in a contact group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getContactGroups($xero_tenant_id, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getContactHistory($xero_tenant_id, $contact_id)

Allows you to retrieve a history records of an Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactHistory($xero_tenant_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContacts**
> \XeroAPI\XeroPHP\Models\Accounting\Contacts getContacts($xero_tenant_id, $if_modified_since, $where, $order, $i_ds, $page, $include_archived)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$i_ds = 'i_ds_example'; // string | Filter by a comma separated list of ContactIDs. Allows you to retrieve a specific set of contacts in a single call.
$page = 56; // int | e.g. page=1 - Up to 100 contacts will be returned in a single API call.
$include_archived = True; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included in the response

try {
    $result = $apiInstance->getContacts($xero_tenant_id, $if_modified_since, $where, $order, $i_ds, $page, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **i_ds** | **string**| Filter by a comma separated list of ContactIDs. Allows you to retrieve a specific set of contacts in a single call. | [optional]
 **page** | **int**| e.g. page&#x3D;1 - Up to 100 contacts will be returned in a single API call. | [optional]
 **include_archived** | **bool**| e.g. includeArchived&#x3D;true - Contacts with a status of ARCHIVED will be included in the response | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Contacts**](../Model/Contacts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCreditNote**
> \XeroAPI\XeroPHP\Models\Accounting\CreditNotes getCreditNote($xero_tenant_id, $credit_note_id)

Allows you to retrieve a specific credit note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNote($xero_tenant_id, $credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCreditNoteAsPdf**
> \SplFileObject getCreditNoteAsPdf($xero_tenant_id, $credit_note_id, $content_type)

Allows you to retrieve Credit Note as PDF files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAsPdf($xero_tenant_id, $credit_note_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAsPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCreditNoteAttachmentByFileName**
> \SplFileObject getCreditNoteAttachmentByFileName($xero_tenant_id, $credit_note_id, $file_name, $content_type)

Allows you to retrieve Attachments on CreditNote by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$file_name = 'file_name_example'; // string | Name of the file you are attaching to Credit Note
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAttachmentByFileName($xero_tenant_id, $credit_note_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **file_name** | **string**| Name of the file you are attaching to Credit Note |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCreditNoteAttachmentById**
> \SplFileObject getCreditNoteAttachmentById($xero_tenant_id, $credit_note_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAttachmentById($xero_tenant_id, $credit_note_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCreditNoteAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getCreditNoteAttachments($xero_tenant_id, $credit_note_id)

Allows you to retrieve Attachments for credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNoteAttachments($xero_tenant_id, $credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCreditNoteHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getCreditNoteHistory($xero_tenant_id, $credit_note_id)

Allows you to retrieve a history records of an CreditNote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNoteHistory($xero_tenant_id, $credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCreditNotes**
> \XeroAPI\XeroPHP\Models\Accounting\CreditNotes getCreditNotes($xero_tenant_id, $if_modified_since, $where, $order, $page)

Allows you to retrieve any credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 credit notes will be returned in a single API call with line items shown for each credit note

try {
    $result = $apiInstance->getCreditNotes($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 credit notes will be returned in a single API call with line items shown for each credit note | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCurrencies**
> \XeroAPI\XeroPHP\Models\Accounting\Currencies getCurrencies($xero_tenant_id, $where, $order)

Allows you to retrieve currencies for your organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getCurrencies($xero_tenant_id, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Currencies**](../Model/Currencies.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getEmployee**
> \XeroAPI\XeroPHP\Models\Accounting\Employees getEmployee($xero_tenant_id, $employee_id)

Allows you to retrieve a specific employee used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 'employee_id_example'; // string | Unique identifier for a Employee

try {
    $result = $apiInstance->getEmployee($xero_tenant_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Unique identifier for a Employee |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getEmployees**
> \XeroAPI\XeroPHP\Models\Accounting\Employees getEmployees($xero_tenant_id, $if_modified_since, $where, $order)

Allows you to retrieve employees used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getEmployees($xero_tenant_id, $if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExpenseClaim**
> \XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims getExpenseClaim($xero_tenant_id, $expense_claim_id)

Allows you to retrieve a specified expense claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim

try {
    $result = $apiInstance->getExpenseClaim($xero_tenant_id, $expense_claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExpenseClaimHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getExpenseClaimHistory($xero_tenant_id, $expense_claim_id)

Allows you to retrieve a history records of an ExpenseClaim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim

try {
    $result = $apiInstance->getExpenseClaimHistory($xero_tenant_id, $expense_claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExpenseClaims**
> \XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims getExpenseClaims($xero_tenant_id, $if_modified_since, $where, $order)

Allows you to retrieve expense claims

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getExpenseClaims($xero_tenant_id, $if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoice**
> \XeroAPI\XeroPHP\Models\Accounting\Invoices getInvoice($xero_tenant_id, $invoice_id)

Allows you to retrieve a specified sales invoice or purchase bill

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoice($xero_tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Invoices**](../Model/Invoices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceAsPdf**
> \SplFileObject getInvoiceAsPdf($xero_tenant_id, $invoice_id, $content_type)

Allows you to retrieve invoices or purchase bills as PDF files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAsPdf($xero_tenant_id, $invoice_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAsPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceAttachmentByFileName**
> \SplFileObject getInvoiceAttachmentByFileName($xero_tenant_id, $invoice_id, $file_name, $content_type)

Allows you to retrieve Attachment on invoices or purchase bills by it's filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$file_name = 'file_name_example'; // string | Name of the file you are attaching
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAttachmentByFileName($xero_tenant_id, $invoice_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **file_name** | **string**| Name of the file you are attaching |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceAttachmentById**
> \SplFileObject getInvoiceAttachmentById($xero_tenant_id, $invoice_id, $attachment_id, $content_type)

Allows you to retrieve a specified Attachment on invoices or purchase bills by it's ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$attachment_id = 'attachment_id_example'; // string | Unique identifier for an Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAttachmentById($xero_tenant_id, $invoice_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for an Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getInvoiceAttachments($xero_tenant_id, $invoice_id)

Allows you to retrieve Attachments on invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoiceAttachments($xero_tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getInvoiceHistory($xero_tenant_id, $invoice_id)

Allows you to retrieve a history records of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoiceHistory($xero_tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceReminders**
> \XeroAPI\XeroPHP\Models\Accounting\InvoiceReminders getInvoiceReminders($xero_tenant_id)

Allows you to retrieve invoice reminder settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getInvoiceReminders($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\InvoiceReminders**](../Model/InvoiceReminders.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoices**
> \XeroAPI\XeroPHP\Models\Accounting\Invoices getInvoices($xero_tenant_id, $if_modified_since, $where, $order, $i_ds, $invoice_numbers, $contact_i_ds, $statuses, $page, $include_archived, $created_by_my_app, $unitdp)

Allows you to retrieve any sales invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$i_ds = 'i_ds_example'; // string | Filter by a comma-separated list of InvoicesIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$invoice_numbers = 'invoice_numbers_example'; // string | Filter by a comma-separated list of InvoiceNumbers. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$contact_i_ds = 'contact_i_ds_example'; // string | Filter by a comma-separated list of ContactIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$statuses = 'statuses_example'; // string | Filter by a comma-separated list Statuses. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$page = 56; // int | e.g. page=1 – Up to 100 invoices will be returned in a single API call with line items shown for each invoice
$include_archived = True; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included in the response
$created_by_my_app = True; // bool | When set to true you'll only retrieve Invoices created by your app
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getInvoices($xero_tenant_id, $if_modified_since, $where, $order, $i_ds, $invoice_numbers, $contact_i_ds, $statuses, $page, $include_archived, $created_by_my_app, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **i_ds** | **string**| Filter by a comma-separated list of InvoicesIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **invoice_numbers** | **string**| Filter by a comma-separated list of InvoiceNumbers. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **contact_i_ds** | **string**| Filter by a comma-separated list of ContactIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **statuses** | **string**| Filter by a comma-separated list Statuses. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 invoices will be returned in a single API call with line items shown for each invoice | [optional]
 **include_archived** | **bool**| e.g. includeArchived&#x3D;true - Contacts with a status of ARCHIVED will be included in the response | [optional]
 **created_by_my_app** | **bool**| When set to true you&#39;ll only retrieve Invoices created by your app | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Invoices**](../Model/Invoices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItem**
> \XeroAPI\XeroPHP\Models\Accounting\Items getItem($xero_tenant_id, $item_id)

Allows you to retrieve a specified item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$item_id = 'item_id_example'; // string | Unique identifier for an Item

try {
    $result = $apiInstance->getItem($xero_tenant_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Items**](../Model/Items.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getItemHistory($xero_tenant_id, $item_id)

Allows you to retrieve history for items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$item_id = 'item_id_example'; // string | Unique identifier for an Item

try {
    $result = $apiInstance->getItemHistory($xero_tenant_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItemHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItems**
> \XeroAPI\XeroPHP\Models\Accounting\Items getItems($xero_tenant_id, $if_modified_since, $where, $order, $unitdp)

Allows you to retrieve any items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getItems($xero_tenant_id, $if_modified_since, $where, $order, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Items**](../Model/Items.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJournal**
> \XeroAPI\XeroPHP\Models\Accounting\Journals getJournal($xero_tenant_id, $journal_id)

Allows you to retrieve a specified journals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$journal_id = 'journal_id_example'; // string | Unique identifier for a Journal

try {
    $result = $apiInstance->getJournal($xero_tenant_id, $journal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **journal_id** | [**string**](../Model/.md)| Unique identifier for a Journal |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Journals**](../Model/Journals.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJournals**
> \XeroAPI\XeroPHP\Models\Accounting\Journals getJournals($xero_tenant_id, $if_modified_since, $offset, $payments_only)

Allows you to retrieve any journals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$offset = 56; // int | Offset by a specified journal number. e.g. journals with a JournalNumber greater than the offset will be returned
$payments_only = True; // bool | Filter to retrieve journals on a cash basis. Journals are returned on an accrual basis by default.

try {
    $result = $apiInstance->getJournals($xero_tenant_id, $if_modified_since, $offset, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **offset** | **int**| Offset by a specified journal number. e.g. journals with a JournalNumber greater than the offset will be returned | [optional]
 **payments_only** | **bool**| Filter to retrieve journals on a cash basis. Journals are returned on an accrual basis by default. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Journals**](../Model/Journals.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLinkedTransaction**
> \XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions getLinkedTransaction($xero_tenant_id, $linked_transaction_id)

Allows you to retrieve a specified linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$linked_transaction_id = 'linked_transaction_id_example'; // string | Unique identifier for a LinkedTransaction

try {
    $result = $apiInstance->getLinkedTransaction($xero_tenant_id, $linked_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **linked_transaction_id** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLinkedTransactions**
> \XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions getLinkedTransactions($xero_tenant_id, $page, $linked_transaction_id, $source_transaction_id, $contact_id, $status, $target_transaction_id)

Retrieve linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$page = 56; // int | Up to 100 linked transactions will be returned in a single API call. Use the page parameter to specify the page to be returned e.g. page=1.
$linked_transaction_id = 'linked_transaction_id_example'; // string | The Xero identifier for an Linked Transaction
$source_transaction_id = 'source_transaction_id_example'; // string | Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
$contact_id = 'contact_id_example'; // string | Filter by the ContactID. Get all the linked transactions that have been assigned to a particular customer.
$status = 'status_example'; // string | Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
$target_transaction_id = 'target_transaction_id_example'; // string | Filter by the TargetTransactionID. Get all the linked transactions allocated to a particular ACCREC invoice

try {
    $result = $apiInstance->getLinkedTransactions($xero_tenant_id, $page, $linked_transaction_id, $source_transaction_id, $contact_id, $status, $target_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getLinkedTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **page** | **int**| Up to 100 linked transactions will be returned in a single API call. Use the page parameter to specify the page to be returned e.g. page&#x3D;1. | [optional]
 **linked_transaction_id** | **string**| The Xero identifier for an Linked Transaction | [optional]
 **source_transaction_id** | **string**| Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice | [optional]
 **contact_id** | **string**| Filter by the ContactID. Get all the linked transactions that have been assigned to a particular customer. | [optional]
 **status** | **string**| Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID&#x3D;4bb34b03-3378-4bb2-a0ed-6345abf3224e&amp;Status&#x3D;APPROVED. | [optional]
 **target_transaction_id** | **string**| Filter by the TargetTransactionID. Get all the linked transactions allocated to a particular ACCREC invoice | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManualJournal**
> \XeroAPI\XeroPHP\Models\Accounting\ManualJournals getManualJournal($xero_tenant_id, $manual_journal_id)

Allows you to retrieve a specified manual journals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal

try {
    $result = $apiInstance->getManualJournal($xero_tenant_id, $manual_journal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManualJournalAttachmentByFileName**
> \SplFileObject getManualJournalAttachmentByFileName($xero_tenant_id, $manual_journal_id, $file_name, $content_type)

Allows you to retrieve specified Attachment on ManualJournal by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$file_name = 'file_name_example'; // string | The name of the file being attached to a ManualJournal
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getManualJournalAttachmentByFileName($xero_tenant_id, $manual_journal_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **file_name** | **string**| The name of the file being attached to a ManualJournal |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManualJournalAttachmentById**
> \SplFileObject getManualJournalAttachmentById($xero_tenant_id, $manual_journal_id, $attachment_id, $content_type)

Allows you to retrieve specified Attachment on ManualJournals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getManualJournalAttachmentById($xero_tenant_id, $manual_journal_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManualJournalAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getManualJournalAttachments($xero_tenant_id, $manual_journal_id)

Allows you to retrieve Attachment for manual journals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal

try {
    $result = $apiInstance->getManualJournalAttachments($xero_tenant_id, $manual_journal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManualJournals**
> \XeroAPI\XeroPHP\Models\Accounting\ManualJournals getManualJournals($xero_tenant_id, $if_modified_since, $where, $order, $page)

Allows you to retrieve any manual journals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 manual journals will be returned in a single API call with line items shown for each overpayment

try {
    $result = $apiInstance->getManualJournals($xero_tenant_id, $if_modified_since, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 manual journals will be returned in a single API call with line items shown for each overpayment | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOnlineInvoice**
> \XeroAPI\XeroPHP\Models\Accounting\OnlineInvoices getOnlineInvoice($xero_tenant_id, $invoice_id)

Allows you to retrieve a URL to an online invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getOnlineInvoice($xero_tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOnlineInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\OnlineInvoices**](../Model/OnlineInvoices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrganisationCISSettings**
> \XeroAPI\XeroPHP\Models\Accounting\CISOrgSetting getOrganisationCISSettings($xero_tenant_id, $organisation_id)

Allows you To verify if an organisation is using contruction industry scheme, you can retrieve the CIS settings for the organistaion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$organisation_id = 'organisation_id_example'; // string | 

try {
    $result = $apiInstance->getOrganisationCISSettings($xero_tenant_id, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOrganisationCISSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **organisation_id** | [**string**](../Model/.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\CISOrgSetting**](../Model/CISOrgSetting.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrganisations**
> \XeroAPI\XeroPHP\Models\Accounting\Organisations getOrganisations($xero_tenant_id)

Allows you to retrieve Organisation details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getOrganisations($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOrganisations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Organisations**](../Model/Organisations.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOverpayment**
> \XeroAPI\XeroPHP\Models\Accounting\Overpayments getOverpayment($xero_tenant_id, $overpayment_id)

Allows you to retrieve a specified overpayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment

try {
    $result = $apiInstance->getOverpayment($xero_tenant_id, $overpayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Overpayments**](../Model/Overpayments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOverpaymentHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getOverpaymentHistory($xero_tenant_id, $overpayment_id)

Allows you to retrieve a history records of an Overpayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$overpayment_id = 'overpayment_id_example'; // string | Unique identifier for a Overpayment

try {
    $result = $apiInstance->getOverpaymentHistory($xero_tenant_id, $overpayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **overpayment_id** | [**string**](../Model/.md)| Unique identifier for a Overpayment |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOverpayments**
> \XeroAPI\XeroPHP\Models\Accounting\Overpayments getOverpayments($xero_tenant_id, $if_modified_since, $where, $order, $page, $unitdp)

Allows you to retrieve overpayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 overpayments will be returned in a single API call with line items shown for each overpayment
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getOverpayments($xero_tenant_id, $if_modified_since, $where, $order, $page, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 overpayments will be returned in a single API call with line items shown for each overpayment | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Overpayments**](../Model/Overpayments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPayment**
> \XeroAPI\XeroPHP\Models\Accounting\Payments getPayment($xero_tenant_id, $payment_id)

Allows you to retrieve a specified payment for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment

try {
    $result = $apiInstance->getPayment($xero_tenant_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Payments**](../Model/Payments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPaymentHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getPaymentHistory($xero_tenant_id, $payment_id)

Allows you to retrieve history records of a payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$payment_id = 'payment_id_example'; // string | Unique identifier for a Payment

try {
    $result = $apiInstance->getPaymentHistory($xero_tenant_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **payment_id** | [**string**](../Model/.md)| Unique identifier for a Payment |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPaymentServices**
> \XeroAPI\XeroPHP\Models\Accounting\PaymentServices getPaymentServices($xero_tenant_id)

Allows you to retrieve payment services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getPaymentServices($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPayments**
> \XeroAPI\XeroPHP\Models\Accounting\Payments getPayments($xero_tenant_id, $if_modified_since, $where, $order)

Allows you to retrieve payments for invoices and credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getPayments($xero_tenant_id, $if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Payments**](../Model/Payments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPrepayment**
> \XeroAPI\XeroPHP\Models\Accounting\Prepayments getPrepayment($xero_tenant_id, $prepayment_id)

Allows you to retrieve a specified prepayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$prepayment_id = 'prepayment_id_example'; // string | Unique identifier for a PrePayment

try {
    $result = $apiInstance->getPrepayment($xero_tenant_id, $prepayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **prepayment_id** | [**string**](../Model/.md)| Unique identifier for a PrePayment |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Prepayments**](../Model/Prepayments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPrepaymentHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getPrepaymentHistory($xero_tenant_id, $prepayment_id)

Allows you to retrieve a history records of an Prepayment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$prepayment_id = 'prepayment_id_example'; // string | Unique identifier for a PrePayment

try {
    $result = $apiInstance->getPrepaymentHistory($xero_tenant_id, $prepayment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **prepayment_id** | [**string**](../Model/.md)| Unique identifier for a PrePayment |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPrepayments**
> \XeroAPI\XeroPHP\Models\Accounting\Prepayments getPrepayments($xero_tenant_id, $if_modified_since, $where, $order, $page, $unitdp)

Allows you to retrieve prepayments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 prepayments will be returned in a single API call with line items shown for each overpayment
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getPrepayments($xero_tenant_id, $if_modified_since, $where, $order, $page, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 prepayments will be returned in a single API call with line items shown for each overpayment | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Prepayments**](../Model/Prepayments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPurchaseOrder**
> \XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders getPurchaseOrder($xero_tenant_id, $purchase_order_id)

Allows you to retrieve a specified purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder

try {
    $result = $apiInstance->getPurchaseOrder($xero_tenant_id, $purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPurchaseOrderHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getPurchaseOrderHistory($xero_tenant_id, $purchase_order_id)

Allows you to retrieve history for PurchaseOrder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder

try {
    $result = $apiInstance->getPurchaseOrderHistory($xero_tenant_id, $purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPurchaseOrders**
> \XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders getPurchaseOrders($xero_tenant_id, $if_modified_since, $status, $date_from, $date_to, $order, $page)

Allows you to retrieve purchase orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$status = 'status_example'; // string | Filter by purchase order status
$date_from = 'date_from_example'; // string | Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
$date_to = 'date_to_example'; // string | Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | To specify a page, append the page parameter to the URL e.g. ?page=1. If there are 100 records in the response you will need to check if there is any more data by fetching the next page e.g ?page=2 and continuing this process until no more results are returned.

try {
    $result = $apiInstance->getPurchaseOrders($xero_tenant_id, $if_modified_since, $status, $date_from, $date_to, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **status** | **string**| Filter by purchase order status | [optional]
 **date_from** | **string**| Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom&#x3D;2015-12-01&amp;DateTo&#x3D;2015-12-31 | [optional]
 **date_to** | **string**| Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom&#x3D;2015-12-01&amp;DateTo&#x3D;2015-12-31 | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| To specify a page, append the page parameter to the URL e.g. ?page&#x3D;1. If there are 100 records in the response you will need to check if there is any more data by fetching the next page e.g ?page&#x3D;2 and continuing this process until no more results are returned. | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceipt**
> \XeroAPI\XeroPHP\Models\Accounting\Receipts getReceipt($xero_tenant_id, $receipt_id)

Allows you to retrieve a specified draft expense claim receipts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceipt($xero_tenant_id, $receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Receipts**](../Model/Receipts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceiptAttachmentByFileName**
> \SplFileObject getReceiptAttachmentByFileName($xero_tenant_id, $receipt_id, $file_name, $content_type)

Allows you to retrieve Attachments on expense claim receipts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$file_name = 'file_name_example'; // string | The name of the file being attached to the Receipt
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getReceiptAttachmentByFileName($xero_tenant_id, $receipt_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **file_name** | **string**| The name of the file being attached to the Receipt |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceiptAttachmentById**
> \SplFileObject getReceiptAttachmentById($xero_tenant_id, $receipt_id, $attachment_id, $content_type)

Allows you to retrieve Attachments on expense claim receipts by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getReceiptAttachmentById($xero_tenant_id, $receipt_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceiptAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getReceiptAttachments($xero_tenant_id, $receipt_id)

Allows you to retrieve Attachments for expense claim receipts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceiptAttachments($xero_tenant_id, $receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceiptHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getReceiptHistory($xero_tenant_id, $receipt_id)

Allows you to retrieve a history records of an Receipt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceiptHistory($xero_tenant_id, $receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceipts**
> \XeroAPI\XeroPHP\Models\Accounting\Receipts getReceipts($xero_tenant_id, $if_modified_since, $where, $order, $unitdp)

Allows you to retrieve draft expense claim receipts for any user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getReceipts($xero_tenant_id, $if_modified_since, $where, $order, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Receipts**](../Model/Receipts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRepeatingInvoice**
> \XeroAPI\XeroPHP\Models\Accounting\RepeatingInvoices getRepeatingInvoice($xero_tenant_id, $repeating_invoice_id)

Allows you to retrieve a specified repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoice($xero_tenant_id, $repeating_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\RepeatingInvoices**](../Model/RepeatingInvoices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRepeatingInvoiceAttachmentByFileName**
> \SplFileObject getRepeatingInvoiceAttachmentByFileName($xero_tenant_id, $repeating_invoice_id, $file_name, $content_type)

Allows you to retrieve specified attachment on repeating invoices by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$file_name = 'file_name_example'; // string | The name of the file being attached to a Repeating Invoice
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getRepeatingInvoiceAttachmentByFileName($xero_tenant_id, $repeating_invoice_id, $file_name, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **file_name** | **string**| The name of the file being attached to a Repeating Invoice |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRepeatingInvoiceAttachmentById**
> \SplFileObject getRepeatingInvoiceAttachmentById($xero_tenant_id, $repeating_invoice_id, $attachment_id, $content_type)

Allows you to retrieve a specified Attachments on repeating invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$attachment_id = 'attachment_id_example'; // string | Unique identifier for a Attachment
$content_type = 'content_type_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getRepeatingInvoiceAttachmentById($xero_tenant_id, $repeating_invoice_id, $attachment_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **attachment_id** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **content_type** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRepeatingInvoiceAttachments**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments getRepeatingInvoiceAttachments($xero_tenant_id, $repeating_invoice_id)

Allows you to retrieve Attachments on repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoiceAttachments($xero_tenant_id, $repeating_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRepeatingInvoiceHistory**
> \XeroAPI\XeroPHP\Models\Accounting\HistoryRecords getRepeatingInvoiceHistory($xero_tenant_id, $repeating_invoice_id)

Allows you to retrieve history for a repeating invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoiceHistory($xero_tenant_id, $repeating_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRepeatingInvoices**
> \XeroAPI\XeroPHP\Models\Accounting\RepeatingInvoices getRepeatingInvoices($xero_tenant_id, $where, $order)

Allows you to retrieve any repeating invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getRepeatingInvoices($xero_tenant_id, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\RepeatingInvoices**](../Model/RepeatingInvoices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportAgedPayablesByContact**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportAgedPayablesByContact($xero_tenant_id, $contact_id, $date, $from_date, $to_date)

Allows you to retrieve report for AgedPayablesByContact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the Aged Payables By Contact report
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date of the Aged Payables By Contact report
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date of the Aged Payables By Contact report

try {
    $result = $apiInstance->getReportAgedPayablesByContact($xero_tenant_id, $contact_id, $date, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportAgedPayablesByContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **date** | **\DateTime**| The date of the Aged Payables By Contact report | [optional]
 **from_date** | **\DateTime**| The from date of the Aged Payables By Contact report | [optional]
 **to_date** | **\DateTime**| The to date of the Aged Payables By Contact report | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportAgedReceivablesByContact**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportAgedReceivablesByContact($xero_tenant_id, $contact_id, $date, $from_date, $to_date)

Allows you to retrieve report for AgedReceivablesByContact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the Aged Receivables By Contact report
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date of the Aged Receivables By Contact report
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date of the Aged Receivables By Contact report

try {
    $result = $apiInstance->getReportAgedReceivablesByContact($xero_tenant_id, $contact_id, $date, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportAgedReceivablesByContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **date** | **\DateTime**| The date of the Aged Receivables By Contact report | [optional]
 **from_date** | **\DateTime**| The from date of the Aged Receivables By Contact report | [optional]
 **to_date** | **\DateTime**| The to date of the Aged Receivables By Contact report | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportBASorGST**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportBASorGST($xero_tenant_id, $report_id)

Allows you to retrieve report for BAS only valid for AU orgs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$report_id = 'report_id_example'; // string | Unique identifier for a Report

try {
    $result = $apiInstance->getReportBASorGST($xero_tenant_id, $report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBASorGST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **report_id** | **string**| Unique identifier for a Report |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportBASorGSTList**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportBASorGSTList($xero_tenant_id)

Allows you to retrieve report for BAS only valid for AU orgs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getReportBASorGSTList($xero_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBASorGSTList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportBalanceSheet**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportBalanceSheet($xero_tenant_id, $date, $periods, $timeframe, $tracking_option_id1, $tracking_option_id2, $standard_layout, $payments_only)

Allows you to retrieve report for BalanceSheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$date = 'date_example'; // string | The date of the Balance Sheet report
$periods = 56; // int | The number of periods for the Balance Sheet report
$timeframe = 'timeframe_example'; // string | The period size to compare to (MONTH, QUARTER, YEAR)
$tracking_option_id1 = 'tracking_option_id1_example'; // string | The tracking option 1 for the Balance Sheet report
$tracking_option_id2 = 'tracking_option_id2_example'; // string | The tracking option 2 for the Balance Sheet report
$standard_layout = True; // bool | The standard layout boolean for the Balance Sheet report
$payments_only = True; // bool | return a cash basis for the Balance Sheet report

try {
    $result = $apiInstance->getReportBalanceSheet($xero_tenant_id, $date, $periods, $timeframe, $tracking_option_id1, $tracking_option_id2, $standard_layout, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBalanceSheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **date** | **string**| The date of the Balance Sheet report | [optional]
 **periods** | **int**| The number of periods for the Balance Sheet report | [optional]
 **timeframe** | **string**| The period size to compare to (MONTH, QUARTER, YEAR) | [optional]
 **tracking_option_id1** | **string**| The tracking option 1 for the Balance Sheet report | [optional]
 **tracking_option_id2** | **string**| The tracking option 2 for the Balance Sheet report | [optional]
 **standard_layout** | **bool**| The standard layout boolean for the Balance Sheet report | [optional]
 **payments_only** | **bool**| return a cash basis for the Balance Sheet report | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportBankSummary**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportBankSummary($xero_tenant_id, $date, $period, $timeframe)

Allows you to retrieve report for BankSummary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for the Bank Summary report e.g. 2018-03-31
$period = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 56; // int | The period size to compare to (1=month, 3=quarter, 12=year)

try {
    $result = $apiInstance->getReportBankSummary($xero_tenant_id, $date, $period, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBankSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **date** | **\DateTime**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]
 **period** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **int**| The period size to compare to (1&#x3D;month, 3&#x3D;quarter, 12&#x3D;year) | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportBudgetSummary**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportBudgetSummary($xero_tenant_id, $date, $period, $timeframe)

Allows you to retrieve report for Budget Summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for the Bank Summary report e.g. 2018-03-31
$period = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 56; // int | The period size to compare to (1=month, 3=quarter, 12=year)

try {
    $result = $apiInstance->getReportBudgetSummary($xero_tenant_id, $date, $period, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBudgetSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **date** | **\DateTime**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]
 **period** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **int**| The period size to compare to (1&#x3D;month, 3&#x3D;quarter, 12&#x3D;year) | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportExecutiveSummary**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportExecutiveSummary($xero_tenant_id, $date)

Allows you to retrieve report for ExecutiveSummary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for the Bank Summary report e.g. 2018-03-31

try {
    $result = $apiInstance->getReportExecutiveSummary($xero_tenant_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportExecutiveSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **date** | **\DateTime**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportProfitAndLoss**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportProfitAndLoss($xero_tenant_id, $from_date, $to_date, $periods, $timeframe, $tracking_category_id, $tracking_category_id2, $tracking_option_id, $tracking_option_id2, $standard_layout, $payments_only)

Allows you to retrieve report for ProfitAndLoss

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date for the ProfitAndLoss report e.g. 2018-03-31
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date for the ProfitAndLoss report e.g. 2018-03-31
$periods = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 'timeframe_example'; // string | The period size to compare to (MONTH, QUARTER, YEAR)
$tracking_category_id = 'tracking_category_id_example'; // string | The trackingCategory 1 for the ProfitAndLoss report
$tracking_category_id2 = 'tracking_category_id2_example'; // string | The trackingCategory 2 for the ProfitAndLoss report
$tracking_option_id = 'tracking_option_id_example'; // string | The tracking option 1 for the ProfitAndLoss report
$tracking_option_id2 = 'tracking_option_id2_example'; // string | The tracking option 2 for the ProfitAndLoss report
$standard_layout = True; // bool | Return the standard layout for the ProfitAndLoss report
$payments_only = True; // bool | Return cash only basis for the ProfitAndLoss report

try {
    $result = $apiInstance->getReportProfitAndLoss($xero_tenant_id, $from_date, $to_date, $periods, $timeframe, $tracking_category_id, $tracking_category_id2, $tracking_option_id, $tracking_option_id2, $standard_layout, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportProfitAndLoss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **from_date** | **\DateTime**| The from date for the ProfitAndLoss report e.g. 2018-03-31 | [optional]
 **to_date** | **\DateTime**| The to date for the ProfitAndLoss report e.g. 2018-03-31 | [optional]
 **periods** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **string**| The period size to compare to (MONTH, QUARTER, YEAR) | [optional]
 **tracking_category_id** | **string**| The trackingCategory 1 for the ProfitAndLoss report | [optional]
 **tracking_category_id2** | **string**| The trackingCategory 2 for the ProfitAndLoss report | [optional]
 **tracking_option_id** | **string**| The tracking option 1 for the ProfitAndLoss report | [optional]
 **tracking_option_id2** | **string**| The tracking option 2 for the ProfitAndLoss report | [optional]
 **standard_layout** | **bool**| Return the standard layout for the ProfitAndLoss report | [optional]
 **payments_only** | **bool**| Return cash only basis for the ProfitAndLoss report | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportTenNinetyNine**
> \XeroAPI\XeroPHP\Models\Accounting\Reports getReportTenNinetyNine($xero_tenant_id, $report_year)

Allows you to retrieve report for TenNinetyNine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$report_year = 'report_year_example'; // string | The year of the 1099 report

try {
    $result = $apiInstance->getReportTenNinetyNine($xero_tenant_id, $report_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportTenNinetyNine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **report_year** | **string**| The year of the 1099 report | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Reports**](../Model/Reports.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportTrialBalance**
> \XeroAPI\XeroPHP\Models\Accounting\ReportWithRows getReportTrialBalance($xero_tenant_id, $date, $payments_only)

Allows you to retrieve report for TrialBalance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for the Trial Balance report e.g. 2018-03-31
$payments_only = True; // bool | Return cash only basis for the Trial Balance report

try {
    $result = $apiInstance->getReportTrialBalance($xero_tenant_id, $date, $payments_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportTrialBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **date** | **\DateTime**| The date for the Trial Balance report e.g. 2018-03-31 | [optional]
 **payments_only** | **bool**| Return cash only basis for the Trial Balance report | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTaxRates**
> \XeroAPI\XeroPHP\Models\Accounting\TaxRates getTaxRates($xero_tenant_id, $where, $order, $tax_type)

Allows you to retrieve Tax Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$tax_type = 'tax_type_example'; // string | Filter by tax type

try {
    $result = $apiInstance->getTaxRates($xero_tenant_id, $where, $order, $tax_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTaxRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **tax_type** | **string**| Filter by tax type | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TaxRates**](../Model/TaxRates.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTrackingCategories**
> \XeroAPI\XeroPHP\Models\Accounting\TrackingCategories getTrackingCategories($xero_tenant_id, $where, $order, $include_archived)

Allows you to retrieve tracking categories and options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$include_archived = True; // bool | e.g. includeArchived=true - Categories and options with a status of ARCHIVED will be included in the response

try {
    $result = $apiInstance->getTrackingCategories($xero_tenant_id, $where, $order, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTrackingCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **include_archived** | **bool**| e.g. includeArchived&#x3D;true - Categories and options with a status of ARCHIVED will be included in the response | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTrackingCategory**
> \XeroAPI\XeroPHP\Models\Accounting\TrackingCategories getTrackingCategory($xero_tenant_id, $tracking_category_id)

Allows you to retrieve tracking categories and options for specified category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory

try {
    $result = $apiInstance->getTrackingCategory($xero_tenant_id, $tracking_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUser**
> \XeroAPI\XeroPHP\Models\Accounting\Users getUser($xero_tenant_id, $user_id)

Allows you to retrieve a specified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$user_id = 'user_id_example'; // string | Unique identifier for a User

try {
    $result = $apiInstance->getUser($xero_tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **user_id** | [**string**](../Model/.md)| Unique identifier for a User |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Users**](../Model/Users.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUsers**
> \XeroAPI\XeroPHP\Models\Accounting\Users getUsers($xero_tenant_id, $if_modified_since, $where, $order)

Allows you to retrieve users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getUsers($xero_tenant_id, $if_modified_since, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **if_modified_since** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Users**](../Model/Users.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateAccount**
> \XeroAPI\XeroPHP\Models\Accounting\Accounts updateAccount($xero_tenant_id, $account_id, $accounts)

Allows you to update a chart of accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for retrieving single object
$accounts = { "Accounts":[ { "Code":"123456", "Name":"BarFoo", "AccountID":"99ce6032-0678-4aa0-8148-240c75fee33a", "Type":"EXPENSE", "Description":"GoodBye World", "TaxType":"INPUT", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"EXPENSE", "ReportingCode":"EXP", "ReportingCodeName":"Expense", "UpdatedDateUTC":"2019-02-21T16:29:47.96-08:00" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Accounts | Request of type Accounts array with one Account

try {
    $result = $apiInstance->updateAccount($xero_tenant_id, $account_id, $accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for retrieving single object |
 **accounts** | [**\XeroAPI\XeroPHP\Models\Accounting\Accounts**](../Model/Accounts.md)| Request of type Accounts array with one Account |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Accounts**](../Model/Accounts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateAccountAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateAccountAttachmentByFileName($xero_tenant_id, $account_id, $file_name, $body)

Allows you to update Attachment on Account by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$account_id = 'account_id_example'; // string | Unique identifier for Account object
$file_name = 'file_name_example'; // string | Name of the attachment
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateAccountAttachmentByFileName($xero_tenant_id, $account_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **account_id** | [**string**](../Model/.md)| Unique identifier for Account object |
 **file_name** | **string**| Name of the attachment |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBankTransaction**
> \XeroAPI\XeroPHP\Models\Accounting\BankTransactions updateBankTransaction($xero_tenant_id, $bank_transaction_id, $bank_transactions)

Allows you to update a single spend or receive money transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$bank_transactions = { "BankTransactions":[ { "Type":"SPEND", "Contact":{ "ContactID":"5cc8cf28-567e-4d43-b287-687cfcaec47c", "ContactStatus":"ACTIVE", "Name":"Katherine Warren", "FirstName":"Katherine", "LastName":"Warren", "EmailAddress":"kat.warren@clampett.com", "ContactPersons":[
], "BankAccountDetails":"", "Addresses":[ { "AddressType":"STREET", "City":"", "Region":"", "PostalCode":"", "Country":"" }, { "AddressType":"POBOX", "AddressLine1":"", "AddressLine2":"", "AddressLine3":"", "AddressLine4":"", "City":"Palo Alto", "Region":"CA", "PostalCode":"94020", "Country":"United States" } ], "Phones":[ { "PhoneType":"DEFAULT", "PhoneNumber":"847-1294", "PhoneAreaCode":"(626)", "PhoneCountryCode":"" }, { "PhoneType":"DDI", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" }, { "PhoneType":"FAX", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" }, { "PhoneType":"MOBILE", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" } ], "UpdatedDateUTC":"2017-08-21T13:49:04.227-07:00", "ContactGroups":[
] }, "LineItems":[
], "BankAccount":{ "Code":"088", "Name":"Business Wells Fargo", "AccountID":"6f7594f2-f059-4d56-9e67-47ac9733bfe9" }, "IsReconciled":false, "Date":"2019-02-25", "Reference":"You just updated", "CurrencyCode":"USD", "CurrencyRate":1.0, "Status":"AUTHORISED", "LineAmountTypes":"Inclusive", "TotalTax":1.74, "BankTransactionID":"1289c190-e46d-434b-9628-463ffdb52f00", "UpdatedDateUTC":"2019-02-26T12:39:27.813-08:00" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\BankTransactions | 

try {
    $result = $apiInstance->updateBankTransaction($xero_tenant_id, $bank_transaction_id, $bank_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **bank_transactions** | [**\XeroAPI\XeroPHP\Models\Accounting\BankTransactions**](../Model/BankTransactions.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\BankTransactions**](../Model/BankTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBankTransactionAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateBankTransactionAttachmentByFileName($xero_tenant_id, $bank_transaction_id, $file_name, $body)

Allows you to update an Attachment on BankTransaction by Filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transaction_id = 'bank_transaction_id_example'; // string | Xero generated unique identifier for a bank transaction
$file_name = 'file_name_example'; // string | The name of the file being attached
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateBankTransactionAttachmentByFileName($xero_tenant_id, $bank_transaction_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transaction_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **file_name** | **string**| The name of the file being attached |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBankTransferAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateBankTransferAttachmentByFileName($xero_tenant_id, $bank_transfer_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$bank_transfer_id = 'bank_transfer_id_example'; // string | Xero generated unique identifier for a bank transfer
$file_name = 'file_name_example'; // string | The name of the file being attached to a Bank Transfer
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateBankTransferAttachmentByFileName($xero_tenant_id, $bank_transfer_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **bank_transfer_id** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **file_name** | **string**| The name of the file being attached to a Bank Transfer |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateContact**
> \XeroAPI\XeroPHP\Models\Accounting\Contacts updateContact($xero_tenant_id, $contact_id, $contacts)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$contacts = { "Contacts":[ { "ContactID":"d5be01fb-b09f-4c3a-9c67-e10c2a03412c", "Name":"FooBar" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Contacts | an array of Contacts containing single Contact object with properties to update

try {
    $result = $apiInstance->updateContact($xero_tenant_id, $contact_id, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **contacts** | [**\XeroAPI\XeroPHP\Models\Accounting\Contacts**](../Model/Contacts.md)| an array of Contacts containing single Contact object with properties to update |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Contacts**](../Model/Contacts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateContactAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateContactAttachmentByFileName($xero_tenant_id, $contact_id, $file_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_id = 'contact_id_example'; // string | Unique identifier for a Contact
$file_name = 'file_name_example'; // string | Name for the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateContactAttachmentByFileName($xero_tenant_id, $contact_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_id** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **file_name** | **string**| Name for the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateContactGroup**
> \XeroAPI\XeroPHP\Models\Accounting\ContactGroups updateContactGroup($xero_tenant_id, $contact_group_id, $contact_groups)

Allows you to update a Contract Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$contact_group_id = 'contact_group_id_example'; // string | Unique identifier for a Contact Group
$contact_groups = { "ContactGroups":[ { "Name":"Vendor" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\ContactGroups | an array of Contact groups with Name of specific group to update

try {
    $result = $apiInstance->updateContactGroup($xero_tenant_id, $contact_group_id, $contact_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **contact_group_id** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contact_groups** | [**\XeroAPI\XeroPHP\Models\Accounting\ContactGroups**](../Model/ContactGroups.md)| an array of Contact groups with Name of specific group to update |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ContactGroups**](../Model/ContactGroups.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCreditNote**
> \XeroAPI\XeroPHP\Models\Accounting\CreditNotes updateCreditNote($xero_tenant_id, $credit_note_id, $credit_notes)

Allows you to update a specific credit note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$credit_notes = { "CreditNotes":[ { "Type":"ACCPAYCREDIT", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Date":"2019-01-05", "Status":"AUTHORISED", "Reference": "HelloWorld", "LineItems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400" } ] } ] }; // \XeroAPI\XeroPHP\Models\Accounting\CreditNotes | an array of Credit Notes containing credit note details to update

try {
    $result = $apiInstance->updateCreditNote($xero_tenant_id, $credit_note_id, $credit_notes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **credit_notes** | [**\XeroAPI\XeroPHP\Models\Accounting\CreditNotes**](../Model/CreditNotes.md)| an array of Credit Notes containing credit note details to update |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCreditNoteAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateCreditNoteAttachmentByFileName($xero_tenant_id, $credit_note_id, $file_name, $body)

Allows you to update Attachments on CreditNote by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$credit_note_id = 'credit_note_id_example'; // string | Unique identifier for a Credit Note
$file_name = 'file_name_example'; // string | Name of the file you are attaching to Credit Note
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateCreditNoteAttachmentByFileName($xero_tenant_id, $credit_note_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **credit_note_id** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **file_name** | **string**| Name of the file you are attaching to Credit Note |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateEmployee**
> \XeroAPI\XeroPHP\Models\Accounting\Employees updateEmployee($xero_tenant_id, $employee_id, $employees)

Allows you to update a specific employee used in Xero payrun

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$employee_id = 'employee_id_example'; // string | Unique identifier for a Employee
$employees = { "Employees":[ { "EmployeeID":"ad3db144-6362-459c-8c36-5d31d196e629", "FirstName":"Bruce", "LastName":"Banner" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Employees | 

try {
    $result = $apiInstance->updateEmployee($xero_tenant_id, $employee_id, $employees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **employee_id** | [**string**](../Model/.md)| Unique identifier for a Employee |
 **employees** | [**\XeroAPI\XeroPHP\Models\Accounting\Employees**](../Model/Employees.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateExpenseClaim**
> \XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims updateExpenseClaim($xero_tenant_id, $expense_claim_id, $expense_claims)

Allows you to update specified expense claims

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$expense_claim_id = 'expense_claim_id_example'; // string | Unique identifier for a ExpenseClaim
$expense_claims = { "ExpenseClaims":[ { "Status":"AUTHORISED", "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Receipts":[ { "LineItems":[
], "ReceiptID":"dc1c7f6d-0a4c-402f-acac-551d62ce5816" } ] } ] }; // \XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims | 

try {
    $result = $apiInstance->updateExpenseClaim($xero_tenant_id, $expense_claim_id, $expense_claims);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **expense_claim_id** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |
 **expense_claims** | [**\XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims**](../Model/ExpenseClaims.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateInvoice**
> \XeroAPI\XeroPHP\Models\Accounting\Invoices updateInvoice($xero_tenant_id, $invoice_id, $invoices)

Allows you to update a specified sales invoices or purchase bills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$invoices = { "Invoices":[ { "LineItems":[
], "Reference":"My the Force be With You", "InvoiceID":"4074292c-09b3-456d-84e7-add864c6c39b" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Invoices | 

try {
    $result = $apiInstance->updateInvoice($xero_tenant_id, $invoice_id, $invoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **invoices** | [**\XeroAPI\XeroPHP\Models\Accounting\Invoices**](../Model/Invoices.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Invoices**](../Model/Invoices.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateInvoiceAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateInvoiceAttachmentByFileName($xero_tenant_id, $invoice_id, $file_name, $body)

Allows you to update Attachment on invoices or purchase bills by it's filename

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$invoice_id = 'invoice_id_example'; // string | Unique identifier for an Invoice
$file_name = 'file_name_example'; // string | Name of the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateInvoiceAttachmentByFileName($xero_tenant_id, $invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **invoice_id** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **file_name** | **string**| Name of the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItem**
> \XeroAPI\XeroPHP\Models\Accounting\Items updateItem($xero_tenant_id, $item_id, $items)

Allows you to udpate a specified item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$item_id = 'item_id_example'; // string | Unique identifier for an Item
$items = { "Items":[ { "Code":"abc38306", "Description":"Hello Xero" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Items | 

try {
    $result = $apiInstance->updateItem($xero_tenant_id, $item_id, $items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **item_id** | [**string**](../Model/.md)| Unique identifier for an Item |
 **items** | [**\XeroAPI\XeroPHP\Models\Accounting\Items**](../Model/Items.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Items**](../Model/Items.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLinkedTransaction**
> \XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions updateLinkedTransaction($xero_tenant_id, $linked_transaction_id, $linked_transactions)

Allows you to update a specified linked transactions (billable expenses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$linked_transaction_id = 'linked_transaction_id_example'; // string | Unique identifier for a LinkedTransaction
$linked_transactions = { "LinkedTransactions":[ { "ContactID":"4e1753b9-018a-4775-b6aa-1bc7871cfee3" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions | 

try {
    $result = $apiInstance->updateLinkedTransaction($xero_tenant_id, $linked_transaction_id, $linked_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **linked_transaction_id** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |
 **linked_transactions** | [**\XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions**](../Model/LinkedTransactions.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateManualJournal**
> \XeroAPI\XeroPHP\Models\Accounting\ManualJournals updateManualJournal($xero_tenant_id, $manual_journal_id, $manual_journals)

Allows you to update a specified manual journal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$manual_journals = { "ManualJournals":[ { "Narration":"Hello Xero", "JournalLines":[
], "ManualJournalID":"07eac261-78ef-47a0-a0eb-a57b74137877" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\ManualJournals | 

try {
    $result = $apiInstance->updateManualJournal($xero_tenant_id, $manual_journal_id, $manual_journals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **manual_journals** | [**\XeroAPI\XeroPHP\Models\Accounting\ManualJournals**](../Model/ManualJournals.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\ManualJournals**](../Model/ManualJournals.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateManualJournalAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateManualJournalAttachmentByFileName($xero_tenant_id, $manual_journal_id, $file_name, $body)

Allows you to update a specified Attachment on ManualJournal by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$manual_journal_id = 'manual_journal_id_example'; // string | Unique identifier for a ManualJournal
$file_name = 'file_name_example'; // string | The name of the file being attached to a ManualJournal
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateManualJournalAttachmentByFileName($xero_tenant_id, $manual_journal_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **manual_journal_id** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **file_name** | **string**| The name of the file being attached to a ManualJournal |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updatePurchaseOrder**
> \XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders updatePurchaseOrder($xero_tenant_id, $purchase_order_id, $purchase_orders)

Allows you to update a specified purchase order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$purchase_order_id = 'purchase_order_id_example'; // string | Unique identifier for a PurchaseOrder
$purchase_orders = { "PurchaseOrders":[ { "LineItems":[
], "AttentionTo":"Jimmy" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders | 

try {
    $result = $apiInstance->updatePurchaseOrder($xero_tenant_id, $purchase_order_id, $purchase_orders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updatePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **purchase_order_id** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |
 **purchase_orders** | [**\XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders**](../Model/PurchaseOrders.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateReceipt**
> \XeroAPI\XeroPHP\Models\Accounting\Receipts updateReceipt($xero_tenant_id, $receipt_id, $receipts)

Allows you to retrieve a specified draft expense claim receipts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$receipts = { "Receipts":[ { "LineItems":[
], "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Reference":"Foobar" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\Receipts | 

try {
    $result = $apiInstance->updateReceipt($xero_tenant_id, $receipt_id, $receipts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **receipts** | [**\XeroAPI\XeroPHP\Models\Accounting\Receipts**](../Model/Receipts.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Receipts**](../Model/Receipts.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateReceiptAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateReceiptAttachmentByFileName($xero_tenant_id, $receipt_id, $file_name, $body)

Allows you to update Attachment on expense claim receipts by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$receipt_id = 'receipt_id_example'; // string | Unique identifier for a Receipt
$file_name = 'file_name_example'; // string | The name of the file being attached to the Receipt
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateReceiptAttachmentByFileName($xero_tenant_id, $receipt_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **receipt_id** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **file_name** | **string**| The name of the file being attached to the Receipt |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRepeatingInvoiceAttachmentByFileName**
> \XeroAPI\XeroPHP\Models\Accounting\Attachments updateRepeatingInvoiceAttachmentByFileName($xero_tenant_id, $repeating_invoice_id, $file_name, $body)

Allows you to update specified attachment on repeating invoices by file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$repeating_invoice_id = 'repeating_invoice_id_example'; // string | Unique identifier for a Repeating Invoice
$file_name = 'file_name_example'; // string | The name of the file being attached to a Repeating Invoice
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateRepeatingInvoiceAttachmentByFileName($xero_tenant_id, $repeating_invoice_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **repeating_invoice_id** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **file_name** | **string**| The name of the file being attached to a Repeating Invoice |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\Attachments**](../Model/Attachments.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateTaxRate**
> \XeroAPI\XeroPHP\Models\Accounting\TaxRates updateTaxRate($xero_tenant_id, $tax_rates)

Allows you to update Tax Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tax_rates = { "TaxRates":[ { "Name":"SDKTax29067", "TaxComponents":[ { "Name":"State Tax", "Rate":2.25 } ], "Status":"DELETED", "ReportTaxType":"INPUT" } ] }; // \XeroAPI\XeroPHP\Models\Accounting\TaxRates | 

try {
    $result = $apiInstance->updateTaxRate($xero_tenant_id, $tax_rates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tax_rates** | [**\XeroAPI\XeroPHP\Models\Accounting\TaxRates**](../Model/TaxRates.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TaxRates**](../Model/TaxRates.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateTrackingCategory**
> \XeroAPI\XeroPHP\Models\Accounting\TrackingCategories updateTrackingCategory($xero_tenant_id, $tracking_category_id, $tracking_category)

Allows you to update tracking categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = XeroAPI\XeroPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new XeroAPI\XeroPHP\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xero_tenant_id = 'xero_tenant_id_example'; // string | Xero identifier for Tenant
$tracking_category_id = 'tracking_category_id_example'; // string | Unique identifier for a TrackingCategory
$tracking_category = { "Name":"BarFoo" }; // \XeroAPI\XeroPHP\Models\Accounting\TrackingCategory | 

try {
    $result = $apiInstance->updateTrackingCategory($xero_tenant_id, $tracking_category_id, $tracking_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xero_tenant_id** | **string**| Xero identifier for Tenant |
 **tracking_category_id** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **tracking_category** | [**\XeroAPI\XeroPHP\Models\Accounting\TrackingCategory**](../Model/TrackingCategory.md)|  |

### Return type

[**\XeroAPI\XeroPHP\Models\Accounting\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

[OAuth2](../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

