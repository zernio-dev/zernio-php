# Zernio\LinkedInMentionsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLinkedInMentions()**](LinkedInMentionsApi.md#getLinkedInMentions) | **GET** /v1/accounts/{accountId}/linkedin-mentions | Resolve LinkedIn mention |


## `getLinkedInMentions()`

```php
getLinkedInMentions($account_id, $url, $display_name): \Zernio\Model\GetLinkedInMentions200Response
```

Resolve LinkedIn mention

Converts a LinkedIn profile or company URL to a URN for @mentions in posts.  How to use LinkedIn @mentions (2-step workflow):  1. Call this endpoint with the LinkedIn profile/company URL to get the mention URN and format. 2. Embed the returned mentionFormat (e.g. @[Vincent Jong](urn:li:person:xxx)) directly in your post's content field.  Example: - Resolve: GET /v1/accounts/{id}/linkedin-mentions?url=linkedin.com/in/vincentjong&displayName=Vincent Jong - Returns: mentionFormat: \"@[Vincent Jong](urn:li:person:xxx)\" - Use in post content: \"Great talk with @[Vincent Jong](urn:li:person:xxx) today!\"  Important: The mentions array field in POST /v1/posts is stored for reference only and does NOT trigger @mentions on LinkedIn. You must embed the mention format directly in the content text.  Requirements: - Resolving a profile URL to a person mention requires the LinkedIn account to be admin of at least one organization: both endpoints that resolve a profile URL to a member URN take an organization you administer. A resolved person mention publishes from any account. Organization mentions (e.g. @Microsoft) have no such requirement. - The two are not scoped alike. peopleTypeahead?q=organizationFollowers only returns that organization's followers; vanityUrl?q=vanityUrlAsOrganization does not, and its resolvable set is opaque. A 404 here does not mean the person is unknown to you or unknown to LinkedIn: a live public profile can 404 with no reason given. - displayName is optional: the endpoint looks up the person's real name itself. LinkedIn renders a person mention as a link when the mention text is the person's first name, last name or full name (case-sensitive). - Person mentions DO work when published from personal profiles (the URN only needs to be valid). The limitation is only in the resolution step (URL to URN), not in publishing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LinkedInMentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The LinkedIn account ID
$url = miquelpalet; // string | LinkedIn profile URL, company URL, or vanity name.
$display_name = Miquel Palet; // string | Optional override for a person's mention text. When omitted, the real name is resolved from LinkedIn. Ignored for org mentions, which always use the organization's LinkedIn name.

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
| **display_name** | **string**| Optional override for a person&#39;s mention text. When omitted, the real name is resolved from LinkedIn. Ignored for org mentions, which always use the organization&#39;s LinkedIn name. | [optional] |

### Return type

[**\Zernio\Model\GetLinkedInMentions200Response**](../Model/GetLinkedInMentions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
