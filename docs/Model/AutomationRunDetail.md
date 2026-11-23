# # AutomationRunDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**automation_id** | **string** |  |
**kind** | **string** |  |
**status** | **string** | &#x60;live&#x60; while it runs or waits (a comment to DM run waiting for its follow gate is live). |
**subject** | [**\Zernio\Model\AutomationRunSubject**](AutomationRunSubject.md) |  |
**started_at** | **\DateTime** |  |
**ended_at** | **\DateTime** |  |
**exit_reason** | **string** | Why an exited or failed run stopped, for example &#x60;replied&#x60;, &#x60;unsubscribed&#x60; or &#x60;skipped&#x60;. |
**error** | **string** |  |
**steps** | [**\Zernio\Model\AutomationRunSteps**](AutomationRunSteps.md) |  |
**trace** | [**\Zernio\Model\AutomationRunDetailAllOfTrace[]**](AutomationRunDetailAllOfTrace.md) | Each step in order. Null where the run&#39;s store keeps no step by step record (runs on the automation engine keep where they are and how many steps they took). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
