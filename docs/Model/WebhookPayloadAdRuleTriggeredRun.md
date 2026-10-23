# # WebhookPayloadAdRuleTriggeredRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the rule run that triggered. |
**ran_at** | **\DateTime** | Scheduled time of the run (UTC). |
**today** | **\DateTime** | The ad account&#39;s calendar date (YYYY-MM-DD) the condition windows were resolved against, so &#x60;today&#x60; and &#x60;last_7d&#x60; mean the account&#39;s days, not UTC days. |
**timezone** | **string** | IANA timezone used for &#x60;today&#x60;, for example &#x60;Europe/Madrid&#x60;. |
**timezone_assumed** | **bool** | True when the ad account has no known timezone and UTC was assumed. |
**currency** | **string** | ISO 4217 currency of the ad account, which money metrics (&#x60;spend&#x60;, &#x60;cpc&#x60;, &#x60;cpm&#x60;, &#x60;cpa&#x60;) and condition values are in. Null when unknown. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
