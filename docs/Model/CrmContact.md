# # CrmContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The CRM&#39;s own id. |
**object_type** | **string** | &#x60;lead&#x60; only on Salesforce. |
**first_name** | **string** |  |
**last_name** | **string** |  |
**email** | **string** |  |
**phone** | **string** | The phone, else the mobile phone, as stored in the CRM. |
**company** | **string** | HubSpot &#x60;company&#x60;; Salesforce Lead &#x60;Company&#x60; or Contact Account name; HighLevel &#x60;companyName&#x60;. |
**owner_id** | **string** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**url** | **string** | Opens the record in the CRM. |
**properties** | **array<string,mixed>** | The native fields asked for with &#x60;properties&#x60;, by name. |
**raw** | **array<string,mixed>** | The CRM&#39;s own record, only with &#x60;includeRaw&#x3D;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
