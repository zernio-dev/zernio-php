# # GetAutomationCatalog200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **object** | JSON Schema of the body of &#x60;POST /v1/automations&#x60;. |
**triggers** | [**\Zernio\Model\GetAutomationCatalog200ResponseTriggersInner[]**](GetAutomationCatalog200ResponseTriggersInner.md) |  |
**subjects** | [**\Zernio\Model\GetAutomationCatalog200ResponseSubjectsInner[]**](GetAutomationCatalog200ResponseSubjectsInner.md) | Ad rule subjects. |
**filters** | **object** | The fields and operators &#x60;subjects.filters&#x60; takes, and which fields each subject accepts. |
**groups** | **object** | What &#x60;subjects.groups&#x60; takes. |
**alert** | **object** | The most checks &#x60;alert.confirmChecks&#x60; can ask for. |
**conditions** | **object** | Condition operators, windows, &#x60;compareTo&#x60; options and size limits. |
**limits** | **string[]** |  |
**approval** | **object** | Where &#x60;approval.request&#x60; goes, how many approvers and how long it can wait. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
