# # RedditPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Reddit post ID (without type prefix) | [optional]
**fullname** | **string** | Reddit fullname (e.g. t3_abc123) | [optional]
**title** | **string** |  | [optional]
**author** | **string** |  | [optional]
**subreddit** | **string** |  | [optional]
**url** | **string** | Post URL (may be a gallery URL | [optional]
**permalink** | **string** | Full permalink to the Reddit post | [optional]
**selftext** | **string** | Self-post body text (empty string for link posts) | [optional]
**created_utc** | **float** | Unix timestamp of post creation | [optional]
**score** | **int** |  | [optional]
**num_comments** | **int** |  | [optional]
**over18** | **bool** | Whether the post is marked NSFW | [optional]
**stickied** | **bool** |  | [optional]
**flair_text** | **string** | Link flair text if set | [optional]
**is_gallery** | **bool** | Whether the post is a gallery with multiple images | [optional]
**gallery_images** | **string[]** | Individual image URLs for gallery posts (only present when isGallery is true) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
