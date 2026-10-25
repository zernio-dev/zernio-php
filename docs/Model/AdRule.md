# # AdRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**account_id** | **string** | The ads connection the rule acts through. |
**platform** | **string** | Ad platform, for example &#x60;facebook&#x60; (Meta) or &#x60;google&#x60;. |
**ad_account_id** | **string** | Platform ad account ID. |
**level** | [**\Zernio\Model\AdRuleLevel**](AdRuleLevel.md) |  |
**campaign_ids** | **string[]** | Platform campaign IDs the rule is limited to. Null checks the whole ad account. |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**actions** | [**\Zernio\Model\AdRuleAction[]**](AdRuleAction.md) | Each type at most once, and at most one of &#x60;pause&#x60;, &#x60;activate&#x60; and &#x60;adjust_budget&#x60;. |
**schedule** | [**\Zernio\Model\AdRuleSchedule**](AdRuleSchedule.md) |  |
**cooldown_minutes** | **int** |  |
**enabled** | **bool** |  |
**last_run_at** | **\DateTime** |  |
**next_run_at** | **\DateTime** | Null while the rule is disabled. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
