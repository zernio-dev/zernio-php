# # CreateAdSetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id owning the Google Ads connection. |
**platform** | **string** | Only \&quot;google\&quot; is implemented today; every other value returns 501. |
**campaign_id** | **string** | Google platform campaign ID (numeric) the ad group is created under. |
**name** | **string** |  |
**status** | **string** |  | [optional] [default to 'PAUSED']
**customer_id** | **string** | Numeric Google Ads customer id. Only required when the connection has more than one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
