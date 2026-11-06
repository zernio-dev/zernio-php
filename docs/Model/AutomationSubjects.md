# # AutomationSubjects

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**each** | **string** | The objects judged one by one. |
**ad_accounts** | [**\Zernio\Model\AutomationSubjectsAdAccountsInner[]**](AutomationSubjectsAdAccountsInner.md) | The ad account to check. One per ad rule, and an edit cannot move it to another. |
**campaign_ids** | **string[]** | Only these platform campaigns or their ad sets and ads. Leave out to check the whole ad account. | [optional]
**filters** | [**\Zernio\Model\AutomationAdFilter[]**](AutomationAdFilter.md) | All must hold. | [optional]
**groups** | [**\Zernio\Model\AutomationSubjectsGroupsInner[]**](AutomationSubjectsGroupsInner.md) | Judges campaigns together (campaign rules only): each group&#39;s numbers are summed and its rates computed on the totals, and a matching group acts on each of its campaigns.  A group with no filters holds every campaign the rule checks. &#x60;reach&#x60; and &#x60;frequency&#x60; cannot be used with groups. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
