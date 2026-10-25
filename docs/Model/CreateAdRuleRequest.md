# # CreateAdRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**account_id** | **string** | The ads connection (account ID from &#x60;GET /v1/accounts&#x60;). |
**ad_account_id** | **string** | Platform ad account ID, from &#x60;GET /v1/ads/accounts&#x60;. |
**level** | [**\Zernio\Model\AdRuleLevel**](AdRuleLevel.md) |  |
**campaign_ids** | **string[]** | Only check these platform campaign IDs (or their ad sets). Leave out to check the whole ad account. | [optional]
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**actions** | [**\Zernio\Model\AdRuleAction[]**](AdRuleAction.md) | Each type at most once, and at most one of &#x60;pause&#x60;, &#x60;activate&#x60; and &#x60;adjust_budget&#x60;. |
**schedule** | [**\Zernio\Model\AdRuleSchedule**](AdRuleSchedule.md) | Leave it out to run every 60 minutes. | [optional]
**cooldown_minutes** | **int** | How long the rule leaves an object alone after acting on it. | [optional] [default to 1440]
**enabled** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
