# # MetaDatasetAuditEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**last7_days** | **int** |  |
**last24_hours** | **int** |  |
**last_seen_hour** | **\DateTime** | Start of the last hour Meta counted the event in: Meta&#39;s stats are hourly. |
**daily** | [**\Zernio\Model\MetaDatasetAuditEventsInnerDailyInner[]**](MetaDatasetAuditEventsInnerDailyInner.md) |  |
**server_share_pct** | **float** | Percent of the window&#39;s events received through the Conversions API. Null when not measured (only the 12 busiest events are split by source). |
**match_quality** | **float** | Event Match Quality, 0 to 10. Meta rates 6 and above as good. |
**match_keys** | [**\Zernio\Model\MetaDatasetAuditEventsInnerMatchKeysInner[]**](MetaDatasetAuditEventsInnerMatchKeysInner.md) |  |
**diagnostics** | [**\Zernio\Model\MetaDatasetAuditEventsInnerDiagnosticsInner[]**](MetaDatasetAuditEventsInnerDiagnosticsInner.md) |  |
**dedup** | [**\Zernio\Model\MetaDatasetAuditEventsInnerDedupInner[]**](MetaDatasetAuditEventsInnerDedupInner.md) | Per deduplication key, the share of browser and server copies carrying it and of browser copies Meta paired through it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
