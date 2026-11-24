# # UsageMeteringAttribution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group_by** | **string** |  | [optional]
**groups** | [**\Zernio\Model\UsageAttributionGroup[]**](UsageAttributionGroup.md) |  | [optional]
**unattributed** | [**\Zernio\Model\UsageAttributionSlice**](UsageAttributionSlice.md) | Spend no profile/account of your workspace can claim: credits, managed messages, RCS messages, ad automations, Verify, website events, 10DLC registrations that name no profile, usage whose record no longer resolves, and the share measured outside your workspace. Zero for a restricted principal. | [optional]
**totals** | [**\Zernio\Model\UsageAttributionSlice**](UsageAttributionSlice.md) | The window totals; for a restricted principal, the sum of the visible groups. | [optional]
**restricted** | **bool** | True when the caller (profile-scoped API key or member) cannot see every profile: &#x60;groups&#x60; are filtered, &#x60;totals&#x60; sum them, &#x60;unattributed&#x60; is zero, and the top-level &#x60;days&#x60; / &#x60;totals&#x60; / &#x60;lineItems&#x60; are projected onto the visible groups with &#x60;peaks&#x60;, &#x60;callUsage&#x60; and &#x60;tax&#x60; null. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
