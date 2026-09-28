# # CreateTrackingTagRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** | Meta ad account id, e.g. &#x60;act_123456789&#x60;. Required by this endpoint but ignored for OpenAI Ads. |
**name** | **string** |  |
**default_event_type** | **string** | OpenAI Ads only (ignored by Meta). When set, also provisions a standard conversion event setting wired to the new pixel, so &#x60;goal: conversions&#x60; ad creates on &#x60;POST /v1/ads/create&#x60; have an event to reference immediately. | [optional]
**automatic_matching_fields** | **string[]** | Pinterest only (400 elsewhere). Customer data the new tag matches automatically (automatic enhanced match): &#x60;em&#x60; email, &#x60;ph&#x60; phone, &#x60;fn&#x60;/&#x60;ln&#x60; name, &#x60;ge&#x60; gender, &#x60;db&#x60; date of birth, &#x60;ct&#x60;/&#x60;st&#x60;/&#x60;zp&#x60;/&#x60;country&#x60; location, &#x60;external_id&#x60;. Pinterest has one switch for the name and one for the location, so &#x60;fn&#x60; turns on &#x60;ln&#x60; too and any location code turns on all four. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
