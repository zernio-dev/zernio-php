# # TwitterPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reply_to_tweet_id** | **string** | ID of an existing tweet to reply to. The published tweet will appear as a reply in that tweet&#39;s thread. For threads, only the first tweet replies to the target; subsequent tweets chain normally. | [optional]
**quote_tweet_id** | **string** | ID (or full status URL) of an existing tweet to quote-repost. The published tweet becomes a quote tweet of the target. Mutually exclusive with media and poll. X only permits quoting your own posts or posts you are mentioned in / part of the conversation thread of; quoting an arbitrary other account&#39;s post is rejected by X. Billed at the standard create rate ($0.015), unlike pasting a tweet URL into the text which is billed at the URL rate ($0.20). For threads, applies to the first tweet only. | [optional]
**reply_settings** | **string** | Controls who can reply to the tweet. \&quot;following\&quot; allows only people you follow, \&quot;mentionedUsers\&quot; allows only mentioned users, \&quot;subscribers\&quot; allows only subscribers, \&quot;verified\&quot; allows only verified users. Omit for default (everyone can reply). For threads, applies to the first tweet only. Cannot be combined with replyToTweetId. | [optional]
**thread_items** | [**\Zernio\Model\TwitterPlatformDataThreadItemsInner[]**](TwitterPlatformDataThreadItemsInner.md) | Complete sequence of tweets in a thread. The first item becomes the root tweet, subsequent items are chained as replies. When threadItems is provided, the top-level content field is used only for display and search purposes, it is NOT published. You must include your first tweet as threadItems[0]. | [optional]
**poll** | [**\Zernio\Model\TwitterPlatformDataPoll**](TwitterPlatformDataPoll.md) |  | [optional]
**long_video** | **bool** | Enable long video uploads (over 140 seconds) using amplify_video media category. Requires the connected X account to have an active X Premium subscription. When true, videos are uploaded with the amplify_video category which supports longer durations (up to 10 minutes via API). When false or omitted, the standard tweet_video category is used (140 second limit). Note that not all Premium accounts have API long-video access, as X may require separate allowlisting. | [optional] [default to false]
**geo_restriction** | [**\Zernio\Model\GeoRestriction**](GeoRestriction.md) |  | [optional]
**paid_partnership** | **bool** | When true, the post is labeled by X as a paid partnership / paid promotion. For threads, applies to the root tweet only. Field availability may depend on your X API access tier. | [optional] [default to false]
**made_with_ai** | **bool** | When true, the post is labeled by X as containing AI-generated media. Per X, this label is for AI-generated media, not AI-written text. For threads, applies to the root tweet only. | [optional] [default to false]
**sensitive_media** | [**\Zernio\Model\TwitterPlatformDataSensitiveMedia**](TwitterPlatformDataSensitiveMedia.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
