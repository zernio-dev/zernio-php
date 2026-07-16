# # DuplicateAdCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**deep_copy** | **bool** | Copy child ad sets + ads + creatives + targeting | [optional] [default to true]
**status_option** | **string** | ACTIVE &#x3D; launch the clone immediately (spends the moment LinkedIn approves it). PAUSED &#x3D; clone stays DRAFT, safe default. INHERITED_FROM_SOURCE &#x3D; mirror each entity&#39;s source status per-entity. Duplicating an ACTIVE campaign this way starts a second front of spend. | [optional] [default to 'PAUSED']
**start_time** | **\DateTime** | Reschedule the copied hierarchy&#39;s start time | [optional]
**end_time** | **\DateTime** |  | [optional]
**rename_strategy** | **string** |  | [optional]
**rename_prefix** | **string** |  | [optional]
**rename_suffix** | **string** |  | [optional]
**sync_after** | **bool** | Trigger ads discovery on the owning account after the copy succeeds | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
