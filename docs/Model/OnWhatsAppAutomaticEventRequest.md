# # OnWhatsAppAutomaticEventRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**event** | **string** |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**account_id** | **string** | SocialAccount id of the WhatsApp number whose conversation was flagged. | [optional]
**conversation_id** | **string** | Zernio conversation id, when the thread could be resolved. | [optional]
**platform_message_id** | **string** | The wamid of the message Meta&#39;s analysis flagged. | [optional]
**event_name** | **string** | Meta-detected event: &#x60;LeadSubmitted&#x60; | &#x60;Purchase&#x60;. | [optional]
**ctwa_clid** | **string** | Meta&#39;s CTWA click id, the Conversions API match key. | [optional]
**custom_data** | [**\Zernio\Model\OnWhatsAppAutomaticEventRequestCustomData**](OnWhatsAppAutomaticEventRequestCustomData.md) |  | [optional]
**detected_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
