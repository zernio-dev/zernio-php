# # WebhookPayloadPostPlatformPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**content** | **string** |  |
**status** | **string** | Post-level status AT FIRE TIME. May still be &#x60;publishing&#x60; if other platforms haven&#39;t terminated; check this field rather than assuming. |
**scheduled_for** | **\DateTime** |  |
**published_at** | **\DateTime** |  | [optional]
**platforms** | [**\Zernio\Model\WebhookPayloadPostPlatformPostPlatformsInner[]**](WebhookPayloadPostPlatformPostPlatformsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
