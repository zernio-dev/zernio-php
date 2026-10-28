# # TrackingWindow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**post_id** | **string** | The external post being tracked |
**account_id** | **string** |  |
**platform** | **string** |  |
**platform_post_id** | **string** | The post&#39;s id on the platform |
**starts_at** | **\DateTime** |  |
**ends_at** | **\DateTime** |  |
**status** | **string** |  |
**final_read_at** | **\DateTime** | When the closing read ran. Null until then. |
**completion_reason** | **string** | How the window closed. Null while it is open. |
**requested_by** | **string** |  |
**latest** | [**\Zernio\Model\TrackingWindowLatest**](TrackingWindowLatest.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
