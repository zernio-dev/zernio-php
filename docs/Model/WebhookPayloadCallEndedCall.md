# # WebhookPayloadCallEndedCall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**meta_call_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**phone_number_id** | **string** |  | [optional]
**direction** | **string** |  | [optional]
**from** | **string** |  | [optional]
**to** | **string** |  | [optional]
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]
**duration_seconds** | **int** |  | [optional]
**end_reason** | **string** |  | [optional]
**hangup_cause** | **string** | Raw carrier hangup cause behind endReason (e.g. normal_clearing, call_rejected, not_found). Null when the carrier reported none. | [optional]
**sip_hangup_cause** | **string** | SIP response code that ended the call when SIP-signalled (e.g. &#39;403&#39;, &#39;486&#39;, &#39;603&#39;). endReason collapses all three to &#39;rejected&#39;, so this is what separates a refused destination from a busy line. Null on non-SIP legs. | [optional]
**is_voicemail** | **bool** | True when the inbound call was handled by voicemail, whether scheduled or because the forward did not connect. | [optional]
**call_errors** | [**\Zernio\Model\CallRecordCallErrorsInner[]**](CallRecordCallErrorsInner.md) | Failures recorded on the call up to hangup (bridge failed, dial failed, recording error). Empty on a clean call.  - &#x60;message&#x60; is free-form diagnostic text and is not stable; do not parse it. - &#x60;code&#x60; is 0 unless a provider code is known.  Errors the carrier reports after hangup appear only on GET /v1/calls/{id}. | [optional]
**recording_url** | **string** |  | [optional]
**recording_expires_at** | **\DateTime** |  | [optional]
**billing** | [**\Zernio\Model\WebhookPayloadCallEndedCallBilling**](WebhookPayloadCallEndedCallBilling.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
