# # RespondToSmsRegistrationReviewRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**note** | **string** | Answer for the reviewer. Required when no files are sent. | [optional]
**files** | **string[]** | Hosted document URLs returned by POST /v1/sms/opt-in-proof. | [optional]
**request_id** | **string** | The &#x60;reviewRequest.id&#x60; you are answering. When it no longer matches the open request the reply is refused with 409. | [optional]
**answers** | [**\Zernio\Model\RespondToSmsRegistrationReviewRequestAnswersInner[]**](RespondToSmsRegistrationReviewRequestAnswersInner.md) | One answer per point of the open &#x60;reviewRequest&#x60;, each point at most once. Required (every point) when the request has points; a missing, repeated or unknown point is a 400 naming the point ids. At most 10 files per reply. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
