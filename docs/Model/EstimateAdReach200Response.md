# # EstimateAdReach200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **bool** | Whether a pre-flight estimate is available on this platform. False for Google and TikTok. |
**lower** | **int** | Lower bound of the estimated reachable audience. Present only when available. | [optional]
**upper** | **int** | Upper bound of the estimated reachable audience. Present only when available. | [optional]
**daily** | **int** | Optional estimated daily reach/results at the given budget, when the platform returns it. | [optional]
**currency** | **string** | Currency of any monetary fields in the estimate, when applicable. | [optional]
**estimate_ready** | **bool** | Meta only. False when Meta is still computing the estimate (the audience is too new); retry shortly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
