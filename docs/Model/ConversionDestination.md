# # ConversionDestination

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native identifier. Pass back as &#x60;destinationId&#x60; on event send and as the path segment on CRUD endpoints. |
**name** | **string** |  |
**type** | **string** | Present when the platform locks the event type/category to the destination (Google conversion actions, LinkedIn conversion rules). Absent for Meta pixels (which accept any event name per request). | [optional]
**status** | **string** | For LinkedIn, &#x60;inactive&#x60; means the rule is soft-deleted (&#x60;enabled: false&#x60;). | [optional]
**ad_account_id** | **string** | Set by adapters whose destinations are scoped to a specific ad account (LinkedIn). Pass back on subsequent CRUD calls to identify the parent ad account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
