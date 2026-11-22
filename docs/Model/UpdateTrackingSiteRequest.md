# # UpdateTrackingSiteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**pixels** | [**\Zernio\Model\TrackingSitePixel[]**](TrackingSitePixel.md) | The ad pixels the tag loads once consent allows, up to 20, one Microsoft UET tag at most. &#x60;null&#x60; or &#x60;[]&#x60; removes them. | [optional]
**consent_mode_bridge** | **bool** | Write the site&#39;s consent banner into Google Consent Mode v2: a denied default in the EEA, UK and Switzerland where the page sets none, then each update. | [optional]
**domains** | **string[]** | Hosts allowed to send events, such as &#x60;brand.com&#x60;. Events from any other origin are dropped. | [optional]
**consent_mode** | [**\Zernio\Model\TrackingSiteConsentMode**](TrackingSiteConsentMode.md) |  | [optional]
**custom_hostname** | **string** | A subdomain of one of the site&#39;s domains, never the domain itself. &#x60;null&#x60; removes it. | [optional]
**proxy_path** | **string** | The path your server forwards to the collector, such as &#x60;/zt&#x60;. &#x60;null&#x60; removes it. | [optional]
**google_tag_ids** | **string[]** | Google tag ids such as &#x60;GTM-XXXXXXX&#x60;, &#x60;G-XXXXXXXXXX&#x60; or &#x60;AW-XXXXXXXXXX&#x60;, up to 10. &#x60;null&#x60; or &#x60;[]&#x60; removes them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
