# # CreateStandaloneAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**ad_account_id** | **string** |  |
**name** | **string** |  |
**goal** | **string** |  |
**budget_amount** | **float** |  |
**budget_type** | **string** |  |
**currency** | **string** |  | [optional]
**headline** | **string** | Required for most platforms. Max: Meta&#x3D;255, Google&#x3D;30, Pinterest&#x3D;100 | [optional]
**long_headline** | **string** | Google Display only | [optional]
**body** | **string** | Max: Google&#x3D;90, Pinterest&#x3D;500 |
**call_to_action** | **string** | Meta only | [optional]
**link_url** | **string** |  | [optional]
**image_url** | **string** | Image URL (or video URL for TikTok). Not required for Google Search campaigns. | [optional]
**business_name** | **string** | Google Display only | [optional]
**board_id** | **string** | Pinterest only. Board ID (auto-creates if not provided). | [optional]
**countries** | **string[]** |  | [optional]
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**interests** | [**\Late\Model\UpdateAdRequestTargetingInterestsInner[]**](UpdateAdRequestTargetingInterestsInner.md) | Interest objects from /v1/ads/interests. Each must include id and name. | [optional]
**end_date** | **\DateTime** | Required for lifetime budgets | [optional]
**audience_id** | **string** | Custom audience ID for targeting | [optional]
**campaign_type** | **string** | Google only | [optional] [default to 'display']
**keywords** | **string[]** | Google Search only | [optional]
**additional_headlines** | **string[]** | Google Search RSA only. Extra headlines. | [optional]
**additional_descriptions** | **string[]** | Google Search RSA only. Extra descriptions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
