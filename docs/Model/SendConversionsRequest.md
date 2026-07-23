# # SendConversionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | SocialAccount ID (metaads, googleads, linkedinads, tiktokads, or openaiads). |
**destination_id** | **string** | Platform destination identifier. For Meta, the pixel/dataset ID. For Google, the conversion action resource name. For LinkedIn, the conversion rule ID or full &#x60;urn:lla:llaPartnerConversion:{id}&#x60; URN. For OpenAI Ads, the pixel wire id. |
**events** | [**\Zernio\Model\ConversionEvent[]**](ConversionEvent.md) |  |
**test_code** | **string** | Meta &#x60;test_event_code&#x60; passthrough. Ignored by Google, LinkedIn, and OpenAI Ads. | [optional]
**consent** | [**\Zernio\Model\SendConversionsRequestConsent**](SendConversionsRequestConsent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
