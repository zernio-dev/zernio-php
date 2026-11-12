# # UpdateAdRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**level** | [**\Zernio\Model\AdRuleLevel**](AdRuleLevel.md) |  | [optional]
**campaign_ids** | **string[]** |  | [optional]
**filters** | [**\Zernio\Model\AdRuleFiltersInner[]**](AdRuleFiltersInner.md) | Narrows the objects the rule checks. Every filter must hold. A campaign rule reads &#x60;name&#x60;, &#x60;campaign_id&#x60;, &#x60;goal&#x60;, &#x60;days_live&#x60;, &#x60;days_since_change&#x60; and &#x60;budget_level&#x60;; an ad set rule all but &#x60;days_since_change&#x60;, plus &#x60;campaign_name&#x60; and &#x60;adset_id&#x60;; an ad rule also &#x60;adset_name&#x60; and &#x60;ad_id&#x60;. | [optional]
**groups** | [**\Zernio\Model\AdRuleGroupsInner[]**](AdRuleGroupsInner.md) | Null removes the groups; each campaign is then judged on its own. | [optional]
**lifecycle** | [**\Zernio\Model\AdRuleLifecycle**](AdRuleLifecycle.md) |  | [optional]
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  | [optional]
**actions** | [**\Zernio\Model\AdRuleAction[]**](AdRuleAction.md) | Each type at most once, and at most one of &#x60;pause&#x60;, &#x60;activate&#x60;, &#x60;adjust_budget&#x60;, &#x60;adjust_bid&#x60;, &#x60;adjust_target&#x60;, &#x60;reallocate_budget&#x60;, &#x60;duplicate&#x60; and &#x60;edit_name&#x60;. | [optional]
**schedule** | [**\Zernio\Model\AdRuleSchedule**](AdRuleSchedule.md) |  | [optional]
**cooldown_minutes** | **int** |  | [optional]
**enabled** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
