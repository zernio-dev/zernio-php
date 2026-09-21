# # ImessageSender

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Account id (use it with the inbox endpoints&#39; accountId) | [optional]
**platform** | **string** |  | [optional]
**sender** | **string** | The sender handle (E.164 phone or email) | [optional]
**opt_in_link** | **string** | imessage:// deep link that opens Messages on this sender with a prefilled text. Share it so contacts message you first (Apple only lets a sender reach contacts who wrote to it first). | [optional]
**display_name** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**provider** | **string** | Delivery provider backing this sender (e.g. loopmessage) | [optional]
**sender_verified** | **bool** | Whether the provider confirmed the sender as active at registration time | [optional]
**is_active** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
