# # StagedAdChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The change id, used in /v1/ads/changes/{changeId}. |
**type** | **string** | Which write was staged: a status route, the update route of a campaign, an ad set or an ad, the campaign targeting route, or one of the create routes (POST /v1/ads/create, POST /v1/ads/campaigns, POST /v1/ads/ad-sets). |
**platform** | **string** | The ad platform of the object, as the write route names it. |
**account_id** | **string** | The connected account the write goes through. |
**ad_account_id** | **string** | The ad account id on the platform. |
**target_id** | **string** | The object the change applies to: the platform campaign id, the platform ad set id, or the Zernio ad id. Null for a create, whose object does not exist yet. |
**target_name** | **string** | The name of the object when the change was staged, or the name a create will give it. Null when it is not known. | [optional]
**creates** | **bool** | Present and true when the change creates a new object. Every diff entry then has &#x60;before: null&#x60; and &#x60;beforeAvailable: false&#x60;. | [optional]
**status** | **string** | - &#x60;staged&#x60;: waiting to be confirmed or discarded. - &#x60;confirming&#x60;: a confirm is running. A change left here for 15 minutes ends as &#x60;failed&#x60; with error code &#x60;change_outcome_unknown&#x60;, and is never applied again automatically. - &#x60;confirmed&#x60;: applied. &#x60;result&#x60; holds what the write returned. - &#x60;failed&#x60;: not applied. &#x60;error&#x60; says why. |
**diff** | [**\Zernio\Model\StagedAdChangeDiffInner[]**](StagedAdChangeDiffInner.md) | One entry per value of the staged request that the write would change.  - A nested field is flattened: each leaf is one entry under its dotted path (&#x60;budget.amount&#x60;, &#x60;targeting.ageMin&#x60;, &#x60;creative.headline&#x60;). - A list is one entry. - A leaf whose value on the ad network already equals the requested value is left out, so the list can be empty. - &#x60;stage&#x60; and other flags that only steer the write are never listed. |
**created_by** | **string** | The user who staged the change. |
**confirmed_by** | **string** | The user who confirmed the change. Null while nobody has, and after a confirm that left the change staged. | [optional]
**stale** | **bool** | Present and true on a staged change whose last confirm was refused with &#x60;change_target_changed&#x60;. &#x60;error&#x60; then says why. Discard it and stage it again from the current values. | [optional]
**created_at** | **\DateTime** |  |
**finished_at** | **\DateTime** | When the confirm ended, as &#x60;confirmed&#x60; or &#x60;failed&#x60;. A finished change is deleted 7 days later, a failed create 30 days later. |
**result** | **array<string,mixed>** | Present once &#x60;confirmed&#x60;: the response body of the write. | [optional]
**error** | [**\Zernio\Model\StagedAdChangeError**](StagedAdChangeError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
