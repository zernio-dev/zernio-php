# # InlineObject2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | Human-readable error message suitable for end-user display. |
**code** | **string** | Machine-readable error code. Stable across versions. |
**reason** | **string** | Discriminator for which gate fired. |
**documentation_url** | **string** | Link to the relevant documentation page. | [optional]
**dashboard_url** | **string** | Deep-link to send the end-user to. For &#x60;free_tier_exceeded&#x60; and &#x60;twitter_passthrough&#x60; this is the Zernio billing tab. For &#x60;enterprise_required&#x60; this is the Zernio enterprise contact page. | [optional]
**details** | [**\Zernio\Model\InlineObject2Details**](InlineObject2Details.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
