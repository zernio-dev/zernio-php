# # CreateAdCreativeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token and Page. |
**ad_account_id** | **string** | Platform ad account id (Meta act_&lt;n&gt;, Google customer id, LinkedIn account id, ...). |
**headline** | **string** |  |
**body** | **string** | Primary text |
**description** | **string** | Link description below the headline; omitted &#x3D; Meta scrapes the destination&#39;s OG description. | [optional]
**call_to_action** | **string** | CTA type (same whitelist as POST /v1/ads/create). | [optional] [default to 'LEARN_MORE']
**link_url** | **string** |  |
**image_url** | **string** | Publicly reachable image; uploaded to the account&#39;s library server-side. | [optional]
**image_hash** | **string** | Existing library image hash (POST /v1/ads/images or GET /v1/ads/images). | [optional]
**carousel_cards** | [**\Zernio\Model\CreateAdCreativeRequestCarouselCardsInner[]**](CreateAdCreativeRequestCarouselCardsInner.md) |  | [optional]
**url_tags** | **string** | Appended to every outbound URL (e.g. utm_source&#x3D;fb). | [optional]
**promotion** | [**Null**](Null.md) | Not supported. Meta validates creative_sourcing_spec.promotion_metadata_spec on the create call and then discards it, so a Promotion set through the Marketing API never reaches the creative. Any object is rejected with 400 invalid_field_value. Send null or omit the field, and set the Promotion on the ad in Ads Manager. Verified on 2026-09-11 across Graph v19.0 to v25.0 and every write path. | [optional]
**creative_features** | **array<string,string>** | Meta only. Applied to each new creative, including standalone and attach shapes. With creatives[], these are defaults; an item replaces the whole feature map, including an empty map. auto_promotion_tag is an Advantage+ enhancement, not the Ads Manager Promotion setting. | [optional]
**multi_advertiser** | **string** | Meta only. Multi-advertiser ads: whether Meta may show this ad alongside other advertisers&#39; in one unit. Meta auto-enrols since Aug 2024, so send OPT_OUT to leave. It is a top-level creative field, NOT a &#x60;creativeFeatures&#x60; key, and Meta rejects it there. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
