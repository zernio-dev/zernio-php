# # SendConversionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | SocialAccount ID (metaads or googleads). |
**destination_id** | **string** | Platform destination identifier. For Meta, the pixel/dataset ID. For Google, the conversion action resource name. |
**events** | [**\Zernio\Model\ConversionEvent[]**](ConversionEvent.md) |  |
**test_code** | **string** | Meta &#x60;test_event_code&#x60; passthrough. Ignored by Google. | [optional]
**consent** | [**\Zernio\Model\SendConversionsRequestConsent**](SendConversionsRequestConsent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
