# # WebhookPayloadReactionReaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emoji** | **string** | The emoji reacted with. May be an empty string when &#x60;action&#x60; is &#x60;removed&#x60; on WhatsApp (Meta does not report which emoji was removed). |
**action** | **string** |  |
**message_id** | **string** | Internal Zernio message ID of the reacted-to message, when resolvable from the platform ID. | [optional]
**platform_message_id** | **string** | Platform-native ID of the reacted-to message (e.g. WhatsApp wamid). |
**sender** | [**\Zernio\Model\WebhookPayloadReactionReactionSender**](WebhookPayloadReactionReactionSender.md) |  |
**reacted_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
