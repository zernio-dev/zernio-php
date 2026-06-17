# # ErrorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | Human-readable error message. | [optional]
**type** | **string** | Error class for programmatic handling. | [optional]
**code** | **string** | Stable machine-readable error code. | [optional]
**param** | **string** | The request field that caused the error, when applicable. | [optional]
**platform** | **string** | Upstream platform (e.g. meta, google, tiktok) — present when type is platform_error. | [optional]
**platform_error** | **array<string,mixed>** | Raw error payload from the upstream platform, passed through verbatim so integrators can read provider-specific codes. For Meta this includes error_subcode, error_user_title, and error_user_msg. | [optional]
**details** | **array<string,mixed>** | Additional structured context (e.g. field-level validation errors). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
