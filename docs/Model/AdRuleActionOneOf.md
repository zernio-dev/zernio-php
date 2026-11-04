# # AdRuleActionOneOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Send the &#x60;ad_rule.triggered&#x60; webhook, and the alert to every &#x60;send&#x60; destination. |
**send** | [**\Zernio\Model\AdRuleActionOneOfSendInner[]**](AdRuleActionOneOfSendInner.md) | Also send a short alert through accounts you connected: what matched, the values and what the rule did. Up to 5 destinations, checked when the rule is saved.  A destination that fails is reported in the run&#39;s &#x60;notification&#x60;; it never undoes a change. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
