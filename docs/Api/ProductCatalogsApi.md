# Zernio\ProductCatalogsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchAdCatalogProducts()**](ProductCatalogsApi.md#batchAdCatalogProducts) | **POST** /v1/ads/catalogs/{catalogId}/products/batch | Create, update or delete products in bulk |
| [**createAdCatalog()**](ProductCatalogsApi.md#createAdCatalog) | **POST** /v1/ads/catalogs | Create a Meta product catalog |
| [**createAdCatalogFeed()**](ProductCatalogsApi.md#createAdCatalogFeed) | **POST** /v1/ads/catalogs/{catalogId}/feeds | Create a product feed |
| [**createAdCatalogFeedUpload()**](ProductCatalogsApi.md#createAdCatalogFeedUpload) | **POST** /v1/ads/catalogs/{catalogId}/feeds/{feedId}/uploads | Fetch a feed file now |
| [**createAdCatalogProduct()**](ProductCatalogsApi.md#createAdCatalogProduct) | **POST** /v1/ads/catalogs/{catalogId}/products | Add a product to a catalog |
| [**createAdCatalogProductSet()**](ProductCatalogsApi.md#createAdCatalogProductSet) | **POST** /v1/ads/catalogs/{catalogId}/product-sets | Create a product set |
| [**deleteAdCatalog()**](ProductCatalogsApi.md#deleteAdCatalog) | **DELETE** /v1/ads/catalogs/{catalogId} | Delete a product catalog |
| [**deleteAdCatalogProduct()**](ProductCatalogsApi.md#deleteAdCatalogProduct) | **DELETE** /v1/ads/catalogs/{catalogId}/products/{productId} | Delete a product |
| [**deleteAdCatalogProductSet()**](ProductCatalogsApi.md#deleteAdCatalogProductSet) | **DELETE** /v1/ads/catalogs/{catalogId}/product-sets/{productSetId} | Delete a product set |
| [**getAdCatalog()**](ProductCatalogsApi.md#getAdCatalog) | **GET** /v1/ads/catalogs/{catalogId} | Get a product catalog |
| [**getAdCatalogBatch()**](ProductCatalogsApi.md#getAdCatalogBatch) | **GET** /v1/ads/catalogs/{catalogId}/batches/{handle} | Get a bulk request&#39;s status |
| [**getAdCatalogProduct()**](ProductCatalogsApi.md#getAdCatalogProduct) | **GET** /v1/ads/catalogs/{catalogId}/products/{productId} | Get a product |
| [**listAdCatalogFeedUploads()**](ProductCatalogsApi.md#listAdCatalogFeedUploads) | **GET** /v1/ads/catalogs/{catalogId}/feeds/{feedId}/uploads | List a feed&#39;s uploads |
| [**listAdCatalogFeeds()**](ProductCatalogsApi.md#listAdCatalogFeeds) | **GET** /v1/ads/catalogs/{catalogId}/feeds | List a catalog&#39;s product feeds |
| [**listAdCatalogProductSets()**](ProductCatalogsApi.md#listAdCatalogProductSets) | **GET** /v1/ads/catalogs/{catalogId}/product-sets | List a catalog&#39;s product sets |
| [**listAdCatalogProducts()**](ProductCatalogsApi.md#listAdCatalogProducts) | **GET** /v1/ads/catalogs/{catalogId}/products | List a catalog&#39;s products |
| [**listAdCatalogs()**](ProductCatalogsApi.md#listAdCatalogs) | **GET** /v1/ads/catalogs | List Meta product catalogs |
| [**updateAdCatalogProduct()**](ProductCatalogsApi.md#updateAdCatalogProduct) | **PUT** /v1/ads/catalogs/{catalogId}/products/{productId} | Update a product |
| [**updateAdCatalogProductSet()**](ProductCatalogsApi.md#updateAdCatalogProductSet) | **PUT** /v1/ads/catalogs/{catalogId}/product-sets/{productSetId} | Update a product set |


## `batchAdCatalogProducts()`

```php
batchAdCatalogProducts($catalog_id, $batch_ad_catalog_products_request): \Zernio\Model\BatchAdCatalogProducts202Response
```

Create, update or delete products in bulk

Up to 5000 CREATE / UPDATE / DELETE requests keyed by `retailerId`, processed asynchronously by Meta. Returns handles; poll GET /v1/ads/catalogs/{catalogId}/batches/{handle} for the outcome and per-item errors. CREATE requests need name, url, imageUrl, price and currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$batch_ad_catalog_products_request = new \Zernio\Model\BatchAdCatalogProductsRequest(); // \Zernio\Model\BatchAdCatalogProductsRequest

try {
    $result = $apiInstance->batchAdCatalogProducts($catalog_id, $batch_ad_catalog_products_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->batchAdCatalogProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **batch_ad_catalog_products_request** | [**\Zernio\Model\BatchAdCatalogProductsRequest**](../Model/BatchAdCatalogProductsRequest.md)|  | |

### Return type

[**\Zernio\Model\BatchAdCatalogProducts202Response**](../Model/BatchAdCatalogProducts202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdCatalog()`

```php
createAdCatalog($create_ad_catalog_request): \Zernio\Model\CreateAdCatalog201Response
```

Create a Meta product catalog

Creates a Meta Commerce catalog in the business portfolio (resolved like GET). The same catalog serves Advantage+ catalog ads, Instagram/Facebook Shops and the WhatsApp Business catalog: link it to a WhatsApp number with POST /v1/whatsapp/catalogs. Needs catalog_management on the Meta login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_catalog_request = new \Zernio\Model\CreateAdCatalogRequest(); // \Zernio\Model\CreateAdCatalogRequest

try {
    $result = $apiInstance->createAdCatalog($create_ad_catalog_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->createAdCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_catalog_request** | [**\Zernio\Model\CreateAdCatalogRequest**](../Model/CreateAdCatalogRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCatalog201Response**](../Model/CreateAdCatalog201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdCatalogFeed()`

```php
createAdCatalogFeed($catalog_id, $create_ad_catalog_feed_request): \Zernio\Model\CreateAdCatalogFeed201Response
```

Create a product feed

A feed pulls a CSV/TSV/XML product file from a URL. With `schedule` Meta fetches it on a cadence; without it, trigger fetches with POST /v1/ads/catalogs/{catalogId}/feeds/{feedId}/uploads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$create_ad_catalog_feed_request = new \Zernio\Model\CreateAdCatalogFeedRequest(); // \Zernio\Model\CreateAdCatalogFeedRequest

try {
    $result = $apiInstance->createAdCatalogFeed($catalog_id, $create_ad_catalog_feed_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->createAdCatalogFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **create_ad_catalog_feed_request** | [**\Zernio\Model\CreateAdCatalogFeedRequest**](../Model/CreateAdCatalogFeedRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCatalogFeed201Response**](../Model/CreateAdCatalogFeed201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdCatalogFeedUpload()`

```php
createAdCatalogFeedUpload($catalog_id, $feed_id, $create_ad_catalog_feed_upload_request): \Zernio\Model\CreateAdCatalogFeedUpload202Response
```

Fetch a feed file now

Asks Meta to fetch the product file at `url` into the feed. Processing is asynchronous: read the outcome with GET uploads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$feed_id = 'feed_id_example'; // string
$create_ad_catalog_feed_upload_request = new \Zernio\Model\CreateAdCatalogFeedUploadRequest(); // \Zernio\Model\CreateAdCatalogFeedUploadRequest

try {
    $result = $apiInstance->createAdCatalogFeedUpload($catalog_id, $feed_id, $create_ad_catalog_feed_upload_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->createAdCatalogFeedUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **feed_id** | **string**|  | |
| **create_ad_catalog_feed_upload_request** | [**\Zernio\Model\CreateAdCatalogFeedUploadRequest**](../Model/CreateAdCatalogFeedUploadRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCatalogFeedUpload202Response**](../Model/CreateAdCatalogFeedUpload202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdCatalogProduct()`

```php
createAdCatalogProduct($catalog_id, $create_ad_catalog_product_request): \Zernio\Model\CreateAdCatalogProduct201Response
```

Add a product to a catalog

Adds one product. `retailerId` is your SKU and stays the handle for later lookups and batch updates. For many products at once use POST /v1/ads/catalogs/{catalogId}/products/batch. Needs catalog_management on the Meta login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$create_ad_catalog_product_request = new \Zernio\Model\CreateAdCatalogProductRequest(); // \Zernio\Model\CreateAdCatalogProductRequest

try {
    $result = $apiInstance->createAdCatalogProduct($catalog_id, $create_ad_catalog_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->createAdCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **create_ad_catalog_product_request** | [**\Zernio\Model\CreateAdCatalogProductRequest**](../Model/CreateAdCatalogProductRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCatalogProduct201Response**](../Model/CreateAdCatalogProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdCatalogProductSet()`

```php
createAdCatalogProductSet($catalog_id, $create_ad_catalog_product_set_request): \Zernio\Model\CreateAdCatalogProductSet201Response
```

Create a product set

A product set is a filter over the catalog, e.g. `{\"retailer_id\": {\"is_any\": [\"sku-1\", \"sku-2\"]}}` or `{\"brand\": {\"i_contains\": \"acme\"}}` (Meta's product set filter syntax).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$create_ad_catalog_product_set_request = new \Zernio\Model\CreateAdCatalogProductSetRequest(); // \Zernio\Model\CreateAdCatalogProductSetRequest

try {
    $result = $apiInstance->createAdCatalogProductSet($catalog_id, $create_ad_catalog_product_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->createAdCatalogProductSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **create_ad_catalog_product_set_request** | [**\Zernio\Model\CreateAdCatalogProductSetRequest**](../Model/CreateAdCatalogProductSetRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCatalogProductSet201Response**](../Model/CreateAdCatalogProductSet201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdCatalog()`

```php
deleteAdCatalog($catalog_id, $account_id, $catalog_account_id): \Zernio\Model\DeleteAdCatalog200Response
```

Delete a product catalog

Deletes the catalog and every product in it on Meta. Ads and WhatsApp numbers that use it lose their catalog.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->deleteAdCatalog($catalog_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->deleteAdCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\DeleteAdCatalog200Response**](../Model/DeleteAdCatalog200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdCatalogProduct()`

```php
deleteAdCatalogProduct($catalog_id, $product_id, $account_id, $catalog_account_id): \Zernio\Model\DeleteAdCatalogProduct200Response
```

Delete a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$product_id = 'product_id_example'; // string | Meta product item ID (from the products list; not the retailer id)
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->deleteAdCatalogProduct($catalog_id, $product_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->deleteAdCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **product_id** | **string**| Meta product item ID (from the products list; not the retailer id) | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\DeleteAdCatalogProduct200Response**](../Model/DeleteAdCatalogProduct200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdCatalogProductSet()`

```php
deleteAdCatalogProductSet($catalog_id, $product_set_id, $account_id, $catalog_account_id): \Zernio\Model\DeleteAdCatalogProductSet200Response
```

Delete a product set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$product_set_id = 'product_set_id_example'; // string
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->deleteAdCatalogProductSet($catalog_id, $product_set_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->deleteAdCatalogProductSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **product_set_id** | **string**|  | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\DeleteAdCatalogProductSet200Response**](../Model/DeleteAdCatalogProductSet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdCatalog()`

```php
getAdCatalog($catalog_id, $account_id, $catalog_account_id): \Zernio\Model\CreateAdCatalog201Response
```

Get a product catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->getAdCatalog($catalog_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->getAdCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\CreateAdCatalog201Response**](../Model/CreateAdCatalog201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdCatalogBatch()`

```php
getAdCatalogBatch($catalog_id, $handle, $account_id, $catalog_account_id): \Zernio\Model\GetAdCatalogBatch200Response
```

Get a bulk request's status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$handle = 'handle_example'; // string | Handle returned by the batch call
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->getAdCatalogBatch($catalog_id, $handle, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->getAdCatalogBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **handle** | **string**| Handle returned by the batch call | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\GetAdCatalogBatch200Response**](../Model/GetAdCatalogBatch200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdCatalogProduct()`

```php
getAdCatalogProduct($catalog_id, $product_id, $account_id, $catalog_account_id): \Zernio\Model\CreateAdCatalogProduct201Response
```

Get a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$product_id = 'product_id_example'; // string | Meta product item ID (from the products list; not the retailer id)
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->getAdCatalogProduct($catalog_id, $product_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->getAdCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **product_id** | **string**| Meta product item ID (from the products list; not the retailer id) | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\CreateAdCatalogProduct201Response**](../Model/CreateAdCatalogProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogFeedUploads()`

```php
listAdCatalogFeedUploads($catalog_id, $feed_id, $account_id, $catalog_account_id): \Zernio\Model\ListAdCatalogFeedUploads200Response
```

List a feed's uploads

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$feed_id = 'feed_id_example'; // string
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->listAdCatalogFeedUploads($catalog_id, $feed_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->listAdCatalogFeedUploads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **feed_id** | **string**|  | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\ListAdCatalogFeedUploads200Response**](../Model/ListAdCatalogFeedUploads200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogFeeds()`

```php
listAdCatalogFeeds($catalog_id, $account_id, $catalog_account_id): \Zernio\Model\ListAdCatalogFeeds200Response
```

List a catalog's product feeds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->listAdCatalogFeeds($catalog_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->listAdCatalogFeeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\ListAdCatalogFeeds200Response**](../Model/ListAdCatalogFeeds200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogProductSets()`

```php
listAdCatalogProductSets($catalog_id, $account_id, $catalog_account_id): \Zernio\Model\ListAdCatalogProductSets200Response
```

List a catalog's product sets

Lists a Meta product catalog's product sets, the unit a catalog ad promotes. Pass the chosen set id, not the parent catalog id, as `promotedObject.productSetId` on POST /v1/ads/create with `goal: catalog_sales`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own

try {
    $result = $apiInstance->listAdCatalogProductSets($catalog_id, $account_id, $catalog_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->listAdCatalogProductSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |

### Return type

[**\Zernio\Model\ListAdCatalogProductSets200Response**](../Model/ListAdCatalogProductSets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogProducts()`

```php
listAdCatalogProducts($catalog_id, $account_id, $catalog_account_id, $limit, $after, $retailer_id): \Zernio\Model\ListAdCatalogProducts200Response
```

List a catalog's products

Pages through the catalog's products. Filter by your own `retailerId` to look one up. `price` and `salePrice` come back formatted by Meta (for example \"€49.90\").

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account's own
$limit = 25; // int
$after = 'after_example'; // string | Cursor from the previous page's `nextCursor`
$retailer_id = 'retailer_id_example'; // string | Only the product with this retailer id (your SKU)

try {
    $result = $apiInstance->listAdCatalogProducts($catalog_id, $account_id, $catalog_account_id, $limit, $after, $retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->listAdCatalogProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token performs the call instead of the account&#39;s own | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **after** | **string**| Cursor from the previous page&#39;s &#x60;nextCursor&#x60; | [optional] |
| **retailer_id** | **string**| Only the product with this retailer id (your SKU) | [optional] |

### Return type

[**\Zernio\Model\ListAdCatalogProducts200Response**](../Model/ListAdCatalogProducts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogs()`

```php
listAdCatalogs($account_id, $catalog_account_id, $ad_account_id, $business_id): \Zernio\Model\ListAdCatalogs200Response
```

List Meta product catalogs

Lists the Meta Commerce catalogs of a business portfolio (owned + agency-shared). The business comes from `businessId`, else the ad account's owner (`adAccountId`), else the WhatsApp Business Account's owner when `accountId` is a WhatsApp connection, else the only business the Meta login can see. Reads work with scopes customers already granted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | A facebook, instagram, metaads or whatsapp account ID
$catalog_account_id = 'catalog_account_id_example'; // string | A facebook, instagram or metaads account whose Meta login carries catalog_management; its token is used instead of the account's own (needed for WhatsApp connections, whose token cannot manage catalogs).
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID (act_...) whose owner business to list
$business_id = 'business_id_example'; // string | Meta business portfolio ID to list. When it is omitted and the Meta login can see several portfolios, the 400 carries `details.businesses` (id + name) so a client can offer the choice.

try {
    $result = $apiInstance->listAdCatalogs($account_id, $catalog_account_id, $ad_account_id, $business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->listAdCatalogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| A facebook, instagram, metaads or whatsapp account ID | |
| **catalog_account_id** | **string**| A facebook, instagram or metaads account whose Meta login carries catalog_management; its token is used instead of the account&#39;s own (needed for WhatsApp connections, whose token cannot manage catalogs). | [optional] |
| **ad_account_id** | **string**| Meta ad account ID (act_...) whose owner business to list | [optional] |
| **business_id** | **string**| Meta business portfolio ID to list. When it is omitted and the Meta login can see several portfolios, the 400 carries &#x60;details.businesses&#x60; (id + name) so a client can offer the choice. | [optional] |

### Return type

[**\Zernio\Model\ListAdCatalogs200Response**](../Model/ListAdCatalogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdCatalogProduct()`

```php
updateAdCatalogProduct($catalog_id, $product_id, $update_ad_catalog_product_request): \Zernio\Model\CreateAdCatalogProduct201Response
```

Update a product

Partial update: only the fields sent change. `retailerId` cannot change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$product_id = 'product_id_example'; // string | Meta product item ID (from the products list; not the retailer id)
$update_ad_catalog_product_request = new \Zernio\Model\UpdateAdCatalogProductRequest(); // \Zernio\Model\UpdateAdCatalogProductRequest

try {
    $result = $apiInstance->updateAdCatalogProduct($catalog_id, $product_id, $update_ad_catalog_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->updateAdCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **product_id** | **string**| Meta product item ID (from the products list; not the retailer id) | |
| **update_ad_catalog_product_request** | [**\Zernio\Model\UpdateAdCatalogProductRequest**](../Model/UpdateAdCatalogProductRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCatalogProduct201Response**](../Model/CreateAdCatalogProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdCatalogProductSet()`

```php
updateAdCatalogProductSet($catalog_id, $product_set_id, $update_ad_catalog_product_set_request): \Zernio\Model\CreateAdCatalogProductSet201Response
```

Update a product set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProductCatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$product_set_id = 'product_set_id_example'; // string
$update_ad_catalog_product_set_request = new \Zernio\Model\UpdateAdCatalogProductSetRequest(); // \Zernio\Model\UpdateAdCatalogProductSetRequest

try {
    $result = $apiInstance->updateAdCatalogProductSet($catalog_id, $product_set_id, $update_ad_catalog_product_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCatalogsApi->updateAdCatalogProductSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **product_set_id** | **string**|  | |
| **update_ad_catalog_product_set_request** | [**\Zernio\Model\UpdateAdCatalogProductSetRequest**](../Model/UpdateAdCatalogProductSetRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCatalogProductSet201Response**](../Model/CreateAdCatalogProductSet201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
