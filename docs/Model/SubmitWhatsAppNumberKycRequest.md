# # SubmitWhatsAppNumberKycRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**country** | **string** |  |
**reuse** | **bool** | Reuse a prior approved verification for this country (skips document/field collection; places the order immediately). | [optional]
**end_user_first_name** | **string** | End user&#39;s legal first name. Required when the country has an action/ID-verification (Onfido) requirement. | [optional]
**end_user_last_name** | **string** | End user&#39;s legal last name. Same condition as endUserFirstName. | [optional]
**values** | **array<string,string>** | requirementId → textual value | [optional]
**documents** | [**\Zernio\Model\SubmitWhatsAppNumberKycRequestDocumentsInner[]**](SubmitWhatsAppNumberKycRequestDocumentsInner.md) |  | [optional]
**address** | [**\Zernio\Model\SubmitWhatsAppNumberKycRequestAddress**](SubmitWhatsAppNumberKycRequestAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
