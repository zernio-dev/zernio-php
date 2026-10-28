# # OAuthApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Pass it as &#x60;oauthAppId&#x60; on GET /v1/connect/{platform} to connect through this app. |
**platform** | **string** | The platform the app belongs to, as in GET /v1/connect/{platform}. |
**label** | **string** |  |
**client_id** | **string** | The client ID (or app ID) of your app on the platform. The secret is never returned. |
**scope_areas** | **string[]** | The permission areas every connect through this app requests. Pick only what your app is approved for on the platform. |
**status** | **string** | &#x60;ok&#x60;: the platform accepted the keys at the last check. &#x60;unchecked&#x60;: the check could not reach a verdict (see lastError). &#x60;invalid&#x60;: the platform rejected the keys; connects and token refreshes through this app will fail until the secret is rotated. |
**last_checked_at** | **\DateTime** |  | [optional]
**last_error** | **string** |  | [optional]
**account_count** | **int** | Connected accounts currently running on this app. |
**redirect_uri** | **string** | The OAuth redirect URI to allow in your app&#39;s settings on the platform. |
**webhook** | [**\Zernio\Model\OAuthAppWebhook**](OAuthAppWebhook.md) |  | [optional]
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
