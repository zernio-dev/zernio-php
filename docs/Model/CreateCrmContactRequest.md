# # CreateCrmContactRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**phone** | **string** |  | [optional]
**company** | **string** |  | [optional]
**owner_id** | **string** | An id from &#x60;GET /v1/crm/{accountId}/owners&#x60;. | [optional]
**properties** | [**array<string,\Zernio\Model\CrmNativePropertiesValue>**](CrmNativePropertiesValue.md) | Native fields by internal name (HubSpot &#x60;lifecyclestage&#x60;, Salesforce &#x60;LeadSource&#x60; or &#x60;Industry__c&#x60;). On GoHighLevel, a record field (&#x60;source&#x60;, an opportunity &#x60;status&#x60;) or else a custom field id or key. A unified field of the same request wins over its native twin. &#x60;null&#x60; clears a field. | [optional]
**create_as** | **string** | Salesforce only. Defaults to the connection&#39;s &#x60;createAs&#x60; setting. Ignored on HubSpot and GoHighLevel. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
