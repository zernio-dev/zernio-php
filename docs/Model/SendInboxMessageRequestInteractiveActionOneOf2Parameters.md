# # SendInboxMessageRequestInteractiveActionOneOf2Parameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flow_message_version** | **string** | Defaults to \&quot;3\&quot; when omitted. | [optional]
**flow_token** | **string** | Opaque token you choose to correlate Flow responses with your own state (max 200 chars). |
**flow_id** | **string** | Published Flow ID from Meta Business Manager. |
**flow_cta** | **string** | Button label that opens the Flow (max 20 chars). |
**flow_action** | **string** | &#x60;navigate&#x60; sends the user to &#x60;flow_action_payload.screen&#x60;; &#x60;data_exchange&#x60; posts data to your Flow endpoint. |
**flow_action_payload** | [**\Late\Model\SendInboxMessageRequestInteractiveActionOneOf2ParametersFlowActionPayload**](SendInboxMessageRequestInteractiveActionOneOf2ParametersFlowActionPayload.md) |  | [optional]
**mode** | **string** | Set to &#x60;draft&#x60; to test an unpublished Flow. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
