# # CommerceVariant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native variant id. | [optional]
**title** | **string** | Option combination label, e.g. \&quot;S / Blue\&quot;. | [optional]
**sku** | **string** |  | [optional]
**barcode** | **string** |  | [optional]
**price** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**compare_at_price** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**inventory_quantity** | **int** | Units on hand; null when inventory is not tracked. | [optional]
**available_for_sale** | **bool** |  | [optional]
**options** | [**\Zernio\Model\CreateCommerceProductVariantsRequestVariantsInnerOptionsInner[]**](CreateCommerceProductVariantsRequestVariantsInnerOptionsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
