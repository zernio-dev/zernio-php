# # DiscordRole

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Role snowflake ID | [optional]
**name** | **string** |  | [optional]
**color** | **int** | Decimal color (0 &#x3D; no color). Convert to hex via .toString(16). | [optional]
**position** | **int** | Position in role hierarchy (higher &#x3D; more authority) | [optional]
**permissions** | **string** | Permissions bitfield as a stringified integer | [optional]
**managed** | **bool** | True for integration-managed roles (bot roles) | [optional]
**mentionable** | **bool** |  | [optional]
**hoist** | **bool** | True if role is displayed separately in member list | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
