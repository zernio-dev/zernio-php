# # UpdateProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**description_html** | **string** | Product description as HTML. | [optional]
**handle** | **string** | URL slug of the product. | [optional]
**vendor** | **string** |  | [optional]
**product_type** | **string** |  | [optional]
**tags** | **string[]** | Replaces the full tag list. | [optional]
**status** | **string** | archived hides the product everywhere; draft keeps it editable but unpublished. | [optional]
**seo** | [**\Zernio\Model\UpdateProductRequestSeo**](UpdateProductRequestSeo.md) |  | [optional]
**variants** | [**\Zernio\Model\UpdateProductRequestVariantsInner[]**](UpdateProductRequestVariantsInner.md) | Price changes per variant. Only the listed variants change. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
