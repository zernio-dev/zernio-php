# # PostRetryPlatformResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | Platform slug, matching &#x60;post.platforms[].platform&#x60;. |
**account_id** | **string** | Account id of this platform. |
**retried** | **bool** | Whether this request retried the platform. False for a platform that had already published, or one left out of &#x60;platforms&#x60;. |
**status** | **string** | Status after the retry: pending, processing, published, failed, cancelled, uploading. |
**error** | **string** | Failure message for this platform, or null when it did not fail. |
**error_category** | **string** | Stable failure category (for example &#x60;auth_expired&#x60;, &#x60;account_issue&#x60;, &#x60;user_content&#x60;, &#x60;platform_error&#x60;), or null. |
**error_source** | **string** | Who caused the failure (&#x60;user&#x60;, &#x60;platform&#x60; or &#x60;system&#x60;), or null. |
**platform_error_code** | **int** | Error code returned by the platform, when it sent one. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
