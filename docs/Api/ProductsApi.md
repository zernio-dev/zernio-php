# Zernio\ProductsApi

Read and edit the product catalog on connected accounts. Currently supported for Shopify accounts (scopes read_products and write_products). Products are listed with their variants, options and images; edits cover the product&#39;s own fields (title, description, handle, tags, vendor, type, status, SEO) and variant prices. No product creation, inventory or orders. All data lives on the platform; Zernio proxies it and stores nothing.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProduct()**](ProductsApi.md#getProduct) | **GET** /v1/accounts/{accountId}/products/{productId} | Get a product |
| [**listProducts()**](ProductsApi.md#listProducts) | **GET** /v1/accounts/{accountId}/products | List products |
| [**updateProduct()**](ProductsApi.md#updateProduct) | **PATCH** /v1/accounts/{accountId}/products/{productId} | Update a product |


## `getProduct()`

```php
getProduct($account_id, $product_id): \Zernio\Model\GetProduct200Response
```

Get a product

Fetches a single product with its variants, options and images. `productId` is the platform's numeric product id from `GET /v1/accounts/{accountId}/products`, not a Zernio id.  Supported on Shopify (platform `shopify`); accounts on other platforms return 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify SocialAccount id.
$product_id = 'product_id_example'; // string | Platform-native numeric product id. Non-numeric values return 400.

try {
    $result = $apiInstance->getProduct($account_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify SocialAccount id. | |
| **product_id** | **string**| Platform-native numeric product id. Non-numeric values return 400. | |

### Return type

[**\Zernio\Model\GetProduct200Response**](../Model/GetProduct200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($account_id, $limit, $cursor, $status, $query): \Zernio\Model\ListProducts200Response
```

List products

Lists the products on the connected store in the platform's default order, each with its variants, options and images. Cursor-paginated: pass `limit` (1-50, default 20) and the `cursor` from a previous response's `nextCursor`; `nextCursor` is null when there are no more pages. Filter with `status` and/or `query` (the platform's product search syntax, e.g. `title:*shirt* vendor:Acme tag:summer`).  Supported on Shopify (platform `shopify`); accounts on other platforms return 400. A store connected before product access was added answers 403 insufficient_permissions until the merchant reconnects it through `GET /v1/connect/shopify`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify SocialAccount id.
$limit = 20; // int | Page size (1-50).
$cursor = 'cursor_example'; // string | Opaque cursor from a previous response. Omit for the first page.
$status = 'status_example'; // string | Only products in this status.
$query = 'query_example'; // string | Platform product search syntax, passed through verbatim (Shopify: title, vendor, product_type, tag, sku, handle, created_at, updated_at, ...).

try {
    $result = $apiInstance->listProducts($account_id, $limit, $cursor, $status, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify SocialAccount id. | |
| **limit** | **int**| Page size (1-50). | [optional] [default to 20] |
| **cursor** | **string**| Opaque cursor from a previous response. Omit for the first page. | [optional] |
| **status** | **string**| Only products in this status. | [optional] |
| **query** | **string**| Platform product search syntax, passed through verbatim (Shopify: title, vendor, product_type, tag, sku, handle, created_at, updated_at, ...). | [optional] |

### Return type

[**\Zernio\Model\ListProducts200Response**](../Model/ListProducts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProduct()`

```php
updateProduct($account_id, $product_id, $update_product_request): \Zernio\Model\GetProduct200Response
```

Update a product

Partial-updates a product. Send any subset of `title`, `descriptionHtml`, `handle`, `vendor`, `productType`, `tags`, `status`, `seo` and `variants`; at least one field is required (an empty body returns 400). `tags` replaces the full tag list. `variants` updates the price and compare-at price of the listed variant ids only; other variants are untouched, and a variant id that does not belong to the product is a 400. Responds with the product as it is after the update.  Supported on Shopify (platform `shopify`); accounts on other platforms return 400. A store connected before product access was added answers 403 insufficient_permissions until the merchant reconnects it through `GET /v1/connect/shopify`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Shopify SocialAccount id.
$product_id = 'product_id_example'; // string | Platform-native numeric product id. Non-numeric values return 400.
$update_product_request = new \Zernio\Model\UpdateProductRequest(); // \Zernio\Model\UpdateProductRequest

try {
    $result = $apiInstance->updateProduct($account_id, $product_id, $update_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Shopify SocialAccount id. | |
| **product_id** | **string**| Platform-native numeric product id. Non-numeric values return 400. | |
| **update_product_request** | [**\Zernio\Model\UpdateProductRequest**](../Model/UpdateProductRequest.md)|  | |

### Return type

[**\Zernio\Model\GetProduct200Response**](../Model/GetProduct200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
