# # CreateCommerceDraftOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Connected store SocialAccount id. |
**customer_id** | **string** | The customer it is for, from the customers endpoints. | [optional]
**email** | **string** |  | [optional]
**line_items** | [**\Zernio\Model\CreateCommerceDraftOrderRequestLineItemsInner[]**](CreateCommerceDraftOrderRequestLineItemsInner.md) | A product variant (variantId) or a custom item (title and price). |
**discount** | [**\Zernio\Model\CreateCommerceDraftOrderRequestDiscount**](CreateCommerceDraftOrderRequestDiscount.md) |  | [optional]
**shipping** | [**\Zernio\Model\CreateCommerceDraftOrderRequestShipping**](CreateCommerceDraftOrderRequestShipping.md) |  | [optional]
**shipping_address** | [**\Zernio\Model\CreateCommerceDraftOrderRequestShippingAddress**](CreateCommerceDraftOrderRequestShippingAddress.md) |  | [optional]
**note** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
