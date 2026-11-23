# # AppLovinAdsPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_type** | **string** | Required for a new campaign. | [optional]
**os** | **string** | APP campaigns. Required. | [optional]
**package_name** | **string** | APP campaigns. Required. | [optional]
**itunes_id** | **int** | iOS APP campaigns. Required. | [optional]
**website_url** | **string** | WEB campaigns. Required unless linkUrl is sent. | [optional]
**bidding_strategy** | **string** | Defaults to CPI billing for a CPI goal, CPM billing otherwise. TARGET_GOAL_WITH_CPI_BILLING takes an APP campaign with a CPI goal only. Set at creation only. | [optional]
**goal_type** | **string** | APP takes all, WEB takes CPE, CPP and CHK_ROAS. Defaults from goal: app_promotion is CPI, conversions CPP, lead_generation CPE. Set at creation only. | [optional]
**goal_value** | **float** | The goal for every country (a cost, or a ROAS ratio). APP limits: CPI below 200, CPE and CPP below 500, AD_ROAS at least 0.1, CHK_ROAS at least 0.01, BLD_ROAS at least 0.05. Send this or countryGoalValues. | [optional]
**country_goal_values** | **array<string,float>** | Per-country goal values for targeted countries. | [optional]
**roas_day_target** | **string** | Required for ROAS goals (and WEB CPP). APP takes DAY7 or DAY28, WEB DAY0 or DAY7. | [optional]
**event_target** | **string** | Required for a CPE goal. | [optional]
**country_budgets** | **array<string,float>** | Per-country daily budgets, instead of budgetAmount. AppLovin budgets are daily only. | [optional]
**tracking** | [**\Zernio\Model\AppLovinAdsPlatformDataTracking**](AppLovinAdsPlatformDataTracking.md) |  | [optional]
**audience_strategy** | **string** | WEB campaigns. | [optional]
**assets** | [**\Zernio\Model\AppLovinAdsPlatformDataAssetsInner[]**](AppLovinAdsPlatformDataAssetsInner.md) | The creative set media: URLs Zernio uploads to AppLovin, or ids of assets already there. Needs a HOSTED_HTML asset, or an IMG_INTER_P image plus a VID_LONG_P or VID_SHORT_P video. | [optional]
**languages** | **string[]** | Creative set languages as AppLovin names them. All languages by default. | [optional]
**brand_info** | [**\Zernio\Model\AppLovinAdsPlatformDataBrandInfo**](AppLovinAdsPlatformDataBrandInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
