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
**created_at** | **\DateTime** |  | [optional]
**resend** | **bool** | Present on create responses: true when an active verification was resent instead of created. | [optional]
**valid** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
