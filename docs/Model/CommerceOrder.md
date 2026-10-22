# # CommerceOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**number** | **string** | The number the merchant and buyer see. | [optional]
**status** | [**\Zernio\Model\CommerceOrderStatus**](CommerceOrderStatus.md) |  | [optional]
**platform_status** | **string** | Shopify fulfilment status (e.g. UNFULFILLED) or WooCommerce order status (e.g. processing). | [optional]
**payment_status** | **string** |  | [optional]
**platform_payment_status** | **string** | Shopify financial status. Null on WooCommerce, where payment is read from the order status. | [optional]
**currency** | **string** |  | [optional]
**taxes_included** | **bool** | Whether line item and shipping amounts include tax. Always false on WooCommerce, whose API returns amounts before tax whatever the store displays (platformData.pricesIncludeTax). | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**paid_at** | **\DateTime** | WooCommerce only; null on Shopify. | [optional]
**cancelled_at** | **\DateTime** | Shopify only; null on WooCommerce. | [optional]
**cancel_reason** | **string** |  | [optional]
**subtotal** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) | Line items before order discounts and shipping. | [optional]
**discount_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**shipping_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**tax_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**refunded_total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**discount_codes** | **string[]** |  | [optional]
**payment_methods** | **string[]** |  | [optional]
**customer** | [**\Zernio\Model\CommerceOrderCustomer**](CommerceOrderCustomer.md) |  | [optional]
**billing_address** | [**\Zernio\Model\CommerceAddress**](CommerceAddress.md) |  | [optional]
**shipping_address** | [**\Zernio\Model\CommerceAddress**](CommerceAddress.md) |  | [optional]
**buyer_note** | **string** |  | [optional]
**attribution** | [**\Zernio\Model\CommerceOrderAttribution**](CommerceOrderAttribution.md) |  | [optional]
**line_items** | [**\Zernio\Model\CommerceOrderLineItemsInner[]**](CommerceOrderLineItemsInner.md) |  | [optional]
**shipping_lines** | [**\Zernio\Model\CommerceOrderChargeLine[]**](CommerceOrderChargeLine.md) |  | [optional]
**fee_lines** | [**\Zernio\Model\CommerceOrderChargeLine[]**](CommerceOrderChargeLine.md) | WooCommerce fees. Always empty on Shopify. | [optional]
**tax_lines** | [**\Zernio\Model\CommerceTaxLine[]**](CommerceTaxLine.md) | Order tax by rate, line items and shipping together. | [optional]
**refunds** | [**\Zernio\Model\CommerceOrderRefundsInner[]**](CommerceOrderRefundsInner.md) |  | [optional]
**fulfillments** | [**\Zernio\Model\CommerceOrderFulfillmentsInner[]**](CommerceOrderFulfillmentsInner.md) |  | [optional]
**platform_data** | **array<string,mixed>** | Platform-only fields. Null when the platform has none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
