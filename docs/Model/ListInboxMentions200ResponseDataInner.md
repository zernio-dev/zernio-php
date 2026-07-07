# # ListInboxMentions200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Mention document ID | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**content** | **string** | Text of the post that mentioned you | [optional]
**permalink** | **string** | URL to the source post on LinkedIn | [optional]
**author_urn** | **string** | LinkedIn URN of the person who mentioned you | [optional]
**author_name** | **string** | Display name of the author, resolved from authorUrn. Null when LinkedIn does not allow resolving the profile. | [optional]
**author_username** | **string** | LinkedIn vanity name of the author (the slug in their profile URL) | [optional]
**author_picture** | **string** | Profile picture URL of the author. LinkedIn CDN URLs expire after some time, so fetch promptly rather than storing long-term. | [optional]
**organizational_entity** | **string** | URN of the organization that was mentioned | [optional]
**published_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
