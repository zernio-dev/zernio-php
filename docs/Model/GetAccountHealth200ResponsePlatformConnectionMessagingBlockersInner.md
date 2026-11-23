# # GetAccountHealth200ResponsePlatformConnectionMessagingBlockersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_type** | **string** | Meta entity the reason is on (for example PHONE_NUMBER, WABA, BUSINESS) | [optional]
**can_send_message** | **string** | That entity&#39;s state (LIMITED or BLOCKED) | [optional]
**code** | **int** | Meta error code. &#x60;null&#x60; for an &#x60;additional_info&#x60; line. | [optional]
**description** | **string** | Meta&#39;s error description, or the &#x60;additional_info&#x60; line as Meta wrote it | [optional]
**possible_solution** | **string** | Meta&#39;s suggested fix, when it gives one | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
