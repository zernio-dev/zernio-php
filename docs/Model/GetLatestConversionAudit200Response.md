# # GetLatestConversionAudit200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report** | [**\Zernio\Model\ConversionAuditReport**](ConversionAuditReport.md) |  |
**networks** | [**\Zernio\Model\ConversionAuditAnswerNetworksInner[]**](ConversionAuditAnswerNetworksInner.md) | Each ad network with its final setup and leak, computed exactly as the public report page shows them, best setup first. |
**top_fixes** | [**\Zernio\Model\ConversionAuditAnswerTopFixesInner[]**](ConversionAuditAnswerTopFixesInner.md) | The few fixes that matter most, in the order the public report page lists them. |
**fix_prompt** | **string** | A prompt to paste into a coding agent. It lists the report&#39;s findings, then connecting Zernio, sending conversions server-side and verifying them. |
**public_report** | [**\Zernio\Model\ConversionAuditAnswerPublicReport**](ConversionAuditAnswerPublicReport.md) |  |
**host** | **string** | The normalized host the report is stored under. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
