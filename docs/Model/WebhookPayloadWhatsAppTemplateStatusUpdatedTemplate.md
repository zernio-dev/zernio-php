# # WebhookPayloadWhatsAppTemplateStatusUpdatedTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **string** | Meta&#39;s &#x60;message_template_id&#x60;, returned as a string. |
**name** | **string** | Meta&#39;s &#x60;message_template_name&#x60;. |
**language** | **string** | Meta&#39;s &#x60;message_template_language&#x60; (e.g. &#x60;en_US&#x60;). |
**status** | **string** | New status. Forwarded verbatim from Meta&#39;s &#x60;event&#x60; field. &#x60;PENDING_DELETION&#x60; is the 24h-grace state after a delete request before the template is actually removed. |
**reason** | **string** | Meta&#39;s free-form reason for the transition. &#x60;\&quot;NONE\&quot;&#x60; on approval; an explanation string on rejection. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
