# # TwitterPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**article** | [**\Zernio\Model\XArticle**](XArticle.md) |  | [optional]
**reply_to_tweet_id** | **string** | ID of an existing tweet to reply to. The published tweet appears as a reply in that tweet&#39;s thread. For threads, only the first tweet replies to the target; subsequent tweets chain normally.  X only permits replying to your own posts or posts you are mentioned in; replying to an arbitrary other account&#39;s post is rejected by X. | [optional]
**quote_tweet_id** | **string** | ID (or full status URL) of an existing tweet to quote-repost. The published tweet becomes a quote tweet of the target. For threads, applies to the first tweet only.  - Mutually exclusive with media and poll. - X only permits quoting your own posts, or posts you are mentioned in or part of the conversation thread of. Quoting an arbitrary other account&#39;s post is rejected by X. - Billed at the standard create rate ($0.015), unlike pasting a tweet URL into the text, which is billed at the URL rate ($0.20). | [optional]
**reply_settings** | **string** | Controls who can reply to the tweet. \&quot;following\&quot; allows only people you follow, \&quot;mentionedUsers\&quot; allows only mentioned users, \&quot;subscribers\&quot; allows only subscribers, \&quot;verified\&quot; allows only verified users. Omit for default (everyone can reply). For threads, applies to the first tweet only. Cannot be combined with replyToTweetId. | [optional]
**thread_items** | [**\Zernio\Model\TwitterPlatformDataThreadItemsInner[]**](TwitterPlatformDataThreadItemsInner.md) | Complete sequence of tweets in a thread. The first item becomes the root tweet, subsequent items are chained as replies. When threadItems is provided, the top-level content field is used only for display and search purposes, it is NOT published. You must include your first tweet as threadItems[0]. | [optional]
**poll** | [**\Zernio\Model\TwitterPlatformDataPoll**](TwitterPlatformDataPoll.md) |  | [optional]
**long_video** | **bool** | Uploads the video with X&#39;s amplify_video media category instead of the standard tweet_video. Applied only when the connected X account has a paid X subscription; on other accounts the flag is accepted and ignored.  It is not required to post long videos. The standard tweet_video path already publishes videos well past 140 seconds on free accounts, and maximum duration is set by X per account, not by Zernio. Zernio enforces only the 512 MB file-size limit.  Some accounts additionally require X&#39;s long-video API allowlisting, without which X rejects an amplify_video upload. | [optional] [default to false]
**geo_restriction** | [**\Zernio\Model\GeoRestriction**](GeoRestriction.md) |  | [optional]
**paid_partnership** | **bool** | When true, the post is labeled by X as a paid partnership / paid promotion. For threads, applies to the root tweet only. Field availability may depend on your X API access tier. | [optional] [default to false]
**made_with_ai** | **bool** | When true, the post is labeled by X as containing AI-generated media. Per X, this label is for AI-generated media, not AI-written text. For threads, applies to the root tweet only. | [optional] [default to false]
**sensitive_media** | [**\Zernio\Model\TwitterPlatformDataSensitiveMedia**](TwitterPlatformDataSensitiveMedia.md) |  | [optional]
**media_tagged_users** | **string[]** | X usernames (with or without @) to tag on the photos of the post, up to 10. Photos only, not video or GIF. Applied to the media of every tweet in a thread. An unknown username fails the post. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
