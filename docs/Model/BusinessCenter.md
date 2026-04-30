# # BusinessCenter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bc_id** | **string** | Business Center ID | [optional]
**name** | **string** | Display name set by the BC owner | [optional]
**advertiser_count** | **int** | Number of advertisers reachable under this BC for the calling token. &#x60;null&#x60; when the BC asset walk returned empty or failed (typical for agency apps without full BC asset read scope) — distinct from &#x60;0&#x60;, which would imply the BC genuinely has no advertisers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
