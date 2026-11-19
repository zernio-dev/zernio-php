# # GetVoiceCallEstimate200ResponseTrunk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Trunk the limits were read from. Null when none was resolved and the defaults apply. | [optional]
**limits_source** | **string** |  | [optional]
**max_destination_rate_usd** | **float** | Per-minute cap, compared with the carrier&#39;s rate for the route (half the billed rate). Default 0.30, null when the trunk has no cap. | [optional]
**destination_whitelisted** | **bool** | Whether destinationCountry is on the trunk&#39;s whitelist. The default whitelist is every country Zernio sells numbers in. | [optional]
**rate_check** | **string** | &#x60;partial&#x60; means some of the destination&#39;s networks are above the cap and calls to them are refused. | [optional]
**outbound_enabled** | **bool** | False while outbound is paused for an unfunded balance. Null with default limits. | [optional]
**would_block** | **bool** |  | [optional]
**block_reasons** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
