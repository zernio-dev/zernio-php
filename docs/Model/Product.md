# # Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native product id (numeric string for Shopify). | [optional]
**platform** | **string** |  | [optional]
**title** | **string** |  | [optional]
**handle** | **string** | URL slug of the product. | [optional]
**description_html** | **string** | Product description as HTML. | [optional]
**vendor** | **string** |  | [optional]
**product_type** | **string** | Free-text product type as set on the store. | [optional]
**tags** | **string[]** |  | [optional]
**status** | **string** |  | [optional]
**featured_image** | [**\Zernio\Model\ProductImage**](ProductImage.md) |  | [optional]
**images** | [**\Zernio\Model\ProductImage[]**](ProductImage.md) | First 20 images in the product media, in store order. | [optional]
**options** | [**\Zernio\Model\ProductOptionsInner[]**](ProductOptionsInner.md) | Option axes (e.g. Size, Color) and their values. | [optional]
**variants** | [**\Zernio\Model\ProductVariant[]**](ProductVariant.md) | First 100 variants. | [optional]
**seo** | [**\Zernio\Model\ProductSeo**](ProductSeo.md) |  | [optional]
**total_inventory** | **int** |  | [optional]
**online_store_url** | **string** | Public storefront URL; null while the product is not published to the online store. | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**published_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
