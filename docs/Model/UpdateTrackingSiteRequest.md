# # UpdateTrackingSiteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**domains** | **string[]** | Hosts allowed to send events, such as &#x60;brand.com&#x60;. Events from any other origin are dropped. | [optional]
**consent_mode** | [**\Zernio\Model\TrackingSiteConsentMode**](TrackingSiteConsentMode.md) |  | [optional]
**custom_hostname** | **string** | A subdomain of one of the site&#39;s domains, never the domain itself. &#x60;null&#x60; removes it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
