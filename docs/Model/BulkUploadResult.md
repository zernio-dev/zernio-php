# # BulkUploadResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | Number of data rows processed from the CSV | [optional]
**valid** | **int** | Count of rows that succeeded (results[].ok &#x3D;&#x3D;&#x3D; true) | [optional]
**invalid** | **int** | Count of rows that failed (total - valid) | [optional]
**results** | [**\Zernio\Model\BulkUploadResultResultsInner[]**](BulkUploadResultResultsInner.md) | One entry per CSV data row, in row order. | [optional]
**warnings** | **string[]** | Top-level advisory warnings (e.g. &#x60;rows_exceed_advisory_limit:500&#x60;). Empty when none. | [optional]
**rate_limited_accounts** | [**\Zernio\Model\BulkUploadResultRateLimitedAccountsInner[]**](BulkUploadResultRateLimitedAccountsInner.md) | Present only when one or more rows targeted an account currently in cooldown. Lets callers map &#x60;rate_limited:*&#x60; row errors back to structured metadata without parsing the error strings. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
