# # WebhookPayloadWhatsAppAccountQualityUpdatedQuality

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | **string** | The Meta webhook field that reported the change. |
**meta_event** | **string** | Meta&#39;s &#x60;event&#x60; on phone_number_quality_update (for example FLAGGED, UNFLAGGED, UPGRADE, DOWNGRADE, ONBOARDING, THROUGHPUT_UPGRADE). Null on business_capability_update. |
**quality_rating** | **string** | Current quality rating (GREEN, YELLOW, RED, UNKNOWN), read live from Meta on FLAGGED/UNFLAGGED. |
**previous_quality_rating** | **string** |  |
**messaging_limit_tier** | **string** | Current messaging limit tier, for example TIER_250, TIER_2K, TIER_10K, TIER_100K, TIER_UNLIMITED. |
**previous_messaging_limit_tier** | **string** |  |
**display_phone_number** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
