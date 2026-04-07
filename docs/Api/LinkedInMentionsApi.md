# Late\LinkedInMentionsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLinkedInMentions()**](LinkedInMentionsApi.md#getLinkedInMentions) | **GET** /v1/accounts/{accountId}/linkedin-mentions | Resolve LinkedIn mention |


## `getLinkedInMentions()`

```php
getLinkedInMentions($account_id, $url, $display_name): \Late\Model\GetLinkedInMentions200Response
```

Resolve LinkedIn mention

Converts a LinkedIn profile or company URL to a URN for @mentions in posts.  **How to use LinkedIn @mentions (2-step workflow):**  1. Call this endpoint with the LinkedIn profile/company URL to get the mention URN and format. 2. Embed the returned `mentionFormat` (e.g. `@[Vincent Jong](urn:li:person:xxx)`) directly in your post's `content` field.  **Example:** - Resolve: `GET /v1/accounts/{id}/linkedin-mentions?url=linkedin.com/in/vincentjong&displayName=Vincent Jong` - Returns: `mentionFormat: \"@[Vincent Jong](urn:li:person:xxx)\"` - Use in post content: `\"Great talk with @[Vincent Jong](urn:li:person:xxx) today!\"`  **Important:** The `mentions` array field in POST /v1/posts is stored for reference only and does NOT trigger @mentions on LinkedIn. You must embed the mention format directly in the content text.  **Requirements:** - **Person mentions** require the LinkedIn account to be admin of at least one organization. This is a LinkedIn API limitation: the only endpoints that resolve profile URLs to member URNs (`vanityUrl`, `peopleTypeahead`) are scoped to organization followers. There is no public LinkedIn API to resolve a vanity URL without organization context. - **Organization mentions** (e.g. @Microsoft) work without this requirement. - For person mentions to be clickable, the `displayName` parameter must exactly match the name shown on their LinkedIn profile. - Person mentions DO work when published from personal profiles (the URN just needs to be valid). The limitation is only in the resolution step (URL to URN), not in publishing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\LinkedInMentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The LinkedIn account ID
$url = miquelpalet; // string | LinkedIn profile URL, company URL, or vanity name.
$display_name = Miquel Palet; // string | Exact display name as shown on LinkedIn. Required for person mentions to be clickable. Optional for org mentions.

try {
    $result = $apiInstance->getLinkedInMentions($account_id, $url, $display_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedInMentionsApi->getLinkedInMentions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The LinkedIn account ID | |
| **url** | **string**| LinkedIn profile URL, company URL, or vanity name. | |
| **display_name** | **string**| Exact display name as shown on LinkedIn. Required for person mentions to be clickable. Optional for org mentions. | [optional] |

### Return type

[**\Late\Model\GetLinkedInMentions200Response**](../Model/GetLinkedInMentions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
