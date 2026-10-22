# # WebhookPayloadAdReviewReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  |
**raw** | **string** | Platform-native status string, forwarded verbatim (Meta &#x60;ACTIVE&#x60; / &#x60;DISAPPROVED&#x60;, TikTok &#x60;DISABLE&#x60;, ...). |
**reasons** | [**\Zernio\Model\WebhookPayloadAdReviewReviewReasonsInner[]**](WebhookPayloadAdReviewReviewReasonsInner.md) | Why the platform rejected the ad, when it says. Always empty on &#x60;approved&#x60;. Most networks only return a generic message today. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
