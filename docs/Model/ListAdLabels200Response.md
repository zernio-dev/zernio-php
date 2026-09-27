# # ListAdLabels200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** | Meta act_&lt;n&gt;, or the resolved Google customer id | [optional]
**data** | [**\Zernio\Model\ListAdLabels200ResponseDataInner[]**](ListAdLabels200ResponseDataInner.md) |  | [optional]
**paging** | [**\Zernio\Model\ListAdLabels200ResponsePaging**](ListAdLabels200ResponsePaging.md) |  | [optional]
**cached_at** | **\DateTime** | Google only. When the served list was fetched from Google. | [optional]
**stale** | **bool** | Google only. True when Google quota was exhausted and the last cached list was served. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
