# # GoogleRecommendation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resource_name** | **string** | customers/{customerId}/recommendations/{id}. Pass it to apply or dismiss. |
**id** | **string** |  |
**type** | **string** | Google RecommendationType, such as CAMPAIGN_BUDGET, KEYWORD or SET_TARGET_CPA. |
**dismissed** | **bool** |  |
**campaign_id** | **string** |  |
**campaign_ids** | **string[]** | Every campaign the recommendation targets (several for account-level types). |
**ad_group_id** | **string** |  |
**campaign_budget_id** | **string** |  |
**impact** | [**\Zernio\Model\GoogleRecommendationImpact**](GoogleRecommendationImpact.md) |  |
**details** | **object** | The type-specific recommendation payload exactly as Google returns it (camelCase, amounts in micros), for example recommendedTargetCpaMicros or budgetOptions. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
