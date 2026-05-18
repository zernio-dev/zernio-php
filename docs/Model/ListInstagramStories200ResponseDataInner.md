# # ListInstagramStories200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Instagram media ID of the story. |
**media_type** | **string** | IMAGE / VIDEO / CAROUSEL_ALBUM | [optional]
**media_product_type** | **string** | Always &#39;STORY&#39; for this endpoint. | [optional]
**media_url** | **string** | Direct media URL. Null if Meta flagged the story for copyright. URL expires when the story expires. | [optional]
**permalink** | **string** | Public Instagram permalink to the story (only viewable while live). | [optional]
**thumbnail_url** | **string** | Thumbnail URL for video stories. | [optional]
**timestamp** | **\DateTime** | When the story was posted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
