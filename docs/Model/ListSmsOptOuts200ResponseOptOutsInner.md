# # ListSmsOptOuts200ResponseOptOutsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** |  | [optional]
**opted_out_at** | **\DateTime** |  | [optional]
**keyword** | **string** | The keyword they sent (e.g. STOP), when the carrier recorded one. | [optional]
**from** | **string** | Which of your numbers the recipient opted out from. | [optional]
**source** | **string** | &#x60;inbound_stop&#x60; when the recipient texted an opt-out keyword, &#x60;api&#x60; when recorded with &#x60;POST /v1/sms/opt-outs&#x60;. Null when unknown. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
