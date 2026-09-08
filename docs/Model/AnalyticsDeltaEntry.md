# # AnalyticsDeltaEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** | External post ID. The same identifier as &#x60;posts[]._id&#x60; in GET /v1/analytics. |
**account_id** | **string** | Account this post was published through |
**profile_id** | **string** | Profile the account belongs to |
**platform** | **string** |  |
**platform_post_id** | **string** | Platform-side post ID (for example the YouTube video ID) |
**published_at** | **\DateTime** | When the post was published, ISO-8601 UTC |
**synced_at** | **\DateTime** | When the sync cycle that produced this snapshot STARTED, ISO-8601 UTC. This is NOT the order entries arrive in and it is not a resume point: a slow cycle writes its rows after a faster cycle that started later, so &#x60;syncedAt&#x60; can go backwards between consecutive entries. Use &#x60;nextCursor&#x60; to resume. |
**is_deleted** | **bool** | True when the post was detected as deleted on the platform at this sync |
**metrics** | [**\Zernio\Model\AnalyticsDeltaEntryMetrics**](AnalyticsDeltaEntryMetrics.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
