# # AutomationPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evaluated_at** | **\DateTime** |  |
**today** | **\DateTime** | Today in the ad account timezone. |
**timezone** | **string** |  |
**timezone_assumed** | **bool** | True when the ad account timezone is unknown and UTC was used. |
**currency** | **string** |  |
**hourly_through** | **\DateTime** | Where the hourly windows (&#x60;last_complete_hour&#x60;, &#x60;last_3h&#x60;, &#x60;today_so_far&#x60;) ended: the end of the latest hour a sync has settled. Null when the rule has none or they could not be read. | [optional]
**evaluated** | **int** |  |
**matched** | **int** |  |
**truncated** | **bool** | True when more subjects were judged than &#x60;limit&#x60; lists. |
**subjects** | [**\Zernio\Model\AutomationPreviewSubjectsInner[]**](AutomationPreviewSubjectsInner.md) | Matches first, up to &#x60;limit&#x60;. |
**groups** | [**\Zernio\Model\AutomationPreviewGroupsInner[]**](AutomationPreviewGroupsInner.md) | Each group&#39;s totals against the conditions, when the rule has &#x60;subjects.groups&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
