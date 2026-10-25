# # AdRuleEvaluation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evaluated_at** | **\DateTime** |  |
**today** | **\DateTime** | The ad account&#39;s calendar date the windows were resolved against. |
**timezone** | **string** | IANA timezone of the ad account. |
**timezone_assumed** | **bool** | True when the ad account has no known timezone and UTC was assumed. |
**currency** | **string** |  |
**matched** | **int** | How many objects meet every condition. |
**objects** | [**\Zernio\Model\AdRuleObjectEvaluation[]**](AdRuleObjectEvaluation.md) | Every delivering campaign or ad set in scope (for an &#x60;activate&#x60; rule, the rule-paused ones it may reactivate). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
