# # CtwaAdRequestBodyCreativesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_post_id** | **string** | Messaging and CTWA only. Platform post or reel ID, the same input boostPost takes as platformPostId. Facebook IDs become object_story_id; Instagram IDs become source_instagram_media_id run as the media owner (resolved from the media on a Meta ads business-login connection, so no Instagram connection is needed). Mutually exclusive with objectStoryId and fresh creative fields. | [optional]
**existing_post_id** | **string** | Alias of platformPostId, kept for existing callers. Sending both with different values is a 400. | [optional]
**object_story_id** | **string** | Messaging and CTWA only. Raw Facebook pageId_postId reference, used as object_story_id even with an Instagram account. Mutually exclusive with platformPostId and fresh creative fields. | [optional]
**creative_features** | **array<string,string>** | Replaces the top-level creativeFeatures map for this item. Omit to inherit; an empty object clears inherited enrollment choices. | [optional]
**headline** | **string** |  | [optional]
**body** | **string** | Primary text shown above the image / video. | [optional]
**image_url** | **string** | Image asset. Mutually exclusive with this entry&#39;s &#x60;video&#x60;. Required if neither &#x60;video&#x60; nor an existing post reference is supplied. | [optional]
**video** | [**\Zernio\Model\CtwaAdRequestBodyCreativesInnerVideo**](CtwaAdRequestBodyCreativesInnerVideo.md) |  | [optional]
**welcome_message** | [**\Zernio\Model\CtwaAdRequestBodyCreativesInnerWelcomeMessage**](CtwaAdRequestBodyCreativesInnerWelcomeMessage.md) |  | [optional]
**carousel_cards** | [**\Zernio\Model\MessagingCarouselCard[]**](MessagingCarouselCard.md) | A 2-10 card carousel for this entry instead of &#x60;imageUrl&#x60; / &#x60;video&#x60;; &#x60;body&#x60; is required. Same rules as the top-level &#x60;carouselCards&#x60;. Carousel and single-media entries can be mixed on one ad set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
