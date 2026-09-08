# # WebhookPayloadCommentPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal post ID (null for posts not published through Zernio) |
**platform_post_id** | **string** | Platform&#39;s post ID |
**content** | **string** | Post text, from our synced copy. No platform call is made on the comment path, so null when the post was never synced. |
**image_url** | **string** | Post thumbnail or first media item URL. Platform CDN URLs expire, fetch promptly. |
**permalink** | **string** | Public URL of the post. Null when no URL was ever stored for it, for example a platform draft or a post recovered without one. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
