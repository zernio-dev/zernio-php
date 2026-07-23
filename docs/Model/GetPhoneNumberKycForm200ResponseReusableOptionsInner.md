# # GetPhoneNumberKycForm200ResponseReusableOptionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Opaque option id — pass as &#x60;reuseOptionId&#x60; on POST. Stable selection key (a phone number is not unique across verifications). | [optional]
**from_phone_number** | **string** | Display only — the number this verification was submitted for. Not a selection key. | [optional]
**instant** | **bool** | true &#x3D; group-approved, a new order activates in minutes; false &#x3D; documents are reused but the order still queues for carrier review (1-3 days). | [optional]
**details** | [**\Zernio\Model\GetPhoneNumberKycForm200ResponseReusableDetailsInner[]**](GetPhoneNumberKycForm200ResponseReusableDetailsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
