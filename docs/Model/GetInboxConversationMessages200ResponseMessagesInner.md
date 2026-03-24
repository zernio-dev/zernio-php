# # GetInboxConversationMessages200ResponseMessagesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**conversation_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**message** | **string** |  | [optional]
**sender_id** | **string** |  | [optional]
**sender_name** | **string** |  | [optional]
**sender_verified_type** | **string** | X/Twitter verified badge type. Only present for Twitter/X messages. | [optional]
**direction** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**attachments** | [**\Late\Model\GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner[]**](GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner.md) |  | [optional]
**subject** | **string** | Reddit message subject | [optional]
**story_reply** | **bool** | Instagram story reply | [optional]
**is_story_mention** | **bool** | Instagram story mention | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
