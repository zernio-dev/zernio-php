# # CreateForwardingRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**account_id** | **string** | Connected ads account ID that owns the destination. |
**destination_id** | **string** | The platform destination: a pixel, a conversion action or a conversion rule. |
**event_names** | **string[]** |  | [optional]
**sources** | **string[]** | Forward only events from these sources, such as only &#x60;web&#x60; for a tracked website. Leave it out to forward events from every source. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
