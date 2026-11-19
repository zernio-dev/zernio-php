# # GetVoiceCallEstimate200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**via** | **string** |  | [optional]
**destination_country** | **string** | ISO country of &#x60;to&#x60;. Isle of Man, Jersey and Guernsey numbers return IM, JE and GG. | [optional]
**line_type** | **string** | Line type of &#x60;to&#x60;. Where it is not &#x60;mobile&#x60; or &#x60;landline&#x60;, &#x60;perMinuteUsd&#x60; takes the dearer of the two. | [optional]
**caller_id** | **string** | Caller ID the rates were picked for. Voice API estimates without &#x60;from&#x60; use your first calling number. | [optional]
**caller_country** | **string** |  | [optional]
**minutes** | **int** |  | [optional]
**per_minute_usd** | **float** | Billable cost per minute for &#x60;to&#x60;&#39;s line type and the requested options. | [optional]
**billing_increment_seconds** | [**\Zernio\Model\GetVoiceCallEstimate200ResponseBillingIncrementSeconds**](GetVoiceCallEstimate200ResponseBillingIncrementSeconds.md) |  | [optional]
**rates** | [**\Zernio\Model\GetVoiceCallEstimate200ResponseRates**](GetVoiceCallEstimate200ResponseRates.md) |  | [optional]
**trunk** | [**\Zernio\Model\GetVoiceCallEstimate200ResponseTrunk**](GetVoiceCallEstimate200ResponseTrunk.md) |  | [optional]
**breakdown** | [**\Zernio\Model\GetVoiceCallEstimate200ResponseBreakdown**](GetVoiceCallEstimate200ResponseBreakdown.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
