# # EstimateAdReach200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **bool** | Whether a pre-flight estimate is available on this platform. False for Google and TikTok. |
**lower** | **int** | Lower bound of the estimated reachable audience. Present only when available. | [optional]
**upper** | **int** | Upper bound of the estimated reachable audience. Present only when available. | [optional]
**daily** | **int** | Optional estimated daily reach/results at the given budget, when the platform returns it. | [optional]
**active** | **int** | LinkedIn only. LinkedIn&#39;s &#x60;audienceCounts.active&#x60;, verbatim: the active subset of the same audience &#x60;lower&#x60;/&#x60;upper&#x60; carry as its &#x60;total&#x60;. Absent when LinkedIn does not report it; &#x60;0&#x60; is a real answer, not a missing one. | [optional]
**currency** | **string** | Currency of any monetary fields in the estimate, when applicable. | [optional]
**estimate_ready** | **bool** | Meta only. False when Meta is still computing the estimate (the audience is too new); retry shortly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
