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

Converts a LinkedIn profile or company URL to a URN for @mentions in posts.  You usually do not need this endpoint. Put the profile or company URL inside `@[...]` in the post `content` (for example `@[https://www.linkedin.com/in/vincentjong]`) and the post resolves it for you, using LinkedIn's own name. Use this endpoint to preview what a URL resolves to, or to get ready-made `@[Name](urn)` markup, which still works in `content` and is published exactly as written.  Example: - Resolve: GET /v1/accounts/{id}/linkedin-mentions?url=linkedin.com/in/vincentjong - Returns: mentionFormat: \"@[Vincent Jong](urn:li:person:xxx)\" - Use in post content: \"Great talk with @[Vincent Jong](urn:li:person:xxx) today!\"  Important: The mentions array field in POST /v1/posts is stored for reference only and does NOT trigger @mentions on LinkedIn. Write the mention in the content text.  Requirements: - Resolving a profile URL to a person mention requires the LinkedIn account to be admin of at least one organization: both endpoints that resolve a profile URL to a member URN take an organization you administer. A resolved person mention publishes from any account. Organization mentions (e.g. @Microsoft) have no such requirement. - The two are not scoped alike. peopleTypeahead?q=organizationFollowers only returns that organization's followers; vanityUrl?q=vanityUrlAsOrganization does not, and its resolvable set is opaque. A 404 here does not mean the person is unknown to you or unknown to LinkedIn: a live public profile can 404 with no reason given. - displayName is deprecated and ignored in practice: the endpoint reads the person's real name from LinkedIn itself. LinkedIn renders a person mention as a link only when the mention text is the person's first name, last name or full name (case-sensitive). - Person mentions DO work when published from personal profiles (the URN only needs to be valid). The limitation is only in the resolution step (URL to URN), not in publishing.

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
$display_name = Miquel Palet; // string | Deprecated: omit it. When sent for a person it overrides the mention text, and LinkedIn renders the mention only if it is exactly the person's first name, last name or full name (case-sensitive). When omitted the real name is read from LinkedIn. Ignored for org mentions, which always use the organization's LinkedIn name.

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
| **display_name** | **string**| Deprecated: omit it. When sent for a person it overrides the mention text, and LinkedIn renders the mention only if it is exactly the person&#39;s first name, last name or full name (case-sensitive). When omitted the real name is read from LinkedIn. Ignored for org mentions, which always use the organization&#39;s LinkedIn name. | [optional] |

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
