# # CampaignResultMetric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** |  |
**label** | **string** |  |
**kind** | **string** | How the value reads: &#x60;percent&#x60; values are already multiplied by 100. |
**currency** | **string** |  |
**formula** | **string** | Null for a number you send. For a computed metric, the formula over &#x60;spend&#x60;, &#x60;impressions&#x60;, &#x60;clicks&#x60;, &#x60;conversions&#x60;, &#x60;purchase_value&#x60; and the metrics you send, e.g. &#x60;spend / revenue * 100&#x60;. |
**built_in** | **bool** | One of the formulas every team has (&#x60;cac_percent&#x60;, &#x60;cost_per_sale&#x60;, &#x60;cost_per_qualified_lead&#x60;, &#x60;lead_to_sale&#x60;). Setting the same key replaces it for your team. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
