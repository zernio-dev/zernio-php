# # AdKeyword

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** | Account ID owning the sync | [optional]
**profile_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**ad_account_id** | **string** | Google customer ID | [optional]
**campaign_id** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**campaign_status** | **string** |  | [optional]
**ad_set_id** | **string** | Google ad group ID | [optional]
**ad_set_name** | **string** |  | [optional]
**ad_set_status** | **string** |  | [optional]
**keyword** | **string** |  | [optional]
**match_type** | **string** |  | [optional]
**status** | **string** |  | [optional]
**negative** | **bool** |  | [optional]
**quality_score** | **int** | Deprecated, use &#x60;quality.score&#x60;. Google Quality Score, 1-10. Null when unrated. | [optional]
**quality** | [**\Zernio\Model\AdKeywordQuality**](AdKeywordQuality.md) |  | [optional]
**synced_at** | **\DateTime** |  | [optional]
**metrics** | [**\Zernio\Model\AdKeywordMetrics**](AdKeywordMetrics.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
