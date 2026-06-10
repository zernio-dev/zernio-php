# # CreateInboxConversationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The social account ID to send from |
**participant_id** | **string** | Recipient identifier. For X this is the numeric user ID; for WhatsApp, the recipient phone number in international format (digits, country code included). Provide either this or participantUsername. | [optional]
**participant_username** | **string** | Recipient handle/username — an X or Bluesky handle (with or without @) or a Reddit username (with or without u/). Resolved via lookup. Provide either this or participantId. | [optional]
**message** | **string** | Text content of the message. At least one of message, attachment, or (for WhatsApp) templateName is required. | [optional]
**skip_dm_check** | **bool** | X/Twitter only. Skip the receives_your_dm eligibility check before sending. Use if you have already verified the recipient accepts DMs. | [optional] [default to false]
**template_name** | **string** | WhatsApp only. Name of the approved template to start the conversation with (required for WhatsApp). | [optional]
**template_language** | **string** | WhatsApp only. Template language code (e.g. en_US). | [optional]
**template_params** | **string[]** | WhatsApp only. Body variable values, in order. Works with positional placeholders ({{1}}, {{2}}, ...) and with named placeholders ({{name}}, {{company}} - how Meta Business Manager creates templates), where values fill the named slots in order of appearance. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
