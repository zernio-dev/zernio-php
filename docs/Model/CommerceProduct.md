# # CommerceProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native product id. | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**title** | **string** |  | [optional]
**description_html** | **string** |  | [optional]
**handle** | **string** | URL slug of the product. | [optional]
**vendor** | **string** |  | [optional]
**product_type** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**status** | [**\Zernio\Model\CommerceProductStatus**](CommerceProductStatus.md) |  | [optional]
**platform_status** | **string** | The raw status on the platform, e.g. ACTIVE on Shopify. | [optional]
**featured_image** | [**\Zernio\Model\CommerceImage**](CommerceImage.md) |  | [optional]
**images** | [**\Zernio\Model\CommerceImage[]**](CommerceImage.md) | First 20 images, in store order. | [optional]
**options** | [**\Zernio\Model\ProductOptionsInner[]**](ProductOptionsInner.md) | Option axes (e.g. Size, Color) and their values. | [optional]
**variants** | [**\Zernio\Model\CommerceVariant[]**](CommerceVariant.md) | First 100 variants. | [optional]
**total_inventory** | **int** |  | [optional]
**url** | **string** | Public storefront URL; null while the product is not published. | [optional]
**seo** | [**\Zernio\Model\ProductSeo**](ProductSeo.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**published_at** | **\DateTime** |  | [optional]
**platform_data** | **array<string,mixed>** | Platform-only fields. Null when the platform has none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
