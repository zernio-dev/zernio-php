# # GetGmbAttributeMetadata200ResponseAttributeMetadataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent** | **string** | Resource name of the attribute (e.g. \&quot;attributes/has_delivery\&quot;). | [optional]
**value_type** | **string** | Value type (e.g. BOOL, ENUM, URL, REPEATED_ENUM). | [optional]
**display_name** | **string** | Localized human-readable attribute name. | [optional]
**group_display_name** | **string** | Display name of the attribute group. | [optional]
**repeatable** | **bool** | True if multiple values can be set simultaneously. | [optional]
**deprecated** | **bool** | True if this attribute should no longer be used. | [optional]
**value_metadata** | [**\Zernio\Model\GetGmbAttributeMetadata200ResponseAttributeMetadataInnerValueMetadataInner[]**](GetGmbAttributeMetadata200ResponseAttributeMetadataInnerValueMetadataInner.md) | Possible enum values (for ENUM / REPEATED_ENUM types). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
