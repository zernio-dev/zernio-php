# # PlatformAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**status** | **string** |  | [optional]
**platform_post_id** | **string** | The native post ID on the platform (e.g. Instagram media ID, tweet ID) | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**analytics** | [**\Zernio\Model\PostAnalytics**](PostAnalytics.md) |  | [optional]
**sync_status** | **string** | Sync state of analytics for this platform | [optional]
**platform_post_url** | **string** |  | [optional]
**error_message** | **string** | Failure detail. On failed entries, why the post failed to publish. On unavailable entries, why analytics cannot be synced (e.g. Google Business Profile, a TikTok upload that never received a video id). On pending entries, the most recent analytics sync error for the account (null while no sync has failed), cleared after the next successful sync. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
