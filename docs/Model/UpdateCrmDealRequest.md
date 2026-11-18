# # UpdateCrmDealRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**stage** | **string** | HubSpot stage id or Salesforce &#x60;StageName&#x60;. | [optional]
**amount** | **float** |  | [optional]
**currency** | **string** | ISO 4217 code. Multi-currency portals and orgs only. | [optional]
**close_date** | **\DateTime** |  | [optional]
**owner_id** | **string** | An id from &#x60;GET /v1/crm/{accountId}/owners&#x60;. | [optional]
**properties** | [**array<string,\Zernio\Model\CrmNativePropertiesValue>**](CrmNativePropertiesValue.md) | Native fields by internal name (HubSpot &#x60;lifecyclestage&#x60;, Salesforce &#x60;LeadSource&#x60; or &#x60;Industry__c&#x60;). A unified field of the same request wins over its native twin. &#x60;null&#x60; clears a field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
