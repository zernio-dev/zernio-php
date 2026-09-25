# # SmsRegistrationReviewRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Changes with every request. Send it back as &#x60;requestId&#x60; when answering, so a reply to a replaced request is refused (409) instead of filed under the new points. | [optional]
**intro** | **string** | Context from the reviewer, e.g. what was already fixed on our side. | [optional]
**points** | [**\Zernio\Model\SmsRegistrationReviewRequestPointsInner[]**](SmsRegistrationReviewRequestPointsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
