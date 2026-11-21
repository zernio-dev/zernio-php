# # CrmDeal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**object_type** | **string** |  |
**name** | **string** |  |
**stage** | **string** | HubSpot stage id (&#x60;closedwon&#x60;), Salesforce &#x60;StageName&#x60; (&#x60;Closed Won&#x60;) or HighLevel pipeline stage id. A HighLevel opportunity&#39;s won or lost &#x60;status&#x60; is a native field (&#x60;properties&#x3D;status&#x60;). |
**amount** | **float** |  |
**currency** | **string** | ISO 4217. HubSpot sets it on multi-currency portals only. Salesforce gives the Opportunity&#39;s currency on multi-currency orgs, else the org currency read from its Currency Locale. Null on HighLevel. |
**close_date** | **\DateTime** | Null on HighLevel, whose opportunities have no close date. |
**owner_id** | **string** |  |
**contact_ids** | **string[]** | Associated HubSpot contacts, the Opportunity&#39;s contact roles (primary first), or the HighLevel opportunity&#39;s contact. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**url** | **string** |  |
**properties** | **array<string,mixed>** |  |
**raw** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
