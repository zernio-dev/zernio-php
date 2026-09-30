# # GetInboxConversation200ResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**status** | **string** |  | [optional]
**participant_name** | **string** |  | [optional]
**participant_id** | **string** |  | [optional]
**participant_verified_type** | **string** | X verified badge type. Only present for X conversations. | [optional]
**business_scoped_user_id** | **string** | WhatsApp only. Meta business-scoped user ID (BSUID), the stable identity anchor; present when Meta has sent it for this participant. | [optional]
**whatsapp_username** | **string** | WhatsApp only. The participant&#39;s WhatsApp username (e.g. &#x60;jane.shop&#x60;, no leading @). Not a stable identifier, because users can change it: useful for display, not recommended as an identity anchor. Captured from inbound messages, so older threads fill in on their next inbound. | [optional]
**last_message** | **string** |  | [optional]
**last_message_at** | **\DateTime** |  | [optional]
**updated_time** | **\DateTime** |  | [optional]
**participants** | [**\Zernio\Model\UpdateFacebookPage200ResponseSelectedPage[]**](UpdateFacebookPage200ResponseSelectedPage.md) |  | [optional]
**instagram_profile** | [**\Zernio\Model\ListInboxConversations200ResponseDataInnerInstagramProfile**](ListInboxConversations200ResponseDataInnerInstagramProfile.md) |  | [optional]
**metadata** | [**\Zernio\Model\GetInboxConversation200ResponseDataMetadata**](GetInboxConversation200ResponseDataMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
