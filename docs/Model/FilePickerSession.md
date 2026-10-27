# # FilePickerSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Public session id, echoed as &#x60;pickerSessionId&#x60; on the redirect and as &#x60;picker.sessionId&#x60; on the webhook. |
**url** | **string** | The hosted picker page. Open it in the end user&#39;s browser (redirect or new tab, not an iframe). It is a credential: single-use and valid until &#x60;expiresAt&#x60;. |
**expires_at** | **\DateTime** | 30 minutes after creation. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
