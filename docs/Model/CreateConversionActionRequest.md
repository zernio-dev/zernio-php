# # CreateConversionActionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | SocialAccount ID. Must be a &#x60;googleads&#x60; account. |
**customer_id** | **string** | Google Ads customer id (digits only). Resolved automatically when the connection has exactly one accessible customer. | [optional]
**name** | **string** |  |
**type** | **string** | Only WEBPAGE is supported for creation today. |
**default_value** | **float** | Default conversion value used when an event doesn&#39;t carry its own value. | [optional]
**always_use_default_value** | **bool** | When true, always use defaultValue and ignore any value sent with the event. Defaults to true when defaultValue is set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
