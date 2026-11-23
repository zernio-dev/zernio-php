# # AdSetMetricRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**ad_account_id** | **string** |  |
**campaign_id** | **string** |  |
**ad_set_id** | **string** |  |
**name** | **string** | The ad set name. null before its first sync. |
**currency** | **string** | The ad account currency every money metric of this ad set is in. Ad sets of different ad accounts are never summed together. |
**metrics** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) | Only the asked metrics, summed over every ad of the ad set with rates recomputed from the sums. reach is deduplicated across the range for Meta and TikTok when the platform returns it. |
**daily** | [**\Zernio\Model\CampaignMetricRowDailyInner[]**](CampaignMetricRowDailyInner.md) | With granularity&#x3D;day, one point per day with delivery, each carrying date and the asked metrics. | [optional]
**last_synced_at** | **string** | When the newest daily row of the ad set was synced. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
