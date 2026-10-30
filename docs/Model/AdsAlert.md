# # AdsAlert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable for the same problem on the same entity. Pass it to POST /v1/ads/alerts/{alertId}/dismiss. | [optional]
**kind** | **string** |  | [optional]
**severity** | **string** |  | [optional]
**title** | **string** |  | [optional]
**message** | **string** | What happened, in plain words. For a rejection or delivery issue, the platform&#39;s own reason when it gave one. | [optional]
**platform** | **string** |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**entity** | [**\Zernio\Model\AdsAlertEntity**](AdsAlertEntity.md) |  | [optional]
**ad_id** | **string** | The Zernio ad id when the entity is an ad, for GET /v1/ads/{adId}. | [optional]
**account_id** | **string** | The Zernio ads connection, on connection_lost and sync_failing alerts. | [optional]
**currency** | **string** |  | [optional]
**detected_at** | **\DateTime** |  | [optional]
**fix** | [**\Zernio\Model\AdsAlertFix**](AdsAlertFix.md) |  | [optional]
**dismissed** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
