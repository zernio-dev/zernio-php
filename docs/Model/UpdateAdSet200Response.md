# # UpdateAdSet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**budget** | [**\Zernio\Model\AdBudget**](AdBudget.md) |  | [optional]
**budget_level** | **string** |  | [optional]
**status** | **string** | As in PUT /v1/ads/ad-sets/{adSetId}/status: delivery derived from the switches read back. | [optional]
**platform_ad_set_status** | **string** | The ad set&#39;s own switch read back from the platform; null when it could not be read. | [optional]
**platform_campaign_status** | **string** |  | [optional]
**status_read_at** | **\DateTime** |  | [optional]
**status_updated** | **int** | 1 when the ad set&#39;s switch was written. | [optional]
**status_skipped** | **int** | 1 when a live read showed it already in the requested state. | [optional]
**status_skipped_reasons** | **string[]** |  | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** |  | [optional]
**roas_average_floor** | **float** |  | [optional]
**platform_specific_data** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
