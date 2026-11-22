# # ConversionAuditMonitor

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The monitor id. |
**host** | **string** | The watched host, lowercase and without &#x60;www.&#x60;. |
**report_url** | **string** | The host&#39;s public report on is-bleeding.com. |
**score** | **int** | The score of the last check (0 to 100), or null before the first readable scan. |
**grade** | **string** | The grade of the last check. |
**score_history** | [**\Zernio\Model\ConversionAuditMonitorScoreHistoryInner[]**](ConversionAuditMonitorScoreHistoryInner.md) | The score of each of the last 30 checks, oldest first. |
**created_at** | **\DateTime** |  |
**last_checked_at** | **\DateTime** |  |
**next_check_at** | **\DateTime** | When the next daily check is due. |
**last_alerted_at** | **\DateTime** | When the last alert email went out. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
