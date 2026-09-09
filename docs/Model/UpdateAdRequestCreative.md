# # UpdateAdRequestCreative

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**promotion** | [**\Zernio\Model\MetaPromotion**](MetaPromotion.md) |  | [optional]
**creative_features** | **array<string,string>** | Meta Advantage+ creative enhancements. Map snake_case feature names to OPT_IN or OPT_OUT; Meta validates supported keys and unspecified features default to OPT_OUT. auto_promotion_tag is an enhancement; use the separate promotion field for an explicit offer. The deprecated standard_enhancements bundle is rejected by Meta. | [optional]
**headline** | **string** | Meta and LinkedIn (TikTok has no headline slot) | [optional]
**body** | **string** |  | [optional]
**description** | **string** | Link description slot (Meta &#x60;link_data.description&#x60; / &#x60;video_data.link_description&#x60;, LinkedIn creative description). | [optional]
**call_to_action** | **string** |  | [optional]
**link_url** | **string** |  | [optional]
**image_url** | **string** |  | [optional]
**video_url** | **string** |  | [optional]
**video_id** | **string** | Meta only. Reuse an already-uploaded ad video (from POST /v1/ads/videos or GET /v1/ads/videos) instead of re-uploading via videoUrl. | [optional]
**existing_creative_id** | **string** | Meta only. Repoint the ad at an existing library creative (from GET /v1/ads/creatives); all other creative fields are ignored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
