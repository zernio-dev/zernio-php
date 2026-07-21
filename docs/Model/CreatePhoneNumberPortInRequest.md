# # CreatePhoneNumberPortInRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_numbers** | **string[]** | E.164 numbers to port in. |
**end_user** | [**\Zernio\Model\CreatePhoneNumberPortInRequestEndUser**](CreatePhoneNumberPortInRequestEndUser.md) |  |
**loa_document_id** | **string** | Document id from POST /v1/phone-numbers/port-in/documents (kind&#x3D;loa). |
**invoice_document_id** | **string** | Document id from POST /v1/phone-numbers/port-in/documents (kind&#x3D;invoice). |
**foc_datetime_requested** | **\DateTime** | Requested port date; the carrier confirms the actual FOC later. US/CA default is one week out (shifted off weekends); international orders are scheduled into the carrier&#39;s next allowed porting window at or after this date. | [optional]
**customer_reference** | **string** |  | [optional]
**port_type** | **string** | Whether the losing account ports all its numbers (full) or keeps some (partial). | [optional] [default to 'full']
**requirements** | [**\Zernio\Model\CreatePhoneNumberPortInRequestRequirementsInner[]**](CreatePhoneNumberPortInRequestRequirementsInner.md) | Country-specific requirement values for international ports (from GET /v1/phone-numbers/port-in/requirements). Not needed for US/CA. The LOA and invoice requirements are satisfied automatically by loaDocumentId/invoiceDocumentId, and address-type requirements by the endUser service address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
