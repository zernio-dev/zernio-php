# # CreateSupportRunRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | The question. Leading and trailing whitespace is trimmed. |
**thread_id** | **string** | Continue this thread. The thread must have a run started by your team, and no run in progress. | [optional]
**context** | [**\Zernio\Model\CreateSupportRunRequestContext**](CreateSupportRunRequestContext.md) |  | [optional]
**max_cost_usd** | **float** | Cost cap for this run, in USD. The run stops at the cap and bills at most this amount. | [optional] [default to 3]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
