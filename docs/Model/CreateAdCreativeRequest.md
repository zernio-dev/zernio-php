# # CreateAdCreativeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token and Page. |
**ad_account_id** | **string** | Meta ad account id (act_&lt;n&gt;). |
**headline** | **string** |  |
**body** | **string** | Primary text |
**description** | **string** | Link description below the headline; omitted &#x3D; Meta scrapes the destination&#39;s OG description. | [optional]
**call_to_action** | **string** | CTA type (same whitelist as POST /v1/ads/create). | [optional] [default to 'LEARN_MORE']
**link_url** | **string** |  |
**image_url** | **string** | Publicly reachable image; uploaded to the account&#39;s library server-side. | [optional]
**image_hash** | **string** | Existing library image hash (POST /v1/ads/images or GET /v1/ads/images). | [optional]
**carousel_cards** | [**\Zernio\Model\CreateAdCreativeRequestCarouselCardsInner[]**](CreateAdCreativeRequestCarouselCardsInner.md) |  | [optional]
**url_tags** | **string** | Appended to every outbound URL (e.g. utm_source&#x3D;fb). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
