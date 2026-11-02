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
**is_live** | **bool** | Instagram only: true when the comment was made on a live broadcast (the live_comments webhook field). Absent on every other comment. | [optional]
**ad** | [**\Zernio\Model\WebhookPayloadCommentCommentAd**](WebhookPayloadCommentCommentAd.md) |  | [optional]
**attachment** | [**\Zernio\Model\CommentAttachment**](CommentAttachment.md) | Facebook only. Present on graphic-only comments (sticker, GIF, photo) that carry no text: the webhook only includes it when the comment has no text. The REST comments API returns it whenever Facebook returns one, text or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
