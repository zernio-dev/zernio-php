# # CreateBrandedCallingIdentityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enterprise_id** | **string** | A business from POST /v1/branded-calling/enterprises. |
**display_name** | **string** | Shown on the callee&#39;s screen. No emoji. |
**call_reasons** | **string[]** | 1 to 10 reasons you call, each up to 64 characters. Pick from GET /v1/branded-calling/call-reasons to skip manual vetting. |
**logo_url** | **string** | HTTPS URL of a PNG, JPEG, WebP or SVG logo. Zernio converts it to the 256x256 BMP the carriers require and hosts it. | [optional]
**authorizer** | [**\Zernio\Model\CreateBrandedCallingIdentityRequestAuthorizer**](CreateBrandedCallingIdentityRequestAuthorizer.md) |  |
**references** | [**\Zernio\Model\BrandedCallingReferences**](BrandedCallingReferences.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
