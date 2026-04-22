# # PlatformTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | Supported values: twitter, threads, instagram, youtube, facebook, linkedin, pinterest, reddit, tiktok, bluesky, googlebusiness, telegram | [optional]
**account_id** | [**\Zernio\Model\PlatformTargetAccountId**](PlatformTargetAccountId.md) |  | [optional]
**custom_content** | **string** | Platform-specific text override. When set, this content is used instead of the top-level post content for this platform. Useful for tailoring captions per platform (e.g. keeping tweets under 280 characters). | [optional]
**custom_media** | [**\Zernio\Model\MediaItem[]**](MediaItem.md) |  | [optional]
**scheduled_for** | **\DateTime** | Optional per-platform scheduled time override (uses post.scheduledFor when omitted) | [optional]
**platform_specific_data** | [**\Zernio\Model\PlatformTargetPlatformSpecificData**](PlatformTargetPlatformSpecificData.md) |  | [optional]
**status** | **string** | Platform-specific status: pending, publishing, published, failed | [optional]
**platform_post_id** | **string** | The native post ID on the platform (populated after successful publish) | [optional]
**platform_post_url** | **string** | Public URL of the published post. Included in the response for immediate posts; for scheduled posts, fetch via GET /v1/posts/{postId} after publish time. | [optional]
**published_at** | **\DateTime** | Timestamp when the post was published to this platform | [optional]
**error_message** | **string** | Human-readable error message when status is failed. Contains platform-specific error details explaining why the publish failed. | [optional]
**error_category** | **string** | Error category for programmatic handling: auth_expired (token expired/revoked), user_content (wrong format/too long), user_abuse (rate limits/spam), account_issue (config problems), platform_rejected (policy violation), platform_error (5xx/maintenance), system_error (Zernio infra), unknown | [optional]
**error_source** | **string** | Who caused the error: user (fix content/reconnect), platform (outage/API change), system (Zernio issue, rare) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
