# # FollowerStatsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\Zernio\Model\AccountWithFollowerStats[]**](AccountWithFollowerStats.md) |  | [optional]
**stats** | **array<string,\Zernio\Model\FollowerStatsResponseStatsValueInner[]>** |  | [optional]
**date_range** | [**\Zernio\Model\FollowerStatsResponseDateRange**](FollowerStatsResponseDateRange.md) |  | [optional]
**granularity** | **string** |  | [optional]
**pagination** | [**\Zernio\Model\AccountCursorPagination**](AccountCursorPagination.md) | Present when limit or cursor is sent, and on the default page of 25 that an API request without accountIds gets. | [optional]
**warning** | **string** | Only when the default page of 25 cut the list. Page through the rest with cursor. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
