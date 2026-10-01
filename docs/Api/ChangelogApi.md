# Zernio\ChangelogApi

The API changelog (https://docs.zernio.com/changelog) as data: the entries the &#x60;api.changelog.published&#x60; webhook announces, newest first, for agents that automate against API changes and need to back-fill what they missed.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listChangelog()**](ChangelogApi.md#listChangelog) | **GET** /v1/changelog | List API changelog entries |


## `listChangelog()`

```php
listChangelog($type, $platform, $before, $limit): \Zernio\Model\ListChangelog200Response
```

List API changelog entries

The API changelog, newest first. Each entry is what the `api.changelog.published` webhook delivered: the announcement in `message`, and in `changes` the deterministic diff of the OpenAPI spec (operations and schemas added, removed and modified) for automation to act on. Page with `before` set to the previous page's `nextCursor`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ChangelogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Only entries of this type.
$platform = whatsapp; // string | Only entries tagged with this platform or area slug (see `platforms` on the entry). One slug per request.
$before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only entries published strictly before this instant. Pass the previous page's `nextCursor`.
$limit = 20; // int

try {
    $result = $apiInstance->listChangelog($type, $platform, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangelogApi->listChangelog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Only entries of this type. | [optional] |
| **platform** | **string**| Only entries tagged with this platform or area slug (see &#x60;platforms&#x60; on the entry). One slug per request. | [optional] |
| **before** | **\DateTime**| Only entries published strictly before this instant. Pass the previous page&#39;s &#x60;nextCursor&#x60;. | [optional] |
| **limit** | **int**|  | [optional] [default to 20] |

### Return type

[**\Zernio\Model\ListChangelog200Response**](../Model/ListChangelog200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
