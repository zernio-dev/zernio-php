# # GetEvent200ResponseDeliveriesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**destination_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**status** | **string** | &#x60;dropped&#x60;: not sent because the visitor did not consent; &#x60;errorCode&#x60; says why (&#x60;consent_denied&#x60; or &#x60;consent_missing&#x60;). | [optional]
**attempt** | **int** | Send attempt (1 &#x3D; the first). | [optional]
**error** | **string** |  | [optional]
**error_code** | **string** |  | [optional]
**sent_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
