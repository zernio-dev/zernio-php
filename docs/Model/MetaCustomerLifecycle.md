# # MetaCustomerLifecycle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**strategy** | **string** | &#x60;all_customers&#x60; is \&quot;Maximize conversions from all customers\&quot;. &#x60;new_customers&#x60; is \&quot;Acquire new customers\&quot; (excludes existing customers). &#x60;new_customers_excluding_engaged&#x60; also excludes people who engaged with you but have not bought yet. |
**existing_customer_audience_ids** | **string[]** | Custom audience ids that define your existing customers. Required with both new_customers strategies (Meta answers 400 subcode 1870251 without them); not allowed with all_customers. | [optional]
**engaged_audience_ids** | **string[]** | Custom audience ids of people who engaged but have not bought. Required with new_customers_excluding_engaged, not allowed with the other strategies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
