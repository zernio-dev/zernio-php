# # AdRuleRunEvaluation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unread_objects** | **int** | On a run that matched nothing: how many objects had a condition whose value could not be read, so they could not match. A campaign with under 3 of the 4 previous weeks of data has no &#x60;usual&#x60; yet. | [optional]
**rule** | [**\Zernio\Model\AdRuleRunEvaluationRule**](AdRuleRunEvaluationRule.md) |  | [optional]
**today** | **\DateTime** |  | [optional]
**timezone** | **string** |  | [optional]
**timezone_assumed** | **bool** |  | [optional]
**currency** | **string** |  | [optional]
**hourly_through** | **\DateTime** | Where the run&#39;s hourly windows ended. Absent on runs recorded before November 2026. | [optional]
**matched** | [**\Zernio\Model\AdRuleObjectEvaluation[]**](AdRuleObjectEvaluation.md) | The matched objects, at most 200. &#x60;matchedTotal&#x60; has the full count. | [optional]
**matched_total** | **int** | How many objects matched, including those past the 200 recorded. Absent on runs recorded before November 2026. | [optional]
**actions** | [**\Zernio\Model\AdRuleRunEvaluationActionsInner[]**](AdRuleRunEvaluationActionsInner.md) |  | [optional]
**notification** | [**\Zernio\Model\AdRuleRunEvaluationNotification**](AdRuleRunEvaluationNotification.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
