# # OrderImessageSenderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**kind** | **string** |  |
**region** | **string** | Required for phone senders. Without availableNumberId the number is carrier-assigned in this region and revealed once the sender activates. | [optional]
**available_number_id** | **string** | A number from GET /v1/imessage/senders/available-numbers. It is assigned and activated on order instead of waiting for provisioning. Phone senders only. | [optional]
**zip_code** | **string** | US phone senders only. Preferred area for a carrier-assigned number (ignored with availableNumberId). | [optional]
**email_name** | **string** | Local part for email senders (required for kind: email) | [optional]
**email_domain** | **string** | Domain for email senders (required for kind: email) | [optional]
**display_name** | **string** |  | [optional]
**purchase_intent_id** | **string** | Idempotency key for safe retries | [optional]
**contact** | [**\Zernio\Model\OrderImessageSenderRequestContact**](OrderImessageSenderRequestContact.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
