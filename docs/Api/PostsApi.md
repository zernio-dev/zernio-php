# Late\PostsApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkUploadPosts()**](PostsApi.md#bulkUploadPosts) | **POST** /v1/posts/bulk-upload | Validate and schedule multiple posts from CSV |
| [**createPost()**](PostsApi.md#createPost) | **POST** /v1/posts | Create a draft, scheduled, or immediate post |
| [**deletePost()**](PostsApi.md#deletePost) | **DELETE** /v1/posts/{postId} | Delete a post |
| [**getPost()**](PostsApi.md#getPost) | **GET** /v1/posts/{postId} | Get a single post |
| [**listPosts()**](PostsApi.md#listPosts) | **GET** /v1/posts | List posts visible to the authenticated user |
| [**retryPost()**](PostsApi.md#retryPost) | **POST** /v1/posts/{postId}/retry | Retry publishing a failed or partial post |
| [**unpublishPost()**](PostsApi.md#unpublishPost) | **POST** /v1/posts/{postId}/unpublish | Delete a published post from a social media platform |
| [**updatePost()**](PostsApi.md#updatePost) | **PUT** /v1/posts/{postId} | Update a post |


## `bulkUploadPosts()`

```php
bulkUploadPosts($dry_run, $file): \Late\Model\BulkUploadPosts200Response
```

Validate and schedule multiple posts from CSV

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

Create a draft, scheduled, or immediate post

**Getting Post URLs:** - For immediate posts (`publishNow: true`): The response includes `platformPostUrl` in each platform entry under `post.platforms[]`. - For scheduled posts: Fetch the post via `GET /v1/posts/{postId}` after the scheduled time; `platformPostUrl` will be populated once published.  **Content/Caption requirements:** - `content` (caption/description) is optional when:   - Media is attached (`mediaItems` or per-platform `customMedia`)   - All platforms have `customContent` set   - Posting only to YouTube (title is used instead) - Text-only posts (no media) require `content` - Stories do not use captions (content is ignored) - Reels, feed posts, and other media posts can have optional captions  Platform constraints: - YouTube requires a video in mediaItems; optional custom thumbnail via MediaItem.thumbnail. - Instagram and TikTok require media; do not mix videos and images for TikTok. - Instagram carousels support up to 10 items; Stories publish as 'story'. - Threads carousels support up to 10 images (no videos in carousels); single posts support one image or video. - Facebook Stories require media (single image or video); set contentType to 'story' in platformSpecificData. - LinkedIn multi-image supports up to 20 images; single PDF documents supported (max 100MB, ~300 pages, cannot mix with other media). - Pinterest supports single image via image_url or a single video per Pin; boardId is required. - Bluesky supports up to 4 images per post. Images may be automatically recompressed to ≤ ~1MB to satisfy Bluesky's blob limit. When no media is attached, a link preview may be generated for URLs in the text. - Snapchat requires media (single image or video); set contentType to 'story', 'saved_story', or 'spotlight' in platformSpecificData. Stories are ephemeral (24h), Saved Stories are permanent, Spotlight is for video content.  **Multi-page/multi-location posting:** Some platforms allow posting to multiple pages, organizations, or locations from a single account connection. Use the same accountId multiple times with different targets in platformSpecificData: - Facebook: `pageId` - post to multiple Facebook Pages (list via GET /v1/accounts/{id}/facebook-page) - LinkedIn: `organizationUrn` - post to multiple organizations (list via GET /v1/accounts/{id}/linkedin-organizations) - Google Business: `locationId` - post to multiple locations (list via GET /v1/accounts/{id}/gmb-locations) - Reddit: `subreddit` - post to multiple subreddits from the same account

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

Delete a post

Delete a post. Published posts cannot be deleted.  When deleting a scheduled or draft post that consumed upload quota, the quota will be automatically refunded.

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

Get a single post

Fetch a single post by ID. For published posts, this returns `platformPostUrl`  for each platform - useful for retrieving post URLs after scheduled posts publish.

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
listPosts($page, $limit, $status, $platform, $profile_id, $created_by, $date_from, $date_to, $include_hidden): \Late\Model\PostsListResponse
```

List posts visible to the authenticated user

**Getting Post URLs:** For published posts, each platform entry includes `platformPostUrl` with the public URL. Use `status=published` filter to fetch only published posts with their URLs.  Notes and constraints by platform when interpreting the response: - YouTube: posts always include at least one video in mediaItems. - Instagram/TikTok: posts always include media; drafts may omit media until finalized in client. - TikTok: mediaItems will not mix photos and videos in the same post.

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

try {
    $result = $apiInstance->listPosts($page, $limit, $status, $platform, $profile_id, $created_by, $date_from, $date_to, $include_hidden);
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

Retry publishing a failed or partial post

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

Delete a published post from a social media platform

Permanently deletes a published post from the specified social media platform. The post record in Late is kept but its platform status is set to \"cancelled\".  **Supported platforms:** Threads, Facebook, Twitter/X, LinkedIn, YouTube, Pinterest, Reddit, Bluesky, Google Business, Telegram.  **Not supported:** - **Instagram:** No deletion API available. Posts must be deleted manually. - **TikTok:** No deletion API available. Posts must be deleted manually. - **Snapchat:** No deletion API available. Posts must be deleted manually.  **Platform notes:** - **Threaded posts (Twitter, Threads, Bluesky):** If the post was published as a thread, all items in the thread are deleted (not just the first one). Posts published before this feature was added will only have the first item deleted. - **Telegram:** Messages older than 48 hours may fail to delete (Telegram Bot API limitation). - **YouTube:** This permanently deletes the video from YouTube.

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

Update a post

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
