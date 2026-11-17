# # ListAdAccountRuleAlerts200ResponseAlertsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_id** | **string** | The rule the alert belongs to. |
**id** | **string** |  |
**object_id** | **string** | Platform campaign, ad set or ad ID, or the id of the keyword or search term. |
**state** | **string** |  |
**severity** | **string** |  |
**consecutive_matches** | **int** |  |
**opened_at** | **\DateTime** |  |
**last_matched_at** | **\DateTime** |  |
**last_evaluated_at** | **\DateTime** | When a run last evaluated the object of this alert. Older than the latest run of its rule means that run did not evaluate it. |
**resolved_at** | **\DateTime** | Always null here: only open alerts are listed. |
**resolved_reason** | **string** | Always null here: only open alerts are listed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
