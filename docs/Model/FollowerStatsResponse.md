# # FollowerStatsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\Zernio\Model\AccountWithFollowerStats[]**](AccountWithFollowerStats.md) |  | [optional]
**stats** | **array<string,\Zernio\Model\FollowerStatsResponseStatsValueInner[]>** |  | [optional]
**date_range** | [**\Zernio\Model\FollowerStatsResponseDateRange**](FollowerStatsResponseDateRange.md) |  | [optional]
**granularity** | **string** |  | [optional]
**pagination** | [**\Zernio\Model\AccountCursorPagination**](AccountCursorPagination.md) | Present when limit or cursor is sent, and on the default page of 25 that an API request without accountIds gets. | [optional]
**warning** | **string** | Only when the response was cut: the default page of 25 accounts (page through the rest with cursor), or a date range longer than a year (dateRange.from shows where the data starts). Both reasons are joined when they apply together. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
