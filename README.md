# Zernio

API reference for Zernio. Authenticate with a Bearer API key.
Base URL: https://zernio.com/api


For more information, please visit [https://zernio.com](https://zernio.com).

## Installation

### Requirements

PHP 8.1 and later.

### Composer

```bash
composer require zernio-dev/zernio-php
```

Use the `Zernio\` namespace. The legacy `Late\` namespace is auto-aliased on load for backwards compatibility.


## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_request = {"name":"Analytics Read-Only Key","scope":"profiles","profileIds":["6507a1b2c3d4e5f6a7b8c9d0"],"permission":"read"}; // \Zernio\Model\CreateApiKeyRequest

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
*AccountsApi* | [**getTikTokCreatorInfo**](docs/Api/AccountsApi.md#gettiktokcreatorinfo) | **GET** /v1/accounts/{accountId}/tiktok/creator-info | Get TikTok creator info
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /v1/accounts | List accounts
*AccountsApi* | [**updateAccount**](docs/Api/AccountsApi.md#updateaccount) | **PUT** /v1/accounts/{accountId} | Update account
*AdAudiencesApi* | [**addUsersToAdAudience**](docs/Api/AdAudiencesApi.md#adduserstoadaudience) | **POST** /v1/ads/audiences/{audienceId}/users | Add users to audience
*AdAudiencesApi* | [**createAdAudience**](docs/Api/AdAudiencesApi.md#createadaudience) | **POST** /v1/ads/audiences | Create custom audience
*AdAudiencesApi* | [**deleteAdAudience**](docs/Api/AdAudiencesApi.md#deleteadaudience) | **DELETE** /v1/ads/audiences/{audienceId} | Delete custom audience
*AdAudiencesApi* | [**getAdAudience**](docs/Api/AdAudiencesApi.md#getadaudience) | **GET** /v1/ads/audiences/{audienceId} | Get audience details
*AdAudiencesApi* | [**listAdAudiences**](docs/Api/AdAudiencesApi.md#listadaudiences) | **GET** /v1/ads/audiences | List custom audiences
*AdCampaignsApi* | [**bulkUpdateAdCampaignStatus**](docs/Api/AdCampaignsApi.md#bulkupdateadcampaignstatus) | **POST** /v1/ads/campaigns/bulk-status | Pause or resume many campaigns
*AdCampaignsApi* | [**deleteAdCampaign**](docs/Api/AdCampaignsApi.md#deleteadcampaign) | **DELETE** /v1/ads/campaigns/{campaignId} | Delete a campaign
*AdCampaignsApi* | [**duplicateAdCampaign**](docs/Api/AdCampaignsApi.md#duplicateadcampaign) | **POST** /v1/ads/campaigns/{campaignId}/duplicate | Duplicate a campaign
*AdCampaignsApi* | [**getAdTree**](docs/Api/AdCampaignsApi.md#getadtree) | **GET** /v1/ads/tree | Get campaign tree
*AdCampaignsApi* | [**listAdCampaigns**](docs/Api/AdCampaignsApi.md#listadcampaigns) | **GET** /v1/ads/campaigns | List campaigns
*AdCampaignsApi* | [**updateAdCampaign**](docs/Api/AdCampaignsApi.md#updateadcampaign) | **PUT** /v1/ads/campaigns/{campaignId} | Update a campaign (budget)
*AdCampaignsApi* | [**updateAdCampaignStatus**](docs/Api/AdCampaignsApi.md#updateadcampaignstatus) | **PUT** /v1/ads/campaigns/{campaignId}/status | Pause or resume a campaign
*AdCampaignsApi* | [**updateAdSet**](docs/Api/AdCampaignsApi.md#updateadset) | **PUT** /v1/ads/ad-sets/{adSetId} | Update an ad set (budget and/or status)
*AdCampaignsApi* | [**updateAdSetStatus**](docs/Api/AdCampaignsApi.md#updateadsetstatus) | **PUT** /v1/ads/ad-sets/{adSetId}/status | Pause or resume a single ad set
*AdsApi* | [**boostPost**](docs/Api/AdsApi.md#boostpost) | **POST** /v1/ads/boost | Boost post as ad
*AdsApi* | [**createCtwaAd**](docs/Api/AdsApi.md#createctwaad) | **POST** /v1/ads/ctwa | Create Click-to-WhatsApp ad
*AdsApi* | [**createStandaloneAd**](docs/Api/AdsApi.md#createstandalonead) | **POST** /v1/ads/create | Create standalone ad
*AdsApi* | [**deleteAd**](docs/Api/AdsApi.md#deletead) | **DELETE** /v1/ads/{adId} | Cancel an ad
*AdsApi* | [**getAd**](docs/Api/AdsApi.md#getad) | **GET** /v1/ads/{adId} | Get ad details
*AdsApi* | [**getAdAnalytics**](docs/Api/AdsApi.md#getadanalytics) | **GET** /v1/ads/{adId}/analytics | Get ad analytics
*AdsApi* | [**getAdComments**](docs/Api/AdsApi.md#getadcomments) | **GET** /v1/ads/{adId}/comments | List comments on an ad
*AdsApi* | [**listAdAccounts**](docs/Api/AdsApi.md#listadaccounts) | **GET** /v1/ads/accounts | List ad accounts
*AdsApi* | [**listAds**](docs/Api/AdsApi.md#listads) | **GET** /v1/ads | List ads
*AdsApi* | [**listConversionDestinations**](docs/Api/AdsApi.md#listconversiondestinations) | **GET** /v1/accounts/{accountId}/conversion-destinations | List destinations for the Conversions API
*AdsApi* | [**searchAdInterests**](docs/Api/AdsApi.md#searchadinterests) | **GET** /v1/ads/interests | Search targeting interests
*AdsApi* | [**sendConversions**](docs/Api/AdsApi.md#sendconversions) | **POST** /v1/ads/conversions | Send conversion events to an ad platform
*AdsApi* | [**sendWhatsAppConversion**](docs/Api/AdsApi.md#sendwhatsappconversion) | **POST** /v1/whatsapp/conversions | Send WhatsApp conversion event
*AdsApi* | [**updateAd**](docs/Api/AdsApi.md#updatead) | **PUT** /v1/ads/{adId} | Update ad
*AnalyticsApi* | [**getAnalytics**](docs/Api/AnalyticsApi.md#getanalytics) | **GET** /v1/analytics | Get post analytics
*AnalyticsApi* | [**getBestTimeToPost**](docs/Api/AnalyticsApi.md#getbesttimetopost) | **GET** /v1/analytics/best-time | Get best times to post
*AnalyticsApi* | [**getContentDecay**](docs/Api/AnalyticsApi.md#getcontentdecay) | **GET** /v1/analytics/content-decay | Get content performance decay
*AnalyticsApi* | [**getDailyMetrics**](docs/Api/AnalyticsApi.md#getdailymetrics) | **GET** /v1/analytics/daily-metrics | Get daily aggregated metrics
*AnalyticsApi* | [**getFacebookPageInsights**](docs/Api/AnalyticsApi.md#getfacebookpageinsights) | **GET** /v1/analytics/facebook/page-insights | Get Facebook Page insights
*AnalyticsApi* | [**getFollowerStats**](docs/Api/AnalyticsApi.md#getfollowerstats) | **GET** /v1/accounts/follower-stats | Get follower stats
*AnalyticsApi* | [**getGoogleBusinessPerformance**](docs/Api/AnalyticsApi.md#getgooglebusinessperformance) | **GET** /v1/analytics/googlebusiness/performance | Get GBP performance metrics
*AnalyticsApi* | [**getGoogleBusinessSearchKeywords**](docs/Api/AnalyticsApi.md#getgooglebusinesssearchkeywords) | **GET** /v1/analytics/googlebusiness/search-keywords | Get GBP search keywords
*AnalyticsApi* | [**getInstagramAccountInsights**](docs/Api/AnalyticsApi.md#getinstagramaccountinsights) | **GET** /v1/analytics/instagram/account-insights | Get Instagram insights
*AnalyticsApi* | [**getInstagramDemographics**](docs/Api/AnalyticsApi.md#getinstagramdemographics) | **GET** /v1/analytics/instagram/demographics | Get Instagram demographics
*AnalyticsApi* | [**getInstagramFollowerHistory**](docs/Api/AnalyticsApi.md#getinstagramfollowerhistory) | **GET** /v1/analytics/instagram/follower-history | Get Instagram follower history
*AnalyticsApi* | [**getLinkedInAggregateAnalytics**](docs/Api/AnalyticsApi.md#getlinkedinaggregateanalytics) | **GET** /v1/accounts/{accountId}/linkedin-aggregate-analytics | Get LinkedIn aggregate stats
*AnalyticsApi* | [**getLinkedInOrgAggregateAnalytics**](docs/Api/AnalyticsApi.md#getlinkedinorgaggregateanalytics) | **GET** /v1/analytics/linkedin/org-aggregate-analytics | Get LinkedIn organization page aggregate analytics
*AnalyticsApi* | [**getLinkedInPostAnalytics**](docs/Api/AnalyticsApi.md#getlinkedinpostanalytics) | **GET** /v1/accounts/{accountId}/linkedin-post-analytics | Get LinkedIn post stats
*AnalyticsApi* | [**getLinkedInPostReactions**](docs/Api/AnalyticsApi.md#getlinkedinpostreactions) | **GET** /v1/accounts/{accountId}/linkedin-post-reactions | Get LinkedIn post reactions
*AnalyticsApi* | [**getPostTimeline**](docs/Api/AnalyticsApi.md#getposttimeline) | **GET** /v1/analytics/post-timeline | Get post analytics timeline
*AnalyticsApi* | [**getPostingFrequency**](docs/Api/AnalyticsApi.md#getpostingfrequency) | **GET** /v1/analytics/posting-frequency | Get frequency vs engagement
*AnalyticsApi* | [**getTikTokAccountInsights**](docs/Api/AnalyticsApi.md#gettiktokaccountinsights) | **GET** /v1/analytics/tiktok/account-insights | Get TikTok account-level insights
*AnalyticsApi* | [**getYouTubeChannelInsights**](docs/Api/AnalyticsApi.md#getyoutubechannelinsights) | **GET** /v1/analytics/youtube/channel-insights | Get YouTube channel-level insights
*AnalyticsApi* | [**getYouTubeDailyViews**](docs/Api/AnalyticsApi.md#getyoutubedailyviews) | **GET** /v1/analytics/youtube/daily-views | Get YouTube daily views
*AnalyticsApi* | [**getYouTubeDemographics**](docs/Api/AnalyticsApi.md#getyoutubedemographics) | **GET** /v1/analytics/youtube/demographics | Get YouTube demographics
*BroadcastsApi* | [**addBroadcastRecipients**](docs/Api/BroadcastsApi.md#addbroadcastrecipients) | **POST** /v1/broadcasts/{broadcastId}/recipients | Add recipients to a broadcast
*BroadcastsApi* | [**cancelBroadcast**](docs/Api/BroadcastsApi.md#cancelbroadcast) | **POST** /v1/broadcasts/{broadcastId}/cancel | Cancel broadcast
*BroadcastsApi* | [**createBroadcast**](docs/Api/BroadcastsApi.md#createbroadcast) | **POST** /v1/broadcasts | Create broadcast draft
*BroadcastsApi* | [**deleteBroadcast**](docs/Api/BroadcastsApi.md#deletebroadcast) | **DELETE** /v1/broadcasts/{broadcastId} | Delete broadcast
*BroadcastsApi* | [**getBroadcast**](docs/Api/BroadcastsApi.md#getbroadcast) | **GET** /v1/broadcasts/{broadcastId} | Get broadcast details
*BroadcastsApi* | [**listBroadcastRecipients**](docs/Api/BroadcastsApi.md#listbroadcastrecipients) | **GET** /v1/broadcasts/{broadcastId}/recipients | List broadcast recipients
*BroadcastsApi* | [**listBroadcasts**](docs/Api/BroadcastsApi.md#listbroadcasts) | **GET** /v1/broadcasts | List broadcasts
*BroadcastsApi* | [**scheduleBroadcast**](docs/Api/BroadcastsApi.md#schedulebroadcast) | **POST** /v1/broadcasts/{broadcastId}/schedule | Schedule broadcast for later
*BroadcastsApi* | [**sendBroadcast**](docs/Api/BroadcastsApi.md#sendbroadcast) | **POST** /v1/broadcasts/{broadcastId}/send | Send broadcast now
*BroadcastsApi* | [**updateBroadcast**](docs/Api/BroadcastsApi.md#updatebroadcast) | **PATCH** /v1/broadcasts/{broadcastId} | Update broadcast
*CommentAutomationsApi* | [**createCommentAutomation**](docs/Api/CommentAutomationsApi.md#createcommentautomation) | **POST** /v1/comment-automations | Create comment-to-DM automation
*CommentAutomationsApi* | [**deleteCommentAutomation**](docs/Api/CommentAutomationsApi.md#deletecommentautomation) | **DELETE** /v1/comment-automations/{automationId} | Delete automation
*CommentAutomationsApi* | [**getCommentAutomation**](docs/Api/CommentAutomationsApi.md#getcommentautomation) | **GET** /v1/comment-automations/{automationId} | Get automation details
*CommentAutomationsApi* | [**listCommentAutomationLogs**](docs/Api/CommentAutomationsApi.md#listcommentautomationlogs) | **GET** /v1/comment-automations/{automationId}/logs | List automation logs
*CommentAutomationsApi* | [**listCommentAutomations**](docs/Api/CommentAutomationsApi.md#listcommentautomations) | **GET** /v1/comment-automations | List comment-to-DM automations
*CommentAutomationsApi* | [**updateCommentAutomation**](docs/Api/CommentAutomationsApi.md#updatecommentautomation) | **PATCH** /v1/comment-automations/{automationId} | Update automation settings
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
*ConnectApi* | [**connectAds**](docs/Api/ConnectApi.md#connectads) | **GET** /v1/connect/{platform}/ads | Connect ads for a platform
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
*ConnectApi* | [**getYoutubePlaylists**](docs/Api/ConnectApi.md#getyoutubeplaylists) | **GET** /v1/accounts/{accountId}/youtube-playlists | List YouTube playlists
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
*ConnectApi* | [**updateYoutubeDefaultPlaylist**](docs/Api/ConnectApi.md#updateyoutubedefaultplaylist) | **PUT** /v1/accounts/{accountId}/youtube-playlists | Set default YouTube playlist
*ContactsApi* | [**bulkCreateContacts**](docs/Api/ContactsApi.md#bulkcreatecontacts) | **POST** /v1/contacts/bulk | Bulk create contacts
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /v1/contacts | Create contact
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /v1/contacts/{contactId} | Delete contact
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /v1/contacts/{contactId} | Get contact
*ContactsApi* | [**getContactChannels**](docs/Api/ContactsApi.md#getcontactchannels) | **GET** /v1/contacts/{contactId}/channels | List channels for a contact
*ContactsApi* | [**listContacts**](docs/Api/ContactsApi.md#listcontacts) | **GET** /v1/contacts | List contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PATCH** /v1/contacts/{contactId} | Update contact
*CustomFieldsApi* | [**clearContactFieldValue**](docs/Api/CustomFieldsApi.md#clearcontactfieldvalue) | **DELETE** /v1/contacts/{contactId}/fields/{slug} | Clear custom field value
*CustomFieldsApi* | [**createCustomField**](docs/Api/CustomFieldsApi.md#createcustomfield) | **POST** /v1/custom-fields | Create custom field
*CustomFieldsApi* | [**deleteCustomField**](docs/Api/CustomFieldsApi.md#deletecustomfield) | **DELETE** /v1/custom-fields/{fieldId} | Delete custom field
*CustomFieldsApi* | [**listCustomFields**](docs/Api/CustomFieldsApi.md#listcustomfields) | **GET** /v1/custom-fields | List custom field definitions
*CustomFieldsApi* | [**setContactFieldValue**](docs/Api/CustomFieldsApi.md#setcontactfieldvalue) | **PUT** /v1/contacts/{contactId}/fields/{slug} | Set custom field value
*CustomFieldsApi* | [**updateCustomField**](docs/Api/CustomFieldsApi.md#updatecustomfield) | **PATCH** /v1/custom-fields/{fieldId} | Update custom field
*DiscordApi* | [**getDiscordChannels**](docs/Api/DiscordApi.md#getdiscordchannels) | **GET** /v1/accounts/{accountId}/discord-channels | List Discord guild channels
*DiscordApi* | [**getDiscordSettings**](docs/Api/DiscordApi.md#getdiscordsettings) | **GET** /v1/accounts/{accountId}/discord-settings | Get Discord account settings
*DiscordApi* | [**updateDiscordSettings**](docs/Api/DiscordApi.md#updatediscordsettings) | **PATCH** /v1/accounts/{accountId}/discord-settings | Update Discord settings
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
*GMBPlaceActionsApi* | [**updateGoogleBusinessPlaceAction**](docs/Api/GMBPlaceActionsApi.md#updategooglebusinessplaceaction) | **PATCH** /v1/accounts/{accountId}/gmb-place-actions | Update action link
*GMBReviewsApi* | [**batchGetGoogleBusinessReviews**](docs/Api/GMBReviewsApi.md#batchgetgooglebusinessreviews) | **POST** /v1/accounts/{accountId}/gmb-reviews/batch | Batch get reviews
*GMBReviewsApi* | [**getGoogleBusinessReviews**](docs/Api/GMBReviewsApi.md#getgooglebusinessreviews) | **GET** /v1/accounts/{accountId}/gmb-reviews | Get reviews
*GMBServicesApi* | [**getGoogleBusinessServices**](docs/Api/GMBServicesApi.md#getgooglebusinessservices) | **GET** /v1/accounts/{accountId}/gmb-services | Get services
*GMBServicesApi* | [**updateGoogleBusinessServices**](docs/Api/GMBServicesApi.md#updategooglebusinessservices) | **PUT** /v1/accounts/{accountId}/gmb-services | Replace services
*InvitesApi* | [**createInviteToken**](docs/Api/InvitesApi.md#createinvitetoken) | **POST** /v1/invite/tokens | Create invite token
*LinkedInMentionsApi* | [**getLinkedInMentions**](docs/Api/LinkedInMentionsApi.md#getlinkedinmentions) | **GET** /v1/accounts/{accountId}/linkedin-mentions | Resolve LinkedIn mention
*LogsApi* | [**listLogs**](docs/Api/LogsApi.md#listlogs) | **GET** /v1/logs | List activity logs
*MediaApi* | [**getMediaPresignedUrl**](docs/Api/MediaApi.md#getmediapresignedurl) | **POST** /v1/media/presign | Get upload URL
*MessagesApi* | [**addMessageReaction**](docs/Api/MessagesApi.md#addmessagereaction) | **POST** /v1/inbox/conversations/{conversationId}/messages/{messageId}/reactions | Add reaction
*MessagesApi* | [**createInboxConversation**](docs/Api/MessagesApi.md#createinboxconversation) | **POST** /v1/inbox/conversations | Create conversation
*MessagesApi* | [**deleteInboxMessage**](docs/Api/MessagesApi.md#deleteinboxmessage) | **DELETE** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Delete message
*MessagesApi* | [**editInboxMessage**](docs/Api/MessagesApi.md#editinboxmessage) | **PATCH** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Edit message
*MessagesApi* | [**getInboxConversation**](docs/Api/MessagesApi.md#getinboxconversation) | **GET** /v1/inbox/conversations/{conversationId} | Get conversation
*MessagesApi* | [**getInboxConversationMessages**](docs/Api/MessagesApi.md#getinboxconversationmessages) | **GET** /v1/inbox/conversations/{conversationId}/messages | List messages
*MessagesApi* | [**listInboxConversations**](docs/Api/MessagesApi.md#listinboxconversations) | **GET** /v1/inbox/conversations | List conversations
*MessagesApi* | [**removeMessageReaction**](docs/Api/MessagesApi.md#removemessagereaction) | **DELETE** /v1/inbox/conversations/{conversationId}/messages/{messageId}/reactions | Remove reaction
*MessagesApi* | [**sendInboxMessage**](docs/Api/MessagesApi.md#sendinboxmessage) | **POST** /v1/inbox/conversations/{conversationId}/messages | Send message
*MessagesApi* | [**sendTypingIndicator**](docs/Api/MessagesApi.md#sendtypingindicator) | **POST** /v1/inbox/conversations/{conversationId}/typing | Send typing indicator
*MessagesApi* | [**updateInboxConversation**](docs/Api/MessagesApi.md#updateinboxconversation) | **PUT** /v1/inbox/conversations/{conversationId} | Update conversation status
*MessagesApi* | [**uploadMediaDirect**](docs/Api/MessagesApi.md#uploadmediadirect) | **POST** /v1/media/upload-direct | Upload media file
*PostsApi* | [**bulkUploadPosts**](docs/Api/PostsApi.md#bulkuploadposts) | **POST** /v1/posts/bulk-upload | Bulk upload from CSV
*PostsApi* | [**createPost**](docs/Api/PostsApi.md#createpost) | **POST** /v1/posts | Create post
*PostsApi* | [**deletePost**](docs/Api/PostsApi.md#deletepost) | **DELETE** /v1/posts/{postId} | Delete post
*PostsApi* | [**editPost**](docs/Api/PostsApi.md#editpost) | **POST** /v1/posts/{postId}/edit | Edit published post
*PostsApi* | [**getPost**](docs/Api/PostsApi.md#getpost) | **GET** /v1/posts/{postId} | Get post
*PostsApi* | [**listPosts**](docs/Api/PostsApi.md#listposts) | **GET** /v1/posts | List posts
*PostsApi* | [**retryPost**](docs/Api/PostsApi.md#retrypost) | **POST** /v1/posts/{postId}/retry | Retry failed post
*PostsApi* | [**unpublishPost**](docs/Api/PostsApi.md#unpublishpost) | **POST** /v1/posts/{postId}/unpublish | Unpublish post
*PostsApi* | [**updatePost**](docs/Api/PostsApi.md#updatepost) | **PUT** /v1/posts/{postId} | Update post
*PostsApi* | [**updatePostMetadata**](docs/Api/PostsApi.md#updatepostmetadata) | **POST** /v1/posts/{postId}/update-metadata | Update post metadata
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
*SequencesApi* | [**activateSequence**](docs/Api/SequencesApi.md#activatesequence) | **POST** /v1/sequences/{sequenceId}/activate | Activate sequence
*SequencesApi* | [**createSequence**](docs/Api/SequencesApi.md#createsequence) | **POST** /v1/sequences | Create sequence
*SequencesApi* | [**deleteSequence**](docs/Api/SequencesApi.md#deletesequence) | **DELETE** /v1/sequences/{sequenceId} | Delete sequence
*SequencesApi* | [**enrollContacts**](docs/Api/SequencesApi.md#enrollcontacts) | **POST** /v1/sequences/{sequenceId}/enroll | Enroll contacts in a sequence
*SequencesApi* | [**getSequence**](docs/Api/SequencesApi.md#getsequence) | **GET** /v1/sequences/{sequenceId} | Get sequence with steps
*SequencesApi* | [**listSequenceEnrollments**](docs/Api/SequencesApi.md#listsequenceenrollments) | **GET** /v1/sequences/{sequenceId}/enrollments | List enrollments for a sequence
*SequencesApi* | [**listSequences**](docs/Api/SequencesApi.md#listsequences) | **GET** /v1/sequences | List sequences
*SequencesApi* | [**pauseSequence**](docs/Api/SequencesApi.md#pausesequence) | **POST** /v1/sequences/{sequenceId}/pause | Pause sequence
*SequencesApi* | [**unenrollContact**](docs/Api/SequencesApi.md#unenrollcontact) | **DELETE** /v1/sequences/{sequenceId}/enroll/{contactId} | Unenroll contact
*SequencesApi* | [**updateSequence**](docs/Api/SequencesApi.md#updatesequence) | **PATCH** /v1/sequences/{sequenceId} | Update sequence
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
*ValidateApi* | [**validatePostLength**](docs/Api/ValidateApi.md#validatepostlength) | **POST** /v1/tools/validate/post-length | Validate character count
*ValidateApi* | [**validateSubreddit**](docs/Api/ValidateApi.md#validatesubreddit) | **GET** /v1/tools/validate/subreddit | Check subreddit existence
*WebhooksApi* | [**createWebhookSettings**](docs/Api/WebhooksApi.md#createwebhooksettings) | **POST** /v1/webhooks/settings | Create webhook
*WebhooksApi* | [**deleteWebhookSettings**](docs/Api/WebhooksApi.md#deletewebhooksettings) | **DELETE** /v1/webhooks/settings | Delete webhook
*WebhooksApi* | [**getWebhookSettings**](docs/Api/WebhooksApi.md#getwebhooksettings) | **GET** /v1/webhooks/settings | List webhooks
*WebhooksApi* | [**testWebhook**](docs/Api/WebhooksApi.md#testwebhook) | **POST** /v1/webhooks/test | Send test webhook
*WebhooksApi* | [**updateWebhookSettings**](docs/Api/WebhooksApi.md#updatewebhooksettings) | **PUT** /v1/webhooks/settings | Update webhook
*WhatsAppApi* | [**addWhatsAppGroupParticipants**](docs/Api/WhatsAppApi.md#addwhatsappgroupparticipants) | **POST** /v1/whatsapp/wa-groups/{groupId}/participants | Add participants
*WhatsAppApi* | [**approveWhatsAppGroupJoinRequests**](docs/Api/WhatsAppApi.md#approvewhatsappgroupjoinrequests) | **POST** /v1/whatsapp/wa-groups/{groupId}/join-requests | Approve join requests
*WhatsAppApi* | [**createWhatsAppGroupChat**](docs/Api/WhatsAppApi.md#createwhatsappgroupchat) | **POST** /v1/whatsapp/wa-groups | Create group
*WhatsAppApi* | [**createWhatsAppGroupInviteLink**](docs/Api/WhatsAppApi.md#createwhatsappgroupinvitelink) | **POST** /v1/whatsapp/wa-groups/{groupId}/invite-link | Create invite link
*WhatsAppApi* | [**createWhatsAppTemplate**](docs/Api/WhatsAppApi.md#createwhatsapptemplate) | **POST** /v1/whatsapp/templates | Create template
*WhatsAppApi* | [**deleteWhatsAppGroupChat**](docs/Api/WhatsAppApi.md#deletewhatsappgroupchat) | **DELETE** /v1/whatsapp/wa-groups/{groupId} | Delete group
*WhatsAppApi* | [**deleteWhatsAppTemplate**](docs/Api/WhatsAppApi.md#deletewhatsapptemplate) | **DELETE** /v1/whatsapp/templates/{templateName} | Delete template
*WhatsAppApi* | [**getWhatsAppBusinessProfile**](docs/Api/WhatsAppApi.md#getwhatsappbusinessprofile) | **GET** /v1/whatsapp/business-profile | Get business profile
*WhatsAppApi* | [**getWhatsAppDisplayName**](docs/Api/WhatsAppApi.md#getwhatsappdisplayname) | **GET** /v1/whatsapp/business-profile/display-name | Get display name status
*WhatsAppApi* | [**getWhatsAppGroupChat**](docs/Api/WhatsAppApi.md#getwhatsappgroupchat) | **GET** /v1/whatsapp/wa-groups/{groupId} | Get group info
*WhatsAppApi* | [**getWhatsAppTemplate**](docs/Api/WhatsAppApi.md#getwhatsapptemplate) | **GET** /v1/whatsapp/templates/{templateName} | Get template
*WhatsAppApi* | [**getWhatsAppTemplates**](docs/Api/WhatsAppApi.md#getwhatsapptemplates) | **GET** /v1/whatsapp/templates | List templates
*WhatsAppApi* | [**listWhatsAppGroupChats**](docs/Api/WhatsAppApi.md#listwhatsappgroupchats) | **GET** /v1/whatsapp/wa-groups | List active groups
*WhatsAppApi* | [**listWhatsAppGroupJoinRequests**](docs/Api/WhatsAppApi.md#listwhatsappgroupjoinrequests) | **GET** /v1/whatsapp/wa-groups/{groupId}/join-requests | List join requests
*WhatsAppApi* | [**rejectWhatsAppGroupJoinRequests**](docs/Api/WhatsAppApi.md#rejectwhatsappgroupjoinrequests) | **DELETE** /v1/whatsapp/wa-groups/{groupId}/join-requests | Reject join requests
*WhatsAppApi* | [**removeWhatsAppGroupParticipants**](docs/Api/WhatsAppApi.md#removewhatsappgroupparticipants) | **DELETE** /v1/whatsapp/wa-groups/{groupId}/participants | Remove participants
*WhatsAppApi* | [**sendWhatsAppConversion**](docs/Api/WhatsAppApi.md#sendwhatsappconversion) | **POST** /v1/whatsapp/conversions | Send WhatsApp conversion event
*WhatsAppApi* | [**updateWhatsAppBusinessProfile**](docs/Api/WhatsAppApi.md#updatewhatsappbusinessprofile) | **POST** /v1/whatsapp/business-profile | Update business profile
*WhatsAppApi* | [**updateWhatsAppDisplayName**](docs/Api/WhatsAppApi.md#updatewhatsappdisplayname) | **POST** /v1/whatsapp/business-profile/display-name | Request display name change
*WhatsAppApi* | [**updateWhatsAppGroupChat**](docs/Api/WhatsAppApi.md#updatewhatsappgroupchat) | **POST** /v1/whatsapp/wa-groups/{groupId} | Update group settings
*WhatsAppApi* | [**updateWhatsAppTemplate**](docs/Api/WhatsAppApi.md#updatewhatsapptemplate) | **PATCH** /v1/whatsapp/templates/{templateName} | Update template
*WhatsAppApi* | [**uploadWhatsAppProfilePhoto**](docs/Api/WhatsAppApi.md#uploadwhatsappprofilephoto) | **POST** /v1/whatsapp/business-profile/photo | Upload profile picture
*WhatsAppFlowsApi* | [**createWhatsAppFlow**](docs/Api/WhatsAppFlowsApi.md#createwhatsappflow) | **POST** /v1/whatsapp/flows | Create flow
*WhatsAppFlowsApi* | [**deleteWhatsAppFlow**](docs/Api/WhatsAppFlowsApi.md#deletewhatsappflow) | **DELETE** /v1/whatsapp/flows/{flowId} | Delete flow
*WhatsAppFlowsApi* | [**deprecateWhatsAppFlow**](docs/Api/WhatsAppFlowsApi.md#deprecatewhatsappflow) | **POST** /v1/whatsapp/flows/{flowId}/deprecate | Deprecate flow
*WhatsAppFlowsApi* | [**getWhatsAppFlow**](docs/Api/WhatsAppFlowsApi.md#getwhatsappflow) | **GET** /v1/whatsapp/flows/{flowId} | Get flow
*WhatsAppFlowsApi* | [**getWhatsAppFlowJson**](docs/Api/WhatsAppFlowsApi.md#getwhatsappflowjson) | **GET** /v1/whatsapp/flows/{flowId}/json | Get flow JSON asset
*WhatsAppFlowsApi* | [**listWhatsAppFlows**](docs/Api/WhatsAppFlowsApi.md#listwhatsappflows) | **GET** /v1/whatsapp/flows | List flows
*WhatsAppFlowsApi* | [**publishWhatsAppFlow**](docs/Api/WhatsAppFlowsApi.md#publishwhatsappflow) | **POST** /v1/whatsapp/flows/{flowId}/publish | Publish flow
*WhatsAppFlowsApi* | [**sendWhatsAppFlowMessage**](docs/Api/WhatsAppFlowsApi.md#sendwhatsappflowmessage) | **POST** /v1/whatsapp/flows/send | Send flow message
*WhatsAppFlowsApi* | [**updateWhatsAppFlow**](docs/Api/WhatsAppFlowsApi.md#updatewhatsappflow) | **PATCH** /v1/whatsapp/flows/{flowId} | Update flow
*WhatsAppFlowsApi* | [**uploadWhatsAppFlowJson**](docs/Api/WhatsAppFlowsApi.md#uploadwhatsappflowjson) | **PUT** /v1/whatsapp/flows/{flowId}/json | Upload flow JSON
*WhatsAppPhoneNumbersApi* | [**getWhatsAppPhoneNumber**](docs/Api/WhatsAppPhoneNumbersApi.md#getwhatsappphonenumber) | **GET** /v1/whatsapp/phone-numbers/{phoneNumberId} | Get phone number
*WhatsAppPhoneNumbersApi* | [**getWhatsAppPhoneNumbers**](docs/Api/WhatsAppPhoneNumbersApi.md#getwhatsappphonenumbers) | **GET** /v1/whatsapp/phone-numbers | List phone numbers
*WhatsAppPhoneNumbersApi* | [**purchaseWhatsAppPhoneNumber**](docs/Api/WhatsAppPhoneNumbersApi.md#purchasewhatsappphonenumber) | **POST** /v1/whatsapp/phone-numbers/purchase | Purchase phone number
*WhatsAppPhoneNumbersApi* | [**releaseWhatsAppPhoneNumber**](docs/Api/WhatsAppPhoneNumbersApi.md#releasewhatsappphonenumber) | **DELETE** /v1/whatsapp/phone-numbers/{phoneNumberId} | Release phone number

## Models

- [AccountGetResponse](docs/Model/AccountGetResponse.md)
- [AccountWithFollowerStats](docs/Model/AccountWithFollowerStats.md)
- [AccountWithFollowerStatsAllOfAccountStats](docs/Model/AccountWithFollowerStatsAllOfAccountStats.md)
- [AccountsListResponse](docs/Model/AccountsListResponse.md)
- [ActivateSequence200Response](docs/Model/ActivateSequence200Response.md)
- [Ad](docs/Model/Ad.md)
- [AdBudget](docs/Model/AdBudget.md)
- [AdCampaign](docs/Model/AdCampaign.md)
- [AdCampaignBudget](docs/Model/AdCampaignBudget.md)
- [AdCampaignCampaignBudget](docs/Model/AdCampaignCampaignBudget.md)
- [AdCreative](docs/Model/AdCreative.md)
- [AdMetrics](docs/Model/AdMetrics.md)
- [AdPromotedObject](docs/Model/AdPromotedObject.md)
- [AdSchedule](docs/Model/AdSchedule.md)
- [AdStatus](docs/Model/AdStatus.md)
- [AdTreeAdSet](docs/Model/AdTreeAdSet.md)
- [AdTreeAdSetAdSetBudget](docs/Model/AdTreeAdSetAdSetBudget.md)
- [AdTreeAdSetBudget](docs/Model/AdTreeAdSetBudget.md)
- [AdTreeAdSetPromotedObject](docs/Model/AdTreeAdSetPromotedObject.md)
- [AdTreeCampaign](docs/Model/AdTreeCampaign.md)
- [AdTreeCampaignBudget](docs/Model/AdTreeCampaignBudget.md)
- [AdTreeCampaignCampaignBudget](docs/Model/AdTreeCampaignCampaignBudget.md)
- [AdTreeCampaignPromotedObject](docs/Model/AdTreeCampaignPromotedObject.md)
- [AddBroadcastRecipients200Response](docs/Model/AddBroadcastRecipients200Response.md)
- [AddBroadcastRecipientsRequest](docs/Model/AddBroadcastRecipientsRequest.md)
- [AddMessageReactionRequest](docs/Model/AddMessageReactionRequest.md)
- [AddUsersToAdAudience200Response](docs/Model/AddUsersToAdAudience200Response.md)
- [AddUsersToAdAudienceRequest](docs/Model/AddUsersToAdAudienceRequest.md)
- [AddUsersToAdAudienceRequestUsersInner](docs/Model/AddUsersToAdAudienceRequestUsersInner.md)
- [AddWhatsAppGroupParticipantsRequest](docs/Model/AddWhatsAppGroupParticipantsRequest.md)
- [AnalyticsListResponse](docs/Model/AnalyticsListResponse.md)
- [AnalyticsListResponsePostsInner](docs/Model/AnalyticsListResponsePostsInner.md)
- [AnalyticsOverview](docs/Model/AnalyticsOverview.md)
- [AnalyticsOverviewDataStaleness](docs/Model/AnalyticsOverviewDataStaleness.md)
- [AnalyticsSinglePostResponse](docs/Model/AnalyticsSinglePostResponse.md)
- [AnalyticsSinglePostResponseMediaItemsInner](docs/Model/AnalyticsSinglePostResponseMediaItemsInner.md)
- [ApiKey](docs/Model/ApiKey.md)
- [ApiKeyProfileIdsInner](docs/Model/ApiKeyProfileIdsInner.md)
- [ApproveWhatsAppGroupJoinRequestsRequest](docs/Model/ApproveWhatsAppGroupJoinRequestsRequest.md)
- [BatchGetGoogleBusinessReviews200Response](docs/Model/BatchGetGoogleBusinessReviews200Response.md)
- [BatchGetGoogleBusinessReviews200ResponseLocationReviewsInner](docs/Model/BatchGetGoogleBusinessReviews200ResponseLocationReviewsInner.md)
- [BatchGetGoogleBusinessReviewsRequest](docs/Model/BatchGetGoogleBusinessReviewsRequest.md)
- [BlueskyPlatformData](docs/Model/BlueskyPlatformData.md)
- [BookmarkPost200Response](docs/Model/BookmarkPost200Response.md)
- [BookmarkPostRequest](docs/Model/BookmarkPostRequest.md)
- [BoostPostRequest](docs/Model/BoostPostRequest.md)
- [BoostPostRequestBudget](docs/Model/BoostPostRequestBudget.md)
- [BoostPostRequestSchedule](docs/Model/BoostPostRequestSchedule.md)
- [BoostPostRequestTargeting](docs/Model/BoostPostRequestTargeting.md)
- [BoostPostRequestTracking](docs/Model/BoostPostRequestTracking.md)
- [BulkCreateContacts200Response](docs/Model/BulkCreateContacts200Response.md)
- [BulkCreateContactsRequest](docs/Model/BulkCreateContactsRequest.md)
- [BulkCreateContactsRequestContactsInner](docs/Model/BulkCreateContactsRequestContactsInner.md)
- [BulkUpdateAdCampaignStatus200Response](docs/Model/BulkUpdateAdCampaignStatus200Response.md)
- [BulkUpdateAdCampaignStatus200ResponseResultsInner](docs/Model/BulkUpdateAdCampaignStatus200ResponseResultsInner.md)
- [BulkUpdateAdCampaignStatus200ResponseTotals](docs/Model/BulkUpdateAdCampaignStatus200ResponseTotals.md)
- [BulkUpdateAdCampaignStatusRequest](docs/Model/BulkUpdateAdCampaignStatusRequest.md)
- [BulkUpdateAdCampaignStatusRequestCampaignsInner](docs/Model/BulkUpdateAdCampaignStatusRequestCampaignsInner.md)
- [BulkUploadPosts200Response](docs/Model/BulkUploadPosts200Response.md)
- [BulkUploadPosts200ResponseErrorsInner](docs/Model/BulkUploadPosts200ResponseErrorsInner.md)
- [BulkUploadPosts429Response](docs/Model/BulkUploadPosts429Response.md)
- [CancelBroadcast200Response](docs/Model/CancelBroadcast200Response.md)
- [CancelBroadcast200ResponseBroadcast](docs/Model/CancelBroadcast200ResponseBroadcast.md)
- [CompleteTelegramConnect200Response](docs/Model/CompleteTelegramConnect200Response.md)
- [ConnectAds200Response](docs/Model/ConnectAds200Response.md)
- [ConnectAds200ResponseOneOf](docs/Model/ConnectAds200ResponseOneOf.md)
- [ConnectAds200ResponseOneOf1](docs/Model/ConnectAds200ResponseOneOf1.md)
- [ConnectBlueskyCredentials200Response](docs/Model/ConnectBlueskyCredentials200Response.md)
- [ConnectBlueskyCredentialsRequest](docs/Model/ConnectBlueskyCredentialsRequest.md)
- [ConnectWhatsAppCredentials200Response](docs/Model/ConnectWhatsAppCredentials200Response.md)
- [ConnectWhatsAppCredentials200ResponseAccount](docs/Model/ConnectWhatsAppCredentials200ResponseAccount.md)
- [ConnectWhatsAppCredentialsRequest](docs/Model/ConnectWhatsAppCredentialsRequest.md)
- [Connected](docs/Model/Connected.md)
- [ConnectedAccount](docs/Model/ConnectedAccount.md)
- [ConversionEvent](docs/Model/ConversionEvent.md)
- [ConversionEventItemsInner](docs/Model/ConversionEventItemsInner.md)
- [ConversionEventUser](docs/Model/ConversionEventUser.md)
- [ConversionEventUserClickIds](docs/Model/ConversionEventUserClickIds.md)
- [CreateAccountGroup201Response](docs/Model/CreateAccountGroup201Response.md)
- [CreateAccountGroupRequest](docs/Model/CreateAccountGroupRequest.md)
- [CreateAdAudience201Response](docs/Model/CreateAdAudience201Response.md)
- [CreateAdAudienceRequest](docs/Model/CreateAdAudienceRequest.md)
- [CreateApiKey201Response](docs/Model/CreateApiKey201Response.md)
- [CreateApiKeyRequest](docs/Model/CreateApiKeyRequest.md)
- [CreateBroadcast200Response](docs/Model/CreateBroadcast200Response.md)
- [CreateBroadcast200ResponseBroadcast](docs/Model/CreateBroadcast200ResponseBroadcast.md)
- [CreateBroadcastRequest](docs/Model/CreateBroadcastRequest.md)
- [CreateBroadcastRequestMessage](docs/Model/CreateBroadcastRequestMessage.md)
- [CreateBroadcastRequestMessageAttachmentsInner](docs/Model/CreateBroadcastRequestMessageAttachmentsInner.md)
- [CreateBroadcastRequestSegmentFilters](docs/Model/CreateBroadcastRequestSegmentFilters.md)
- [CreateBroadcastRequestTemplate](docs/Model/CreateBroadcastRequestTemplate.md)
- [CreateCommentAutomation200Response](docs/Model/CreateCommentAutomation200Response.md)
- [CreateCommentAutomation200ResponseAutomation](docs/Model/CreateCommentAutomation200ResponseAutomation.md)
- [CreateCommentAutomation200ResponseAutomationStats](docs/Model/CreateCommentAutomation200ResponseAutomationStats.md)
- [CreateCommentAutomationRequest](docs/Model/CreateCommentAutomationRequest.md)
- [CreateContact200Response](docs/Model/CreateContact200Response.md)
- [CreateContact200ResponseChannel](docs/Model/CreateContact200ResponseChannel.md)
- [CreateContact200ResponseContact](docs/Model/CreateContact200ResponseContact.md)
- [CreateContactRequest](docs/Model/CreateContactRequest.md)
- [CreateCtwaAd201Response](docs/Model/CreateCtwaAd201Response.md)
- [CreateCtwaAdRequest](docs/Model/CreateCtwaAdRequest.md)
- [CreateCtwaAdRequestInterestsInner](docs/Model/CreateCtwaAdRequestInterestsInner.md)
- [CreateCtwaAdRequestVideo](docs/Model/CreateCtwaAdRequestVideo.md)
- [CreateCustomField200Response](docs/Model/CreateCustomField200Response.md)
- [CreateCustomFieldRequest](docs/Model/CreateCustomFieldRequest.md)
- [CreateGoogleBusinessMedia200Response](docs/Model/CreateGoogleBusinessMedia200Response.md)
- [CreateGoogleBusinessMediaRequest](docs/Model/CreateGoogleBusinessMediaRequest.md)
- [CreateGoogleBusinessPlaceAction200Response](docs/Model/CreateGoogleBusinessPlaceAction200Response.md)
- [CreateGoogleBusinessPlaceActionRequest](docs/Model/CreateGoogleBusinessPlaceActionRequest.md)
- [CreateInboxConversation201Response](docs/Model/CreateInboxConversation201Response.md)
- [CreateInboxConversation201ResponseData](docs/Model/CreateInboxConversation201ResponseData.md)
- [CreateInboxConversation400Response](docs/Model/CreateInboxConversation400Response.md)
- [CreateInboxConversation422Response](docs/Model/CreateInboxConversation422Response.md)
- [CreateInboxConversationRequest](docs/Model/CreateInboxConversationRequest.md)
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
- [CreateSequence200Response](docs/Model/CreateSequence200Response.md)
- [CreateSequence200ResponseSequence](docs/Model/CreateSequence200ResponseSequence.md)
- [CreateSequenceRequest](docs/Model/CreateSequenceRequest.md)
- [CreateSequenceRequestStepsInner](docs/Model/CreateSequenceRequestStepsInner.md)
- [CreateSequenceRequestStepsInnerTemplate](docs/Model/CreateSequenceRequestStepsInnerTemplate.md)
- [CreateSequenceRequestStepsInnerTemplateVariableMappingValue](docs/Model/CreateSequenceRequestStepsInnerTemplateVariableMappingValue.md)
- [CreateStandaloneAd201Response](docs/Model/CreateStandaloneAd201Response.md)
- [CreateStandaloneAd201ResponseOneOf](docs/Model/CreateStandaloneAd201ResponseOneOf.md)
- [CreateStandaloneAd201ResponseOneOf1](docs/Model/CreateStandaloneAd201ResponseOneOf1.md)
- [CreateStandaloneAdRequest](docs/Model/CreateStandaloneAdRequest.md)
- [CreateStandaloneAdRequestCreativesInner](docs/Model/CreateStandaloneAdRequestCreativesInner.md)
- [CreateStandaloneAdRequestCreativesInnerVideo](docs/Model/CreateStandaloneAdRequestCreativesInnerVideo.md)
- [CreateStandaloneAdRequestImages](docs/Model/CreateStandaloneAdRequestImages.md)
- [CreateStandaloneAdRequestVideo](docs/Model/CreateStandaloneAdRequestVideo.md)
- [CreateWebhookSettingsRequest](docs/Model/CreateWebhookSettingsRequest.md)
- [CreateWhatsAppFlow200Response](docs/Model/CreateWhatsAppFlow200Response.md)
- [CreateWhatsAppFlow200ResponseFlow](docs/Model/CreateWhatsAppFlow200ResponseFlow.md)
- [CreateWhatsAppFlowRequest](docs/Model/CreateWhatsAppFlowRequest.md)
- [CreateWhatsAppGroupChat201Response](docs/Model/CreateWhatsAppGroupChat201Response.md)
- [CreateWhatsAppGroupChat201ResponseGroup](docs/Model/CreateWhatsAppGroupChat201ResponseGroup.md)
- [CreateWhatsAppGroupChatRequest](docs/Model/CreateWhatsAppGroupChatRequest.md)
- [CreateWhatsAppGroupInviteLink200Response](docs/Model/CreateWhatsAppGroupInviteLink200Response.md)
- [CreateWhatsAppTemplate200Response](docs/Model/CreateWhatsAppTemplate200Response.md)
- [CreateWhatsAppTemplate200ResponseTemplate](docs/Model/CreateWhatsAppTemplate200ResponseTemplate.md)
- [CreateWhatsAppTemplateRequest](docs/Model/CreateWhatsAppTemplateRequest.md)
- [CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInner](docs/Model/CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInner.md)
- [CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInnerUrl](docs/Model/CreateWhatsAppTemplateRequestLibraryTemplateButtonInputsInnerUrl.md)
- [DeleteAccountGroup200Response](docs/Model/DeleteAccountGroup200Response.md)
- [DeleteAdCampaign200Response](docs/Model/DeleteAdCampaign200Response.md)
- [DeleteAdCampaignRequest](docs/Model/DeleteAdCampaignRequest.md)
- [DeleteGoogleBusinessMedia200Response](docs/Model/DeleteGoogleBusinessMedia200Response.md)
- [DeleteGoogleBusinessPlaceAction200Response](docs/Model/DeleteGoogleBusinessPlaceAction200Response.md)
- [DeleteInboxComment200Response](docs/Model/DeleteInboxComment200Response.md)
- [DeleteInboxReviewReply200Response](docs/Model/DeleteInboxReviewReply200Response.md)
- [DeleteInboxReviewReplyRequest](docs/Model/DeleteInboxReviewReplyRequest.md)
- [DeleteQueueSlot200Response](docs/Model/DeleteQueueSlot200Response.md)
- [DiscordPlatformData](docs/Model/DiscordPlatformData.md)
- [DiscordPlatformDataEmbedsInner](docs/Model/DiscordPlatformDataEmbedsInner.md)
- [DiscordPlatformDataEmbedsInnerAuthor](docs/Model/DiscordPlatformDataEmbedsInnerAuthor.md)
- [DiscordPlatformDataEmbedsInnerFieldsInner](docs/Model/DiscordPlatformDataEmbedsInnerFieldsInner.md)
- [DiscordPlatformDataEmbedsInnerFooter](docs/Model/DiscordPlatformDataEmbedsInnerFooter.md)
- [DiscordPlatformDataEmbedsInnerImage](docs/Model/DiscordPlatformDataEmbedsInnerImage.md)
- [DiscordPlatformDataPoll](docs/Model/DiscordPlatformDataPoll.md)
- [DiscordPlatformDataPollAnswersInner](docs/Model/DiscordPlatformDataPollAnswersInner.md)
- [DiscordPlatformDataPollAnswersInnerPollMedia](docs/Model/DiscordPlatformDataPollAnswersInnerPollMedia.md)
- [DiscordPlatformDataPollQuestion](docs/Model/DiscordPlatformDataPollQuestion.md)
- [DiscordPlatformDataThreadFromMessage](docs/Model/DiscordPlatformDataThreadFromMessage.md)
- [DuplicateAdCampaign200Response](docs/Model/DuplicateAdCampaign200Response.md)
- [DuplicateAdCampaignRequest](docs/Model/DuplicateAdCampaignRequest.md)
- [EditInboxMessage200Response](docs/Model/EditInboxMessage200Response.md)
- [EditInboxMessage200ResponseData](docs/Model/EditInboxMessage200ResponseData.md)
- [EditInboxMessageRequest](docs/Model/EditInboxMessageRequest.md)
- [EditInboxMessageRequestReplyMarkup](docs/Model/EditInboxMessageRequestReplyMarkup.md)
- [EditInboxMessageRequestReplyMarkupKeyboardInnerInner](docs/Model/EditInboxMessageRequestReplyMarkupKeyboardInnerInner.md)
- [EditPost200Response](docs/Model/EditPost200Response.md)
- [EditPostRequest](docs/Model/EditPostRequest.md)
- [EnrollContacts200Response](docs/Model/EnrollContacts200Response.md)
- [EnrollContactsRequest](docs/Model/EnrollContactsRequest.md)
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
- [GeoRestriction](docs/Model/GeoRestriction.md)
- [GetAccountHealth200Response](docs/Model/GetAccountHealth200Response.md)
- [GetAccountHealth200ResponsePermissions](docs/Model/GetAccountHealth200ResponsePermissions.md)
- [GetAccountHealth200ResponsePermissionsPostingInner](docs/Model/GetAccountHealth200ResponsePermissionsPostingInner.md)
- [GetAccountHealth200ResponseTokenStatus](docs/Model/GetAccountHealth200ResponseTokenStatus.md)
- [GetAd200Response](docs/Model/GetAd200Response.md)
- [GetAdAnalytics200Response](docs/Model/GetAdAnalytics200Response.md)
- [GetAdAnalytics200ResponseAd](docs/Model/GetAdAnalytics200ResponseAd.md)
- [GetAdAnalytics200ResponseAnalytics](docs/Model/GetAdAnalytics200ResponseAnalytics.md)
- [GetAdAnalytics200ResponseAnalyticsDailyInner](docs/Model/GetAdAnalytics200ResponseAnalyticsDailyInner.md)
- [GetAdAudience200Response](docs/Model/GetAdAudience200Response.md)
- [GetAdComments200Response](docs/Model/GetAdComments200Response.md)
- [GetAdComments200ResponseMeta](docs/Model/GetAdComments200ResponseMeta.md)
- [GetAdComments200ResponsePagination](docs/Model/GetAdComments200ResponsePagination.md)
- [GetAdTree200Response](docs/Model/GetAdTree200Response.md)
- [GetAllAccountsHealth200Response](docs/Model/GetAllAccountsHealth200Response.md)
- [GetAllAccountsHealth200ResponseAccountsInner](docs/Model/GetAllAccountsHealth200ResponseAccountsInner.md)
- [GetAllAccountsHealth200ResponseSummary](docs/Model/GetAllAccountsHealth200ResponseSummary.md)
- [GetAnalytics200Response](docs/Model/GetAnalytics200Response.md)
- [GetAnalytics400Response](docs/Model/GetAnalytics400Response.md)
- [GetAnalytics402Response](docs/Model/GetAnalytics402Response.md)
- [GetBestTimeToPost200Response](docs/Model/GetBestTimeToPost200Response.md)
- [GetBestTimeToPost200ResponseSlotsInner](docs/Model/GetBestTimeToPost200ResponseSlotsInner.md)
- [GetBestTimeToPost403Response](docs/Model/GetBestTimeToPost403Response.md)
- [GetBroadcast200Response](docs/Model/GetBroadcast200Response.md)
- [GetBroadcast200ResponseBroadcast](docs/Model/GetBroadcast200ResponseBroadcast.md)
- [GetBroadcast200ResponseBroadcastMessage](docs/Model/GetBroadcast200ResponseBroadcastMessage.md)
- [GetBroadcast200ResponseBroadcastTemplate](docs/Model/GetBroadcast200ResponseBroadcastTemplate.md)
- [GetCommentAutomation200Response](docs/Model/GetCommentAutomation200Response.md)
- [GetCommentAutomation200ResponseAutomation](docs/Model/GetCommentAutomation200ResponseAutomation.md)
- [GetCommentAutomation200ResponseLogsInner](docs/Model/GetCommentAutomation200ResponseLogsInner.md)
- [GetConnectUrl200Response](docs/Model/GetConnectUrl200Response.md)
- [GetContact200Response](docs/Model/GetContact200Response.md)
- [GetContact200ResponseChannelsInner](docs/Model/GetContact200ResponseChannelsInner.md)
- [GetContact200ResponseContact](docs/Model/GetContact200ResponseContact.md)
- [GetContactChannels200Response](docs/Model/GetContactChannels200Response.md)
- [GetContactChannels200ResponseChannelsInner](docs/Model/GetContactChannels200ResponseChannelsInner.md)
- [GetContentDecay200Response](docs/Model/GetContentDecay200Response.md)
- [GetContentDecay200ResponseBucketsInner](docs/Model/GetContentDecay200ResponseBucketsInner.md)
- [GetDailyMetrics200Response](docs/Model/GetDailyMetrics200Response.md)
- [GetDailyMetrics200ResponseDailyDataInner](docs/Model/GetDailyMetrics200ResponseDailyDataInner.md)
- [GetDailyMetrics200ResponseDailyDataInnerMetrics](docs/Model/GetDailyMetrics200ResponseDailyDataInnerMetrics.md)
- [GetDailyMetrics200ResponsePlatformBreakdownInner](docs/Model/GetDailyMetrics200ResponsePlatformBreakdownInner.md)
- [GetDiscordChannels200Response](docs/Model/GetDiscordChannels200Response.md)
- [GetDiscordChannels200ResponseChannelsInner](docs/Model/GetDiscordChannels200ResponseChannelsInner.md)
- [GetDiscordSettings200Response](docs/Model/GetDiscordSettings200Response.md)
- [GetDiscordSettings200ResponseAccount](docs/Model/GetDiscordSettings200ResponseAccount.md)
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
- [GetGoogleBusinessPerformance200Response](docs/Model/GetGoogleBusinessPerformance200Response.md)
- [GetGoogleBusinessPerformance200ResponseDateRange](docs/Model/GetGoogleBusinessPerformance200ResponseDateRange.md)
- [GetGoogleBusinessPerformance200ResponseMetricsValue](docs/Model/GetGoogleBusinessPerformance200ResponseMetricsValue.md)
- [GetGoogleBusinessPerformance200ResponseMetricsValueValuesInner](docs/Model/GetGoogleBusinessPerformance200ResponseMetricsValueValuesInner.md)
- [GetGoogleBusinessPerformance400Response](docs/Model/GetGoogleBusinessPerformance400Response.md)
- [GetGoogleBusinessReviews200Response](docs/Model/GetGoogleBusinessReviews200Response.md)
- [GetGoogleBusinessReviews200ResponseReviewsInner](docs/Model/GetGoogleBusinessReviews200ResponseReviewsInner.md)
- [GetGoogleBusinessReviews200ResponseReviewsInnerReviewReply](docs/Model/GetGoogleBusinessReviews200ResponseReviewsInnerReviewReply.md)
- [GetGoogleBusinessReviews200ResponseReviewsInnerReviewer](docs/Model/GetGoogleBusinessReviews200ResponseReviewsInnerReviewer.md)
- [GetGoogleBusinessSearchKeywords200Response](docs/Model/GetGoogleBusinessSearchKeywords200Response.md)
- [GetGoogleBusinessSearchKeywords200ResponseKeywordsInner](docs/Model/GetGoogleBusinessSearchKeywords200ResponseKeywordsInner.md)
- [GetGoogleBusinessSearchKeywords200ResponseMonthRange](docs/Model/GetGoogleBusinessSearchKeywords200ResponseMonthRange.md)
- [GetGoogleBusinessSearchKeywords400Response](docs/Model/GetGoogleBusinessSearchKeywords400Response.md)
- [GetGoogleBusinessServices200Response](docs/Model/GetGoogleBusinessServices200Response.md)
- [GetGoogleBusinessServices200ResponseServicesInner](docs/Model/GetGoogleBusinessServices200ResponseServicesInner.md)
- [GetGoogleBusinessServices200ResponseServicesInnerFreeFormServiceItem](docs/Model/GetGoogleBusinessServices200ResponseServicesInnerFreeFormServiceItem.md)
- [GetGoogleBusinessServices200ResponseServicesInnerFreeFormServiceItemLabel](docs/Model/GetGoogleBusinessServices200ResponseServicesInnerFreeFormServiceItemLabel.md)
- [GetGoogleBusinessServices200ResponseServicesInnerPrice](docs/Model/GetGoogleBusinessServices200ResponseServicesInnerPrice.md)
- [GetInboxConversation200Response](docs/Model/GetInboxConversation200Response.md)
- [GetInboxConversation200ResponseData](docs/Model/GetInboxConversation200ResponseData.md)
- [GetInboxConversationMessages200Response](docs/Model/GetInboxConversationMessages200Response.md)
- [GetInboxConversationMessages200ResponseMessagesInner](docs/Model/GetInboxConversationMessages200ResponseMessagesInner.md)
- [GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner](docs/Model/GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner.md)
- [GetInboxConversationMessages200ResponseMessagesInnerDeliveryError](docs/Model/GetInboxConversationMessages200ResponseMessagesInnerDeliveryError.md)
- [GetInboxConversationMessages200ResponseMessagesInnerEditHistoryInner](docs/Model/GetInboxConversationMessages200ResponseMessagesInnerEditHistoryInner.md)
- [GetInboxConversationMessages200ResponseMessagesInnerEditHistoryInnerAttachmentsInner](docs/Model/GetInboxConversationMessages200ResponseMessagesInnerEditHistoryInnerAttachmentsInner.md)
- [GetInboxConversationMessages200ResponsePagination](docs/Model/GetInboxConversationMessages200ResponsePagination.md)
- [GetInboxPostComments200Response](docs/Model/GetInboxPostComments200Response.md)
- [GetInboxPostComments200ResponseCommentsInner](docs/Model/GetInboxPostComments200ResponseCommentsInner.md)
- [GetInboxPostComments200ResponseCommentsInnerFrom](docs/Model/GetInboxPostComments200ResponseCommentsInnerFrom.md)
- [GetInboxPostComments200ResponseMeta](docs/Model/GetInboxPostComments200ResponseMeta.md)
- [GetInboxPostComments200ResponsePagination](docs/Model/GetInboxPostComments200ResponsePagination.md)
- [GetInstagramAccountInsights404Response](docs/Model/GetInstagramAccountInsights404Response.md)
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
- [GetPostTimeline200Response](docs/Model/GetPostTimeline200Response.md)
- [GetPostTimeline200ResponseTimelineInner](docs/Model/GetPostTimeline200ResponseTimelineInner.md)
- [GetPostTimeline400Response](docs/Model/GetPostTimeline400Response.md)
- [GetPostTimeline403Response](docs/Model/GetPostTimeline403Response.md)
- [GetPostTimeline404Response](docs/Model/GetPostTimeline404Response.md)
- [GetPostingFrequency200Response](docs/Model/GetPostingFrequency200Response.md)
- [GetPostingFrequency200ResponseFrequencyInner](docs/Model/GetPostingFrequency200ResponseFrequencyInner.md)
- [GetProfile200Response](docs/Model/GetProfile200Response.md)
- [GetRedditFlairs200Response](docs/Model/GetRedditFlairs200Response.md)
- [GetRedditFlairs200ResponseFlairsInner](docs/Model/GetRedditFlairs200ResponseFlairsInner.md)
- [GetRedditSubreddits200Response](docs/Model/GetRedditSubreddits200Response.md)
- [GetRedditSubreddits200ResponseSubredditsInner](docs/Model/GetRedditSubreddits200ResponseSubredditsInner.md)
- [GetSequence200Response](docs/Model/GetSequence200Response.md)
- [GetSequence200ResponseSequence](docs/Model/GetSequence200ResponseSequence.md)
- [GetSequence200ResponseSequenceStepsInner](docs/Model/GetSequence200ResponseSequenceStepsInner.md)
- [GetSequence200ResponseSequenceStepsInnerTemplate](docs/Model/GetSequence200ResponseSequenceStepsInnerTemplate.md)
- [GetTelegramCommands200Response](docs/Model/GetTelegramCommands200Response.md)
- [GetTelegramCommands200ResponseDataInner](docs/Model/GetTelegramCommands200ResponseDataInner.md)
- [GetTelegramConnectStatus200Response](docs/Model/GetTelegramConnectStatus200Response.md)
- [GetTikTokCreatorInfo200Response](docs/Model/GetTikTokCreatorInfo200Response.md)
- [GetTikTokCreatorInfo200ResponseCommercialContentTypesInner](docs/Model/GetTikTokCreatorInfo200ResponseCommercialContentTypesInner.md)
- [GetTikTokCreatorInfo200ResponseCreator](docs/Model/GetTikTokCreatorInfo200ResponseCreator.md)
- [GetTikTokCreatorInfo200ResponsePostingLimits](docs/Model/GetTikTokCreatorInfo200ResponsePostingLimits.md)
- [GetTikTokCreatorInfo200ResponsePrivacyLevelsInner](docs/Model/GetTikTokCreatorInfo200ResponsePrivacyLevelsInner.md)
- [GetUser200Response](docs/Model/GetUser200Response.md)
- [GetUser200ResponseUser](docs/Model/GetUser200ResponseUser.md)
- [GetWebhookSettings200Response](docs/Model/GetWebhookSettings200Response.md)
- [GetWhatsAppBusinessProfile200Response](docs/Model/GetWhatsAppBusinessProfile200Response.md)
- [GetWhatsAppBusinessProfile200ResponseBusinessProfile](docs/Model/GetWhatsAppBusinessProfile200ResponseBusinessProfile.md)
- [GetWhatsAppDisplayName200Response](docs/Model/GetWhatsAppDisplayName200Response.md)
- [GetWhatsAppDisplayName200ResponseDisplayName](docs/Model/GetWhatsAppDisplayName200ResponseDisplayName.md)
- [GetWhatsAppFlow200Response](docs/Model/GetWhatsAppFlow200Response.md)
- [GetWhatsAppFlow200ResponseFlow](docs/Model/GetWhatsAppFlow200ResponseFlow.md)
- [GetWhatsAppFlow200ResponseFlowPreview](docs/Model/GetWhatsAppFlow200ResponseFlowPreview.md)
- [GetWhatsAppFlowJson200Response](docs/Model/GetWhatsAppFlowJson200Response.md)
- [GetWhatsAppFlowJson200ResponseAssetsInner](docs/Model/GetWhatsAppFlowJson200ResponseAssetsInner.md)
- [GetWhatsAppGroupChat200Response](docs/Model/GetWhatsAppGroupChat200Response.md)
- [GetWhatsAppGroupChat200ResponseGroup](docs/Model/GetWhatsAppGroupChat200ResponseGroup.md)
- [GetWhatsAppGroupChat200ResponseGroupParticipantsInner](docs/Model/GetWhatsAppGroupChat200ResponseGroupParticipantsInner.md)
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
- [GetYouTubeDemographics412Response](docs/Model/GetYouTubeDemographics412Response.md)
- [GetYouTubeDemographics412ResponseScopeStatus](docs/Model/GetYouTubeDemographics412ResponseScopeStatus.md)
- [GetYoutubePlaylists200Response](docs/Model/GetYoutubePlaylists200Response.md)
- [GetYoutubePlaylists200ResponsePlaylistsInner](docs/Model/GetYoutubePlaylists200ResponsePlaylistsInner.md)
- [GoogleBusinessPlatformData](docs/Model/GoogleBusinessPlatformData.md)
- [GoogleBusinessPlatformDataCallToAction](docs/Model/GoogleBusinessPlatformDataCallToAction.md)
- [GoogleBusinessPlatformDataEvent](docs/Model/GoogleBusinessPlatformDataEvent.md)
- [GoogleBusinessPlatformDataEventSchedule](docs/Model/GoogleBusinessPlatformDataEventSchedule.md)
- [GoogleBusinessPlatformDataEventScheduleEndDate](docs/Model/GoogleBusinessPlatformDataEventScheduleEndDate.md)
- [GoogleBusinessPlatformDataEventScheduleEndTime](docs/Model/GoogleBusinessPlatformDataEventScheduleEndTime.md)
- [GoogleBusinessPlatformDataEventScheduleStartDate](docs/Model/GoogleBusinessPlatformDataEventScheduleStartDate.md)
- [GoogleBusinessPlatformDataEventScheduleStartTime](docs/Model/GoogleBusinessPlatformDataEventScheduleStartTime.md)
- [GoogleBusinessPlatformDataOffer](docs/Model/GoogleBusinessPlatformDataOffer.md)
- [HandleOAuthCallbackRequest](docs/Model/HandleOAuthCallbackRequest.md)
- [HideInboxComment200Response](docs/Model/HideInboxComment200Response.md)
- [HideInboxCommentRequest](docs/Model/HideInboxCommentRequest.md)
- [InboxWebhookAccount](docs/Model/InboxWebhookAccount.md)
- [InboxWebhookConversation](docs/Model/InboxWebhookConversation.md)
- [InboxWebhookMessage](docs/Model/InboxWebhookMessage.md)
- [InboxWebhookMessageAttachmentsInner](docs/Model/InboxWebhookMessageAttachmentsInner.md)
- [InboxWebhookMessageSender](docs/Model/InboxWebhookMessageSender.md)
- [InboxWebhookMessageSenderInstagramProfile](docs/Model/InboxWebhookMessageSenderInstagramProfile.md)
- [InitiateTelegramConnect200Response](docs/Model/InitiateTelegramConnect200Response.md)
- [InitiateTelegramConnect200ResponseAccount](docs/Model/InitiateTelegramConnect200ResponseAccount.md)
- [InitiateTelegramConnectRequest](docs/Model/InitiateTelegramConnectRequest.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InstagramAccountInsightsResponse](docs/Model/InstagramAccountInsightsResponse.md)
- [InstagramAccountInsightsResponseDateRange](docs/Model/InstagramAccountInsightsResponseDateRange.md)
- [InstagramAccountInsightsResponseMetricsValue](docs/Model/InstagramAccountInsightsResponseMetricsValue.md)
- [InstagramAccountInsightsResponseMetricsValueBreakdownsInner](docs/Model/InstagramAccountInsightsResponseMetricsValueBreakdownsInner.md)
- [InstagramAccountInsightsResponseMetricsValueValuesInner](docs/Model/InstagramAccountInsightsResponseMetricsValueValuesInner.md)
- [InstagramDemographicsResponse](docs/Model/InstagramDemographicsResponse.md)
- [InstagramDemographicsResponseDemographicsValueInner](docs/Model/InstagramDemographicsResponseDemographicsValueInner.md)
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
- [ListAdAccounts200Response](docs/Model/ListAdAccounts200Response.md)
- [ListAdAccounts200ResponseAccountsInner](docs/Model/ListAdAccounts200ResponseAccountsInner.md)
- [ListAdAudiences200Response](docs/Model/ListAdAudiences200Response.md)
- [ListAdAudiences200ResponseAudiencesInner](docs/Model/ListAdAudiences200ResponseAudiencesInner.md)
- [ListAdCampaigns200Response](docs/Model/ListAdCampaigns200Response.md)
- [ListAds200Response](docs/Model/ListAds200Response.md)
- [ListApiKeys200Response](docs/Model/ListApiKeys200Response.md)
- [ListBroadcastRecipients200Response](docs/Model/ListBroadcastRecipients200Response.md)
- [ListBroadcastRecipients200ResponseRecipientsInner](docs/Model/ListBroadcastRecipients200ResponseRecipientsInner.md)
- [ListBroadcasts200Response](docs/Model/ListBroadcasts200Response.md)
- [ListBroadcasts200ResponseBroadcastsInner](docs/Model/ListBroadcasts200ResponseBroadcastsInner.md)
- [ListCommentAutomationLogs200Response](docs/Model/ListCommentAutomationLogs200Response.md)
- [ListCommentAutomations200Response](docs/Model/ListCommentAutomations200Response.md)
- [ListCommentAutomations200ResponseAutomationsInner](docs/Model/ListCommentAutomations200ResponseAutomationsInner.md)
- [ListCommentAutomations200ResponseAutomationsInnerStats](docs/Model/ListCommentAutomations200ResponseAutomationsInnerStats.md)
- [ListContacts200Response](docs/Model/ListContacts200Response.md)
- [ListContacts200ResponseContactsInner](docs/Model/ListContacts200ResponseContactsInner.md)
- [ListContacts200ResponseFilters](docs/Model/ListContacts200ResponseFilters.md)
- [ListContacts200ResponsePagination](docs/Model/ListContacts200ResponsePagination.md)
- [ListConversionDestinations200Response](docs/Model/ListConversionDestinations200Response.md)
- [ListConversionDestinations200ResponseDestinationsInner](docs/Model/ListConversionDestinations200ResponseDestinationsInner.md)
- [ListCustomFields200Response](docs/Model/ListCustomFields200Response.md)
- [ListCustomFields200ResponseFieldsInner](docs/Model/ListCustomFields200ResponseFieldsInner.md)
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
- [ListLogs200ResponseLogsInner](docs/Model/ListLogs200ResponseLogsInner.md)
- [ListLogs200ResponsePagination](docs/Model/ListLogs200ResponsePagination.md)
- [ListPinterestBoardsForSelection200Response](docs/Model/ListPinterestBoardsForSelection200Response.md)
- [ListPinterestBoardsForSelection200ResponseBoardsInner](docs/Model/ListPinterestBoardsForSelection200ResponseBoardsInner.md)
- [ListQueueSlots200Response](docs/Model/ListQueueSlots200Response.md)
- [ListQueueSlots200ResponseOneOf](docs/Model/ListQueueSlots200ResponseOneOf.md)
- [ListQueueSlots200ResponseOneOf1](docs/Model/ListQueueSlots200ResponseOneOf1.md)
- [ListSequenceEnrollments200Response](docs/Model/ListSequenceEnrollments200Response.md)
- [ListSequenceEnrollments200ResponseEnrollmentsInner](docs/Model/ListSequenceEnrollments200ResponseEnrollmentsInner.md)
- [ListSequences200Response](docs/Model/ListSequences200Response.md)
- [ListSequences200ResponseSequencesInner](docs/Model/ListSequences200ResponseSequencesInner.md)
- [ListSnapchatProfiles200Response](docs/Model/ListSnapchatProfiles200Response.md)
- [ListSnapchatProfiles200ResponsePublicProfilesInner](docs/Model/ListSnapchatProfiles200ResponsePublicProfilesInner.md)
- [ListUsers200Response](docs/Model/ListUsers200Response.md)
- [ListUsers200ResponseUsersInner](docs/Model/ListUsers200ResponseUsersInner.md)
- [ListWhatsAppFlows200Response](docs/Model/ListWhatsAppFlows200Response.md)
- [ListWhatsAppFlows200ResponseFlowsInner](docs/Model/ListWhatsAppFlows200ResponseFlowsInner.md)
- [ListWhatsAppGroupChats200Response](docs/Model/ListWhatsAppGroupChats200Response.md)
- [ListWhatsAppGroupChats200ResponseGroupsInner](docs/Model/ListWhatsAppGroupChats200ResponseGroupsInner.md)
- [ListWhatsAppGroupChats200ResponsePaging](docs/Model/ListWhatsAppGroupChats200ResponsePaging.md)
- [ListWhatsAppGroupChats200ResponsePagingCursors](docs/Model/ListWhatsAppGroupChats200ResponsePagingCursors.md)
- [ListWhatsAppGroupJoinRequests200Response](docs/Model/ListWhatsAppGroupJoinRequests200Response.md)
- [ListWhatsAppGroupJoinRequests200ResponseJoinRequestsInner](docs/Model/ListWhatsAppGroupJoinRequests200ResponseJoinRequestsInner.md)
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
- [PublishWhatsAppFlowRequest](docs/Model/PublishWhatsAppFlowRequest.md)
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
- [RedditPost](docs/Model/RedditPost.md)
- [RejectWhatsAppGroupJoinRequestsRequest](docs/Model/RejectWhatsAppGroupJoinRequestsRequest.md)
- [ReleaseWhatsAppPhoneNumber200Response](docs/Model/ReleaseWhatsAppPhoneNumber200Response.md)
- [ReleaseWhatsAppPhoneNumber200ResponsePhoneNumber](docs/Model/ReleaseWhatsAppPhoneNumber200ResponsePhoneNumber.md)
- [RemoveBookmark200Response](docs/Model/RemoveBookmark200Response.md)
- [RemoveWhatsAppGroupParticipantsRequest](docs/Model/RemoveWhatsAppGroupParticipantsRequest.md)
- [ReplyToInboxPost200Response](docs/Model/ReplyToInboxPost200Response.md)
- [ReplyToInboxPost200ResponseData](docs/Model/ReplyToInboxPost200ResponseData.md)
- [ReplyToInboxPostRequest](docs/Model/ReplyToInboxPostRequest.md)
- [ReplyToInboxReview200Response](docs/Model/ReplyToInboxReview200Response.md)
- [ReplyToInboxReview200ResponseReply](docs/Model/ReplyToInboxReview200ResponseReply.md)
- [ReplyToInboxReviewRequest](docs/Model/ReplyToInboxReviewRequest.md)
- [RetweetPost200Response](docs/Model/RetweetPost200Response.md)
- [RetweetPostRequest](docs/Model/RetweetPostRequest.md)
- [ReviewWebhookReview](docs/Model/ReviewWebhookReview.md)
- [ReviewWebhookReviewReply](docs/Model/ReviewWebhookReviewReply.md)
- [ReviewWebhookReviewReviewer](docs/Model/ReviewWebhookReviewReviewer.md)
- [ScheduleBroadcast200Response](docs/Model/ScheduleBroadcast200Response.md)
- [ScheduleBroadcast200ResponseBroadcast](docs/Model/ScheduleBroadcast200ResponseBroadcast.md)
- [ScheduleBroadcastRequest](docs/Model/ScheduleBroadcastRequest.md)
- [SearchAdInterests200Response](docs/Model/SearchAdInterests200Response.md)
- [SearchAdInterests200ResponseInterestsInner](docs/Model/SearchAdInterests200ResponseInterestsInner.md)
- [SearchReddit200Response](docs/Model/SearchReddit200Response.md)
- [SelectFacebookPage200Response](docs/Model/SelectFacebookPage200Response.md)
- [SelectFacebookPage200ResponseAccount](docs/Model/SelectFacebookPage200ResponseAccount.md)
- [SelectFacebookPageRequest](docs/Model/SelectFacebookPageRequest.md)
- [SelectFacebookPageRequestUserProfile](docs/Model/SelectFacebookPageRequestUserProfile.md)
- [SelectGoogleBusinessLocation200Response](docs/Model/SelectGoogleBusinessLocation200Response.md)
- [SelectGoogleBusinessLocation200ResponseAccount](docs/Model/SelectGoogleBusinessLocation200ResponseAccount.md)
- [SelectGoogleBusinessLocationRequest](docs/Model/SelectGoogleBusinessLocationRequest.md)
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
- [SendBroadcast200Response](docs/Model/SendBroadcast200Response.md)
- [SendConversions200Response](docs/Model/SendConversions200Response.md)
- [SendConversions200ResponseFailuresInner](docs/Model/SendConversions200ResponseFailuresInner.md)
- [SendConversions200ResponseFailuresInnerCode](docs/Model/SendConversions200ResponseFailuresInnerCode.md)
- [SendConversionsRequest](docs/Model/SendConversionsRequest.md)
- [SendConversionsRequestConsent](docs/Model/SendConversionsRequestConsent.md)
- [SendInboxMessage200Response](docs/Model/SendInboxMessage200Response.md)
- [SendInboxMessage200ResponseData](docs/Model/SendInboxMessage200ResponseData.md)
- [SendInboxMessage400Response](docs/Model/SendInboxMessage400Response.md)
- [SendInboxMessageRequest](docs/Model/SendInboxMessageRequest.md)
- [SendInboxMessageRequestButtonsInner](docs/Model/SendInboxMessageRequestButtonsInner.md)
- [SendInboxMessageRequestInteractive](docs/Model/SendInboxMessageRequestInteractive.md)
- [SendInboxMessageRequestInteractiveAction](docs/Model/SendInboxMessageRequestInteractiveAction.md)
- [SendInboxMessageRequestInteractiveActionOneOf](docs/Model/SendInboxMessageRequestInteractiveActionOneOf.md)
- [SendInboxMessageRequestInteractiveActionOneOf1](docs/Model/SendInboxMessageRequestInteractiveActionOneOf1.md)
- [SendInboxMessageRequestInteractiveActionOneOf1Parameters](docs/Model/SendInboxMessageRequestInteractiveActionOneOf1Parameters.md)
- [SendInboxMessageRequestInteractiveActionOneOf2](docs/Model/SendInboxMessageRequestInteractiveActionOneOf2.md)
- [SendInboxMessageRequestInteractiveActionOneOf2Parameters](docs/Model/SendInboxMessageRequestInteractiveActionOneOf2Parameters.md)
- [SendInboxMessageRequestInteractiveActionOneOf2ParametersFlowActionPayload](docs/Model/SendInboxMessageRequestInteractiveActionOneOf2ParametersFlowActionPayload.md)
- [SendInboxMessageRequestInteractiveActionOneOfSectionsInner](docs/Model/SendInboxMessageRequestInteractiveActionOneOfSectionsInner.md)
- [SendInboxMessageRequestInteractiveActionOneOfSectionsInnerRowsInner](docs/Model/SendInboxMessageRequestInteractiveActionOneOfSectionsInnerRowsInner.md)
- [SendInboxMessageRequestInteractiveBody](docs/Model/SendInboxMessageRequestInteractiveBody.md)
- [SendInboxMessageRequestInteractiveFooter](docs/Model/SendInboxMessageRequestInteractiveFooter.md)
- [SendInboxMessageRequestInteractiveHeader](docs/Model/SendInboxMessageRequestInteractiveHeader.md)
- [SendInboxMessageRequestInteractiveHeaderImage](docs/Model/SendInboxMessageRequestInteractiveHeaderImage.md)
- [SendInboxMessageRequestQuickRepliesInner](docs/Model/SendInboxMessageRequestQuickRepliesInner.md)
- [SendInboxMessageRequestReplyMarkup](docs/Model/SendInboxMessageRequestReplyMarkup.md)
- [SendInboxMessageRequestReplyMarkupKeyboardInnerInner](docs/Model/SendInboxMessageRequestReplyMarkupKeyboardInnerInner.md)
- [SendInboxMessageRequestTemplate](docs/Model/SendInboxMessageRequestTemplate.md)
- [SendInboxMessageRequestTemplateElementsInner](docs/Model/SendInboxMessageRequestTemplateElementsInner.md)
- [SendInboxMessageRequestTemplateElementsInnerButtonsInner](docs/Model/SendInboxMessageRequestTemplateElementsInnerButtonsInner.md)
- [SendPrivateReplyToComment200Response](docs/Model/SendPrivateReplyToComment200Response.md)
- [SendPrivateReplyToCommentRequest](docs/Model/SendPrivateReplyToCommentRequest.md)
- [SendTypingIndicatorRequest](docs/Model/SendTypingIndicatorRequest.md)
- [SendWhatsAppConversion200Response](docs/Model/SendWhatsAppConversion200Response.md)
- [SendWhatsAppConversionRequest](docs/Model/SendWhatsAppConversionRequest.md)
- [SendWhatsAppFlowMessage200Response](docs/Model/SendWhatsAppFlowMessage200Response.md)
- [SendWhatsAppFlowMessageRequest](docs/Model/SendWhatsAppFlowMessageRequest.md)
- [SendWhatsAppFlowMessageRequestFlowActionPayload](docs/Model/SendWhatsAppFlowMessageRequestFlowActionPayload.md)
- [SendWhatsAppFlowMessageRequestHeader](docs/Model/SendWhatsAppFlowMessageRequestHeader.md)
- [SetContactFieldValueRequest](docs/Model/SetContactFieldValueRequest.md)
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
- [TwitterPlatformData](docs/Model/TwitterPlatformData.md)
- [TwitterPlatformDataPoll](docs/Model/TwitterPlatformDataPoll.md)
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
- [UpdateAd200Response](docs/Model/UpdateAd200Response.md)
- [UpdateAdCampaign200Response](docs/Model/UpdateAdCampaign200Response.md)
- [UpdateAdCampaignRequest](docs/Model/UpdateAdCampaignRequest.md)
- [UpdateAdCampaignRequestBudget](docs/Model/UpdateAdCampaignRequestBudget.md)
- [UpdateAdCampaignStatus200Response](docs/Model/UpdateAdCampaignStatus200Response.md)
- [UpdateAdCampaignStatusRequest](docs/Model/UpdateAdCampaignStatusRequest.md)
- [UpdateAdRequest](docs/Model/UpdateAdRequest.md)
- [UpdateAdRequestBudget](docs/Model/UpdateAdRequestBudget.md)
- [UpdateAdRequestTargeting](docs/Model/UpdateAdRequestTargeting.md)
- [UpdateAdRequestTargetingInterestsInner](docs/Model/UpdateAdRequestTargetingInterestsInner.md)
- [UpdateAdSet200Response](docs/Model/UpdateAdSet200Response.md)
- [UpdateAdSetRequest](docs/Model/UpdateAdSetRequest.md)
- [UpdateAdSetRequestBudget](docs/Model/UpdateAdSetRequestBudget.md)
- [UpdateAdSetStatus200Response](docs/Model/UpdateAdSetStatus200Response.md)
- [UpdateBroadcast200Response](docs/Model/UpdateBroadcast200Response.md)
- [UpdateBroadcast200ResponseBroadcast](docs/Model/UpdateBroadcast200ResponseBroadcast.md)
- [UpdateCommentAutomation200Response](docs/Model/UpdateCommentAutomation200Response.md)
- [UpdateCommentAutomation200ResponseAutomation](docs/Model/UpdateCommentAutomation200ResponseAutomation.md)
- [UpdateCommentAutomationRequest](docs/Model/UpdateCommentAutomationRequest.md)
- [UpdateContact200Response](docs/Model/UpdateContact200Response.md)
- [UpdateContact200ResponseContact](docs/Model/UpdateContact200ResponseContact.md)
- [UpdateContactRequest](docs/Model/UpdateContactRequest.md)
- [UpdateCustomField200Response](docs/Model/UpdateCustomField200Response.md)
- [UpdateCustomField200ResponseField](docs/Model/UpdateCustomField200ResponseField.md)
- [UpdateCustomFieldRequest](docs/Model/UpdateCustomFieldRequest.md)
- [UpdateDiscordSettings200Response](docs/Model/UpdateDiscordSettings200Response.md)
- [UpdateDiscordSettings200ResponseAccount](docs/Model/UpdateDiscordSettings200ResponseAccount.md)
- [UpdateDiscordSettingsRequest](docs/Model/UpdateDiscordSettingsRequest.md)
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
- [UpdateGoogleBusinessPlaceAction200Response](docs/Model/UpdateGoogleBusinessPlaceAction200Response.md)
- [UpdateGoogleBusinessPlaceActionRequest](docs/Model/UpdateGoogleBusinessPlaceActionRequest.md)
- [UpdateGoogleBusinessServices200Response](docs/Model/UpdateGoogleBusinessServices200Response.md)
- [UpdateGoogleBusinessServicesRequest](docs/Model/UpdateGoogleBusinessServicesRequest.md)
- [UpdateGoogleBusinessServicesRequestServiceItemsInner](docs/Model/UpdateGoogleBusinessServicesRequestServiceItemsInner.md)
- [UpdateInboxConversation200Response](docs/Model/UpdateInboxConversation200Response.md)
- [UpdateInboxConversation200ResponseData](docs/Model/UpdateInboxConversation200ResponseData.md)
- [UpdateInboxConversationRequest](docs/Model/UpdateInboxConversationRequest.md)
- [UpdateLinkedInOrganizationRequest](docs/Model/UpdateLinkedInOrganizationRequest.md)
- [UpdatePinterestBoardsRequest](docs/Model/UpdatePinterestBoardsRequest.md)
- [UpdatePostMetadata200Response](docs/Model/UpdatePostMetadata200Response.md)
- [UpdatePostMetadataRequest](docs/Model/UpdatePostMetadataRequest.md)
- [UpdatePostRequest](docs/Model/UpdatePostRequest.md)
- [UpdateProfile200Response](docs/Model/UpdateProfile200Response.md)
- [UpdateProfileRequest](docs/Model/UpdateProfileRequest.md)
- [UpdateQueueSlot200Response](docs/Model/UpdateQueueSlot200Response.md)
- [UpdateQueueSlotRequest](docs/Model/UpdateQueueSlotRequest.md)
- [UpdateRedditSubredditsRequest](docs/Model/UpdateRedditSubredditsRequest.md)
- [UpdateSequence200Response](docs/Model/UpdateSequence200Response.md)
- [UpdateSequence200ResponseSequence](docs/Model/UpdateSequence200ResponseSequence.md)
- [UpdateWebhookSettings200Response](docs/Model/UpdateWebhookSettings200Response.md)
- [UpdateWebhookSettingsRequest](docs/Model/UpdateWebhookSettingsRequest.md)
- [UpdateWhatsAppBusinessProfileRequest](docs/Model/UpdateWhatsAppBusinessProfileRequest.md)
- [UpdateWhatsAppDisplayName200Response](docs/Model/UpdateWhatsAppDisplayName200Response.md)
- [UpdateWhatsAppDisplayName200ResponseDisplayName](docs/Model/UpdateWhatsAppDisplayName200ResponseDisplayName.md)
- [UpdateWhatsAppDisplayNameRequest](docs/Model/UpdateWhatsAppDisplayNameRequest.md)
- [UpdateWhatsAppFlowRequest](docs/Model/UpdateWhatsAppFlowRequest.md)
- [UpdateWhatsAppGroupChatRequest](docs/Model/UpdateWhatsAppGroupChatRequest.md)
- [UpdateWhatsAppTemplate200Response](docs/Model/UpdateWhatsAppTemplate200Response.md)
- [UpdateWhatsAppTemplate200ResponseTemplate](docs/Model/UpdateWhatsAppTemplate200ResponseTemplate.md)
- [UpdateWhatsAppTemplateRequest](docs/Model/UpdateWhatsAppTemplateRequest.md)
- [UpdateYoutubeDefaultPlaylist200Response](docs/Model/UpdateYoutubeDefaultPlaylist200Response.md)
- [UpdateYoutubeDefaultPlaylistRequest](docs/Model/UpdateYoutubeDefaultPlaylistRequest.md)
- [UploadMediaDirect200Response](docs/Model/UploadMediaDirect200Response.md)
- [UploadTokenResponse](docs/Model/UploadTokenResponse.md)
- [UploadTokenStatusResponse](docs/Model/UploadTokenStatusResponse.md)
- [UploadWhatsAppFlowJson200Response](docs/Model/UploadWhatsAppFlowJson200Response.md)
- [UploadWhatsAppFlowJson200ResponseValidationErrorsInner](docs/Model/UploadWhatsAppFlowJson200ResponseValidationErrorsInner.md)
- [UploadWhatsAppFlowJsonRequest](docs/Model/UploadWhatsAppFlowJsonRequest.md)
- [UploadWhatsAppFlowJsonRequestFlowJson](docs/Model/UploadWhatsAppFlowJsonRequestFlowJson.md)
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
- [WebhookPayloadAccountAdsInitialSyncCompleted](docs/Model/WebhookPayloadAccountAdsInitialSyncCompleted.md)
- [WebhookPayloadAccountAdsInitialSyncCompletedAccount](docs/Model/WebhookPayloadAccountAdsInitialSyncCompletedAccount.md)
- [WebhookPayloadAccountAdsInitialSyncCompletedSync](docs/Model/WebhookPayloadAccountAdsInitialSyncCompletedSync.md)
- [WebhookPayloadAccountConnected](docs/Model/WebhookPayloadAccountConnected.md)
- [WebhookPayloadAccountConnectedAccount](docs/Model/WebhookPayloadAccountConnectedAccount.md)
- [WebhookPayloadAccountDisconnected](docs/Model/WebhookPayloadAccountDisconnected.md)
- [WebhookPayloadAccountDisconnectedAccount](docs/Model/WebhookPayloadAccountDisconnectedAccount.md)
- [WebhookPayloadComment](docs/Model/WebhookPayloadComment.md)
- [WebhookPayloadCommentAccount](docs/Model/WebhookPayloadCommentAccount.md)
- [WebhookPayloadCommentComment](docs/Model/WebhookPayloadCommentComment.md)
- [WebhookPayloadCommentCommentAd](docs/Model/WebhookPayloadCommentCommentAd.md)
- [WebhookPayloadCommentCommentAuthor](docs/Model/WebhookPayloadCommentCommentAuthor.md)
- [WebhookPayloadCommentPost](docs/Model/WebhookPayloadCommentPost.md)
- [WebhookPayloadMessage](docs/Model/WebhookPayloadMessage.md)
- [WebhookPayloadMessageAccount](docs/Model/WebhookPayloadMessageAccount.md)
- [WebhookPayloadMessageConversation](docs/Model/WebhookPayloadMessageConversation.md)
- [WebhookPayloadMessageDeleted](docs/Model/WebhookPayloadMessageDeleted.md)
- [WebhookPayloadMessageDeliveryStatus](docs/Model/WebhookPayloadMessageDeliveryStatus.md)
- [WebhookPayloadMessageDeliveryStatusError](docs/Model/WebhookPayloadMessageDeliveryStatusError.md)
- [WebhookPayloadMessageEdited](docs/Model/WebhookPayloadMessageEdited.md)
- [WebhookPayloadMessageEditedEditHistoryInner](docs/Model/WebhookPayloadMessageEditedEditHistoryInner.md)
- [WebhookPayloadMessageMessage](docs/Model/WebhookPayloadMessageMessage.md)
- [WebhookPayloadMessageMessageSender](docs/Model/WebhookPayloadMessageMessageSender.md)
- [WebhookPayloadMessageMessageSenderInstagramProfile](docs/Model/WebhookPayloadMessageMessageSenderInstagramProfile.md)
- [WebhookPayloadMessageMetadata](docs/Model/WebhookPayloadMessageMetadata.md)
- [WebhookPayloadMessageMetadataReferral](docs/Model/WebhookPayloadMessageMetadataReferral.md)
- [WebhookPayloadMessageSent](docs/Model/WebhookPayloadMessageSent.md)
- [WebhookPayloadMessageSentMessage](docs/Model/WebhookPayloadMessageSentMessage.md)
- [WebhookPayloadMessageSentMessageSender](docs/Model/WebhookPayloadMessageSentMessageSender.md)
- [WebhookPayloadPost](docs/Model/WebhookPayloadPost.md)
- [WebhookPayloadPostPost](docs/Model/WebhookPayloadPostPost.md)
- [WebhookPayloadPostPostPlatformsInner](docs/Model/WebhookPayloadPostPostPlatformsInner.md)
- [WebhookPayloadReviewNew](docs/Model/WebhookPayloadReviewNew.md)
- [WebhookPayloadReviewNewAccount](docs/Model/WebhookPayloadReviewNewAccount.md)
- [WebhookPayloadReviewUpdated](docs/Model/WebhookPayloadReviewUpdated.md)
- [WebhookPayloadTest](docs/Model/WebhookPayloadTest.md)
- [WhatsAppBodyComponent](docs/Model/WhatsAppBodyComponent.md)
- [WhatsAppBodyComponentExample](docs/Model/WhatsAppBodyComponentExample.md)
- [WhatsAppButtonsComponent](docs/Model/WhatsAppButtonsComponent.md)
- [WhatsAppFooterComponent](docs/Model/WhatsAppFooterComponent.md)
- [WhatsAppHeaderComponent](docs/Model/WhatsAppHeaderComponent.md)
- [WhatsAppHeaderComponentExample](docs/Model/WhatsAppHeaderComponentExample.md)
- [WhatsAppTemplateButton](docs/Model/WhatsAppTemplateButton.md)
- [WhatsAppTemplateComponent](docs/Model/WhatsAppTemplateComponent.md)
- [YouTubeDailyViewsResponse](docs/Model/YouTubeDailyViewsResponse.md)
- [YouTubeDailyViewsResponseDailyViewsInner](docs/Model/YouTubeDailyViewsResponseDailyViewsInner.md)
- [YouTubeDailyViewsResponseDateRange](docs/Model/YouTubeDailyViewsResponseDateRange.md)
- [YouTubeDailyViewsResponseScopeStatus](docs/Model/YouTubeDailyViewsResponseScopeStatus.md)
- [YouTubeDemographicsResponse](docs/Model/YouTubeDemographicsResponse.md)
- [YouTubeDemographicsResponseDateRange](docs/Model/YouTubeDemographicsResponseDateRange.md)
- [YouTubeDemographicsResponseDemographicsValueInner](docs/Model/YouTubeDemographicsResponseDemographicsValueInner.md)
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
