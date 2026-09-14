# # GetCampaignAdSchedule200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **string** |  | [optional]
**schedule** | [**\Zernio\Model\AdScheduleWindow[]**](AdScheduleWindow.md) |  | [optional]
**serves_around_the_clock** | **bool** | True when the campaign carries no ad schedule at all, so it can serve at any time. | [optional]
**cached_at** | **\DateTime** |  | [optional]
**stale** | **bool** | True when a quota-exhausted read served the last-good copy. | [optional]
**performance** | [**\Zernio\Model\GetCampaignAdSchedule200ResponsePerformance**](GetCampaignAdSchedule200ResponsePerformance.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
