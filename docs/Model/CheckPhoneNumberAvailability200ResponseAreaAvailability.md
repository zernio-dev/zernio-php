# # CheckPhoneNumberAvailability200ResponseAreaAvailability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**in_stock** | [**\Zernio\Model\CheckPhoneNumberAvailability200ResponseAreaAvailabilityInStockInner[]**](CheckPhoneNumberAvailability200ResponseAreaAvailabilityInStockInner.md) | Deliverable numbers now, deepest first. Pass &#x60;ndc&#x60; as &#x60;areaCode&#x60; to hold the order to it. | [optional]
**pre_order** | [**\Zernio\Model\CheckPhoneNumberAvailability200ResponseAreaAvailabilityPreOrderInner[]**](CheckPhoneNumberAvailability200ResponseAreaAvailabilityPreOrderInner.md) | The carrier lists nothing there and the number type is a document tier: submit KYC with &#x60;areaCode&#x60; and &#x60;preOrder: true&#x60;, the carrier sources one (usually 2 to 4 weeks, never guaranteed), nothing is billed until it is active. | [optional]
**out_of_stock** | [**\Zernio\Model\CheckPhoneNumberAvailability200ResponseAreaAvailabilityOutOfStockInner[]**](CheckPhoneNumberAvailability200ResponseAreaAvailabilityOutOfStockInner.md) | Nothing deliverable and no pre-order: &#x60;listed&#x60; &gt; 0 is stock the carrier shows that WhatsApp refused recently (held back until it clears), 0 is a dry area of an instant tier. A stock watch (POST /v1/phone-numbers/stock-watches with &#x60;areaCode&#x60;) is the way to hear when it is back. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
