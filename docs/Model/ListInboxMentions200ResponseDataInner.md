# # ListInboxMentions200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Mention document ID | [optional]
**platform** | **string** |  | [optional]
**type** | **string** | Instagram and Facebook: &#x60;caption&#x60; when the Instagram account was tagged in a media caption, &#x60;post&#x60; when the Facebook Page was tagged in a post, &#x60;comment&#x60; when either was tagged in a comment. Null for LinkedIn. | [optional]
**media_id** | **string** | Instagram only: ID of the media the account was mentioned in (or under). Null for LinkedIn and Facebook. | [optional]
**post_id** | **string** | Facebook only: ID of the post the Page was mentioned in (or under). Null for LinkedIn and Instagram. | [optional]
**comment_id** | **string** | Instagram and Facebook: ID of the comment that mentioned the account. Null for caption and post mentions and for LinkedIn. | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**content** | **string** | Text that mentioned you: the post text on LinkedIn, the caption or comment text on Instagram, the post or comment text on Facebook. Empty until it has been read. | [optional]
**permalink** | **string** | URL to the source post on LinkedIn. Null on Instagram and Facebook. | [optional]
**author_urn** | **string** | LinkedIn URN of the person who mentioned you, the Instagram-scoped ID of the commenter on an Instagram comment mention, or the ID of the Facebook user or Page that mentioned your Page when Meta sends it. | [optional]
**author_name** | **string** | Display name of the author, resolved from authorUrn on LinkedIn (null when LinkedIn does not allow resolving the profile) and taken from the webhook on Facebook. | [optional]
**author_username** | **string** | LinkedIn vanity name of the author (the slug in their profile URL), or the Instagram username of the commenter or media owner. | [optional]
**author_picture** | **string** | Profile picture URL of the author. LinkedIn CDN URLs expire after some time, so fetch promptly rather than storing long-term. | [optional]
**organizational_entity** | **string** | URN of the LinkedIn organization that was mentioned, the Instagram user ID of the mentioned account, or the ID of the mentioned Facebook Page. | [optional]
**published_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
