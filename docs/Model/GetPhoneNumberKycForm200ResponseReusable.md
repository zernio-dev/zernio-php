# # GetPhoneNumberKycForm200ResponseReusable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **bool** |  | [optional]
**from_phone_number** | **string** |  | [optional]
**details** | [**\Zernio\Model\GetPhoneNumberKycForm200ResponseReusableDetailsInner[]**](GetPhoneNumberKycForm200ResponseReusableDetailsInner.md) | Human-readable summary of the verification on file (field labels + values, plus the address as one line). Best-effort — may be empty if the provider lookup fails. | [optional]
**options** | [**\Zernio\Model\GetPhoneNumberKycForm200ResponseReusableOptionsInner[]**](GetPhoneNumberKycForm200ResponseReusableOptionsInner.md) | One entry per distinct approved verification, newest first. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
