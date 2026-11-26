# # StagedAdChangeSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The change id, used in /v1/ads/changes/{changeId}. |
**type** | **string** | Which write was staged. &#x60;operation&#x60; is a write staged as its request, named by &#x60;request&#x60;. |
**request** | [**\Zernio\Model\StagedAdChangeSummaryRequest**](StagedAdChangeSummaryRequest.md) |  | [optional]
**status** | **string** | The status the list was asked for. |
**stale** | **bool** | Present and true on a staged change whose object was edited on the ad network after staging. Refresh it with PATCH /v1/ads/changes/{changeId}. | [optional]
**error** | [**\Zernio\Model\StagedAdChangeSummaryError**](StagedAdChangeSummaryError.md) |  | [optional]
**platform** | **string** | The ad platform of the object, as the write route names it. |
**account_id** | **string** | The connected account the write goes through. |
**ad_account_id** | **string** | The ad account id on the platform. |
**target_id** | **string** | The object the change applies to. Null for a create, whose object does not exist yet. |
**target_name** | **string** | The name of the object when the change was staged, or the name a create will give it. Null when it is not known. |
**creates** | **bool** | True when the change creates a new object. |
**created_by** | **string** | The user who staged the change. |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
