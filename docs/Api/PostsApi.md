# Zernio\PostsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkUploadPosts()**](PostsApi.md#bulkUploadPosts) | **POST** /v1/posts/bulk-upload | Bulk upload from CSV |
| [**createPost()**](PostsApi.md#createPost) | **POST** /v1/posts | Create post |
| [**deletePost()**](PostsApi.md#deletePost) | **DELETE** /v1/posts/{postId} | Delete post |
| [**editPost()**](PostsApi.md#editPost) | **POST** /v1/posts/{postId}/edit | Edit published post |
| [**getPost()**](PostsApi.md#getPost) | **GET** /v1/posts/{postId} | Get post |
| [**listPosts()**](PostsApi.md#listPosts) | **GET** /v1/posts | List posts |
| [**retryPost()**](PostsApi.md#retryPost) | **POST** /v1/posts/{postId}/retry | Retry failed post |
| [**unpublishPost()**](PostsApi.md#unpublishPost) | **POST** /v1/posts/{postId}/unpublish | Unpublish post |
| [**updatePost()**](PostsApi.md#updatePost) | **PUT** /v1/posts/{postId} | Update post |
| [**updatePostMetadata()**](PostsApi.md#updatePostMetadata) | **POST** /v1/posts/{postId}/update-metadata | Update post metadata |


## `bulkUploadPosts()`

```php
bulkUploadPosts($dry_run, $file): \Zernio\Model\BulkUploadPosts200Response
```

Bulk upload from CSV

Create multiple posts by uploading a CSV file. Use dryRun=true to validate without creating posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dry_run = false; // bool
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->bulkUploadPosts($dry_run, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->bulkUploadPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dry_run** | **bool**|  | [optional] [default to false] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Zernio\Model\BulkUploadPosts200Response**](../Model/BulkUploadPosts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPost()`

```php
createPost($create_post_request): \Zernio\Model\PostCreateResponse
```

Create post

Create and optionally publish a post. Immediate posts (publishNow: true) include platformPostUrl in the response. Content is optional when media is attached or all platforms have customContent. See each platform's schema for media constraints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_post_request = {"content":"Draft post for review before publishing","platforms":[{"platform":"facebook","accountId":"64e1f0a9e2b5af0012ab34cd"}],"publishNow":true,"facebookSettings":{"draft":true}}; // \Zernio\Model\CreatePostRequest

try {
    $result = $apiInstance->createPost($create_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_post_request** | [**\Zernio\Model\CreatePostRequest**](../Model/CreatePostRequest.md)|  | |

### Return type

[**\Zernio\Model\PostCreateResponse**](../Model/PostCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePost()`

```php
deletePost($post_id): \Zernio\Model\PostDeleteResponse
```

Delete post

Delete a draft or scheduled post from Zernio. Published posts cannot be deleted; use the Unpublish endpoint instead. Upload quota is automatically refunded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string

try {
    $result = $apiInstance->deletePost($post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |

### Return type

[**\Zernio\Model\PostDeleteResponse**](../Model/PostDeleteResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editPost()`

```php
editPost($post_id, $edit_post_request): \Zernio\Model\EditPost200Response
```

Edit published post

Edit a published post on a social media platform. Currently only supported for X (Twitter).  Requirements: - Connected X account must have an active X Premium subscription - Must be within 1 hour of original publish time - Maximum 5 edits per tweet (enforced by X) - Text-only edits (media changes are not supported)  The post record in Zernio is updated with the new content and edit history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$edit_post_request = {"platform":"twitter","content":"Updated tweet text with corrected information"}; // \Zernio\Model\EditPostRequest

try {
    $result = $apiInstance->editPost($post_id, $edit_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->editPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **edit_post_request** | [**\Zernio\Model\EditPostRequest**](../Model/EditPostRequest.md)|  | |

### Return type

[**\Zernio\Model\EditPost200Response**](../Model/EditPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPost()`

```php
getPost($post_id): \Zernio\Model\PostGetResponse
```

Get post

Fetch a single post by ID. For published posts, this returns platformPostUrl for each platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string

try {
    $result = $apiInstance->getPost($post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |

### Return type

[**\Zernio\Model\PostGetResponse**](../Model/PostGetResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPosts()`

```php
listPosts($page, $limit, $status, $platform, $profile_id, $created_by, $date_from, $date_to, $include_hidden, $search, $sort_by, $account_id): \Zernio\Model\PostsListResponse
```

List posts

Returns a paginated list of posts. Published posts include platformPostUrl with the public URL on each platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number (1-based)
$limit = 10; // int | Page size
$status = 'status_example'; // string
$platform = twitter; // string
$profile_id = 'profile_id_example'; // string
$created_by = 'created_by_example'; // string
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$include_hidden = false; // bool
$search = 'search_example'; // string | Search posts by text content.
$sort_by = 'scheduled-desc'; // string | Sort order for results.
$account_id = 'account_id_example'; // string | Filter posts to those published via a specific social account (24-char hex ObjectId).

try {
    $result = $apiInstance->listPosts($page, $limit, $status, $platform, $profile_id, $created_by, $date_from, $date_to, $include_hidden, $search, $sort_by, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->listPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**| Page size | [optional] [default to 10] |
| **status** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **profile_id** | **string**|  | [optional] |
| **created_by** | **string**|  | [optional] |
| **date_from** | **\DateTime**|  | [optional] |
| **date_to** | **\DateTime**|  | [optional] |
| **include_hidden** | **bool**|  | [optional] [default to false] |
| **search** | **string**| Search posts by text content. | [optional] |
| **sort_by** | **string**| Sort order for results. | [optional] [default to &#39;scheduled-desc&#39;] |
| **account_id** | **string**| Filter posts to those published via a specific social account (24-char hex ObjectId). | [optional] |

### Return type

[**\Zernio\Model\PostsListResponse**](../Model/PostsListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryPost()`

```php
retryPost($post_id): \Zernio\Model\PostRetryResponse
```

Retry failed post

Immediately retries publishing a failed post. Returns the updated post with its new status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string

try {
    $result = $apiInstance->retryPost($post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->retryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |

### Return type

[**\Zernio\Model\PostRetryResponse**](../Model/PostRetryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpublishPost()`

```php
unpublishPost($post_id, $unpublish_post_request): \Zernio\Model\UnpublishPost200Response
```

Unpublish post

Deletes a published post from the specified platform. The post record in Zernio is kept but its status is updated to cancelled. Not supported on Instagram, TikTok, or Snapchat. Threaded posts delete all items. YouTube deletion is permanent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$unpublish_post_request = {"platform":"threads"}; // \Zernio\Model\UnpublishPostRequest

try {
    $result = $apiInstance->unpublishPost($post_id, $unpublish_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->unpublishPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **unpublish_post_request** | [**\Zernio\Model\UnpublishPostRequest**](../Model/UnpublishPostRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePost()`

```php
updatePost($post_id, $update_post_request): \Zernio\Model\PostUpdateResponse
```

Update post

Update an existing post. Only draft, scheduled, failed, and partial posts can be edited. Published, publishing, and cancelled posts cannot be modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$update_post_request = {"content":"Updated content for our launch post!","scheduledFor":"2024-11-02T14:00:00Z"}; // \Zernio\Model\UpdatePostRequest

try {
    $result = $apiInstance->updatePost($post_id, $update_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->updatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **update_post_request** | [**\Zernio\Model\UpdatePostRequest**](../Model/UpdatePostRequest.md)|  | |

### Return type

[**\Zernio\Model\PostUpdateResponse**](../Model/PostUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePostMetadata()`

```php
updatePostMetadata($post_id, $update_post_metadata_request): \Zernio\Model\UpdatePostMetadata200Response
```

Update post metadata

Updates metadata of a published video on the specified platform without re-uploading. Currently only supported for YouTube. At least one updatable field is required.  Two modes:  1. Post-based (video published through Zernio): pass the Zernio postId in the URL and platform in the body. 2. Direct video ID (video uploaded outside Zernio, e.g. directly to YouTube): use _ as the postId,    and pass videoId + accountId + platform in the body. The accountId is the Zernio social account ID    for the connected YouTube channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Zernio post ID, or \"_\" when using direct video ID mode
$update_post_metadata_request = {"platform":"youtube","title":"Updated Video Title","description":"New SEO-optimized description","tags":["seo","marketing","tutorial"]}; // \Zernio\Model\UpdatePostMetadataRequest

try {
    $result = $apiInstance->updatePostMetadata($post_id, $update_post_metadata_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->updatePostMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Zernio post ID, or \&quot;_\&quot; when using direct video ID mode | |
| **update_post_metadata_request** | [**\Zernio\Model\UpdatePostMetadataRequest**](../Model/UpdatePostMetadataRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdatePostMetadata200Response**](../Model/UpdatePostMetadata200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
