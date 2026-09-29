# # UpdateAdSetStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The ad set&#39;s delivery status derived from the switches read back: &#x60;paused&#x60; when its own switch or its campaign&#39;s switch is off. Echoes the request when the platform could not be read. | [optional]
**platform_ad_set_status** | **string** | The ad set&#39;s own switch as read back from the platform, in the raw platform vocabulary (Meta effective_status, TikTok ENABLE / DISABLE, Google ENABLED / PAUSED, LinkedIn and Pinterest ACTIVE / PAUSED, ChatGPT (OpenAI) status). Null when the platform could not be read, which is always the case on X. | [optional]
**platform_campaign_status** | **string** | The parent campaign&#39;s switch, read in the same call where the platform returns it, otherwise the stored value. | [optional]
**status_read_at** | **\DateTime** | When the ad set switch was read back. Null when it could not be read. | [optional]
**updated** | **int** | 1 when the ad set&#39;s switch was written. | [optional]
**skipped** | **int** | 1 when a live read showed the ad set already in the requested state, so nothing was written. | [optional]
**skipped_reasons** | **string[]** | Why the write was skipped, for example \&quot;Ad set already switched off\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
