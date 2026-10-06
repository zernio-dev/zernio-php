# # MessagingCarouselCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_url** | **string** | Card image. Uploaded to the ad account and sent as the card image_hash (by URL on validateOnly). |
**headline** | **string** | Card title (Meta name). | [optional]
**description** | **string** | Card description, under the title. | [optional]
**call_to_action** | **string** | Optional. Must equal the destination&#39;s messaging call to action (WHATSAPP_MESSAGE for whatsapp, MESSAGE_PAGE for messenger, INSTAGRAM_MESSAGE for instagram_direct; with &#x60;destinations&#x60; the first one listed). Any other value is a 400 naming the card, because Meta refuses a carousel whose cards do not all open the destination. | [optional]
**link_url** | **string** | Not accepted: a 400. The card tap opens the conversation, not a website. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
