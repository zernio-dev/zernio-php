# # WebhookPayloadAdVideoProcessedVideo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Meta video id, as returned by the 202 upload response. |
**platform_ad_account_id** | **string** | Meta ad account id (act_&lt;n&gt;) the video was uploaded to. |
**status** | **string** | &#x60;ready&#x60;: usable as &#x60;video.id&#x60; on the create endpoints. &#x60;error&#x60;: Meta could not process it; upload again. |
**error** | **string** | Meta&#39;s processing error when status is &#x60;error&#x60;, otherwise null. |
**thumbnail_url** | **string** | Meta&#39;s auto-generated poster when status is &#x60;ready&#x60; and Meta produced one, otherwise null. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
