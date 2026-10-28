# # OAuthAppSetup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**redirect_uri** | **string** | Allow this OAuth redirect URI in your app on the platform. |
**core_scopes** | **string[]** | Requested on every connect, whatever areas the app enables. |
**scope_areas** | [**\Zernio\Model\OAuthAppSetupScopeAreasInner[]**](OAuthAppSetupScopeAreasInner.md) | The areas an app on this platform can enable, each with the scopes it requests. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
