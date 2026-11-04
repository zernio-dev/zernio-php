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
**filters** | [**\Zernio\Model\AdRuleFiltersInner[]**](AdRuleFiltersInner.md) | Narrows the objects the rule checks. Every filter must hold. A campaign rule reads &#x60;name&#x60;, &#x60;campaign_id&#x60;, &#x60;goal&#x60;, &#x60;days_live&#x60; and &#x60;budget_level&#x60;; an ad set rule also &#x60;campaign_name&#x60; and &#x60;adset_id&#x60;; an ad rule also &#x60;adset_name&#x60; and &#x60;ad_id&#x60;. |
**groups** | [**\Zernio\Model\AdRuleGroupsInner[]**](AdRuleGroupsInner.md) | Campaigns judged together, campaign rules only. Each group&#39;s numbers and your results are added up across its campaigns, and rates and formulas are computed on the totals: a group&#39;s &#x60;result:cac_percent&#x60; is its total spend over its total revenue.  The conditions are judged once per group, and a matching group acts on each of its campaigns, each with its own cooldown and daily cap. Paused campaigns count toward a group&#39;s totals; only the ones the rule may act on are changed.  A group with no filters holds every campaign the rule checks: the whole ad account. A campaign in several groups is acted on once per run, by the first matching group. Reach and frequency cannot be added up across campaigns, so a rule with groups cannot use them.  A campaign with no results sent for the window adds its spend and no results to its group. A result sent as a rate (kind &#x60;percent&#x60; or &#x60;ratio&#x60;, no formula) reads as unknown for a group; define it as a formula over counts. |
**lifecycle** | [**\Zernio\Model\AdRuleLifecycle**](AdRuleLifecycle.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**actions** | [**\Zernio\Model\AdRuleAction[]**](AdRuleAction.md) | Each type at most once, and at most one of &#x60;pause&#x60;, &#x60;activate&#x60;, &#x60;adjust_budget&#x60;, &#x60;adjust_bid&#x60;, &#x60;duplicate&#x60; and &#x60;edit_name&#x60;. |
**schedule** | [**\Zernio\Model\AdRuleSchedule**](AdRuleSchedule.md) |  |
**cooldown_minutes** | **int** |  |
**enabled** | **bool** |  |
**last_run_at** | **\DateTime** |  |
**next_run_at** | **\DateTime** | Null while the rule is disabled. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
