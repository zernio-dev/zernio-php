# # BulkUploadResultResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**row_index** | **int** | 1-based index of the CSV data row (header excluded) | [optional]
**ok** | **bool** | Whether the row was created successfully | [optional]
**created_post_id** | **string** | ID of the created post. Present only when &#x60;ok&#x60; is true and not a dry run. | [optional]
**errors** | **string[]** | Machine-readable failure codes for this row. Present only when &#x60;ok&#x60; is false. Examples: &#x60;unknown_profile:&lt;id&gt;&#x60;, &#x60;no_account_for_platform:&lt;platform&gt;&#x60;, &#x60;schedule_time_missing&#x60;, &#x60;rate_limited:&lt;platform&gt;:@&lt;username&gt;:&lt;remaining&gt;&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
