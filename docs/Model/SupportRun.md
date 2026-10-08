# # SupportRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**run_id** | **string** | Run id, a 24-character hex string. |
**thread_id** | **string** | Conversation thread id. Send it back as &#x60;threadId&#x60; to ask a follow-up in the same thread. |
**status** | **string** | queued and running are in progress. needs_human means Ana handed the question to a person instead of answering. |
**stop_reason** | **string** | Why the run stopped. Null while it is in progress. |
**answer** | **string** | Ana&#39;s answer. Null while the run is in progress or when it failed. |
**usage** | [**\Zernio\Model\SupportRunUsage**](SupportRunUsage.md) |  |
**cost_usd** | **float** | The amount billed for the run, in USD: the model cost plus 20%, never above &#x60;maxCostUsd&#x60;. 0 for a failed run. |
**max_cost_usd** | **float** | The cost cap this run was started with, in USD. |
**created_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  |
**finished_at** | **\DateTime** |  |
**poll_after_seconds** | **int** | Seconds to wait before polling again. Present only while the run is queued or running. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
