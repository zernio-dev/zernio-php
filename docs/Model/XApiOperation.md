# # XApiOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation** | **string** | Internal operation key. Matches keys in &#x60;xApiCallsByOperation&#x60;. | [optional]
**event_type** | **string** | Metronome &#x60;event_type&#x60; emitted when this operation runs. | [optional]
**display_name** | **string** | Human-readable label shown on Metronome invoices. | [optional]
**price_per_call_usd** | **float** |  | [optional]
**price_per_call_cents** | **float** | Per-call price in cents. Fractional values are intentional. | [optional]
**tier** | **string** | Tier key derived from &#x60;pricePerCallUsd&#x60; (e.g. &#x60;x_api_005&#x60; for $0.005, &#x60;x_api_200&#x60; for $0.200). Useful for grouping operations by price in dashboards. | [optional]
**triggered_by** | [**\Zernio\Model\XApiOperationTriggeredByInner[]**](XApiOperationTriggeredByInner.md) | Zernio platform methods that emit this operation, with their metering rule. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
