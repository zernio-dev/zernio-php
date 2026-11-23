# # CampaignMetricRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**ad_account_id** | **string** |  |
**campaign_id** | **string** |  |
**results** | **array<string,float>** | Without metrics, each uploaded result metric summed over the range, by metric key. | [optional]
**name** | **string** | With metrics, the campaign name. null before its first sync. | [optional]
**currency** | **string** | With metrics, the ad account currency every money metric of this campaign is in. Campaigns of different ad accounts are never summed together. | [optional]
**metrics** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) | With metrics, only the asked metrics, summed over every ad of the campaign with rates recomputed from the sums. reach is deduplicated across the range for Meta and TikTok when the platform returns it. | [optional]
**daily** | [**\Zernio\Model\CampaignMetricRowDailyInner[]**](CampaignMetricRowDailyInner.md) | With granularity&#x3D;day, one point per day with delivery, each carrying date and the asked metrics. | [optional]
**last_synced_at** | **string** | With metrics, when the newest daily row of the campaign was synced. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
