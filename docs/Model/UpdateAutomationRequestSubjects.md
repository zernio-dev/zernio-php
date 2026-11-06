# # UpdateAutomationRequestSubjects

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**each** | **string** |  |
**ad_accounts** | [**\Zernio\Model\AutomationSubjectsAdAccountsInner[]**](AutomationSubjectsAdAccountsInner.md) | The ad account to check. One per ad rule, and an edit cannot move it to another. |
**campaign_ids** | **string[]** | Only these platform campaigns or their ad sets and ads. Leave out to check the whole ad account. | [optional]
**filters** | [**\Zernio\Model\AutomationAdFilter[]**](AutomationAdFilter.md) | All must hold. | [optional]
**groups** | [**\Zernio\Model\AutomationSubjectsGroupsInner[]**](AutomationSubjectsGroupsInner.md) | Judges campaigns together (campaign rules only): each group&#39;s numbers are summed and its rates computed on the totals, and a matching group acts on each of its campaigns.  A group with no filters holds every campaign the rule checks. &#x60;reach&#x60; and &#x60;frequency&#x60; cannot be used with groups. | [optional]
**profile_id** | **string** | The profile whose posts are checked. |
**account_ids** | **string[]** | Only posts of these accounts. Each must be active on the profile. | [optional]
**published_within** | **string** | How far back posts are checked, by when they were published. Whole days, from &#x60;1d&#x60; to &#x60;30d&#x60; (&#x60;48h&#x60; is 2 days). | [optional] [default to '7d']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
