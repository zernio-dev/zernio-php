# Zernio\TrackingTagsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTrackingTagSharedAccount()**](TrackingTagsApi.md#addTrackingTagSharedAccount) | **POST** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | Share with an ad account |
| [**assignTrackingTagUser()**](TrackingTagsApi.md#assignTrackingTagUser) | **POST** /v1/accounts/{accountId}/tracking-tags/{tagId}/users | Assign a user to a tag |
| [**createTrackingTag()**](TrackingTagsApi.md#createTrackingTag) | **POST** /v1/accounts/{accountId}/tracking-tags | Create a tracking tag |
| [**createTrackingTagEvent()**](TrackingTagsApi.md#createTrackingTagEvent) | **POST** /v1/accounts/{accountId}/tracking-tags/{tagId}/events | Create a conversion event |
| [**deleteTrackingTagEvent()**](TrackingTagsApi.md#deleteTrackingTagEvent) | **DELETE** /v1/accounts/{accountId}/tracking-tags/{tagId}/events/{eventId} | Delete a conversion event |
| [**getAdTrackingTags()**](TrackingTagsApi.md#getAdTrackingTags) | **GET** /v1/ads/{adId}/tracking-tags | Get ad tracking tags |
| [**getTrackingTag()**](TrackingTagsApi.md#getTrackingTag) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId} | Get a tracking tag |
| [**getTrackingTagDiagnostics()**](TrackingTagsApi.md#getTrackingTagDiagnostics) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/diagnostics | Get tag diagnostics |
| [**getTrackingTagStats()**](TrackingTagsApi.md#getTrackingTagStats) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/stats | Get aggregated event stats |
| [**getTrackingTagStoreInstall()**](TrackingTagsApi.md#getTrackingTagStoreInstall) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/install | Get store install status |
| [**installTrackingTagOnStore()**](TrackingTagsApi.md#installTrackingTagOnStore) | **POST** /v1/accounts/{accountId}/tracking-tags/{tagId}/install | Install on a Shopify, WordPress, Wix or Webflow site |
| [**listTrackingTagEvents()**](TrackingTagsApi.md#listTrackingTagEvents) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/events | List conversion events |
| [**listTrackingTagPartners()**](TrackingTagsApi.md#listTrackingTagPartners) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/partners | List partner businesses of a tag |
| [**listTrackingTagSharedAccounts()**](TrackingTagsApi.md#listTrackingTagSharedAccounts) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | List accounts it is shared with |
| [**listTrackingTagUsers()**](TrackingTagsApi.md#listTrackingTagUsers) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/users | List tag users |
| [**listTrackingTags()**](TrackingTagsApi.md#listTrackingTags) | **GET** /v1/accounts/{accountId}/tracking-tags | List tracking tags |
| [**removeTrackingTagFromStore()**](TrackingTagsApi.md#removeTrackingTagFromStore) | **DELETE** /v1/accounts/{accountId}/tracking-tags/{tagId}/install | Remove from a Shopify, WordPress, Wix or Webflow site |
| [**removeTrackingTagSharedAccount()**](TrackingTagsApi.md#removeTrackingTagSharedAccount) | **DELETE** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | Stop sharing with an account |
| [**removeTrackingTagUser()**](TrackingTagsApi.md#removeTrackingTagUser) | **DELETE** /v1/accounts/{accountId}/tracking-tags/{tagId}/users/{userId} | Remove a user from a tag |
| [**updateAdTrackingTags()**](TrackingTagsApi.md#updateAdTrackingTags) | **PATCH** /v1/ads/{adId}/tracking-tags | Set ad tracking tags |
| [**updateTrackingTag()**](TrackingTagsApi.md#updateTrackingTag) | **PATCH** /v1/accounts/{accountId}/tracking-tags/{tagId} | Update a tracking tag |
| [**updateTrackingTagEvent()**](TrackingTagsApi.md#updateTrackingTagEvent) | **PATCH** /v1/accounts/{accountId}/tracking-tags/{tagId}/events/{eventId} | Update a conversion event |


## `addTrackingTagSharedAccount()`

```php
addTrackingTagSharedAccount($account_id, $tag_id, $add_tracking_tag_shared_account_request): \Zernio\Model\AddTrackingTagSharedAccount201Response
```

Share with an ad account

Shares a pixel with another ad account so its campaigns and audiences can use it. Meta, LinkedIn and TikTok; other platforms return 501.  ### Meta  Requires that you administer both the pixel's owning Business Manager and the target ad account. A pixel on a personal (non-BM) ad account can't be shared (Meta will reject the call).  ### LinkedIn  LinkedIn (`linkedinads`) grants `USE_ONLY` access from the ad account that created the tag, so the target can use the tag and its conversions but cannot edit or reshare it.  - `adAccountId` is the numeric LinkedIn ad account id. - An ad account uses one Insight Tag at a time, so a target that already has one answers 400.  ### TikTok  Links the pixel to an advertiser through Business Center (`/bc/pixel/link/update/`, `adAccountId` = numeric advertiser_id).  Only a pixel that is an asset of a Business Center this connection manages can be shared. Otherwise the answer is 400 asking to transfer it to Business Center first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.
$add_tracking_tag_shared_account_request = new \Zernio\Model\AddTrackingTagSharedAccountRequest(); // \Zernio\Model\AddTrackingTagSharedAccountRequest

try {
    $result = $apiInstance->addTrackingTagSharedAccount($account_id, $tag_id, $add_tracking_tag_shared_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->addTrackingTagSharedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |
| **add_tracking_tag_shared_account_request** | [**\Zernio\Model\AddTrackingTagSharedAccountRequest**](../Model/AddTrackingTagSharedAccountRequest.md)|  | |

### Return type

[**\Zernio\Model\AddTrackingTagSharedAccount201Response**](../Model/AddTrackingTagSharedAccount201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignTrackingTagUser()`

```php
assignTrackingTagUser($account_id, $tag_id, $assign_tracking_tag_user_request): \Zernio\Model\AssignTrackingTagUser200Response
```

Assign a user to a tag

Gives a person in the owning Meta business access to a pixel, or replaces the tasks they already have on it.  Assigning an already assigned user replaces their task set.  Meta: `tasks` are `AA_ANALYZE`, `ADVERTISE`, `ANALYZE`, `EDIT`, `UPLOAD`; `userId` is the business-scoped id from `GET /v1/ads/businesses/users`. A pixel on a personal ad account answers 400. Needs `business_management` like the list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$assign_tracking_tag_user_request = new \Zernio\Model\AssignTrackingTagUserRequest(); // \Zernio\Model\AssignTrackingTagUserRequest

try {
    $result = $apiInstance->assignTrackingTagUser($account_id, $tag_id, $assign_tracking_tag_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->assignTrackingTagUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **assign_tracking_tag_user_request** | [**\Zernio\Model\AssignTrackingTagUserRequest**](../Model/AssignTrackingTagUserRequest.md)|  | |

### Return type

[**\Zernio\Model\AssignTrackingTagUser200Response**](../Model/AssignTrackingTagUser200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTrackingTag()`

```php
createTrackingTag($account_id, $create_tracking_tag_request): \Zernio\Model\CreateTrackingTag201Response
```

Create a tracking tag

Creates a measurement pixel on an ad account and returns the snippet to install on your site.  Supported platforms: Meta (`metaads`), OpenAI Ads (`openaiads`), LinkedIn (`linkedinads`), Pinterest (`pinterestads`), Google Ads (`googleads`), TikTok and X Ads (`xads`). Other platforms return 501.  ### Idempotency by platform  | Platform | Idempotent | |---|---| | Meta | No: each call creates a new pixel | | OpenAI Ads | One Zernio pixel per account (a second create answers 409); OpenAI itself makes a new pixel and Conversions API key on every call | | LinkedIn | Yes: at most one Insight Tag per ad account | | Pinterest | No | | Google Ads | Yes: exactly one Google tag per account | | TikTok | No: a duplicate name is refused (400) | | X Ads | One pixel per ad account; a second answers 409 |  OpenAI Ads, LinkedIn, Pinterest, TikTok and X have no API to delete a tag.  Do not retry blindly on timeout where a call is NOT idempotent.  ### Meta  Creates a Meta Pixel on the given ad account (`POST /act_{id}/adspixels`, where `name` is the only input). Returns the created tag including its install `code`.  The pixel is owned by the Business Manager that owns the ad account. A pixel created on a personal (non-BM) ad account ends up with `ownerBusinessId: null` and can't be shared with other ad accounts.  Creating a Meta pixel does NOT install it. Install the returned `code` snippet on the site, or send events server-side via `POST /v1/ads/conversions`. The check `installed` is derived from `lastFiredTime`.  ### OpenAI Ads  Creates an OpenAI pixel AND provisions a Conversions API key for it in the same call. `adAccountId` is required by this endpoint but ignored: one API key maps to exactly one ad account, so there's nothing to select.  - Returns 422 (`FEATURE_NOT_AVAILABLE`) if the ad account isn't enabled for pixel management; contact your OpenAI partner representative to enable it. - There is no delete API for OpenAI pixels. - If the pixel is created but the Conversions API key provisioning then fails, the pixel is left live on OpenAI (it cannot be cleaned up). The error message names the surviving pixel id and warns against retrying, since a retry would create a second, orphaned pixel.  Each call creates a new pixel, a new Conversions API key and, with `defaultEventType`, a new conversion event setting.  ### LinkedIn  Creates the ad account's Insight Tag (`POST /rest/insightTags`).  Idempotent: an ad account holds at most one Insight Tag, so when it already has one that tag is returned and nothing is created. `name` is ignored (LinkedIn tags have no name) and there is no API to delete an Insight Tag.  ### Pinterest  Creates a Pinterest tag on the numeric ad account `adAccountId` (`POST /v5/ad_accounts/{id}/conversion_tags`). Returns the tag with Pinterest's `code` snippet. `automaticMatchingFields` switches on automatic enhanced match for those fields.  NOT idempotent, and Pinterest has no dry-run and no delete for tags (DELETE on `conversion_tags/{id}` answers 405). Never retry blindly: list first.  ### Google Ads  Every Google Ads account has exactly one Google tag (`AW-...`), so this is idempotent. `adAccountId` is the 10-digit customer id.  - When the account already tracks conversions, the existing tag is returned (201) and nothing is created. - Otherwise a first WEBPAGE conversion action named `name` (category DEFAULT) is created, which is what switches Google's conversion tracking on. The tag is returned with it as its first event.  ### TikTok  `POST /pixel/create/` on the advertiser in `adAccountId` (numeric). Names are at most 40 characters with no emoji and must be unique.  TikTok refuses a duplicate name (400), which is its only retry guard. TikTok has no pixel delete API.  ### X Ads  Creates the ad account's X Pixel (its UNIVERSAL website tag) with first-party cookies on. `adAccountId` is the X ad account id; `name` is not stored (X pixels have no name).  X allows one pixel per ad account and cannot delete one, so an account that already has a pixel answers 409 without writing anything.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Ads SocialAccount id (platform `metaads` or `openaiads`).
$create_tracking_tag_request = new \Zernio\Model\CreateTrackingTagRequest(); // \Zernio\Model\CreateTrackingTagRequest

try {
    $result = $apiInstance->createTrackingTag($account_id, $create_tracking_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->createTrackingTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Ads SocialAccount id (platform &#x60;metaads&#x60; or &#x60;openaiads&#x60;). | |
| **create_tracking_tag_request** | [**\Zernio\Model\CreateTrackingTagRequest**](../Model/CreateTrackingTagRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTrackingTag201Response**](../Model/CreateTrackingTag201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTrackingTagEvent()`

```php
createTrackingTagEvent($account_id, $tag_id, $create_tracking_tag_event_request): \Zernio\Model\CreateTrackingTagEvent201Response
```

Create a conversion event

Creates a conversion event on a tracking tag, such as a purchase or lead, so ads can measure and optimise toward it.  Pass the platform's own event type in `type` (e.g. Google `PURCHASE`, LinkedIn `ADD_TO_CART`, X `CHECKOUT_INITIATED`) or a neutral `siteEvent` the platform maps to its closest type.  Each platform stores a subset of the optional fields. Sending one it does not store answers 400 naming the supported fields.  NOT idempotent unless noted per platform: do not retry blindly.  ### OpenAI Ads  Creates a conversion event setting on the pixel (`POST /conversions/event_settings`, source = the pixel). Accepts `name`, `type` and `siteEvent` only.  `type` is a standard event or, for anything else, the custom event name itself (1 to 64 letters, digits, underscores or dashes; stored lowercase). Standard events: `order_created`, `lead_created`, `items_added`, `contents_viewed`, `checkout_started`, `registration_completed`, `subscription_created`, `trial_started`, `appointment_scheduled`, `page_viewed`, `app_installed`, `app_opened`.  `siteEvent` maps `search` and `add_payment_info` to the custom events `search` and `addpaymentinfo`, the names Zernio's Shopify pixel sends.  The click attribution window is 30 days, the only value OpenAI documents. Only standard events can be a conversions campaign's optimization goal.  ### LinkedIn (`linkedinads`)  Creates an event-specific Insight Tag conversion rule (no URL match rules), the kind a page or the Shopify pixel fires by id.  - `type` is a LinkedIn conversion type (e.g. `PURCHASE`, `ADD_TO_CART`, `START_CHECKOUT`, `LEAD`). - `siteEvent` maps to `KEY_PAGE_VIEW`, `VIEW_CONTENT`, `ADD_TO_CART`, `SEARCH`, `START_CHECKOUT`, `ADD_BILLING_INFO` or `PURCHASE`. - `defaultValue` needs `currency` (the ad account currency) and is a fallback: a value sent with the event wins. - Click and view windows are in days (LinkedIn validates them: the docs list 1, 7 and 30, and rules with 90 exist).  Stores name, type, siteEvent, enabled, defaultValue, currency, clickWindowDays, viewWindowDays. Not idempotent.  ### Meta  Creates a custom conversion on `adAccountId` (default: the pixel's owner ad account). Accepts:  - `name` - `type` (Meta `custom_event_type`: `PURCHASE`, `LEAD`, `ADD_TO_CART`, `COMPLETE_REGISTRATION`, `OTHER`...) - `siteEvent` - `urlContains` - `defaultValue` (in the ad account currency)  The rule matches the standard event of `siteEvent` (or of `type`), plus `urlContains` when given. `urlContains` alone matches page views on that URL. `type: OTHER` needs `siteEvent` or `urlContains`.  Idempotent by name: an active conversion with the same name on this pixel is returned instead of a duplicate. Meta caps custom conversions per ad account; the cap answers 400.  ### Google Ads (`googleads`)  Creates a WEBPAGE conversion action. `type` is a ConversionActionCategory (e.g. `PURCHASE`, `SIGNUP`, `DEFAULT`).  `siteEvent` maps page_view, add_to_cart, initiate_checkout and purchase. view_content, search and add_payment_info answer 400 (Google has no category for them).  Stored fields: name, type, defaultValue, currency, alwaysUseDefaultValue, clickWindowDays (1 to 90), viewWindowDays (1 to 30), primary, countingType, enabled.  Actions are created enabled (`enabled: false` answers 400); Google blocks the HIDDEN status on WEBPAGE actions. Names are unique per account, so a replay answers 400 (DUPLICATE_NAME) instead of creating a second one.  ### Pinterest (platform `pinterestads`)  Creates an advertiser defined event on the tag's ad account. Fields:  - `name`: 1-100 letters, digits, `_` or `-`, case-insensitive, max 15 per ad account - `type` or `siteEvent`: `type` is one of Pinterest's optimizable types: SIGNUP, ADD_TO_CART, LEAD, CHECKOUT, SUBSCRIBE, ADD_TO_WISHLIST, ADD_PAYMENT_INFO, INITIATE_CHECKOUT, CONTACT, CUSTOMIZE_PRODUCT, FIND_LOCATION, SCHEDULE, SUBMIT_APPLICATION, START_TRIAL, PAGE_VISIT, VIEW_CATEGORY, VIEW_CONTENT, SEARCH, WATCH_VIDEO  A duplicate name answers 400.  ### TikTok  Calls `POST /pixel/event/create/`. `type` is a TikTok pixel event type (SHOPPING, ON_WEB_CART, ON_WEB_DETAIL, INITIATE_ORDER, ADD_BILLING, ON_WEB_SEARCH, PAGE_VIEW, ON_WEB_REGISTER, FORM, ...), or pass `siteEvent`.  Stores `name` (at most 40 characters), `defaultValue` and `currency` (USD, JPY or INR only).  TikTok returns no id: the new event is read back from the pixel. While TikTok's listing has not refreshed, the response carries an empty `id` and `status: pending`.  ### X Ads (platform `xads`)  Creates a web event tag. Fields:  - `name` - `type` or `siteEvent`. `type` is an X enum: ADDED_PAYMENT_INFO, ADD_TO_CART, ADD_TO_WISHLIST, CHECKOUT_INITIATED, CONTENT_VIEW, CUSTOM, DOWNLOAD, INSTALL, LANDING_PAGE_VIEW, LOGIN, PRODUCT_CUSTOMIZATION, PURCHASE, SEARCH, SESSION, SIGN_UP, SITE_VISIT, START_TRIAL, SUBSCRIBE - `clickWindowDays`: 1, 7, 14, 30, 60 or 90; default 30 - `viewWindowDays`: 0, 1, 7, 14, 30, 60 or 90, at most the click window; default 1  Retargeting is enabled, as in Events Manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$create_tracking_tag_event_request = new \Zernio\Model\CreateTrackingTagEventRequest(); // \Zernio\Model\CreateTrackingTagEventRequest

try {
    $result = $apiInstance->createTrackingTagEvent($account_id, $tag_id, $create_tracking_tag_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->createTrackingTagEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **create_tracking_tag_event_request** | [**\Zernio\Model\CreateTrackingTagEventRequest**](../Model/CreateTrackingTagEventRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTrackingTagEvent201Response**](../Model/CreateTrackingTagEvent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTrackingTagEvent()`

```php
deleteTrackingTagEvent($account_id, $tag_id, $event_id, $ad_account_id): \Zernio\Model\DeleteTrackingTagEvent200Response
```

Delete a conversion event

Removes a conversion event from a tracking tag, or archives or disables it on platforms that have no hard delete.  Platforms without a hard delete archive or disable it instead; `state` in the response says which (`deleted`, `archived`, `disabled`).  OpenAI Ads answers 501: there is no delete or archive route for event settings (`DELETE /v1/conversions/event_settings/{id}` and `POST .../{id}/archive` answer 404 \"Invalid URL\"). Archive the event in OpenAI Ads Manager.  LinkedIn (`linkedinads`): LinkedIn has no delete for conversion rules (not in the conversion-tracking API, and `DELETE /rest/conversions/{id}` has no route), so the rule is disabled (`enabled: false`) and `state` is `disabled`. Re-enable it with `enabled: true`.  Meta: `archived`. Meta's delete archives the custom conversion (it stays readable with `status: archived`) and there is no hard delete; deleting an archived one is a no-op.  Google Ads (`googleads`): removes the conversion action (state `archived`). Google keeps it with status REMOVED and its history; PATCH with `enabled: true` restores it. Deleting an already archived action succeeds without a call to Google.  Pinterest (platform `pinterestads`): stops Pinterest tracking the event name (`state: disabled`); Pinterest keeps the event's history.  TikTok Ads answers 501: TikTok's `/pixel/event/delete/` answers OK but leaves the event on the pixel, so nothing is deleted. Delete the event in TikTok Events Manager.  X Ads (platform `xads`): deletes the web event tag for good. Events X auto-created with the pixel cannot be deleted (400). X keeps the event's own website tag id on the account (it has no delete for website tags), left without a conversion event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string
$event_id = 'event_id_example'; // string | Event id (`TrackingTagEvent.id`).
$ad_account_id = 'ad_account_id_example'; // string | Scopes the lookup on platforms whose tag ids live inside an ad account.

try {
    $result = $apiInstance->deleteTrackingTagEvent($account_id, $tag_id, $event_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->deleteTrackingTagEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**|  | |
| **event_id** | **string**| Event id (&#x60;TrackingTagEvent.id&#x60;). | |
| **ad_account_id** | **string**| Scopes the lookup on platforms whose tag ids live inside an ad account. | [optional] |

### Return type

[**\Zernio\Model\DeleteTrackingTagEvent200Response**](../Model/DeleteTrackingTagEvent200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdTrackingTags()`

```php
getAdTrackingTags($ad_id): \Zernio\Model\GetAdTrackingTags200Response
```

Get ad tracking tags

Shows the tracking parameters added to an ad's click URLs, such as UTM tags (not pixels).  Unified read of the platform's native click-URL tracking params. - Meta (facebook/instagram): the creative's `url_tags` (and template_url_spec). - Google (googleads): the campaign's `trackingUrlTemplate` + `finalUrlSuffix`. - LinkedIn (linkedinads): the campaign's Dynamic UTM `dynamicValueParameters` + `customValueParameters`. Returns 405 for platforms without a click-URL tracking surface (TikTok, X, Pinterest).  **Not pixels.** Despite the shared path segment, this endpoint has nothing to do with measurement tags. For an ad account's pixels use `GET /v1/accounts/{accountId}/tracking-tags?adAccountId=act_...` (Meta Pixels, with `kind` and `ownerAdAccountId`) or `GET /v1/accounts/{accountId}/conversion-destinations`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Ad id (hex _id, platformAdId, or effective story/media id).

try {
    $result = $apiInstance->getAdTrackingTags($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getAdTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Ad id (hex _id, platformAdId, or effective story/media id). | |

### Return type

[**\Zernio\Model\GetAdTrackingTags200Response**](../Model/GetAdTrackingTags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingTag()`

```php
getTrackingTag($account_id, $tag_id, $ad_account_id): \Zernio\Model\GetTrackingTag200Response
```

Get a tracking tag

Shows one pixel or measurement tag in full, including its install snippet, when it last fired and its conversion events.  ### Meta  Meta (platform `metaads`) returns the full tag record including the base-code `code` snippet, `lastFiredTime`, `ownerBusinessId`, `isUnavailable`, etc. Platforms other than those listed here return 501.  ### OpenAI Ads  OpenAI Ads (`openaiads`): `tagId` is the pixel's API id (`cds_...`) or its `pixel_id`. OpenAI documents no single-pixel read, so the tag is resolved from the pixel list.  - `code`: the official `oaiq` base code plus `page_viewed`. - `events`: the conversion event settings whose source is this pixel. - `siteTagId`: the `pixel_id` the site and the Conversions API send. - `id`: what event settings reference.  ### LinkedIn  LinkedIn (`linkedinads`):  - `code`: LinkedIn's base code. - `lastFiredTime`: the most recent callback across the tag's domains (unix seconds, null when it never fired). - `events`: the ad account's conversion rules. - `siteEvent` and `siteEventId`: set only on rules a page can fire (event-specific Insight Tag rules: not Conversions API rules, no URL match rules). - `adAccountId`: picks which ad account's rules to read. It defaults to the account that created the tag.  ### Pinterest  Pinterest (platform `pinterestads`) returns the tag with Pinterest's own `code` snippet and `lastFiredTime`. Without `adAccountId` Zernio finds the ad account that owns the tag (404 when no readable ad account holds it).  ### TikTok  Read from `/pixel/list/?pixel_id=`. `code` is TikTok's `pixel_script` and `events` the pixel events. `lastFiredTime` is not available on TikTok. Without `adAccountId` the connection's advertisers are searched.  ### X Ads  X Ads (platform `xads`): `tagId` is the X ad account id. An ad account without a pixel answers 400.  - `siteTagId`: the pixel id. - `code`: the X Pixel base code. - `events`: the conversion events the site can fire, each with `siteEventId` = `tw-<pixel>-<event>` (also the `event_id` of the X Conversions API).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$ad_account_id = 'ad_account_id_example'; // string | Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere.

try {
    $result = $apiInstance->getTrackingTag($account_id, $tag_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **ad_account_id** | **string**| Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere. | [optional] |

### Return type

[**\Zernio\Model\GetTrackingTag200Response**](../Model/GetTrackingTag200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingTagDiagnostics()`

```php
getTrackingTagDiagnostics($account_id, $tag_id): \Zernio\Model\GetTrackingTagDiagnostics200Response
```

Get tag diagnostics

Shows Meta's health checks for a pixel, such as events missing parameters or product ids that do not match your catalogs.  Platforms without tag diagnostics answer 501.  Meta: the pixel's checks from Events Manager (`da_checks`), e.g. whether events miss parameters or their content ids do not match the pixel's catalogs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).

try {
    $result = $apiInstance->getTrackingTagDiagnostics($account_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTagDiagnostics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |

### Return type

[**\Zernio\Model\GetTrackingTagDiagnostics200Response**](../Model/GetTrackingTagDiagnostics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingTagStats()`

```php
getTrackingTagStats($account_id, $tag_id, $ad_account_id, $aggregation, $start_time, $end_time): \Zernio\Model\GetTrackingTagStats200Response
```

Get aggregated event stats

Shows event counts or health for a tracking tag so you can confirm it is firing, where the platform reports them.  Platforms without a stats API answer 501.  ### Meta  Aggregated counts (`GET /{pixel_id}/stats`), rows passed through as-is. Their shape depends on the `aggregation` requested.  ### OpenAI Ads  The recent-events stream (`GET /conversions/events`): the latest (at most 50) events received in the last 15 minutes, one row per event (`event_type`, `api_channel`, `event_timestamp_ms`, `received_at_ms`, ...).  Both sources appear in `api_channel`:  - `pixel_sdk`: the on-site Pixel (including its `openai::sdk_init` load event) - `server_to_server`: Conversions API events  It is a fixed window: `startTime`/`endTime` answer 400. Use it to confirm an install fires; attributed totals come from ads analytics.  Accounts not enabled for the stream answer 422 `feature_not_available`.  ### LinkedIn (`linkedinads`)  Health rows rather than counts, since LinkedIn exposes no per-event fire counts:  - One row per site domain the tag has seen (`kind: domain`, `domainName`, `lastFiredTime`, `creationTime`, `blocked`). Capped at the 100 domains that fired most recently (newest first; a tag seen on more domains drops the least recent). - One row per conversion rule (`kind: conversion_rule`, `id`, `name`, `type`, `conversionMethod`, `status`, `lastFiredTime`).  Times are unix seconds. `startTime`/`endTime` are ignored.  ### Pinterest (platform `pinterestads`)  Rows typed by `type`:  - One `tag` row (`lastFiredTime`, `status`, `enhancedMatchStatus`). - `event` rows for the conversion events Pinterest has seen on the tag. `source` is `page_visit` or `ocpm_eligible` (the latter means the event can be optimized for), with the neutral `siteEvent` where one maps. - `event_quality` rows with the ad account's Event Quality Score for tag events over the last `1d` and `14d`. This is ad-account level, not per tag; an account Pinterest cannot score yet carries `error` instead.  Pinterest has no time-bounded counts, so `startTime`/`endTime` answer 400.  ### TikTok  Per-event counts from `/pixel/event/stats/` (`total_count`, `browser_event_total_count`, `server_event_total_count`, `attributed_count`, `preview_count`), bucketed by UTC day.  Defaults to the last 7 days; at most 30 days per request. `aggregation` is not accepted.  ### X Ads (platform `xads`)  X has no event counts per pixel or event (only campaign-level conversion metrics). Each row is one web event tag with:  - its `status` (TRACKING, UNVERIFIED, DORMANT) - `lastTrackedTime` (unix seconds, null if never seen) - `autoCreated` - for events the site can fire, `siteEventId`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$ad_account_id = 'ad_account_id_example'; // string | Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere.
$aggregation = 'event'; // string | Meta only (400 on other platforms): aggregation dimension. Defaults to `event`.
$start_time = 56; // int | Unix seconds lower bound.
$end_time = 56; // int | Unix seconds upper bound.

try {
    $result = $apiInstance->getTrackingTagStats($account_id, $tag_id, $ad_account_id, $aggregation, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTagStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **ad_account_id** | **string**| Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere. | [optional] |
| **aggregation** | **string**| Meta only (400 on other platforms): aggregation dimension. Defaults to &#x60;event&#x60;. | [optional] [default to &#39;event&#39;] |
| **start_time** | **int**| Unix seconds lower bound. | [optional] |
| **end_time** | **int**| Unix seconds upper bound. | [optional] |

### Return type

[**\Zernio\Model\GetTrackingTagStats200Response**](../Model/GetTrackingTagStats200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingTagStoreInstall()`

```php
getTrackingTagStoreInstall($account_id, $tag_id, $store_account_id, $ad_account_id): \Zernio\Model\GetTrackingTagStoreInstall200Response
```

Get store install status

Shows whether a tracking tag is installed on your Shopify store or WordPress, Wix or Webflow site, and whether a WordPress install would be blocked.  ### Shopify  Whether this tag is the one the Shopify store fires for its platform.  - `installedTagId` names the tag of that platform the store currently fires, which can be a different tag. - `tags` lists every Zernio tag on the store (all platforms).  ### WordPress  Whether the Zernio widget for this pixel is live (in an active widget area, script intact).  - A read-only `preflight` returns the theme's widget areas and, when an install would be blocked, the `reason` POST would return. - `tags` lists every Zernio widget on the site (all platforms, with `active`).  The preflight reads capabilities only, so `ready: true` is not a guarantee. `DISALLOW_UNFILTERED_HTML` or a multisite admin who is not a Super Admin still strips the script, which POST detects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$store_account_id = 'store_account_id_example'; // string | The connected Shopify, WordPress, Wix or Webflow account id.
$ad_account_id = 'ad_account_id_example'; // string | Scopes the tag lookup on platforms whose tag ids live inside an ad account.

try {
    $result = $apiInstance->getTrackingTagStoreInstall($account_id, $tag_id, $store_account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTagStoreInstall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **store_account_id** | **string**| The connected Shopify, WordPress, Wix or Webflow account id. | |
| **ad_account_id** | **string**| Scopes the tag lookup on platforms whose tag ids live inside an ad account. | [optional] |

### Return type

[**\Zernio\Model\GetTrackingTagStoreInstall200Response**](../Model/GetTrackingTagStoreInstall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installTrackingTagOnStore()`

```php
installTrackingTagOnStore($account_id, $tag_id, $install_tracking_tag_on_store_request): \Zernio\Model\InstallTrackingTagOnStore200Response
```

Install on a Shopify, WordPress, Wix or Webflow site

Installs a pixel on a connected Shopify store or WordPress, Wix or Webflow site, so store visits and purchases are reported without editing the theme.  ### Shopify (Meta pixel)  Zernio puts the Meta pixel on the store's storefront and checkout through its Shopify web pixel (a Shopify app pixel, no theme edits). The store sends these events to the pixel, each with an event id:  - PageView - ViewContent - AddToCart - Search - InitiateCheckout - AddPaymentInfo - Purchase (with value, currency, content_ids and contents)  Purchase uses `shopify_order_{orderId}` as its event id. A Conversions API Purchase you send for the same order with that `eventId` is deduplicated by Meta.  ### Idempotency and identifiers  A store runs one Zernio web pixel holding one tag per platform, so the call is idempotent:  - Calling it again updates the install. - Installing a different tag of the same platform replaces the previous one (reported in `replacedTagId`). - Other platforms' tags are kept.  Events respect the store's customer privacy settings (marketing consent).  - `accountId`: the Meta ads account that owns the pixel (`tagId`). - `storeAccountId`: the Shopify account.  ### OpenAI Ads on Shopify  Each event is sent through OpenAI's documented image tag (`GET https://bzr.openai.com/v1/sdk/events`) as:  - `page_viewed` - `contents_viewed` - `items_added` - `checkout_started` - `order_created` - custom events `search` and `addpaymentinfo` (lowercase, so a Conversions API Search/AddPaymentInfo with the same event id deduplicates)  Amounts are sent in the currency's minor unit. The landing page's `oppref` click id is kept in the `__oppref` cookie for 30 days and sent with every event.  The image tag cannot carry the `__obref` browser id (OpenAI rejects the parameter), and the search text is never sent. On WordPress the widget holds the official `oaiq` base code and a `page_viewed` call.  ### Whop on Shopify  For Whop (`whopads`, `tagId` = the Whop account id `biz_...`), events are posted to Whop's conversions endpoint (`https://t.whop.tw/conversions`) the way Whop's own Shopify pixel does:  - `page` - `view_content` - `add_to_cart` - `purchase` (with value and currency) - custom `shopify_search_submitted`, `shopify_checkout_started` and `shopify_payment_info_submitted`  Each carries Whop's `shopify:<event>:<id>` event id, so a store that also runs Whop's own pixel reports each event once. The visitor id is kept in Whop's `_wuid` cookie for two years.  Whop records purchases itself only for checkouts on Whop, so Shopify orders are reported here. On WordPress the widget holds the official snippet with `whop.setScope` and `whop.track(\"page\")`.  ### Reconnect and unsupported platforms  - 409 `reconnect_required`: the store was connected before pixel support and must re-approve the Zernio app. Send the merchant to `details.authUrl` (the Shopify account id stays the same). - 501: the platform has no install path.  ### WordPress  Here `storeAccountId` is a connected WordPress.com or self-hosted site. Zernio adds a Custom HTML widget with the Meta pixel base code (fbevents.js, `init`, `PageView`) to a widget area of the active theme.  It uses a footer area when there is one, else the first active area; pass `sidebarId` to choose. It then reads the widget back to confirm WordPress kept the `<script>` tag.  The widget carries a Zernio marker, so the call is idempotent per pixel: repeating it updates or moves the same widget. Pixel code the site owner pasted by hand is never touched. Several pixels can run side by side (one widget each).  When the site cannot run the pixel, nothing is left behind and the call answers 422 `tracking_tag_install_blocked` with `details.reason`:  - `insufficient_permissions`: the connected user lacks `edit_theme_options` (needs Administrator). - `scripts_stripped`: WordPress removed the script (the user lacks `unfiltered_html`, e.g. a multisite admin who is not a Super Admin, or `DISALLOW_UNFILTERED_HTML` is set). - `wordpress_com_plan`: a WordPress.com plan that strips scripts (plans without plugins). - `no_widget_areas`: the theme has no widget areas (block themes such as Twenty Twenty-Five). - `widgets_api_unavailable`: no widgets REST API (WordPress older than 5.8, or disabled).  The `error` message names the manual alternative (Meta's official WordPress plugin).  With `verifyHomepage` (default true) the homepage is fetched afterwards and `homepageCheck` says whether the pixel is visible. `not_found` can be a stale page cache; the widget read-back is authoritative.  ### LinkedIn  For `linkedinads`, Shopify sends every page view to the Insight Tag. It also sends each store event that has an enabled event-specific Insight Tag conversion rule of the matching type:  - view_content = VIEW_CONTENT - add_to_cart = ADD_TO_CART - search = SEARCH - initiate_checkout = START_CHECKOUT - add_payment_info = ADD_BILLING_INFO - purchase = PURCHASE  Each conversion carries the event id. Purchase uses `shopify_order_{orderId}`, so a Conversions API event sent to a separate CONVERSIONS_API rule with that `eventId` is deduplicated by LinkedIn.  Conversions API rules cannot be fired from a page, and no rule is created for you. The `li_fat_id` click id is read from the landing URL and kept in a first-party cookie for 30 days. WordPress gets LinkedIn's base code, which records page views.  ### Pinterest  For platform `pinterestads`, Shopify sends these events to the tag: `pagevisit`, `viewcontent`, `addtocart`, `search`, `initiatecheckout`, `addpaymentinfo` and `checkout`.  Each carries `event_id` (Purchase: `shopify_order_{orderId}`, for dedup with the Pinterest Conversions API), value, currency, order quantity and line items, plus the `epik` click id kept in the `_epik` cookie.  WordPress gets Pinterest's base code (core.js, `load`, `page`) with a `pagevisit` event. The manual fallback is the official Pinterest for WooCommerce plugin (WooCommerce stores).  ### Wix  Here `storeAccountId` is a connected Wix site. Zernio's Wix app embeds one script on the site that loads each installed tag's base code (the same code WordPress gets), so on Wix each tag records page views.  Wix changes pages without reloading. Later page views are recorded again on Wix's own page-view event for Meta, TikTok, Google, Pinterest, OpenAI and Whop; LinkedIn and X count the first page of each visit.  Like Shopify, the site holds one tag per platform: installing a different tag of the same platform replaces it (`replacedTagId`) and other platforms' tags are kept.  The script is an Advertising script, so it runs only for visitors who accept advertising cookies when the site shows a cookie banner.  Sites connected before pixel support answer 409 `reconnect_required` until the owner approves the Zernio app's new permission (`details.authUrl`, or Apps > Manage Apps in the Wix dashboard).  ### Webflow  Here `storeAccountId` is a Webflow site connected with \"Connect with Webflow\" (`GET /v1/connect/webflow`). Zernio applies one script to the site's custom code that loads each tag's base code, one tag per platform, as on Wix.  Webflow publishes custom code only with the site, so the install answers `publishRequired: true` and the tags fire after the site's next publish (Zernio never publishes it).  A site connected with a site token answers 409 `reconnect_required` with `details.authUrl` to connect it with the app (the account id stays the same).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$install_tracking_tag_on_store_request = new \Zernio\Model\InstallTrackingTagOnStoreRequest(); // \Zernio\Model\InstallTrackingTagOnStoreRequest

try {
    $result = $apiInstance->installTrackingTagOnStore($account_id, $tag_id, $install_tracking_tag_on_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->installTrackingTagOnStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **install_tracking_tag_on_store_request** | [**\Zernio\Model\InstallTrackingTagOnStoreRequest**](../Model/InstallTrackingTagOnStoreRequest.md)|  | |

### Return type

[**\Zernio\Model\InstallTrackingTagOnStore200Response**](../Model/InstallTrackingTagOnStore200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTagEvents()`

```php
listTrackingTagEvents($account_id, $tag_id, $ad_account_id): \Zernio\Model\ListTrackingTagEvents200Response
```

List conversion events

Lists the conversion events tied to a tracking tag, such as Google conversion actions or Meta custom conversions.  It covers platforms where each conversion is its own object:  - Google conversion actions - LinkedIn conversion rules - X web event tags - OpenAI event settings - TikTok pixel events - Meta custom conversions - Pinterest advertiser defined events  ### OpenAI Ads  The account's conversion event settings whose source is this pixel.  - `siteEventId` is the event name the site sends (a standard event such as `order_created`, or the lowercase custom event name). - `clickWindowDays` is the click attribution window and `viewWindowDays` the view-through window (0 = off).  ### LinkedIn (`linkedinads`)  The conversion rules of the ad account (`adAccountId`, default the account that created the tag), including Conversions API and URL-match rules.  - `siteEventId` (the rule id a page fires) is set only on event-specific Insight Tag rules. - `defaultValue`/`currency` come from the rule value. - `clickWindowDays`/`viewWindowDays` come from its post-click and view-through windows.  ### Meta  The pixel's custom conversions. Meta keeps them per AD ACCOUNT (a pixel has no custom conversions edge). So the list reads `adAccountId` (default: the pixel's owner ad account) and keeps the conversions whose pixel is this one.  Archived conversions are included with `status: archived`. `urlContains` and `siteEvent` are parsed from Meta's rule.  ### Google Ads (`googleads`)  The enabled WEBPAGE conversion actions of the account. `siteEventId` is the conversion label (the part after `AW-.../` in `send_to`). Value settings, lookback windows, `primary` and `countingType` are returned.  Archived (removed) actions are listed with status `REMOVED`. Imported (GA4, upload, app) actions are not events of the tag.  ### Pinterest (platform `pinterestads`)  The ad account's advertiser defined events: custom event names mapped to a standard type (`type`, e.g. `SIGNUP`). They belong to the ad account, so every tag on it shares them.  `id`, `name` and `siteEventId` are all the event name, which the site sends as `pintrk('track', '<name>')` or the Conversions API sends as `event_name`.  Standard events (`pagevisit`, `checkout`...) need no object and are not listed.  ### TikTok  The pixel's events from `/pixel/list/`. TikTok refreshes this list every 2 to 4 hours, so a just-created event can be missing. `siteEventId` is the `ttq.track()` name the site fires.  ### X Ads (platform `xads`)  The ad account's web event tags the site can fire.  Events X auto-creates with the pixel (site visits, landing page views, one per standard type) share the pixel id and cannot be fired one by one, so they are left out. They still appear in stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$ad_account_id = 'ad_account_id_example'; // string | Scopes the lookup on platforms whose tag ids live inside an ad account.

try {
    $result = $apiInstance->listTrackingTagEvents($account_id, $tag_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->listTrackingTagEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **ad_account_id** | **string**| Scopes the lookup on platforms whose tag ids live inside an ad account. | [optional] |

### Return type

[**\Zernio\Model\ListTrackingTagEvents200Response**](../Model/ListTrackingTagEvents200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTagPartners()`

```php
listTrackingTagPartners($account_id, $tag_id): \Zernio\Model\ListTrackingTagPartners200Response
```

List partner businesses of a tag

Lists the partner businesses a Meta pixel is shared with (read-only, sharing with new partners is not supported).  Read-only. Platforms without partner sharing answer 501.  Meta: the pixel's shared agencies. Sharing a pixel with a new partner is not available: `/{pixel}/agencies` answers \"(#3) Application does not have the capability to make this API call\" for our app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).

try {
    $result = $apiInstance->listTrackingTagPartners($account_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->listTrackingTagPartners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |

### Return type

[**\Zernio\Model\ListTrackingTagPartners200Response**](../Model/ListTrackingTagPartners200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTagSharedAccounts()`

```php
listTrackingTagSharedAccounts($account_id, $tag_id): \Zernio\Model\ListTrackingTagSharedAccounts200Response
```

List accounts it is shared with

Lists the other ad accounts a pixel is shared with.  Meta (`metaads`) and LinkedIn (`linkedinads`); other platforms return 501.  LinkedIn (`linkedinads`): the ad accounts this connection can see that hold access to the Insight Tag; the role (`FULL` or `USE_ONLY`) is appended to `name`. LinkedIn exposes permissions per ad account only, so accounts the connection cannot see are not listed.  TikTok (`tiktokads`): the advertisers linked to the pixel in its Business Center (`/bc/pixel/link/get/`); a pixel outside Business Center answers 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.

try {
    $result = $apiInstance->listTrackingTagSharedAccounts($account_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->listTrackingTagSharedAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |

### Return type

[**\Zernio\Model\ListTrackingTagSharedAccounts200Response**](../Model/ListTrackingTagSharedAccounts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTagUsers()`

```php
listTrackingTagUsers($account_id, $tag_id): \Zernio\Model\ListTrackingTagUsers200Response
```

List tag users

Lists the people and system users in the owning Meta business who have access to a pixel.  Platforms without tag user assignment answer 501.  Meta: the pixel's assigned users in its owning Business Manager. A pixel on a personal ad account has no business and returns an empty list. Needs the `business_management` permission on the connecting Meta user (an admin of the owning business); without it the call answers 403 asking to reconnect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).

try {
    $result = $apiInstance->listTrackingTagUsers($account_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->listTrackingTagUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |

### Return type

[**\Zernio\Model\ListTrackingTagUsers200Response**](../Model/ListTrackingTagUsers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTags()`

```php
listTrackingTags($account_id, $ad_account_id): \Zernio\Model\ListTrackingTags200Response
```

List tracking tags

Lists the pixels and other measurement tags an ads account can see, so you can inspect or install them.  The list view omits `code`. Call `getTrackingTag` for the install snippet and full detail.  ### Meta and OpenAI Ads  Returns the tracking tags (Meta Pixels, or OpenAI Ads pixels) the connected ads account can see. Meta is platform `metaads` and OpenAI Ads is platform `openaiads`. Platforms without a section below return 501.  - Pass `?adAccountId=act_...` (Meta only) to scope the list to a single ad account. - Omit it to list every pixel reachable by the token. The name is then suffixed with the ad account it was discovered on, for disambiguation. - `adAccountId` is ignored for OpenAI Ads (one API key maps to exactly one ad account).  The `accountId` must be the ads SocialAccount created by the Ads add-on connect flow (Meta) or the OpenAI Ads connect flow, not a Facebook/Instagram posting account. Get your Meta `act_...` ids from `GET /v1/ads/accounts`.  ### LinkedIn (`linkedinads`)  Lists the Insight Tag of each ad account. LinkedIn allows one per ad account; a tag shared with several accounts appears once.  - `adAccountId` is the numeric ad account id or `urn:li:sponsoredAccount:{id}`. Omit it to scan every active ad account the connection can see. - The tag `id` IS the partner id the site embeds, so `siteTagId` equals `id`. - LinkedIn tags have no name; it is shown as `Insight Tag {id}`.  ### Pinterest (platform `pinterestads`)  Lists Pinterest tags (conversion tags).  - `adAccountId` is the numeric Pinterest ad account id (no prefix). Omit it to walk every ad account the connection can read (an ad account the user has no Business Access role on is skipped). - `id` equals `siteTagId`, the id the site loads with `pintrk('load', id)`.  ### TikTok (platform `tiktokads`)  Lists TikTok Pixels across the connection's advertisers, or one advertiser with `?adAccountId=<numeric advertiser_id>`.  - `id` is the numeric `pixel_id`. - `siteTagId` is the alphanumeric `pixel_code` from Events Manager. - Connections authorized before the Pixel Management permission (about 2026-05-28) answer 403 until reconnected.  ### X Ads (platform `xads`)  There is one X Pixel per X ad account.  - `TrackingTag.id` is the ad account id (base36, e.g. `18ce54d4x5t`). - `siteTagId` is the pixel id the site embeds. - Ad accounts without a pixel are left out. - `adAccountId` scopes the list to one ad account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Ads SocialAccount id (platform `metaads` or `openaiads`).
$ad_account_id = 'ad_account_id_example'; // string | Optional, Meta only. Scope to one ad account, e.g. `act_123456789`. Ignored for OpenAI Ads.

try {
    $result = $apiInstance->listTrackingTags($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->listTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Ads SocialAccount id (platform &#x60;metaads&#x60; or &#x60;openaiads&#x60;). | |
| **ad_account_id** | **string**| Optional, Meta only. Scope to one ad account, e.g. &#x60;act_123456789&#x60;. Ignored for OpenAI Ads. | [optional] |

### Return type

[**\Zernio\Model\ListTrackingTags200Response**](../Model/ListTrackingTags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTrackingTagFromStore()`

```php
removeTrackingTagFromStore($account_id, $tag_id, $store_account_id, $ad_account_id): \Zernio\Model\RemoveTrackingTagFromStore200Response
```

Remove from a Shopify, WordPress, Wix or Webflow site

Removes a tracking tag from your Shopify store or WordPress, Wix or Webflow site, leaving other platforms' tags and hand-added pixel code in place.  ### Behavior  - Idempotent: nothing installed returns 200 with `installed: false`. - If the store fires a different tag of the same platform, nothing is removed and the call answers 409 `invalid_resource_state`.  ### Per store  - **Shopify**: other platforms' tags stay. The web pixel itself is deleted once no tag remains. - **Wix**: works the same way, and the site's Zernio script is disabled once no tag remains. - **Webflow**: the Zernio script leaves the site's custom code once no tag remains, live after the next publish. - **WordPress**: deletes every widget Zernio created for this pixel and reports how many in `removed` (0 when nothing was installed). Pixel code added by hand is left alone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$store_account_id = 'store_account_id_example'; // string | The connected Shopify, WordPress, Wix or Webflow account id.
$ad_account_id = 'ad_account_id_example'; // string | Scopes the tag lookup on platforms whose tag ids live inside an ad account.

try {
    $result = $apiInstance->removeTrackingTagFromStore($account_id, $tag_id, $store_account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->removeTrackingTagFromStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **store_account_id** | **string**| The connected Shopify, WordPress, Wix or Webflow account id. | |
| **ad_account_id** | **string**| Scopes the tag lookup on platforms whose tag ids live inside an ad account. | [optional] |

### Return type

[**\Zernio\Model\RemoveTrackingTagFromStore200Response**](../Model/RemoveTrackingTagFromStore200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTrackingTagSharedAccount()`

```php
removeTrackingTagSharedAccount($account_id, $tag_id, $ad_account_id)
```

Stop sharing with an account

Stops sharing a pixel with an ad account.  `adAccountId` may be passed as a query parameter (recommended) or as a JSON body field for clients that can send DELETE bodies. Meta and LinkedIn; other platforms return 501.  LinkedIn (`linkedinads`): revokes the ad account's access. Zernio answers 400 instead of revoking the last ad account that holds the tag: LinkedIn accepts that call and the tag is orphaned (verified live).  TikTok: unlinks through Business Center (`/bc/pixel/link/update/` with `UNLINK`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.
$ad_account_id = 'ad_account_id_example'; // string | Ad account to unshare, e.g. `act_123456789`. May also be sent in the JSON body.

try {
    $apiInstance->removeTrackingTagSharedAccount($account_id, $tag_id, $ad_account_id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->removeTrackingTagSharedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |
| **ad_account_id** | **string**| Ad account to unshare, e.g. &#x60;act_123456789&#x60;. May also be sent in the JSON body. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTrackingTagUser()`

```php
removeTrackingTagUser($account_id, $tag_id, $user_id): \Zernio\Model\RemoveTrackingTagUser200Response
```

Remove a user from a tag

Removes a user's access to the tag, on platforms whose API allows it.  Meta answers 501: the Business SDK has no delete on the pixel's assigned users, `DELETE /{pixel}/assigned_users` answers \"Unsupported delete request\" (code 100, subcode 33) and re-assigning with no tasks is refused. Remove the user in Business Settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string
$user_id = 'user_id_example'; // string | User id (`TrackingTagUser.id`).

try {
    $result = $apiInstance->removeTrackingTagUser($account_id, $tag_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->removeTrackingTagUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**|  | |
| **user_id** | **string**| User id (&#x60;TrackingTagUser.id&#x60;). | |

### Return type

[**\Zernio\Model\RemoveTrackingTagUser200Response**](../Model/RemoveTrackingTagUser200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdTrackingTags()`

```php
updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request): \Zernio\Model\UpdateAdTrackingTags200Response
```

Set ad tracking tags

Sets the tracking parameters added to an ad's click URLs, such as UTM tags, without rebuilding the rest of the ad.  Send only the fields for the ad's platform.  ### Meta  Send `urlTags` (array of {key,value}). Meta creatives are immutable, so this rebuilds the creative and repoints the ad.  By DEFAULT we PRESERVE the existing creative verbatim (re-post its object_story_spec + the new url_tags, reusing the image). So you send `urlTags` ALONE, with no need to read back headline/body/CTA.  `creative` (headline, body, callToAction, linkUrl, imageUrl) is OPTIONAL. It is only needed to rebuild explicitly, or for SHARE / page-post / dark / asset_feed creatives whose object_story_spec Meta strips (those return 422 asking for `creative`).  ### Google  Send `trackingUrlTemplate` and/or `finalUrlSuffix` (full template strings; account quota applies).  Written at the CAMPAIGN level (the campaign's `tracking_url_template` / `final_url_suffix`), so the change applies to every ad in the ad's campaign.  ### LinkedIn  Send `dynamicValueParameters` and/or `customValueParameters` (campaign-level Dynamic UTM).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string
$update_ad_tracking_tags_request = new \Zernio\Model\UpdateAdTrackingTagsRequest(); // \Zernio\Model\UpdateAdTrackingTagsRequest

try {
    $result = $apiInstance->updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->updateAdTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |
| **update_ad_tracking_tags_request** | [**\Zernio\Model\UpdateAdTrackingTagsRequest**](../Model/UpdateAdTrackingTagsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdTrackingTags200Response**](../Model/UpdateAdTrackingTags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTrackingTag()`

```php
updateTrackingTag($account_id, $tag_id, $update_tracking_tag_request): \Zernio\Model\GetTrackingTag200Response
```

Update a tracking tag

Changes a pixel's settings, such as its name or automatic matching, on platforms that allow edits.  Partial-update a pixel. Returns the re-fetched canonical tag. Whitelisted fields (at least one is required):  - `name` (rename) - `enableAutomaticMatching` - `automaticMatchingFields` - `firstPartyCookieStatus` - `dataUseSetting`  Meta only (platform `metaads`); other platforms return 501, except where noted below.  There is no DELETE: Meta has no API to delete a pixel. To stop using one, unshare it from your ad accounts (`DELETE .../tracking-tags/{tagId}/shared-accounts`) or disable it in Events Manager.  ### Per-platform support  - Google Ads (`googleads`): see below. - LinkedIn (`linkedinads`): only `firstPartyCookieStatus` (`first_party_cookie_enabled` or `first_party_cookie_disabled`), which sets the tag's first-party tracking. It applies to every ad account using the tag. `empty` answers 400: LinkedIn has no unset state. - TikTok: see below. - X Ads (platform `xads`): only `firstPartyCookieStatus` (`first_party_cookie_enabled` or `first_party_cookie_disabled`), which sets the pixel's first-party cookie setting. X has no API to rename or delete a pixel. - Pinterest (platform `pinterestads`): 501, see below. - OpenAI Ads: 501, see below.  ### Google Ads  The only writable tag setting is `autoTagging` (the account's gclid auto-tagging, without which the tag cannot attribute conversions to ad clicks).  Google rejects every write to `conversion_tracking_setting` for our developer token (`SERVICE_ACCESS_DENIED`), so the tag id and cross-account ownership stay managed in the Google Ads UI.  ### TikTok  - `name`. - `enableAutomaticMatching` + `automaticMatchingFields`, folded onto TikTok's five switches: em, ph, fn/ln, ct/st/zp/country, external_id. ge and db answer 400. - First-party cookies via `enableFirstPartyCookies` or `firstPartyCookieStatus` (enabled or disabled).  TikTok has no pixel delete: the endpoint is absent from its API and `POST /pixel/delete/` answers 404.  ### Pinterest  Pinterest API v5 only creates, lists and reads tags; it has no endpoint to edit a tag. Its spec lists only POST/GET on `conversion_tags` and GET on `conversion_tags/{id}`, and PATCH or PUT on `conversion_tags/{id}` answer 405 \"Method not allowed\".  Set enhanced match at creation (`automaticMatchingFields`), or rename a tag and change its enhanced match settings in Pinterest Ads Manager.  ### OpenAI Ads  Its API has no pixel update or delete route (`POST`/`PATCH`/`PUT`/`DELETE /v1/conversions/pixels/{id}` answer 405 \"Invalid method\"). Rename a pixel in OpenAI Ads Manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.
$update_tracking_tag_request = new \Zernio\Model\UpdateTrackingTagRequest(); // \Zernio\Model\UpdateTrackingTagRequest

try {
    $result = $apiInstance->updateTrackingTag($account_id, $tag_id, $update_tracking_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->updateTrackingTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |
| **update_tracking_tag_request** | [**\Zernio\Model\UpdateTrackingTagRequest**](../Model/UpdateTrackingTagRequest.md)|  | |

### Return type

[**\Zernio\Model\GetTrackingTag200Response**](../Model/GetTrackingTag200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTrackingTagEvent()`

```php
updateTrackingTagEvent($account_id, $tag_id, $event_id, $tracking_tag_event_input): \Zernio\Model\CreateTrackingTagEvent201Response
```

Update a conversion event

Changes a conversion event's settings, such as its name or default value, where the platform allows edits.  Partial update; at least one field. A field the platform does not store answers 400.  OpenAI Ads answers 501: OpenAI documents only list and create for event settings, and `POST`/`PATCH`/`PUT /v1/conversions/event_settings/{id}` answer 404 \"Invalid URL\". Create a new event instead.  LinkedIn (`linkedinads`): partial update of the conversion rule; same fields as create. Pass `adAccountId` when the rule lives in another ad account than the one that created the tag.  Meta: only `name` and `defaultValue` can change (Meta's custom conversion update takes nothing else); `type`, `siteEvent` and `urlContains` answer 400, create a new event instead.  Google Ads (`googleads`): same fields as create, on the account's WEBPAGE actions (others answer 404). `enabled: false` archives the action (same as DELETE) and `enabled: true` restores an archived one.  Pinterest (platform `pinterestads`): remaps the event to another `type` or `siteEvent`. Pinterest identifies the event by its name, so `name` cannot change (400): create the new name and delete the old one.  TikTok: `name`, `defaultValue` and `currency` (USD, JPY or INR); the type cannot change (delete and recreate).  X Ads (platform `xads`): the same fields as create. Events X auto-created with the pixel cannot be changed (400).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string
$event_id = 'event_id_example'; // string | Event id (`TrackingTagEvent.id`).
$tracking_tag_event_input = new \Zernio\Model\TrackingTagEventInput(); // \Zernio\Model\TrackingTagEventInput

try {
    $result = $apiInstance->updateTrackingTagEvent($account_id, $tag_id, $event_id, $tracking_tag_event_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->updateTrackingTagEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**|  | |
| **event_id** | **string**| Event id (&#x60;TrackingTagEvent.id&#x60;). | |
| **tracking_tag_event_input** | [**\Zernio\Model\TrackingTagEventInput**](../Model/TrackingTagEventInput.md)|  | |

### Return type

[**\Zernio\Model\CreateTrackingTagEvent201Response**](../Model/CreateTrackingTagEvent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
