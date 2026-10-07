# # UpdateConversionActionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id (Google Ads) |
**ad_account_id** | **string** | Google customer id. Required when the connection has multiple customers. | [optional]
**customer_id** | **string** | Alias of adAccountId | [optional]
**name** | **string** |  | [optional]
**status** | **string** | REMOVED removes the action and must be sent alone; ENABLED restores a removed one. | [optional]
**default_value** | **float** |  | [optional]
**always_use_default_value** | **bool** |  | [optional]
**category** | **string** | conversion_action.category. Defaults to DEFAULT on create. | [optional]
**counting_type** | **string** | ONE_PER_CLICK counts one conversion per ad click (leads); MANY_PER_CLICK counts every one (purchases). | [optional]
**default_currency** | **string** | ISO 4217 currency of defaultValue (value_settings.default_currency_code). | [optional]
**click_through_lookback_window_days** | **int** | Days after an ad click a conversion still counts. | [optional]
**view_through_lookback_window_days** | **int** | Days after an ad view a view-through conversion still counts. | [optional]
**primary_for_goal** | **bool** | true &#x3D; primary (counts toward bidding when its goal is biddable), false &#x3D; secondary. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
