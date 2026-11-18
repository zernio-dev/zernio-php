# # TrackingLinkStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_date** | **\DateTime** |  |
**to_date** | **\DateTime** |  |
**clicks** | **int** | Human clicks in the range. |
**conversions** | **int** | Conversions still counted whose time falls in the range. |
**conversion_rate** | **float** | Conversions per click. Null without clicks. |
**revenue** | [**\Zernio\Model\TrackingLinkStatsRevenueInner[]**](TrackingLinkStatsRevenueInner.md) | The conversions&#39; value summed per currency, most conversions first. |
**destinations** | [**\Zernio\Model\TrackingLinkStatsDestinationsInner[]**](TrackingLinkStatsDestinationsInner.md) | The link&#39;s current destinations, each with its clicks in the range. |
**former_destination_clicks** | **int** | Clicks on destinations the link no longer has (an edited or removed URL). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
