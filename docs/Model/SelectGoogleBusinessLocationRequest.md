# # SelectGoogleBusinessLocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile ID from your connection flow |
**location_id** | **string** | The Google Business Profile location ID selected by the user. Send this or locations, not both. | [optional]
**locations** | [**\Zernio\Model\SelectGoogleBusinessLocationRequestLocationsInner[]**](SelectGoogleBusinessLocationRequestLocationsInner.md) | Several locations to connect from one sign-in, each as its own account. The sign-in is used once for the whole batch and handed back only if none connected. With two or more distinct locations the response lists &#x60;accounts&#x60; and &#x60;failed&#x60; instead of &#x60;account&#x60;, and the request is refused with 400 on a reconnect. A single location behaves exactly like locationId. | [optional]
**account_id** | **string** | Optional but recommended. The Google Business Profile Account resource name (\&quot;accounts/123\&quot;) that owns the selected location (returned per-location by GET /v1/connect/googlebusiness/locations). When provided, the location is resolved directly instead of by enumerating the account, which is required for accounts that own many locations. Omit only for small accounts. | [optional]
**pending_data_token** | **string** | Token from the OAuth callback redirect (pendingDataToken query param). Tokens and profile data are retrieved server-side from this token. |
**redirect_url** | **string** | Optional custom redirect URL to return to after selection | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
