# # CreateStandaloneAdRequestCarouselCardsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_url** | **string** | Image card: the card image, uploaded to the ad account and referenced by hash. | [optional]
**video** | [**\Zernio\Model\CreateStandaloneAdRequestCarouselCardsInnerVideo**](CreateStandaloneAdRequestCarouselCardsInnerVideo.md) |  | [optional]
**link_url** | **string** | Card destination URL. Defaults to the top-level linkUrl, or Meta&#39;s lead-form link when leadGenFormId is set and neither is provided. | [optional]
**headline** | **string** | Card headline, shown below the card image. | [optional]
**description** | **string** | Card description, shown under the headline. | [optional]
**call_to_action** | **string** | Card CTA override. Defaults to the top-level callToAction; same enum. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
