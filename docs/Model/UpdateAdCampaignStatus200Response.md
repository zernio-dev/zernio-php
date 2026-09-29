# # UpdateAdCampaignStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The campaign&#39;s delivery status derived from its switch as read back (&#x60;paused&#x60; when the switch is off). Echoes the request when the platform could not be read. | [optional]
**platform_campaign_status** | **string** | The campaign&#39;s own switch as read back from the platform, in the raw platform vocabulary (Meta effective_status, TikTok ENABLE / DISABLE, Google ENABLED / PAUSED, ChatGPT (OpenAI) status). Null when the platform could not be read, which is always the case on Pinterest, LinkedIn and X (no single-campaign read). | [optional]
**status_read_at** | **\DateTime** | When the switch was read back. Null when it could not be read. | [optional]
**updated** | **int** | 1 when the campaign&#39;s switch was written. | [optional]
**skipped** | **int** | 1 when a live read showed the campaign already in the requested state, so nothing was written. | [optional]
**skipped_reasons** | **string[]** | Why the write was skipped, for example \&quot;Campaign already switched off\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
