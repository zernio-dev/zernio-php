# # WebhookPayloadAutomationActionAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**subject_id** | **string** | The platform&#39;s id of the object changed: an ad, ad set or campaign for ad rules. |
**type** | **string** | &#x60;pause&#x60;, &#x60;activate&#x60;, &#x60;adjust_budget&#x60; or &#x60;notify&#x60; for ad rules. New values may be added. |
**status** | **string** |  |
**reason** | **string** |  |
**previous** | **array<string,mixed>** | The value before the change, such as &#x60;{ \&quot;dailyBudget\&quot;: 40 }&#x60;. |
**target** | **array<string,mixed>** | The value the change sets, such as &#x60;{ \&quot;dailyBudget\&quot;: 48 }&#x60; or &#x60;{ \&quot;status\&quot;: \&quot;paused\&quot; }&#x60;. |
**acted_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
