# # AutomationBacktestTotals

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actions** | **int** | Actions it would have taken. Skipped ones are not counted. |
**pauses** | **int** |  |
**activations** | **int** |  |
**budget_raised** | **int** | Budget changes that raised a budget. |
**budget_lowered** | **int** | Budget changes that lowered a budget. |
**budget_change** | **float** | The net budget change across every budget action, in &#x60;currency&#x60;. |
**notifications** | **int** |  |
**skipped** | **int** | Actions planned but skipped. |
**subjects** | **int** | Distinct objects it would have acted on. |
**held_back** | **int** | Matches left alone by the cooldown or a cap, summed over the days. |
**days_with_actions** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
