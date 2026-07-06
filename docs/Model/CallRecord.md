# # CallRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**account_id** | **string** | Owning social account. The unified /v1/calls/{id} detail + recording endpoints work for any channel; the channel-specific endpoints remain for account-scoped access. | [optional]
**conversation_id** | **string** | Inbox conversation with the counterparty, when one exists. | [optional]
**contact_id** | **string** | CRM Contact for the counterparty, when resolved. | [optional]
**channel** | **string** |  | [optional]
**direction** | **string** |  | [optional]
**from** | **string** | Caller number (E.164). | [optional]
**to** | **string** | Callee number (E.164). | [optional]
**forward_to** | **string** | Destination the call was routed to (tel:/sip:/wss:), snapshotted at routing time. | [optional]
**greeting** | **string** | Outbound PSTN only. Message spoken to the callee on answer, before the bridge. | [optional]
**status** | **string** |  | [optional]
**is_voicemail** | **bool** | True when an inbound call went to voicemail. | [optional]
**amd** | **bool** | Outbound answering-machine detection was requested for this call. | [optional]
**answered_machine** | **bool** | With &#x60;amd&#x60;, whether a machine (vs a human) answered. | [optional]
**forward_caller_id** | **string** | Caller ID presented on the forwarded leg. | [optional]
**recording_enabled** | **bool** | Effective flag for THIS call (number default + per-call override, resolved at create time). | [optional]
**transcription_enabled** | **bool** |  | [optional]
**transcription_language** | **string** |  | [optional]
**started_at** | **\DateTime** |  | [optional]
**answered_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]
**transferred_at** | **\DateTime** | When the call was blind-transferred (POST /v1/voice/calls/{id}/transfer). | [optional]
**duration_seconds** | **int** |  | [optional]
**end_reason** | **string** |  | [optional]
**hangup_cause** | **string** | Raw carrier hangup cause behind endReason (e.g. normal_clearing, not_found, time_limit) — the actual motive when endReason is a coarse bucket. | [optional]
**sip_hangup_cause** | **string** | SIP response code that ended the call, when SIP-signalled (e.g. &#39;403&#39;, &#39;488&#39;). The real failure reason for SIP legs. | [optional]
**call_errors** | [**\Zernio\Model\CallRecordCallErrorsInner[]**](CallRecordCallErrorsInner.md) | Per-call failure log (dial failed, bridge failed, recording error). | [optional]
**recording_url** | **string** | May be expired. Resolve a fresh playable URL via GET /v1/calls/{id}/recording (any channel). | [optional]
**last_transcript_snippet** | **string** | Most recent transcript segment, for list previews. | [optional]
**transcript** | [**\Zernio\Model\CallRecordTranscriptInner[]**](CallRecordTranscriptInner.md) | Full transcript segments (detail endpoint only; omitted from lists). | [optional]
**billing** | [**\Zernio\Model\CallRecordBilling**](CallRecordBilling.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
