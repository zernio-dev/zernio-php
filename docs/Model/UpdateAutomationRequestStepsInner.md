# # UpdateAutomationRequestStepsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type** | **string** |  |
**include_manually_paused** | **bool** | Also objects a person paused. Without it only what this automation paused is turned back on. | [optional]
**status** | **string** | The copy starts paused unless &#x60;active&#x60;. | [optional]
**rename_suffix** | **string** |  | [optional]
**by** | **string** | From 1% to 90%. |
**max** | **float** | A receiver&#39;s budget never goes above this. | [optional]
**min** | **float** | A giver&#39;s budget never goes below this. | [optional]
**amount** | **float** |  |
**target** | **string** |  |
**metric** | **string** | A condition metric or &#x60;result:&lt;key&gt;&#x60;, not a calendar metric. |
**window** | **string** | A condition window. |
**best** | **string** | Which end is best. Defaults to lowest for &#x60;cpa&#x60;, &#x60;cpc&#x60;, &#x60;cpm&#x60;, &#x60;frequency&#x60; and cost results, highest otherwise. | [optional]
**from** | **int** | How many objects give budget. |
**to** | [**\Zernio\Model\AutomationNotifyStepToInner[]**](AutomationNotifyStepToInner.md) | Up to 5 in an ad rule. |
**add** | **string** |  | [optional]
**remove** | **string** |  | [optional]
**at** | **string** |  | [optional]
**expires_in** | **string** | From &#x60;15m&#x60; to &#x60;7d&#x60;, in whole minutes. |
**ad_account_id** | **string** | The Meta ad account that pays, from &#x60;GET /v1/ads/accounts&#x60;. |
**budget** | **float** | The whole spend of one boost, in the ad account currency. |
**days** | **int** | How long each boost runs. |
**goal** | **string** |  | [optional] [default to 'engagement']
**countries** | **string[]** | ISO 3166 alpha-2 codes. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
