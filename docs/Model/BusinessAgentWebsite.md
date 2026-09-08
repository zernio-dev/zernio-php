# # BusinessAgentWebsite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  |
**included_sub_domains** | **string[]** |  | [optional]
**included_url_patterns** | **string[]** | Only URLs containing one of these substrings are ingested. | [optional]
**excluded_sub_domains** | **string[]** |  | [optional]
**excluded_url_patterns** | **string[]** |  | [optional]
**single_urls** | **string[]** | Crawl only these exact pages instead of the whole site. | [optional]
**id** | **string** |  |
**crawl_status** | **string** | not_started, pending, in_progress, completed, completed_no_data or failed (see crawl_error). | [optional]
**crawl_error** | **string** |  | [optional]
**pages_crawled** | **int** |  | [optional]
**last_crawled_at** | **int** | Unix seconds. | [optional]
**created_at** | **int** | Unix seconds. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
