# # ForwardingRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Rule ID, used to delete it. | [optional]
**profile_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**destination_id** | **string** | Platform destination (pixel, conversion action, rule, ...). | [optional]
**event_names** | **string[]** | Event names forwarded to this destination; null forwards every event. | [optional]
**sources** | **string[]** | Event sources forwarded to this destination; null forwards events from every source. | [optional]
**api_secret_verified** | **bool** | Only when an &#x60;apiSecret&#x60; was saved by this request. Google Analytics never confirms a Measurement Protocol API secret, so it is &#x60;false&#x60; there: the first events in GA4 Realtime prove the secret is right. | [optional]
**event_name_map** | **array<string,string>** | Renames events for this destination, such as &#x60;{ \&quot;Lead\&quot;: \&quot;Purchase\&quot; }&#x60;; null sends every event under its own name. | [optional]
**value_override** | [**\Zernio\Model\ForwardingRuleValueOverride**](ForwardingRuleValueOverride.md) |  | [optional]
**value_condition** | [**\Zernio\Model\ForwardingRuleValueCondition**](ForwardingRuleValueCondition.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
