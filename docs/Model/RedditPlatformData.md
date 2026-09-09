# # RedditPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subreddit** | **string** | Target subreddit name (without \&quot;r/\&quot; prefix). Overrides the default. Use GET /v1/accounts/{id}/reddit-subreddits to list options. | [optional]
**title** | **string** | Post title. Defaults to the first line of content, truncated to 300 characters. | [optional]
**url** | **string** | URL for link posts. If provided (and forceSelf is not true), creates a link post instead of a text post. | [optional]
**force_self** | **bool** | When true, creates a text-only self post and skips native media uploads, even when media is provided. For native video with body text, omit forceSelf and supply content plus a video mediaItem. | [optional]
**flair_id** | **string** | Flair ID for the post. Required by some subreddits. Use GET /v1/accounts/{id}/reddit-flairs?subreddit&#x3D;name to list flairs. | [optional]
**flair_text** | **string** | Custom flair text, for subreddits that allow free-text flair. Ignored when flairId is provided (flairId wins). | [optional]
**nsfw** | **bool** | Mark the post as NSFW (Not Safe For Work / over 18). | [optional] [default to false]
**spoiler** | **bool** | Mark the post as a spoiler. The subreddit must have spoiler tagging enabled for this to take effect. | [optional] [default to false]
**sendreplies** | **bool** | Whether to receive inbox replies for comments on this post. Set to false to opt out. | [optional] [default to true]
**native_video** | **bool** | Controls Reddit&#39;s native video upload flow. When true (default for video mediaItems), the video is uploaded to Reddit&#39;s CDN and submitted with kind&#x3D;video so it renders as an embedded Reddit video player. Reddit transcodes server-side (1080p/30fps cap). Set to false to explicitly publish an external link instead. The post content (or Reddit customContent override) is included as Markdown body text on the native video. When body text is present, upload failures or subreddit video restrictions fail the post without falling back to a link. Automatic link fallback applies only without body text. | [optional] [default to true]
**videogif** | **bool** | When true (and nativeVideo is active), submits the video as a silent videogif (kind&#x3D;videogif). Use for short looping clips without audio. | [optional]
**video_poster_url** | **string** | Optional poster/thumbnail image URL for native video posts. If omitted, the first frame of the video is extracted and used automatically. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
