# # SavedTargetingAudience

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**type** | **string** |  |
**account_id** | **string** | Account ID on the target ad platform. |
**name** | **string** |  |
**description** | **string** |  | [optional]
**spec** | [**\ZernioModelTargetingSpec**](\ZernioModelTargetingSpec.md) | The targeting spec to store. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
