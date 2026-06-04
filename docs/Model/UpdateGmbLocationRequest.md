# # UpdateGmbLocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**selected_location_id** | **string** |  |
**google_account_id** | **string** | Optional but recommended. The Google Business Account resource name (\&quot;accounts/123\&quot;) that owns the new location (from GET gmb-locations). When provided, the location is resolved directly instead of by enumerating the account, which is required for accounts with many locations. Named &#x60;googleAccountId&#x60; to disambiguate from the path &#x60;accountId&#x60; (the Zernio account). The legacy field name &#x60;accountId&#x60; is still accepted for backwards compatibility. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
