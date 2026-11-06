# # AutomationBoostStep

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type** | **string** |  |
**ad_account_id** | **string** | The Meta ad account that pays, from &#x60;GET /v1/ads/accounts&#x60;. |
**budget** | **float** | The whole spend of one boost, in the ad account currency. |
**days** | **int** | How long each boost runs. |
**goal** | **string** |  | [optional] [default to 'engagement']
**countries** | **string[]** | ISO 3166 alpha-2 codes. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
