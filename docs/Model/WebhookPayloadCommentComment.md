# # WebhookPayloadCommentComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform comment ID |
**post_id** | **string** | Internal post ID (null for posts not published through Zernio) |
**platform_post_id** | **string** | Platform&#39;s post ID |
**platform** | **string** |  |
**text** | **string** | Comment text content |
**author** | [**\Zernio\Model\WebhookPayloadCommentCommentAuthor**](WebhookPayloadCommentCommentAuthor.md) |  |
**created_at** | **\DateTime** |  |
**is_reply** | **bool** | Whether this is a reply to another comment |
**parent_comment_id** | **string** | Parent comment ID if this is a reply |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
