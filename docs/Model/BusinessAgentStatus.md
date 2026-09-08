# # BusinessAgentStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eligible** | **bool** | Whether the number can run the agent; null when the terms are not accepted yet (Meta refuses the check). |
**terms_accepted** | **bool** | False when Meta rejects calls because the merchant has not accepted the terms in WhatsApp Manager. |
**onboarded** | **bool** | An agent exists on the number (onboard was called). |
**enabled** | **bool** | The agent answers live conversations. |
**agent_id** | **string** |  |
**settings** | [**\Zernio\Model\BusinessAgentSettings**](BusinessAgentSettings.md) |  |
**manual_steps** | [**\Zernio\Model\BusinessAgentStatusManualStepsInner[]**](BusinessAgentStatusManualStepsInner.md) | Steps Meta keeps outside the API that Zernio can verify are still pending. |
**unverified_steps** | [**\Zernio\Model\BusinessAgentStatusUnverifiedStepsInner[]**](BusinessAgentStatusUnverifiedStepsInner.md) | Steps Meta keeps outside the API and exposes no state for, listed once an agent exists. Informational: Zernio cannot tell whether the merchant already did them. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
