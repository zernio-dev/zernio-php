# # ReplyToInboxPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**message** | **string** | Reply text. On LinkedIn, mention with @[https://www.linkedin.com/in/vanity] (resolved to LinkedIn&#39;s live name, same rules and errors as post content) or @[Name](urn:li:person|organization:ID); a hand-written name must match LinkedIn&#39;s exactly or it renders as plain text. |
**attachment_url** | **string** | (Facebook only) URL of an image to attach, publishing a photo comment alongside the text. The URL must be publicly accessible so Meta can fetch it. Returns 400 for other platforms. | [optional]
**comment_id** | **string** | Reply to specific comment (optional) | [optional]
**mention_author** | **bool** | (LinkedIn only) When true, the reply starts with an @mention of the author of &#x60;commentId&#x60; (a member or a page), tagged with their URN and the name LinkedIn returns for them. Requires &#x60;commentId&#x60;. Returns 400 &#x60;platform_not_supported&#x60; on other platforms, and 400 &#x60;linkedin_mention_name_unavailable&#x60; with &#x60;details.authorUrn&#x60; when LinkedIn does not return the author&#39;s name (for example a page the account does not administer); mention them in &#x60;message&#x60; as @[Name](urn) instead. If LinkedIn rejects any mention in the reply, it is posted once more with every mention as plain text. | [optional]
**parent_cid** | **string** | (Bluesky only) Parent content identifier | [optional]
**root_uri** | **string** | (Bluesky only) Root post URI | [optional]
**root_cid** | **string** | (Bluesky only) Root post CID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
