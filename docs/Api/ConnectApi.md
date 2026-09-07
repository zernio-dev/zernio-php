# Zernio\ConnectApi

OAuth and credential flows for connecting social accounts, plus per-platform selection steps (Facebook pages, Pinterest boards, LinkedIn organizations, GMB locations, etc.).

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignGoogleBusinessLocation()**](ConnectApi.md#assignGoogleBusinessLocation) | **POST** /v1/accounts/{accountId}/gmb-locations/assign | Assign GBP location to another profile |
| [**completeTelegramConnect()**](ConnectApi.md#completeTelegramConnect) | **PATCH** /v1/connect/telegram | Check Telegram status |
| [**completeWhatsAppPhoneSelection()**](ConnectApi.md#completeWhatsAppPhoneSelection) | **POST** /v1/connect/whatsapp/select-phone-number | Complete number selection |
| [**configureTikTokAdsBrandIdentity()**](ConnectApi.md#configureTikTokAdsBrandIdentity) | **PATCH** /v1/connect/tiktok-ads | Set TikTok brand identity |
| [**connectAds()**](ConnectApi.md#connectAds) | **GET** /v1/connect/{platform}/ads | Connect ads for a platform |
| [**connectBlueskyCredentials()**](ConnectApi.md#connectBlueskyCredentials) | **POST** /v1/connect/bluesky/credentials | Connect Bluesky account |
| [**connectDiscordChannel()**](ConnectApi.md#connectDiscordChannel) | **POST** /v1/connect/discord | Connect a Discord channel |
| [**connectOpenAIAdsCredentials()**](ConnectApi.md#connectOpenAIAdsCredentials) | **POST** /v1/connect/openai-ads/credentials | Connect an OpenAI Ads account |
| [**connectShopifyWithToken()**](ConnectApi.md#connectShopifyWithToken) | **POST** /v1/connect/shopify/token | Connect a Shopify store with a custom-app Admin token |
| [**connectSlackChannel()**](ConnectApi.md#connectSlackChannel) | **POST** /v1/connect/slack | Connect a Slack channel |
| [**connectWhatsAppCredentials()**](ConnectApi.md#connectWhatsAppCredentials) | **POST** /v1/connect/whatsapp/credentials | Connect WhatsApp via credentials |
| [**connectWhatsAppEmbeddedSignup()**](ConnectApi.md#connectWhatsAppEmbeddedSignup) | **POST** /v1/connect/whatsapp/embedded-signup | Connect WhatsApp from Embedded Signup |
| [**createPinterestBoard()**](ConnectApi.md#createPinterestBoard) | **POST** /v1/accounts/{accountId}/pinterest-boards | Create Pinterest board |
| [**getConnectUrl()**](ConnectApi.md#getConnectUrl) | **GET** /v1/connect/{platform} | Get OAuth connect URL |
| [**getFacebookPages()**](ConnectApi.md#getFacebookPages) | **GET** /v1/accounts/{accountId}/facebook-page | List Facebook pages |
| [**getGmbLocations()**](ConnectApi.md#getGmbLocations) | **GET** /v1/accounts/{accountId}/gmb-locations | List GBP locations |
| [**getLinkedInOrganizations()**](ConnectApi.md#getLinkedInOrganizations) | **GET** /v1/accounts/{accountId}/linkedin-organizations | List LinkedIn orgs |
| [**getPendingOAuthData()**](ConnectApi.md#getPendingOAuthData) | **GET** /v1/connect/pending-data | Get pending OAuth data |
| [**getPinterestBoards()**](ConnectApi.md#getPinterestBoards) | **GET** /v1/accounts/{accountId}/pinterest-boards | List Pinterest boards |
| [**getRedditFlairs()**](ConnectApi.md#getRedditFlairs) | **GET** /v1/accounts/{accountId}/reddit-flairs | List subreddit flairs |
| [**getRedditSubreddits()**](ConnectApi.md#getRedditSubreddits) | **GET** /v1/accounts/{accountId}/reddit-subreddits | List Reddit subreddits |
| [**getShopifyConnectUrl()**](ConnectApi.md#getShopifyConnectUrl) | **GET** /v1/connect/shopify | Get Shopify OAuth connect URL |
| [**getSubredditRules()**](ConnectApi.md#getSubredditRules) | **GET** /v1/accounts/{accountId}/reddit-subreddits/{subreddit}/rules | Get subreddit rules |
| [**getTelegramConnectStatus()**](ConnectApi.md#getTelegramConnectStatus) | **GET** /v1/connect/telegram | Generate Telegram code |
| [**getYoutubeCaptions()**](ConnectApi.md#getYoutubeCaptions) | **GET** /v1/accounts/{accountId}/youtube-captions | Get a YouTube video transcript |
| [**getYoutubePlaylists()**](ConnectApi.md#getYoutubePlaylists) | **GET** /v1/accounts/{accountId}/youtube-playlists | List YouTube playlists |
| [**handleOAuthCallback()**](ConnectApi.md#handleOAuthCallback) | **POST** /v1/connect/{platform} | Complete OAuth callback |
| [**initiateTelegramConnect()**](ConnectApi.md#initiateTelegramConnect) | **POST** /v1/connect/telegram | Connect Telegram directly |
| [**listFacebookPages()**](ConnectApi.md#listFacebookPages) | **GET** /v1/connect/facebook/select-page | List Facebook pages |
| [**listGoogleBusinessLocations()**](ConnectApi.md#listGoogleBusinessLocations) | **GET** /v1/connect/googlebusiness/locations | List GBP locations |
| [**listInstagramPages()**](ConnectApi.md#listInstagramPages) | **GET** /v1/connect/instagram/select-account | List Pages with a linked Instagram account |
| [**listLinkedInOrganizations()**](ConnectApi.md#listLinkedInOrganizations) | **GET** /v1/connect/linkedin/organizations | List LinkedIn orgs |
| [**listPinterestBoardsForSelection()**](ConnectApi.md#listPinterestBoardsForSelection) | **GET** /v1/connect/pinterest/select-board | List Pinterest boards |
| [**listSlackChannels()**](ConnectApi.md#listSlackChannels) | **GET** /v1/connect/slack | List Slack channels for the channel picker |
| [**listSnapchatProfiles()**](ConnectApi.md#listSnapchatProfiles) | **GET** /v1/connect/snapchat/select-profile | List Snapchat profiles |
| [**listWhatsAppPhoneNumbers()**](ConnectApi.md#listWhatsAppPhoneNumbers) | **GET** /v1/connect/whatsapp/select-phone-number | List numbers for selection |
| [**selectFacebookPage()**](ConnectApi.md#selectFacebookPage) | **POST** /v1/connect/facebook/select-page | Select Facebook page |
| [**selectGoogleBusinessLocation()**](ConnectApi.md#selectGoogleBusinessLocation) | **POST** /v1/connect/googlebusiness/select-location | Select GBP location |
| [**selectInstagramAccount()**](ConnectApi.md#selectInstagramAccount) | **POST** /v1/connect/instagram/select-account | Select the Page whose Instagram account to connect |
| [**selectLinkedInOrganization()**](ConnectApi.md#selectLinkedInOrganization) | **POST** /v1/connect/linkedin/select-organization | Select LinkedIn org |
| [**selectPinterestBoard()**](ConnectApi.md#selectPinterestBoard) | **POST** /v1/connect/pinterest/select-board | Select Pinterest board |
| [**selectSnapchatProfile()**](ConnectApi.md#selectSnapchatProfile) | **POST** /v1/connect/snapchat/select-profile | Select Snapchat profile |
| [**setRedditPostFlair()**](ConnectApi.md#setRedditPostFlair) | **POST** /v1/accounts/{accountId}/reddit-flairs | Set Reddit post flair |
| [**updateFacebookPage()**](ConnectApi.md#updateFacebookPage) | **PUT** /v1/accounts/{accountId}/facebook-page | Update Facebook page |
| [**updateGmbLocation()**](ConnectApi.md#updateGmbLocation) | **PUT** /v1/accounts/{accountId}/gmb-locations | Update GBP location |
| [**updateLinkedInOrganization()**](ConnectApi.md#updateLinkedInOrganization) | **PUT** /v1/accounts/{accountId}/linkedin-organization | Switch LinkedIn account type |
| [**updatePinterestBoards()**](ConnectApi.md#updatePinterestBoards) | **PUT** /v1/accounts/{accountId}/pinterest-boards | Set default Pinterest board |
| [**updateRedditSubreddits()**](ConnectApi.md#updateRedditSubreddits) | **PUT** /v1/accounts/{accountId}/reddit-subreddits | Set default subreddit |
| [**updateYoutubeDefaultPlaylist()**](ConnectApi.md#updateYoutubeDefaultPlaylist) | **PUT** /v1/accounts/{accountId}/youtube-playlists | Set default YouTube playlist |
| [**voteRedditThing()**](ConnectApi.md#voteRedditThing) | **POST** /v1/accounts/{accountId}/reddit-vote | Vote on a Reddit post or comment |


## `assignGoogleBusinessLocation()`

```php
assignGoogleBusinessLocation($account_id, $assign_google_business_location_request): \Zernio\Model\AssignGoogleBusinessLocation200Response
```

Assign GBP location to another profile

Connect a Google Business location onto a DIFFERENT profile by reusing the OAuth grant from an already-connected GBP account — no browser, no re-authorization. Built for agencies whose single Google account has manager access to many client locations and who run one profile per client: connect one location the normal way (browser OAuth), then bulk-assign the rest onto each client's profile via this endpoint. The path `accountId` is a SOURCE connected GBP account (the token holder); the body `profileId` is the TARGET profile. Returns 409 if the target profile already has a Google Business connection (switch its location with PUT gmb-locations instead).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | A source connected GBP account whose OAuth grant is reused.
$assign_google_business_location_request = {"profileId":"507f1f77bcf86cd799439011","selectedLocationId":"locations/12345678901234567890","googleAccountId":"accounts/123456789"}; // \Zernio\Model\AssignGoogleBusinessLocationRequest

try {
    $result = $apiInstance->assignGoogleBusinessLocation($account_id, $assign_google_business_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->assignGoogleBusinessLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| A source connected GBP account whose OAuth grant is reused. | |
| **assign_google_business_location_request** | [**\Zernio\Model\AssignGoogleBusinessLocationRequest**](../Model/AssignGoogleBusinessLocationRequest.md)|  | |

### Return type

[**\Zernio\Model\AssignGoogleBusinessLocation200Response**](../Model/AssignGoogleBusinessLocation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `completeTelegramConnect()`

```php
completeTelegramConnect($code): \Zernio\Model\CompleteTelegramConnect200Response
```

Check Telegram status

Poll this endpoint to check if a Telegram access code has been used to connect a channel/group. Recommended polling interval: 3 seconds. Status values: pending (waiting for user), connected (channel/group linked), expired (generate a new code).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = ZRN-ABC123; // string | The access code to check status for

try {
    $result = $apiInstance->completeTelegramConnect($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->completeTelegramConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The access code to check status for | |

### Return type

[**\Zernio\Model\CompleteTelegramConnect200Response**](../Model/CompleteTelegramConnect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `completeWhatsAppPhoneSelection()`

```php
completeWhatsAppPhoneSelection($complete_whats_app_phone_selection_request, $x_connect_token): \Zernio\Model\CompleteWhatsAppPhoneSelection200Response
```

Complete number selection

Bind a specific WhatsApp phone number to the Zernio profile after the user picks one from `listWhatsAppPhoneNumbers`. Exchanges the short-lived OAuth token for a long-lived token, subscribes the WABA to webhooks, and creates the SocialAccount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$complete_whats_app_phone_selection_request = {"profileId":"6507a1b2c3d4e5f6a7b8c9d0","phoneNumberId":"1875844705851813","wabaId":"317766992490131","tempToken":"EAABsbCS...short-lived-token"}; // \Zernio\Model\CompleteWhatsAppPhoneSelectionRequest
$x_connect_token = 'x_connect_token_example'; // string | Alternative auth for API users' end customers

try {
    $result = $apiInstance->completeWhatsAppPhoneSelection($complete_whats_app_phone_selection_request, $x_connect_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->completeWhatsAppPhoneSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **complete_whats_app_phone_selection_request** | [**\Zernio\Model\CompleteWhatsAppPhoneSelectionRequest**](../Model/CompleteWhatsAppPhoneSelectionRequest.md)|  | |
| **x_connect_token** | **string**| Alternative auth for API users&#39; end customers | [optional] |

### Return type

[**\Zernio\Model\CompleteWhatsAppPhoneSelection200Response**](../Model/CompleteWhatsAppPhoneSelection200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configureTikTokAdsBrandIdentity()`

```php
configureTikTokAdsBrandIdentity($configure_tik_tok_ads_brand_identity_request): \Zernio\Model\ConfigureTikTokAdsBrandIdentity200Response
```

Set TikTok brand identity

Set or update the Brand Identity (display name + avatar) for a `tiktokads` SocialAccount. TikTok requires every ad to carry an `identity_id + identity_type` pair. The Brand Identity is the CUSTOMIZED_USER alternative to attributing ads to a real @username (TT_USER). This route uploads the supplied image to TikTok, creates the identity via `/v2/identity/create/`, and caches the resulting `identity_id` on the account so subsequent `POST /v1/ads/create` calls can opt into it via `identityType: 'CUSTOMIZED_USER'`.  Configurable on every `tiktokads` account, including linked-mode ones (those with a posting account on the same profile). Configuration is idempotent and harmless when posting is also connected: the default ad-create path still prefers TT_USER, and CUSTOMIZED_USER is only used per-ad when the caller explicitly opts in.  TikTok identities are immutable post-creation. Re-saving creates a new identity on TikTok and swaps the cached id; the old identity stays orphaned on TikTok's side (harmless, no billing impact).  Alternative: pass `brandIdentity` directly on `POST /v1/ads/create` to configure on first ad creation in a single round-trip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configure_tik_tok_ads_brand_identity_request = new \Zernio\Model\ConfigureTikTokAdsBrandIdentityRequest(); // \Zernio\Model\ConfigureTikTokAdsBrandIdentityRequest

try {
    $result = $apiInstance->configureTikTokAdsBrandIdentity($configure_tik_tok_ads_brand_identity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->configureTikTokAdsBrandIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configure_tik_tok_ads_brand_identity_request** | [**\Zernio\Model\ConfigureTikTokAdsBrandIdentityRequest**](../Model/ConfigureTikTokAdsBrandIdentityRequest.md)|  | |

### Return type

[**\Zernio\Model\ConfigureTikTokAdsBrandIdentity200Response**](../Model/ConfigureTikTokAdsBrandIdentity200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectAds()`

```php
connectAds($platform, $profile_id, $account_id, $redirect_url, $headless, $force, $ad_account_id, $ad_account_ids): \Zernio\Model\ConnectAds200Response
```

Connect ads for a platform

Unified ads connection endpoint. Creates a dedicated ads SocialAccount for the specified platform.  Same-token platforms (facebook, instagram, linkedin, pinterest): the ads SocialAccount (metaads, linkedinads, pinterestads) reuses the OAuth token of the parent posting account, but only when an active parent exists and, for facebook and instagram, its stored token carries ads_management and ads_read (linkedin and pinterest need no extra scope). In that case no extra OAuth happens and the response is alreadyConnected: true. When no such parent exists, or the scopes are missing, the endpoint returns an authUrl and a full OAuth round trip is required. When a parent exists but carries no token usable for ad accounts, the call fails with 400 RECONNECT_REQUIRED. Independently of the branch, the call can return 403 ADS_ADDON_REQUIRED without the ads add-on and 402 PAYMENT_REQUIRED when the billing gate is closed.  Meta Ads prerequisite: connecting Meta Ads (via facebook or instagram) requires a Facebook Page. Not because the ad account is read through a Page, but because both parent posting accounts are: the facebook flow only offers Pages you manage, and the instagram flow with loginMethod=facebook_login only offers Instagram accounts linked to one of those Pages. Without a Page there is no parent account to inherit a token from. A user who manages no Facebook Page cannot complete this connection, and the facebook flow ends with error=no_facebook_pages.  Separate-token platforms (tiktok, twitter): Starts the platform-specific marketing API OAuth flow and creates an ads SocialAccount (tiktokads, xads) with its own token. If the ads account already exists, returns alreadyConnected: true.   - tiktok: accountId is OPTIONAL. With accountId, the new tiktokads account links to that posting account (parentAccountId set) — Spark Ads + standalone ads using the posting TT_USER identity become available. Without accountId, ads-only mode kicks in: the new tiktokads account has parentAccountId=null and standalone ads use a synthetic CUSTOMIZED_USER (\"Brand Identity\"); Spark Ads are unavailable because TikTok requires a posting account for them. The Brand Identity is configured separately via PATCH /v1/connect/tiktok-ads (or inline on POST /v1/ads/create via the brandIdentity field).   - twitter (X Ads): accountId is REQUIRED. There's no ads-only mode — tweets need to be authored by a real X user.  Standalone platforms (googleads): Starts the Google Ads OAuth flow and creates a standalone ads SocialAccount (googleads) with no parent. If the account already exists, returns alreadyConnected: true.  Ads accounts appear as regular SocialAccount documents with ads platform values (e.g., metaads, tiktokads) in GET /v1/accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Platform to connect ads for. Only platforms with ads support are accepted.  `instagram` requires an Instagram account connected with loginMethod=facebook_login whose token carries ads_management and ads_read. With an account connected through the default instagram_login flow no ads account can be created; do not use this value for those accounts.
$profile_id = 'profile_id_example'; // string | Your Zernio profile ID
$account_id = 'account_id_example'; // string | Existing SocialAccount ID. Required for `twitter` (X Ads). Optional for `tiktok` — omit to enter ads-only mode (no TikTok posting account linked; ad creation uses a Brand Identity instead of a TT_USER). Ignored for same-token (`facebook`, `instagram`, `linkedin`, `pinterest`) and standalone (`googleads`) platforms.
$redirect_url = 'redirect_url_example'; // string | Custom URL the browser is sent to once the OAuth flow finishes. Honored on every ads platform, including the separate-token (`tiktok`, `twitter`) and standalone (`googleads`) flows. MUST be an absolute http(s) URL or a custom app scheme for mobile deeplinks (e.g. myapp://callback); a relative path is rejected with 400 INVALID_REDIRECT_URL. On success `tiktok`, `twitter` and `googleads` land on the URL unchanged, while the same-token platforms (`facebook`, `instagram`, `linkedin`, `pinterest`) append `connected`, `profileId`, `accountId`, `username` and, on API-key calls, `connect_token`. On failure the same error contract applies as on GET /v1/connect/{platform}: `error` and `platform` are always appended, other params are optional, and the value list there is not exhaustive. Note that on the tiktok, twitter and googleads flows `platform` carries the ads platform id (`tiktokads`, `xads`, `googleads`), not the value used in the request path. When omitted, the browser lands on the Zernio dashboard.
$headless = false; // bool | Enable headless mode (same-token platforms only)
$force = false; // bool | Force a fresh OAuth even when an account already exists. Normally the endpoint returns `alreadyConnected: true` whenever a connected account is found, keying off its active state rather than token liveness. Set `force=true` to bypass that and always receivean `authUrl`. Completing the returned OAuth refreshes the stored token on the existing posting and ads accounts in place.
$ad_account_id = act_1330190928038136; // string | Scope ad sync to a single platform ad account. Without this param, sync covers every ad account the connected token can see. Supported on `facebook`/`instagram` (Meta, `act_<digits>`), `linkedin` (bare numeric sponsored-account id), `googleads` (bare customer id digits) and `twitter` (X Ads, base36 account id). `tiktok` scopes advertisers at OAuth and `pinterest` has no ads discovery, so both ignore it. Meta ids are additionally validated against the connected token; unreachable IDs return 400. Setting a scope also removes already synced ads from de-scoped ad accounts. For multiple accounts use `adAccountIds` instead.
$ad_account_ids = array('ad_account_ids_example'); // string[] | Scope ad sync to multiple platform ad accounts (same platform support and id shapes as `adAccountId`). Repeat the param (`?adAccountIds=act_1&adAccountIds=act_2`) or comma-separate (`?adAccountIds=act_1,act_2`). Persisted server-side; latest call wins, and de-scoped ad accounts have their synced ads removed. Omitting both `adAccountId` and `adAccountIds` keeps any previously persisted scope unchanged.

try {
    $result = $apiInstance->connectAds($platform, $profile_id, $account_id, $redirect_url, $headless, $force, $ad_account_id, $ad_account_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Platform to connect ads for. Only platforms with ads support are accepted.  &#x60;instagram&#x60; requires an Instagram account connected with loginMethod&#x3D;facebook_login whose token carries ads_management and ads_read. With an account connected through the default instagram_login flow no ads account can be created; do not use this value for those accounts. | |
| **profile_id** | **string**| Your Zernio profile ID | |
| **account_id** | **string**| Existing SocialAccount ID. Required for &#x60;twitter&#x60; (X Ads). Optional for &#x60;tiktok&#x60; — omit to enter ads-only mode (no TikTok posting account linked; ad creation uses a Brand Identity instead of a TT_USER). Ignored for same-token (&#x60;facebook&#x60;, &#x60;instagram&#x60;, &#x60;linkedin&#x60;, &#x60;pinterest&#x60;) and standalone (&#x60;googleads&#x60;) platforms. | [optional] |
| **redirect_url** | **string**| Custom URL the browser is sent to once the OAuth flow finishes. Honored on every ads platform, including the separate-token (&#x60;tiktok&#x60;, &#x60;twitter&#x60;) and standalone (&#x60;googleads&#x60;) flows. MUST be an absolute http(s) URL or a custom app scheme for mobile deeplinks (e.g. myapp://callback); a relative path is rejected with 400 INVALID_REDIRECT_URL. On success &#x60;tiktok&#x60;, &#x60;twitter&#x60; and &#x60;googleads&#x60; land on the URL unchanged, while the same-token platforms (&#x60;facebook&#x60;, &#x60;instagram&#x60;, &#x60;linkedin&#x60;, &#x60;pinterest&#x60;) append &#x60;connected&#x60;, &#x60;profileId&#x60;, &#x60;accountId&#x60;, &#x60;username&#x60; and, on API-key calls, &#x60;connect_token&#x60;. On failure the same error contract applies as on GET /v1/connect/{platform}: &#x60;error&#x60; and &#x60;platform&#x60; are always appended, other params are optional, and the value list there is not exhaustive. Note that on the tiktok, twitter and googleads flows &#x60;platform&#x60; carries the ads platform id (&#x60;tiktokads&#x60;, &#x60;xads&#x60;, &#x60;googleads&#x60;), not the value used in the request path. When omitted, the browser lands on the Zernio dashboard. | [optional] |
| **headless** | **bool**| Enable headless mode (same-token platforms only) | [optional] [default to false] |
| **force** | **bool**| Force a fresh OAuth even when an account already exists. Normally the endpoint returns &#x60;alreadyConnected: true&#x60; whenever a connected account is found, keying off its active state rather than token liveness. Set &#x60;force&#x3D;true&#x60; to bypass that and always receivean &#x60;authUrl&#x60;. Completing the returned OAuth refreshes the stored token on the existing posting and ads accounts in place. | [optional] [default to false] |
| **ad_account_id** | **string**| Scope ad sync to a single platform ad account. Without this param, sync covers every ad account the connected token can see. Supported on &#x60;facebook&#x60;/&#x60;instagram&#x60; (Meta, &#x60;act_&lt;digits&gt;&#x60;), &#x60;linkedin&#x60; (bare numeric sponsored-account id), &#x60;googleads&#x60; (bare customer id digits) and &#x60;twitter&#x60; (X Ads, base36 account id). &#x60;tiktok&#x60; scopes advertisers at OAuth and &#x60;pinterest&#x60; has no ads discovery, so both ignore it. Meta ids are additionally validated against the connected token; unreachable IDs return 400. Setting a scope also removes already synced ads from de-scoped ad accounts. For multiple accounts use &#x60;adAccountIds&#x60; instead. | [optional] |
| **ad_account_ids** | [**string[]**](../Model/string.md)| Scope ad sync to multiple platform ad accounts (same platform support and id shapes as &#x60;adAccountId&#x60;). Repeat the param (&#x60;?adAccountIds&#x3D;act_1&amp;adAccountIds&#x3D;act_2&#x60;) or comma-separate (&#x60;?adAccountIds&#x3D;act_1,act_2&#x60;). Persisted server-side; latest call wins, and de-scoped ad accounts have their synced ads removed. Omitting both &#x60;adAccountId&#x60; and &#x60;adAccountIds&#x60; keeps any previously persisted scope unchanged. | [optional] |

### Return type

[**\Zernio\Model\ConnectAds200Response**](../Model/ConnectAds200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectBlueskyCredentials()`

```php
connectBlueskyCredentials($connect_bluesky_credentials_request): \Zernio\Model\ConnectBlueskyCredentials200Response
```

Connect Bluesky account

Connect a Bluesky account using identifier (handle or email) and an app password. To get your userId for the state parameter, call GET /v1/users which includes a currentUserId field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_bluesky_credentials_request = {"identifier":"yourhandle.bsky.social","appPassword":"xxxx-xxxx-xxxx-xxxx","state":"6507a1b2c3d4e5f6a7b8c9d0-6507a1b2c3d4e5f6a7b8c9d1","redirectUri":"https://yourapp.com/connected"}; // \Zernio\Model\ConnectBlueskyCredentialsRequest

try {
    $result = $apiInstance->connectBlueskyCredentials($connect_bluesky_credentials_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectBlueskyCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_bluesky_credentials_request** | [**\Zernio\Model\ConnectBlueskyCredentialsRequest**](../Model/ConnectBlueskyCredentialsRequest.md)|  | |

### Return type

[**\Zernio\Model\ConnectBlueskyCredentials200Response**](../Model/ConnectBlueskyCredentials200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectDiscordChannel()`

```php
connectDiscordChannel($connect_discord_channel_request)
```

Connect a Discord channel

Finalize a Discord connect by binding one channel to a profile. Served by a dedicated route, so it is not reachable through POST /v1/connect/{platform}. One connected account per channel: repeat the call with a different channelId to add another.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_discord_channel_request = new \Zernio\Model\ConnectDiscordChannelRequest(); // \Zernio\Model\ConnectDiscordChannelRequest

try {
    $apiInstance->connectDiscordChannel($connect_discord_channel_request);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectDiscordChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_discord_channel_request** | [**\Zernio\Model\ConnectDiscordChannelRequest**](../Model/ConnectDiscordChannelRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectOpenAIAdsCredentials()`

```php
connectOpenAIAdsCredentials($connect_open_ai_ads_credentials_request): \Zernio\Model\ConnectOpenAIAdsCredentials200Response
```

Connect an OpenAI Ads account

Connect an OpenAI Ads account using an API key from ChatGPT Ads Manager.  The key grants full campaign write access on OpenAI's side (OpenAI does not offer a read-only key scope). Zernio uses it to read ads and performance, and to create and manage campaigns you set up through Zernio (create, status, budget, and cancel). Campaigns created directly in ChatGPT Ads Manager can still be managed there.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_open_ai_ads_credentials_request = {"apiKey":"sk-ads-xxxxxxxxxxxxxxxxxxxx","profileId":"6507a1b2c3d4e5f6a7b8c9d0"}; // \Zernio\Model\ConnectOpenAIAdsCredentialsRequest

try {
    $result = $apiInstance->connectOpenAIAdsCredentials($connect_open_ai_ads_credentials_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectOpenAIAdsCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_open_ai_ads_credentials_request** | [**\Zernio\Model\ConnectOpenAIAdsCredentialsRequest**](../Model/ConnectOpenAIAdsCredentialsRequest.md)|  | |

### Return type

[**\Zernio\Model\ConnectOpenAIAdsCredentials200Response**](../Model/ConnectOpenAIAdsCredentials200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectShopifyWithToken()`

```php
connectShopifyWithToken($connect_shopify_with_token_request): \Zernio\Model\ConnectShopifyWithToken200Response
```

Connect a Shopify store with a custom-app Admin token

Token-paste alternative to the OAuth flow: connect a store using the Admin API access token of a custom app the merchant created in their own Shopify admin (Settings → Apps and sales channels → Develop apps, with the `read_content`/`write_content` scopes). Use this when the one-click OAuth connect is unavailable or when your users prefer not to install a third-party app on their store. The token is validated against the store before anything is saved; custom-app tokens do not expire. Connecting the same profile to a store again replaces the stored token in place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_shopify_with_token_request = new \Zernio\Model\ConnectShopifyWithTokenRequest(); // \Zernio\Model\ConnectShopifyWithTokenRequest

try {
    $result = $apiInstance->connectShopifyWithToken($connect_shopify_with_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectShopifyWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_shopify_with_token_request** | [**\Zernio\Model\ConnectShopifyWithTokenRequest**](../Model/ConnectShopifyWithTokenRequest.md)|  | |

### Return type

[**\Zernio\Model\ConnectShopifyWithToken200Response**](../Model/ConnectShopifyWithToken200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectSlackChannel()`

```php
connectSlackChannel($connect_slack_channel_request)
```

Connect a Slack channel

Finalize a Slack connect by creating the per-channel account. Served by a dedicated route, so it is not reachable through POST /v1/connect/{platform}. Send pendingDataToken for a first connect (the nonce from the OAuth redirect) or accountId to add another channel to a workspace already connected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_slack_channel_request = new \Zernio\Model\ConnectSlackChannelRequest(); // \Zernio\Model\ConnectSlackChannelRequest

try {
    $apiInstance->connectSlackChannel($connect_slack_channel_request);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectSlackChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_slack_channel_request** | [**\Zernio\Model\ConnectSlackChannelRequest**](../Model/ConnectSlackChannelRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectWhatsAppCredentials()`

```php
connectWhatsAppCredentials($connect_whats_app_credentials_request): \Zernio\Model\ConnectWhatsAppCredentials200Response
```

Connect WhatsApp via credentials

Connect a WhatsApp Business Account by providing Meta credentials directly. This is the headless alternative to the Embedded Signup browser flow.  To get the required credentials: 1. Go to Meta Business Suite (business.facebook.com) 2. Create or select a WhatsApp Business Account 3. In Business Settings > System Users, create a System User 4. Assign it the whatsapp_business_management and whatsapp_business_messaging permissions 5. Generate a permanent access token 6. Get the WABA ID from WhatsApp Manager > Account Tools > Phone Numbers 7. Get the Phone Number ID from the same page (click on the number)  Warning: connecting subscribes your own Meta app to this WABA with an override callback that redirects its webhook delivery to Zernio. This WABA's events stop reaching any callback URL you had configured before, immediately and with no overlap window. Do not unsubscribe your app from the WABA afterward: that also cuts off Zernio's delivery, and recovery requires calling this endpoint again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_whats_app_credentials_request = {"profileId":"6507a1b2c3d4e5f6a7b8c9d0","accessToken":"EAABsbCS...your-system-user-token","wabaId":"123456789012345","phoneNumberId":"987654321098765","pin":"481902"}; // \Zernio\Model\ConnectWhatsAppCredentialsRequest

try {
    $result = $apiInstance->connectWhatsAppCredentials($connect_whats_app_credentials_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectWhatsAppCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_whats_app_credentials_request** | [**\Zernio\Model\ConnectWhatsAppCredentialsRequest**](../Model/ConnectWhatsAppCredentialsRequest.md)|  | |

### Return type

[**\Zernio\Model\ConnectWhatsAppCredentials200Response**](../Model/ConnectWhatsAppCredentials200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectWhatsAppEmbeddedSignup()`

```php
connectWhatsAppEmbeddedSignup($connect_whats_app_embedded_signup_request)
```

Connect WhatsApp from Embedded Signup

Exchange the authorization code Meta Embedded Signup returns to your browser SDK. This is the headless completion path for WhatsApp: the code never passes through a redirect_uri, so POST /v1/connect/{platform} cannot accept it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_whats_app_embedded_signup_request = new \Zernio\Model\ConnectWhatsAppEmbeddedSignupRequest(); // \Zernio\Model\ConnectWhatsAppEmbeddedSignupRequest

try {
    $apiInstance->connectWhatsAppEmbeddedSignup($connect_whats_app_embedded_signup_request);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectWhatsAppEmbeddedSignup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_whats_app_embedded_signup_request** | [**\Zernio\Model\ConnectWhatsAppEmbeddedSignupRequest**](../Model/ConnectWhatsAppEmbeddedSignupRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPinterestBoard()`

```php
createPinterestBoard($account_id, $create_pinterest_board_request): \Zernio\Model\CreatePinterestBoard201Response
```

Create Pinterest board

Creates a new board on the connected Pinterest account. The returned board ID can be used immediately as `platformSpecificData.boardId` when creating a Pinterest post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$create_pinterest_board_request = {"name":"Summer Recipes","description":"My favorite summer recipes","privacy":"PUBLIC"}; // \Zernio\Model\CreatePinterestBoardRequest

try {
    $result = $apiInstance->createPinterestBoard($account_id, $create_pinterest_board_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->createPinterestBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **create_pinterest_board_request** | [**\Zernio\Model\CreatePinterestBoardRequest**](../Model/CreatePinterestBoardRequest.md)|  | |

### Return type

[**\Zernio\Model\CreatePinterestBoard201Response**](../Model/CreatePinterestBoard201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectUrl()`

```php
getConnectUrl($platform, $profile_id, $redirect_url, $headless, $login_method, $onboarding): \Zernio\Model\GetConnectUrl200Response
```

Get OAuth connect URL

Initiate an OAuth connection flow. Returns an authUrl to redirect the user to. Standard flow: Zernio hosts the selection UI, then redirects to your redirect_url. Headless mode (headless=true): user is redirected to your redirect_url with OAuth data for custom UI. Use the platform-specific selection endpoints to complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Social media platform to connect. `snapchat` is a closed beta with no public release date: it returns 403 `PLATFORM_BETA_RESTRICTED` until the account is approved.
$profile_id = 'profile_id_example'; // string | Your Zernio profile ID (get from /v1/profiles). For WhatsApp, a Zernio-provisioned number can only be connected on the profile it was provisioned to; connecting from any other profile is rejected with a 409.
$redirect_url = 'redirect_url_example'; // string | Your custom redirect URL after connection completes. MUST be an absolute http(s) URL or a custom app scheme for mobile deeplinks (e.g. myapp://callback); a relative path is rejected with 400 INVALID_REDIRECT_URL. Result params are appended with the URL API, so an existing query string is preserved. Standard mode appends connected={platform}&profileId=X&accountId=Y&username=Z. Headless mode appends OAuth data params for platforms requiring selection (e.g. LinkedIn orgs, Facebook pages). If no selection is needed, the account is created directly and the redirect includes accountId.  On failure, the browser is sent to the same redirect_url with `error` and `platform` appended. `error` and `platform` are always present. `error_message`, `is_user_fixable`, `reason` and `dashboard_url` are conditional and must be treated as optional.  This list is NOT exhaustive and new values may be added at any time. Treat an unrecognized value as a generic failure rather than matching it exhaustively. Existing values are not renamed or removed without notice.  OAuth and callback:   oauth_denied, invalid_callback, invalid_state, unsupported_platform, connection_failed,   internal_error, token_exchange_failed, byok_config_error, personal_account_not_supported,   missing_google_permissions, platform_requires_destination, reconnect_account_mismatch,   invalid_request  Access and limits:   profile_not_found, invalid_profile_id, access_denied, account_limit_exceeded,   profile_limit_exceeded, payment_required  Destination selection:   no_facebook_pages, facebook_pages_error, no_google_locations, google_locations_error,   google_permission_denied, no_snapchat_public_profiles, snapchat_profiles_error,   discord_no_guild, slack_no_team  WhatsApp:   whatsapp_error, one_whatsapp_per_profile, whatsapp_number_already_connected,   whatsapp_number_pinned_to_profile, connection_cancelled  Google Ads (platform=googleads):   google_ads_auth_failed, google_ads_invalid_state, google_ads_config_error,   google_ads_token_failed, google_ads_quota_exhausted, google_ads_callback_error  TikTok Ads (platform=tiktokads):   tiktok_ads_auth_failed, tiktok_ads_invalid_state, tiktok_ads_access_denied,   tiktok_ads_config_error, tiktok_ads_token_failed, tiktok_ads_account_not_found,   tiktok_ads_callback_error  X Ads (platform=xads):   x_ads_denied, x_ads_auth_failed, x_ads_config_error, x_ads_account_not_found,   x_ads_state_error, x_ads_token_failed, x_ads_token_missing, x_ads_callback_error  Shopify (platform=shopify):   shopify_auth_failed, shopify_config_error, shopify_invalid_state, shopify_invalid_hmac,   shopify_invalid_shop, shopify_missing_scopes, shopify_callback_error  1. On this endpoint every upstream OAuth error is collapsed into `oauth_denied`. The provider's own value (for example Meta's `access_denied`) is not forwarded. The dedicated ads flows below are different: they use their own denial slugs and `google_ads_auth_failed` and `tiktok_ads_auth_failed` may carry the provider's raw error string in `error_message`.  2. On the tiktok and twitter ads flows `platform` carries the ads platform id (`tiktokads`, `xads`), not the value used in the request path. The googleads and shopify flows report `googleads` and `shopify`.
$headless = false; // bool | When true, the user is redirected to your redirect_url with raw OAuth data (code, state) instead of Zernio's default account selection UI. Use this to build a custom connect experience.
$login_method = 'instagram_login'; // string | Instagram only. Which of the two Instagram connection methods to use. Ignored for every other platform.  `instagram_login` (the default, and what you get if you omit this): the Instagram Login dialog. The user authorizes their Instagram professional account directly, no Facebook Page required.  `facebook_login`: the Facebook Login dialog, i.e. \"Instagram API with Facebook Login\". The user authorizes a Facebook Page that has a linked Instagram professional account, and every API call for that account then runs through the Page. Use this when the customer manages Instagram through a Page and expects the Facebook consent screen. Because the user has to pick which Page to connect, the callback continues at the account-selection step, `/v1/connect/instagram/select-account`.  `facebook_login` supports `headless=true` like the other selection platforms: the callback redirects to your `redirect_url` with `profileId`, `tempToken`, `platform=instagram`, `step=select_account` and `connect_token`, which you pass into the select-account endpoints to finish. The default `instagram_login` has no selection step, so it connects the account directly.
$onboarding = 'onboarding_example'; // string | WhatsApp only. Ignored for every other platform. Controls which screen Meta's Embedded Signup popup shows.  If omitted, the connection defaults to coexistence (same as `business_app` below), preserving existing behavior for numbers already on the WhatsApp Business app.  `api`: standard Embedded Signup, showing Meta's WABA/number picker. Use this to connect a phone number already on Cloud API elsewhere.  `business_app`: coexistence, i.e. 'Connect existing WhatsApp Business app' (a number shared between Cloud API and the consumer WhatsApp Business app).

try {
    $result = $apiInstance->getConnectUrl($platform, $profile_id, $redirect_url, $headless, $login_method, $onboarding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getConnectUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Social media platform to connect. &#x60;snapchat&#x60; is a closed beta with no public release date: it returns 403 &#x60;PLATFORM_BETA_RESTRICTED&#x60; until the account is approved. | |
| **profile_id** | **string**| Your Zernio profile ID (get from /v1/profiles). For WhatsApp, a Zernio-provisioned number can only be connected on the profile it was provisioned to; connecting from any other profile is rejected with a 409. | |
| **redirect_url** | **string**| Your custom redirect URL after connection completes. MUST be an absolute http(s) URL or a custom app scheme for mobile deeplinks (e.g. myapp://callback); a relative path is rejected with 400 INVALID_REDIRECT_URL. Result params are appended with the URL API, so an existing query string is preserved. Standard mode appends connected&#x3D;{platform}&amp;profileId&#x3D;X&amp;accountId&#x3D;Y&amp;username&#x3D;Z. Headless mode appends OAuth data params for platforms requiring selection (e.g. LinkedIn orgs, Facebook pages). If no selection is needed, the account is created directly and the redirect includes accountId.  On failure, the browser is sent to the same redirect_url with &#x60;error&#x60; and &#x60;platform&#x60; appended. &#x60;error&#x60; and &#x60;platform&#x60; are always present. &#x60;error_message&#x60;, &#x60;is_user_fixable&#x60;, &#x60;reason&#x60; and &#x60;dashboard_url&#x60; are conditional and must be treated as optional.  This list is NOT exhaustive and new values may be added at any time. Treat an unrecognized value as a generic failure rather than matching it exhaustively. Existing values are not renamed or removed without notice.  OAuth and callback:   oauth_denied, invalid_callback, invalid_state, unsupported_platform, connection_failed,   internal_error, token_exchange_failed, byok_config_error, personal_account_not_supported,   missing_google_permissions, platform_requires_destination, reconnect_account_mismatch,   invalid_request  Access and limits:   profile_not_found, invalid_profile_id, access_denied, account_limit_exceeded,   profile_limit_exceeded, payment_required  Destination selection:   no_facebook_pages, facebook_pages_error, no_google_locations, google_locations_error,   google_permission_denied, no_snapchat_public_profiles, snapchat_profiles_error,   discord_no_guild, slack_no_team  WhatsApp:   whatsapp_error, one_whatsapp_per_profile, whatsapp_number_already_connected,   whatsapp_number_pinned_to_profile, connection_cancelled  Google Ads (platform&#x3D;googleads):   google_ads_auth_failed, google_ads_invalid_state, google_ads_config_error,   google_ads_token_failed, google_ads_quota_exhausted, google_ads_callback_error  TikTok Ads (platform&#x3D;tiktokads):   tiktok_ads_auth_failed, tiktok_ads_invalid_state, tiktok_ads_access_denied,   tiktok_ads_config_error, tiktok_ads_token_failed, tiktok_ads_account_not_found,   tiktok_ads_callback_error  X Ads (platform&#x3D;xads):   x_ads_denied, x_ads_auth_failed, x_ads_config_error, x_ads_account_not_found,   x_ads_state_error, x_ads_token_failed, x_ads_token_missing, x_ads_callback_error  Shopify (platform&#x3D;shopify):   shopify_auth_failed, shopify_config_error, shopify_invalid_state, shopify_invalid_hmac,   shopify_invalid_shop, shopify_missing_scopes, shopify_callback_error  1. On this endpoint every upstream OAuth error is collapsed into &#x60;oauth_denied&#x60;. The provider&#39;s own value (for example Meta&#39;s &#x60;access_denied&#x60;) is not forwarded. The dedicated ads flows below are different: they use their own denial slugs and &#x60;google_ads_auth_failed&#x60; and &#x60;tiktok_ads_auth_failed&#x60; may carry the provider&#39;s raw error string in &#x60;error_message&#x60;.  2. On the tiktok and twitter ads flows &#x60;platform&#x60; carries the ads platform id (&#x60;tiktokads&#x60;, &#x60;xads&#x60;), not the value used in the request path. The googleads and shopify flows report &#x60;googleads&#x60; and &#x60;shopify&#x60;. | [optional] |
| **headless** | **bool**| When true, the user is redirected to your redirect_url with raw OAuth data (code, state) instead of Zernio&#39;s default account selection UI. Use this to build a custom connect experience. | [optional] [default to false] |
| **login_method** | **string**| Instagram only. Which of the two Instagram connection methods to use. Ignored for every other platform.  &#x60;instagram_login&#x60; (the default, and what you get if you omit this): the Instagram Login dialog. The user authorizes their Instagram professional account directly, no Facebook Page required.  &#x60;facebook_login&#x60;: the Facebook Login dialog, i.e. \&quot;Instagram API with Facebook Login\&quot;. The user authorizes a Facebook Page that has a linked Instagram professional account, and every API call for that account then runs through the Page. Use this when the customer manages Instagram through a Page and expects the Facebook consent screen. Because the user has to pick which Page to connect, the callback continues at the account-selection step, &#x60;/v1/connect/instagram/select-account&#x60;.  &#x60;facebook_login&#x60; supports &#x60;headless&#x3D;true&#x60; like the other selection platforms: the callback redirects to your &#x60;redirect_url&#x60; with &#x60;profileId&#x60;, &#x60;tempToken&#x60;, &#x60;platform&#x3D;instagram&#x60;, &#x60;step&#x3D;select_account&#x60; and &#x60;connect_token&#x60;, which you pass into the select-account endpoints to finish. The default &#x60;instagram_login&#x60; has no selection step, so it connects the account directly. | [optional] [default to &#39;instagram_login&#39;] |
| **onboarding** | **string**| WhatsApp only. Ignored for every other platform. Controls which screen Meta&#39;s Embedded Signup popup shows.  If omitted, the connection defaults to coexistence (same as &#x60;business_app&#x60; below), preserving existing behavior for numbers already on the WhatsApp Business app.  &#x60;api&#x60;: standard Embedded Signup, showing Meta&#39;s WABA/number picker. Use this to connect a phone number already on Cloud API elsewhere.  &#x60;business_app&#x60;: coexistence, i.e. &#39;Connect existing WhatsApp Business app&#39; (a number shared between Cloud API and the consumer WhatsApp Business app). | [optional] |

### Return type

[**\Zernio\Model\GetConnectUrl200Response**](../Model/GetConnectUrl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacebookPages()`

```php
getFacebookPages($account_id, $refresh): \Zernio\Model\GetFacebookPages200Response
```

List Facebook pages

Returns all Facebook pages the connected account has access to, including the currently selected page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$refresh = True; // bool | When true, bypasses the page cache and fetches fresh pages from Meta. Rate-limited server-side to 1 refresh per 60s. Pages no longer accessible to the connected account will be removed from the list on refresh.

try {
    $result = $apiInstance->getFacebookPages($account_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getFacebookPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **refresh** | **bool**| When true, bypasses the page cache and fetches fresh pages from Meta. Rate-limited server-side to 1 refresh per 60s. Pages no longer accessible to the connected account will be removed from the list on refresh. | [optional] |

### Return type

[**\Zernio\Model\GetFacebookPages200Response**](../Model/GetFacebookPages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGmbLocations()`

```php
getGmbLocations($account_id, $search, $filter, $limit): \Zernio\Model\GetGmbLocations200Response
```

List GBP locations

Returns Google Business Profile locations the connected account can access, plus the currently selected location. The list is bounded (see hasMore); for accounts that own many locations, use the search or filter query params to find a specific one instead of loading them all, or raise limit to enumerate an account with more than 100 locations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$search = 'search_example'; // string | Free-text search on the business name, applied server-side by Google. Use for accounts with many locations.
$filter = 'filter_example'; // string | Raw Google Business Information API filter expression (advanced; takes precedence over search), e.g. storeCode=\"LH279411\".
$limit = 100; // int | Max locations to return (default 100, max 500). Raise it to enumerate an account with more than 100 locations; for accounts with thousands, use search/filter instead.

try {
    $result = $apiInstance->getGmbLocations($account_id, $search, $filter, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getGmbLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **search** | **string**| Free-text search on the business name, applied server-side by Google. Use for accounts with many locations. | [optional] |
| **filter** | **string**| Raw Google Business Information API filter expression (advanced; takes precedence over search), e.g. storeCode&#x3D;\&quot;LH279411\&quot;. | [optional] |
| **limit** | **int**| Max locations to return (default 100, max 500). Raise it to enumerate an account with more than 100 locations; for accounts with thousands, use search/filter instead. | [optional] [default to 100] |

### Return type

[**\Zernio\Model\GetGmbLocations200Response**](../Model/GetGmbLocations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedInOrganizations()`

```php
getLinkedInOrganizations($account_id): \Zernio\Model\GetLinkedInOrganizations200Response
```

List LinkedIn orgs

Returns LinkedIn organizations (company pages) the connected account has admin access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getLinkedInOrganizations($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getLinkedInOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetLinkedInOrganizations200Response**](../Model/GetLinkedInOrganizations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPendingOAuthData()`

```php
getPendingOAuthData($token): \Zernio\Model\GetPendingOAuthData200Response
```

Get pending OAuth data

Fetch pending OAuth data for headless mode using the pendingDataToken from the redirect URL.  **Scope**: This endpoint is used for LinkedIn organizations, Google Business locations, Slack channels, Snapchat profiles, and Pinterest boards, where the selection list is too large to fit in URL params. The redirect carries a `pendingDataToken` instead of the full payload; the response includes the corresponding selection array (e.g. `boards` for Pinterest). WhatsApp, Facebook and other platforms pass selection state directly via URL query params on the redirect (`profileId`, `tempToken`, `step`), no pending record is created, so this endpoint will return 404 for those flows. Use the platform-specific selection endpoint instead (e.g. `/v1/connect/whatsapp/select-phone-number`).  Reading the token does not consume it, so this fetch is repeatable until the token expires 1 hour after issuance. Completing the platform selection deletes the pending record, so the token stops working from then on. No authentication required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The pending data token from the OAuth redirect URL (pendingDataToken parameter)

try {
    $result = $apiInstance->getPendingOAuthData($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getPendingOAuthData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The pending data token from the OAuth redirect URL (pendingDataToken parameter) | |

### Return type

[**\Zernio\Model\GetPendingOAuthData200Response**](../Model/GetPendingOAuthData200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPinterestBoards()`

```php
getPinterestBoards($account_id): \Zernio\Model\GetPinterestBoards200Response
```

List Pinterest boards

Returns the boards available for a connected Pinterest account. Use this to get a board ID when creating a Pinterest post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getPinterestBoards($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getPinterestBoards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetPinterestBoards200Response**](../Model/GetPinterestBoards200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedditFlairs()`

```php
getRedditFlairs($account_id, $subreddit): \Zernio\Model\GetRedditFlairs200Response
```

List subreddit flairs

Returns available post flairs for a subreddit. Some subreddits require a flair when posting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$subreddit = 'subreddit_example'; // string | Subreddit name (without \"r/\" prefix) to fetch flairs for

try {
    $result = $apiInstance->getRedditFlairs($account_id, $subreddit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getRedditFlairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **subreddit** | **string**| Subreddit name (without \&quot;r/\&quot; prefix) to fetch flairs for | |

### Return type

[**\Zernio\Model\GetRedditFlairs200Response**](../Model/GetRedditFlairs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedditSubreddits()`

```php
getRedditSubreddits($account_id): \Zernio\Model\GetRedditSubreddits200Response
```

List Reddit subreddits

Returns the subreddits the connected Reddit account can post to. Use this to get a subreddit name when creating a Reddit post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getRedditSubreddits($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getRedditSubreddits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetRedditSubreddits200Response**](../Model/GetRedditSubreddits200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShopifyConnectUrl()`

```php
getShopifyConnectUrl($profile_id, $shop, $redirect_url): \Zernio\Model\GetConnectUrl200Response
```

Get Shopify OAuth connect URL

Initiate the Shopify OAuth flow for a store. Shopify is a connect-only platform: the connected account does not publish social posts, it powers the Blogs API (`/v1/accounts/{accountId}/blogs`). Returns an `authUrl` to redirect the merchant to; after they approve the install, Shopify redirects their browser to Zernio's callback, the account is created on the profile (platform `shopify`), and the browser is redirected to `redirect_url` (or the Zernio dashboard when omitted). Requested scopes are `read_content` and `write_content` (content only; no customer or order data). Connecting the same profile to a store again refreshes the stored token in place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Your Zernio profile ID (get from /v1/profiles).
$shop = 'shop_example'; // string | The myshopify.com store domain to connect, e.g. `your-store.myshopify.com` (the bare `your-store` prefix is accepted too).
$redirect_url = 'redirect_url_example'; // string | Your custom redirect URL after connection completes. MUST be an absolute http(s) URL or a custom app scheme for mobile deeplinks (e.g. myapp://callback); a relative path is rejected with 400 INVALID_REDIRECT_URL. On failure an `error` query param is appended.

try {
    $result = $apiInstance->getShopifyConnectUrl($profile_id, $shop, $redirect_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getShopifyConnectUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Your Zernio profile ID (get from /v1/profiles). | |
| **shop** | **string**| The myshopify.com store domain to connect, e.g. &#x60;your-store.myshopify.com&#x60; (the bare &#x60;your-store&#x60; prefix is accepted too). | |
| **redirect_url** | **string**| Your custom redirect URL after connection completes. MUST be an absolute http(s) URL or a custom app scheme for mobile deeplinks (e.g. myapp://callback); a relative path is rejected with 400 INVALID_REDIRECT_URL. On failure an &#x60;error&#x60; query param is appended. | [optional] |

### Return type

[**\Zernio\Model\GetConnectUrl200Response**](../Model/GetConnectUrl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubredditRules()`

```php
getSubredditRules($account_id, $subreddit): \Zernio\Model\GetSubredditRules200Response
```

Get subreddit rules

Returns a subreddit's posting rules plus Reddit's site-wide rules, so you can check them before submitting and avoid a removal.  Use this alongside `POST /v1/tools/validate/subreddit`, which only confirms that a subreddit exists and reports its basic posting settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the Reddit account
$subreddit = webdev; // string | Subreddit name (without the \"r/\" prefix)

try {
    $result = $apiInstance->getSubredditRules($account_id, $subreddit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getSubredditRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the Reddit account | |
| **subreddit** | **string**| Subreddit name (without the \&quot;r/\&quot; prefix) | |

### Return type

[**\Zernio\Model\GetSubredditRules200Response**](../Model/GetSubredditRules200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTelegramConnectStatus()`

```php
getTelegramConnectStatus($profile_id): \Zernio\Model\GetTelegramConnectStatus200Response
```

Generate Telegram code

Generate an access code (valid 15 minutes) for connecting a Telegram channel or group. Add the bot as admin, then send the code + @yourchannel to the bot. Poll PATCH /v1/connect/telegram to check status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | The profile ID to connect the Telegram account to

try {
    $result = $apiInstance->getTelegramConnectStatus($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getTelegramConnectStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile ID to connect the Telegram account to | |

### Return type

[**\Zernio\Model\GetTelegramConnectStatus200Response**](../Model/GetTelegramConnectStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getYoutubeCaptions()`

```php
getYoutubeCaptions($account_id, $video_id, $language, $format, $refresh): \Zernio\Model\GetYoutubeCaptions200Response
```

Get a YouTube video transcript

Returns the caption track YouTube already holds for one of the connected channel's own videos, as plain text plus timed cues. Use it instead of downloading and transcribing the video yourself.  Auto-generated (ASR) tracks are included: YouTube serves them to the channel owner, which is what the connected account is. Uploaded tracks win over auto-generated ones when both exist for a language.  Caching: we store the transcript on first read and serve it from there afterwards, so you do not need to cache it yourself. A cached read costs no YouTube quota and does not call YouTube at all. `source` tells you which happened (`youtube` on the first read, `cache` after). Pass `refresh=true` only when the captions actually changed on YouTube, since that re-downloads.  Notes: - Only videos owned by this connected channel. Anything else returns 404. - `contentDetails.caption` in YouTube's own API reads `false` on videos that DO have a serving auto-generated track, so it is not a usable availability signal. Call this endpoint and handle the 404. - YouTube generates auto-captions only for videos with recognisable speech, and can take a few hours after upload to publish them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected YouTube account.
$video_id = 'video_id_example'; // string | The YouTube video id (the `platformPostId` on a synced external post).
$language = 'language_example'; // string | BCP-47 language tag as YouTube labels the track. `en` also matches an `en-GB` track. Omit to take the best available track.
$format = 'json'; // string | `json` returns timed `cues`; `srt` returns the raw SubRip body instead. `text` is present either way.
$refresh = false; // bool | Re-download from YouTube instead of serving the stored copy. Spends 200 quota units.

try {
    $result = $apiInstance->getYoutubeCaptions($account_id, $video_id, $language, $format, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getYoutubeCaptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected YouTube account. | |
| **video_id** | **string**| The YouTube video id (the &#x60;platformPostId&#x60; on a synced external post). | |
| **language** | **string**| BCP-47 language tag as YouTube labels the track. &#x60;en&#x60; also matches an &#x60;en-GB&#x60; track. Omit to take the best available track. | [optional] |
| **format** | **string**| &#x60;json&#x60; returns timed &#x60;cues&#x60;; &#x60;srt&#x60; returns the raw SubRip body instead. &#x60;text&#x60; is present either way. | [optional] [default to &#39;json&#39;] |
| **refresh** | **bool**| Re-download from YouTube instead of serving the stored copy. Spends 200 quota units. | [optional] [default to false] |

### Return type

[**\Zernio\Model\GetYoutubeCaptions200Response**](../Model/GetYoutubeCaptions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getYoutubePlaylists()`

```php
getYoutubePlaylists($account_id): \Zernio\Model\GetYoutubePlaylists200Response
```

List YouTube playlists

Returns the playlists available for a connected YouTube account. Use this to get a playlist ID when creating a YouTube post with the playlistId field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getYoutubePlaylists($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getYoutubePlaylists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetYoutubePlaylists200Response**](../Model/GetYoutubePlaylists200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleOAuthCallback()`

```php
handleOAuthCallback($platform, $handle_o_auth_callback_request)
```

Complete OAuth callback

Exchange the OAuth authorization code for tokens and connect the account to the specified profile.  Facebook, Google Business, Snapchat and WhatsApp are not accepted here: their account identity is a destination chosen after OAuth, which this single-shot exchange cannot do. Connect them through the redirect flow from `GET /v1/connect/{platform}`, or, for WhatsApp Embedded Signup, through `POST /v1/connect/whatsapp/embedded-signup`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Social platform to complete the connect for. Discord, Slack and Telegram are absent because they are served by their own dedicated routes, documented separately.
$handle_o_auth_callback_request = new \Zernio\Model\HandleOAuthCallbackRequest(); // \Zernio\Model\HandleOAuthCallbackRequest

try {
    $apiInstance->handleOAuthCallback($platform, $handle_o_auth_callback_request);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->handleOAuthCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Social platform to complete the connect for. Discord, Slack and Telegram are absent because they are served by their own dedicated routes, documented separately. | |
| **handle_o_auth_callback_request** | [**\Zernio\Model\HandleOAuthCallbackRequest**](../Model/HandleOAuthCallbackRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateTelegramConnect()`

```php
initiateTelegramConnect($initiate_telegram_connect_request): \Zernio\Model\InitiateTelegramConnect200Response
```

Connect Telegram directly

Connect a Telegram channel/group directly using the chat ID. Alternative to the access code flow. The bot must already be an admin in the channel/group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$initiate_telegram_connect_request = {"chatId":"-1001234567890","profileId":"6507a1b2c3d4e5f6a7b8c9d0"}; // \Zernio\Model\InitiateTelegramConnectRequest

try {
    $result = $apiInstance->initiateTelegramConnect($initiate_telegram_connect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->initiateTelegramConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **initiate_telegram_connect_request** | [**\Zernio\Model\InitiateTelegramConnectRequest**](../Model/InitiateTelegramConnectRequest.md)|  | |

### Return type

[**\Zernio\Model\InitiateTelegramConnect200Response**](../Model/InitiateTelegramConnect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFacebookPages()`

```php
listFacebookPages($profile_id, $temp_token): \Zernio\Model\ListFacebookPages200Response
```

List Facebook pages

Returns the list of Facebook Pages the user can manage after OAuth. Extract tempToken and userProfile from the OAuth redirect params and pass them here. Use the X-Connect-Token header if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Zernio\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Zernio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID from your connection flow
$temp_token = 'temp_token_example'; // string | Temporary Facebook access token from the OAuth callback redirect

try {
    $result = $apiInstance->listFacebookPages($profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listFacebookPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID from your connection flow | |
| **temp_token** | **string**| Temporary Facebook access token from the OAuth callback redirect | |

### Return type

[**\Zernio\Model\ListFacebookPages200Response**](../Model/ListFacebookPages200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGoogleBusinessLocations()`

```php
listGoogleBusinessLocations($profile_id, $pending_data_token, $temp_token, $search, $filter): \Zernio\Model\ListGoogleBusinessLocations200Response
```

List GBP locations

For headless flows. Returns the list of GBP locations the user can manage. Use pendingDataToken (from the OAuth callback redirect) to list locations without consuming the token, so it remains available for select-location. Use X-Connect-Token header if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Zernio\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Zernio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID from your connection flow. Required for auth validation when provided.
$pending_data_token = 'pending_data_token_example'; // string | Token from the OAuth callback redirect. Preferred over tempToken because it preserves server-side token storage. One of pendingDataToken or tempToken is required.
$temp_token = 'temp_token_example'; // string | Legacy. Direct Google access token. Use pendingDataToken instead when available.
$search = 'search_example'; // string | Free-text search on the business name, applied server-side by Google. Use this for accounts that own many locations (the response is bounded, see hasMore) so the user can find a specific location without loading the full list.
$filter = 'filter_example'; // string | Raw Google Business Information API filter expression (advanced; takes precedence over search). Supports fields such as title, storeCode, storefront_address.postal_code, labels and categories, e.g. storeCode=\"LH279411\". See Google's \"Work with location data\" guide.

try {
    $result = $apiInstance->listGoogleBusinessLocations($profile_id, $pending_data_token, $temp_token, $search, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listGoogleBusinessLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID from your connection flow. Required for auth validation when provided. | [optional] |
| **pending_data_token** | **string**| Token from the OAuth callback redirect. Preferred over tempToken because it preserves server-side token storage. One of pendingDataToken or tempToken is required. | [optional] |
| **temp_token** | **string**| Legacy. Direct Google access token. Use pendingDataToken instead when available. | [optional] |
| **search** | **string**| Free-text search on the business name, applied server-side by Google. Use this for accounts that own many locations (the response is bounded, see hasMore) so the user can find a specific location without loading the full list. | [optional] |
| **filter** | **string**| Raw Google Business Information API filter expression (advanced; takes precedence over search). Supports fields such as title, storeCode, storefront_address.postal_code, labels and categories, e.g. storeCode&#x3D;\&quot;LH279411\&quot;. See Google&#39;s \&quot;Work with location data\&quot; guide. | [optional] |

### Return type

[**\Zernio\Model\ListGoogleBusinessLocations200Response**](../Model/ListGoogleBusinessLocations200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstagramPages()`

```php
listInstagramPages($profile_id, $temp_token): \Zernio\Model\ListInstagramPages200Response
```

List Pages with a linked Instagram account

Completes the `loginMethod=facebook_login` Instagram flow, i.e. \"Instagram API with Facebook Login\".  After the user authorizes on Facebook, extract `tempToken` from the redirect params (headless mode adds `step=select_account`) and pass it here to list the Facebook Pages they manage. Only Pages that have a linked Instagram professional account are returned, so an empty array means the user has no eligible Page. Use the X-Connect-Token header if connecting via API key.  Not used by the default `instagram_login` flow, which creates the account without a selection step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Zernio\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Zernio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID from your connection flow
$temp_token = 'temp_token_example'; // string | Long-lived Facebook user access token from the OAuth callback redirect

try {
    $result = $apiInstance->listInstagramPages($profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listInstagramPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID from your connection flow | |
| **temp_token** | **string**| Long-lived Facebook user access token from the OAuth callback redirect | |

### Return type

[**\Zernio\Model\ListInstagramPages200Response**](../Model/ListInstagramPages200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLinkedInOrganizations()`

```php
listLinkedInOrganizations($temp_token, $org_ids): \Zernio\Model\ListLinkedInOrganizations200Response
```

List LinkedIn orgs

Fetch full LinkedIn organization details (logos, vanity names, websites) for custom UI. No authentication required, just the tempToken from OAuth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$temp_token = 'temp_token_example'; // string | The temporary LinkedIn access token from the OAuth redirect
$org_ids = 12345678,87654321,11111111; // string | Comma-separated list of organization IDs to fetch details for (max 100)

try {
    $result = $apiInstance->listLinkedInOrganizations($temp_token, $org_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listLinkedInOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **temp_token** | **string**| The temporary LinkedIn access token from the OAuth redirect | |
| **org_ids** | **string**| Comma-separated list of organization IDs to fetch details for (max 100) | |

### Return type

[**\Zernio\Model\ListLinkedInOrganizations200Response**](../Model/ListLinkedInOrganizations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPinterestBoardsForSelection()`

```php
listPinterestBoardsForSelection($x_connect_token, $profile_id, $temp_token): \Zernio\Model\ListPinterestBoardsForSelection200Response
```

List Pinterest boards

For headless flows. Returns Pinterest boards the user can post to. Use X-Connect-Token from the redirect URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_connect_token = 'x_connect_token_example'; // string | Short-lived connect token from the OAuth redirect
$profile_id = 'profile_id_example'; // string | Your Zernio profile ID
$temp_token = 'temp_token_example'; // string | Temporary Pinterest access token from the OAuth callback redirect

try {
    $result = $apiInstance->listPinterestBoardsForSelection($x_connect_token, $profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listPinterestBoardsForSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_connect_token** | **string**| Short-lived connect token from the OAuth redirect | |
| **profile_id** | **string**| Your Zernio profile ID | |
| **temp_token** | **string**| Temporary Pinterest access token from the OAuth callback redirect | |

### Return type

[**\Zernio\Model\ListPinterestBoardsForSelection200Response**](../Model/ListPinterestBoardsForSelection200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSlackChannels()`

```php
listSlackChannels($profile_id, $pending_data_token, $account_id, $redirect_url): \Zernio\Model\ListSlackChannels200Response
```

List Slack channels for the channel picker

Serves the channel picker of the Slack connect flow. Slack's OAuth installs the bot into a workspace, not a channel, so after the redirect the caller lists the workspace's channels here and finalizes one with `POST /v1/connect/slack`. Served by a dedicated route that shadows `GET /v1/connect/{platform}` for `slack`.  Send exactly one of `pendingDataToken` (first connect: the nonce from the OAuth redirect, bound to the same `profileId`) or `accountId` (add another channel to a workspace already connected: the existing Slack account's workspace token is reused, no re-OAuth). With neither, the endpoint behaves like `GET /v1/connect/{platform}` and returns `authUrl` and `state` to start the OAuth flow.  Channels are read live from Slack (`conversations.list`, public and private, archived excluded, up to 2,000). `isMember` says whether the Zernio bot is already in the channel: a public channel is joined automatically on finalize, a private one must be invited (`/invite @Zernio`) first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Zernio profile the channel account will belong to. Must match the profile the OAuth flow was started on when `pendingDataToken` is used.
$pending_data_token = 'pending_data_token_example'; // string | Nonce from the OAuth redirect (first connect).
$account_id = 'account_id_example'; // string | Existing active Slack account (yours or a team member's) whose workspace token is reused.
$redirect_url = 'redirect_url_example'; // string | Start-OAuth mode only: where to send the user after the connect completes. `redirectUrl` is accepted as an alias.

try {
    $result = $apiInstance->listSlackChannels($profile_id, $pending_data_token, $account_id, $redirect_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listSlackChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Zernio profile the channel account will belong to. Must match the profile the OAuth flow was started on when &#x60;pendingDataToken&#x60; is used. | |
| **pending_data_token** | **string**| Nonce from the OAuth redirect (first connect). | [optional] |
| **account_id** | **string**| Existing active Slack account (yours or a team member&#39;s) whose workspace token is reused. | [optional] |
| **redirect_url** | **string**| Start-OAuth mode only: where to send the user after the connect completes. &#x60;redirectUrl&#x60; is accepted as an alias. | [optional] |

### Return type

[**\Zernio\Model\ListSlackChannels200Response**](../Model/ListSlackChannels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSnapchatProfiles()`

```php
listSnapchatProfiles($x_connect_token, $profile_id, $temp_token): \Zernio\Model\ListSnapchatProfiles200Response
```

List Snapchat profiles

For headless flows. Returns Snapchat Public Profiles the user can post to. Use X-Connect-Token from the redirect URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_connect_token = 'x_connect_token_example'; // string | Short-lived connect token from the OAuth redirect
$profile_id = 'profile_id_example'; // string | Your Zernio profile ID
$temp_token = 'temp_token_example'; // string | Temporary Snapchat access token from the OAuth callback redirect

try {
    $result = $apiInstance->listSnapchatProfiles($x_connect_token, $profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listSnapchatProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_connect_token** | **string**| Short-lived connect token from the OAuth redirect | |
| **profile_id** | **string**| Your Zernio profile ID | |
| **temp_token** | **string**| Temporary Snapchat access token from the OAuth callback redirect | |

### Return type

[**\Zernio\Model\ListSnapchatProfiles200Response**](../Model/ListSnapchatProfiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppPhoneNumbers()`

```php
listWhatsAppPhoneNumbers($profile_id, $temp_token, $x_connect_token): \Zernio\Model\ListWhatsAppPhoneNumbers200Response
```

List numbers for selection

Fetch the WhatsApp phone numbers available across the user's WhatsApp Business Accounts (WABAs) after a headless OAuth flow.  WhatsApp OAuth grants access at the WABA level. When a connected WABA has 2 or more phone numbers, you must call this endpoint to list them and then `POST /v1/connect/whatsapp/select-phone-number` to bind one to the Zernio profile. Single-phone WABAs auto-complete during the OAuth callback and never reach this endpoint.  Use the `profileId` and `tempToken` returned in the headless redirect (`step=select_phone_number`).  Alternative: if you already know `wabaId` and `phoneNumberId` (e.g. from Meta Business Suite), use `connectWhatsAppCredentials` instead, which skips this two-step flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | The Zernio profile ID from the headless redirect
$temp_token = 'temp_token_example'; // string | The temporary access token from the headless redirect
$x_connect_token = 'x_connect_token_example'; // string | Alternative auth for API users' end customers (used when the bearer token is scoped to a different user)

try {
    $result = $apiInstance->listWhatsAppPhoneNumbers($profile_id, $temp_token, $x_connect_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listWhatsAppPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The Zernio profile ID from the headless redirect | |
| **temp_token** | **string**| The temporary access token from the headless redirect | |
| **x_connect_token** | **string**| Alternative auth for API users&#39; end customers (used when the bearer token is scoped to a different user) | [optional] |

### Return type

[**\Zernio\Model\ListWhatsAppPhoneNumbers200Response**](../Model/ListWhatsAppPhoneNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectFacebookPage()`

```php
selectFacebookPage($select_facebook_page_request): \Zernio\Model\SelectFacebookPage200Response
```

Select Facebook page

Complete the headless flow by saving the user's selected Facebook page. Pass the userProfile from the OAuth redirect and use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Zernio\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Zernio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_facebook_page_request = {"profileId":"507f1f77bcf86cd799439011","pageId":"123456789","tempToken":"EAAxxxxx...","userProfile":{"id":"987654321","name":"John Doe","profilePicture":"https://..."},"redirect_url":"https://yourdomain.com/integrations/callback"}; // \Zernio\Model\SelectFacebookPageRequest

try {
    $result = $apiInstance->selectFacebookPage($select_facebook_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectFacebookPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_facebook_page_request** | [**\Zernio\Model\SelectFacebookPageRequest**](../Model/SelectFacebookPageRequest.md)|  | |

### Return type

[**\Zernio\Model\SelectFacebookPage200Response**](../Model/SelectFacebookPage200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectGoogleBusinessLocation()`

```php
selectGoogleBusinessLocation($select_google_business_location_request): \Zernio\Model\SelectGoogleBusinessLocation200Response
```

Select GBP location

Complete the headless GBP flow by saving the user's selected location. The pendingDataToken is returned in your redirect URL after OAuth completes (step=select_location). Tokens and profile data are stored server-side, so only the pendingDataToken is needed here. Use X-Connect-Token header if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Zernio\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Zernio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_google_business_location_request = {"profileId":"507f1f77bcf86cd799439011","locationId":"9281089117903930794","accountId":"accounts/113303573364907650416","pendingDataToken":"a1b2c3d4e5f6...","redirect_url":"https://yourdomain.com/integrations/callback"}; // \Zernio\Model\SelectGoogleBusinessLocationRequest

try {
    $result = $apiInstance->selectGoogleBusinessLocation($select_google_business_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectGoogleBusinessLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_google_business_location_request** | [**\Zernio\Model\SelectGoogleBusinessLocationRequest**](../Model/SelectGoogleBusinessLocationRequest.md)|  | |

### Return type

[**\Zernio\Model\SelectGoogleBusinessLocation200Response**](../Model/SelectGoogleBusinessLocation200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectInstagramAccount()`

```php
selectInstagramAccount($select_instagram_account_request): \Zernio\Model\SelectInstagramAccount200Response
```

Select the Page whose Instagram account to connect

Saves the selected Page as an Instagram account connected via Facebook Login. The Page access token becomes the account's access token, so every Instagram call for it runs against the Facebook Graph host.  One Instagram account per profile: if the profile already has an Instagram account, this replaces it, and picking a different Instagram identity purges the previous account's conversations, external posts and stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Zernio\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Zernio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_instagram_account_request = {"profileId":"507f1f77bcf86cd799439011","pageId":"811889972008357","tempToken":"EAAxxxxx...","redirect_url":"https://yourdomain.com/integrations/callback"}; // \Zernio\Model\SelectInstagramAccountRequest

try {
    $result = $apiInstance->selectInstagramAccount($select_instagram_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectInstagramAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_instagram_account_request** | [**\Zernio\Model\SelectInstagramAccountRequest**](../Model/SelectInstagramAccountRequest.md)|  | |

### Return type

[**\Zernio\Model\SelectInstagramAccount200Response**](../Model/SelectInstagramAccount200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectLinkedInOrganization()`

```php
selectLinkedInOrganization($select_linked_in_organization_request): \Zernio\Model\SelectLinkedInOrganization200Response
```

Select LinkedIn org

Complete the LinkedIn connection flow. Set accountType to \"personal\" or \"organization\" to connect as a company page. Use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_linked_in_organization_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","tempToken":"AQX...","userProfile":{"id":"abc123","username":"johndoe","displayName":"John Doe","profilePicture":"https://media.licdn.com/dms/image/v2/..."},"accountType":"personal"}; // \Zernio\Model\SelectLinkedInOrganizationRequest

try {
    $result = $apiInstance->selectLinkedInOrganization($select_linked_in_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectLinkedInOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_linked_in_organization_request** | [**\Zernio\Model\SelectLinkedInOrganizationRequest**](../Model/SelectLinkedInOrganizationRequest.md)|  | |

### Return type

[**\Zernio\Model\SelectLinkedInOrganization200Response**](../Model/SelectLinkedInOrganization200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectPinterestBoard()`

```php
selectPinterestBoard($select_pinterest_board_request): \Zernio\Model\SelectPinterestBoard200Response
```

Select Pinterest board

Complete the Pinterest connection flow. After OAuth, use this endpoint to save the selected board and complete the account connection. Use the X-Connect-Token header if you initiated the connection via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_pinterest_board_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","boardId":"123456789012345678","boardName":"Marketing Ideas","tempToken":"pina_...","userProfile":{"id":"user123","username":"mybrand","displayName":"My Brand","profilePicture":"https://i.pinimg.com/..."},"redirect_url":"https://yourapp.com/callback"}; // \Zernio\Model\SelectPinterestBoardRequest

try {
    $result = $apiInstance->selectPinterestBoard($select_pinterest_board_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectPinterestBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_pinterest_board_request** | [**\Zernio\Model\SelectPinterestBoardRequest**](../Model/SelectPinterestBoardRequest.md)|  | |

### Return type

[**\Zernio\Model\SelectPinterestBoard200Response**](../Model/SelectPinterestBoard200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectSnapchatProfile()`

```php
selectSnapchatProfile($select_snapchat_profile_request, $x_connect_token): \Zernio\Model\SelectSnapchatProfile200Response
```

Select Snapchat profile

Complete the Snapchat connection flow by saving the selected Public Profile. Snapchat requires a Public Profile to publish content. Use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_snapchat_profile_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","selectedPublicProfile":{"id":"abc123-def456","display_name":"My Brand","username":"mybrand","profile_image_url":"https://cf-st.sc-cdn.net/...","subscriber_count":15000},"tempToken":"eyJ...","userProfile":{"id":"user123","username":"mybrand","displayName":"My Brand","profilePicture":"https://cf-st.sc-cdn.net/..."},"redirect_url":"https://yourapp.com/callback"}; // \Zernio\Model\SelectSnapchatProfileRequest
$x_connect_token = 'x_connect_token_example'; // string | Short-lived connect token from the OAuth redirect (for API users)

try {
    $result = $apiInstance->selectSnapchatProfile($select_snapchat_profile_request, $x_connect_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectSnapchatProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_snapchat_profile_request** | [**\Zernio\Model\SelectSnapchatProfileRequest**](../Model/SelectSnapchatProfileRequest.md)|  | |
| **x_connect_token** | **string**| Short-lived connect token from the OAuth redirect (for API users) | [optional] |

### Return type

[**\Zernio\Model\SelectSnapchatProfile200Response**](../Model/SelectSnapchatProfile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setRedditPostFlair()`

```php
setRedditPostFlair($account_id, $set_reddit_post_flair_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Set Reddit post flair

Applies a flair to a post the connected account already published. Use the GET on this path to list the available `flairTemplateId` values for the subreddit.  Flair can also be set at submit time by passing `flairId` in `platformSpecificData` when creating the post. This endpoint is for changing it afterwards.  The subreddit must allow users to select their own post flair. Setting flair on another user's post requires moderator permissions, which Zernio does not request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the Reddit account that owns the post
$set_reddit_post_flair_request = {"subreddit":"webdev","postId":"t3_abc123","flairTemplateId":"a1b2c3d4-e5f6-7890-abcd-ef1234567890"}; // \Zernio\Model\SetRedditPostFlairRequest

try {
    $result = $apiInstance->setRedditPostFlair($account_id, $set_reddit_post_flair_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->setRedditPostFlair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the Reddit account that owns the post | |
| **set_reddit_post_flair_request** | [**\Zernio\Model\SetRedditPostFlairRequest**](../Model/SetRedditPostFlairRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFacebookPage()`

```php
updateFacebookPage($account_id, $update_facebook_page_request): \Zernio\Model\UpdateFacebookPage200Response
```

Update Facebook page

Switch which Facebook Page is active for a connected account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_facebook_page_request = {"selectedPageId":"123456789012345"}; // \Zernio\Model\UpdateFacebookPageRequest

try {
    $result = $apiInstance->updateFacebookPage($account_id, $update_facebook_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateFacebookPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_facebook_page_request** | [**\Zernio\Model\UpdateFacebookPageRequest**](../Model/UpdateFacebookPageRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateFacebookPage200Response**](../Model/UpdateFacebookPage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGmbLocation()`

```php
updateGmbLocation($account_id, $update_gmb_location_request): \Zernio\Model\UpdateGmbLocation200Response
```

Update GBP location

Switch which GBP location is active for a connected account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_gmb_location_request = {"selectedLocationId":"12345678901234567890","googleAccountId":"accounts/123456789"}; // \Zernio\Model\UpdateGmbLocationRequest

try {
    $result = $apiInstance->updateGmbLocation($account_id, $update_gmb_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateGmbLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_gmb_location_request** | [**\Zernio\Model\UpdateGmbLocationRequest**](../Model/UpdateGmbLocationRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateGmbLocation200Response**](../Model/UpdateGmbLocation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLinkedInOrganization()`

```php
updateLinkedInOrganization($account_id, $update_linked_in_organization_request): \Zernio\Model\UpdateLinkedInOrganization200Response
```

Switch LinkedIn account type

Switch a LinkedIn account between personal profile and organization (company page) posting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_linked_in_organization_request = {"accountType":"organization","selectedOrganization":{"id":"12345678","urn":"urn:li:organization:12345678","name":"Acme Corporation","vanityName":"acme-corp"}}; // \Zernio\Model\UpdateLinkedInOrganizationRequest

try {
    $result = $apiInstance->updateLinkedInOrganization($account_id, $update_linked_in_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateLinkedInOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_linked_in_organization_request** | [**\Zernio\Model\UpdateLinkedInOrganizationRequest**](../Model/UpdateLinkedInOrganizationRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateLinkedInOrganization200Response**](../Model/UpdateLinkedInOrganization200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePinterestBoards()`

```php
updatePinterestBoards($account_id, $update_pinterest_boards_request): \Zernio\Model\ConnectBlueskyCredentials200Response
```

Set default Pinterest board

Sets the default board used when publishing pins for this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_pinterest_boards_request = {"defaultBoardId":"123456789012345678","defaultBoardName":"Marketing Ideas"}; // \Zernio\Model\UpdatePinterestBoardsRequest

try {
    $result = $apiInstance->updatePinterestBoards($account_id, $update_pinterest_boards_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updatePinterestBoards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_pinterest_boards_request** | [**\Zernio\Model\UpdatePinterestBoardsRequest**](../Model/UpdatePinterestBoardsRequest.md)|  | |

### Return type

[**\Zernio\Model\ConnectBlueskyCredentials200Response**](../Model/ConnectBlueskyCredentials200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRedditSubreddits()`

```php
updateRedditSubreddits($account_id, $update_reddit_subreddits_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Set default subreddit

Sets the default subreddit used when publishing posts for this Reddit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_reddit_subreddits_request = {"defaultSubreddit":"marketing"}; // \Zernio\Model\UpdateRedditSubredditsRequest

try {
    $result = $apiInstance->updateRedditSubreddits($account_id, $update_reddit_subreddits_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateRedditSubreddits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_reddit_subreddits_request** | [**\Zernio\Model\UpdateRedditSubredditsRequest**](../Model/UpdateRedditSubredditsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateYoutubeDefaultPlaylist()`

```php
updateYoutubeDefaultPlaylist($account_id, $update_youtube_default_playlist_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Set default YouTube playlist

Sets the default playlist used when publishing videos for this account. When a post does not specify a playlistId, the default playlist is not automatically used (it is stored for client-side convenience).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_youtube_default_playlist_request = {"defaultPlaylistId":"PLxxxxxxxxxxxxx","defaultPlaylistName":"Tutorials"}; // \Zernio\Model\UpdateYoutubeDefaultPlaylistRequest

try {
    $result = $apiInstance->updateYoutubeDefaultPlaylist($account_id, $update_youtube_default_playlist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateYoutubeDefaultPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_youtube_default_playlist_request** | [**\Zernio\Model\UpdateYoutubeDefaultPlaylistRequest**](../Model/UpdateYoutubeDefaultPlaylistRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voteRedditThing()`

```php
voteRedditThing($account_id, $vote_reddit_thing_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Vote on a Reddit post or comment

Cast, change, or clear the connected account's vote on a Reddit post or comment.  **Reddit requires that votes be cast by humans.** Reddit's API terms permit a client to proxy a human's action one-for-one, and prohibit a bot from deciding how to vote or from amplifying a human's vote. Call this endpoint only in direct response to an explicit action by the account owner. Automated or agent-decided voting is vote manipulation and puts API access at risk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the Reddit account casting the vote
$vote_reddit_thing_request = {"thingId":"t3_abc123","direction":1}; // \Zernio\Model\VoteRedditThingRequest

try {
    $result = $apiInstance->voteRedditThing($account_id, $vote_reddit_thing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->voteRedditThing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the Reddit account casting the vote | |
| **vote_reddit_thing_request** | [**\Zernio\Model\VoteRedditThingRequest**](../Model/VoteRedditThingRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
