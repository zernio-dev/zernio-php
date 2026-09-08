# # UpdateWhatsAppTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | WhatsApp account ID |
**language** | **string** | Language code of the variant to edit (e.g. en_US, es, pt_BR). Required when the family has several languages. Body only: a language query parameter on PATCH is a 400. | [optional]
**components** | [**\Zernio\Model\WhatsAppTemplateComponent[]**](WhatsAppTemplateComponent.md) | Updated template components. Optional when only message_send_ttl_seconds changes; at least one of the two is required. | [optional]
**message_send_ttl_seconds** | **int** | Delivery validity window in seconds: a message not delivered within it is dropped. Range depends on category: AUTHENTICATION 30 to 900, UTILITY 30 to 43200 (12h), MARKETING 43200 to 2592000 (30 days); -1 is not accepted here (Meta treats it as an empty edit); send a value in range. A TTL-only edit keeps an APPROVED template approved, no re-review. Meta defaults to 600 for AUTHENTICATION and 30 days otherwise. If Meta later recategorises the template, it clears the TTL (read it back to check). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
