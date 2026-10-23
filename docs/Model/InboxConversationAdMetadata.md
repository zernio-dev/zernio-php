# # InboxConversationAdMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ctwa_clid** | **string** | WhatsApp only. Meta&#39;s click identifier, the value to forward to the Meta Conversions API for Business Messaging. Meta omits it on some numbers, so a WhatsApp referral can arrive without it. | [optional]
**ctwa_source_id** | **string** | WhatsApp only. The Meta ad ID the user clicked (or the post ID when &#x60;ctwa_source_type&#x60; is post). This is the WhatsApp equivalent of meta_ad_id. | [optional]
**ctwa_source_type** | **string** | WhatsApp only. What the user clicked, as supplied by Meta (for example ad or post). | [optional]
**ctwa_source_url** | **string** | WhatsApp only. Meta&#39;s URL for the ad that was clicked, normally an fb.me short link. | [optional]
**ctwa_headline** | **string** | WhatsApp only. Headline of the ad creative at click time. | [optional]
**ctwa_body** | **string** | WhatsApp only. Body text of the ad creative at click time. | [optional]
**ctwa_media_type** | **string** | WhatsApp only. Media type of the ad creative, image or video. | [optional]
**ctwa_image_url** | **string** | WhatsApp only. Image of the ad creative at click time (image ads). | [optional]
**ctwa_video_url** | **string** | WhatsApp only. Video of the ad creative at click time (video ads). | [optional]
**ctwa_thumbnail_url** | **string** | WhatsApp only. Thumbnail of the ad video at click time (video ads). | [optional]
**ctwa_captured_at** | **\DateTime** | WhatsApp only. When Zernio stored this referral. Always present when a WhatsApp referral was captured. | [optional]
**meta_ad_id** | **string** | Instagram and Facebook only. The Meta ad ID the user clicked. Present for ad clicks; absent when the capture came from an ig.me / m.me ref link. | [optional]
**meta_ad_source** | **string** | Instagram and Facebook only. Meta-supplied source identifier: ADS for ad clicks; SHORTLINK, SHORTLINKS or IGME-SOURCE-LINK for ref links (treat as opaque). | [optional]
**meta_ad_type** | **string** | Instagram and Facebook only. Meta-supplied referral type, for example OPEN_THREAD. | [optional]
**meta_ad_ref** | **string** | Instagram and Facebook only. The ref parameter passed through from the ad creative or the ig.me / m.me link. | [optional]
**meta_ad_title** | **string** | Instagram and Facebook only. Title of the ad creative at click time. | [optional]
**meta_ad_photo_url** | **string** | Instagram and Facebook only. Image of the ad creative at click time. | [optional]
**meta_ad_video_url** | **string** | Instagram and Facebook only. Video of the ad creative at click time. | [optional]
**meta_ad_post_id** | **string** | Instagram and Facebook only. The organic post the ad promoted, when the ad was a boosted post. | [optional]
**meta_ad_product_id** | **string** | Instagram and Facebook only. The catalogue product the user clicked, for product ads. | [optional]
**meta_ad_flow_id** | **string** | Instagram and Facebook only. The Meta flow the ad launched, for flow ads. | [optional]
**meta_ad_captured_at** | **\DateTime** | Instagram and Facebook only. When Zernio stored this referral. Always present when an Instagram or Facebook referral was captured. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
