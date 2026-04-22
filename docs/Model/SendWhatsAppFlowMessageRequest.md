# # SendWhatsAppFlowMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | WhatsApp social account ID |
**to** | **string** | Recipient phone number (E.164 format, e.g. +1234567890) |
**flow_id** | **string** | Published flow ID |
**flow_cta** | **string** | CTA button text (e.g. &#39;Book Now&#39;, &#39;Sign Up&#39;) |
**flow_action** | **string** | Action type: navigate opens a screen directly, data_exchange hits your endpoint first | [optional] [default to 'navigate']
**flow_token** | **string** | Unique token to correlate responses. Auto-generated UUID if omitted. | [optional]
**flow_action_payload** | [**\Zernio\Model\SendWhatsAppFlowMessageRequestFlowActionPayload**](SendWhatsAppFlowMessageRequestFlowActionPayload.md) |  | [optional]
**body** | **string** | Message body text |
**header** | [**\Zernio\Model\SendWhatsAppFlowMessageRequestHeader**](SendWhatsAppFlowMessageRequestHeader.md) |  | [optional]
**footer** | **string** | Optional footer text | [optional]
**draft** | **bool** | Set true to test an unpublished (DRAFT) flow | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
