# # RetryPost402Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | Human-readable error message. | [optional]
**type** | **string** | Error class for programmatic handling. | [optional]
**code** | **string** | Stable machine-readable error code. | [optional]
**param** | **string** | The request field that caused the error, when applicable. | [optional]
**doc_url** | **string** | Documentation page for resolving the error, when one applies. | [optional]
**platform** | **string** | Upstream platform (e.g. meta, google, tiktok), present when type is platform_error. | [optional]
**platform_error** | **array<string,mixed>** | Raw error payload from the upstream platform, passed through verbatim so integrators can read provider-specific codes. For Meta this includes error_subcode, error_user_title, and error_user_msg. | [optional]
**provider** | **string** | Email API: the mailbox provider the error came from (&#x60;google&#x60;, &#x60;microsoft&#x60;). | [optional]
**provider_error** | [**\Zernio\Model\ErrorResponseProviderError**](ErrorResponseProviderError.md) |  | [optional]
**retryable** | **bool** | Email API: whether the same request can succeed if retried (with the same &#x60;Idempotency-Key&#x60; for sends). | [optional]
**request_id** | **string** | Email API: the request id, also in the &#x60;X-Request-Id&#x60; header. Quote it when you contact support. | [optional]
**docs_url** | **string** | Email API: where this &#x60;code&#x60; is documented. | [optional]
**details** | [**\Zernio\Model\ErrorResponseDetails**](ErrorResponseDetails.md) |  | [optional]
**funding_url** | **string** | Dashboard link to Billing that opens the Add funds drawer (the add-card drawer first when there is no card). Send the user there, then retry. |
**required_cents** | **int** | Only when an item debited later (a phone number&#39;s first month, all numbers of the order) is refused: what the balance must hold, in cents. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
