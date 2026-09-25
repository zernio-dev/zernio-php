# # GetPhoneNumberClaim200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | [**\Zernio\Model\GetPhoneNumberClaim200ResponseCountry**](GetPhoneNumberClaim200ResponseCountry.md) |  | [optional]
**type** | **object** | The claimed number type, in the shape of &#x60;types[]&#x60; on GET /v1/phone-numbers/countries. | [optional]
**area** | [**\Zernio\Model\GetPhoneNumberClaim200ResponseArea**](GetPhoneNumberClaim200ResponseArea.md) |  | [optional]
**phone_number** | **string** | E.164, or null for an any-number claim. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
