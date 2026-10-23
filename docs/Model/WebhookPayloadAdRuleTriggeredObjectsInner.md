# # WebhookPayloadAdRuleTriggeredObjectsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_id** | **string** | Platform-native ID of the campaign or ad set. |
**name** | **string** | Name on the platform. Falls back to &#x60;platformId&#x60; when the platform reports none. |
**platform_campaign_id** | **string** | Platform-native ID of the campaign the object belongs to (on a campaign-level rule, the campaign&#39;s own ID). Null when unknown. |
**conditions** | [**\Zernio\Model\WebhookPayloadAdRuleTriggeredObjectsInnerConditionsInner[]**](WebhookPayloadAdRuleTriggeredObjectsInnerConditionsInner.md) | Every condition of the rule, with the value the object reached. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
