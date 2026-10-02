# # CampaignAnalyticsResponseCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**status** | **string** | The platform&#39;s own campaign status in its vocabulary (Google ENABLED / PAUSED / REMOVED, Meta ACTIVE / PAUSED, ...), the same value as platformCampaignStatus on /v1/ads/campaigns and /v1/ads/tree. For a campaign synced before that value was stored it falls back to an active child ad&#39;s status, else the newest ad&#39;s. | [optional]
**budget** | [**\Zernio\Model\AdCampaignBudget**](AdCampaignBudget.md) |  | [optional]
**currency** | **string** | ISO 4217 code of the ad account (e.g. USD, THB). All money values in &#x60;summary&#x60; and &#x60;daily&#x60; are in this currency. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
