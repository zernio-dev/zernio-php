# # MetricDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  |
**unit** | **string** | ratio is a plain ratio (0 to 1 for a rate); money is in the account currency, or the unit and currency meta.units gives; position is a rank where 1 is the top; score runs from 0 to 100. |
**additive** | **bool** |  |
**source** | **string** | stored: read from what Zernio synced; live: read from the platform on each request. |
**platforms** | **string[]** |  |
**freshness** | **string** |  |
**granularities** | **string[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
