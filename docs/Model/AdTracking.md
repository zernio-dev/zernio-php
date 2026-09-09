# # AdTracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pixel_id** | **string** | Meta Pixel ID to attach for offsite-conversion measurement. | [optional]
**url_tags** | [**\Zernio\Model\UpdateAdTrackingTagsRequestUrlTagsInner[]**](UpdateAdTrackingTagsRequestUrlTagsInner.md) | Click-URL params stored on the creative as &#x60;url_tags&#x60; and returned by GET /v1/ads/{adId}/tracking-tags. App-promotion linkUrl stays byte-identical to promotedObject.objectStoreUrl. Meta dynamic macros ({{ad.id}}, {{campaign.id}}, {{placement}}, ...) are sent through unescaped so Meta expands them; every other character is percent-encoded. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
