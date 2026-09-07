# # GetCampaignTargeting200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**devices** | [**\Zernio\Model\GetCampaignTargeting200ResponseDevicesInner[]**](GetCampaignTargeting200ResponseDevicesInner.md) |  | [optional]
**locations** | [**\Zernio\Model\GetCampaignTargeting200ResponseLocationsInner[]**](GetCampaignTargeting200ResponseLocationsInner.md) |  | [optional]
**languages** | [**\Zernio\Model\GetCampaignTargeting200ResponseLanguagesInner[]**](GetCampaignTargeting200ResponseLanguagesInner.md) |  | [optional]
**cached_at** | **\DateTime** | When this targeting was fetched from Google. Null when it was never served from cache. | [optional]
**stale** | **bool** | True when Google&#39;s daily API quota was exhausted and this is the last successful fetch, not a live read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
