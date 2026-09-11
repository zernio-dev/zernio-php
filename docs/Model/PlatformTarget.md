# # PlatformTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | Supported values: twitter, threads, instagram, youtube, facebook, linkedin, pinterest, reddit, tiktok, bluesky, googlebusiness, telegram | [optional]
**account_id** | [**\Zernio\Model\PlatformTargetAccountId**](PlatformTargetAccountId.md) |  | [optional]
**custom_content** | **string** | Platform-specific text override. When set, this content is used instead of the top-level post content for this platform. Useful for tailoring captions per platform (e.g. keeping tweets under 280 characters). | [optional]
**custom_media** | [**\Zernio\Model\MediaItem[]**](MediaItem.md) |  | [optional]
**scheduled_for** | **\DateTime** | Optional per-platform scheduled time override (uses post.scheduledFor when omitted) | [optional]
**platform_specific_data** | **array<string,mixed>** | The platform-specific options stored on this target, echoed back as they were sent. Typed per platform on the way in (see the *PlatformData schemas on the request body); free-form on the way out, because a response is not guaranteed to match exactly one of those variants and generated clients that pick a variant by structure reject the entire response when it doesn&#39;t. Zernio&#39;s internal publishing state (snapshots, container ids, publish stage) is never returned here, and the key is omitted rather than sent as an empty object. | [optional]
**status** | **string** | Platform-specific status: pending, processing, uploading, published, failed, cancelled (removed from the platform via DELETE /v1/posts/{postId}/unpublish) | [optional]
**platform_post_id** | **string** | The native post ID on the platform (populated after successful publish) | [optional]
**platform_post_url** | **string** | Public URL of the published post. Included in the response for immediate posts; for scheduled posts, fetch via GET /v1/posts/{postId} after publish time. Empty when the platform confirmed the publish without returning an id a permalink can be built from (TikTok returns a publish id for some uploads); the TikTok reconcile cron backfills it later. | [optional]
**published_at** | **\DateTime** | Timestamp when the post was published to this platform | [optional]
**removed_from_platform_at** | **\DateTime** | Set when a post that was successfully published later disappears from the platform (deleted on-platform or taken down by the platform). status stays \&quot;published\&quot; (it reflects the publish outcome); poll this field to detect post-publish removals. Absent while the post is live, and cleared if the post reappears. Detection runs with the analytics sync, so expect up to a few hours of lag. | [optional]
**is_trial_reel** | **bool** | Present and true only when this Instagram reel was launched as a Trial through Zernio (created with platformSpecificData.trialParams). Use it to segment trial reels in analytics. Note: Instagram&#39;s Graph API exposes no readable trial field, so this reflects creation-time intent only. It indicates the reel STARTED as a trial, not whether or when it graduated. | [optional]
**trial_graduation_strategy** | **string** | Graduation strategy the trial reel was launched with. Present only when isTrialReel is true. | [optional]
**error_message** | **string** | Human-readable error message when status is failed. Contains platform-specific error details explaining why the publish failed. | [optional]
**error_category** | **string** | Error category for programmatic handling: auth_expired (token expired/revoked), user_content (wrong format/too long), user_abuse (rate limits/spam), account_issue (config problems), platform_rejected (policy violation), platform_error (5xx/maintenance), platform_rate_limit (platform throttling, retried automatically), quota_exhausted (a shared quota pool the integration draws on is empty, including our own capacity gate in front of one; not caused by your content or account, and safe to retry once the pool frees up), system_error (Zernio infra), unknown | [optional]
**error_source** | **string** | Who caused the error: user (fix content/reconnect), platform (outage/API change), system (Zernio issue, rare) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
