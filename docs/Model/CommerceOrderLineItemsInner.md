# # CommerceOrderLineItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**product_id** | **string** | Null when the product was deleted. | [optional]
**variant_id** | **string** |  | [optional]
**sku** | **string** |  | [optional]
**title** | **string** |  | [optional]
**variant_title** | **string** |  | [optional]
**quantity** | **int** | As ordered; refunded units are listed under refunds. | [optional]
**unit_price** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) | Before discounts. | [optional]
**subtotal** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) | unitPrice x quantity. | [optional]
**discount_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) | subtotal minus discountTotal. | [optional]
**tax_lines** | [**\Zernio\Model\CommerceTaxLine[]**](CommerceTaxLine.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
