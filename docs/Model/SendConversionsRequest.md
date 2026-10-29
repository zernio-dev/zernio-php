# # SendConversionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | SocialAccount ID (metaads, googleads, linkedinads, tiktokads, openaiads, pinterestads, or redditads). |
**destination_id** | **string** | Platform destination identifier. For Meta, the pixel/dataset ID. For Google, the conversion action resource name. For LinkedIn, the conversion rule ID or full &#x60;urn:lla:llaPartnerConversion:{id}&#x60; URN. For OpenAI Ads, the pixel wire id. For Pinterest, the numeric ad account id. For Reddit, the pixel id (&#x60;a2_...&#x60;). |
**events** | [**\Zernio\Model\ConversionEvent[]**](ConversionEvent.md) |  |
**test_code** | **string** | Test event code. Send it at the request root, never inside an event. A root-level &#x60;test_event_code&#x60; (Meta&#39;s own name) is accepted as an alias and must be a non-empty string; sending both with different values is a 400.  - Meta: sent as &#x60;test_event_code&#x60;. Events show in Events Manager&#39;s Test Events tab for the pixel whose current test code matches (Meta rotates the code, so copy it again from that tab). Meta still processes them like any other event, so remove it in production. - Pinterest: any value sends the batch with &#x60;test&#x3D;true&#x60; (validated, not recorded). - Reddit: sent as &#x60;test_id&#x60;, so the events show in the pixel&#39;s test view. - Google, LinkedIn and OpenAI Ads: ignored. | [optional]
**consent** | [**\Zernio\Model\SendConversionsRequestConsent**](SendConversionsRequestConsent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
