# # GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type** | **string** |  | [optional]
**original_type** | **string** | Instagram and Facebook only, and present only when it differs from &#x60;type&#x60;. Meta&#39;s own type before normalization: &#x60;ig_reel&#x60; and &#x60;reel&#x60; become &#x60;video&#x60;, while &#x60;ig_post&#x60;, &#x60;post&#x60;, &#x60;ig_story&#x60; and &#x60;story_mention&#x60; become &#x60;share&#x60;. A story mention is &#x60;type: \&quot;share\&quot;&#x60; with &#x60;originalType: \&quot;story_mention\&quot;&#x60;; render on this field, since &#x60;share&#x60; alone is ambiguous. | [optional]
**url** | **string** | Direct media link. On Instagram and Facebook this is a signed Meta CDN url that EXPIRES: use it now, do not store it. Persist &#x60;refreshUrl&#x60; instead. | [optional]
**refresh_url** | **string** | Instagram and Facebook only. Endpoint that resolves this attachment to a working url every time, re-minting it from Meta when the stored one has expired. Safe to store and render indefinitely. | [optional]
**filename** | **string** |  | [optional]
**preview_url** | **string** |  | [optional]
**payload** | **array<string,mixed>** | Template content (title, subtitle, image, buttons) when type is template | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
