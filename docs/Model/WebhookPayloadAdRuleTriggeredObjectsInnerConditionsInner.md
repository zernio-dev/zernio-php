# # WebhookPayloadAdRuleTriggeredObjectsInnerConditionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric** | **string** | &#x60;spend&#x60;, &#x60;impressions&#x60;, &#x60;clicks&#x60;, &#x60;conversions&#x60;, &#x60;ctr&#x60;, &#x60;cpc&#x60;, &#x60;cpm&#x60;, &#x60;cpa&#x60; or &#x60;roas&#x60;. New values may be added. |
**window** | **string** | &#x60;today&#x60;, &#x60;yesterday&#x60;, &#x60;last_3d&#x60;, &#x60;last_7d&#x60;, &#x60;last_14d&#x60; or &#x60;last_30d&#x60;, in the account&#39;s calendar (see &#x60;run.today&#x60;). New values may be added. |
**op** | **string** | &#x60;&gt;&#x60;, &#x60;&gt;&#x3D;&#x60;, &#x60;&lt;&#x60;, &#x60;&lt;&#x3D;&#x60;, or &#x60;top&#x60; and &#x60;bottom&#x60; for a rank condition, whose &#x60;actual&#x60; is the object&#39;s position (1 first). |
**value** | **float** | The threshold set on the rule. |
**actual** | **float** | The object&#39;s value for the metric over the window. Null when it cannot be computed, for example a cost per action with no actions. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
