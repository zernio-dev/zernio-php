# # GetAnalyticsDashboard200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_range** | [**\Zernio\Model\GetAnalyticsDashboard200ResponseDateRange**](GetAnalyticsDashboard200ResponseDateRange.md) |  |
**totals** | [**\Zernio\Model\AnalyticsDashboardTotals**](AnalyticsDashboardTotals.md) |  |
**previous_totals** | [**\Zernio\Model\AnalyticsDashboardTotals**](AnalyticsDashboardTotals.md) |  | [optional]
**followers** | [**\Zernio\Model\AnalyticsDashboardFollowers**](AnalyticsDashboardFollowers.md) |  |
**previous_followers** | [**\Zernio\Model\AnalyticsDashboardFollowers**](AnalyticsDashboardFollowers.md) |  | [optional]
**daily** | [**\Zernio\Model\GetAnalyticsDashboard200ResponseDailyInner[]**](GetAnalyticsDashboard200ResponseDailyInner.md) | One entry per day of the window, days without data included as zeros. |
**top_posts** | [**\Zernio\Model\AnalyticsDashboardPost[]**](AnalyticsDashboardPost.md) |  |
**recent_posts** | [**\Zernio\Model\AnalyticsDashboardPost[]**](AnalyticsDashboardPost.md) |  |
**data_as_of** | **\DateTime** | When the most recently synced account in scope was last synced. Null if none has synced yet. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
