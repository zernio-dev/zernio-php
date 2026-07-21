# # CreateRfPredictionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id (posting or ads variant). |
**ad_account_id** | **string** | Meta ad account id (act_&lt;n&gt;). |
**budget_amount** | **float** | Whole currency units. Exactly one of budgetAmount / reach. | [optional]
**reach** | **int** | Target unique reach. Exactly one of budgetAmount / reach. | [optional]
**start_date** | **\DateTime** | Campaign window start (must be in the future). |
**end_date** | **\DateTime** |  |
**frequency_cap** | **int** | Max impressions per person over the window. | [optional]
**targeting** | **object** | Canonical camelCase TargetingSpec (same shape as /v1/ads/create&#39;s &#x60;targeting&#x60;). Defaults to countries: [US]. | [optional]
**placements** | **object** | Meta placements object (same shape as /v1/ads/create&#39;s &#x60;placements&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
