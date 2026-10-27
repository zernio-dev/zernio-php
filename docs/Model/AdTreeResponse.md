# # AdTreeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaigns** | [**\Zernio\Model\AdTreeCampaign[]**](AdTreeCampaign.md) |  | [optional]
**pagination** | [**\Zernio\Model\Pagination**](Pagination.md) |  | [optional]
**synced_at** | **\DateTime** | When the most recently synced ad on this page was last read from the platform. Null before the first sync. | [optional]
**previous_range** | [**\Zernio\Model\AdTreeResponsePreviousRange**](AdTreeResponsePreviousRange.md) |  | [optional]
**backfill_pending** | **bool** | Meta only. Present and true while historical data is being backfilled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
