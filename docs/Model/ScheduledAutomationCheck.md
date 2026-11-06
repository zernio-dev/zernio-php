# # ScheduledAutomationCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**automation_id** | **string** |  |
**checked_at** | **\DateTime** |  |
**outcome** | **string** |  |
**evaluated** | **int** | Posts judged. |
**analytics_synced_at** | **\DateTime** | The oldest analytics sync among the posts judged: their numbers are as of then. |
**matched** | [**\Zernio\Model\ScheduledAutomationCheckMatchedInner[]**](ScheduledAutomationCheckMatchedInner.md) | Up to 20 matching posts. |
**actions** | [**\Zernio\Model\ScheduledAutomationCheckActionsInner[]**](ScheduledAutomationCheckActionsInner.md) |  |
**error** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
