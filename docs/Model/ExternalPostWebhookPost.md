# # ExternalPostWebhookPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native post ID (NOT a Zernio post ID). |
**platform** | **string** | Platform the post lives on (e.g. \&quot;googlebusiness\&quot;). |
**account_id** | **string** | Zernio social account ID the post belongs to. |
**url** | **string** | Direct URL to the post on the platform, when available. |
**content** | **string** | Post text. May be empty. |
**media_type** | **string** | One of image, video, gif, document, text, carousel. |
**media_items** | [**\Zernio\Model\ExternalPostWebhookPostMediaItemsInner[]**](ExternalPostWebhookPostMediaItemsInner.md) |  |
**thumbnail_url** | **string** |  |
**published_at** | **\DateTime** |  |
**source** | **string** | Always \&quot;external\&quot; — distinguishes these from Zernio-originated post.* events. |
**deleted_at** | **\DateTime** | Detection time of deletion. Present on post.external.deleted; null/absent otherwise. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
