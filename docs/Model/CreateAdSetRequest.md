# # CreateAdSetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id owning the Google Ads connection. |
**platform** | **string** | Only \&quot;google\&quot; is implemented today; every other value returns 501. |
**campaign_id** | **string** | Google platform campaign ID (numeric) the ad group is created under. |
**name** | **string** |  |
**status** | **string** |  | [optional] [default to 'PAUSED']
**ad_account_id** | **string** | Platform ad account ID (Google customer ID, digits only). Only required when the connection has more than one. | [optional]
**customer_id** | **string** | Alias of adAccountId, kept for existing callers | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
