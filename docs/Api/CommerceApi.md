# Zernio\CommerceApi

One API over every connected store. Write against it once and it works for each supported platform: Shopify, and WooCommerce on self-hosted WordPress sites (a connected WordPress account is the store; commerce objects report &#x60;platform: woocommerce&#x60;). TikTok Shop and more follow. Each operation lists its platforms in &#x60;x-platforms&#x60;. Pick the store with &#x60;accountId&#x60; (a query parameter on reads, a body field on writes).  Conventions shared by every Commerce endpoint: - Money is &#x60;{ amount, currency }&#x60; (CommerceMoney), with the amount as a decimal string   and the currency never null. Write bodies take a bare decimal amount   in the store&#39;s currency. - Timestamps are ISO 8601 UTC. - &#x60;status&#x60; uses the Zernio vocabulary. The platform&#39;s raw value is   always returned next to it as &#x60;platformStatus&#x60;. - Lists return &#x60;{ &lt;resource&gt;, nextCursor }&#x60; with an opaque cursor. - An operation a platform cannot serve answers 400 with code   &#x60;platform_not_supported&#x60;. &#x60;GET /v1/commerce/store&#x60; lists a store&#39;s   &#x60;capabilities&#x60; up front.  All data lives on the platform; Zernio proxies it and stores nothing.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCommerceDiscountCodes()**](CommerceApi.md#addCommerceDiscountCodes) | **POST** /v1/commerce/discounts/{discountId}/codes | Add codes to a discount |
| [**addCommerceMarketingEngagement()**](CommerceApi.md#addCommerceMarketingEngagement) | **POST** /v1/commerce/marketing-activities/{remoteId}/engagements | Report daily engagement |
| [**addCommerceProductImages()**](CommerceApi.md#addCommerceProductImages) | **POST** /v1/commerce/products/{productId}/images | Add images |
| [**changeCommerceCollectionChannels()**](CommerceApi.md#changeCommerceCollectionChannels) | **POST** /v1/commerce/collections/{collectionId}/channels | Publish or unpublish a collection |
| [**changeCommerceCollectionProducts()**](CommerceApi.md#changeCommerceCollectionProducts) | **POST** /v1/commerce/collections/{collectionId}/products | Add or remove products in a collection |
| [**changeCommerceInventory()**](CommerceApi.md#changeCommerceInventory) | **POST** /v1/commerce/products/{productId}/inventory | Set or adjust stock |
| [**changeCommerceProductChannels()**](CommerceApi.md#changeCommerceProductChannels) | **POST** /v1/commerce/products/{productId}/channels | Publish or unpublish a product |
| [**changeCommerceProductState()**](CommerceApi.md#changeCommerceProductState) | **POST** /v1/commerce/products/state | Activate, deactivate, archive or delete products |
| [**changeCommerceProductTags()**](CommerceApi.md#changeCommerceProductTags) | **POST** /v1/commerce/products/tags | Add or remove tags in bulk |
| [**createCommerceCatalogSync()**](CommerceApi.md#createCommerceCatalogSync) | **POST** /v1/commerce/catalog-syncs | Sync a store into a Meta catalog |
| [**createCommerceCollection()**](CommerceApi.md#createCommerceCollection) | **POST** /v1/commerce/collections | Create a collection |
| [**createCommerceDiscount()**](CommerceApi.md#createCommerceDiscount) | **POST** /v1/commerce/discounts | Create a discount |
| [**createCommerceMenu()**](CommerceApi.md#createCommerceMenu) | **POST** /v1/commerce/menus | Create a navigation menu |
| [**createCommerceMetaobject()**](CommerceApi.md#createCommerceMetaobject) | **POST** /v1/commerce/metaobjects | Create a metaobject |
| [**createCommercePage()**](CommerceApi.md#createCommercePage) | **POST** /v1/commerce/pages | Create a page |
| [**createCommerceProduct()**](CommerceApi.md#createCommerceProduct) | **POST** /v1/commerce/products | Create a product |
| [**createCommerceProductOptions()**](CommerceApi.md#createCommerceProductOptions) | **POST** /v1/commerce/products/{productId}/options | Add options |
| [**createCommerceProductVariants()**](CommerceApi.md#createCommerceProductVariants) | **POST** /v1/commerce/products/{productId}/variants | Add variants |
| [**createCommerceRedirect()**](CommerceApi.md#createCommerceRedirect) | **POST** /v1/commerce/redirects | Create a URL redirect |
| [**deleteCommerceCatalogSync()**](CommerceApi.md#deleteCommerceCatalogSync) | **DELETE** /v1/commerce/catalog-syncs/{syncId} | Stop a catalog sync |
| [**deleteCommerceCollection()**](CommerceApi.md#deleteCommerceCollection) | **DELETE** /v1/commerce/collections/{collectionId} | Delete a collection |
| [**deleteCommerceCollectionMetafields()**](CommerceApi.md#deleteCommerceCollectionMetafields) | **DELETE** /v1/commerce/collections/{collectionId}/metafields | Delete collection metafields |
| [**deleteCommerceDiscount()**](CommerceApi.md#deleteCommerceDiscount) | **DELETE** /v1/commerce/discounts/{discountId} | Delete a discount |
| [**deleteCommerceMarketingActivity()**](CommerceApi.md#deleteCommerceMarketingActivity) | **DELETE** /v1/commerce/marketing-activities/{remoteId} | Delete a marketing activity |
| [**deleteCommerceMenu()**](CommerceApi.md#deleteCommerceMenu) | **DELETE** /v1/commerce/menus/{menuId} | Delete a navigation menu |
| [**deleteCommerceMetaobject()**](CommerceApi.md#deleteCommerceMetaobject) | **DELETE** /v1/commerce/metaobjects/{metaobjectId} | Delete a metaobject |
| [**deleteCommercePage()**](CommerceApi.md#deleteCommercePage) | **DELETE** /v1/commerce/pages/{pageId} | Delete a page |
| [**deleteCommercePriceListPrices()**](CommerceApi.md#deleteCommercePriceListPrices) | **DELETE** /v1/commerce/price-lists/{priceListId}/prices | Remove fixed prices |
| [**deleteCommerceProductMetafields()**](CommerceApi.md#deleteCommerceProductMetafields) | **DELETE** /v1/commerce/products/{productId}/metafields | Delete product metafields |
| [**deleteCommerceProductOptions()**](CommerceApi.md#deleteCommerceProductOptions) | **DELETE** /v1/commerce/products/{productId}/options | Delete options |
| [**deleteCommerceProductVariants()**](CommerceApi.md#deleteCommerceProductVariants) | **DELETE** /v1/commerce/products/{productId}/variants | Delete variants |
| [**deleteCommerceRedirect()**](CommerceApi.md#deleteCommerceRedirect) | **DELETE** /v1/commerce/redirects/{redirectId} | Delete a URL redirect |
| [**duplicateCommerceProduct()**](CommerceApi.md#duplicateCommerceProduct) | **POST** /v1/commerce/products/{productId}/duplicate | Duplicate a product |
| [**getCommerceCatalogSync()**](CommerceApi.md#getCommerceCatalogSync) | **GET** /v1/commerce/catalog-syncs/{syncId} | Get a catalog sync |
| [**getCommerceCollection()**](CommerceApi.md#getCommerceCollection) | **GET** /v1/commerce/collections/{collectionId} | Get a collection |
| [**getCommerceDiscount()**](CommerceApi.md#getCommerceDiscount) | **GET** /v1/commerce/discounts/{discountId} | Get a discount |
| [**getCommerceMenu()**](CommerceApi.md#getCommerceMenu) | **GET** /v1/commerce/menus/{menuId} | Get a navigation menu |
| [**getCommerceMetaobject()**](CommerceApi.md#getCommerceMetaobject) | **GET** /v1/commerce/metaobjects/{metaobjectId} | Get a metaobject |
| [**getCommercePage()**](CommerceApi.md#getCommercePage) | **GET** /v1/commerce/pages/{pageId} | Get a page |
| [**getCommerceProduct()**](CommerceApi.md#getCommerceProduct) | **GET** /v1/commerce/products/{productId} | Get a product |
| [**getCommerceStore()**](CommerceApi.md#getCommerceStore) | **GET** /v1/commerce/store | Get a store |
| [**listCommerceCatalogSyncs()**](CommerceApi.md#listCommerceCatalogSyncs) | **GET** /v1/commerce/catalog-syncs | List catalog syncs |
| [**listCommerceChannels()**](CommerceApi.md#listCommerceChannels) | **GET** /v1/commerce/channels | List sales channels |
| [**listCommerceCollectionMetafields()**](CommerceApi.md#listCommerceCollectionMetafields) | **GET** /v1/commerce/collections/{collectionId}/metafields | List collection metafields |
| [**listCommerceCollections()**](CommerceApi.md#listCommerceCollections) | **GET** /v1/commerce/collections | List collections |
| [**listCommerceDiscounts()**](CommerceApi.md#listCommerceDiscounts) | **GET** /v1/commerce/discounts | List discounts |
| [**listCommerceInventory()**](CommerceApi.md#listCommerceInventory) | **GET** /v1/commerce/inventory | Get a product&#39;s stock |
| [**listCommerceLocations()**](CommerceApi.md#listCommerceLocations) | **GET** /v1/commerce/locations | List locations |
| [**listCommerceMarkets()**](CommerceApi.md#listCommerceMarkets) | **GET** /v1/commerce/markets | List markets |
| [**listCommerceMenus()**](CommerceApi.md#listCommerceMenus) | **GET** /v1/commerce/menus | List navigation menus |
| [**listCommerceMetaobjectDefinitions()**](CommerceApi.md#listCommerceMetaobjectDefinitions) | **GET** /v1/commerce/metaobject-definitions | List metaobject definitions |
| [**listCommerceMetaobjects()**](CommerceApi.md#listCommerceMetaobjects) | **GET** /v1/commerce/metaobjects | List metaobjects of a type |
| [**listCommercePages()**](CommerceApi.md#listCommercePages) | **GET** /v1/commerce/pages | List pages |
| [**listCommercePriceLists()**](CommerceApi.md#listCommercePriceLists) | **GET** /v1/commerce/price-lists | List price lists |
| [**listCommerceProductMetafields()**](CommerceApi.md#listCommerceProductMetafields) | **GET** /v1/commerce/products/{productId}/metafields | List product metafields |
| [**listCommerceProducts()**](CommerceApi.md#listCommerceProducts) | **GET** /v1/commerce/products | List products |
| [**listCommerceRedirects()**](CommerceApi.md#listCommerceRedirects) | **GET** /v1/commerce/redirects | List URL redirects |
| [**removeCommerceProductImages()**](CommerceApi.md#removeCommerceProductImages) | **DELETE** /v1/commerce/products/{productId}/images | Remove images |
| [**reorderCommerceCollectionProducts()**](CommerceApi.md#reorderCommerceCollectionProducts) | **POST** /v1/commerce/collections/{collectionId}/reorder | Reorder products in a collection |
| [**reorderCommerceProductImages()**](CommerceApi.md#reorderCommerceProductImages) | **POST** /v1/commerce/products/{productId}/images/reorder | Reorder images |
| [**runCommerceCatalogSync()**](CommerceApi.md#runCommerceCatalogSync) | **POST** /v1/commerce/catalog-syncs/{syncId}/run | Run a catalog sync now |
| [**setCommerceCollectionMetafields()**](CommerceApi.md#setCommerceCollectionMetafields) | **PUT** /v1/commerce/collections/{collectionId}/metafields | Set collection metafields |
| [**setCommerceDiscountActive()**](CommerceApi.md#setCommerceDiscountActive) | **POST** /v1/commerce/discounts/{discountId}/state | Activate or deactivate a discount |
| [**setCommercePriceListPrices()**](CommerceApi.md#setCommercePriceListPrices) | **PUT** /v1/commerce/price-lists/{priceListId}/prices | Set fixed prices |
| [**setCommerceProductMetafields()**](CommerceApi.md#setCommerceProductMetafields) | **PUT** /v1/commerce/products/{productId}/metafields | Set product metafields |
| [**updateCommerceCollection()**](CommerceApi.md#updateCommerceCollection) | **PATCH** /v1/commerce/collections/{collectionId} | Update a collection |
| [**updateCommerceDiscount()**](CommerceApi.md#updateCommerceDiscount) | **PATCH** /v1/commerce/discounts/{discountId} | Update a discount |
| [**updateCommerceMenu()**](CommerceApi.md#updateCommerceMenu) | **PUT** /v1/commerce/menus/{menuId} | Replace a navigation menu |
| [**updateCommerceMetaobject()**](CommerceApi.md#updateCommerceMetaobject) | **PATCH** /v1/commerce/metaobjects/{metaobjectId} | Update a metaobject |
| [**updateCommercePage()**](CommerceApi.md#updateCommercePage) | **PATCH** /v1/commerce/pages/{pageId} | Update a page |
| [**updateCommerceProduct()**](CommerceApi.md#updateCommerceProduct) | **PATCH** /v1/commerce/products/{productId} | Update a product |
| [**updateCommerceProductPrices()**](CommerceApi.md#updateCommerceProductPrices) | **POST** /v1/commerce/products/{productId}/price | Update variant prices |
| [**updateCommerceRedirect()**](CommerceApi.md#updateCommerceRedirect) | **PATCH** /v1/commerce/redirects/{redirectId} | Update a URL redirect |
| [**upsertCommerceMarketingActivity()**](CommerceApi.md#upsertCommerceMarketingActivity) | **PUT** /v1/commerce/marketing-activities | Record a marketing activity |


## `addCommerceDiscountCodes()`

```php
addCommerceDiscountCodes($discount_id, $add_commerce_discount_codes_request): \Zernio\Model\ReorderCommerceProductImages200Response
```

Add codes to a discount

Adds up to 250 more codes to a code discount, for example one per influencer. The platform adds them in the background. Needs discounts.codes, which WooCommerce stores do not have.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string | Platform-native id.
$add_commerce_discount_codes_request = new \Zernio\Model\AddCommerceDiscountCodesRequest(); // \Zernio\Model\AddCommerceDiscountCodesRequest

try {
    $result = $apiInstance->addCommerceDiscountCodes($discount_id, $add_commerce_discount_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->addCommerceDiscountCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| Platform-native id. | |
| **add_commerce_discount_codes_request** | [**\Zernio\Model\AddCommerceDiscountCodesRequest**](../Model/AddCommerceDiscountCodesRequest.md)|  | |

### Return type

[**\Zernio\Model\ReorderCommerceProductImages200Response**](../Model/ReorderCommerceProductImages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addCommerceMarketingEngagement()`

```php
addCommerceMarketingEngagement($remote_id, $add_commerce_marketing_engagement_request): \Zernio\Model\AddCommerceMarketingEngagement201Response
```

Report daily engagement

Reports one day's numbers for an activity (UTC day), shown next to it in the store's Marketing section.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remote_id = 'remote_id_example'; // string | The remoteId given when recording it.
$add_commerce_marketing_engagement_request = new \Zernio\Model\AddCommerceMarketingEngagementRequest(); // \Zernio\Model\AddCommerceMarketingEngagementRequest

try {
    $result = $apiInstance->addCommerceMarketingEngagement($remote_id, $add_commerce_marketing_engagement_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->addCommerceMarketingEngagement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remote_id** | **string**| The remoteId given when recording it. | |
| **add_commerce_marketing_engagement_request** | [**\Zernio\Model\AddCommerceMarketingEngagementRequest**](../Model/AddCommerceMarketingEngagementRequest.md)|  | |

### Return type

[**\Zernio\Model\AddCommerceMarketingEngagement201Response**](../Model/AddCommerceMarketingEngagement201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addCommerceProductImages()`

```php
addCommerceProductImages($product_id, $add_commerce_product_images_request): \Zernio\Model\CreateCommerceProduct201Response
```

Add images

Adds images from public URLs. The platform fetches them, so they can appear on the product a few seconds after the call returns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$add_commerce_product_images_request = new \Zernio\Model\AddCommerceProductImagesRequest(); // \Zernio\Model\AddCommerceProductImagesRequest

try {
    $result = $apiInstance->addCommerceProductImages($product_id, $add_commerce_product_images_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->addCommerceProductImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **add_commerce_product_images_request** | [**\Zernio\Model\AddCommerceProductImagesRequest**](../Model/AddCommerceProductImagesRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCommerceCollectionChannels()`

```php
changeCommerceCollectionChannels($collection_id, $change_commerce_product_channels_request): \Zernio\Model\ChangeCommerceCollectionChannels200Response
```

Publish or unpublish a collection

Publishes to and/or unpublishes from sales channels (the online store, Shop, POS and others). List channels with GET /v1/commerce/channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native id.
$change_commerce_product_channels_request = new \Zernio\Model\ChangeCommerceProductChannelsRequest(); // \Zernio\Model\ChangeCommerceProductChannelsRequest

try {
    $result = $apiInstance->changeCommerceCollectionChannels($collection_id, $change_commerce_product_channels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->changeCommerceCollectionChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native id. | |
| **change_commerce_product_channels_request** | [**\Zernio\Model\ChangeCommerceProductChannelsRequest**](../Model/ChangeCommerceProductChannelsRequest.md)|  | |

### Return type

[**\Zernio\Model\ChangeCommerceCollectionChannels200Response**](../Model/ChangeCommerceCollectionChannels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCommerceCollectionProducts()`

```php
changeCommerceCollectionProducts($collection_id, $change_commerce_collection_products_request): \Zernio\Model\ChangeCommerceCollectionProducts200Response
```

Add or remove products in a collection

Adds and/or removes hand-picked products. Products a collection includes through its own rules are not affected. `pending` is true when the platform finishes the change in the background; the product count then catches up a few seconds later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native collection id.
$change_commerce_collection_products_request = new \Zernio\Model\ChangeCommerceCollectionProductsRequest(); // \Zernio\Model\ChangeCommerceCollectionProductsRequest

try {
    $result = $apiInstance->changeCommerceCollectionProducts($collection_id, $change_commerce_collection_products_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->changeCommerceCollectionProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native collection id. | |
| **change_commerce_collection_products_request** | [**\Zernio\Model\ChangeCommerceCollectionProductsRequest**](../Model/ChangeCommerceCollectionProductsRequest.md)|  | |

### Return type

[**\Zernio\Model\ChangeCommerceCollectionProducts200Response**](../Model/ChangeCommerceCollectionProducts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCommerceInventory()`

```php
changeCommerceInventory($product_id, $change_commerce_inventory_request): \Zernio\Model\ListCommerceInventory200Response
```

Set or adjust stock

`set` makes `quantity` the new available count; `adjust` adds `quantity` (negative to subtract). The variant must be stocked at the location. Answers the product's stock after the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$change_commerce_inventory_request = new \Zernio\Model\ChangeCommerceInventoryRequest(); // \Zernio\Model\ChangeCommerceInventoryRequest

try {
    $result = $apiInstance->changeCommerceInventory($product_id, $change_commerce_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->changeCommerceInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **change_commerce_inventory_request** | [**\Zernio\Model\ChangeCommerceInventoryRequest**](../Model/ChangeCommerceInventoryRequest.md)|  | |

### Return type

[**\Zernio\Model\ListCommerceInventory200Response**](../Model/ListCommerceInventory200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCommerceProductChannels()`

```php
changeCommerceProductChannels($product_id, $change_commerce_product_channels_request): \Zernio\Model\ChangeCommerceProductChannels200Response
```

Publish or unpublish a product

Publishes to and/or unpublishes from sales channels (the online store, Shop, POS and others). List channels with GET /v1/commerce/channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$change_commerce_product_channels_request = new \Zernio\Model\ChangeCommerceProductChannelsRequest(); // \Zernio\Model\ChangeCommerceProductChannelsRequest

try {
    $result = $apiInstance->changeCommerceProductChannels($product_id, $change_commerce_product_channels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->changeCommerceProductChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **change_commerce_product_channels_request** | [**\Zernio\Model\ChangeCommerceProductChannelsRequest**](../Model/ChangeCommerceProductChannelsRequest.md)|  | |

### Return type

[**\Zernio\Model\ChangeCommerceProductChannels200Response**](../Model/ChangeCommerceProductChannels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCommerceProductState()`

```php
changeCommerceProductState($change_commerce_product_state_request): \Zernio\Model\ChangeCommerceProductState200Response
```

Activate, deactivate, archive or delete products

Applies one action to up to 50 products and reports each product's outcome, so one failure does not abort the rest. On Shopify, `deactivate` sets the product to draft and `delete` is permanent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_commerce_product_state_request = new \Zernio\Model\ChangeCommerceProductStateRequest(); // \Zernio\Model\ChangeCommerceProductStateRequest

try {
    $result = $apiInstance->changeCommerceProductState($change_commerce_product_state_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->changeCommerceProductState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_commerce_product_state_request** | [**\Zernio\Model\ChangeCommerceProductStateRequest**](../Model/ChangeCommerceProductStateRequest.md)|  | |

### Return type

[**\Zernio\Model\ChangeCommerceProductState200Response**](../Model/ChangeCommerceProductState200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCommerceProductTags()`

```php
changeCommerceProductTags($change_commerce_product_tags_request): \Zernio\Model\ChangeCommerceProductTags200Response
```

Add or remove tags in bulk

Adds and/or removes tags on up to 50 products and reports each product's outcome.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_commerce_product_tags_request = new \Zernio\Model\ChangeCommerceProductTagsRequest(); // \Zernio\Model\ChangeCommerceProductTagsRequest

try {
    $result = $apiInstance->changeCommerceProductTags($change_commerce_product_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->changeCommerceProductTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_commerce_product_tags_request** | [**\Zernio\Model\ChangeCommerceProductTagsRequest**](../Model/ChangeCommerceProductTagsRequest.md)|  | |

### Return type

[**\Zernio\Model\ChangeCommerceProductTags200Response**](../Model/ChangeCommerceProductTags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceCatalogSync()`

```php
createCommerceCatalogSync($create_commerce_catalog_sync_request): \Zernio\Model\CreateCommerceCatalogSync202Response
```

Sync a store into a Meta catalog

Keeps a Meta product catalog in sync with the store, for catalog ads (`goal: catalog_sales`) and Shops. The first full run starts right away in the background; `runStatus` and the item counts report its outcome. Every active product variant that is published to the online store and has an image becomes a catalog item, grouped by product (`item_group_id`). After that, product changes on the store update the catalog within minutes, and a daily full run removes items for products or variants the store no longer has. Items are namespaced to the store, so a catalog can take several stores and a run never touches items it did not create.  `catalogAccountId` is a connected facebook, instagram or metaads account whose Meta login can manage the catalog (the catalog_management permission); find catalogs with `GET /v1/ads/catalogs`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_catalog_sync_request = new \Zernio\Model\CreateCommerceCatalogSyncRequest(); // \Zernio\Model\CreateCommerceCatalogSyncRequest

try {
    $result = $apiInstance->createCommerceCatalogSync($create_commerce_catalog_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceCatalogSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_catalog_sync_request** | [**\Zernio\Model\CreateCommerceCatalogSyncRequest**](../Model/CreateCommerceCatalogSyncRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceCatalogSync202Response**](../Model/CreateCommerceCatalogSync202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceCollection()`

```php
createCommerceCollection($create_commerce_collection_request): \Zernio\Model\CreateCommerceCollection201Response
```

Create a collection

Creates a collection, optionally with hand-picked products. On Shopify the collection starts unpublished from the online store; publish it from the Shopify admin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_collection_request = new \Zernio\Model\CreateCommerceCollectionRequest(); // \Zernio\Model\CreateCommerceCollectionRequest

try {
    $result = $apiInstance->createCommerceCollection($create_commerce_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_collection_request** | [**\Zernio\Model\CreateCommerceCollectionRequest**](../Model/CreateCommerceCollectionRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceCollection201Response**](../Model/CreateCommerceCollection201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceDiscount()`

```php
createCommerceDiscount($create_commerce_discount_request): \Zernio\Model\CreateCommerceDiscount201Response
```

Create a discount

Creates a code discount (buyers enter a code) or an automatic one (applied at checkout), as a percentage, a fixed amount or free shipping. It applies to every product unless productIds or collectionIds narrow it, and to every buyer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_discount_request = new \Zernio\Model\CreateCommerceDiscountRequest(); // \Zernio\Model\CreateCommerceDiscountRequest

try {
    $result = $apiInstance->createCommerceDiscount($create_commerce_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_discount_request** | [**\Zernio\Model\CreateCommerceDiscountRequest**](../Model/CreateCommerceDiscountRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceDiscount201Response**](../Model/CreateCommerceDiscount201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceMenu()`

```php
createCommerceMenu($create_commerce_menu_request): \Zernio\Model\CreateCommerceMenu201Response
```

Create a navigation menu

Creates a navigation menu from `title`, `handle` and up to 100 `items`, and returns it with status 201. Shopify only. Needs navigation.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_menu_request = new \Zernio\Model\CreateCommerceMenuRequest(); // \Zernio\Model\CreateCommerceMenuRequest

try {
    $result = $apiInstance->createCommerceMenu($create_commerce_menu_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_menu_request** | [**\Zernio\Model\CreateCommerceMenuRequest**](../Model/CreateCommerceMenuRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceMenu201Response**](../Model/CreateCommerceMenu201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceMetaobject()`

```php
createCommerceMetaobject($create_commerce_metaobject_request): \Zernio\Model\CreateCommerceMetaobject201Response
```

Create a metaobject

Creates a metaobject of `type` with its `fields` (key and string value, up to 100) and an optional `handle`, and returns it with status 201. Shopify only. Needs metaobjects.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_metaobject_request = new \Zernio\Model\CreateCommerceMetaobjectRequest(); // \Zernio\Model\CreateCommerceMetaobjectRequest

try {
    $result = $apiInstance->createCommerceMetaobject($create_commerce_metaobject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceMetaobject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_metaobject_request** | [**\Zernio\Model\CreateCommerceMetaobjectRequest**](../Model/CreateCommerceMetaobjectRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceMetaobject201Response**](../Model/CreateCommerceMetaobject201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommercePage()`

```php
createCommercePage($create_commerce_page_request): \Zernio\Model\CreateCommercePage201Response
```

Create a page

Creates a content page from `title`, optional `handle`, `bodyHtml` and `isPublished`, and returns it with status 201. Needs pages.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_page_request = new \Zernio\Model\CreateCommercePageRequest(); // \Zernio\Model\CreateCommercePageRequest

try {
    $result = $apiInstance->createCommercePage($create_commerce_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommercePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_page_request** | [**\Zernio\Model\CreateCommercePageRequest**](../Model/CreateCommercePageRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommercePage201Response**](../Model/CreateCommercePage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceProduct()`

```php
createCommerceProduct($create_commerce_product_request): \Zernio\Model\CreateCommerceProduct201Response
```

Create a product

Creates a product with its options and variants. `status` defaults to `draft`: no platform offers a sandbox for product writes, so nothing goes on sale unless you ask for `active`. A product without `options` has exactly one variant. Images are fetched by the platform from the given URLs and may appear on the product a few seconds later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_product_request = new \Zernio\Model\CreateCommerceProductRequest(); // \Zernio\Model\CreateCommerceProductRequest

try {
    $result = $apiInstance->createCommerceProduct($create_commerce_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_product_request** | [**\Zernio\Model\CreateCommerceProductRequest**](../Model/CreateCommerceProductRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceProductOptions()`

```php
createCommerceProductOptions($product_id, $create_commerce_product_options_request): \Zernio\Model\CreateCommerceProduct201Response
```

Add options

Adds option axes (e.g. Size, Color) and their values. With createVariants true the platform creates a variant for every new combination; otherwise existing variants take the first value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$create_commerce_product_options_request = new \Zernio\Model\CreateCommerceProductOptionsRequest(); // \Zernio\Model\CreateCommerceProductOptionsRequest

try {
    $result = $apiInstance->createCommerceProductOptions($product_id, $create_commerce_product_options_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceProductOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **create_commerce_product_options_request** | [**\Zernio\Model\CreateCommerceProductOptionsRequest**](../Model/CreateCommerceProductOptionsRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceProductVariants()`

```php
createCommerceProductVariants($product_id, $create_commerce_product_variants_request): \Zernio\Model\CreateCommerceProduct201Response
```

Add variants

Adds variants to a product. Each variant names a value for every product option (create options first with POST .../options). A product's placeholder default variant is replaced when real ones arrive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$create_commerce_product_variants_request = new \Zernio\Model\CreateCommerceProductVariantsRequest(); // \Zernio\Model\CreateCommerceProductVariantsRequest

try {
    $result = $apiInstance->createCommerceProductVariants($product_id, $create_commerce_product_variants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceProductVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **create_commerce_product_variants_request** | [**\Zernio\Model\CreateCommerceProductVariantsRequest**](../Model/CreateCommerceProductVariantsRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommerceRedirect()`

```php
createCommerceRedirect($create_commerce_redirect_request): \Zernio\Model\CreateCommerceRedirect201Response
```

Create a URL redirect

Creates a redirect from `path` (starting with `/`) to `target` (a path or a full URL) and returns it with status 201. Shopify only. Needs navigation.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commerce_redirect_request = new \Zernio\Model\CreateCommerceRedirectRequest(); // \Zernio\Model\CreateCommerceRedirectRequest

try {
    $result = $apiInstance->createCommerceRedirect($create_commerce_redirect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->createCommerceRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commerce_redirect_request** | [**\Zernio\Model\CreateCommerceRedirectRequest**](../Model/CreateCommerceRedirectRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceRedirect201Response**](../Model/CreateCommerceRedirect201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceCatalogSync()`

```php
deleteCommerceCatalogSync($sync_id): \Zernio\Model\DeleteCommerceCatalogSync200Response
```

Stop a catalog sync

Stops syncing. Items already in the catalog stay there.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 'sync_id_example'; // string

try {
    $result = $apiInstance->deleteCommerceCatalogSync($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceCatalogSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteCommerceCatalogSync200Response**](../Model/DeleteCommerceCatalogSync200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceCollection()`

```php
deleteCommerceCollection($collection_id, $account_id): \Zernio\Model\DeleteCommerceCollection200Response
```

Delete a collection

Deletes the collection. Its products are not affected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native collection id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->deleteCommerceCollection($collection_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native collection id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\DeleteCommerceCollection200Response**](../Model/DeleteCommerceCollection200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceCollectionMetafields()`

```php
deleteCommerceCollectionMetafields($collection_id, $account_id, $keys): \Zernio\Model\DeleteCommerceProductMetafields200Response
```

Delete collection metafields

Deletes the collection metafields named in `keys` (comma-separated `namespace.key`, up to 25). Needs collections.metafields: WooCommerce answers 400 platform_not_supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$keys = 'keys_example'; // string | Comma-separated namespace.key pairs.

try {
    $result = $apiInstance->deleteCommerceCollectionMetafields($collection_id, $account_id, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceCollectionMetafields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **keys** | **string**| Comma-separated namespace.key pairs. | |

### Return type

[**\Zernio\Model\DeleteCommerceProductMetafields200Response**](../Model/DeleteCommerceProductMetafields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceDiscount()`

```php
deleteCommerceDiscount($discount_id, $account_id): \Zernio\Model\DeleteCommerceDiscount200Response
```

Delete a discount

Deletes the discount; its codes stop working at checkout. This cannot be undone. Needs discounts.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->deleteCommerceDiscount($discount_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\DeleteCommerceDiscount200Response**](../Model/DeleteCommerceDiscount200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceMarketingActivity()`

```php
deleteCommerceMarketingActivity($remote_id, $account_id): \Zernio\Model\DeleteCommerceMarketingActivity200Response
```

Delete a marketing activity

Deletes the marketing activity you created with PUT /v1/commerce/marketing-activities, identified by the `remoteId` you gave it. Shopify only. Needs marketing.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remote_id = 'remote_id_example'; // string | The remoteId given when recording it.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->deleteCommerceMarketingActivity($remote_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceMarketingActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remote_id** | **string**| The remoteId given when recording it. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\DeleteCommerceMarketingActivity200Response**](../Model/DeleteCommerceMarketingActivity200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceMenu()`

```php
deleteCommerceMenu($menu_id, $account_id): \Zernio\Model\DeleteCommerceMenu200Response
```

Delete a navigation menu

Deletes the navigation menu. Shopify only. Needs navigation.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 'menu_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->deleteCommerceMenu($menu_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **menu_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\DeleteCommerceMenu200Response**](../Model/DeleteCommerceMenu200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceMetaobject()`

```php
deleteCommerceMetaobject($metaobject_id, $account_id): \Zernio\Model\DeleteCommerceMetaobject200Response
```

Delete a metaobject

Deletes the metaobject. References to it from metafields stop resolving. Shopify only. Needs metaobjects.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metaobject_id = 'metaobject_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->deleteCommerceMetaobject($metaobject_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceMetaobject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **metaobject_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\DeleteCommerceMetaobject200Response**](../Model/DeleteCommerceMetaobject200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommercePage()`

```php
deleteCommercePage($page_id, $account_id): \Zernio\Model\DeleteCommercePage200Response
```

Delete a page

Deletes the page from the store. This cannot be undone. Needs pages.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->deleteCommercePage($page_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommercePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\DeleteCommercePage200Response**](../Model/DeleteCommercePage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommercePriceListPrices()`

```php
deleteCommercePriceListPrices($price_list_id, $account_id, $variant_ids): \Zernio\Model\DeleteCommercePriceListPrices200Response
```

Remove fixed prices

The variants go back to the market's converted price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 'price_list_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$variant_ids = 'variant_ids_example'; // string | Comma-separated ids.

try {
    $result = $apiInstance->deleteCommercePriceListPrices($price_list_id, $account_id, $variant_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommercePriceListPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **variant_ids** | **string**| Comma-separated ids. | |

### Return type

[**\Zernio\Model\DeleteCommercePriceListPrices200Response**](../Model/DeleteCommercePriceListPrices200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceProductMetafields()`

```php
deleteCommerceProductMetafields($product_id, $account_id, $keys): \Zernio\Model\DeleteCommerceProductMetafields200Response
```

Delete product metafields

Deletes the product custom fields named in `keys` (comma-separated `namespace.key`, up to 25) and returns how many were deleted. Needs metafields.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$keys = 'keys_example'; // string | Comma-separated namespace.key pairs.

try {
    $result = $apiInstance->deleteCommerceProductMetafields($product_id, $account_id, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceProductMetafields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **keys** | **string**| Comma-separated namespace.key pairs. | |

### Return type

[**\Zernio\Model\DeleteCommerceProductMetafields200Response**](../Model/DeleteCommerceProductMetafields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceProductOptions()`

```php
deleteCommerceProductOptions($product_id, $account_id, $names): \Zernio\Model\CreateCommerceProduct201Response
```

Delete options

Deletes options by name, with the variants that depended on them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$names = 'names_example'; // string | Comma-separated option names.

try {
    $result = $apiInstance->deleteCommerceProductOptions($product_id, $account_id, $names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceProductOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **names** | **string**| Comma-separated option names. | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceProductVariants()`

```php
deleteCommerceProductVariants($product_id, $account_id, $variant_ids): \Zernio\Model\CreateCommerceProduct201Response
```

Delete variants

Deletes the variants in `variantIds` (comma-separated, up to 100) and returns the updated product. A product keeps at least one variant, so deleting every variant is refused by the platform. Needs products.variants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$variant_ids = 'variant_ids_example'; // string | Comma-separated ids.

try {
    $result = $apiInstance->deleteCommerceProductVariants($product_id, $account_id, $variant_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceProductVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **variant_ids** | **string**| Comma-separated ids. | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommerceRedirect()`

```php
deleteCommerceRedirect($redirect_id, $account_id): \Zernio\Model\DeleteCommerceRedirect200Response
```

Delete a URL redirect

Deletes the redirect; the old path answers 404 again. Shopify only. Needs navigation.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirect_id = 'redirect_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->deleteCommerceRedirect($redirect_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->deleteCommerceRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\DeleteCommerceRedirect200Response**](../Model/DeleteCommerceRedirect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateCommerceProduct()`

```php
duplicateCommerceProduct($product_id, $duplicate_commerce_product_request): \Zernio\Model\CreateCommerceProduct201Response
```

Duplicate a product

Copies a product with its options, variants and (by default) images. The copy starts as a draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$duplicate_commerce_product_request = new \Zernio\Model\DuplicateCommerceProductRequest(); // \Zernio\Model\DuplicateCommerceProductRequest

try {
    $result = $apiInstance->duplicateCommerceProduct($product_id, $duplicate_commerce_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->duplicateCommerceProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **duplicate_commerce_product_request** | [**\Zernio\Model\DuplicateCommerceProductRequest**](../Model/DuplicateCommerceProductRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceCatalogSync()`

```php
getCommerceCatalogSync($sync_id): \Zernio\Model\CreateCommerceCatalogSync202Response
```

Get a catalog sync

One catalog sync with the status and counts of its last run (`itemsSent`, `itemsSkipped`, `itemsDeleted`, `lastError`). Poll it after POST /v1/commerce/catalog-syncs/{syncId}/run to follow a run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 'sync_id_example'; // string

try {
    $result = $apiInstance->getCommerceCatalogSync($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommerceCatalogSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateCommerceCatalogSync202Response**](../Model/CreateCommerceCatalogSync202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceCollection()`

```php
getCommerceCollection($collection_id, $account_id): \Zernio\Model\CreateCommerceCollection201Response
```

Get a collection

One collection (a category on WooCommerce) with its image, sort order and product count. List its products with GET /v1/commerce/products?collectionId=. Needs collections.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native collection id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->getCommerceCollection($collection_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommerceCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native collection id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\CreateCommerceCollection201Response**](../Model/CreateCommerceCollection201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceDiscount()`

```php
getCommerceDiscount($discount_id, $account_id): \Zernio\Model\CreateCommerceDiscount201Response
```

Get a discount

One discount with its value, targets, minimum, usage and schedule. Needs discounts.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->getCommerceDiscount($discount_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommerceDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\CreateCommerceDiscount201Response**](../Model/CreateCommerceDiscount201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceMenu()`

```php
getCommerceMenu($menu_id, $account_id): \Zernio\Model\CreateCommerceMenu201Response
```

Get a navigation menu

One navigation menu with its nested items. Shopify only. Needs navigation.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 'menu_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->getCommerceMenu($menu_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommerceMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **menu_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\CreateCommerceMenu201Response**](../Model/CreateCommerceMenu201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceMetaobject()`

```php
getCommerceMetaobject($metaobject_id, $account_id): \Zernio\Model\CreateCommerceMetaobject201Response
```

Get a metaobject

One metaobject with its fields. Shopify only. Needs metaobjects.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metaobject_id = 'metaobject_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->getCommerceMetaobject($metaobject_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommerceMetaobject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **metaobject_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\CreateCommerceMetaobject201Response**](../Model/CreateCommerceMetaobject201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercePage()`

```php
getCommercePage($page_id, $account_id): \Zernio\Model\CreateCommercePage201Response
```

Get a page

One content page with its body. Needs pages.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->getCommercePage($page_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommercePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\CreateCommercePage201Response**](../Model/CreateCommercePage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceProduct()`

```php
getCommerceProduct($product_id, $account_id): \Zernio\Model\CreateCommerceProduct201Response
```

Get a product

One product with all its variants, options and images. Needs products.read. 404 product_not_found when the id does not exist in the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native product id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->getCommerceProduct($product_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommerceProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native product id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceStore()`

```php
getCommerceStore($account_id): \Zernio\Model\GetCommerceStore200Response
```

Get a store

Returns the connected store with its currency, country and the `capabilities` it supports, so an integration can tell up front which Commerce operations the store serves. On Shopify, stock, sales channels, discounts, navigation, metaobjects, markets, marketing and image removal need permissions the store owner approves separately: `missingCapabilities` lists what is not granted yet and `grantPermissionsUrl` is the page where the owner approves it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->getCommerceStore($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->getCommerceStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\GetCommerceStore200Response**](../Model/GetCommerceStore200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceCatalogSyncs()`

```php
listCommerceCatalogSyncs($account_id): \Zernio\Model\ListCommerceCatalogSyncs200Response
```

List catalog syncs

The ad-platform catalogs this store is kept in sync with.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceCatalogSyncs($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceCatalogSyncs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceCatalogSyncs200Response**](../Model/ListCommerceCatalogSyncs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceChannels()`

```php
listCommerceChannels($account_id): \Zernio\Model\ListCommerceChannels200Response
```

List sales channels

Where products and collections can be published: the online store, Shop, POS and installed channel apps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceChannels($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceChannels200Response**](../Model/ListCommerceChannels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceCollectionMetafields()`

```php
listCommerceCollectionMetafields($collection_id, $account_id): \Zernio\Model\ListCommerceProductMetafields200Response
```

List collection metafields

The collection's metafields as namespace, key, type and value. Needs collections.metafields: WooCommerce keeps custom fields on products only and answers 400 platform_not_supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceCollectionMetafields($collection_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceCollectionMetafields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceProductMetafields200Response**](../Model/ListCommerceProductMetafields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceCollections()`

```php
listCommerceCollections($account_id, $limit, $cursor, $query): \Zernio\Model\ListCommerceCollections200Response
```

List collections

Lists the store's product collections. Cursor-paginated like products. List a collection's products with `GET /v1/commerce/products?collectionId=...`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$limit = 20; // int
$cursor = 'cursor_example'; // string
$query = 'query_example'; // string | Platform collection search syntax (Shopify: title, handle, collection_type, ...).

try {
    $result = $apiInstance->listCommerceCollections($account_id, $limit, $cursor, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |
| **query** | **string**| Platform collection search syntax (Shopify: title, handle, collection_type, ...). | [optional] |

### Return type

[**\Zernio\Model\ListCommerceCollections200Response**](../Model/ListCommerceCollections200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceDiscounts()`

```php
listCommerceDiscounts($account_id, $limit, $cursor, $query): \Zernio\Model\ListCommerceDiscounts200Response
```

List discounts

The store's discounts (Shopify code and automatic discounts, WooCommerce coupons), cursor-paginated with `limit`, `cursor` and an optional `query`. Each discount lists its first 10 codes; `codeCount` has the total. Needs discounts.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$limit = 20; // int
$cursor = 'cursor_example'; // string
$query = 'query_example'; // string | Platform search syntax, passed through.

try {
    $result = $apiInstance->listCommerceDiscounts($account_id, $limit, $cursor, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |
| **query** | **string**| Platform search syntax, passed through. | [optional] |

### Return type

[**\Zernio\Model\ListCommerceDiscounts200Response**](../Model/ListCommerceDiscounts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceInventory()`

```php
listCommerceInventory($account_id, $product_id): \Zernio\Model\ListCommerceInventory200Response
```

Get a product's stock

Stock per variant and location: available, on hand, committed to orders and incoming.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$product_id = 'product_id_example'; // string

try {
    $result = $apiInstance->listCommerceInventory($account_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **product_id** | **string**|  | |

### Return type

[**\Zernio\Model\ListCommerceInventory200Response**](../Model/ListCommerceInventory200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceLocations()`

```php
listCommerceLocations($account_id): \Zernio\Model\ListCommerceLocations200Response
```

List locations

The store's stock locations (warehouses, shops).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceLocations($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceLocations200Response**](../Model/ListCommerceLocations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceMarkets()`

```php
listCommerceMarkets($account_id): \Zernio\Model\ListCommerceMarkets200Response
```

List markets

The regions the store sells to, each with its own currency and pricing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceMarkets($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceMarkets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceMarkets200Response**](../Model/ListCommerceMarkets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceMenus()`

```php
listCommerceMenus($account_id): \Zernio\Model\ListCommerceMenus200Response
```

List navigation menus

The store's navigation menus with their items. Shopify only. Needs navigation.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceMenus($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceMenus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceMenus200Response**](../Model/ListCommerceMenus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceMetaobjectDefinitions()`

```php
listCommerceMetaobjectDefinitions($account_id): \Zernio\Model\ListCommerceMetaobjectDefinitions200Response
```

List metaobject definitions

The custom content types defined on the store and their fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceMetaobjectDefinitions($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceMetaobjectDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceMetaobjectDefinitions200Response**](../Model/ListCommerceMetaobjectDefinitions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceMetaobjects()`

```php
listCommerceMetaobjects($account_id, $type, $limit, $cursor): \Zernio\Model\ListCommerceMetaobjects200Response
```

List metaobjects of a type

The metaobjects of one `type` (a definition handle from GET /v1/commerce/metaobject-definitions), cursor-paginated with `limit` and `cursor`. Shopify only. Needs metaobjects.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$type = 'type_example'; // string | Definition type from GET /v1/commerce/metaobject-definitions.
$limit = 20; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->listCommerceMetaobjects($account_id, $type, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceMetaobjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **type** | **string**| Definition type from GET /v1/commerce/metaobject-definitions. | |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListCommerceMetaobjects200Response**](../Model/ListCommerceMetaobjects200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommercePages()`

```php
listCommercePages($account_id, $limit, $cursor, $query): \Zernio\Model\ListCommercePages200Response
```

List pages

The store's content pages (Shopify online store pages, WordPress pages), cursor-paginated with `limit`, `cursor` and an optional `query`. Needs pages.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$limit = 20; // int
$cursor = 'cursor_example'; // string
$query = 'query_example'; // string | Platform search syntax, passed through.

try {
    $result = $apiInstance->listCommercePages($account_id, $limit, $cursor, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommercePages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |
| **query** | **string**| Platform search syntax, passed through. | [optional] |

### Return type

[**\Zernio\Model\ListCommercePages200Response**](../Model/ListCommercePages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommercePriceLists()`

```php
listCommercePriceLists($account_id): \Zernio\Model\ListCommercePriceLists200Response
```

List price lists

Price lists hold fixed prices per variant for a market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommercePriceLists($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommercePriceLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommercePriceLists200Response**](../Model/ListCommercePriceLists200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceProductMetafields()`

```php
listCommerceProductMetafields($product_id, $account_id): \Zernio\Model\ListCommerceProductMetafields200Response
```

List product metafields

The product's custom fields (metafields on Shopify, public meta on WooCommerce) as namespace, key, type and value. Needs metafields.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.

try {
    $result = $apiInstance->listCommerceProductMetafields($product_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceProductMetafields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |

### Return type

[**\Zernio\Model\ListCommerceProductMetafields200Response**](../Model/ListCommerceProductMetafields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceProducts()`

```php
listCommerceProducts($account_id, $limit, $cursor, $status, $query, $collection_id): \Zernio\Model\ListCommerceProducts200Response
```

List products

Lists the store's products with their variants, options and images. Cursor-paginated: pass `limit` (1-100, default 20) and the `cursor` from a previous response's `nextCursor`, which is null on the last page. Filter with `status` and/or `query` (the platform's product search syntax, passed through verbatim). A status the platform has no equivalent of returns an empty page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$limit = 20; // int
$cursor = 'cursor_example'; // string | Opaque cursor from a previous response. Omit for the first page.
$status = new \Zernio\Model\\Zernio\Model\CommerceProductStatus(); // \Zernio\Model\CommerceProductStatus
$query = 'query_example'; // string | Platform product search syntax (Shopify: title, vendor, product_type, tag, sku, handle, ...).
$collection_id = 'collection_id_example'; // string | Only products in this collection.

try {
    $result = $apiInstance->listCommerceProducts($account_id, $limit, $cursor, $status, $query, $collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**| Opaque cursor from a previous response. Omit for the first page. | [optional] |
| **status** | [**\Zernio\Model\CommerceProductStatus**](../Model/.md)|  | [optional] |
| **query** | **string**| Platform product search syntax (Shopify: title, vendor, product_type, tag, sku, handle, ...). | [optional] |
| **collection_id** | **string**| Only products in this collection. | [optional] |

### Return type

[**\Zernio\Model\ListCommerceProducts200Response**](../Model/ListCommerceProducts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommerceRedirects()`

```php
listCommerceRedirects($account_id, $limit, $cursor, $query): \Zernio\Model\ListCommerceRedirects200Response
```

List URL redirects

The store's URL redirects (old path to new target), cursor-paginated with `limit`, `cursor` and an optional `query` on the path. Shopify only. Needs navigation.read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$limit = 20; // int
$cursor = 'cursor_example'; // string
$query = 'query_example'; // string | Platform search syntax, passed through.

try {
    $result = $apiInstance->listCommerceRedirects($account_id, $limit, $cursor, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->listCommerceRedirects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |
| **query** | **string**| Platform search syntax, passed through. | [optional] |

### Return type

[**\Zernio\Model\ListCommerceRedirects200Response**](../Model/ListCommerceRedirects200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCommerceProductImages()`

```php
removeCommerceProductImages($product_id, $account_id, $image_ids): \Zernio\Model\CreateCommerceProduct201Response
```

Remove images

Removes images from the product by image id (the `id` on each image). The file stays in the store's media library. Needs the products.images_remove capability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$account_id = 'account_id_example'; // string | Connected store SocialAccount id.
$image_ids = 'image_ids_example'; // string | Comma-separated ids.

try {
    $result = $apiInstance->removeCommerceProductImages($product_id, $account_id, $image_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->removeCommerceProductImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **account_id** | **string**| Connected store SocialAccount id. | |
| **image_ids** | **string**| Comma-separated ids. | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reorderCommerceCollectionProducts()`

```php
reorderCommerceCollectionProducts($collection_id, $reorder_commerce_collection_products_request): \Zernio\Model\ReorderCommerceProductImages200Response
```

Reorder products in a collection

Moves products to new 0-based positions. Only for collections sorted `manual`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native id.
$reorder_commerce_collection_products_request = new \Zernio\Model\ReorderCommerceCollectionProductsRequest(); // \Zernio\Model\ReorderCommerceCollectionProductsRequest

try {
    $result = $apiInstance->reorderCommerceCollectionProducts($collection_id, $reorder_commerce_collection_products_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->reorderCommerceCollectionProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native id. | |
| **reorder_commerce_collection_products_request** | [**\Zernio\Model\ReorderCommerceCollectionProductsRequest**](../Model/ReorderCommerceCollectionProductsRequest.md)|  | |

### Return type

[**\Zernio\Model\ReorderCommerceProductImages200Response**](../Model/ReorderCommerceProductImages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reorderCommerceProductImages()`

```php
reorderCommerceProductImages($product_id, $reorder_commerce_product_images_request): \Zernio\Model\ReorderCommerceProductImages200Response
```

Reorder images

Puts the product's images in the given order; the first becomes the featured image. `pending` is true while the platform finishes in the background.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$reorder_commerce_product_images_request = new \Zernio\Model\ReorderCommerceProductImagesRequest(); // \Zernio\Model\ReorderCommerceProductImagesRequest

try {
    $result = $apiInstance->reorderCommerceProductImages($product_id, $reorder_commerce_product_images_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->reorderCommerceProductImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **reorder_commerce_product_images_request** | [**\Zernio\Model\ReorderCommerceProductImagesRequest**](../Model/ReorderCommerceProductImagesRequest.md)|  | |

### Return type

[**\Zernio\Model\ReorderCommerceProductImages200Response**](../Model/ReorderCommerceProductImages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runCommerceCatalogSync()`

```php
runCommerceCatalogSync($sync_id): \Zernio\Model\CreateCommerceCatalogSync202Response
```

Run a catalog sync now

Queues a full run. Poll GET /v1/commerce/catalog-syncs/{syncId} for the outcome.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 'sync_id_example'; // string

try {
    $result = $apiInstance->runCommerceCatalogSync($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->runCommerceCatalogSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateCommerceCatalogSync202Response**](../Model/CreateCommerceCatalogSync202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCommerceCollectionMetafields()`

```php
setCommerceCollectionMetafields($collection_id, $set_commerce_product_metafields_request): \Zernio\Model\ListCommerceProductMetafields200Response
```

Set collection metafields

Creates or updates custom fields by namespace and key. Needs collections.metafields: WooCommerce keeps custom fields on products only and answers 400 platform_not_supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native id.
$set_commerce_product_metafields_request = new \Zernio\Model\SetCommerceProductMetafieldsRequest(); // \Zernio\Model\SetCommerceProductMetafieldsRequest

try {
    $result = $apiInstance->setCommerceCollectionMetafields($collection_id, $set_commerce_product_metafields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->setCommerceCollectionMetafields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native id. | |
| **set_commerce_product_metafields_request** | [**\Zernio\Model\SetCommerceProductMetafieldsRequest**](../Model/SetCommerceProductMetafieldsRequest.md)|  | |

### Return type

[**\Zernio\Model\ListCommerceProductMetafields200Response**](../Model/ListCommerceProductMetafields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCommerceDiscountActive()`

```php
setCommerceDiscountActive($discount_id, $set_commerce_discount_active_request): \Zernio\Model\CreateCommerceDiscount201Response
```

Activate or deactivate a discount

Deactivating ends the discount now; activating starts it now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string | Platform-native id.
$set_commerce_discount_active_request = new \Zernio\Model\SetCommerceDiscountActiveRequest(); // \Zernio\Model\SetCommerceDiscountActiveRequest

try {
    $result = $apiInstance->setCommerceDiscountActive($discount_id, $set_commerce_discount_active_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->setCommerceDiscountActive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| Platform-native id. | |
| **set_commerce_discount_active_request** | [**\Zernio\Model\SetCommerceDiscountActiveRequest**](../Model/SetCommerceDiscountActiveRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceDiscount201Response**](../Model/CreateCommerceDiscount201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCommercePriceListPrices()`

```php
setCommercePriceListPrices($price_list_id, $set_commerce_price_list_prices_request): \Zernio\Model\SetCommercePriceListPrices200Response
```

Set fixed prices

Sets fixed prices for variants in the price list's currency, overriding the converted price in that market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 'price_list_id_example'; // string | Platform-native id.
$set_commerce_price_list_prices_request = new \Zernio\Model\SetCommercePriceListPricesRequest(); // \Zernio\Model\SetCommercePriceListPricesRequest

try {
    $result = $apiInstance->setCommercePriceListPrices($price_list_id, $set_commerce_price_list_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->setCommercePriceListPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list_id** | **string**| Platform-native id. | |
| **set_commerce_price_list_prices_request** | [**\Zernio\Model\SetCommercePriceListPricesRequest**](../Model/SetCommercePriceListPricesRequest.md)|  | |

### Return type

[**\Zernio\Model\SetCommercePriceListPrices200Response**](../Model/SetCommercePriceListPrices200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCommerceProductMetafields()`

```php
setCommerceProductMetafields($product_id, $set_commerce_product_metafields_request): \Zernio\Model\ListCommerceProductMetafields200Response
```

Set product metafields

Creates or updates custom fields by namespace and key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native id.
$set_commerce_product_metafields_request = new \Zernio\Model\SetCommerceProductMetafieldsRequest(); // \Zernio\Model\SetCommerceProductMetafieldsRequest

try {
    $result = $apiInstance->setCommerceProductMetafields($product_id, $set_commerce_product_metafields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->setCommerceProductMetafields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native id. | |
| **set_commerce_product_metafields_request** | [**\Zernio\Model\SetCommerceProductMetafieldsRequest**](../Model/SetCommerceProductMetafieldsRequest.md)|  | |

### Return type

[**\Zernio\Model\ListCommerceProductMetafields200Response**](../Model/ListCommerceProductMetafields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceCollection()`

```php
updateCommerceCollection($collection_id, $update_commerce_collection_request): \Zernio\Model\CreateCommerceCollection201Response
```

Update a collection

Partial update; at least one field besides accountId is required. Change membership with POST /v1/commerce/collections/{collectionId}/products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Platform-native collection id.
$update_commerce_collection_request = new \Zernio\Model\UpdateCommerceCollectionRequest(); // \Zernio\Model\UpdateCommerceCollectionRequest

try {
    $result = $apiInstance->updateCommerceCollection($collection_id, $update_commerce_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommerceCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Platform-native collection id. | |
| **update_commerce_collection_request** | [**\Zernio\Model\UpdateCommerceCollectionRequest**](../Model/UpdateCommerceCollectionRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceCollection201Response**](../Model/CreateCommerceCollection201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceDiscount()`

```php
updateCommerceDiscount($discount_id, $update_commerce_discount_request): \Zernio\Model\CreateCommerceDiscount201Response
```

Update a discount

Changes a percentage, fixed-amount or free-shipping discount. Buy-X-get-Y and app discounts are read-only here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string | Platform-native id.
$update_commerce_discount_request = new \Zernio\Model\UpdateCommerceDiscountRequest(); // \Zernio\Model\UpdateCommerceDiscountRequest

try {
    $result = $apiInstance->updateCommerceDiscount($discount_id, $update_commerce_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommerceDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| Platform-native id. | |
| **update_commerce_discount_request** | [**\Zernio\Model\UpdateCommerceDiscountRequest**](../Model/UpdateCommerceDiscountRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceDiscount201Response**](../Model/CreateCommerceDiscount201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceMenu()`

```php
updateCommerceMenu($menu_id, $update_commerce_menu_request): \Zernio\Model\CreateCommerceMenu201Response
```

Replace a navigation menu

Replaces the title and the whole item tree.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 'menu_id_example'; // string | Platform-native id.
$update_commerce_menu_request = new \Zernio\Model\UpdateCommerceMenuRequest(); // \Zernio\Model\UpdateCommerceMenuRequest

try {
    $result = $apiInstance->updateCommerceMenu($menu_id, $update_commerce_menu_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommerceMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **menu_id** | **string**| Platform-native id. | |
| **update_commerce_menu_request** | [**\Zernio\Model\UpdateCommerceMenuRequest**](../Model/UpdateCommerceMenuRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceMenu201Response**](../Model/CreateCommerceMenu201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceMetaobject()`

```php
updateCommerceMetaobject($metaobject_id, $update_commerce_metaobject_request): \Zernio\Model\CreateCommerceMetaobject201Response
```

Update a metaobject

Sets the given field values; fields left out keep theirs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metaobject_id = 'metaobject_id_example'; // string | Platform-native id.
$update_commerce_metaobject_request = new \Zernio\Model\UpdateCommerceMetaobjectRequest(); // \Zernio\Model\UpdateCommerceMetaobjectRequest

try {
    $result = $apiInstance->updateCommerceMetaobject($metaobject_id, $update_commerce_metaobject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommerceMetaobject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **metaobject_id** | **string**| Platform-native id. | |
| **update_commerce_metaobject_request** | [**\Zernio\Model\UpdateCommerceMetaobjectRequest**](../Model/UpdateCommerceMetaobjectRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceMetaobject201Response**](../Model/CreateCommerceMetaobject201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommercePage()`

```php
updateCommercePage($page_id, $update_commerce_page_request): \Zernio\Model\CreateCommercePage201Response
```

Update a page

Updates the fields you pass (`title`, `handle`, `bodyHtml`, `isPublished`) and returns the page. Needs pages.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Platform-native id.
$update_commerce_page_request = new \Zernio\Model\UpdateCommercePageRequest(); // \Zernio\Model\UpdateCommercePageRequest

try {
    $result = $apiInstance->updateCommercePage($page_id, $update_commerce_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommercePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Platform-native id. | |
| **update_commerce_page_request** | [**\Zernio\Model\UpdateCommercePageRequest**](../Model/UpdateCommercePageRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommercePage201Response**](../Model/CreateCommercePage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceProduct()`

```php
updateCommerceProduct($product_id, $update_commerce_product_request): \Zernio\Model\CreateCommerceProduct201Response
```

Update a product

Partial-updates the product's own fields; at least one besides `accountId` is required. `tags` replaces the full list. Change prices with `POST /v1/commerce/products/{productId}/price` and status with `POST /v1/commerce/products/state`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native product id.
$update_commerce_product_request = new \Zernio\Model\UpdateCommerceProductRequest(); // \Zernio\Model\UpdateCommerceProductRequest

try {
    $result = $apiInstance->updateCommerceProduct($product_id, $update_commerce_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommerceProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native product id. | |
| **update_commerce_product_request** | [**\Zernio\Model\UpdateCommerceProductRequest**](../Model/UpdateCommerceProductRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceProductPrices()`

```php
updateCommerceProductPrices($product_id, $update_commerce_product_prices_request): \Zernio\Model\CreateCommerceProduct201Response
```

Update variant prices

Sets the price and/or compare-at price of the listed variants. Other variants are untouched. Amounts are in the store currency; send `compareAtPrice: null` to remove a strike-through price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Platform-native product id.
$update_commerce_product_prices_request = new \Zernio\Model\UpdateCommerceProductPricesRequest(); // \Zernio\Model\UpdateCommerceProductPricesRequest

try {
    $result = $apiInstance->updateCommerceProductPrices($product_id, $update_commerce_product_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommerceProductPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Platform-native product id. | |
| **update_commerce_product_prices_request** | [**\Zernio\Model\UpdateCommerceProductPricesRequest**](../Model/UpdateCommerceProductPricesRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceProduct201Response**](../Model/CreateCommerceProduct201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceRedirect()`

```php
updateCommerceRedirect($redirect_id, $update_commerce_redirect_request): \Zernio\Model\CreateCommerceRedirect201Response
```

Update a URL redirect

Changes the redirect's `path` and/or `target`. Shopify only. Needs navigation.write.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirect_id = 'redirect_id_example'; // string | Platform-native id.
$update_commerce_redirect_request = new \Zernio\Model\UpdateCommerceRedirectRequest(); // \Zernio\Model\UpdateCommerceRedirectRequest

try {
    $result = $apiInstance->updateCommerceRedirect($redirect_id, $update_commerce_redirect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCommerceRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**| Platform-native id. | |
| **update_commerce_redirect_request** | [**\Zernio\Model\UpdateCommerceRedirectRequest**](../Model/UpdateCommerceRedirectRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCommerceRedirect201Response**](../Model/CreateCommerceRedirect201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertCommerceMarketingActivity()`

```php
upsertCommerceMarketingActivity($upsert_commerce_marketing_activity_request): \Zernio\Model\UpsertCommerceMarketingActivity200Response
```

Record a marketing activity

Creates or updates (by `remoteId`) an activity in the store's Marketing section, so the merchant sees a post, ad or message you ran for them, with its link and UTM parameters for attribution. Use your own id (for example the Zernio post or ad id) as `remoteId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_commerce_marketing_activity_request = new \Zernio\Model\UpsertCommerceMarketingActivityRequest(); // \Zernio\Model\UpsertCommerceMarketingActivityRequest

try {
    $result = $apiInstance->upsertCommerceMarketingActivity($upsert_commerce_marketing_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->upsertCommerceMarketingActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_commerce_marketing_activity_request** | [**\Zernio\Model\UpsertCommerceMarketingActivityRequest**](../Model/UpsertCommerceMarketingActivityRequest.md)|  | |

### Return type

[**\Zernio\Model\UpsertCommerceMarketingActivity200Response**](../Model/UpsertCommerceMarketingActivity200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
