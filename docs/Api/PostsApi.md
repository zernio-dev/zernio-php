# Late\PostsApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkUploadPosts()**](PostsApi.md#bulkUploadPosts) | **POST** /v1/posts/bulk-upload | Bulk upload from CSV |
| [**createPost()**](PostsApi.md#createPost) | **POST** /v1/posts | Create post |
| [**deletePost()**](PostsApi.md#deletePost) | **DELETE** /v1/posts/{postId} | Delete post |
| [**getPost()**](PostsApi.md#getPost) | **GET** /v1/posts/{postId} | Get post |
| [**listPosts()**](PostsApi.md#listPosts) | **GET** /v1/posts | List posts |
| [**retryPost()**](PostsApi.md#retryPost) | **POST** /v1/posts/{postId}/retry | Retry failed post |
| [**unpublishPost()**](PostsApi.md#unpublishPost) | **POST** /v1/posts/{postId}/unpublish | Unpublish post |
| [**updatePost()**](PostsApi.md#updatePost) | **PUT** /v1/posts/{postId} | Update post |


## `bulkUploadPosts()`

```php
bulkUploadPosts($dry_run, $file): \Late\Model\BulkUploadPosts200Response
```

Bulk upload from CSV

Create multiple posts by uploading a CSV file. Use dryRun=true to validate without creating posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
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

[**\Late\Model\BulkUploadPosts200Response**](../Model/BulkUploadPosts200Response.md)

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
createPost($create_post_request): \Late\Model\PostCreateResponse
```

Create post

Create and optionally publish a post. Immediate posts (publishNow: true) include platformPostUrl in the response. Content is optional when media is attached or all platforms have customContent. See each platform's schema for media constraints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_post_request = {"content":"Check out these photos!","mediaItems":[{"type":"image","url":"https://example.com/photo1.jpg"},{"type":"image","url":"https://example.com/photo2.jpg"}],"platforms":[{"platform":"tiktok","accountId":"64e1f0a9e2b5af0012ab34cd"}],"tiktokSettings":{"draft":true,"privacyLevel":"PUBLIC_TO_EVERYONE","allowComment":true,"contentPreviewConfirmed":true,"expressConsentGiven":true}}; // \Late\Model\CreatePostRequest

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
| **create_post_request** | [**\Late\Model\CreatePostRequest**](../Model/CreatePostRequest.md)|  | |

### Return type

[**\Late\Model\PostCreateResponse**](../Model/PostCreateResponse.md)

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
deletePost($post_id): \Late\Model\PostDeleteResponse
```

Delete post

Delete a draft or scheduled post from Late. Published posts cannot be deleted; use the Unpublish endpoint instead. Upload quota is automatically refunded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
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

[**\Late\Model\PostDeleteResponse**](../Model/PostDeleteResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPost()`

```php
getPost($post_id): \Late\Model\PostGetResponse
```

Get post

Fetch a single post by ID. For published posts, this returns platformPostUrl for each platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
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

[**\Late\Model\PostGetResponse**](../Model/PostGetResponse.md)

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
listPosts($page, $limit, $status, $platform, $profile_id, $created_by, $date_from, $date_to, $include_hidden, $search, $sort_by): \Late\Model\PostsListResponse
```

List posts

Returns a paginated list of posts. Published posts include platformPostUrl with the public URL on each platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
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

try {
    $result = $apiInstance->listPosts($page, $limit, $status, $platform, $profile_id, $created_by, $date_from, $date_to, $include_hidden, $search, $sort_by);
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

### Return type

[**\Late\Model\PostsListResponse**](../Model/PostsListResponse.md)

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
retryPost($post_id): \Late\Model\PostRetryResponse
```

Retry failed post

Immediately retries publishing a failed post. Returns the updated post with its new status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
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

[**\Late\Model\PostRetryResponse**](../Model/PostRetryResponse.md)

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
unpublishPost($post_id, $unpublish_post_request): \Late\Model\UnpublishPost200Response
```

Unpublish post

Deletes a published post from the specified platform. The post record in Late is kept but its status is updated to cancelled. Not supported on Instagram, TikTok, or Snapchat. Threaded posts delete all items. YouTube deletion is permanent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$unpublish_post_request = {"platform":"threads"}; // \Late\Model\UnpublishPostRequest

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
| **unpublish_post_request** | [**\Late\Model\UnpublishPostRequest**](../Model/UnpublishPostRequest.md)|  | |

### Return type

[**\Late\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

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
updatePost($post_id, $update_post_request): \Late\Model\PostUpdateResponse
```

Update post

Update an existing post. Only draft, scheduled, failed, and partial posts can be edited. Published, publishing, and cancelled posts cannot be modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$update_post_request = {"content":"Updated content for our launch post!","scheduledFor":"2024-11-02T14:00:00Z"}; // \Late\Model\UpdatePostRequest

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
| **update_post_request** | [**\Late\Model\UpdatePostRequest**](../Model/UpdatePostRequest.md)|  | |

### Return type

[**\Late\Model\PostUpdateResponse**](../Model/PostUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
