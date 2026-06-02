# # CreateStandaloneAdRequestDynamicCreative

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_urls** | **string[]** | Pool of image URLs (1-10). Uploaded to the ad account and referenced by hash in the asset feed. |
**bodies** | **string[]** | Primary-text variations (the body copy). | [optional]
**titles** | **string[]** | Headline variations. | [optional]
**descriptions** | **string[]** | Description (link caption) variations. | [optional]
**link_urls** | **string[]** | Destination URL variations. At least one is required unless &#x60;goal&#x60; is &#x60;lead_generation&#x60;. | [optional]
**call_to_action_types** | **string[]** | CTA-button variations. Required. | [optional]
**ad_format** | **string** | Asset-feed ad format. Defaults to SINGLE_IMAGE. | [optional] [default to 'SINGLE_IMAGE']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
