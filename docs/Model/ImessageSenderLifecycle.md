# # ImessageSenderLifecycle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**kind** | **string** |  | [optional]
**region** | **string** |  | [optional]
**handle** | **string** | The sender handle once activation assigns it | [optional]
**opt_in_link** | **string** | imessage:// deep link that opens Messages on this sender with a prefilled text. Share it so contacts message you first (Apple only lets a sender reach contacts who wrote to it first); null until the handle is assigned. | [optional]
**status** | **string** |  | [optional]
**price_cents** | **int** | Monthly price billed while the sender is active | [optional]
**provider** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**failure_reason** | **string** |  | [optional]
**account_id** | **string** | The messaging account created at activation | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
