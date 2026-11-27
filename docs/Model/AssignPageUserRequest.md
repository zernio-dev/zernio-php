# # AssignPageUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Zernio SocialAccount id used to resolve the Meta token. |
**page_id** | **string** | Facebook Page id. |
**business_id** | **string** | Business portfolio the user belongs to. |
**user_id** | **string** | Business-scoped user id from GET /v1/ads/businesses/users. |
**tasks** | **string[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
