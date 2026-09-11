# # OnWhatsAppNumberActionRequiredRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**event** | **string** |  | [optional]
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. | [optional]
**reason** | **string** |  | [optional]
**requirements** | [**\Zernio\Model\OnWhatsAppNumberActionRequiredRequestRequirementsInner[]**](OnWhatsAppNumberActionRequiredRequestRequirementsInner.md) | Every requirement on the order with the reviewer&#39;s current verdict. Omitted when the order&#39;s requirements could not be read. | [optional]
**reviewed_at** | **\DateTime** | When the reviewer last commented on the order. Omitted when there is no reviewer comment. | [optional]
**number** | [**\Zernio\Model\OnWhatsAppNumberDeclinedRequestNumber**](OnWhatsAppNumberDeclinedRequestNumber.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
