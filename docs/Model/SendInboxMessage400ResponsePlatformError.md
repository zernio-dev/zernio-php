# # SendInboxMessage400ResponsePlatformError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Meta or TikTok error code | [optional]
**subcode** | **int** | Meta error_subcode | [optional]
**fbtrace_id** | **string** | Meta fbtrace_id, quote this in a Meta bug report | [optional]
**type** | **string** | Meta error type (e.g. OAuthException) | [optional]
**message** | **string** | TikTok error message. On WhatsApp, Meta&#39;s own error text, set only when error carries Zernio&#39;s explanation instead (code 10, subcode 2593184). | [optional]
**request_id** | **string** | TikTok request_id, quote this in a TikTok support ticket | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
