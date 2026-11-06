# # AutomationControls

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paused** | **bool** | True when every ad rule of the team is stopped. Each rule keeps its own status. |
**paused_at** | **\DateTime** | When the team switch was turned off; null while it is on. |
**ad_accounts** | [**\Zernio\Model\AutomationAdAccountControls[]**](AutomationAdAccountControls.md) | Every ad account your automations use, plus any ad account that has controls set. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
