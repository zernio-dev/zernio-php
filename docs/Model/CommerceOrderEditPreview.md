# # CommerceOrderEditPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subtotal** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**total** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) |  | [optional]
**outstanding** | [**\Zernio\Model\CommerceMoney**](CommerceMoney.md) | What the buyer still owes. Negative when the edit leaves them overpaid: refund that with the refunds endpoint. | [optional]
**line_items** | [**\Zernio\Model\CommerceOrderEditPreviewLineItemsInner[]**](CommerceOrderEditPreviewLineItemsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
