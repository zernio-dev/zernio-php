# # ConnectedApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** |  | [optional]
**client_name** | **string** | Name the client declared at registration. Registration is open, so this is self-declared and not verified. | [optional]
**redirect_host** | **string** | Host of the client&#39;s registered redirect URI (non-http schemes are shown as scheme//host). The destination an impostor cannot fake. | [optional]
**scopes** | **string[]** | Scopes granted on the most recent token. | [optional]
**authorized_at** | **\DateTime** |  | [optional]
**last_used_at** | **\DateTime** | Last time any of the client&#39;s live tokens authenticated a request. | [optional]
**token_count** | **int** | Live tokens held by the client (an active session is typically one access plus one refresh token). | [optional]
**workspaces** | [**\Zernio\Model\ConnectTradeDeskAdsPartner200ResponseAdvertisersInner[]**](ConnectTradeDeskAdsPartner200ResponseAdvertisersInner.md) | The workspaces chosen when the app was authorized. Present only for accounts with workspaces enabled; empty for an app authorized before the choice existed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
