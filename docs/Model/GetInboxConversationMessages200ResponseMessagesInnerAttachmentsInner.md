# # GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type** | **string** | On Instagram and Facebook a shared reel, post or ad reaches Zernio with no type of its own (Meta&#39;s &#x60;unsupported_type&#x60;) and is resolved from the media&#39;s Content-Type at ingest into &#x60;image&#x60;, &#x60;video&#x60;, &#x60;audio&#x60; or &#x60;file&#x60; with &#x60;originalType: \&quot;unsupported_type\&quot;&#x60;. &#x60;unsupported_type&#x60; is returned only when the CDN could not be classified in time. | [optional]
**original_type** | **string** | Instagram and Facebook only, and present only when it differs from &#x60;type&#x60;. Meta&#39;s own type before normalization: &#x60;ig_reel&#x60; and &#x60;reel&#x60; become &#x60;video&#x60;, while &#x60;ig_post&#x60;, &#x60;post&#x60;, &#x60;ig_story&#x60; and &#x60;story_mention&#x60; become &#x60;share&#x60;. A story mention is &#x60;type: \&quot;share\&quot;&#x60; with &#x60;originalType: \&quot;story_mention\&quot;&#x60;; render on this field, since &#x60;share&#x60; alone is ambiguous. &#x60;originalType: \&quot;unsupported_type\&quot;&#x60; marks a share Meta did not classify, resolved by content type: &#x60;refreshUrl&#x60; cannot re-mint it (Meta answers &#x60;is_unsupported&#x60; with no attachments for the message node), so download it when the &#x60;message.received&#x60; webhook arrives. | [optional]
**mime_type** | **string** | MIME type of the media when Zernio knows it. On Instagram and Facebook it is set for shares resolved by content type (&#x60;originalType: \&quot;unsupported_type\&quot;&#x60;). | [optional]
**url** | **string** | Direct media link. On Instagram and Facebook this is a signed Meta CDN url that EXPIRES: use it now, do not store it. Persist &#x60;refreshUrl&#x60; instead. | [optional]
**refresh_url** | **string** | Instagram and Facebook only. Endpoint that resolves this attachment to a working url every time, re-minting it from Meta when the stored one has expired. Safe to store and render indefinitely, except for an attachment with &#x60;originalType: \&quot;unsupported_type\&quot;&#x60;: Meta cannot re-serve those, so the endpoint answers 404 once the url has expired. | [optional]
**filename** | **string** |  | [optional]
**preview_url** | **string** |  | [optional]
**payload** | **array<string,mixed>** | Template content (title, subtitle, image, buttons) when type is template | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
