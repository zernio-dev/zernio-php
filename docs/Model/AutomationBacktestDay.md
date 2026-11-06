# # AutomationBacktestDay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** |  |
**checks** | **int** | Checks the schedule would have run that day. 0 on a day it skips. |
**evaluated** | **int** | The most objects any of the day&#39;s checks judged. |
**matched** | **int** | The most objects any of the day&#39;s checks matched. |
**held_back** | **int** | Matches left alone all day by the cooldown or a cap. |
**actions** | [**\Zernio\Model\AutomationBacktestDayActionsInner[]**](AutomationBacktestDayActionsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
