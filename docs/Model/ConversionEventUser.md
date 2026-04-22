# # ConversionEventUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Plaintext email. Hashed server-side. | [optional]
**phone** | **string** | Phone number, ideally E.164. Hashed server-side. | [optional]
**first_name** | **string** | Plaintext first name. Hashed server-side. | [optional]
**last_name** | **string** | Plaintext last name. Hashed server-side. | [optional]
**external_id** | **string** | Stable customer identifier (e.g. CRM user ID). Hashed server-side. | [optional]
**ip_address** | **string** | Client IP address. Sent plaintext. | [optional]
**user_agent** | **string** | Client user-agent string. Sent plaintext. | [optional]
**country** | **string** | ISO 3166-1 alpha-2 country code, e.g. &#39;us&#39;. | [optional]
**click_ids** | [**\Zernio\Model\ConversionEventUserClickIds**](ConversionEventUserClickIds.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
