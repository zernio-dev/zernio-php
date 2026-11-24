# # UpdateCampaignTargetingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to stage this change instead of applying it. Nothing is written to the ad network; the response is &#x60;202&#x60; with the staged change and its diff. Apply it with POST /v1/ads/changes/{changeId}/confirm. Cannot be combined with &#x60;validateOnly&#x60; or &#x60;dryRun&#x60;. | [optional]
**platform** | **string** |  |
**targeting** | [**\Zernio\Model\UpdateCampaignTargetingRequestTargeting**](UpdateCampaignTargetingRequestTargeting.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
