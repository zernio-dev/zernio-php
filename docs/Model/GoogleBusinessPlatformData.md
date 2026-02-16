# # GoogleBusinessPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **string** | Target Google Business location ID for multi-location posting. Format: \&quot;locations/123456789\&quot; If omitted, uses the selected/default location on the connection. Use GET /api/v1/accounts/{id}/gmb-locations to list available locations. | [optional]
**language_code** | **string** | BCP 47 language code for the post content (e.g., \&quot;en\&quot;, \&quot;de\&quot;, \&quot;es\&quot;, \&quot;fr\&quot;). If omitted, the language is automatically detected from the post text. Setting this explicitly is recommended when auto-detection may not be accurate (e.g., very short posts, mixed-language content, or transliterated text). | [optional]
**call_to_action** | [**\Late\Model\GoogleBusinessPlatformDataCallToAction**](GoogleBusinessPlatformDataCallToAction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
