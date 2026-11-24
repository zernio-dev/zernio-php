# # UpdateForwardingRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_secret** | **string** |  | [optional]
**event_name_map** | **array<string,string>** | Your event name to the name this destination gets, such as &#x60;{ \&quot;Lead\&quot;: \&quot;Purchase\&quot; }&#x60;. Names not in the map are sent unchanged.  A target spelled like a standard event in another case or form (&#x60;purchase&#x60;, &#x60;generate_lead&#x60;) is saved as the standard name (&#x60;Purchase&#x60;, &#x60;Lead&#x60;), so each platform gets its own standard event.  &#x60;eventNames&#x60; and &#x60;valueCondition&#x60; are checked against the name and value as received, before renaming. The event id is never changed, so deduplication still works. | [optional]
**value_override** | [**\Zernio\Model\ForwardingRuleValueOverride**](ForwardingRuleValueOverride.md) |  | [optional]
**value_condition** | [**\Zernio\Model\ForwardingRuleValueCondition**](ForwardingRuleValueCondition.md) |  | [optional]
**event_values** | [**array<string,\Zernio\Model\ForwardingRuleEventValue>**](ForwardingRuleEventValue.md) | The value this destination gets for each event name, keyed by the name as received (before &#x60;eventNameMap&#x60; renames it), such as a &#x60;Lead&#x60; worth 20 EUR and a &#x60;QualifiedLead&#x60; worth 150 EUR. An event listed here ignores &#x60;valueOverride&#x60;; events not listed keep it.  The dashboard&#39;s Value sent section (Ads, Conversions, a destination) sets this map. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
