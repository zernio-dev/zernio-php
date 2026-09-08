# # BusinessAgentSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_id** | **string** |  |
**channel** | **string** |  |
**rollout** | [**\Zernio\Model\BusinessAgentSettingsRollout**](BusinessAgentSettingsRollout.md) |  |
**handoff** | [**\Zernio\Model\BusinessAgentSettingsHandoff**](BusinessAgentSettingsHandoff.md) |  | [optional]
**followup** | [**\Zernio\Model\BusinessAgentSettingsFollowup**](BusinessAgentSettingsFollowup.md) |  | [optional]
**ai_audience** | **string** | EVERYONE answers all consumers; ALLOWLISTED_ONLY answers only the allowlist and needs no payment method. | [optional]
**never_say_phrases** | **string[]** | Exact phrases the agent must never say. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
