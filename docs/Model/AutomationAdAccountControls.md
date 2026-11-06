# # AutomationAdAccountControls

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The connection your automations reach the ad account through; null when no automation uses it any more. |
**platform** | **string** | The ad platform, for example &#x60;facebook&#x60;. |
**ad_account_id** | **string** | The platform&#39;s ad account id. |
**paused** | **bool** | True when every ad rule on this ad account is stopped. |
**paused_at** | **\DateTime** |  |
**daily_raise_limit** | **float** | The most automations may raise budgets on this ad account in any 24 hours, in the ad account&#39;s currency. Null when there is no limit. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
