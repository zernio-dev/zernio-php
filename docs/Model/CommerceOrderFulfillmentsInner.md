# # CommerceOrderFulfillmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The shipment (fulfillment) id. Entries of one shipment with several tracking numbers share it. | [optional]
**carrier_name** | **string** |  | [optional]
**tracking_number** | **string** |  | [optional]
**tracking_url** | **string** |  | [optional]
**delivery_status** | **string** | Where the shipment is. pending means no carrier scan yet. Null when the platform has no delivery tracking for it. Shopify only knows it when the carrier sends tracking events. | [optional]
**platform_delivery_status** | **string** | The platform&#39;s raw value, e.g. Shopify ATTEMPTED_DELIVERY. | [optional]
**estimated_delivery_at** | **\DateTime** |  | [optional]
**in_transit_at** | **\DateTime** |  | [optional]
**delivered_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
