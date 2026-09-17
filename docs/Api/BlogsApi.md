# Zernio\BlogsApi

Manage blogs and blog articles on connected accounts. Currently supported for Shopify accounts (scopes read_content and write_content). Blogs are the containers; articles are the posts inside them. All content lives on the platform; Zernio proxies it and stores nothing.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBlog()**](BlogsApi.md#createBlog) | **POST** /v1/accounts/{accountId}/blogs | Create a blog |
| [**createBlogArticle()**](BlogsApi.md#createBlogArticle) | **POST** /v1/accounts/{accountId}/blogs/{blogId}/articles | Create a blog article |
| [**deleteBlog()**](BlogsApi.md#deleteBlog) | **DELETE** /v1/accounts/{accountId}/blogs/{blogId} | Delete a blog |
| [**deleteBlogArticle()**](BlogsApi.md#deleteBlogArticle) | **DELETE** /v1/accounts/{accountId}/blogs/{blogId}/articles/{articleId} | Delete a blog article |
| [**getBlog()**](BlogsApi.md#getBlog) | **GET** /v1/accounts/{accountId}/blogs/{blogId} | Get a blog |
| [**getBlogArticle()**](BlogsApi.md#getBlogArticle) | **GET** /v1/accounts/{accountId}/blogs/{blogId}/articles/{articleId} | Get a blog article |
| [**listBlogArticles()**](BlogsApi.md#listBlogArticles) | **GET** /v1/accounts/{accountId}/blogs/{blogId}/articles | List blog articles |
| [**listBlogs()**](BlogsApi.md#listBlogs) | **GET** /v1/accounts/{accountId}/blogs | List blogs |
| [**updateBlog()**](BlogsApi.md#updateBlog) | **PATCH** /v1/accounts/{accountId}/blogs/{blogId} | Update a blog |
| [**updateBlogArticle()**](BlogsApi.md#updateBlogArticle) | **PATCH** /v1/accounts/{accountId}/blogs/{blogId}/articles/{articleId} | Update a blog article |


## `createBlog()`

```php
createBlog($account_id, $create_blog_request): \Zernio\Model\CreateBlog201Response
```

Create a blog

Creates a blog on the connected store. The platform generates the URL `handle` from the title when omitted.  Supported on Shopify (platform `shopify`). A WordPress connection is its existing site, so WordPress returns 405 for blog creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify SocialAccount id.
$create_blog_request = new \Zernio\Model\CreateBlogRequest(); // \Zernio\Model\CreateBlogRequest

try {
    $result = $apiInstance->createBlog($account_id, $create_blog_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->createBlog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify SocialAccount id. | |
| **create_blog_request** | [**\Zernio\Model\CreateBlogRequest**](../Model/CreateBlogRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateBlog201Response**](../Model/CreateBlog201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBlogArticle()`

```php
createBlogArticle($account_id, $blog_id, $create_blog_article_request): \Zernio\Model\CreateBlogArticle201Response
```

Create a blog article

Creates an article on the blog. Publishing behavior:  - WordPress defaults to a draft when both publishing fields are omitted. - `isPublished: false` keeps the article as a draft and takes priority   over a future `publishDate`. - A future `publishDate` schedules publication natively on the   platform; the platform publishes it at that time with no Zernio   queue involved. - `isPublished: true` publishes immediately when there is no future   `publishDate`. - `seo.title` / `seo.description` map to Shopify's global `title_tag`   and `description_tag` metafields (the fields Shopify themes read for   the page title and meta description). WordPress rejects `seo`; SEO   plugin and custom-field writes are not supported.  Supported on Shopify (`shopify`) and WordPress (`wordpress`). WordPress native scheduling depends on the site's scheduler/WP-Cron.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify or WordPress account id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog/site id returned by the list operation.
$create_blog_article_request = new \Zernio\Model\CreateBlogArticleRequest(); // \Zernio\Model\CreateBlogArticleRequest

try {
    $result = $apiInstance->createBlogArticle($account_id, $blog_id, $create_blog_article_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->createBlogArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify or WordPress account id. | |
| **blog_id** | **string**| Platform-native numeric blog/site id returned by the list operation. | |
| **create_blog_article_request** | [**\Zernio\Model\CreateBlogArticleRequest**](../Model/CreateBlogArticleRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateBlogArticle201Response**](../Model/CreateBlogArticle201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBlog()`

```php
deleteBlog($account_id, $blog_id)
```

Delete a blog

Deletes the blog AND every article in it. The delete happens on the platform and is permanent; Zernio stores nothing to restore it from.  Supported on Shopify (platform `shopify`). Disconnect a WordPress account instead of deleting its site; WordPress returns 405 here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify SocialAccount id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog id. Non-numeric values return 400.

try {
    $apiInstance->deleteBlog($account_id, $blog_id);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->deleteBlog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify SocialAccount id. | |
| **blog_id** | **string**| Platform-native numeric blog id. Non-numeric values return 400. | |

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

## `deleteBlogArticle()`

```php
deleteBlogArticle($account_id, $blog_id, $article_id)
```

Delete a blog article

Deletes the article. The delete happens on the platform and is permanent; Zernio stores nothing to restore it from. On WordPress the post is force-deleted, while uploaded attachments and tags remain in the site's media library and taxonomy.  Supported on Shopify (`shopify`) and WordPress (`wordpress`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify or WordPress account id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog/site id returned by the list operation.
$article_id = 'article_id_example'; // string | Platform-native numeric article id. Non-numeric values return 400.

try {
    $apiInstance->deleteBlogArticle($account_id, $blog_id, $article_id);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->deleteBlogArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify or WordPress account id. | |
| **blog_id** | **string**| Platform-native numeric blog/site id returned by the list operation. | |
| **article_id** | **string**| Platform-native numeric article id. Non-numeric values return 400. | |

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

## `getBlog()`

```php
getBlog($account_id, $blog_id): \Zernio\Model\GetBlog200Response
```

Get a blog

Fetches a single blog. Use the platform-native `blogId` returned by `GET /v1/accounts/{accountId}/blogs`: a Shopify numeric blog id, the WordPress.com numeric site id, or `1` for a self-hosted WordPress site. The self-hosted id is scoped to its connected account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify or WordPress account id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog/site id returned by the list operation.

try {
    $result = $apiInstance->getBlog($account_id, $blog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->getBlog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify or WordPress account id. | |
| **blog_id** | **string**| Platform-native numeric blog/site id returned by the list operation. | |

### Return type

[**\Zernio\Model\GetBlog200Response**](../Model/GetBlog200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlogArticle()`

```php
getBlogArticle($account_id, $blog_id, $article_id): \Zernio\Model\CreateBlogArticle201Response
```

Get a blog article

Fetches a single article. An article addressed through a blog it does not belong to is a 404 (code blog_article_not_found).  Supported on Shopify (`shopify`) and WordPress (`wordpress`). WordPress returns its native `status`; `publishedAt` is present only for a published post and `publishDate` only for a scheduled post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify or WordPress account id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog/site id returned by the list operation.
$article_id = 'article_id_example'; // string | Platform-native numeric article id. Non-numeric values return 400.

try {
    $result = $apiInstance->getBlogArticle($account_id, $blog_id, $article_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->getBlogArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify or WordPress account id. | |
| **blog_id** | **string**| Platform-native numeric blog/site id returned by the list operation. | |
| **article_id** | **string**| Platform-native numeric article id. Non-numeric values return 400. | |

### Return type

[**\Zernio\Model\CreateBlogArticle201Response**](../Model/CreateBlogArticle201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBlogArticles()`

```php
listBlogArticles($account_id, $blog_id, $limit, $cursor): \Zernio\Model\ListBlogArticles200Response
```

List blog articles

Lists the articles of a blog. Cursor-paginated: pass `limit` (1-50, default 20) and the `cursor` from a previous response's `nextCursor`; `nextCursor` is null when there are no more pages. Treat cursors as opaque and pass them unchanged. Supported on Shopify (`shopify`) and WordPress (`wordpress`). WordPress results include native `status` and include `publishDate` only for scheduled (`future`) posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify or WordPress account id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog/site id returned by the list operation.
$limit = 20; // int | Page size (1-50).
$cursor = 'cursor_example'; // string | Opaque cursor from a previous response. Omit for the first page.

try {
    $result = $apiInstance->listBlogArticles($account_id, $blog_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->listBlogArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify or WordPress account id. | |
| **blog_id** | **string**| Platform-native numeric blog/site id returned by the list operation. | |
| **limit** | **int**| Page size (1-50). | [optional] [default to 20] |
| **cursor** | **string**| Opaque cursor from a previous response. Omit for the first page. | [optional] |

### Return type

[**\Zernio\Model\ListBlogArticles200Response**](../Model/ListBlogArticles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBlogs()`

```php
listBlogs($account_id, $limit, $cursor): \Zernio\Model\ListBlogs200Response
```

List blogs

Lists blogs on the connected account. Shopify returns its store blogs with cursor pagination. A WordPress account represents one site and always returns exactly that one blog with `nextCursor: null`.  `limit` is 1-50 (default 20). Treat `nextCursor` as opaque; pass it unchanged on the next request. Supported on Shopify (`shopify`) and WordPress (`wordpress`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify or WordPress account id.
$limit = 20; // int | Page size (1-50).
$cursor = 'cursor_example'; // string | Opaque cursor from a previous response. Omit for the first page.

try {
    $result = $apiInstance->listBlogs($account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->listBlogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify or WordPress account id. | |
| **limit** | **int**| Page size (1-50). | [optional] [default to 20] |
| **cursor** | **string**| Opaque cursor from a previous response. Omit for the first page. | [optional] |

### Return type

[**\Zernio\Model\ListBlogs200Response**](../Model/ListBlogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBlog()`

```php
updateBlog($account_id, $blog_id, $update_blog_request): \Zernio\Model\CreateBlog201Response
```

Update a blog

Partial-updates a blog. Send any subset of `title` and `handle`; at least one field is required (an empty body returns 400).  Supported on Shopify (platform `shopify`). WordPress site settings are not writable through this API, so WordPress returns 405.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify SocialAccount id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog id. Non-numeric values return 400.
$update_blog_request = new \Zernio\Model\UpdateBlogRequest(); // \Zernio\Model\UpdateBlogRequest

try {
    $result = $apiInstance->updateBlog($account_id, $blog_id, $update_blog_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->updateBlog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify SocialAccount id. | |
| **blog_id** | **string**| Platform-native numeric blog id. Non-numeric values return 400. | |
| **update_blog_request** | [**\Zernio\Model\UpdateBlogRequest**](../Model/UpdateBlogRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateBlog201Response**](../Model/CreateBlog201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBlogArticle()`

```php
updateBlogArticle($account_id, $blog_id, $article_id, $update_blog_article_request): \Zernio\Model\CreateBlogArticle201Response
```

Update a blog article

Partial-updates an article. Send any subset of the create fields (`title`, `bodyHtml`, `handle`, `tags`, `author`, `excerpt`, `image`, `seo`, `isPublished`, `publishDate`); at least one field is required (an empty body returns 400). `isPublished` and `publishDate` behave as on create: `isPublished: false` unpublishes back to a draft and a future `publishDate` schedules publication natively on the platform. Omitting both fields preserves the current WordPress status. Omitting `image` preserves the current featured image; removal is not supported. WordPress rejects `seo` and does not support SEO-plugin/custom-field, category, or custom-post-type writes.  Supported on Shopify (`shopify`) and WordPress (`wordpress`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify or WordPress account id.
$blog_id = 'blog_id_example'; // string | Platform-native numeric blog/site id returned by the list operation.
$article_id = 'article_id_example'; // string | Platform-native numeric article id. Non-numeric values return 400.
$update_blog_article_request = new \Zernio\Model\UpdateBlogArticleRequest(); // \Zernio\Model\UpdateBlogArticleRequest

try {
    $result = $apiInstance->updateBlogArticle($account_id, $blog_id, $article_id, $update_blog_article_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogsApi->updateBlogArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify or WordPress account id. | |
| **blog_id** | **string**| Platform-native numeric blog/site id returned by the list operation. | |
| **article_id** | **string**| Platform-native numeric article id. Non-numeric values return 400. | |
| **update_blog_article_request** | [**\Zernio\Model\UpdateBlogArticleRequest**](../Model/UpdateBlogArticleRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateBlogArticle201Response**](../Model/CreateBlogArticle201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
