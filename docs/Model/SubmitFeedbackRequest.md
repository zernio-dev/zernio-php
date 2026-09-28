# # SubmitFeedbackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | What kind of feedback this is. |
**summary** | **string** | One line describing the problem or the missing capability. Also the dedup key. |
**details** | **string** | Longer explanation: what you were trying to do, steps to reproduce, the use case. | [optional]
**endpoint** | **string** | The endpoint involved, e.g. &#x60;POST /v1/posts&#x60;. | [optional]
**request_id** | **string** | The &#x60;x-request-id&#x60; header of the failing response, if any. | [optional]
**expected** | **string** | What you expected to happen. | [optional]
**actual** | **string** | What actually happened, e.g. the error message. | [optional]
**agent** | [**\Zernio\Model\SubmitFeedbackRequestAgent**](SubmitFeedbackRequestAgent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
