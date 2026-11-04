# # UpdateAdRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**level** | [**\Zernio\Model\AdRuleLevel**](AdRuleLevel.md) |  | [optional]
**campaign_ids** | **string[]** |  | [optional]
**filters** | [**\Zernio\Model\AdRuleFiltersInner[]**](AdRuleFiltersInner.md) | Narrows the objects the rule checks. Every filter must hold. Text compares without case, and a missing field reads as empty. | [optional]
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  | [optional]
**actions** | [**\Zernio\Model\AdRuleAction[]**](AdRuleAction.md) | Each type at most once, and at most one of &#x60;pause&#x60;, &#x60;activate&#x60;, &#x60;adjust_budget&#x60;, &#x60;duplicate&#x60; and &#x60;edit_name&#x60;. | [optional]
**schedule** | [**\Zernio\Model\AdRuleSchedule**](AdRuleSchedule.md) |  | [optional]
**cooldown_minutes** | **int** |  | [optional]
**enabled** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
