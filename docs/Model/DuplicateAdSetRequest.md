# # DuplicateAdSetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**campaign_id** | **string** | Destination platform campaign id (defaults to the source&#39;s campaign) | [optional]
**deep_copy** | **bool** | Copy child ads + creatives | [optional] [default to true]
**status_option** | **string** |  | [optional] [default to 'PAUSED']
**start_time** | **\DateTime** | Reschedule the copy&#39;s start (ISO 8601). A value without an offset (&#x60;YYYY-MM-DD&#x60;, &#x60;YYYY-MM-DD HH:MM:SS&#x60; or &#x60;YYYY-MM-DDTHH:MM:SS&#x60;) is read in the ad account timezone. | [optional]
**end_time** | **\DateTime** | Reschedule the copy&#39;s end, read like &#x60;startTime&#x60;; a date-only end runs to 23:59:59 local. | [optional]
**rename_strategy** | **string** |  | [optional]
**rename_prefix** | **string** |  | [optional]
**rename_suffix** | **string** |  | [optional]
**sync_after** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
