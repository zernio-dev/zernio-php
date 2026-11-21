# # ConversionAuditReportChecksInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**title** | **string** |  |
**status** | **string** | &#x60;unknown&#x60; &#x3D; the scan cannot see it from outside; &#x60;not-applicable&#x60; checks are left out of the score. |
**tier** | **string** | A &#x60;bonus&#x60; check can only add points, never cost them. | [optional]
**weight** | **float** |  |
**detail** | **string** |  |
**points_to_gain** | **float** | Points the score gains when this check alone is fixed. | [optional]
**verify** | [**\Zernio\Model\ConversionAuditReportChecksInnerVerify**](ConversionAuditReportChecksInnerVerify.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
