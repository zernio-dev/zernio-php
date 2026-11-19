# # GetEvent200ResponseTouchesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at** | **\DateTime** |  | [optional]
**kind** | **string** |  | [optional]
**platform** | **string** | The ad platform of the campaign, the one an ad click&#39;s click id names (gclid reads as googleads), or the one a survey answer names (Instagram reads as facebook). | [optional]
**ad_account_id** | **string** |  | [optional]
**campaign_id** | **string** | The campaign the touch resolved to; null for a touch that named none (search, referral). | [optional]
**campaign_name** | **string** | The campaign&#39;s name in the ad account, when Zernio holds it. | [optional]
**detail** | [**\Zernio\Model\GetEvent200ResponseTouchesInnerDetail**](GetEvent200ResponseTouchesInnerDetail.md) |  | [optional]
**credit** | **array<string,float>** | The share of the event (0 to 1) this touch gets per model: first_touch, last_non_direct, linear, position_based, time_decay, w_shaped. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
