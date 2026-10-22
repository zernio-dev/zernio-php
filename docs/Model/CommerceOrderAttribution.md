# # CommerceOrderAttribution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ready** | **bool** | False while Shopify is still attributing a new order. No webhook fires when it becomes true, so read the order again later. Always true on WooCommerce. | [optional]
**first_visit** | [**\Zernio\Model\CommerceOrderVisit**](CommerceOrderVisit.md) |  | [optional]
**last_visit** | [**\Zernio\Model\CommerceOrderVisit**](CommerceOrderVisit.md) |  | [optional]
**custom_attributes** | [**\Zernio\Model\BoostPostRequestTrackingUrlTagsInner[]**](BoostPostRequestTrackingUrlTagsInner.md) | Shopify cart and note attributes, or WooCommerce public order meta. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
