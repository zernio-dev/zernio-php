# # WebhookPayloadConversationControlChangedControl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner** | **string** | Who answers now. ai_agent: Meta Business Agent (WhatsApp); app: you; other: another app (a WhatsApp partner, or a Messenger / Instagram receiver such as Page Inbox). |
**previous_owner** | **string** | Owner before this change, null when no handover had touched the thread. |
**owner_app_id** | **string** | Meta app id of the new owner, when Meta names it (Facebook and Instagram handovers, WhatsApp partner apps). Page Inbox is 263902037430900. | [optional]
**metadata** | **string** | Free-form string the transferring app attached to the handover, forwarded verbatim. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
