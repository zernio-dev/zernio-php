# # InsightMetricsResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity** | **string** |  |
**account_id** | **string** |  |
**platform_post_id** | **string** |  |
**platform** | **string** |  |
**granularity** | **string** |  |
**group_by** | **string** | none, demographic, hour, keyword, or the Search Console dimensions grouped, such as query,country. |
**timeframe** | **string** | Instagram demographics: the period Instagram aggregated. |
**from_date** | **string** | Null for a lifetime or snapshot demographic breakdown. |
**to_date** | **string** |  |
**unavailable_metrics** | [**\Zernio\Model\InsightMetricsResponseMetaUnavailableMetricsInner[]**](InsightMetricsResponseMetaUnavailableMetricsInner.md) | Metrics asked that the platform could not answer for this account, with the reason. |
**units** | [**array<string,\Zernio\Model\InsightMetricsResponseMetaUnitsValue>**](InsightMetricsResponseMetaUnitsValue.md) | Monetary metrics: the unit and currency the platform reports them in. Demographic metrics: count, share (0 to 1) or percent (0 to 100). |
**data_delay** | **string** | How late the platform reports these metrics, in words. Search Console: the rows cover final days only. |
**provisional_since** | **string** | First day the platform may still revise or have missing. Post insights only; null on account insights and when every day is final. |
**stale** | **bool** | True when the platform refused the refresh and the answer is the last stored copy. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
