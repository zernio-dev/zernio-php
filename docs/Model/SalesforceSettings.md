# # SalesforceSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | Zernio account ID of the Salesforce connection. |
**platform** | **string** |  |
**org_id** | **string** | 18-character Salesforce organization ID. |
**org_name** | **string** | The org&#39;s name, when the connected user can read it. |
**environment** | **string** | Whether the org was connected through login.salesforce.com or test.salesforce.com. |
**instance_url** | **string** | The org&#39;s API host, for example &#x60;https://acme.my.salesforce.com&#x60;. |
**installed_by** | **string** | Email or username of the Salesforce user who connected the org. |
**sync_contacts** | **bool** | Whether Zernio creates a Lead or Contact (per &#x60;createAs&#x60;) for an inbox contact that matches nobody by phone or email. |
**log_messages** | **bool** | Whether Zernio logs inbox messages. Each person, channel and UTC day gets one completed Task (subject &#x60;WhatsApp conversation · 2026-11-17&#x60;) whose Description holds the transcript; a day past 32,000 characters continues in a Task marked \&quot;(part 2)\&quot;. |
**create_as** | **string** | What a person new to Salesforce is created as. |
**log_delivery_status** | **bool** | Whether sent messages in the transcript are marked delivered, read or failed. |
**sync_issue** | [**\Zernio\Model\SalesforceSettingsSyncIssue**](SalesforceSettingsSyncIssue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
