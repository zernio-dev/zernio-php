# # ListAds200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\Zernio\Model\Ad[]**](Ad.md) |  | [optional]
**backfill_pending** | **bool** | Present and true only on &#x60;202&#x60; responses: part of the requested date range is still being backfilled from the platform in the background. Retry the same request shortly; it returns 200 once the range is fully ingested. | [optional]
**pagination** | [**\Zernio\Model\Pagination**](Pagination.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
