# # GetWhatsAppNumberKycForm200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** |  | [optional]
**number_type** | **string** |  | [optional]
**fields** | [**\Zernio\Model\GetWhatsAppNumberKycForm200ResponseFieldsInner[]**](GetWhatsAppNumberKycForm200ResponseFieldsInner.md) |  | [optional]
**reusable** | [**\Zernio\Model\GetPhoneNumberKycForm200ResponseReusable**](GetPhoneNumberKycForm200ResponseReusable.md) |  | [optional]
**pending_review** | **bool** | true when this account already has a number for this country in regulatory review (status pending_regulatory).  Scope is the whole account across all profiles, and the country only (any number type), so it is not a per-end-client signal on a multi-tenant setup. Informational only: it never blocks a submission, and several same-country numbers may sit in review at once.  For a per-end-client view, call GET /v1/phone-numbers with &#x60;profileId&#x60; and &#x60;status&#x3D;pending_regulatory&#x60;; it also lists numbers declined in the last 30 days. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
