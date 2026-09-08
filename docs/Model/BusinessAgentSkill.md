# # BusinessAgentSkill

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Lowercase letters, digits and hyphens, e.g. greeting-skill. | [optional]
**description** | **string** | When the agent should apply the skill. | [optional]
**skill** | **string** | The instructions themselves. Avoid two skills that both claim priority for the same situation. |
**id** | **string** |  |
**channel** | **string** |  | [optional]
**created_at** | **int** | Unix seconds. | [optional]
**status** | **string** | pending_review right after a write; blocked means Meta content review rejected it and the agent never applies it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
