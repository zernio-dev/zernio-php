# # CreateGoogleAdAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**account_id** | **string** | Zernio googleads SocialAccount ID whose Google user reaches the manager. |
**manager_customer_id** | **string** | Manager (MCC) customer id without dashes. The new account is created under it. List reachable managers with GET /v1/ads/accounts/hierarchy. |
**name** | **string** | Account name. Whitespace is trimmed. |
**currency** | **string** | Uppercase ISO 4217 currency. Cannot be changed after creation. |
**time_zone** | **string** | IANA time zone name, for example Europe/Madrid. Cannot be changed after creation. |
**validate_only** | **bool** | Ask Google to validate the request without creating the account. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
