# # CreatePhoneNumberPortInRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_numbers** | **string[]** | E.164 numbers to port in. |
**end_user** | [**\Zernio\Model\CreatePhoneNumberPortInRequestEndUser**](CreatePhoneNumberPortInRequestEndUser.md) |  |
**loa_document_id** | **string** | Document id from POST /v1/phone-numbers/port-in/documents (kind&#x3D;loa). |
**invoice_document_id** | **string** | Document id from POST /v1/phone-numbers/port-in/documents (kind&#x3D;invoice). |
**foc_datetime_requested** | **\DateTime** | Requested port date; the carrier confirms the actual FOC later. Defaults to one week out (shifted off weekends) when omitted. | [optional]
**customer_reference** | **string** |  | [optional]
**port_type** | **string** | Whether the losing account ports all its numbers (full) or keeps some (partial). | [optional] [default to 'full']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
