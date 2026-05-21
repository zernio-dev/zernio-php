# # StartGoogleBusinessVerificationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The verification method. Selects which method-specific field below is required. |
**language_code** | **string** |  | [optional]
**phone_number** | **string** | For PHONE_CALL / SMS. | [optional]
**email_address** | **string** | For EMAIL. | [optional]
**mailer_contact** | **object** | For ADDRESS (postcard) verification. | [optional]
**context** | **object** | ServiceBusinessContext (e.g. service address). Required for service-area businesses. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
