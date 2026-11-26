# # UpdateAdCampaignStatusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  |
**platform** | **string** |  |
**account_id** | **string** | A Zernio Meta Ads or Facebook connection id (also accepted in the query). Changes the status of a campaign created in Ads Manager that Zernio has not synced, by numeric Meta id. Ignored when Zernio has the campaign. It echoes the requested status; &#x60;stage: true&#x60; answers 400. | [optional]
**stage** | **bool** | Send true to stage this change instead of applying it. Nothing is written to the ad network; the response is &#x60;202&#x60; with the staged change and its diff. Apply it with POST /v1/ads/changes/{changeId}/confirm. Meta, Google, TikTok, X, Snapchat and Reddit; cannot be combined with &#x60;validateOnly&#x60; or &#x60;dryRun&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
