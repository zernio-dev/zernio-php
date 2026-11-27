# # UpdateAdAccountManagerLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Google ads SocialAccount id. |
**manager_customer_id** | **string** | Manager customer id, digits only. |
**client_customer_id** | **string** | Client customer id, digits only. |
**manager_link_id** | **string** | Numeric link id from GET /v1/ads/accounts/hierarchy. |
**action** | **string** |  |
**validate_only** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
