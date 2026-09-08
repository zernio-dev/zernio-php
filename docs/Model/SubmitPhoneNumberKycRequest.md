# # SubmitPhoneNumberKycRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**country** | **string** |  |
**submission_id** | **string** | Idempotency token for this submission attempt. Once the number has been ordered, a retry with the same token returns that same number instead of ordering another. A submission that fails before the number is ordered releases the token, so you can correct your details and re-submit with it. Omit it and every call provisions a new number. | [optional]
**quantity** | **int** | Provision several same-country numbers from one submission (1-5). The single verification covers all of them; each number is billed only when it activates. Numbers that fail to order are skipped (best-effort). With &#x60;areaCode&#x60;, a quantity above that area&#39;s live stock is rejected with a 400. | [optional] [default to 1]
**reuse** | **bool** | Reuse a prior approved verification for this country (skips document/field collection; places the order immediately). | [optional]
**reuse_option_id** | **string** | Which reusable verification to use (GET reusable.options[].id). The unambiguous selection key. Omitted &#x3D; the approved default. No match &#x3D; 409. | [optional]
**reuse_from** | **string** | Legacy fallback for &#x60;reuseOptionId&#x60;: the source phone number (GET reusable.options[].fromPhoneNumber). Ambiguous when a number labels two verifications, so prefer &#x60;reuseOptionId&#x60;. Omitted &#x3D; the approved default. No match &#x3D; 409. | [optional]
**area_code** | **string** | Area code (NDC) the number must be in. Hard constraint: an empty area pool fails with 409 code AREA_CODE_UNAVAILABLE instead of ordering from another area. Omit for any area. Options come from GET /v1/phone-numbers/availability (areaOptions); the purchase 202 kycUrl echoes the areaCode picked at purchase time so it can be passed here. | [optional]
**end_user_first_name** | **string** | End user&#39;s legal first name. Required when the country has an action/ID-verification (Onfido) requirement. | [optional]
**end_user_last_name** | **string** | End user&#39;s legal last name. Same condition as endUserFirstName. | [optional]
**values** | **array<string,string>** | requirementId → textual value | [optional]
**documents** | [**\Zernio\Model\SubmitPhoneNumberKycRequestDocumentsInner[]**](SubmitPhoneNumberKycRequestDocumentsInner.md) | One per document requirement. Each is EITHER inline base64 OR a &#x60;documentId&#x60; returned by POST /v1/phone-numbers/kyc/upload-document (use the upload endpoint for large files to stay under the request-size limit). | [optional]
**address** | [**\Zernio\Model\SubmitPhoneNumberKycRequestAddress**](SubmitPhoneNumberKycRequestAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
