# # XApiPricing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** |  | [optional]
**markup** | **string** | Always 0% — Zernio does not mark up X API rates. | [optional]
**source** | **string** |  | [optional]
**last_verified** | **\DateTime** | Date the prices were last verified against X&#39;s published rates. | [optional]
**tiers** | [**\Zernio\Model\XApiPricingTiersInner[]**](XApiPricingTiersInner.md) | Rollup of operations grouped by their per-call price. | [optional]
**operations** | [**\Zernio\Model\XApiOperation[]**](XApiOperation.md) | Flat list of every X operation Zernio can perform, with its rate. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
