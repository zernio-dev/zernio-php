# # WebhookPayloadContactFieldChanged

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Event id, the dedupe key. |
**event** | **string** |  |
**timestamp** | **\DateTime** |  |
**contact** | [**\Zernio\Model\WebhookPayloadContactTagContact**](WebhookPayloadContactTagContact.md) |  |
**field** | **string** | Custom field slug. |
**previous_value** | **mixed** |  |
**value** | **mixed** |  |
**source** | **string** | Who wrote the field: the API or dashboard, a workflow set_field node, or an automation. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
