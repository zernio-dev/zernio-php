# # CreateHighDemandPeriodRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Zernio SocialAccount id used to resolve the Meta token. |
**campaign_id** | **string** | Platform campaign id. Exactly one of campaignId / adSetId. | [optional]
**ad_set_id** | **string** | Platform ad set id. Exactly one of campaignId / adSetId. | [optional]
**budget_value** | **float** | With ABSOLUTE, a budget in the ad account&#39;s currency in WHOLE units (50 &#x3D; $50.00). With MULTIPLIER, a factor of the existing budget (2 &#x3D; double it) and NOT a currency amount. |
**budget_value_type** | **string** |  |
**time_start** | **int** | Unix seconds, on a 15-minute boundary (:00, :15, :30, :45). |
**time_end** | **int** | Unix seconds, on a 15-minute boundary and after timeStart. |
**recurrence_type** | **string** |  | [optional]
**currency** | **string** | Ad account currency, for the ABSOLUTE minor-unit conversion. Ignored for MULTIPLIER. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
