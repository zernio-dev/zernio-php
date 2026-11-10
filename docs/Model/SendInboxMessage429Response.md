# # SendInboxMessage429Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** |  |
**type** | **string** | Error class for programmatic handling. |
**code** | **string** |  |
**param** | **string** | The request field that caused the error, when applicable. | [optional]
**doc_url** | **string** | Documentation page for resolving the error, when one applies. | [optional]
**platform** | **string** |  |
**platform_error** | [**\Zernio\Model\WhatsAppTemplateLookupErrorPlatformError**](WhatsAppTemplateLookupErrorPlatformError.md) |  | [optional]
**provider** | **string** | Email API: the mailbox provider the error came from (&#x60;google&#x60;, &#x60;microsoft&#x60;). | [optional]
**provider_error** | [**\Zernio\Model\ErrorResponseProviderError**](ErrorResponseProviderError.md) |  | [optional]
**retryable** | **bool** | Email API: whether the same request can succeed if retried (with the same &#x60;Idempotency-Key&#x60; for sends). | [optional]
**request_id** | **string** | Email API: the request id, also in the &#x60;X-Request-Id&#x60; header. Quote it when you contact support. | [optional]
**docs_url** | **string** | Email API: where this &#x60;code&#x60; is documented. | [optional]
**details** | [**\Zernio\Model\WhatsAppTemplateLookupErrorDetails**](WhatsAppTemplateLookupErrorDetails.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
