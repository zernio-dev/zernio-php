# # WebhookPayloadAccountAdsSyncFailedSync

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_successful_sync_at** | **\DateTime** |  |
**failure_count** | **int** | Consecutive failed sync attempts on the ad account&#39;s ads. |
**error_category** | **string** | ad_account_not_listed &#x3D; the platform no longer returns the ad account to this connection (access removed, or a platform-side change); sync_error &#x3D; the platform returned an error, see &#x60;error&#x60;; stale &#x3D; no sync succeeded and no error was recorded. New values may be added. |
**error** | **string** | Human-readable detail, for display and debugging. Branch on errorCategory. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
