# # RequestPhoneNumberWhatsAppCode200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** |  | [optional]
**method** | **string** |  | [optional]
**already_verified** | **bool** | Meta already reports the number as verified. No code is sent and the number is activated. | [optional]
**replaced** | **bool** | Meta refused the original number, which had never been live, so it was replaced on the same record. | [optional]
**new_phone_number** | **string** | The replacement number, present when &#x60;replaced&#x60; is true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
