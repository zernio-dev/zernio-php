# # GetInboxPostComments200ResponsePost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Reddit post base36 id (e.g. \&quot;1tjtj26\&quot;) | [optional]
**fullname** | **string** | Fullname with type prefix (e.g. \&quot;t3_1tjtj26\&quot;) | [optional]
**title** | **string** |  | [optional]
**selftext** | **string** | Body text for self-posts (empty for link posts) | [optional]
**author** | **string** | Reddit username | [optional]
**subreddit** | **string** | Subreddit name | [optional]
**permalink** | **string** | Absolute URL to the post on reddit.com | [optional]
**url** | **string** | For link posts | [optional]
**score** | **int** | Net upvotes (upvotes minus downvotes) | [optional]
**num_comments** | **int** |  | [optional]
**created_utc** | **int** | Unix timestamp in seconds | [optional]
**over18** | **bool** |  | [optional]
**stickied** | **bool** |  | [optional]
**flair_text** | **string** | Link flair text if any | [optional]
**is_gallery** | **bool** | True if the post is a Reddit gallery (multiple images) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
