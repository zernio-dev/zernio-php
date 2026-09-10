# # CreateInboxConversationRequestTemplateCardsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_index** | **int** | The card&#39;s card_index in the approved template. |
**params** | **string[]** | Values for this card&#39;s own body variables, in the card&#39;s own {{1}}, {{2}}, ... order (or named-slot order of appearance). | [optional]
**header_media** | [**\Zernio\Model\CreateInboxConversationRequestTemplateCardsInnerHeaderMedia**](CreateInboxConversationRequestTemplateCardsInnerHeaderMedia.md) |  | [optional]
**buttons** | [**\Zernio\Model\CreateInboxConversationRequestTemplateCardsInnerButtonsInner[]**](CreateInboxConversationRequestTemplateCardsInnerButtonsInner.md) | Values for this card&#39;s own buttons, each addressed by the button&#39;s index within the card. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
