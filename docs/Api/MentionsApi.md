# Zernio\MentionsApi

Unified inbox API for managing mentions across connected accounts. Currently supports LinkedIn organization mentions. Requires Inbox addon.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listInboxMentions()**](MentionsApi.md#listInboxMentions) | **GET** /v1/inbox/mentions | List mentions |


## `listInboxMentions()`

```php
listInboxMentions($account_id, $profile_id, $sort_order, $limit, $cursor): \Zernio\Model\ListInboxMentions200Response
```

List mentions

Returns mentions of your connected organization accounts, delivered via platform webhooks. Currently supports LinkedIn organization mentions.  Requires Inbox addon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Filter by social account ID
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$sort_order = 'desc'; // string | Sort order by publishedAt
$limit = 25; // int
$cursor = 'cursor_example'; // string | Cursor for pagination (ID of the last item from the previous page)

try {
    $result = $apiInstance->listInboxMentions($account_id, $profile_id, $sort_order, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->listInboxMentions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Filter by social account ID | [optional] |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **sort_order** | **string**| Sort order by publishedAt | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| Cursor for pagination (ID of the last item from the previous page) | [optional] |

### Return type

[**\Zernio\Model\ListInboxMentions200Response**](../Model/ListInboxMentions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
