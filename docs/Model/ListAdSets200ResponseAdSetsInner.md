# # ListAdSets200ResponseAdSetsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_ad_set_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**ad_set_name** | **string** |  | [optional]
**status** | **string** |  | [optional]
**platform_ad_set_status** | **string** | Raw platform ad set status. On TikTok the ad group&#39;s own switch &#x60;operation_status&#x60; (ENABLE / DISABLE), independent of its campaign. | [optional]
**platform_campaign_id** | **string** |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**budget** | [**\Zernio\Model\ListAdSets200ResponseAdSetsInnerBudget**](ListAdSets200ResponseAdSetsInnerBudget.md) |  | [optional]
**schedule** | [**\Zernio\Model\ListAdSets200ResponseAdSetsInnerSchedule**](ListAdSets200ResponseAdSetsInnerSchedule.md) |  | [optional]
**targeting** | [**\Zernio\Model\ListAdSets200ResponseAdSetsInnerTargeting**](ListAdSets200ResponseAdSetsInnerTargeting.md) |  | [optional]
**is_external** | **bool** |  | [optional]
**platform_created_at** | **\DateTime** |  | [optional]
**status_read_at** | **\DateTime** | Only with &#x60;live&#x3D;true&#x60;. When &#x60;platformAdSetStatus&#x60; was read from the platform; null when this row was not read live. | [optional]
**optimization_goal** | **string** | TikTok only, only with &#x60;live&#x3D;true&#x60; and only on rows read live. The ad group&#39;s &#x60;optimization_goal&#x60; exactly as TikTok&#39;s adgroup/get returns it now (for example ENGAGED_VIEW, ENGAGED_VIEW_FIFTEEN, CLICK, CONVERT). Absent on rows not read live and on other platforms. | [optional]
**billing_event** | **string** | TikTok only, only with &#x60;live&#x3D;true&#x60; and only on rows read live. The ad group&#39;s &#x60;billing_event&#x60; exactly as TikTok&#39;s adgroup/get returns it now (for example CPV, CPC, OCPM). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
