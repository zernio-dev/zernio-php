# # AdRuleActionOneOf6

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Move daily budget from the matched objects ranked worst by &#x60;metric&#x60; to those ranked best, keeping the total the same. Not with &#x60;lifecycle&#x60; or &#x60;groups&#x60;.  Campaign or ad set rules where the budget sits at that level: objects whose budget sits at another level (Meta CBO and ad set budgets), Google shared budgets and lifetime budgets are left out.  Changes are reserved all at once: when &#x60;maxChangesPerDay&#x60; would hold back any of them, none is made. A receiver is raised only after every giver&#39;s cut applied (else it fails with &#x60;reallocation_incomplete&#x60; and the move is tried again next run).  Amounts move in the currency&#39;s smallest unit (whole units for JPY or KRW). Counts as raising live spend for the free ads allowance. |
**metric** | **string** | What objects are ranked by: any condition metric except &#x60;day_of_month&#x60; and &#x60;working_day_of_month&#x60;, or a result metric (&#x60;result:&lt;key&gt;&#x60;) on campaign rules.  Objects without a value are not ranked, except one that spent with no result on a metric where lower is best (a CPA with no conversions): it ranks worst and only gives. |
**window** | **string** | The period the metric is read over, like a condition window. |
**best** | **string** | Which end of the ranking is best. Defaults to &#x60;lowest&#x60; for &#x60;cpa&#x60;, &#x60;cpc&#x60;, &#x60;cpm&#x60;, &#x60;frequency&#x60; and result metrics whose formula has spend above the line (cost per sale, %CAC), &#x60;highest&#x60; otherwise. | [optional]
**from** | [**\Zernio\Model\AdRuleActionOneOf6From**](AdRuleActionOneOf6From.md) |  |
**to** | [**\Zernio\Model\AdRuleActionOneOf6To**](AdRuleActionOneOf6To.md) |  |
**percent** | **int** | The share of each giver&#39;s daily budget it gives. | [optional]
**amount** | **float** | The total to move each run, in the ad account currency, taken evenly from the givers. | [optional]
**min_budget** | **float** | A giver never goes below this daily budget. A giver also always keeps a tenth of its budget. | [optional]
**max_budget** | **float** | A receiver never goes above this daily budget; what receivers cannot take stays with the givers. | [optional]
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]
**max_changes_per_object** | **int** | At most this many changes to one object by this rule, counted over the last 400 days. An object at the limit is left alone like one in cooldown. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
