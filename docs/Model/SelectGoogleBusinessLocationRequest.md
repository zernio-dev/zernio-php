# # SelectGoogleBusinessLocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile ID from your connection flow |
**location_id** | **string** | The Google Business location ID selected by the user |
**account_id** | **string** | Optional but recommended. The Google Business Account resource name (\&quot;accounts/123\&quot;) that owns the selected location (returned per-location by GET /v1/connect/googlebusiness/locations). When provided, the location is resolved directly instead of by enumerating the account, which is required for accounts that own many locations. Omit only for small accounts. | [optional]
**pending_data_token** | **string** | Token from the OAuth callback redirect (pendingDataToken query param). Tokens and profile data are retrieved server-side from this token. |
**redirect_url** | **string** | Optional custom redirect URL to return to after selection | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
