# # CommerceDraftOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**name** | **string** |  | [optional]
**status** | **string** |  | [optional]
**invoice_url** | **string** | The checkout link the buyer pays through. | [optional]
**invoice_sent_at** | **\DateTime** |  | [optional]
**email** | **string** |  | [optional]
**customer_id** | **string** |  | [optional]
**note** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**currency** | **string** | The currency the buyer pays in; every amount uses it. | [optional]
**subtotal** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**discount_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**shipping_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**tax_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**line_items** | [**\Zernio\Model\CommerceDraftOrderLineItemsInner[]**](CommerceDraftOrderLineItemsInner.md) |  | [optional]
**shipping_address** | [**\Zernio\Model\CommerceAddress**](CommerceAddress.md) |  | [optional]
**order_id** | **string** | The order it became once completed. | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**completed_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
