# # AutomationBacktest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **\DateTime** | The first day replayed, in the ad account timezone. |
**to** | **\DateTime** | The last day replayed, yesterday in the ad account timezone. |
**timezone** | **string** |  |
**timezone_assumed** | **bool** | True when the ad account timezone is unknown and UTC was used. |
**currency** | **string** |  |
**totals** | [**\Zernio\Model\AutomationBacktestTotals**](AutomationBacktestTotals.md) |  |
**days** | [**\Zernio\Model\AutomationBacktestDay[]**](AutomationBacktestDay.md) |  |
**notes** | [**\Zernio\Model\AutomationBacktestNotesInner[]**](AutomationBacktestNotesInner.md) | What this replay could not know, for example that budgets have no history. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
