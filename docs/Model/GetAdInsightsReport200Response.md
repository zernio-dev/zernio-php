# # GetAdInsightsReport200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_run_id** | **string** |  | [optional]
**status** | **string** | Meta async_status: Job Not Started, Job Started, Job Running, Job Completed, Job Failed, Job Skipped. | [optional]
**percent_completion** | **int** |  | [optional]
**date_start** | **string** |  | [optional]
**date_stop** | **string** |  | [optional]
**data** | **object[]** | Present only when status is Job Completed. | [optional]
**paging** | [**\Zernio\Model\GetAdInsightsReport200ResponsePaging**](GetAdInsightsReport200ResponsePaging.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
