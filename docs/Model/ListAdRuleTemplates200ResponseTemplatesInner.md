# # ListAdRuleTemplates200ResponseTemplatesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**description** | **string** |  |
**level** | [**\Zernio\Model\AdRuleLevel**](AdRuleLevel.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**actions** | [**\Zernio\Model\AdRuleAction[]**](AdRuleAction.md) | Each type at most once, and at most one of &#x60;pause&#x60;, &#x60;activate&#x60; and &#x60;adjust_budget&#x60;. |
**schedule** | [**\Zernio\Model\AdRuleSchedule**](AdRuleSchedule.md) |  |
**cooldown_minutes** | **int** |  |
**platforms** | **string[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
