# # TikTokAdsPlatformQueryBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The Zernio id of the connected TikTok ads account. |
**ad_account_id** | **string** | The numeric TikTok advertiser id. |
**report_type** | **string** | Defaults to BASIC. | [optional] [default to 'BASIC']
**data_level** | **string** | The level of each row. |
**dimensions** | **string[]** | TikTok dimensions, 1 to 4. |
**metrics** | **string[]** | TikTok metrics, up to 100. |
**filtering** | [**\Zernio\Model\MetaAdsPlatformQueryBodyFilteringInner[]**](MetaAdsPlatformQueryBodyFilteringInner.md) | TikTok filters of field, operator and value, up to 25. A filter on an entity finer than dataLevel is refused. | [optional]
**from_date** | **\DateTime** | First day, YYYY-MM-DD, inclusive. |
**to_date** | **\DateTime** | Last day, YYYY-MM-DD, inclusive. |
**page_size** | **int** | Rows per page, up to 1,000. Defaults to 1,000. | [optional] [default to 1000]
**cursor** | **string** | The pagination.nextCursor of the previous page, unchanged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
