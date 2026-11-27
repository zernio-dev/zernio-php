# # ApplyGoogleRecommendationsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Google ads SocialAccount id. |
**ad_account_id** | **string** | Google customer id, digits only. Required when the connection has several customers. | [optional]
**recommendations** | [**\Zernio\Model\ApplyGoogleRecommendationsRequestRecommendationsInner[]**](ApplyGoogleRecommendationsRequestRecommendationsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
