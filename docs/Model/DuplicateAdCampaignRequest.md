# # DuplicateAdCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**platform** | **string** |  |
**deep_copy** | **bool** | Copy child ad sets + ads + creatives + targeting | [optional] [default to true]
**status_option** | **string** | ACTIVE &#x3D; launch the clone immediately (spends the moment LinkedIn approves it). PAUSED &#x3D; clone stays DRAFT, safe default. Google only accepts PAUSED. INHERITED_FROM_SOURCE &#x3D; mirror each entity&#39;s source status per-entity. Duplicating an ACTIVE campaign this way starts a second front of spend. | [optional] [default to 'PAUSED']
**start_time** | **\DateTime** | Reschedule the copied hierarchy&#39;s start (ISO 8601). TikTok defaults to a start a few minutes after the copy.  - Meta and TikTok: a value without an offset (&#x60;YYYY-MM-DD&#x60;, &#x60;YYYY-MM-DD HH:MM:SS&#x60; or &#x60;YYYY-MM-DDTHH:MM:SS&#x60;) is read in the ad account timezone. - LinkedIn: ad accounts carry no timezone, so it is read as UTC. - Google: the date is used as a whole day in the customer timezone. | [optional]
**end_time** | **\DateTime** | Reschedule the copied hierarchy&#39;s end, read like &#x60;startTime&#x60;; a date-only end runs to 23:59:59 local. Defaults to the source&#39;s end. | [optional]
**rename_strategy** | **string** | Meta&#39;s native &#x60;rename_strategy&#x60; values:  - &#x60;DEEP_RENAME&#x60;: renames the copied campaign and every copied child (ad sets, ads) with &#x60;renamePrefix&#x60; / &#x60;renameSuffix&#x60;. - &#x60;ONLY_TOP_LEVEL_RENAME&#x60;: renames only the copied campaign; children keep their source names. - &#x60;NO_RENAME&#x60;: keeps every source name. Google returns 400, since its campaign names are unique per account.  With no rename option at all, Meta appends its own &#x60; - Copy&#x60; suffix; LinkedIn defaults to &#x60;DEEP_RENAME&#x60; (its campaign group and campaigns are renamed). Ignored on TikTok, where &#x60;renamePrefix&#x60; / &#x60;renameSuffix&#x60; apply to every copied object. | [optional]
**rename_prefix** | **string** | Text prepended to each renamed object&#39;s name. | [optional]
**rename_suffix** | **string** | Text appended to each renamed object&#39;s name. On LinkedIn and Google an omitted suffix defaults to &#x60; (Copy)&#x60; when no prefix is sent. | [optional]
**sync_after** | **bool** | Trigger ads discovery on the owning account after the copy succeeds | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
