# Zernio\SlackApi

Slack-specific endpoints for a connected Slack workspace, such as listing its members.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listSlackMembers()**](SlackApi.md#listSlackMembers) | **GET** /v1/accounts/{accountId}/slack-members | List Slack workspace members |


## `listSlackMembers()`

```php
listSlackMembers($account_id, $query, $limit): \Zernio\Model\ListSlackMembers200Response
```

List Slack workspace members

Members of the connected Slack workspace that can receive a direct message, for populating a recipient picker. Bots, deactivated members and Slackbot are excluded. Start a DM by passing a member id as `participantId` to POST /v1/inbox/conversations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SlackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$query = 'query_example'; // string | Case-insensitive filter over display name and handle.
$limit = 50; // int

try {
    $result = $apiInstance->listSlackMembers($account_id, $query, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SlackApi->listSlackMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **query** | **string**| Case-insensitive filter over display name and handle. | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListSlackMembers200Response**](../Model/ListSlackMembers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
