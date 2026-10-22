# # WebhookPayloadAdDeliveryIssueIssue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**raw** | **string** | Platform-native status string, forwarded verbatim (Meta &#x60;WITH_ISSUES&#x60;, TikTok &#x60;ADVERTISER_ACCOUNT_PUNISH&#x60;, LinkedIn &#x60;REMOVED&#x60;, ...). |
**reasons** | [**\Zernio\Model\WebhookPayloadAdReviewReviewReasonsInner[]**](WebhookPayloadAdReviewReviewReasonsInner.md) | What the platform says is wrong. Meta reports it per campaign; other networks send no message today, so it is empty there. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
