# # ListInboxMentions200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Mention document ID | [optional]
**platform** | **string** |  | [optional]
**type** | **string** | Instagram only: &#x60;caption&#x60; when the account was tagged in a media caption, &#x60;comment&#x60; when it was tagged in a comment. Null for LinkedIn. | [optional]
**media_id** | **string** | Instagram only: ID of the media the account was mentioned in (or under). Null for LinkedIn. | [optional]
**comment_id** | **string** | Instagram only: ID of the comment that mentioned the account. Null for caption mentions and LinkedIn. | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**content** | **string** | Text that mentioned you: the post text on LinkedIn, the caption or comment text on Instagram. Empty until it has been read. | [optional]
**permalink** | **string** | URL to the source post on LinkedIn. Null on Instagram. | [optional]
**author_urn** | **string** | LinkedIn URN of the person who mentioned you, or the Instagram-scoped ID of the commenter on an Instagram comment mention. | [optional]
**author_name** | **string** | Display name of the author, resolved from authorUrn. Null when LinkedIn does not allow resolving the profile. | [optional]
**author_username** | **string** | LinkedIn vanity name of the author (the slug in their profile URL), or the Instagram username of the commenter or media owner. | [optional]
**author_picture** | **string** | Profile picture URL of the author. LinkedIn CDN URLs expire after some time, so fetch promptly rather than storing long-term. | [optional]
**organizational_entity** | **string** | URN of the LinkedIn organization that was mentioned, or the Instagram user ID of the mentioned account. | [optional]
**published_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
