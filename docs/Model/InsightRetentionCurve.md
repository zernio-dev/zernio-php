# # InsightRetentionCurve

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_date** | **string** | fromDate when given; otherwise the publish date, so the curve covers the video lifetime. |
**to_date** | **string** |  |
**provisional_since** | **string** |  |
**duration_seconds** | **float** |  |
**segment_metrics_available** | **bool** | False when YouTube has no startedWatching and stoppedWatching for the video; they read 0. |
**points** | [**\Zernio\Model\InsightRetentionPoint[]**](InsightRetentionPoint.md) | Up to 100 points, ascending; empty when YouTube has no curve, as on videos with very few views. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
