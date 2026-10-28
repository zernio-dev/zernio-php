# # CreateAdSetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id owning the Google Ads or Reddit Ads connection. |
**platform** | **string** | \&quot;google\&quot; and \&quot;reddit\&quot; are implemented; every other value returns 501. |
**campaign_id** | **string** | Platform campaign ID the ad group is created under (numeric on Google). |
**name** | **string** |  |
**status** | **string** |  | [optional] [default to 'PAUSED']
**max_cpc** | **float** | Max CPC of the new ad group, in the account&#39;s currency units. Send it when the campaign uses Manual CPC: Google gives an ad group without one a 0.01 bid. | [optional]
**ad_account_id** | **string** | Platform ad account ID: the Google customer ID (digits only, only required when the connection has more than one) or the Reddit ad account id (required). | [optional]
**customer_id** | **string** | Google only. Alias of adAccountId, kept for existing callers | [optional]
**budget_amount** | **float** | Reddit only. Budget of the new ad group, in the ad account&#39;s currency units. Required when the campaign has no campaign budget; 400 under campaign budget optimization, where the campaign budget funds the ad group. | [optional]
**budget_type** | **string** | Reddit only. Sent together with budgetAmount. | [optional]
**start_date** | **string** | Reddit only. ISO 8601 start of the ad group. Defaults to now, or to the campaign start when it is in the future. | [optional]
**end_date** | **string** | Reddit only. ISO 8601 end of the ad group. Defaults to the campaign end. | [optional]
**targeting** | [**\Zernio\Model\TargetingSpec**](TargetingSpec.md) |  | [optional]
**promoted_object** | [**\Zernio\Model\CreateAdSetRequestPromotedObject**](CreateAdSetRequestPromotedObject.md) |  | [optional]
**optimization_goal** | **string** | Reddit only. VIDEO_VIEW_6S (default) or VIDEO_VIEW_15S on a video views campaign. | [optional]
**bid_strategy** | **string** | Reddit only. Defaults to LOWEST_COST_WITHOUT_CAP. Not accepted under campaign budget optimization. | [optional]
**bid_amount** | **float** | Reddit only. Bid cap in currency units, sent with bidStrategy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
