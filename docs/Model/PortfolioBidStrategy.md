# # PortfolioBidStrategy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Numeric bid strategy id; pass as portfolioBidStrategyId or in the {strategyId} path. | [optional]
**name** | **string** |  | [optional]
**type** | **string** |  | [optional]
**status** | **string** | ENABLED or REMOVED. | [optional]
**campaign_count** | **int** | Number of campaigns currently attached. | [optional]
**clicks** | **int** |  | [optional]
**cost** | **float** | Cost in the account&#39;s currency units (converted from micros). | [optional]
**cost_per_conversion** | **float** | Cost per conversion in the account&#39;s currency units. | [optional]
**impressions** | **int** |  | [optional]
**average_cpc** | **float** | Average CPC in the account&#39;s currency units. | [optional]
**conversions** | **float** |  | [optional]
**target_cpa** | **float** | Current target, in the account&#39;s currency units. Null for a ROAS-family type (TARGET_ROAS, MAXIMIZE_CONVERSION_VALUE), or a Maximize type with no target set. Pre-fills the edit form&#39;s target field. | [optional]
**target_roas** | **float** | Current target as a decimal multiplier (2.0 &#x3D; 2.0x). Null for a CPA-family type (TARGET_CPA, MAXIMIZE_CONVERSIONS), or a Maximize type with no target set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
