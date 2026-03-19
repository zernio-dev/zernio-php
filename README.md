# Zernio PHP SDK

Official PHP SDK for the [Zernio](https://zernio.com) social media scheduling API.
Authenticate with a Bearer API key. Base URL: https://zernio.com/api

> **Note:** This SDK uses the `Late` PHP namespace (e.g. `Late\Configuration`, `Late\Api\PostsApi`) for backwards compatibility. All classes remain under the `Late` namespace. This does not affect functionality.

For more information, please visit [https://zernio.com](https://zernio.com).

## Installation

### Requirements

PHP 8.1 and later.

### Composer

```bash
composer require zernio-dev/zernio-php
```


## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_request = {"name":"Analytics Read-Only Key","scope":"profiles","profileIds":["6507a1b2c3d4e5f6a7b8c9d0"],"permission":"read"}; // \Late\Model\CreateApiKeyRequest

try {
    $result = $apiInstance->createApiKey($create_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://zernio.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIKeysApi* | [**createApiKey**](docs/Api/APIKeysApi.md#createapikey) | **POST** /v1/api-keys | Create key
*APIKeysApi* | [**deleteApiKey**](docs/Api/APIKeysApi.md#deleteapikey) | **DELETE** /v1/api-keys/{keyId} | Delete key
*APIKeysApi* | [**listApiKeys**](docs/Api/APIKeysApi.md#listapikeys) | **GET** /v1/api-keys | List keys
*AccountGroupsApi* | [**createAccountGroup**](docs/Api/AccountGroupsApi.md#createaccountgroup) | **POST** /v1/account-groups | Create group
*AccountGroupsApi* | [**deleteAccountGroup**](docs/Api/AccountGroupsApi.md#deleteaccountgroup) | **DELETE** /v1/account-groups/{groupId} | Delete group
*AccountGroupsApi* | [**listAccountGroups**](docs/Api/AccountGroupsApi.md#listaccountgroups) | **GET** /v1/account-groups | List groups
*AccountGroupsApi* | [**updateAccountGroup**](docs/Api/AccountGroupsApi.md#updateaccountgroup) | **PUT** /v1/account-groups/{groupId} | Update group
*AccountSettingsApi* | [**deleteInstagramIceBreakers**](docs/Api/AccountSettingsApi.md#deleteinstagramicebreakers) | **DELETE** /v1/accounts/{accountId}/instagram-ice-breakers | Delete IG ice breakers
*AccountSettingsApi* | [**deleteMessengerMenu**](docs/Api/AccountSettingsApi.md#deletemessengermenu) | **DELETE** /v1/accounts/{accountId}/messenger-menu | Delete FB persistent menu
*AccountSettingsApi* | [**deleteTelegramCommands**](docs/Api/AccountSettingsApi.md#deletetelegramcommands) | **DELETE** /v1/accounts/{accountId}/telegram-commands | Delete TG bot commands
*AccountSettingsApi* | [**getInstagramIceBreakers**](docs/Api/AccountSettingsApi.md#getinstagramicebreakers) | **GET** /v1/accounts/{accountId}/instagram-ice-breakers | Get IG ice breakers
*AccountSettingsApi* | [**getMessengerMenu**](docs/Api/AccountSettingsApi.md#getmessengermenu) | **GET** /v1/accounts/{accountId}/messenger-menu | Get FB persistent menu
*AccountSettingsApi* | [**getTelegramCommands**](docs/Api/AccountSettingsApi.md#gettelegramcommands) | **GET** /v1/accounts/{accountId}/telegram-commands | Get TG bot commands
*AccountSettingsApi* | [**setInstagramIceBreakers**](docs/Api/AccountSettingsApi.md#setinstagramicebreakers) | **PUT** /v1/accounts/{accountId}/instagram-ice-breakers | Set IG ice breakers
*AccountSettingsApi* | [**setMessengerMenu**](docs/Api/AccountSettingsApi.md#setmessengermenu) | **PUT** /v1/accounts/{accountId}/messenger-menu | Set FB persistent menu
*AccountSettingsApi* | [**setTelegramCommands**](docs/Api/AccountSettingsApi.md#settelegramcommands) | **PUT** /v1/accounts/{accountId}/telegram-commands | Set TG bot commands
*AccountsApi* | [**deleteAccount**](docs/Api/AccountsApi.md#deleteaccount) | **DELETE** /v1/accounts/{accountId} | Disconnect account
*AccountsApi* | [**getAccountHealth**](docs/Api/AccountsApi.md#getaccounthealth) | **GET** /v1/accounts/{accountId}/health | Check account health
*AccountsApi* | [**getAllAccountsHealth**](docs/Api/AccountsApi.md#getallaccountshealth) | **GET** /v1/accounts/health | Check accounts health
*AccountsApi* | [**getFollowerStats**](docs/Api/AccountsApi.md#getfollowerstats) | **GET** /v1/accounts/follower-stats | Get follower stats
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /v1/accounts | List accounts
*AccountsApi* | [**updateAccount**](docs/Api/AccountsApi.md#updateaccount) | **PUT** /v1/accounts/{accountId} | Update account
*AnalyticsApi* | [**getAnalytics**](docs/Api/AnalyticsApi.md#getanalytics) | **GET** /v1/analytics | Get post analytics
*AnalyticsApi* | [**getBestTimeToPost**](docs/Api/AnalyticsApi.md#getbesttimetopost) | **GET** /v1/analytics/best-time | Get best times to post
*AnalyticsApi* | [**getContentDecay**](docs/Api/AnalyticsApi.md#getcontentdecay) | **GET** /v1/analytics/content-decay | Get content performance decay
*AnalyticsApi* | [**getDailyMetrics**](docs/Api/AnalyticsApi.md#getdailymetrics) | **GET** /v1/analytics/daily-metrics | Get daily aggregated metrics
*AnalyticsApi* | [**getFollowerStats**](docs/Api/AnalyticsApi.md#getfollowerstats) | **GET** /v1/accounts/follower-stats | Get follower stats
*AnalyticsApi* | [**getLinkedInAggregateAnalytics**](docs/Api/AnalyticsApi.md#getlinkedinaggregateanalytics) | **GET** /v1/accounts/{accountId}/linkedin-aggregate-analytics | Get LinkedIn aggregate stats
*AnalyticsApi* | [**getLinkedInPostAnalytics**](docs/Api/AnalyticsApi.md#getlinkedinpostanalytics) | **GET** /v1/accounts/{accountId}/linkedin-post-analytics | Get LinkedIn post stats
*AnalyticsApi* | [**getLinkedInPostReactions**](docs/Api/AnalyticsApi.md#getlinkedinpostreactions) | **GET** /v1/accounts/{accountId}/linkedin-post-reactions | Get LinkedIn post reactions
*AnalyticsApi* | [**getPostTimeline**](docs/Api/AnalyticsApi.md#getposttimeline) | **GET** /v1/analytics/post-timeline | Get post analytics timeline
*AnalyticsApi* | [**getPostingFrequency**](docs/Api/AnalyticsApi.md#getpostingfrequency) | **GET** /v1/analytics/posting-frequency | Get posting frequency vs engagement
*AnalyticsApi* | [**getYouTubeDailyViews**](docs/Api/AnalyticsApi.md#getyoutubedailyviews) | **GET** /v1/analytics/youtube/daily-views | Get YouTube daily views
*CommentsApi* | [**deleteInboxComment**](docs/Api/CommentsApi.md#deleteinboxcomment) | **DELETE** /v1/inbox/comments/{postId} | Delete comment
*CommentsApi* | [**getInboxPostComments**](docs/Api/CommentsApi.md#getinboxpostcomments) | **GET** /v1/inbox/comments/{postId} | Get post comments
*CommentsApi* | [**hideInboxComment**](docs/Api/CommentsApi.md#hideinboxcomment) | **POST** /v1/inbox/comments/{postId}/{commentId}/hide | Hide comment
*CommentsApi* | [**likeInboxComment**](docs/Api/CommentsApi.md#likeinboxcomment) | **POST** /v1/inbox/comments/{postId}/{commentId}/like | Like comment
*CommentsApi* | [**listInboxComments**](docs/Api/CommentsApi.md#listinboxcomments) | **GET** /v1/inbox/comments | List commented posts
*CommentsApi* | [**replyToInboxPost**](docs/Api/CommentsApi.md#replytoinboxpost) | **POST** /v1/inbox/comments/{postId} | Reply to comment
*CommentsApi* | [**sendPrivateReplyToComment**](docs/Api/CommentsApi.md#sendprivatereplytocomment) | **POST** /v1/inbox/comments/{postId}/{commentId}/private-reply | Send private reply
*CommentsApi* | [**unhideInboxComment**](docs/Api/CommentsApi.md#unhideinboxcomment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/hide | Unhide comment
*CommentsApi* | [**unlikeInboxComment**](docs/Api/CommentsApi.md#unlikeinboxcomment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/like | Unlike comment
*ConnectApi* | [**completeTelegramConnect**](docs/Api/ConnectApi.md#completetelegramconnect) | **PATCH** /v1/connect/telegram | Check Telegram status
*ConnectApi* | [**connectBlueskyCredentials**](docs/Api/ConnectApi.md#connectblueskycredentials) | **POST** /v1/connect/bluesky/credentials | Connect Bluesky account
*ConnectApi* | [**connectWhatsAppCredentials**](docs/Api/ConnectApi.md#connectwhatsappcredentials) | **POST** /v1/connect/whatsapp/credentials | Connect WhatsApp via credentials
*ConnectApi* | [**getConnectUrl**](docs/Api/ConnectApi.md#getconnecturl) | **GET** /v1/connect/{platform} | Get OAuth connect URL
*ConnectApi* | [**getFacebookPages**](docs/Api/ConnectApi.md#getfacebookpages) | **GET** /v1/accounts/{accountId}/facebook-page | List Facebook pages
*ConnectApi* | [**getGmbLocations**](docs/Api/ConnectApi.md#getgmblocations) | **GET** /v1/accounts/{accountId}/gmb-locations | List GBP locations
*ConnectApi* | [**getLinkedInOrganizations**](docs/Api/ConnectApi.md#getlinkedinorganizations) | **GET** /v1/accounts/{accountId}/linkedin-organizations | List LinkedIn orgs
*ConnectApi* | [**getPendingOAuthData**](docs/Api/ConnectApi.md#getpendingoauthdata) | **GET** /v1/connect/pending-data | Get pending OAuth data
*ConnectApi* | [**getPinterestBoards**](docs/Api/ConnectApi.md#getpinterestboards) | **GET** /v1/accounts/{accountId}/pinterest-boards | List Pinterest boards
*ConnectApi* | [**getRedditFlairs**](docs/Api/ConnectApi.md#getredditflairs) | **GET** /v1/accounts/{accountId}/reddit-flairs | List subreddit flairs
*ConnectApi* | [**getRedditSubreddits**](docs/Api/ConnectApi.md#getredditsubreddits) | **GET** /v1/accounts/{accountId}/reddit-subreddits | List Reddit subreddits
*ConnectApi* | [**getTelegramConnectStatus**](docs/Api/ConnectApi.md#gettelegramconnectstatus) | **GET** /v1/connect/telegram | Generate Telegram code
*ConnectApi* | [**handleOAuthCallback**](docs/Api/ConnectApi.md#handleoauthcallback) | **POST** /v1/connect/{platform} | Complete OAuth callback
*ConnectApi* | [**initiateTelegramConnect**](docs/Api/ConnectApi.md#initiatetelegramconnect) | **POST** /v1/connect/telegram | Connect Telegram directly
*ConnectApi* | [**listFacebookPages**](docs/Api/ConnectApi.md#listfacebookpages) | **GET** /v1/connect/facebook/select-page | List Facebook pages
*ConnectApi* | [**listGoogleBusinessLocations**](docs/Api/ConnectApi.md#listgooglebusinesslocations) | **GET** /v1/connect/googlebusiness/locations | List GBP locations
*ConnectApi* | [**listLinkedInOrganizations**](docs/Api/ConnectApi.md#listlinkedinorganizations) | **GET** /v1/connect/linkedin/organizations | List LinkedIn orgs
*ConnectApi* | [**listPinterestBoardsForSelection**](docs/Api/ConnectApi.md#listpinterestboardsforselection) | **GET** /v1/connect/pinterest/select-board | List Pinterest boards
*ConnectApi* | [**listSnapchatProfiles**](docs/Api/ConnectApi.md#listsnapchatprofiles) | **GET** /v1/connect/snapchat/select-profile | List Snapchat profiles
*ConnectApi* | [**selectFacebookPage**](docs/Api/ConnectApi.md#selectfacebookpage) | **POST** /v1/connect/facebook/select-page | Select Facebook page
*ConnectApi* | [**selectGoogleBusinessLocation**](docs/Api/ConnectApi.md#selectgooglebusinesslocation) | **POST** /v1/connect/googlebusiness/select-location | Select GBP location
*ConnectApi* | [**selectLinkedInOrganization**](docs/Api/ConnectApi.md#selectlinkedinorganization) | **POST** /v1/connect/linkedin/select-organization | Select LinkedIn org
*ConnectApi* | [**selectPinterestBoard**](docs/Api/ConnectApi.md#selectpinterestboard) | **POST** /v1/connect/pinterest/select-board | Select Pinterest board
*ConnectApi* | [**selectSnapchatProfile**](docs/Api/ConnectApi.md#selectsnapchatprofile) | **POST** /v1/connect/snapchat/select-profile | Select Snapchat profile
*ConnectApi* | [**updateFacebookPage**](docs/Api/ConnectApi.md#updatefacebookpage) | **PUT** /v1/accounts/{accountId}/facebook-page | Update Facebook page
*ConnectApi* | [**updateGmbLocation**](docs/Api/ConnectApi.md#updategmblocation) | **PUT** /v1/accounts/{accountId}/gmb-locations | Update GBP location
*ConnectApi* | [**updateLinkedInOrganization**](docs/Api/ConnectApi.md#updatelinkedinorganization) | **PUT** /v1/accounts/{accountId}/linkedin-organization | Switch LinkedIn account type
*ConnectApi* | [**updatePinterestBoards**](docs/Api/ConnectApi.md#updatepinterestboards) | **PUT** /v1/accounts/{accountId}/pinterest-boards | Set default Pinterest board
*ConnectApi* | [**updateRedditSubreddits**](docs/Api/ConnectApi.md#updateredditsubreddits) | **PUT** /v1/accounts/{accountId}/reddit-subreddits | Set default subreddit
*GMBAttributesApi* | [**getGoogleBusinessAttributes**](docs/Api/GMBAttributesApi.md#getgooglebusinessattributes) | **GET** /v1/accounts/{accountId}/gmb-attributes | Get attributes
*GMBAttributesApi* | [**updateGoogleBusinessAttributes**](docs/Api/GMBAttributesApi.md#updategooglebusinessattributes) | **PUT** /v1/accounts/{accountId}/gmb-attributes | Update attributes
*GMBFoodMenusApi* | [**getGoogleBusinessFoodMenus**](docs/Api/GMBFoodMenusApi.md#getgooglebusinessfoodmenus) | **GET** /v1/accounts/{accountId}/gmb-food-menus | Get food menus
*GMBFoodMenusApi* | [**updateGoogleBusinessFoodMenus**](docs/Api/GMBFoodMenusApi.md#updategooglebusinessfoodmenus) | **PUT** /v1/accounts/{accountId}/gmb-food-menus | Update food menus
*GMBLocationDetailsApi* | [**getGoogleBusinessLocationDetails**](docs/Api/GMBLocationDetailsApi.md#getgooglebusinesslocationdetails) | **GET** /v1/accounts/{accountId}/gmb-location-details | Get location details
*GMBLocationDetailsApi* | [**updateGoogleBusinessLocationDetails**](docs/Api/GMBLocationDetailsApi.md#updategooglebusinesslocationdetails) | **PUT** /v1/accounts/{accountId}/gmb-location-details | Update location details
*GMBMediaApi* | [**createGoogleBusinessMedia**](docs/Api/GMBMediaApi.md#creategooglebusinessmedia) | **POST** /v1/accounts/{accountId}/gmb-media | Upload photo
*GMBMediaApi* | [**deleteGoogleBusinessMedia**](docs/Api/GMBMediaApi.md#deletegooglebusinessmedia) | **DELETE** /v1/accounts/{accountId}/gmb-media | Delete photo
*GMBMediaApi* | [**listGoogleBusinessMedia**](docs/Api/GMBMediaApi.md#listgooglebusinessmedia) | **GET** /v1/accounts/{accountId}/gmb-media | List media
*GMBPlaceActionsApi* | [**createGoogleBusinessPlaceAction**](docs/Api/GMBPlaceActionsApi.md#creategooglebusinessplaceaction) | **POST** /v1/accounts/{accountId}/gmb-place-actions | Create action link
*GMBPlaceActionsApi* | [**deleteGoogleBusinessPlaceAction**](docs/Api/GMBPlaceActionsApi.md#deletegooglebusinessplaceaction) | **DELETE** /v1/accounts/{accountId}/gmb-place-actions | Delete action link
*GMBPlaceActionsApi* | [**listGoogleBusinessPlaceActions**](docs/Api/GMBPlaceActionsApi.md#listgooglebusinessplaceactions) | **GET** /v1/accounts/{accountId}/gmb-place-actions | List action links
*GMBReviewsApi* | [**getGoogleBusinessReviews**](docs/Api/GMBReviewsApi.md#getgooglebusinessreviews) | **GET** /v1/accounts/{accountId}/gmb-reviews | Get reviews
*InvitesApi* | [**createInviteToken**](docs/Api/InvitesApi.md#createinvitetoken) | **POST** /v1/invite/tokens | Create invite token
*LinkedInMentionsApi* | [**getLinkedInMentions**](docs/Api/LinkedInMentionsApi.md#getlinkedinmentions) | **GET** /v1/accounts/{accountId}/linkedin-mentions | Resolve LinkedIn mention
*LogsApi* | [**getPostLogs**](docs/Api/LogsApi.md#getpostlogs) | **GET** /v1/posts/{postId}/logs | Get post logs
*LogsApi* | [**listConnectionLogs**](docs/Api/LogsApi.md#listconnectionlogs) | **GET** /v1/connections/logs | List connection logs
*LogsApi* | [**listPostsLogs**](docs/Api/LogsApi.md#listpostslogs) | **GET** /v1/posts/logs | List publishing logs
*MediaApi* | [**getMediaPresignedUrl**](docs/Api/MediaApi.md#getmediapresignedurl) | **POST** /v1/media/presign | Get presigned upload URL
*MessagesApi* | [**editInboxMessage**](docs/Api/MessagesApi.md#editinboxmessage) | **PATCH** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Edit message
*MessagesApi* | [**getInboxConversation**](docs/Api/MessagesApi.md#getinboxconversation) | **GET** /v1/inbox/conversations/{conversationId} | Get conversation
*MessagesApi* | [**getInboxConversationMessages**](docs/Api/MessagesApi.md#getinboxconversationmessages) | **GET** /v1/inbox/conversations/{conversationId}/messages | List messages
*MessagesApi* | [**listInboxConversations**](docs/Api/MessagesApi.md#listinboxconversations) | **GET** /v1/inbox/conversations | List conversations
*MessagesApi* | [**sendInboxMessage**](docs/Api/MessagesApi.md#sendinboxmessage) | **POST** /v1/inbox/conversations/{conversationId}/messages | Send message
*MessagesApi* | [**updateInboxConversation**](docs/Api/MessagesApi.md#updateinboxconversation) | **PUT** /v1/inbox/conversations/{conversationId} | Update conversation status
*PostsApi* | [**bulkUploadPosts**](docs/Api/PostsApi.md#bulkuploadposts) | **POST** /v1/posts/bulk-upload | Bulk upload from CSV
*PostsApi* | [**createPost**](docs/Api/PostsApi.md#createpost) | **POST** /v1/posts | Create post
*PostsApi* | [**deletePost**](docs/Api/PostsApi.md#deletepost) | **DELETE** /v1/posts/{postId} | Delete post
*PostsApi* | [**getPost**](docs/Api/PostsApi.md#getpost) | **GET** /v1/posts/{postId} | Get post
*PostsApi* | [**listPosts**](docs/Api/PostsApi.md#listposts) | **GET** /v1/posts | List posts
*PostsApi* | [**retryPost**](docs/Api/PostsApi.md#retrypost) | **POST** /v1/posts/{postId}/retry | Retry failed post
*PostsApi* | [**unpublishPost**](docs/Api/PostsApi.md#unpublishpost) | **POST** /v1/posts/{postId}/unpublish | Unpublish post
*PostsApi* | [**updatePost**](docs/Api/PostsApi.md#updatepost) | **PUT** /v1/posts/{postId} | Update post
*ProfilesApi* | [**createProfile**](docs/Api/ProfilesApi.md#createprofile) | **POST** /v1/profiles | Create profile
*ProfilesApi* | [**deleteProfile**](docs/Api/ProfilesApi.md#deleteprofile) | **DELETE** /v1/profiles/{profileId} | Delete profile
*ProfilesApi* | [**getProfile**](docs/Api/ProfilesApi.md#getprofile) | **GET** /v1/profiles/{profileId} | Get profile
*ProfilesApi* | [**listProfiles**](docs/Api/ProfilesApi.md#listprofiles) | **GET** /v1/profiles | List profiles
*ProfilesApi* | [**updateProfile**](docs/Api/ProfilesApi.md#updateprofile) | **PUT** /v1/profiles/{profileId} | Update profile
*QueueApi* | [**createQueueSlot**](docs/Api/QueueApi.md#createqueueslot) | **POST** /v1/queue/slots | Create schedule
*QueueApi* | [**deleteQueueSlot**](docs/Api/QueueApi.md#deletequeueslot) | **DELETE** /v1/queue/slots | Delete schedule
*QueueApi* | [**getNextQueueSlot**](docs/Api/QueueApi.md#getnextqueueslot) | **GET** /v1/queue/next-slot | Get next available slot
*QueueApi* | [**listQueueSlots**](docs/Api/QueueApi.md#listqueueslots) | **GET** /v1/queue/slots | List schedules
*QueueApi* | [**previewQueue**](docs/Api/QueueApi.md#previewqueue) | **GET** /v1/queue/preview | Preview upcoming slots
*QueueApi* | [**updateQueueSlot**](docs/Api/QueueApi.md#updatequeueslot) | **PUT** /v1/queue/slots | Update schedule
*RedditSearchApi* | [**getRedditFeed**](docs/Api/RedditSearchApi.md#getredditfeed) | **GET** /v1/reddit/feed | Get subreddit feed
*RedditSearchApi* | [**searchReddit**](docs/Api/RedditSearchApi.md#searchreddit) | **GET** /v1/reddit/search | Search posts
*ReviewsApi* | [**deleteInboxReviewReply**](docs/Api/ReviewsApi.md#deleteinboxreviewreply) | **DELETE** /v1/inbox/reviews/{reviewId}/reply | Delete review reply
*ReviewsApi* | [**listInboxReviews**](docs/Api/ReviewsApi.md#listinboxreviews) | **GET** /v1/inbox/reviews | List reviews
*ReviewsApi* | [**replyToInboxReview**](docs/Api/ReviewsApi.md#replytoinboxreview) | **POST** /v1/inbox/reviews/{reviewId}/reply | Reply to review
*ToolsApi* | [**checkInstagramHashtags**](docs/Api/ToolsApi.md#checkinstagramhashtags) | **POST** /v1/tools/instagram/hashtag-checker | Check IG hashtag bans
*ToolsApi* | [**downloadBlueskyMedia**](docs/Api/ToolsApi.md#downloadblueskymedia) | **GET** /v1/tools/bluesky/download | Download Bluesky media
*ToolsApi* | [**downloadFacebookVideo**](docs/Api/ToolsApi.md#downloadfacebookvideo) | **GET** /v1/tools/facebook/download | Download Facebook video
*ToolsApi* | [**downloadInstagramMedia**](docs/Api/ToolsApi.md#downloadinstagrammedia) | **GET** /v1/tools/instagram/download | Download Instagram media
*ToolsApi* | [**downloadLinkedInVideo**](docs/Api/ToolsApi.md#downloadlinkedinvideo) | **GET** /v1/tools/linkedin/download | Download LinkedIn video
*ToolsApi* | [**downloadTikTokVideo**](docs/Api/ToolsApi.md#downloadtiktokvideo) | **GET** /v1/tools/tiktok/download | Download TikTok video
*ToolsApi* | [**downloadTwitterMedia**](docs/Api/ToolsApi.md#downloadtwittermedia) | **GET** /v1/tools/twitter/download | Download Twitter/X media
*ToolsApi* | [**downloadYouTubeVideo**](docs/Api/ToolsApi.md#downloadyoutubevideo) | **GET** /v1/tools/youtube/download | Download YouTube video
*ToolsApi* | [**getYouTubeTranscript**](docs/Api/ToolsApi.md#getyoutubetranscript) | **GET** /v1/tools/youtube/transcript | Get YouTube transcript
*TwitterEngagementApi* | [**bookmarkPost**](docs/Api/TwitterEngagementApi.md#bookmarkpost) | **POST** /v1/twitter/bookmark | Bookmark a tweet
*TwitterEngagementApi* | [**followUser**](docs/Api/TwitterEngagementApi.md#followuser) | **POST** /v1/twitter/follow | Follow a user
*TwitterEngagementApi* | [**removeBookmark**](docs/Api/TwitterEngagementApi.md#removebookmark) | **DELETE** /v1/twitter/bookmark | Remove bookmark
*TwitterEngagementApi* | [**retweetPost**](docs/Api/TwitterEngagementApi.md#retweetpost) | **POST** /v1/twitter/retweet | Retweet a post
*TwitterEngagementApi* | [**undoRetweet**](docs/Api/TwitterEngagementApi.md#undoretweet) | **DELETE** /v1/twitter/retweet | Undo retweet
*TwitterEngagementApi* | [**unfollowUser**](docs/Api/TwitterEngagementApi.md#unfollowuser) | **DELETE** /v1/twitter/follow | Unfollow a user
*UsageApi* | [**getUsageStats**](docs/Api/UsageApi.md#getusagestats) | **GET** /v1/usage-stats | Get plan and usage stats
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /v1/users/{userId} | Get user
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /v1/users | List users
*ValidateApi* | [**validateMedia**](docs/Api/ValidateApi.md#validatemedia) | **POST** /v1/tools/validate/media | Validate media URL
*ValidateApi* | [**validatePost**](docs/Api/ValidateApi.md#validatepost) | **POST** /v1/tools/validate/post | Validate post content
*ValidateApi* | [**validatePostLength**](docs/Api/ValidateApi.md#validatepostlength) | **POST** /v1/tools/validate/post-length | Validate post character count
*ValidateApi* | [**validateSubreddit**](docs/Api/ValidateApi.md#validatesubreddit) | **GET** /v1/tools/validate/subreddit | Check subreddit existence
*WebhooksApi* | [**createWebhookSettings**](docs/Api/WebhooksApi.md#createwebhooksettings) | **POST** /v1/webhooks/settings | Create webhook
*WebhooksApi* | [**deleteWebhookSettings**](docs/Api/WebhooksApi.md#deletewebhooksettings) | **DELETE** /v1/webhooks/settings | Delete webhook
*WebhooksApi* | [**getWebhookLogs**](docs/Api/WebhooksApi.md#getwebhooklogs) | **GET** /v1/webhooks/logs | Get delivery logs
*WebhooksApi* | [**getWebhookSettings**](docs/Api/WebhooksApi.md#getwebhooksettings) | **GET** /v1/webhooks/settings | List webhooks
*WebhooksApi* | [**testWebhook**](docs/Api/WebhooksApi.md#testwebhook) | **POST** /v1/webhooks/test | Send test webhook
*WebhooksApi* | [**updateWebhookSettings**](docs/Api/WebhooksApi.md#updatewebhooksettings) | **PUT** /v1/webhooks/settings | Update webhook
*WhatsAppApi* | [**addWhatsAppBroadcastRecipients**](docs/Api/WhatsAppApi.md#addwhatsappbroadcastrecipients) | **PATCH** /v1/whatsapp/broadcasts/{broadcastId}/recipients | Add recipients
*WhatsAppApi* | [**bulkDeleteWhatsAppContacts**](docs/Api/WhatsAppApi.md#bulkdeletewhatsappcontacts) | **DELETE** /v1/whatsapp/contacts/bulk | Bulk delete contacts
*WhatsAppApi* | [**bulkUpdateWhatsAppContacts**](docs/Api/WhatsAppApi.md#bulkupdatewhatsappcontacts) | **POST** /v1/whatsapp/contacts/bulk | Bulk update contacts
*WhatsAppApi* | [**cancelWhatsAppBroadcastSchedule**](docs/Api/WhatsAppApi.md#cancelwhatsappbroadcastschedule) | **DELETE** /v1/whatsapp/broadcasts/{broadcastId}/schedule | Cancel scheduled broadcast
*WhatsAppApi* | [**createWhatsAppBroadcast**](docs/Api/WhatsAppApi.md#createwhatsappbroadcast) | **POST** /v1/whatsapp/broadcasts | Create broadcast
*WhatsAppApi* | [**createWhatsAppContact**](docs/Api/WhatsAppApi.md#createwhatsappcontact) | **POST** /v1/whatsapp/contacts | Create contact
*WhatsAppApi* | [**createWhatsAppTemplate**](docs/Api/WhatsAppApi.md#createwhatsapptemplate) | **POST** /v1/whatsapp/templates | Create template
*WhatsAppApi* | [**deleteWhatsAppBroadcast**](docs/Api/WhatsAppApi.md#deletewhatsappbroadcast) | **DELETE** /v1/whatsapp/broadcasts/{broadcastId} | Delete broadcast
*WhatsAppApi* | [**deleteWhatsAppContact**](docs/Api/WhatsAppApi.md#deletewhatsappcontact) | **DELETE** /v1/whatsapp/contacts/{contactId} | Delete contact
*WhatsAppApi* | [**deleteWhatsAppGroup**](docs/Api/WhatsAppApi.md#deletewhatsappgroup) | **DELETE** /v1/whatsapp/groups | Delete group
*WhatsAppApi* | [**deleteWhatsAppTemplate**](docs/Api/WhatsAppApi.md#deletewhatsapptemplate) | **DELETE** /v1/whatsapp/templates/{templateName} | Delete template
*WhatsAppApi* | [**getWhatsAppBroadcast**](docs/Api/WhatsAppApi.md#getwhatsappbroadcast) | **GET** /v1/whatsapp/broadcasts/{broadcastId} | Get broadcast
*WhatsAppApi* | [**getWhatsAppBroadcastRecipients**](docs/Api/WhatsAppApi.md#getwhatsappbroadcastrecipients) | **GET** /v1/whatsapp/broadcasts/{broadcastId}/recipients | List recipients
*WhatsAppApi* | [**getWhatsAppBroadcasts**](docs/Api/WhatsAppApi.md#getwhatsappbroadcasts) | **GET** /v1/whatsapp/broadcasts | List broadcasts
*WhatsAppApi* | [**getWhatsAppBusinessProfile**](docs/Api/WhatsAppApi.md#getwhatsappbusinessprofile) | **GET** /v1/whatsapp/business-profile | Get business profile
*WhatsAppApi* | [**getWhatsAppContact**](docs/Api/WhatsAppApi.md#getwhatsappcontact) | **GET** /v1/whatsapp/contacts/{contactId} | Get contact
*WhatsAppApi* | [**getWhatsAppContacts**](docs/Api/WhatsAppApi.md#getwhatsappcontacts) | **GET** /v1/whatsapp/contacts | List contacts
*WhatsAppApi* | [**getWhatsAppDisplayName**](docs/Api/WhatsAppApi.md#getwhatsappdisplayname) | **GET** /v1/whatsapp/business-profile/display-name | Get display name and review status
*WhatsAppApi* | [**getWhatsAppGroups**](docs/Api/WhatsAppApi.md#getwhatsappgroups) | **GET** /v1/whatsapp/groups | List contact groups
*WhatsAppApi* | [**getWhatsAppTemplate**](docs/Api/WhatsAppApi.md#getwhatsapptemplate) | **GET** /v1/whatsapp/templates/{templateName} | Get template
*WhatsAppApi* | [**getWhatsAppTemplates**](docs/Api/WhatsAppApi.md#getwhatsapptemplates) | **GET** /v1/whatsapp/templates | List templates
*WhatsAppApi* | [**importWhatsAppContacts**](docs/Api/WhatsAppApi.md#importwhatsappcontacts) | **POST** /v1/whatsapp/contacts/import | Bulk import contacts
*WhatsAppApi* | [**removeWhatsAppBroadcastRecipients**](docs/Api/WhatsAppApi.md#removewhatsappbroadcastrecipients) | **DELETE** /v1/whatsapp/broadcasts/{broadcastId}/recipients | Remove recipients
*WhatsAppApi* | [**renameWhatsAppGroup**](docs/Api/WhatsAppApi.md#renamewhatsappgroup) | **POST** /v1/whatsapp/groups | Rename group
*WhatsAppApi* | [**scheduleWhatsAppBroadcast**](docs/Api/WhatsAppApi.md#schedulewhatsappbroadcast) | **POST** /v1/whatsapp/broadcasts/{broadcastId}/schedule | Schedule broadcast
*WhatsAppApi* | [**sendWhatsAppBroadcast**](docs/Api/WhatsAppApi.md#sendwhatsappbroadcast) | **POST** /v1/whatsapp/broadcasts/{broadcastId}/send | Send broadcast
*WhatsAppApi* | [**sendWhatsAppBulk**](docs/Api/WhatsAppApi.md#sendwhatsappbulk) | **POST** /v1/whatsapp/bulk | Bulk send template messages
*WhatsAppApi* | [**updateWhatsAppBusinessProfile**](docs/Api/WhatsAppApi.md#updatewhatsappbusinessprofile) | **POST** /v1/whatsapp/business-profile | Update business profile
*WhatsAppApi* | [**updateWhatsAppContact**](docs/Api/WhatsAppApi.md#updatewhatsappcontact) | **PUT** /v1/whatsapp/contacts/{contactId} | Update contact
*WhatsAppApi* | [**updateWhatsAppDisplayName**](docs/Api/WhatsAppApi.md#updatewhatsappdisplayname) | **POST** /v1/whatsapp/business-profile/display-name | Request display name change
*WhatsAppApi* | [**updateWhatsAppTemplate**](docs/Api/WhatsAppApi.md#updatewhatsapptemplate) | **PATCH** /v1/whatsapp/templates/{templateName} | Update template
*WhatsAppApi* | [**uploadWhatsAppProfilePhoto**](docs/Api/WhatsAppApi.md#uploadwhatsappprofilephoto) | **POST** /v1/whatsapp/business-profile/photo | Upload profile picture
*WhatsAppPhoneNumbersApi* | [**getWhatsAppPhoneNumber**](docs/Api/WhatsAppPhoneNumbersApi.md#getwhatsappphonenumber) | **GET** /v1/whatsapp/phone-numbers/{phoneNumberId} | Get phone number
*WhatsAppPhoneNumbersApi* | [**getWhatsAppPhoneNumbers**](docs/Api/WhatsAppPhoneNumbersApi.md#getwhatsappphonenumbers) | **GET** /v1/whatsapp/phone-numbers | List phone numbers
*WhatsAppPhoneNumbersApi* | [**purchaseWhatsAppPhoneNumber**](docs/Api/WhatsAppPhoneNumbersApi.md#purchasewhatsappphonenumber) | **POST** /v1/whatsapp/phone-numbers/purchase | Purchase phone number
*WhatsAppPhoneNumbersApi* | [**releaseWhatsAppPhoneNumber**](docs/Api/WhatsAppPhoneNumbersApi.md#releasewhatsappphonenumber) | **DELETE** /v1/whatsapp/phone-numbers/{phoneNumberId} | Release phone number

## Models

- [AccountGetResponse](docs/Model/AccountGetResponse.md)
- [AccountWithFollowerStats](docs/Model/AccountWithFollowerStats.md)
- [AccountWithFollowerStatsAllOfAccountStats](docs/Model/AccountWithFollowerStatsAllOfAccountStats.md)
- [AccountsListResponse](docs/Model/AccountsListResponse.md)
- [AddWhatsAppBroadcastRecipients200Response](docs/Model/AddWhatsAppBroadcastRecipients200Response.md)
- [AddWhatsAppBroadcastRecipientsRequest](docs/Model/AddWhatsAppBroadcastRecipientsRequest.md)
- [AddWhatsAppBroadcastRecipientsRequestRecipientsInner](docs/Model/AddWhatsAppBroadcastRecipientsRequestRecipientsInner.md)
- [AnalyticsListResponse](docs/Model/AnalyticsListResponse.md)
- [AnalyticsListResponsePostsInner](docs/Model/AnalyticsListResponsePostsInner.md)
- [AnalyticsOverview](docs/Model/AnalyticsOverview.md)
- [AnalyticsOverviewDataStaleness](docs/Model/AnalyticsOverviewDataStaleness.md)
- [AnalyticsSinglePostResponse](docs/Model/AnalyticsSinglePostResponse.md)
- [AnalyticsSinglePostResponseMediaItemsInner](docs/Model/AnalyticsSinglePostResponseMediaItemsInner.md)
- [ApiKey](docs/Model/ApiKey.md)
- [ApiKeyProfileIdsInner](docs/Model/ApiKeyProfileIdsInner.md)
- [BlueskyPlatformData](docs/Model/BlueskyPlatformData.md)
- [BookmarkPost200Response](docs/Model/BookmarkPost200Response.md)
- [BookmarkPostRequest](docs/Model/BookmarkPostRequest.md)
- [BulkDeleteWhatsAppContacts200Response](docs/Model/BulkDeleteWhatsAppContacts200Response.md)
- [BulkDeleteWhatsAppContactsRequest](docs/Model/BulkDeleteWhatsAppContactsRequest.md)
- [BulkUpdateWhatsAppContacts200Response](docs/Model/BulkUpdateWhatsAppContacts200Response.md)
- [BulkUpdateWhatsAppContactsRequest](docs/Model/BulkUpdateWhatsAppContactsRequest.md)
- [BulkUploadPosts200Response](docs/Model/BulkUploadPosts200Response.md)
- [BulkUploadPosts200ResponseErrorsInner](docs/Model/BulkUploadPosts200ResponseErrorsInner.md)
- [BulkUploadPosts429Response](docs/Model/BulkUploadPosts429Response.md)
- [CancelWhatsAppBroadcastSchedule200Response](docs/Model/CancelWhatsAppBroadcastSchedule200Response.md)
- [CancelWhatsAppBroadcastSchedule200ResponseBroadcast](docs/Model/CancelWhatsAppBroadcastSchedule200ResponseBroadcast.md)
- [CaptionResponse](docs/Model/CaptionResponse.md)
- [CheckInstagramHashtags200Response](docs/Model/CheckInstagramHashtags200Response.md)
- [CheckInstagramHashtags200ResponseResultsInner](docs/Model/CheckInstagramHashtags200ResponseResultsInner.md)
- [CheckInstagramHashtags200ResponseSummary](docs/Model/CheckInstagramHashtags200ResponseSummary.md)
- [CheckInstagramHashtagsRequest](docs/Model/CheckInstagramHashtagsRequest.md)
- [CompleteTelegramConnect200Response](docs/Model/CompleteTelegramConnect200Response.md)
- [ConnectBlueskyCredentials200Response](docs/Model/ConnectBlueskyCredentials200Response.md)
- [ConnectBlueskyCredentialsRequest](docs/Model/ConnectBlueskyCredentialsRequest.md)
- [ConnectWhatsAppCredentials200Response](docs/Model/ConnectWhatsAppCredentials200Response.md)
- [ConnectWhatsAppCredentials200ResponseAccount](docs/Model/ConnectWhatsAppCredentials200ResponseAccount.md)
- [ConnectWhatsAppCredentialsRequest](docs/Model/ConnectWhatsAppCredentialsRequest.md)
- [Connected](docs/Model/Connected.md)
- [ConnectedAccount](docs/Model/ConnectedAccount.md)
- [ConnectionLog](docs/Model/ConnectionLog.md)
- [ConnectionLogContext](docs/Model/ConnectionLogContext.md)
- [ConnectionLogError](docs/Model/ConnectionLogError.md)
- [ConnectionLogSuccess](docs/Model/ConnectionLogSuccess.md)
- [CreateAccountGroup201Response](docs/Model/CreateAccountGroup201Response.md)
- [CreateAccountGroupRequest](docs/Model/CreateAccountGroupRequest.md)
- [CreateApiKey201Response](docs/Model/CreateApiKey201Response.md)
- [CreateApiKeyRequest](docs/Model/CreateApiKeyRequest.md)
- [CreateGoogleBusinessMedia200Response](docs/Model/CreateGoogleBusinessMedia200Response.md)
- [CreateGoogleBusinessMediaRequest](docs/Model/CreateGoogleBusinessMediaRequest.md)
- [CreateGoogleBusinessPlaceAction200Response](docs/Model/CreateGoogleBusinessPlaceAction200Response.md)
- [CreateGoogleBusinessPlaceActionRequest](docs/Model/CreateGoogleBusinessPlaceActionRequest.md)
- [CreateInviteToken201Response](docs/Model/CreateInviteToken201Response.md)
- [CreateInviteTokenRequest](docs/Model/CreateInviteTokenRequest.md)
- [CreatePost409Response](docs/Model/CreatePost409Response.md)
- [CreatePost409ResponseDetails](docs/Model/CreatePost409ResponseDetails.md)
- [CreatePost429Response](docs/Model/CreatePost429Response.md)
- [CreatePostRequest](docs/Model/CreatePostRequest.md)
- [CreatePostRequestMediaItemsInner](docs/Model/CreatePostRequestMediaItemsInner.md)
- [CreatePostRequestPlatformsInner](docs/Model/CreatePostRequestPlatformsInner.md)
- [CreatePostRequestPlatformsInnerPlatformSpecificData](docs/Model/CreatePostRequestPlatformsInnerPlatformSpecificData.md)
- [CreateProfileRequest](docs/Model/CreateProfileRequest.md)
- [CreateQueueSlot201Response](docs/Model/CreateQueueSlot201Response.md)
- [CreateQueueSlotRequest](docs/Model/CreateQueueSlotRequest.md)
- [CreateWebhookSettingsRequest](docs/Model/CreateWebhookSettingsRequest.md)
- [CreateWhatsAppBroadcast200Response](docs/Model/CreateWhatsAppBroadcast200Response.md)
- [CreateWhatsAppBroadcast200ResponseBroadcast](docs/Model/CreateWhatsAppBroadcast200ResponseBroadcast.md)
- [CreateWhatsAppBroadcastRequest](docs/Model/CreateWhatsAppBroadcastRequest.md)
- [CreateWhatsAppBroadcastRequestRecipientsInner](docs/Model/CreateWhatsAppBroadcastRequestRecipientsInner.md)
- [CreateWhatsAppContact200Response](docs/Model/CreateWhatsAppContact200Response.md)
- [CreateWhatsAppContact200ResponseContact](docs/Model/CreateWhatsAppContact200ResponseContact.md)
- [CreateWhatsAppContactRequest](docs/Model/CreateWhatsAppContactRequest.md)
- [CreateWhatsAppTemplate200Response](docs/Model/CreateWhatsAppTemplate200Response.md)
- [CreateWhatsAppTemplate200ResponseTemplate](docs/Model/CreateWhatsAppTemplate200ResponseTemplate.md)
- [CreateWhatsAppTemplateRequest](docs/Model/CreateWhatsAppTemplateRequest.md)
- [CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInner](docs/Model/CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInner.md)
- [CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInnerUrl](docs/Model/CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInnerUrl.md)
- [DeleteAccountGroup200Response](docs/Model/DeleteAccountGroup200Response.md)
- [DeleteGoogleBusinessMedia200Response](docs/Model/DeleteGoogleBusinessMedia200Response.md)
- [DeleteGoogleBusinessPlaceAction200Response](docs/Model/DeleteGoogleBusinessPlaceAction200Response.md)
- [DeleteInboxComment200Response](docs/Model/DeleteInboxComment200Response.md)
- [DeleteInboxReviewReply200Response](docs/Model/DeleteInboxReviewReply200Response.md)
- [DeleteInboxReviewReplyRequest](docs/Model/DeleteInboxReviewReplyRequest.md)
- [DeleteQueueSlot200Response](docs/Model/DeleteQueueSlot200Response.md)
- [DeleteWhatsAppGroupRequest](docs/Model/DeleteWhatsAppGroupRequest.md)
- [DownloadBlueskyMedia200Response](docs/Model/DownloadBlueskyMedia200Response.md)
- [DownloadFacebookVideo200Response](docs/Model/DownloadFacebookVideo200Response.md)
- [DownloadFormat](docs/Model/DownloadFormat.md)
- [DownloadInstagramMedia200Response](docs/Model/DownloadInstagramMedia200Response.md)
- [DownloadResponse](docs/Model/DownloadResponse.md)
- [DownloadTikTokVideo200Response](docs/Model/DownloadTikTokVideo200Response.md)
- [DownloadTikTokVideo200ResponseFormatsInner](docs/Model/DownloadTikTokVideo200ResponseFormatsInner.md)
- [DownloadYouTubeVideo200Response](docs/Model/DownloadYouTubeVideo200Response.md)
- [DownloadYouTubeVideo200ResponseFormatsInner](docs/Model/DownloadYouTubeVideo200ResponseFormatsInner.md)
- [EditInboxMessage200Response](docs/Model/EditInboxMessage200Response.md)
- [EditInboxMessage200ResponseData](docs/Model/EditInboxMessage200ResponseData.md)
- [EditInboxMessageRequest](docs/Model/EditInboxMessageRequest.md)
- [EditInboxMessageRequestReplyMarkup](docs/Model/EditInboxMessageRequestReplyMarkup.md)
- [EditInboxMessageRequestReplyMarkupKeyboardInnerInner](docs/Model/EditInboxMessageRequestReplyMarkupKeyboardInnerInner.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Expired](docs/Model/Expired.md)
- [FacebookPlatformData](docs/Model/FacebookPlatformData.md)
- [FollowUser200Response](docs/Model/FollowUser200Response.md)
- [FollowUserRequest](docs/Model/FollowUserRequest.md)
- [FollowerStatsResponse](docs/Model/FollowerStatsResponse.md)
- [FoodMenu](docs/Model/FoodMenu.md)
- [FoodMenuItem](docs/Model/FoodMenuItem.md)
- [FoodMenuItemAttributes](docs/Model/FoodMenuItemAttributes.md)
- [FoodMenuItemOptionsInner](docs/Model/FoodMenuItemOptionsInner.md)
- [FoodMenuLabel](docs/Model/FoodMenuLabel.md)
- [FoodMenuSection](docs/Model/FoodMenuSection.md)
- [GetAccountHealth200Response](docs/Model/GetAccountHealth200Response.md)
- [GetAccountHealth200ResponsePermissions](docs/Model/GetAccountHealth200ResponsePermissions.md)
- [GetAccountHealth200ResponsePermissionsPostingInner](docs/Model/GetAccountHealth200ResponsePermissionsPostingInner.md)
- [GetAccountHealth200ResponseTokenStatus](docs/Model/GetAccountHealth200ResponseTokenStatus.md)
- [GetAllAccountsHealth200Response](docs/Model/GetAllAccountsHealth200Response.md)
- [GetAllAccountsHealth200ResponseAccountsInner](docs/Model/GetAllAccountsHealth200ResponseAccountsInner.md)
- [GetAllAccountsHealth200ResponseSummary](docs/Model/GetAllAccountsHealth200ResponseSummary.md)
- [GetAnalytics200Response](docs/Model/GetAnalytics200Response.md)
- [GetAnalytics400Response](docs/Model/GetAnalytics400Response.md)
- [GetAnalytics402Response](docs/Model/GetAnalytics402Response.md)
- [GetBestTimeToPost200Response](docs/Model/GetBestTimeToPost200Response.md)
- [GetBestTimeToPost200ResponseSlotsInner](docs/Model/GetBestTimeToPost200ResponseSlotsInner.md)
- [GetBestTimeToPost403Response](docs/Model/GetBestTimeToPost403Response.md)
- [GetConnectUrl200Response](docs/Model/GetConnectUrl200Response.md)
- [GetContentDecay200Response](docs/Model/GetContentDecay200Response.md)
- [GetContentDecay200ResponseBucketsInner](docs/Model/GetContentDecay200ResponseBucketsInner.md)
- [GetDailyMetrics200Response](docs/Model/GetDailyMetrics200Response.md)
- [GetDailyMetrics200ResponseDailyDataInner](docs/Model/GetDailyMetrics200ResponseDailyDataInner.md)
- [GetDailyMetrics200ResponseDailyDataInnerMetrics](docs/Model/GetDailyMetrics200ResponseDailyDataInnerMetrics.md)
- [GetDailyMetrics200ResponsePlatformBreakdownInner](docs/Model/GetDailyMetrics200ResponsePlatformBreakdownInner.md)
- [GetFacebookPages200Response](docs/Model/GetFacebookPages200Response.md)
- [GetFacebookPages200ResponsePagesInner](docs/Model/GetFacebookPages200ResponsePagesInner.md)
- [GetFollowerStats200Response](docs/Model/GetFollowerStats200Response.md)
- [GetFollowerStats200ResponseDateRange](docs/Model/GetFollowerStats200ResponseDateRange.md)
- [GetFollowerStats200ResponseStatsValueInner](docs/Model/GetFollowerStats200ResponseStatsValueInner.md)
- [GetFollowerStats403Response](docs/Model/GetFollowerStats403Response.md)
- [GetGmbLocations200Response](docs/Model/GetGmbLocations200Response.md)
- [GetGmbLocations200ResponseLocationsInner](docs/Model/GetGmbLocations200ResponseLocationsInner.md)
- [GetGoogleBusinessAttributes200Response](docs/Model/GetGoogleBusinessAttributes200Response.md)
- [GetGoogleBusinessAttributes200ResponseAttributesInner](docs/Model/GetGoogleBusinessAttributes200ResponseAttributesInner.md)
- [GetGoogleBusinessAttributes200ResponseAttributesInnerRepeatedEnumValue](docs/Model/GetGoogleBusinessAttributes200ResponseAttributesInnerRepeatedEnumValue.md)
- [GetGoogleBusinessFoodMenus200Response](docs/Model/GetGoogleBusinessFoodMenus200Response.md)
- [GetGoogleBusinessLocationDetails200Response](docs/Model/GetGoogleBusinessLocationDetails200Response.md)
- [GetGoogleBusinessLocationDetails200ResponseCategories](docs/Model/GetGoogleBusinessLocationDetails200ResponseCategories.md)
- [GetGoogleBusinessLocationDetails200ResponseCategoriesAdditionalCategoriesInner](docs/Model/GetGoogleBusinessLocationDetails200ResponseCategoriesAdditionalCategoriesInner.md)
- [GetGoogleBusinessLocationDetails200ResponseCategoriesPrimaryCategory](docs/Model/GetGoogleBusinessLocationDetails200ResponseCategoriesPrimaryCategory.md)
- [GetGoogleBusinessLocationDetails200ResponsePhoneNumbers](docs/Model/GetGoogleBusinessLocationDetails200ResponsePhoneNumbers.md)
- [GetGoogleBusinessLocationDetails200ResponseProfile](docs/Model/GetGoogleBusinessLocationDetails200ResponseProfile.md)
- [GetGoogleBusinessLocationDetails200ResponseRegularHours](docs/Model/GetGoogleBusinessLocationDetails200ResponseRegularHours.md)
- [GetGoogleBusinessLocationDetails200ResponseRegularHoursPeriodsInner](docs/Model/GetGoogleBusinessLocationDetails200ResponseRegularHoursPeriodsInner.md)
- [GetGoogleBusinessLocationDetails200ResponseServiceItemsInner](docs/Model/GetGoogleBusinessLocationDetails200ResponseServiceItemsInner.md)
- [GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerFreeFormServiceItem](docs/Model/GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerFreeFormServiceItem.md)
- [GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerFreeFormServiceItemLabel](docs/Model/GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerFreeFormServiceItemLabel.md)
- [GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerPrice](docs/Model/GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerPrice.md)
- [GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerStructuredServiceItem](docs/Model/GetGoogleBusinessLocationDetails200ResponseServiceItemsInnerStructuredServiceItem.md)
- [GetGoogleBusinessLocationDetails200ResponseSpecialHours](docs/Model/GetGoogleBusinessLocationDetails200ResponseSpecialHours.md)
- [GetGoogleBusinessLocationDetails200ResponseSpecialHoursSpecialHourPeriodsInner](docs/Model/GetGoogleBusinessLocationDetails200ResponseSpecialHoursSpecialHourPeriodsInner.md)
- [GetGoogleBusinessLocationDetails200ResponseSpecialHoursSpecialHourPeriodsInnerStartDate](docs/Model/GetGoogleBusinessLocationDetails200ResponseSpecialHoursSpecialHourPeriodsInnerStartDate.md)
- [GetGoogleBusinessReviews200Response](docs/Model/GetGoogleBusinessReviews200Response.md)
- [GetGoogleBusinessReviews200ResponseReviewsInner](docs/Model/GetGoogleBusinessReviews200ResponseReviewsInner.md)
- [GetGoogleBusinessReviews200ResponseReviewsInnerReviewReply](docs/Model/GetGoogleBusinessReviews200ResponseReviewsInnerReviewReply.md)
- [GetGoogleBusinessReviews200ResponseReviewsInnerReviewer](docs/Model/GetGoogleBusinessReviews200ResponseReviewsInnerReviewer.md)
- [GetInboxConversation200Response](docs/Model/GetInboxConversation200Response.md)
- [GetInboxConversation200ResponseData](docs/Model/GetInboxConversation200ResponseData.md)
- [GetInboxConversationMessages200Response](docs/Model/GetInboxConversationMessages200Response.md)
- [GetInboxConversationMessages200ResponseMessagesInner](docs/Model/GetInboxConversationMessages200ResponseMessagesInner.md)
- [GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner](docs/Model/GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner.md)
- [GetInboxPostComments200Response](docs/Model/GetInboxPostComments200Response.md)
- [GetInboxPostComments200ResponseCommentsInner](docs/Model/GetInboxPostComments200ResponseCommentsInner.md)
- [GetInboxPostComments200ResponseCommentsInnerFrom](docs/Model/GetInboxPostComments200ResponseCommentsInnerFrom.md)
- [GetInboxPostComments200ResponseMeta](docs/Model/GetInboxPostComments200ResponseMeta.md)
- [GetInboxPostComments200ResponsePagination](docs/Model/GetInboxPostComments200ResponsePagination.md)
- [GetLinkedInAggregateAnalytics200Response](docs/Model/GetLinkedInAggregateAnalytics200Response.md)
- [GetLinkedInAggregateAnalytics400Response](docs/Model/GetLinkedInAggregateAnalytics400Response.md)
- [GetLinkedInAggregateAnalytics402Response](docs/Model/GetLinkedInAggregateAnalytics402Response.md)
- [GetLinkedInAggregateAnalytics403Response](docs/Model/GetLinkedInAggregateAnalytics403Response.md)
- [GetLinkedInMentions200Response](docs/Model/GetLinkedInMentions200Response.md)
- [GetLinkedInOrganizations200Response](docs/Model/GetLinkedInOrganizations200Response.md)
- [GetLinkedInOrganizations200ResponseOrganizationsInner](docs/Model/GetLinkedInOrganizations200ResponseOrganizationsInner.md)
- [GetLinkedInPostAnalytics200Response](docs/Model/GetLinkedInPostAnalytics200Response.md)
- [GetLinkedInPostAnalytics200ResponseAnalytics](docs/Model/GetLinkedInPostAnalytics200ResponseAnalytics.md)
- [GetLinkedInPostAnalytics400Response](docs/Model/GetLinkedInPostAnalytics400Response.md)
- [GetLinkedInPostAnalytics403Response](docs/Model/GetLinkedInPostAnalytics403Response.md)
- [GetLinkedInPostReactions200Response](docs/Model/GetLinkedInPostReactions200Response.md)
- [GetLinkedInPostReactions200ResponsePagination](docs/Model/GetLinkedInPostReactions200ResponsePagination.md)
- [GetLinkedInPostReactions200ResponseReactionsInner](docs/Model/GetLinkedInPostReactions200ResponseReactionsInner.md)
- [GetLinkedInPostReactions200ResponseReactionsInnerFrom](docs/Model/GetLinkedInPostReactions200ResponseReactionsInnerFrom.md)
- [GetLinkedInPostReactions400Response](docs/Model/GetLinkedInPostReactions400Response.md)
- [GetMediaPresignedUrl200Response](docs/Model/GetMediaPresignedUrl200Response.md)
- [GetMediaPresignedUrlRequest](docs/Model/GetMediaPresignedUrlRequest.md)
- [GetMessengerMenu200Response](docs/Model/GetMessengerMenu200Response.md)
- [GetNextQueueSlot200Response](docs/Model/GetNextQueueSlot200Response.md)
- [GetPendingOAuthData200Response](docs/Model/GetPendingOAuthData200Response.md)
- [GetPendingOAuthData200ResponseOrganizationsInner](docs/Model/GetPendingOAuthData200ResponseOrganizationsInner.md)
- [GetPinterestBoards200Response](docs/Model/GetPinterestBoards200Response.md)
- [GetPinterestBoards200ResponseBoardsInner](docs/Model/GetPinterestBoards200ResponseBoardsInner.md)
- [GetPostLogs200Response](docs/Model/GetPostLogs200Response.md)
- [GetPostTimeline200Response](docs/Model/GetPostTimeline200Response.md)
- [GetPostTimeline200ResponseTimelineInner](docs/Model/GetPostTimeline200ResponseTimelineInner.md)
- [GetPostTimeline400Response](docs/Model/GetPostTimeline400Response.md)
- [GetPostTimeline403Response](docs/Model/GetPostTimeline403Response.md)
- [GetPostTimeline404Response](docs/Model/GetPostTimeline404Response.md)
- [GetPostingFrequency200Response](docs/Model/GetPostingFrequency200Response.md)
- [GetPostingFrequency200ResponseFrequencyInner](docs/Model/GetPostingFrequency200ResponseFrequencyInner.md)
- [GetProfile200Response](docs/Model/GetProfile200Response.md)
- [GetRedditFeed200Response](docs/Model/GetRedditFeed200Response.md)
- [GetRedditFlairs200Response](docs/Model/GetRedditFlairs200Response.md)
- [GetRedditFlairs200ResponseFlairsInner](docs/Model/GetRedditFlairs200ResponseFlairsInner.md)
- [GetRedditSubreddits200Response](docs/Model/GetRedditSubreddits200Response.md)
- [GetRedditSubreddits200ResponseSubredditsInner](docs/Model/GetRedditSubreddits200ResponseSubredditsInner.md)
- [GetTelegramCommands200Response](docs/Model/GetTelegramCommands200Response.md)
- [GetTelegramCommands200ResponseDataInner](docs/Model/GetTelegramCommands200ResponseDataInner.md)
- [GetTelegramConnectStatus200Response](docs/Model/GetTelegramConnectStatus200Response.md)
- [GetUser200Response](docs/Model/GetUser200Response.md)
- [GetUser200ResponseUser](docs/Model/GetUser200ResponseUser.md)
- [GetWebhookLogs200Response](docs/Model/GetWebhookLogs200Response.md)
- [GetWebhookSettings200Response](docs/Model/GetWebhookSettings200Response.md)
- [GetWhatsAppBroadcast200Response](docs/Model/GetWhatsAppBroadcast200Response.md)
- [GetWhatsAppBroadcast200ResponseBroadcast](docs/Model/GetWhatsAppBroadcast200ResponseBroadcast.md)
- [GetWhatsAppBroadcastRecipients200Response](docs/Model/GetWhatsAppBroadcastRecipients200Response.md)
- [GetWhatsAppBroadcastRecipients200ResponseRecipientsInner](docs/Model/GetWhatsAppBroadcastRecipients200ResponseRecipientsInner.md)
- [GetWhatsAppBroadcastRecipients200ResponseSummary](docs/Model/GetWhatsAppBroadcastRecipients200ResponseSummary.md)
- [GetWhatsAppBroadcasts200Response](docs/Model/GetWhatsAppBroadcasts200Response.md)
- [GetWhatsAppBroadcasts200ResponseBroadcastsInner](docs/Model/GetWhatsAppBroadcasts200ResponseBroadcastsInner.md)
- [GetWhatsAppBroadcasts200ResponseBroadcastsInnerTemplate](docs/Model/GetWhatsAppBroadcasts200ResponseBroadcastsInnerTemplate.md)
- [GetWhatsAppBusinessProfile200Response](docs/Model/GetWhatsAppBusinessProfile200Response.md)
- [GetWhatsAppBusinessProfile200ResponseBusinessProfile](docs/Model/GetWhatsAppBusinessProfile200ResponseBusinessProfile.md)
- [GetWhatsAppContact200Response](docs/Model/GetWhatsAppContact200Response.md)
- [GetWhatsAppContact200ResponseContact](docs/Model/GetWhatsAppContact200ResponseContact.md)
- [GetWhatsAppContacts200Response](docs/Model/GetWhatsAppContacts200Response.md)
- [GetWhatsAppContacts200ResponseContactsInner](docs/Model/GetWhatsAppContacts200ResponseContactsInner.md)
- [GetWhatsAppContacts200ResponseFilters](docs/Model/GetWhatsAppContacts200ResponseFilters.md)
- [GetWhatsAppContacts200ResponsePagination](docs/Model/GetWhatsAppContacts200ResponsePagination.md)
- [GetWhatsAppDisplayName200Response](docs/Model/GetWhatsAppDisplayName200Response.md)
- [GetWhatsAppDisplayName200ResponseDisplayName](docs/Model/GetWhatsAppDisplayName200ResponseDisplayName.md)
- [GetWhatsAppGroups200Response](docs/Model/GetWhatsAppGroups200Response.md)
- [GetWhatsAppGroups200ResponseGroupsInner](docs/Model/GetWhatsAppGroups200ResponseGroupsInner.md)
- [GetWhatsAppGroups200ResponseSummary](docs/Model/GetWhatsAppGroups200ResponseSummary.md)
- [GetWhatsAppPhoneNumber200Response](docs/Model/GetWhatsAppPhoneNumber200Response.md)
- [GetWhatsAppPhoneNumber200ResponsePhoneNumber](docs/Model/GetWhatsAppPhoneNumber200ResponsePhoneNumber.md)
- [GetWhatsAppPhoneNumbers200Response](docs/Model/GetWhatsAppPhoneNumbers200Response.md)
- [GetWhatsAppPhoneNumbers200ResponseNumbersInner](docs/Model/GetWhatsAppPhoneNumbers200ResponseNumbersInner.md)
- [GetWhatsAppTemplate200Response](docs/Model/GetWhatsAppTemplate200Response.md)
- [GetWhatsAppTemplate200ResponseTemplate](docs/Model/GetWhatsAppTemplate200ResponseTemplate.md)
- [GetWhatsAppTemplates200Response](docs/Model/GetWhatsAppTemplates200Response.md)
- [GetWhatsAppTemplates200ResponseTemplatesInner](docs/Model/GetWhatsAppTemplates200ResponseTemplatesInner.md)
- [GetYouTubeDailyViews400Response](docs/Model/GetYouTubeDailyViews400Response.md)
- [GetYouTubeDailyViews403Response](docs/Model/GetYouTubeDailyViews403Response.md)
- [GetYouTubeDailyViews500Response](docs/Model/GetYouTubeDailyViews500Response.md)
- [GetYouTubeTranscript200Response](docs/Model/GetYouTubeTranscript200Response.md)
- [GetYouTubeTranscript200ResponseSegmentsInner](docs/Model/GetYouTubeTranscript200ResponseSegmentsInner.md)
- [GoogleBusinessPlatformData](docs/Model/GoogleBusinessPlatformData.md)
- [GoogleBusinessPlatformDataCallToAction](docs/Model/GoogleBusinessPlatformDataCallToAction.md)
- [HandleOAuthCallbackRequest](docs/Model/HandleOAuthCallbackRequest.md)
- [HashtagCheckResponse](docs/Model/HashtagCheckResponse.md)
- [HashtagInfo](docs/Model/HashtagInfo.md)
- [HideInboxComment200Response](docs/Model/HideInboxComment200Response.md)
- [HideInboxCommentRequest](docs/Model/HideInboxCommentRequest.md)
- [ImportWhatsAppContacts200Response](docs/Model/ImportWhatsAppContacts200Response.md)
- [ImportWhatsAppContacts200ResponseResultsInner](docs/Model/ImportWhatsAppContacts200ResponseResultsInner.md)
- [ImportWhatsAppContacts200ResponseSummary](docs/Model/ImportWhatsAppContacts200ResponseSummary.md)
- [ImportWhatsAppContactsRequest](docs/Model/ImportWhatsAppContactsRequest.md)
- [ImportWhatsAppContactsRequestContactsInner](docs/Model/ImportWhatsAppContactsRequestContactsInner.md)
- [InitiateTelegramConnect200Response](docs/Model/InitiateTelegramConnect200Response.md)
- [InitiateTelegramConnect200ResponseAccount](docs/Model/InitiateTelegramConnect200ResponseAccount.md)
- [InitiateTelegramConnectRequest](docs/Model/InitiateTelegramConnectRequest.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InstagramPlatformData](docs/Model/InstagramPlatformData.md)
- [InstagramPlatformDataTrialParams](docs/Model/InstagramPlatformDataTrialParams.md)
- [InstagramPlatformDataUserTagsInner](docs/Model/InstagramPlatformDataUserTagsInner.md)
- [LikeInboxComment200Response](docs/Model/LikeInboxComment200Response.md)
- [LikeInboxCommentRequest](docs/Model/LikeInboxCommentRequest.md)
- [LinkedInAggregateAnalyticsDailyResponse](docs/Model/LinkedInAggregateAnalyticsDailyResponse.md)
- [LinkedInAggregateAnalyticsDailyResponseAnalytics](docs/Model/LinkedInAggregateAnalyticsDailyResponseAnalytics.md)
- [LinkedInAggregateAnalyticsDailyResponseAnalyticsImpressionsInner](docs/Model/LinkedInAggregateAnalyticsDailyResponseAnalyticsImpressionsInner.md)
- [LinkedInAggregateAnalyticsTotalResponse](docs/Model/LinkedInAggregateAnalyticsTotalResponse.md)
- [LinkedInAggregateAnalyticsTotalResponseAnalytics](docs/Model/LinkedInAggregateAnalyticsTotalResponseAnalytics.md)
- [LinkedInAggregateAnalyticsTotalResponseDateRange](docs/Model/LinkedInAggregateAnalyticsTotalResponseDateRange.md)
- [LinkedInPlatformData](docs/Model/LinkedInPlatformData.md)
- [ListAccountGroups200Response](docs/Model/ListAccountGroups200Response.md)
- [ListAccountGroups200ResponseGroupsInner](docs/Model/ListAccountGroups200ResponseGroupsInner.md)
- [ListAccounts200Response](docs/Model/ListAccounts200Response.md)
- [ListApiKeys200Response](docs/Model/ListApiKeys200Response.md)
- [ListConnectionLogs200Response](docs/Model/ListConnectionLogs200Response.md)
- [ListFacebookPages200Response](docs/Model/ListFacebookPages200Response.md)
- [ListFacebookPages200ResponsePagesInner](docs/Model/ListFacebookPages200ResponsePagesInner.md)
- [ListGoogleBusinessLocations200Response](docs/Model/ListGoogleBusinessLocations200Response.md)
- [ListGoogleBusinessLocations200ResponseLocationsInner](docs/Model/ListGoogleBusinessLocations200ResponseLocationsInner.md)
- [ListGoogleBusinessMedia200Response](docs/Model/ListGoogleBusinessMedia200Response.md)
- [ListGoogleBusinessMedia200ResponseMediaItemsInner](docs/Model/ListGoogleBusinessMedia200ResponseMediaItemsInner.md)
- [ListGoogleBusinessMedia200ResponseMediaItemsInnerLocationAssociation](docs/Model/ListGoogleBusinessMedia200ResponseMediaItemsInnerLocationAssociation.md)
- [ListGoogleBusinessPlaceActions200Response](docs/Model/ListGoogleBusinessPlaceActions200Response.md)
- [ListGoogleBusinessPlaceActions200ResponsePlaceActionLinksInner](docs/Model/ListGoogleBusinessPlaceActions200ResponsePlaceActionLinksInner.md)
- [ListInboxComments200Response](docs/Model/ListInboxComments200Response.md)
- [ListInboxComments200ResponseDataInner](docs/Model/ListInboxComments200ResponseDataInner.md)
- [ListInboxConversations200Response](docs/Model/ListInboxConversations200Response.md)
- [ListInboxConversations200ResponseDataInner](docs/Model/ListInboxConversations200ResponseDataInner.md)
- [ListInboxConversations200ResponseDataInnerInstagramProfile](docs/Model/ListInboxConversations200ResponseDataInnerInstagramProfile.md)
- [ListInboxConversations200ResponseMeta](docs/Model/ListInboxConversations200ResponseMeta.md)
- [ListInboxConversations200ResponseMetaFailedAccountsInner](docs/Model/ListInboxConversations200ResponseMetaFailedAccountsInner.md)
- [ListInboxConversations200ResponsePagination](docs/Model/ListInboxConversations200ResponsePagination.md)
- [ListInboxReviews200Response](docs/Model/ListInboxReviews200Response.md)
- [ListInboxReviews200ResponseDataInner](docs/Model/ListInboxReviews200ResponseDataInner.md)
- [ListInboxReviews200ResponseDataInnerReply](docs/Model/ListInboxReviews200ResponseDataInnerReply.md)
- [ListInboxReviews200ResponseDataInnerReviewer](docs/Model/ListInboxReviews200ResponseDataInnerReviewer.md)
- [ListInboxReviews200ResponseSummary](docs/Model/ListInboxReviews200ResponseSummary.md)
- [ListLinkedInOrganizations200Response](docs/Model/ListLinkedInOrganizations200Response.md)
- [ListLinkedInOrganizations200ResponseOrganizationsInner](docs/Model/ListLinkedInOrganizations200ResponseOrganizationsInner.md)
- [ListPinterestBoardsForSelection200Response](docs/Model/ListPinterestBoardsForSelection200Response.md)
- [ListPinterestBoardsForSelection200ResponseBoardsInner](docs/Model/ListPinterestBoardsForSelection200ResponseBoardsInner.md)
- [ListPostsLogs200Response](docs/Model/ListPostsLogs200Response.md)
- [ListPostsLogs200ResponsePagination](docs/Model/ListPostsLogs200ResponsePagination.md)
- [ListQueueSlots200Response](docs/Model/ListQueueSlots200Response.md)
- [ListQueueSlots200ResponseOneOf](docs/Model/ListQueueSlots200ResponseOneOf.md)
- [ListQueueSlots200ResponseOneOf1](docs/Model/ListQueueSlots200ResponseOneOf1.md)
- [ListSnapchatProfiles200Response](docs/Model/ListSnapchatProfiles200Response.md)
- [ListSnapchatProfiles200ResponsePublicProfilesInner](docs/Model/ListSnapchatProfiles200ResponsePublicProfilesInner.md)
- [ListUsers200Response](docs/Model/ListUsers200Response.md)
- [ListUsers200ResponseUsersInner](docs/Model/ListUsers200ResponseUsersInner.md)
- [MediaItem](docs/Model/MediaItem.md)
- [MediaUploadResponse](docs/Model/MediaUploadResponse.md)
- [Money](docs/Model/Money.md)
- [Pagination](docs/Model/Pagination.md)
- [Pending](docs/Model/Pending.md)
- [PinterestPlatformData](docs/Model/PinterestPlatformData.md)
- [PlatformAnalytics](docs/Model/PlatformAnalytics.md)
- [PlatformTarget](docs/Model/PlatformTarget.md)
- [PlatformTargetAccountId](docs/Model/PlatformTargetAccountId.md)
- [PlatformTargetPlatformSpecificData](docs/Model/PlatformTargetPlatformSpecificData.md)
- [Post](docs/Model/Post.md)
- [PostAnalytics](docs/Model/PostAnalytics.md)
- [PostCreateResponse](docs/Model/PostCreateResponse.md)
- [PostDeleteResponse](docs/Model/PostDeleteResponse.md)
- [PostGetResponse](docs/Model/PostGetResponse.md)
- [PostLog](docs/Model/PostLog.md)
- [PostLogPostId](docs/Model/PostLogPostId.md)
- [PostLogPostIdOneOf](docs/Model/PostLogPostIdOneOf.md)
- [PostLogRequest](docs/Model/PostLogRequest.md)
- [PostLogResponse](docs/Model/PostLogResponse.md)
- [PostRetryResponse](docs/Model/PostRetryResponse.md)
- [PostUpdateResponse](docs/Model/PostUpdateResponse.md)
- [PostUserId](docs/Model/PostUserId.md)
- [PostsListResponse](docs/Model/PostsListResponse.md)
- [PreviewQueue200Response](docs/Model/PreviewQueue200Response.md)
- [Profile](docs/Model/Profile.md)
- [ProfileCreateResponse](docs/Model/ProfileCreateResponse.md)
- [ProfileDeleteResponse](docs/Model/ProfileDeleteResponse.md)
- [ProfileGetResponse](docs/Model/ProfileGetResponse.md)
- [ProfileUpdateResponse](docs/Model/ProfileUpdateResponse.md)
- [ProfilesListResponse](docs/Model/ProfilesListResponse.md)
- [PurchaseWhatsAppPhoneNumber200Response](docs/Model/PurchaseWhatsAppPhoneNumber200Response.md)
- [PurchaseWhatsAppPhoneNumber200ResponseOneOf](docs/Model/PurchaseWhatsAppPhoneNumber200ResponseOneOf.md)
- [PurchaseWhatsAppPhoneNumber200ResponseOneOf1](docs/Model/PurchaseWhatsAppPhoneNumber200ResponseOneOf1.md)
- [PurchaseWhatsAppPhoneNumber200ResponseOneOf1PhoneNumber](docs/Model/PurchaseWhatsAppPhoneNumber200ResponseOneOf1PhoneNumber.md)
- [PurchaseWhatsAppPhoneNumberRequest](docs/Model/PurchaseWhatsAppPhoneNumberRequest.md)
- [QueueDeleteResponse](docs/Model/QueueDeleteResponse.md)
- [QueueNextSlotResponse](docs/Model/QueueNextSlotResponse.md)
- [QueuePreviewResponse](docs/Model/QueuePreviewResponse.md)
- [QueueSchedule](docs/Model/QueueSchedule.md)
- [QueueSlot](docs/Model/QueueSlot.md)
- [QueueSlotsResponse](docs/Model/QueueSlotsResponse.md)
- [QueueUpdateResponse](docs/Model/QueueUpdateResponse.md)
- [RecyclingConfig](docs/Model/RecyclingConfig.md)
- [RecyclingState](docs/Model/RecyclingState.md)
- [RedditPlatformData](docs/Model/RedditPlatformData.md)
- [ReleaseWhatsAppPhoneNumber200Response](docs/Model/ReleaseWhatsAppPhoneNumber200Response.md)
- [ReleaseWhatsAppPhoneNumber200ResponsePhoneNumber](docs/Model/ReleaseWhatsAppPhoneNumber200ResponsePhoneNumber.md)
- [RemoveBookmark200Response](docs/Model/RemoveBookmark200Response.md)
- [RemoveWhatsAppBroadcastRecipients200Response](docs/Model/RemoveWhatsAppBroadcastRecipients200Response.md)
- [RemoveWhatsAppBroadcastRecipientsRequest](docs/Model/RemoveWhatsAppBroadcastRecipientsRequest.md)
- [RenameWhatsAppGroup200Response](docs/Model/RenameWhatsAppGroup200Response.md)
- [RenameWhatsAppGroupRequest](docs/Model/RenameWhatsAppGroupRequest.md)
- [ReplyToInboxPost200Response](docs/Model/ReplyToInboxPost200Response.md)
- [ReplyToInboxPost200ResponseData](docs/Model/ReplyToInboxPost200ResponseData.md)
- [ReplyToInboxPostRequest](docs/Model/ReplyToInboxPostRequest.md)
- [ReplyToInboxReview200Response](docs/Model/ReplyToInboxReview200Response.md)
- [ReplyToInboxReview200ResponseReply](docs/Model/ReplyToInboxReview200ResponseReply.md)
- [ReplyToInboxReviewRequest](docs/Model/ReplyToInboxReviewRequest.md)
- [RetweetPost200Response](docs/Model/RetweetPost200Response.md)
- [RetweetPostRequest](docs/Model/RetweetPostRequest.md)
- [ScheduleWhatsAppBroadcast200Response](docs/Model/ScheduleWhatsAppBroadcast200Response.md)
- [ScheduleWhatsAppBroadcast200ResponseBroadcast](docs/Model/ScheduleWhatsAppBroadcast200ResponseBroadcast.md)
- [ScheduleWhatsAppBroadcastRequest](docs/Model/ScheduleWhatsAppBroadcastRequest.md)
- [SearchReddit200Response](docs/Model/SearchReddit200Response.md)
- [SearchReddit200ResponsePostsInner](docs/Model/SearchReddit200ResponsePostsInner.md)
- [SelectFacebookPage200Response](docs/Model/SelectFacebookPage200Response.md)
- [SelectFacebookPage200ResponseAccount](docs/Model/SelectFacebookPage200ResponseAccount.md)
- [SelectFacebookPageRequest](docs/Model/SelectFacebookPageRequest.md)
- [SelectFacebookPageRequestUserProfile](docs/Model/SelectFacebookPageRequestUserProfile.md)
- [SelectGoogleBusinessLocation200Response](docs/Model/SelectGoogleBusinessLocation200Response.md)
- [SelectGoogleBusinessLocation200ResponseAccount](docs/Model/SelectGoogleBusinessLocation200ResponseAccount.md)
- [SelectGoogleBusinessLocationRequest](docs/Model/SelectGoogleBusinessLocationRequest.md)
- [SelectGoogleBusinessLocationRequestUserProfile](docs/Model/SelectGoogleBusinessLocationRequestUserProfile.md)
- [SelectLinkedInOrganization200Response](docs/Model/SelectLinkedInOrganization200Response.md)
- [SelectLinkedInOrganization200ResponseAccount](docs/Model/SelectLinkedInOrganization200ResponseAccount.md)
- [SelectLinkedInOrganization200ResponseBulkRefresh](docs/Model/SelectLinkedInOrganization200ResponseBulkRefresh.md)
- [SelectLinkedInOrganizationRequest](docs/Model/SelectLinkedInOrganizationRequest.md)
- [SelectPinterestBoard200Response](docs/Model/SelectPinterestBoard200Response.md)
- [SelectPinterestBoard200ResponseAccount](docs/Model/SelectPinterestBoard200ResponseAccount.md)
- [SelectPinterestBoardRequest](docs/Model/SelectPinterestBoardRequest.md)
- [SelectSnapchatProfile200Response](docs/Model/SelectSnapchatProfile200Response.md)
- [SelectSnapchatProfile200ResponseAccount](docs/Model/SelectSnapchatProfile200ResponseAccount.md)
- [SelectSnapchatProfileRequest](docs/Model/SelectSnapchatProfileRequest.md)
- [SelectSnapchatProfileRequestSelectedPublicProfile](docs/Model/SelectSnapchatProfileRequestSelectedPublicProfile.md)
- [SendInboxMessage200Response](docs/Model/SendInboxMessage200Response.md)
- [SendInboxMessage200ResponseData](docs/Model/SendInboxMessage200ResponseData.md)
- [SendInboxMessage400Response](docs/Model/SendInboxMessage400Response.md)
- [SendInboxMessageRequest](docs/Model/SendInboxMessageRequest.md)
- [SendInboxMessageRequestButtonsInner](docs/Model/SendInboxMessageRequestButtonsInner.md)
- [SendInboxMessageRequestQuickRepliesInner](docs/Model/SendInboxMessageRequestQuickRepliesInner.md)
- [SendInboxMessageRequestReplyMarkup](docs/Model/SendInboxMessageRequestReplyMarkup.md)
- [SendInboxMessageRequestReplyMarkupKeyboardInnerInner](docs/Model/SendInboxMessageRequestReplyMarkupKeyboardInnerInner.md)
- [SendInboxMessageRequestTemplate](docs/Model/SendInboxMessageRequestTemplate.md)
- [SendInboxMessageRequestTemplateElementsInner](docs/Model/SendInboxMessageRequestTemplateElementsInner.md)
- [SendInboxMessageRequestTemplateElementsInnerButtonsInner](docs/Model/SendInboxMessageRequestTemplateElementsInnerButtonsInner.md)
- [SendPrivateReplyToComment200Response](docs/Model/SendPrivateReplyToComment200Response.md)
- [SendPrivateReplyToCommentRequest](docs/Model/SendPrivateReplyToCommentRequest.md)
- [SendWhatsAppBroadcast200Response](docs/Model/SendWhatsAppBroadcast200Response.md)
- [SendWhatsAppBulk200Response](docs/Model/SendWhatsAppBulk200Response.md)
- [SendWhatsAppBulk200ResponseResultsInner](docs/Model/SendWhatsAppBulk200ResponseResultsInner.md)
- [SendWhatsAppBulk200ResponseSummary](docs/Model/SendWhatsAppBulk200ResponseSummary.md)
- [SendWhatsAppBulkRequest](docs/Model/SendWhatsAppBulkRequest.md)
- [SendWhatsAppBulkRequestRecipientsInner](docs/Model/SendWhatsAppBulkRequestRecipientsInner.md)
- [SendWhatsAppBulkRequestTemplate](docs/Model/SendWhatsAppBulkRequestTemplate.md)
- [SetInstagramIceBreakersRequest](docs/Model/SetInstagramIceBreakersRequest.md)
- [SetInstagramIceBreakersRequestIceBreakersInner](docs/Model/SetInstagramIceBreakersRequestIceBreakersInner.md)
- [SetMessengerMenuRequest](docs/Model/SetMessengerMenuRequest.md)
- [SetTelegramCommandsRequest](docs/Model/SetTelegramCommandsRequest.md)
- [SetTelegramCommandsRequestCommandsInner](docs/Model/SetTelegramCommandsRequestCommandsInner.md)
- [SnapchatPlatformData](docs/Model/SnapchatPlatformData.md)
- [SocialAccount](docs/Model/SocialAccount.md)
- [SocialAccountProfileId](docs/Model/SocialAccountProfileId.md)
- [TelegramPlatformData](docs/Model/TelegramPlatformData.md)
- [TestWebhookRequest](docs/Model/TestWebhookRequest.md)
- [ThreadsPlatformData](docs/Model/ThreadsPlatformData.md)
- [TikTokPlatformData](docs/Model/TikTokPlatformData.md)
- [TranscriptResponse](docs/Model/TranscriptResponse.md)
- [TranscriptSegment](docs/Model/TranscriptSegment.md)
- [TwitterPlatformData](docs/Model/TwitterPlatformData.md)
- [TwitterPlatformDataThreadItemsInner](docs/Model/TwitterPlatformDataThreadItemsInner.md)
- [UndoRetweet200Response](docs/Model/UndoRetweet200Response.md)
- [UnfollowUser200Response](docs/Model/UnfollowUser200Response.md)
- [UnlikeInboxComment200Response](docs/Model/UnlikeInboxComment200Response.md)
- [UnpublishPost200Response](docs/Model/UnpublishPost200Response.md)
- [UnpublishPostRequest](docs/Model/UnpublishPostRequest.md)
- [UpdateAccount200Response](docs/Model/UpdateAccount200Response.md)
- [UpdateAccountGroup200Response](docs/Model/UpdateAccountGroup200Response.md)
- [UpdateAccountGroupRequest](docs/Model/UpdateAccountGroupRequest.md)
- [UpdateAccountRequest](docs/Model/UpdateAccountRequest.md)
- [UpdateFacebookPage200Response](docs/Model/UpdateFacebookPage200Response.md)
- [UpdateFacebookPage200ResponseSelectedPage](docs/Model/UpdateFacebookPage200ResponseSelectedPage.md)
- [UpdateFacebookPageRequest](docs/Model/UpdateFacebookPageRequest.md)
- [UpdateGmbLocation200Response](docs/Model/UpdateGmbLocation200Response.md)
- [UpdateGmbLocationRequest](docs/Model/UpdateGmbLocationRequest.md)
- [UpdateGoogleBusinessAttributes200Response](docs/Model/UpdateGoogleBusinessAttributes200Response.md)
- [UpdateGoogleBusinessAttributesRequest](docs/Model/UpdateGoogleBusinessAttributesRequest.md)
- [UpdateGoogleBusinessAttributesRequestAttributesInner](docs/Model/UpdateGoogleBusinessAttributesRequestAttributesInner.md)
- [UpdateGoogleBusinessFoodMenus200Response](docs/Model/UpdateGoogleBusinessFoodMenus200Response.md)
- [UpdateGoogleBusinessFoodMenusRequest](docs/Model/UpdateGoogleBusinessFoodMenusRequest.md)
- [UpdateGoogleBusinessLocationDetails200Response](docs/Model/UpdateGoogleBusinessLocationDetails200Response.md)
- [UpdateGoogleBusinessLocationDetailsRequest](docs/Model/UpdateGoogleBusinessLocationDetailsRequest.md)
- [UpdateGoogleBusinessLocationDetailsRequestCategories](docs/Model/UpdateGoogleBusinessLocationDetailsRequestCategories.md)
- [UpdateGoogleBusinessLocationDetailsRequestCategoriesAdditionalCategoriesInner](docs/Model/UpdateGoogleBusinessLocationDetailsRequestCategoriesAdditionalCategoriesInner.md)
- [UpdateGoogleBusinessLocationDetailsRequestCategoriesPrimaryCategory](docs/Model/UpdateGoogleBusinessLocationDetailsRequestCategoriesPrimaryCategory.md)
- [UpdateGoogleBusinessLocationDetailsRequestProfile](docs/Model/UpdateGoogleBusinessLocationDetailsRequestProfile.md)
- [UpdateGoogleBusinessLocationDetailsRequestRegularHours](docs/Model/UpdateGoogleBusinessLocationDetailsRequestRegularHours.md)
- [UpdateGoogleBusinessLocationDetailsRequestRegularHoursPeriodsInner](docs/Model/UpdateGoogleBusinessLocationDetailsRequestRegularHoursPeriodsInner.md)
- [UpdateGoogleBusinessLocationDetailsRequestServiceItemsInner](docs/Model/UpdateGoogleBusinessLocationDetailsRequestServiceItemsInner.md)
- [UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerFreeFormServiceItem](docs/Model/UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerFreeFormServiceItem.md)
- [UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerFreeFormServiceItemLabel](docs/Model/UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerFreeFormServiceItemLabel.md)
- [UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerPrice](docs/Model/UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerPrice.md)
- [UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerStructuredServiceItem](docs/Model/UpdateGoogleBusinessLocationDetailsRequestServiceItemsInnerStructuredServiceItem.md)
- [UpdateInboxConversation200Response](docs/Model/UpdateInboxConversation200Response.md)
- [UpdateInboxConversation200ResponseData](docs/Model/UpdateInboxConversation200ResponseData.md)
- [UpdateInboxConversationRequest](docs/Model/UpdateInboxConversationRequest.md)
- [UpdateLinkedInOrganizationRequest](docs/Model/UpdateLinkedInOrganizationRequest.md)
- [UpdatePinterestBoardsRequest](docs/Model/UpdatePinterestBoardsRequest.md)
- [UpdatePostRequest](docs/Model/UpdatePostRequest.md)
- [UpdateProfile200Response](docs/Model/UpdateProfile200Response.md)
- [UpdateProfileRequest](docs/Model/UpdateProfileRequest.md)
- [UpdateQueueSlot200Response](docs/Model/UpdateQueueSlot200Response.md)
- [UpdateQueueSlotRequest](docs/Model/UpdateQueueSlotRequest.md)
- [UpdateRedditSubreddits200Response](docs/Model/UpdateRedditSubreddits200Response.md)
- [UpdateRedditSubredditsRequest](docs/Model/UpdateRedditSubredditsRequest.md)
- [UpdateWebhookSettings200Response](docs/Model/UpdateWebhookSettings200Response.md)
- [UpdateWebhookSettingsRequest](docs/Model/UpdateWebhookSettingsRequest.md)
- [UpdateWhatsAppBusinessProfileRequest](docs/Model/UpdateWhatsAppBusinessProfileRequest.md)
- [UpdateWhatsAppContact200Response](docs/Model/UpdateWhatsAppContact200Response.md)
- [UpdateWhatsAppContact200ResponseContact](docs/Model/UpdateWhatsAppContact200ResponseContact.md)
- [UpdateWhatsAppContactRequest](docs/Model/UpdateWhatsAppContactRequest.md)
- [UpdateWhatsAppDisplayName200Response](docs/Model/UpdateWhatsAppDisplayName200Response.md)
- [UpdateWhatsAppDisplayName200ResponseDisplayName](docs/Model/UpdateWhatsAppDisplayName200ResponseDisplayName.md)
- [UpdateWhatsAppDisplayNameRequest](docs/Model/UpdateWhatsAppDisplayNameRequest.md)
- [UpdateWhatsAppTemplate200Response](docs/Model/UpdateWhatsAppTemplate200Response.md)
- [UpdateWhatsAppTemplate200ResponseTemplate](docs/Model/UpdateWhatsAppTemplate200ResponseTemplate.md)
- [UpdateWhatsAppTemplateRequest](docs/Model/UpdateWhatsAppTemplateRequest.md)
- [UploadTokenResponse](docs/Model/UploadTokenResponse.md)
- [UploadTokenStatusResponse](docs/Model/UploadTokenStatusResponse.md)
- [UploadedFile](docs/Model/UploadedFile.md)
- [UsageStats](docs/Model/UsageStats.md)
- [UsageStatsLimits](docs/Model/UsageStatsLimits.md)
- [UsageStatsUsage](docs/Model/UsageStatsUsage.md)
- [User](docs/Model/User.md)
- [UserGetResponse](docs/Model/UserGetResponse.md)
- [UsersListResponse](docs/Model/UsersListResponse.md)
- [ValidateMedia200Response](docs/Model/ValidateMedia200Response.md)
- [ValidateMedia200ResponsePlatformLimitsValue](docs/Model/ValidateMedia200ResponsePlatformLimitsValue.md)
- [ValidateMediaRequest](docs/Model/ValidateMediaRequest.md)
- [ValidatePost200Response](docs/Model/ValidatePost200Response.md)
- [ValidatePost200ResponseOneOf](docs/Model/ValidatePost200ResponseOneOf.md)
- [ValidatePost200ResponseOneOf1](docs/Model/ValidatePost200ResponseOneOf1.md)
- [ValidatePost200ResponseOneOf1ErrorsInner](docs/Model/ValidatePost200ResponseOneOf1ErrorsInner.md)
- [ValidatePost200ResponseOneOfWarningsInner](docs/Model/ValidatePost200ResponseOneOfWarningsInner.md)
- [ValidatePostLength200Response](docs/Model/ValidatePostLength200Response.md)
- [ValidatePostLength200ResponsePlatformsValue](docs/Model/ValidatePostLength200ResponsePlatformsValue.md)
- [ValidatePostLengthRequest](docs/Model/ValidatePostLengthRequest.md)
- [ValidatePostRequest](docs/Model/ValidatePostRequest.md)
- [ValidatePostRequestMediaItemsInner](docs/Model/ValidatePostRequestMediaItemsInner.md)
- [ValidatePostRequestPlatformsInner](docs/Model/ValidatePostRequestPlatformsInner.md)
- [ValidatePostRequestPlatformsInnerCustomMediaInner](docs/Model/ValidatePostRequestPlatformsInnerCustomMediaInner.md)
- [ValidateSubreddit200Response](docs/Model/ValidateSubreddit200Response.md)
- [ValidateSubreddit200ResponseOneOf](docs/Model/ValidateSubreddit200ResponseOneOf.md)
- [ValidateSubreddit200ResponseOneOf1](docs/Model/ValidateSubreddit200ResponseOneOf1.md)
- [ValidateSubreddit200ResponseOneOfSubreddit](docs/Model/ValidateSubreddit200ResponseOneOfSubreddit.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookLog](docs/Model/WebhookLog.md)
- [WebhookPayloadAccountConnected](docs/Model/WebhookPayloadAccountConnected.md)
- [WebhookPayloadAccountConnectedAccount](docs/Model/WebhookPayloadAccountConnectedAccount.md)
- [WebhookPayloadAccountDisconnected](docs/Model/WebhookPayloadAccountDisconnected.md)
- [WebhookPayloadAccountDisconnectedAccount](docs/Model/WebhookPayloadAccountDisconnectedAccount.md)
- [WebhookPayloadComment](docs/Model/WebhookPayloadComment.md)
- [WebhookPayloadCommentAccount](docs/Model/WebhookPayloadCommentAccount.md)
- [WebhookPayloadCommentComment](docs/Model/WebhookPayloadCommentComment.md)
- [WebhookPayloadCommentCommentAuthor](docs/Model/WebhookPayloadCommentCommentAuthor.md)
- [WebhookPayloadCommentPost](docs/Model/WebhookPayloadCommentPost.md)
- [WebhookPayloadMessage](docs/Model/WebhookPayloadMessage.md)
- [WebhookPayloadMessageAccount](docs/Model/WebhookPayloadMessageAccount.md)
- [WebhookPayloadMessageConversation](docs/Model/WebhookPayloadMessageConversation.md)
- [WebhookPayloadMessageMessage](docs/Model/WebhookPayloadMessageMessage.md)
- [WebhookPayloadMessageMessageAttachmentsInner](docs/Model/WebhookPayloadMessageMessageAttachmentsInner.md)
- [WebhookPayloadMessageMessageSender](docs/Model/WebhookPayloadMessageMessageSender.md)
- [WebhookPayloadMessageMessageSenderInstagramProfile](docs/Model/WebhookPayloadMessageMessageSenderInstagramProfile.md)
- [WebhookPayloadMessageMetadata](docs/Model/WebhookPayloadMessageMetadata.md)
- [WebhookPayloadPost](docs/Model/WebhookPayloadPost.md)
- [WebhookPayloadPostPost](docs/Model/WebhookPayloadPostPost.md)
- [WebhookPayloadPostPostPlatformsInner](docs/Model/WebhookPayloadPostPostPlatformsInner.md)
- [YouTubeDailyViewsResponse](docs/Model/YouTubeDailyViewsResponse.md)
- [YouTubeDailyViewsResponseDailyViewsInner](docs/Model/YouTubeDailyViewsResponseDailyViewsInner.md)
- [YouTubeDailyViewsResponseDateRange](docs/Model/YouTubeDailyViewsResponseDateRange.md)
- [YouTubeDailyViewsResponseScopeStatus](docs/Model/YouTubeDailyViewsResponseScopeStatus.md)
- [YouTubePlatformData](docs/Model/YouTubePlatformData.md)
- [YouTubeScopeMissingResponse](docs/Model/YouTubeScopeMissingResponse.md)
- [YouTubeScopeMissingResponseScopeStatus](docs/Model/YouTubeScopeMissingResponseScopeStatus.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication (JWT)

### connectToken

- **Type**: API key
- **API key parameter name**: X-Connect-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@zernio.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.1`
    - Generator version: `7.19.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
