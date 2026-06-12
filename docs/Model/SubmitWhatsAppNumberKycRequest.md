# # SubmitWhatsAppNumberKycRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**country** | **string** |  |
**submission_id** | **string** | Idempotency token for this submission attempt. A retry/double-submit with the same token returns the same number; omit and each call creates a new number. | [optional]
**reuse** | **bool** | Reuse a prior approved verification for this country (skips document/field collection; places the order immediately). | [optional]
**reuse_from** | **string** | Which approved verification to reuse when several exist: the phone number it was originally approved for (GET reusable.options[].fromPhoneNumber). Omitted &#x3D; newest. No match &#x3D; 409. | [optional]
**end_user_first_name** | **string** | End user&#39;s legal first name. Required when the country has an action/ID-verification (Onfido) requirement. | [optional]
**end_user_last_name** | **string** | End user&#39;s legal last name. Same condition as endUserFirstName. | [optional]
**values** | **array<string,string>** | requirementId → textual value | [optional]
**documents** | [**\Zernio\Model\SubmitWhatsAppNumberKycRequestDocumentsInner[]**](SubmitWhatsAppNumberKycRequestDocumentsInner.md) | One per document requirement. Each is EITHER inline base64 OR a &#x60;documentId&#x60; returned by POST /v1/whatsapp/phone-numbers/kyc/upload-document (use the upload endpoint for large files to stay under the request-size limit). | [optional]
**address** | [**\Zernio\Model\SubmitWhatsAppNumberKycRequestAddress**](SubmitWhatsAppNumberKycRequestAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
