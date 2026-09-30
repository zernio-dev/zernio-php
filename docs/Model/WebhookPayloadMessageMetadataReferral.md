# # WebhookPayloadMessageMetadataReferral

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ctwa_clid** | **string** | Meta&#39;s GCLID-equivalent click identifier. | [optional]
**source_id** | **string** |  | [optional]
**source_type** | **string** |  | [optional]
**source_url** | **string** |  | [optional]
**headline** | **string** |  | [optional]
**body** | **string** |  | [optional]
**media_type** | **string** |  | [optional]
**image_url** | **string** |  | [optional]
**video_url** | **string** |  | [optional]
**thumbnail_url** | **string** |  | [optional]
**welcome_message** | [**\Zernio\Model\WebhookPayloadMessageMetadataReferralWelcomeMessage**](WebhookPayloadMessageMetadataReferralWelcomeMessage.md) |  | [optional]
**ad_id** | **string** | Facebook Messenger CTM / Instagram CTD only. The Meta ad ID the user clicked to start the conversation. | [optional]
**ref** | **string** | The &#x60;ref&#x60; parameter passed through from the Meta ad creative or from an ig.me / m.me link. Instagram / Facebook Messenger only. | [optional]
**source** | **string** | Meta-supplied source identifier (&#x60;ADS&#x60; for ad clicks; &#x60;SHORTLINK&#x60;, &#x60;SHORTLINKS&#x60; or &#x60;IGME-SOURCE-LINK&#x60; for ref links). Instagram / Facebook Messenger only. | [optional]
**type** | **string** | Meta-supplied referral type (e.g. &#x60;OPEN_THREAD&#x60;). Instagram / Facebook Messenger only. | [optional]
**referer_uri** | **string** | URI of the originating site, when Meta supplies one (m.me links opened from the web). Facebook Messenger only. | [optional]
**ads_context_data** | [**\Zernio\Model\WebhookPayloadMessageMetadataReferralAdsContextData**](WebhookPayloadMessageMetadataReferralAdsContextData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
