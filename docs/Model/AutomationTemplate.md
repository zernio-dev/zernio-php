# # AutomationTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A team template&#39;s id (24 hex characters), or the id of one of Zernio&#39;s templates such as &#x60;stop_losers&#x60;. |
**name** | **string** |  |
**description** | **string** |  |
**publisher** | [**\Zernio\Model\AutomationTemplatePublisher**](AutomationTemplatePublisher.md) |  |
**visibility** | **string** | &#x60;team&#x60;: your team only. &#x60;link&#x60;: anyone with the share link can read and install it. &#x60;public&#x60;: one of Zernio&#39;s templates. |
**version** | **int** | Goes up each time the content changes. Renaming or sharing keeps it. |
**areas** | **string[]** | What its automations work on. |
**inputs** | [**\Zernio\Model\AutomationTemplateInput[]**](AutomationTemplateInput.md) |  |
**automations** | [**\Zernio\Model\AutomationTemplateAutomation[]**](AutomationTemplateAutomation.md) |  |
**installs** | **int** | Installs across every team. Always 0 on Zernio&#39;s templates. |
**installed_in_team** | **int** | Your team&#39;s automations made from it. Absent on shared and Zernio templates. | [optional]
**share** | [**\Zernio\Model\AutomationTemplateShare**](AutomationTemplateShare.md) |  |
**created_by** | **string** | The user who saved it. Only on your team&#39;s templates. | [optional]
**created_at** | **\DateTime** | Absent on Zernio&#39;s templates. | [optional]
**updated_at** | **\DateTime** | Absent on Zernio&#39;s templates. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
