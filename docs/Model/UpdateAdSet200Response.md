# # UpdateAdSet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**budget** | [**\Zernio\Model\AdBudget**](AdBudget.md) |  | [optional]
**budget_level** | **string** |  | [optional]
**status** | **string** | As in PUT /v1/ads/ad-sets/{adSetId}/status: delivery derived from the switches read back. | [optional]
**platform_ad_set_status** | **string** | The ad set&#39;s status read back from the platform, as in PUT /v1/ads/ad-sets/{adSetId}/status (Meta and Reddit return the ad set&#39;s effective_status); null when it could not be read. | [optional]
**platform_campaign_status** | **string** |  | [optional]
**status_read_at** | **\DateTime** |  | [optional]
**status_updated** | **int** | 1 when the ad set&#39;s switch was written. | [optional]
**status_skipped** | **int** | 1 when a live read showed it already in the requested state. | [optional]
**status_skipped_reasons** | **string[]** |  | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** |  | [optional]
**roas_average_floor** | **float** |  | [optional]
**platform_specific_data** | **object** |  | [optional]
**targeting** | **object** | Present when &#x60;placements&#x60; or &#x60;targeting&#x60; was sent. The ad set&#39;s full Meta targeting as written (Meta snake_case). The same snake_case object is stored as the ad set&#39;s and its ads&#39; &#x60;targeting&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
