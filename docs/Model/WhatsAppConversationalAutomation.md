# # WhatsAppConversationalAutomation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_welcome_message** | **bool** | When true, Meta sends a &#x60;request_welcome&#x60; event the first time a person opens a chat with the number. | [optional]
**prompts** | **string[]** | Ice breakers shown to a person opening a chat. Tapping one sends its text as a normal message. | [optional]
**commands** | [**\Zernio\Model\WhatsAppConversationalAutomationCommandsInner[]**](WhatsAppConversationalAutomationCommandsInner.md) | Slash commands shown when a person types &#x60;/&#x60;. Names are unique, letters, digits and underscores, without the slash. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
