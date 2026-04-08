# # TwitterPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reply_to_tweet_id** | **string** | ID of an existing tweet to reply to. The published tweet will appear as a reply in that tweet&#39;s thread. For threads, only the first tweet replies to the target; subsequent tweets chain normally. | [optional]
**reply_settings** | **string** | Controls who can reply to the tweet. \&quot;following\&quot; allows only people you follow, \&quot;mentionedUsers\&quot; allows only mentioned users, \&quot;subscribers\&quot; allows only subscribers, \&quot;verified\&quot; allows only verified users. Omit for default (everyone can reply). For threads, applies to the first tweet only. Cannot be combined with replyToTweetId. | [optional]
**thread_items** | [**\Late\Model\TwitterPlatformDataThreadItemsInner[]**](TwitterPlatformDataThreadItemsInner.md) | Complete sequence of tweets in a thread. The first item becomes the root tweet, subsequent items are chained as replies. When threadItems is provided, the top-level content field is used only for display and search purposes, it is NOT published. You must include your first tweet as threadItems[0]. | [optional]
**poll** | [**\Late\Model\TwitterPlatformDataPoll**](TwitterPlatformDataPoll.md) |  | [optional]
**long_video** | **bool** | Enable long video uploads (over 140 seconds) using amplify_video media category. Requires the connected X account to have an active X Premium subscription. When true, videos are uploaded with the amplify_video category which supports longer durations (up to 10 minutes via API). When false or omitted, the standard tweet_video category is used (140 second limit). Note that not all Premium accounts have API long-video access, as X may require separate allowlisting. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
