# # CtwaAdRequestBodyCreativesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**existing_post_id** | **string** | Messaging and CTWA only. Platform post or reel ID, resolved like boost platformPostId. Facebook IDs become object_story_id; Instagram IDs become source_instagram_media_id using the connected Instagram identity. Mutually exclusive with objectStoryId and fresh creative fields. | [optional]
**object_story_id** | **string** | Messaging and CTWA only. Raw Facebook pageId_postId reference, used as object_story_id even with an Instagram account. Mutually exclusive with existingPostId and fresh creative fields. | [optional]
**headline** | **string** |  | [optional]
**body** | **string** | Primary text shown above the image / video. | [optional]
**image_url** | **string** | Image asset. Mutually exclusive with this entry&#39;s &#x60;video&#x60;. Required if neither &#x60;video&#x60; nor an existing post reference is supplied. | [optional]
**video** | [**\Zernio\Model\CtwaAdRequestBodyCreativesInnerVideo**](CtwaAdRequestBodyCreativesInnerVideo.md) |  | [optional]
**welcome_message** | [**\Zernio\Model\CtwaAdRequestBodyCreativesInnerWelcomeMessage**](CtwaAdRequestBodyCreativesInnerWelcomeMessage.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
