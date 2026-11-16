# # ProfileCallLimit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **float** | The limit, or null when none is set at this level. |
**used** | **float** | Used in the current window, calls still in progress included. |
**remaining** | **float** | What is left before the limit; null when there is no limit. |
**window** | **string** | &#x60;concurrent&#x60; counts calls in progress now; the rolling windows end now. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
