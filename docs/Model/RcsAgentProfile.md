# # RcsAgentProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** |  |
**logo_url** | **string** | 224x224, max 50 KB. Upload any image through POST /v1/rcs/assets to get a compliant URL. |
**hero_url** | **string** | Banner, 1440x448, max 200 KB. Upload through POST /v1/rcs/assets. |
**brand_color** | **string** | Hex colour, e.g. #1A73E8. Needs 4.5:1 contrast against white. |
**privacy_policy_url** | **string** |  |
**terms_url** | **string** |  |
**phone** | [**\Zernio\Model\RcsAgentProfilePhone**](RcsAgentProfilePhone.md) |  | [optional]
**website** | [**\Zernio\Model\RcsAgentProfileWebsite**](RcsAgentProfileWebsite.md) |  | [optional]
**email** | [**\Zernio\Model\RcsAgentProfileEmail**](RcsAgentProfileEmail.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
