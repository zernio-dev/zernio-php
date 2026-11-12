# # GetEventsOverview200ResponsePlatformsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**platform** | **string** | Ad platform, such as &#x60;metaads&#x60; or &#x60;googleads&#x60;. | [optional]
**account_name** | **string** |  | [optional]
**destination_name** | **string** | The destination (pixel, dataset or conversion action) id. | [optional]
**destination_id** | **string** | The destination (pixel, dataset or conversion action) id, the same as the forwarding rule&#39;s destinationId. | [optional]
**sent_today** | **int** | Events the platform accepted today. | [optional]
**failed_today** | **int** | Events that failed for good today. | [optional]
**last_sent_at** | **\DateTime** | Last accepted send in the last 30 days. | [optional]
**last_event_name** | **string** | Name of the event in that send. | [optional]
**last_error** | **string** | The platform&#39;s error on the last failed send in the last 30 days. | [optional]
**fix_url** | **string** | Where to fix a failing destination. Always &#x60;null&#x60; for now. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
