# # CommerceRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Connected store SocialAccount id. |
**line_items** | [**\Zernio\Model\CommerceRefundRequestLineItemsInner[]**](CommerceRefundRequestLineItemsInner.md) |  | [optional]
**shipping** | [**\Zernio\Model\CommerceRefundRequestShipping**](CommerceRefundRequestShipping.md) |  | [optional]
**amount** | **string** | Refund this much money instead of what the lines and shipping are worth, for a goodwill refund or a partial one. Taken from the order&#39;s payments in order, up to what each can still refund. | [optional]
**currency** | **string** | The currency your amounts are in. Refused (400) unless it is the one the buyer paid in, which every refund amount uses. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
