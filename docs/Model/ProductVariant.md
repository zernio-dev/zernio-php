# # ProductVariant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native variant id (numeric string for Shopify). | [optional]
**title** | **string** | Option combination label, e.g. \&quot;S / Blue\&quot;. | [optional]
**sku** | **string** |  | [optional]
**barcode** | **string** |  | [optional]
**price** | **string** | Decimal amount in the store currency, e.g. \&quot;19.90\&quot;. | [optional]
**compare_at_price** | **string** | Strike-through price; null when the variant is not on sale. | [optional]
**inventory_quantity** | **int** | Units on hand across locations; null when inventory is not tracked. | [optional]
**available_for_sale** | **bool** |  | [optional]
**selected_options** | [**\Zernio\Model\ProductVariantSelectedOptionsInner[]**](ProductVariantSelectedOptionsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
