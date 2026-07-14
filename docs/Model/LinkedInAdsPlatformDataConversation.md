# # LinkedInAdsPlatformDataConversation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | InMail subject shown in the inbox. |
**sender** | **string** | Person or organization URN. Defaults to the authoring Company Page. The sender must be approved for the ad account first (Campaign Manager &gt; Manage message ad senders) or LinkedIn rejects the create with SINMAIL_SENDER_NOT_APPROVED. | [optional]
**body** | **string** | Optional intro body (HTML allowed). | [optional]
**footer** | **string** | Terms shown at the bottom of the message. | [optional]
**headline** | **string** | Conversation headline. Defaults to the first message&#39;s first line. | [optional]
**first_message_id** | **string** |  |
**messages** | [**\Zernio\Model\LinkedInAdsPlatformDataConversationMessagesInner[]**](LinkedInAdsPlatformDataConversationMessagesInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
