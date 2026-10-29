# # FacebookSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**draft** | **bool** | When true, creates the post as a draft in Facebook Publishing Tools instead of publishing immediately. Supported for feed posts (text, link, image, video) and reels. Not supported for stories. Drafts expire after ~30 days. | [optional] [default to false]
**carousel_cards** | [**\Zernio\Model\FacebookSettingsCarouselCardsInner[]**](FacebookSettingsCarouselCardsInner.md) | Renders the post as a multi-link carousel (organic Page post). Mutually exclusive with contentType&#x3D;story|reel.  - mediaItems must be provided with the same length, and all items must be images (no videos). - Each cards[i] adds the click-through link and headline for the image at mediaItems[i]. - Facebook truncates name at ~35 chars and description at ~30 chars on render; longer strings are accepted. | [optional]
**carousel_link** | **string** | Optional top-level \&quot;See more\&quot; destination shown on the carousel end card. Defaults to the first card&#39;s link when omitted. Only used together with carouselCards. | [optional]
**text_format_preset_id** | **string** | Facebook-defined preset ID that renders the post as large text on a colored background (Graph &#x60;text_format_preset_id&#x60;). Supply the raw numeric ID from Meta; we do not publish a catalog of presets and Facebook may change the available set.  Pages only (ignored on personal profiles and groups), and text-only feed posts only. Rejected with 400 when mediaItems or carouselCards are present, when contentType is story or reel, or when content is empty. An attachment makes Facebook drop the background silently, so those are rejected up front.  Length is NOT rejected: Facebook&#39;s composer stops offering a background at around 130 characters, but Meta documents no API limit, so longer content publishes and returns a warning instead.  A URL detected in the content is NOT attached as a link preview while a preset is set, because a link attachment also makes Facebook drop the background. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
