# Late

API reference for Late. Authenticate with a Bearer API key.
Base URL: https://getlate.dev/api


For more information, please visit [https://getlate.dev](https://getlate.dev).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/getlate-dev/late-php.git"
    }
  ],
  "require": {
    "getlate-dev/late-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Late/vendor/autoload.php');
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
$create_api_key_request = {"name":"Production API Key","expiresIn":365}; // \Late\Model\CreateApiKeyRequest

try {
    $result = $apiInstance->createApiKey($create_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://getlate.dev/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIKeysApi* | [**createApiKey**](docs/Api/APIKeysApi.md#createapikey) | **POST** /v1/api-keys | Create a new API key
*APIKeysApi* | [**deleteApiKey**](docs/Api/APIKeysApi.md#deleteapikey) | **DELETE** /v1/api-keys/{keyId} | Delete an API key
*APIKeysApi* | [**listApiKeys**](docs/Api/APIKeysApi.md#listapikeys) | **GET** /v1/api-keys | List API keys for the current user
*AccountGroupsApi* | [**createAccountGroup**](docs/Api/AccountGroupsApi.md#createaccountgroup) | **POST** /v1/account-groups | Create a new account group
*AccountGroupsApi* | [**deleteAccountGroup**](docs/Api/AccountGroupsApi.md#deleteaccountgroup) | **DELETE** /v1/account-groups/{groupId} | Delete an account group
*AccountGroupsApi* | [**listAccountGroups**](docs/Api/AccountGroupsApi.md#listaccountgroups) | **GET** /v1/account-groups | List account groups for the authenticated user
*AccountGroupsApi* | [**updateAccountGroup**](docs/Api/AccountGroupsApi.md#updateaccountgroup) | **PUT** /v1/account-groups/{groupId} | Update an account group
*AccountSettingsApi* | [**deleteInstagramIceBreakers**](docs/Api/AccountSettingsApi.md#deleteinstagramicebreakers) | **DELETE** /v1/accounts/{accountId}/instagram-ice-breakers | Delete Instagram ice breakers
*AccountSettingsApi* | [**deleteMessengerMenu**](docs/Api/AccountSettingsApi.md#deletemessengermenu) | **DELETE** /v1/accounts/{accountId}/messenger-menu | Delete Facebook persistent menu
*AccountSettingsApi* | [**deleteTelegramCommands**](docs/Api/AccountSettingsApi.md#deletetelegramcommands) | **DELETE** /v1/accounts/{accountId}/telegram-commands | Delete Telegram bot commands
*AccountSettingsApi* | [**getInstagramIceBreakers**](docs/Api/AccountSettingsApi.md#getinstagramicebreakers) | **GET** /v1/accounts/{accountId}/instagram-ice-breakers | Get Instagram ice breakers
*AccountSettingsApi* | [**getMessengerMenu**](docs/Api/AccountSettingsApi.md#getmessengermenu) | **GET** /v1/accounts/{accountId}/messenger-menu | Get Facebook persistent menu
*AccountSettingsApi* | [**getTelegramCommands**](docs/Api/AccountSettingsApi.md#gettelegramcommands) | **GET** /v1/accounts/{accountId}/telegram-commands | Get Telegram bot commands
*AccountSettingsApi* | [**setInstagramIceBreakers**](docs/Api/AccountSettingsApi.md#setinstagramicebreakers) | **PUT** /v1/accounts/{accountId}/instagram-ice-breakers | Set Instagram ice breakers
*AccountSettingsApi* | [**setMessengerMenu**](docs/Api/AccountSettingsApi.md#setmessengermenu) | **PUT** /v1/accounts/{accountId}/messenger-menu | Set Facebook persistent menu
*AccountSettingsApi* | [**setTelegramCommands**](docs/Api/AccountSettingsApi.md#settelegramcommands) | **PUT** /v1/accounts/{accountId}/telegram-commands | Set Telegram bot commands
*AccountsApi* | [**deleteAccount**](docs/Api/AccountsApi.md#deleteaccount) | **DELETE** /v1/accounts/{accountId} | Disconnect a social account
*AccountsApi* | [**getAccountHealth**](docs/Api/AccountsApi.md#getaccounthealth) | **GET** /v1/accounts/{accountId}/health | Check health of a specific account
*AccountsApi* | [**getAllAccountsHealth**](docs/Api/AccountsApi.md#getallaccountshealth) | **GET** /v1/accounts/health | Check health of all connected accounts
*AccountsApi* | [**getFollowerStats**](docs/Api/AccountsApi.md#getfollowerstats) | **GET** /v1/accounts/follower-stats | Get follower stats and growth metrics
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /v1/accounts | List connected social accounts
*AccountsApi* | [**updateAccount**](docs/Api/AccountsApi.md#updateaccount) | **PUT** /v1/accounts/{accountId} | Update a social account
*AnalyticsApi* | [**getAnalytics**](docs/Api/AnalyticsApi.md#getanalytics) | **GET** /v1/analytics | Unified analytics for posts
*AnalyticsApi* | [**getFollowerStats**](docs/Api/AnalyticsApi.md#getfollowerstats) | **GET** /v1/accounts/follower-stats | Get follower stats and growth metrics
*AnalyticsApi* | [**getLinkedInAggregateAnalytics**](docs/Api/AnalyticsApi.md#getlinkedinaggregateanalytics) | **GET** /v1/accounts/{accountId}/linkedin-aggregate-analytics | Get aggregate analytics for a LinkedIn personal account
*AnalyticsApi* | [**getLinkedInPostAnalytics**](docs/Api/AnalyticsApi.md#getlinkedinpostanalytics) | **GET** /v1/accounts/{accountId}/linkedin-post-analytics | Get analytics for a specific LinkedIn post by URN
*AnalyticsApi* | [**getYouTubeDailyViews**](docs/Api/AnalyticsApi.md#getyoutubedailyviews) | **GET** /v1/analytics/youtube/daily-views | YouTube daily views breakdown
*CommentsApi* | [**deleteInboxComment**](docs/Api/CommentsApi.md#deleteinboxcomment) | **DELETE** /v1/inbox/comments/{postId} | Delete a comment
*CommentsApi* | [**getInboxPostComments**](docs/Api/CommentsApi.md#getinboxpostcomments) | **GET** /v1/inbox/comments/{postId} | Get comments for a post
*CommentsApi* | [**hideInboxComment**](docs/Api/CommentsApi.md#hideinboxcomment) | **POST** /v1/inbox/comments/{postId}/{commentId}/hide | Hide a comment
*CommentsApi* | [**likeInboxComment**](docs/Api/CommentsApi.md#likeinboxcomment) | **POST** /v1/inbox/comments/{postId}/{commentId}/like | Like a comment
*CommentsApi* | [**listInboxComments**](docs/Api/CommentsApi.md#listinboxcomments) | **GET** /v1/inbox/comments | List posts with comments across all accounts
*CommentsApi* | [**replyToInboxPost**](docs/Api/CommentsApi.md#replytoinboxpost) | **POST** /v1/inbox/comments/{postId} | Reply to a post or comment
*CommentsApi* | [**sendPrivateReplyToComment**](docs/Api/CommentsApi.md#sendprivatereplytocomment) | **POST** /v1/inbox/comments/{postId}/{commentId}/private-reply | Send private reply to comment author
*CommentsApi* | [**unhideInboxComment**](docs/Api/CommentsApi.md#unhideinboxcomment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/hide | Unhide a comment
*CommentsApi* | [**unlikeInboxComment**](docs/Api/CommentsApi.md#unlikeinboxcomment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/like | Unlike a comment
*ConnectApi* | [**completeTelegramConnect**](docs/Api/ConnectApi.md#completetelegramconnect) | **PATCH** /v1/connect/telegram | Check Telegram connection status
*ConnectApi* | [**connectBlueskyCredentials**](docs/Api/ConnectApi.md#connectblueskycredentials) | **POST** /v1/connect/bluesky/credentials | Connect Bluesky using app password
*ConnectApi* | [**getConnectUrl**](docs/Api/ConnectApi.md#getconnecturl) | **GET** /v1/connect/{platform} | Start OAuth connection for a platform
*ConnectApi* | [**getFacebookPages**](docs/Api/ConnectApi.md#getfacebookpages) | **GET** /v1/accounts/{accountId}/facebook-page | List available Facebook pages for a connected account
*ConnectApi* | [**getGmbLocations**](docs/Api/ConnectApi.md#getgmblocations) | **GET** /v1/accounts/{accountId}/gmb-locations | List available Google Business Profile locations for a connected account
*ConnectApi* | [**getLinkedInOrganizations**](docs/Api/ConnectApi.md#getlinkedinorganizations) | **GET** /v1/accounts/{accountId}/linkedin-organizations | Get available LinkedIn organizations for a connected account
*ConnectApi* | [**getPendingOAuthData**](docs/Api/ConnectApi.md#getpendingoauthdata) | **GET** /v1/connect/pending-data | Fetch pending OAuth selection data (Headless Mode)
*ConnectApi* | [**getPinterestBoards**](docs/Api/ConnectApi.md#getpinterestboards) | **GET** /v1/accounts/{accountId}/pinterest-boards | List Pinterest boards for a connected account
*ConnectApi* | [**getRedditFlairs**](docs/Api/ConnectApi.md#getredditflairs) | **GET** /v1/accounts/{accountId}/reddit-flairs | List available post flairs for a Reddit subreddit
*ConnectApi* | [**getRedditSubreddits**](docs/Api/ConnectApi.md#getredditsubreddits) | **GET** /v1/accounts/{accountId}/reddit-subreddits | List Reddit subreddits for a connected account
*ConnectApi* | [**getTelegramConnectStatus**](docs/Api/ConnectApi.md#gettelegramconnectstatus) | **GET** /v1/connect/telegram | Generate Telegram access code
*ConnectApi* | [**handleOAuthCallback**](docs/Api/ConnectApi.md#handleoauthcallback) | **POST** /v1/connect/{platform} | Complete OAuth token exchange manually (for server-side flows)
*ConnectApi* | [**initiateTelegramConnect**](docs/Api/ConnectApi.md#initiatetelegramconnect) | **POST** /v1/connect/telegram | Direct Telegram connection (power users)
*ConnectApi* | [**listFacebookPages**](docs/Api/ConnectApi.md#listfacebookpages) | **GET** /v1/connect/facebook/select-page | List Facebook Pages after OAuth (Headless Mode)
*ConnectApi* | [**listGoogleBusinessLocations**](docs/Api/ConnectApi.md#listgooglebusinesslocations) | **GET** /v1/connect/googlebusiness/locations | List Google Business Locations after OAuth (Headless Mode)
*ConnectApi* | [**listLinkedInOrganizations**](docs/Api/ConnectApi.md#listlinkedinorganizations) | **GET** /v1/connect/linkedin/organizations | Fetch full LinkedIn organization details (Headless Mode)
*ConnectApi* | [**listPinterestBoardsForSelection**](docs/Api/ConnectApi.md#listpinterestboardsforselection) | **GET** /v1/connect/pinterest/select-board | List Pinterest Boards after OAuth (Headless Mode)
*ConnectApi* | [**listSnapchatProfiles**](docs/Api/ConnectApi.md#listsnapchatprofiles) | **GET** /v1/connect/snapchat/select-profile | List Snapchat Public Profiles after OAuth (Headless Mode)
*ConnectApi* | [**selectFacebookPage**](docs/Api/ConnectApi.md#selectfacebookpage) | **POST** /v1/connect/facebook/select-page | Select a Facebook Page to complete the connection (Headless Mode)
*ConnectApi* | [**selectGoogleBusinessLocation**](docs/Api/ConnectApi.md#selectgooglebusinesslocation) | **POST** /v1/connect/googlebusiness/select-location | Select a Google Business location to complete the connection (Headless Mode)
*ConnectApi* | [**selectLinkedInOrganization**](docs/Api/ConnectApi.md#selectlinkedinorganization) | **POST** /v1/connect/linkedin/select-organization | Select LinkedIn organization or personal account after OAuth
*ConnectApi* | [**selectPinterestBoard**](docs/Api/ConnectApi.md#selectpinterestboard) | **POST** /v1/connect/pinterest/select-board | Select a Pinterest Board to complete the connection (Headless Mode)
*ConnectApi* | [**selectSnapchatProfile**](docs/Api/ConnectApi.md#selectsnapchatprofile) | **POST** /v1/connect/snapchat/select-profile | Select a Snapchat Public Profile to complete the connection (Headless Mode)
*ConnectApi* | [**updateFacebookPage**](docs/Api/ConnectApi.md#updatefacebookpage) | **PUT** /v1/accounts/{accountId}/facebook-page | Update selected Facebook page for a connected account
*ConnectApi* | [**updateGmbLocation**](docs/Api/ConnectApi.md#updategmblocation) | **PUT** /v1/accounts/{accountId}/gmb-locations | Update selected Google Business Profile location for a connected account
*ConnectApi* | [**updateLinkedInOrganization**](docs/Api/ConnectApi.md#updatelinkedinorganization) | **PUT** /v1/accounts/{accountId}/linkedin-organization | Switch LinkedIn account type (personal/organization)
*ConnectApi* | [**updatePinterestBoards**](docs/Api/ConnectApi.md#updatepinterestboards) | **PUT** /v1/accounts/{accountId}/pinterest-boards | Set default Pinterest board on the connection
*ConnectApi* | [**updateRedditSubreddits**](docs/Api/ConnectApi.md#updateredditsubreddits) | **PUT** /v1/accounts/{accountId}/reddit-subreddits | Set default subreddit on the connection
*GMBAttributesApi* | [**getGoogleBusinessAttributes**](docs/Api/GMBAttributesApi.md#getgooglebusinessattributes) | **GET** /v1/accounts/{accountId}/gmb-attributes | Get Google Business Profile location attributes
*GMBAttributesApi* | [**updateGoogleBusinessAttributes**](docs/Api/GMBAttributesApi.md#updategooglebusinessattributes) | **PUT** /v1/accounts/{accountId}/gmb-attributes | Update Google Business Profile location attributes
*GMBFoodMenusApi* | [**getGoogleBusinessFoodMenus**](docs/Api/GMBFoodMenusApi.md#getgooglebusinessfoodmenus) | **GET** /v1/accounts/{accountId}/gmb-food-menus | Get Google Business Profile food menus
*GMBFoodMenusApi* | [**updateGoogleBusinessFoodMenus**](docs/Api/GMBFoodMenusApi.md#updategooglebusinessfoodmenus) | **PUT** /v1/accounts/{accountId}/gmb-food-menus | Update Google Business Profile food menus
*GMBLocationDetailsApi* | [**getGoogleBusinessLocationDetails**](docs/Api/GMBLocationDetailsApi.md#getgooglebusinesslocationdetails) | **GET** /v1/accounts/{accountId}/gmb-location-details | Get Google Business Profile location details
*GMBLocationDetailsApi* | [**updateGoogleBusinessLocationDetails**](docs/Api/GMBLocationDetailsApi.md#updategooglebusinesslocationdetails) | **PUT** /v1/accounts/{accountId}/gmb-location-details | Update Google Business Profile location details
*GMBMediaApi* | [**createGoogleBusinessMedia**](docs/Api/GMBMediaApi.md#creategooglebusinessmedia) | **POST** /v1/accounts/{accountId}/gmb-media | Upload a photo to Google Business Profile
*GMBMediaApi* | [**deleteGoogleBusinessMedia**](docs/Api/GMBMediaApi.md#deletegooglebusinessmedia) | **DELETE** /v1/accounts/{accountId}/gmb-media | Delete a photo from Google Business Profile
*GMBMediaApi* | [**listGoogleBusinessMedia**](docs/Api/GMBMediaApi.md#listgooglebusinessmedia) | **GET** /v1/accounts/{accountId}/gmb-media | List Google Business Profile media (photos)
*GMBPlaceActionsApi* | [**createGoogleBusinessPlaceAction**](docs/Api/GMBPlaceActionsApi.md#creategooglebusinessplaceaction) | **POST** /v1/accounts/{accountId}/gmb-place-actions | Create a place action link (booking, ordering, reservation)
*GMBPlaceActionsApi* | [**deleteGoogleBusinessPlaceAction**](docs/Api/GMBPlaceActionsApi.md#deletegooglebusinessplaceaction) | **DELETE** /v1/accounts/{accountId}/gmb-place-actions | Delete a place action link
*GMBPlaceActionsApi* | [**listGoogleBusinessPlaceActions**](docs/Api/GMBPlaceActionsApi.md#listgooglebusinessplaceactions) | **GET** /v1/accounts/{accountId}/gmb-place-actions | List place action links (booking, ordering, reservations)
*GMBReviewsApi* | [**getGoogleBusinessReviews**](docs/Api/GMBReviewsApi.md#getgooglebusinessreviews) | **GET** /v1/accounts/{accountId}/gmb-reviews | Get Google Business Profile reviews
*InvitesApi* | [**createInviteToken**](docs/Api/InvitesApi.md#createinvitetoken) | **POST** /v1/invite/tokens | Create a team member invite token
*LinkedInMentionsApi* | [**getLinkedInMentions**](docs/Api/LinkedInMentionsApi.md#getlinkedinmentions) | **GET** /v1/accounts/{accountId}/linkedin-mentions | Resolve a LinkedIn profile or company URL to a URN for @mentions
*LogsApi* | [**getLog**](docs/Api/LogsApi.md#getlog) | **GET** /v1/logs/{logId} | Get a single log entry
*LogsApi* | [**getPostLogs**](docs/Api/LogsApi.md#getpostlogs) | **GET** /v1/posts/{postId}/logs | Get logs for a specific post
*LogsApi* | [**listConnectionLogs**](docs/Api/LogsApi.md#listconnectionlogs) | **GET** /v1/connections/logs | Get connection logs
*LogsApi* | [**listLogs**](docs/Api/LogsApi.md#listlogs) | **GET** /v1/logs | Get publishing logs (deprecated)
*LogsApi* | [**listPostsLogs**](docs/Api/LogsApi.md#listpostslogs) | **GET** /v1/posts/logs | Get publishing logs
*MediaApi* | [**getMediaPresignedUrl**](docs/Api/MediaApi.md#getmediapresignedurl) | **POST** /v1/media/presign | Get a presigned URL for direct file upload (up to 5GB)
*MessagesApi* | [**editInboxMessage**](docs/Api/MessagesApi.md#editinboxmessage) | **PATCH** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Edit a message (Telegram only)
*MessagesApi* | [**getInboxConversation**](docs/Api/MessagesApi.md#getinboxconversation) | **GET** /v1/inbox/conversations/{conversationId} | Get conversation details
*MessagesApi* | [**getInboxConversationMessages**](docs/Api/MessagesApi.md#getinboxconversationmessages) | **GET** /v1/inbox/conversations/{conversationId}/messages | Get messages in a conversation
*MessagesApi* | [**listInboxConversations**](docs/Api/MessagesApi.md#listinboxconversations) | **GET** /v1/inbox/conversations | List conversations across all accounts
*MessagesApi* | [**sendInboxMessage**](docs/Api/MessagesApi.md#sendinboxmessage) | **POST** /v1/inbox/conversations/{conversationId}/messages | Send a message
*MessagesApi* | [**updateInboxConversation**](docs/Api/MessagesApi.md#updateinboxconversation) | **PUT** /v1/inbox/conversations/{conversationId} | Update conversation status
*PostsApi* | [**bulkUploadPosts**](docs/Api/PostsApi.md#bulkuploadposts) | **POST** /v1/posts/bulk-upload | Validate and schedule multiple posts from CSV
*PostsApi* | [**createPost**](docs/Api/PostsApi.md#createpost) | **POST** /v1/posts | Create a draft, scheduled, or immediate post
*PostsApi* | [**deletePost**](docs/Api/PostsApi.md#deletepost) | **DELETE** /v1/posts/{postId} | Delete a post
*PostsApi* | [**getPost**](docs/Api/PostsApi.md#getpost) | **GET** /v1/posts/{postId} | Get a single post
*PostsApi* | [**listPosts**](docs/Api/PostsApi.md#listposts) | **GET** /v1/posts | List posts visible to the authenticated user
*PostsApi* | [**retryPost**](docs/Api/PostsApi.md#retrypost) | **POST** /v1/posts/{postId}/retry | Retry publishing a failed or partial post
*PostsApi* | [**updatePost**](docs/Api/PostsApi.md#updatepost) | **PUT** /v1/posts/{postId} | Update a post
*ProfilesApi* | [**createProfile**](docs/Api/ProfilesApi.md#createprofile) | **POST** /v1/profiles | Create a new profile
*ProfilesApi* | [**deleteProfile**](docs/Api/ProfilesApi.md#deleteprofile) | **DELETE** /v1/profiles/{profileId} | Delete a profile (must have no connected accounts)
*ProfilesApi* | [**getProfile**](docs/Api/ProfilesApi.md#getprofile) | **GET** /v1/profiles/{profileId} | Get a profile by id
*ProfilesApi* | [**listProfiles**](docs/Api/ProfilesApi.md#listprofiles) | **GET** /v1/profiles | List profiles visible to the authenticated user
*ProfilesApi* | [**updateProfile**](docs/Api/ProfilesApi.md#updateprofile) | **PUT** /v1/profiles/{profileId} | Update a profile
*QueueApi* | [**createQueueSlot**](docs/Api/QueueApi.md#createqueueslot) | **POST** /v1/queue/slots | Create a new queue for a profile
*QueueApi* | [**deleteQueueSlot**](docs/Api/QueueApi.md#deletequeueslot) | **DELETE** /v1/queue/slots | Delete a queue schedule
*QueueApi* | [**getNextQueueSlot**](docs/Api/QueueApi.md#getnextqueueslot) | **GET** /v1/queue/next-slot | Preview the next available queue slot (informational only)
*QueueApi* | [**listQueueSlots**](docs/Api/QueueApi.md#listqueueslots) | **GET** /v1/queue/slots | Get queue schedules for a profile
*QueueApi* | [**previewQueue**](docs/Api/QueueApi.md#previewqueue) | **GET** /v1/queue/preview | Preview upcoming queue slots for a profile
*QueueApi* | [**updateQueueSlot**](docs/Api/QueueApi.md#updatequeueslot) | **PUT** /v1/queue/slots | Create or update a queue schedule
*RedditSearchApi* | [**getRedditFeed**](docs/Api/RedditSearchApi.md#getredditfeed) | **GET** /v1/reddit/feed | Fetch subreddit feed via a connected account
*RedditSearchApi* | [**searchReddit**](docs/Api/RedditSearchApi.md#searchreddit) | **GET** /v1/reddit/search | Search Reddit posts via a connected account
*ReviewsApi* | [**deleteInboxReviewReply**](docs/Api/ReviewsApi.md#deleteinboxreviewreply) | **DELETE** /v1/inbox/reviews/{reviewId}/reply | Delete a review reply
*ReviewsApi* | [**listInboxReviews**](docs/Api/ReviewsApi.md#listinboxreviews) | **GET** /v1/inbox/reviews | List reviews across all accounts
*ReviewsApi* | [**replyToInboxReview**](docs/Api/ReviewsApi.md#replytoinboxreview) | **POST** /v1/inbox/reviews/{reviewId}/reply | Reply to a review
*ToolsApi* | [**checkInstagramHashtags**](docs/Api/ToolsApi.md#checkinstagramhashtags) | **POST** /v1/tools/instagram/hashtag-checker | Check Instagram hashtags for bans
*ToolsApi* | [**downloadBlueskyMedia**](docs/Api/ToolsApi.md#downloadblueskymedia) | **GET** /v1/tools/bluesky/download | Download Bluesky video
*ToolsApi* | [**downloadFacebookVideo**](docs/Api/ToolsApi.md#downloadfacebookvideo) | **GET** /v1/tools/facebook/download | Download Facebook video
*ToolsApi* | [**downloadInstagramMedia**](docs/Api/ToolsApi.md#downloadinstagrammedia) | **GET** /v1/tools/instagram/download | Download Instagram reel or post
*ToolsApi* | [**downloadLinkedInVideo**](docs/Api/ToolsApi.md#downloadlinkedinvideo) | **GET** /v1/tools/linkedin/download | Download LinkedIn video
*ToolsApi* | [**downloadTikTokVideo**](docs/Api/ToolsApi.md#downloadtiktokvideo) | **GET** /v1/tools/tiktok/download | Download TikTok video
*ToolsApi* | [**downloadTwitterMedia**](docs/Api/ToolsApi.md#downloadtwittermedia) | **GET** /v1/tools/twitter/download | Download Twitter/X video
*ToolsApi* | [**downloadYouTubeVideo**](docs/Api/ToolsApi.md#downloadyoutubevideo) | **GET** /v1/tools/youtube/download | Download YouTube video or audio
*ToolsApi* | [**getYouTubeTranscript**](docs/Api/ToolsApi.md#getyoutubetranscript) | **GET** /v1/tools/youtube/transcript | Get YouTube video transcript
*UsageApi* | [**getUsageStats**](docs/Api/UsageApi.md#getusagestats) | **GET** /v1/usage-stats | Get plan and usage stats for current account
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /v1/users/{userId} | Get user by id (self or invited)
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /v1/users | List team users (root + invited)
*WebhooksApi* | [**createWebhookSettings**](docs/Api/WebhooksApi.md#createwebhooksettings) | **POST** /v1/webhooks/settings | Create a new webhook
*WebhooksApi* | [**deleteWebhookSettings**](docs/Api/WebhooksApi.md#deletewebhooksettings) | **DELETE** /v1/webhooks/settings | Delete a webhook
*WebhooksApi* | [**getWebhookLogs**](docs/Api/WebhooksApi.md#getwebhooklogs) | **GET** /v1/webhooks/logs | Get webhook delivery logs
*WebhooksApi* | [**getWebhookSettings**](docs/Api/WebhooksApi.md#getwebhooksettings) | **GET** /v1/webhooks/settings | List all webhooks
*WebhooksApi* | [**testWebhook**](docs/Api/WebhooksApi.md#testwebhook) | **POST** /v1/webhooks/test | Send test webhook
*WebhooksApi* | [**updateWebhookSettings**](docs/Api/WebhooksApi.md#updatewebhooksettings) | **PUT** /v1/webhooks/settings | Update a webhook

## Models

- [AccountGetResponse](docs/Model/AccountGetResponse.md)
- [AccountWithFollowerStats](docs/Model/AccountWithFollowerStats.md)
- [AccountsListResponse](docs/Model/AccountsListResponse.md)
- [AnalyticsListResponse](docs/Model/AnalyticsListResponse.md)
- [AnalyticsListResponsePostsInner](docs/Model/AnalyticsListResponsePostsInner.md)
- [AnalyticsOverview](docs/Model/AnalyticsOverview.md)
- [AnalyticsSinglePostResponse](docs/Model/AnalyticsSinglePostResponse.md)
- [ApiKey](docs/Model/ApiKey.md)
- [BlueskyPlatformData](docs/Model/BlueskyPlatformData.md)
- [BulkUploadPosts200Response](docs/Model/BulkUploadPosts200Response.md)
- [BulkUploadPosts200ResponseErrorsInner](docs/Model/BulkUploadPosts200ResponseErrorsInner.md)
- [BulkUploadPosts429Response](docs/Model/BulkUploadPosts429Response.md)
- [CaptionResponse](docs/Model/CaptionResponse.md)
- [CheckInstagramHashtags200Response](docs/Model/CheckInstagramHashtags200Response.md)
- [CheckInstagramHashtags200ResponseResultsInner](docs/Model/CheckInstagramHashtags200ResponseResultsInner.md)
- [CheckInstagramHashtags200ResponseSummary](docs/Model/CheckInstagramHashtags200ResponseSummary.md)
- [CheckInstagramHashtagsRequest](docs/Model/CheckInstagramHashtagsRequest.md)
- [CompleteTelegramConnect200Response](docs/Model/CompleteTelegramConnect200Response.md)
- [ConnectBlueskyCredentials200Response](docs/Model/ConnectBlueskyCredentials200Response.md)
- [ConnectBlueskyCredentialsRequest](docs/Model/ConnectBlueskyCredentialsRequest.md)
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
- [DeleteAccountGroup200Response](docs/Model/DeleteAccountGroup200Response.md)
- [DeleteGoogleBusinessMedia200Response](docs/Model/DeleteGoogleBusinessMedia200Response.md)
- [DeleteGoogleBusinessPlaceAction200Response](docs/Model/DeleteGoogleBusinessPlaceAction200Response.md)
- [DeleteInboxComment200Response](docs/Model/DeleteInboxComment200Response.md)
- [DeleteInboxReviewReply200Response](docs/Model/DeleteInboxReviewReply200Response.md)
- [DeleteInboxReviewReplyRequest](docs/Model/DeleteInboxReviewReplyRequest.md)
- [DeleteQueueSlot200Response](docs/Model/DeleteQueueSlot200Response.md)
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
- [GetAnalytics402Response](docs/Model/GetAnalytics402Response.md)
- [GetConnectUrl200Response](docs/Model/GetConnectUrl200Response.md)
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
- [GetGoogleBusinessLocationDetails200ResponsePhoneNumbers](docs/Model/GetGoogleBusinessLocationDetails200ResponsePhoneNumbers.md)
- [GetGoogleBusinessLocationDetails200ResponseProfile](docs/Model/GetGoogleBusinessLocationDetails200ResponseProfile.md)
- [GetGoogleBusinessLocationDetails200ResponseRegularHours](docs/Model/GetGoogleBusinessLocationDetails200ResponseRegularHours.md)
- [GetGoogleBusinessLocationDetails200ResponseRegularHoursPeriodsInner](docs/Model/GetGoogleBusinessLocationDetails200ResponseRegularHoursPeriodsInner.md)
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
- [GetLog200Response](docs/Model/GetLog200Response.md)
- [GetMediaPresignedUrl200Response](docs/Model/GetMediaPresignedUrl200Response.md)
- [GetMediaPresignedUrlRequest](docs/Model/GetMediaPresignedUrlRequest.md)
- [GetMessengerMenu200Response](docs/Model/GetMessengerMenu200Response.md)
- [GetNextQueueSlot200Response](docs/Model/GetNextQueueSlot200Response.md)
- [GetPendingOAuthData200Response](docs/Model/GetPendingOAuthData200Response.md)
- [GetPendingOAuthData200ResponseOrganizationsInner](docs/Model/GetPendingOAuthData200ResponseOrganizationsInner.md)
- [GetPinterestBoards200Response](docs/Model/GetPinterestBoards200Response.md)
- [GetPinterestBoards200ResponseBoardsInner](docs/Model/GetPinterestBoards200ResponseBoardsInner.md)
- [GetPostLogs200Response](docs/Model/GetPostLogs200Response.md)
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
- [ListLogs200Response](docs/Model/ListLogs200Response.md)
- [ListLogs200ResponsePagination](docs/Model/ListLogs200ResponsePagination.md)
- [ListPinterestBoardsForSelection200Response](docs/Model/ListPinterestBoardsForSelection200Response.md)
- [ListPinterestBoardsForSelection200ResponseBoardsInner](docs/Model/ListPinterestBoardsForSelection200ResponseBoardsInner.md)
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
- [PlatformAnalyticsAccountMetrics](docs/Model/PlatformAnalyticsAccountMetrics.md)
- [PlatformTarget](docs/Model/PlatformTarget.md)
- [PlatformTargetAccountId](docs/Model/PlatformTargetAccountId.md)
- [PlatformTargetPlatformSpecificData](docs/Model/PlatformTargetPlatformSpecificData.md)
- [Post](docs/Model/Post.md)
- [PostAnalytics](docs/Model/PostAnalytics.md)
- [PostCreateResponse](docs/Model/PostCreateResponse.md)
- [PostDeleteResponse](docs/Model/PostDeleteResponse.md)
- [PostGetResponse](docs/Model/PostGetResponse.md)
- [PostLog](docs/Model/PostLog.md)
- [PostLogDetail](docs/Model/PostLogDetail.md)
- [PostLogDetailAllOfAccountId](docs/Model/PostLogDetailAllOfAccountId.md)
- [PostLogDetailAllOfPostId](docs/Model/PostLogDetailAllOfPostId.md)
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
- [QueueDeleteResponse](docs/Model/QueueDeleteResponse.md)
- [QueueNextSlotResponse](docs/Model/QueueNextSlotResponse.md)
- [QueuePreviewResponse](docs/Model/QueuePreviewResponse.md)
- [QueueSchedule](docs/Model/QueueSchedule.md)
- [QueueSlot](docs/Model/QueueSlot.md)
- [QueueSlotsResponse](docs/Model/QueueSlotsResponse.md)
- [QueueUpdateResponse](docs/Model/QueueUpdateResponse.md)
- [RedditPlatformData](docs/Model/RedditPlatformData.md)
- [ReplyToInboxPost200Response](docs/Model/ReplyToInboxPost200Response.md)
- [ReplyToInboxPost200ResponseData](docs/Model/ReplyToInboxPost200ResponseData.md)
- [ReplyToInboxPostRequest](docs/Model/ReplyToInboxPostRequest.md)
- [ReplyToInboxReview200Response](docs/Model/ReplyToInboxReview200Response.md)
- [ReplyToInboxReview200ResponseReply](docs/Model/ReplyToInboxReview200ResponseReply.md)
- [ReplyToInboxReviewRequest](docs/Model/ReplyToInboxReviewRequest.md)
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
- [SetInstagramIceBreakersRequest](docs/Model/SetInstagramIceBreakersRequest.md)
- [SetInstagramIceBreakersRequestIceBreakersInner](docs/Model/SetInstagramIceBreakersRequestIceBreakersInner.md)
- [SetMessengerMenuRequest](docs/Model/SetMessengerMenuRequest.md)
- [SetTelegramCommandsRequest](docs/Model/SetTelegramCommandsRequest.md)
- [SetTelegramCommandsRequestCommandsInner](docs/Model/SetTelegramCommandsRequestCommandsInner.md)
- [SnapchatPlatformData](docs/Model/SnapchatPlatformData.md)
- [SocialAccount](docs/Model/SocialAccount.md)
- [SocialAccountProfileId](docs/Model/SocialAccountProfileId.md)
- [TelegramPlatformData](docs/Model/TelegramPlatformData.md)
- [TestWebhook200Response](docs/Model/TestWebhook200Response.md)
- [TestWebhookRequest](docs/Model/TestWebhookRequest.md)
- [ThreadsPlatformData](docs/Model/ThreadsPlatformData.md)
- [TikTokPlatformData](docs/Model/TikTokPlatformData.md)
- [TikTokSettings](docs/Model/TikTokSettings.md)
- [TranscriptResponse](docs/Model/TranscriptResponse.md)
- [TranscriptSegment](docs/Model/TranscriptSegment.md)
- [TwitterPlatformData](docs/Model/TwitterPlatformData.md)
- [TwitterPlatformDataThreadItemsInner](docs/Model/TwitterPlatformDataThreadItemsInner.md)
- [UnlikeInboxComment200Response](docs/Model/UnlikeInboxComment200Response.md)
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
- [UpdateGoogleBusinessLocationDetailsRequestProfile](docs/Model/UpdateGoogleBusinessLocationDetailsRequestProfile.md)
- [UpdateGoogleBusinessLocationDetailsRequestRegularHours](docs/Model/UpdateGoogleBusinessLocationDetailsRequestRegularHours.md)
- [UpdateGoogleBusinessLocationDetailsRequestRegularHoursPeriodsInner](docs/Model/UpdateGoogleBusinessLocationDetailsRequestRegularHoursPeriodsInner.md)
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
- [UploadTokenResponse](docs/Model/UploadTokenResponse.md)
- [UploadTokenStatusResponse](docs/Model/UploadTokenStatusResponse.md)
- [UploadedFile](docs/Model/UploadedFile.md)
- [UsageStats](docs/Model/UsageStats.md)
- [UsageStatsLimits](docs/Model/UsageStatsLimits.md)
- [UsageStatsUsage](docs/Model/UsageStatsUsage.md)
- [User](docs/Model/User.md)
- [UserGetResponse](docs/Model/UserGetResponse.md)
- [UsersListResponse](docs/Model/UsersListResponse.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookLog](docs/Model/WebhookLog.md)
- [WebhookPayloadAccountConnected](docs/Model/WebhookPayloadAccountConnected.md)
- [WebhookPayloadAccountConnectedAccount](docs/Model/WebhookPayloadAccountConnectedAccount.md)
- [WebhookPayloadAccountDisconnected](docs/Model/WebhookPayloadAccountDisconnected.md)
- [WebhookPayloadAccountDisconnectedAccount](docs/Model/WebhookPayloadAccountDisconnectedAccount.md)
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

support@getlate.dev

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.1`
    - Generator version: `7.19.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
