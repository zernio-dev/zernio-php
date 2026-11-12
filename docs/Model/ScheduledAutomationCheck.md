# # ScheduledAutomationCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**automation_id** | **string** |  |
**checked_at** | **\DateTime** |  |
**outcome** | **string** | &#x60;paused&#x60;: the team used its free automation runs with no payment method on file, so the check did not run. &#x60;error&#x60; says why. |
**evaluated** | **int** | Posts judged. |
**analytics_synced_at** | **\DateTime** | The oldest analytics sync among the posts judged: their numbers are as of then. |
**matched** | [**\Zernio\Model\ScheduledAutomationCheckMatchedInner[]**](ScheduledAutomationCheckMatchedInner.md) | Up to 20 matching posts. |
**actions** | [**\Zernio\Model\ScheduledAutomationCheckActionsInner[]**](ScheduledAutomationCheckActionsInner.md) |  |
**error** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
