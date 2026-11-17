# # AdRuleGroupsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique in the rule, ignoring case. |
**filters** | [**\Zernio\Model\AdRuleFiltersInner[]**](AdRuleFiltersInner.md) | Narrows the objects the rule checks. Every filter must hold. A campaign rule reads &#x60;name&#x60;, &#x60;campaign_id&#x60;, &#x60;goal&#x60;, &#x60;days_live&#x60;, &#x60;days_since_change&#x60;, &#x60;budget_level&#x60; and &#x60;channel_type&#x60;; an ad set rule all but &#x60;days_since_change&#x60;, plus &#x60;campaign_name&#x60; and &#x60;adset_id&#x60;; an ad rule also &#x60;adset_name&#x60; and &#x60;ad_id&#x60;.  A keyword rule reads &#x60;name&#x60; (the keyword text), &#x60;campaign_name&#x60;, &#x60;adset_name&#x60;, &#x60;campaign_id&#x60;, &#x60;adset_id&#x60; and &#x60;match_type&#x60;. A search term rule reads those (&#x60;name&#x60; is the term) plus &#x60;search_term_status&#x60; and &#x60;blocked_by_negative&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
