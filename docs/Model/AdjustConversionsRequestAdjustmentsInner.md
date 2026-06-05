# # AdjustConversionsRequestAdjustmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustment_type** | **string** |  |
**adjustment_time** | **float** | When the adjustment occurred, unix seconds. |
**order_id** | **string** | Transaction ID of the original conversion (the &#x60;eventId&#x60; you sent). Recommended; required for ENHANCEMENT. | [optional]
**gclid** | **string** | Alternative key — the original click ID. Pair with &#x60;conversionTime&#x60;. Not valid for ENHANCEMENT. | [optional]
**conversion_time** | **float** | The original conversion&#39;s time, unix seconds. Required when identifying by &#x60;gclid&#x60;. | [optional]
**restatement_value** | **float** | RESTATEMENT only — the corrected TOTAL conversion value. | [optional]
**currency** | **string** | RESTATEMENT only — ISO 4217 currency for &#x60;restatementValue&#x60;. | [optional]
**user** | [**\Zernio\Model\AdjustConversionsRequestAdjustmentsInnerUser**](AdjustConversionsRequestAdjustmentsInnerUser.md) |  | [optional]
**user_agent** | **string** | ENHANCEMENT only — the original conversion&#39;s user agent (improves match quality). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
