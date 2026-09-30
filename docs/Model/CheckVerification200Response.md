# # CheckVerification200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**channel** | **string** |  | [optional]
**to** | **string** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**attempts** | **int** |  | [optional]
**max_attempts** | **int** |  | [optional]
**send_count** | **int** | Accepted deliveries (initial send + resends); each bills one verification fee. | [optional]
**last_sent_at** | **\DateTime** |  | [optional]
**delivery_status** | **string** | WhatsApp only, returned by GET /v1/verify/verifications/{verificationId} (null on create and check responses): what Meta reported for the latest send, null until it reports. A code that never reached the recipient (for example a number not on WhatsApp) reads failed, with the Meta error in deliveryErrorCode. failed does not settle the verification: Meta can report failed and later deliver the same message. Reported for at least an hour after the send, well past any code&#39;s expiry. | [optional]
**delivery_error_code** | **int** | Meta error code when deliveryStatus is failed (e.g. 131026, message undeliverable). | [optional]
**created_at** | **\DateTime** |  | [optional]
**resend** | **bool** | Present on create responses: true when an active verification was resent instead of created. | [optional]
**valid** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
