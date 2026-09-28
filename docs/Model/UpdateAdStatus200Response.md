# # UpdateAdStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**updated** | **int** | 1 when the switch was written, 0 when skipped | [optional]
**skipped** | **int** | 1 when skipped (terminal status, or the ad&#39;s own switch already in the target state), else 0 | [optional]
**status** | **string** | The ad&#39;s delivery status after the call, as the platform reports it when it can be read back (e.g. &#x60;paused&#x60; for an ad switched on under a paused campaign) | [optional]
**configured_status** | **string** | The ad&#39;s own on/off switch (&#x60;ACTIVE&#x60; / &#x60;PAUSED&#x60;), re-read from the platform after the write. Null where the platform exposes no per-ad switch (X) or the read-back failed and the platform does not store one. | [optional]
**message** | **string** | Human-readable summary (present only when skipped), e.g. \&quot;No change: the ad&#39;s own switch is already off\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
