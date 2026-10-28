# # AdTracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pixel_id** | **string** | Meta Pixel ID to attach for offsite-conversion measurement, or the Reddit pixel of the new ad group. | [optional]
**url_tags** | [**\Zernio\Model\UpdateAdTrackingTagsRequestUrlTagsInner[]**](UpdateAdTrackingTagsRequestUrlTagsInner.md) | Click-URL params. Meta: stored on the creative as &#x60;url_tags&#x60; and returned by GET /v1/ads/{adId}/tracking-tags. App-promotion linkUrl stays byte-identical to promotedObject.objectStoreUrl. Meta dynamic macros ({{ad.id}}, {{campaign.id}}, {{placement}}, ...) are sent through unescaped so Meta expands them; every other character is percent-encoded. ChatGPT (OpenAI): the same encoding, with OpenAI&#39;s macros &#x60;{campaign_id}&#x60;, &#x60;{ad_group_id}&#x60;, &#x60;{ad_id}&#x60; and &#x60;{oppref}&#x60; (click id) passed through raw. OpenAI expands macros here, not inside &#x60;linkUrl&#x60;. | [optional]
**zernio_tag** | **bool** | POST /v1/ads/create on Meta and Google only. Opt-in: set &#x60;true&#x60; and the ad carries &#x60;zrn&#x3D;&lt;platform ad id&gt;&#x60; on its landing URL so orders and events tied to the landing URL map back to the ad. Meta: &#x60;{ key: zrn, value: &#39;{{ad.id}}&#39; }&#x60; is appended after your &#x60;urlTags&#x60;, which are sent unchanged; a &#x60;zrn&#x60; key you send yourself is kept. Skipped for lead forms, call ads, &#x60;existingCreativeId&#x60; and app promotion. Google (Display and Search): the ad&#39;s &#x60;final_url_suffix&#x60; is set to &#x60;zrn&#x3D;{creative}&#x60; only when the ad inherits no suffix from its ad group, campaign or account; when one exists the ad is left untouched (your suffix keeps applying) and attribution uses the click&#39;s &#x60;gclid&#x60;. If the inherited suffix cannot be read or Google rejects the tag, the ad is created untagged. Existing ads are never changed. Omitted or &#x60;false&#x60; creates the ad with no Zernio tag. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
