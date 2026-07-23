# # RespondToPhoneNumberReviewer200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | &#x60;resubmitted&#x60; when corrections were submitted, &#x60;replied&#x60; when it was message-only. | [optional]
**posted** | **bool** | Whether a message/attachments were posted to the reviewer. | [optional]
**phone_number** | [**\Zernio\Model\RemediatePhoneNumber200ResponsePhoneNumber**](RemediatePhoneNumber200ResponsePhoneNumber.md) |  | [optional]
**siblings_resubmitted** | **int** | Other numbers on the same registration the correction fanned out to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
