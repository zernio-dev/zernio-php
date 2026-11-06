# # AutomationStepOneOf9

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type** | **string** |  |
**metric** | **string** | A condition metric or &#x60;result:&lt;key&gt;&#x60;, not a calendar metric. |
**window** | **string** | A condition window. |
**best** | **string** | Which end is best. Defaults to lowest for &#x60;cpa&#x60;, &#x60;cpc&#x60;, &#x60;cpm&#x60;, &#x60;frequency&#x60; and cost results, highest otherwise. | [optional]
**from** | **int** | How many objects give budget. |
**to** | **int** | How many objects receive it. |
**by** | **string** | From 1% to 90%. | [optional]
**amount** | **float** |  | [optional]
**min** | **float** | A giver&#39;s budget never goes below this. | [optional]
**max** | **float** | A receiver&#39;s budget never goes above this. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
