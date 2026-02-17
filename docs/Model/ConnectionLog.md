# # ConnectionLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**user_id** | **string** | User who owns the connection (may be null for early OAuth failures) | [optional]
**profile_id** | **string** |  | [optional]
**account_id** | **string** | The social account ID (present on successful connections and disconnects) | [optional]
**platform** | **string** |  | [optional]
**event_type** | **string** | Type of connection event: connect_success, connect_failed, disconnect, reconnect_success, reconnect_failed | [optional]
**connection_method** | **string** | How the connection was initiated | [optional]
**error** | [**\Late\Model\ConnectionLogError**](ConnectionLogError.md) |  | [optional]
**success** | [**\Late\Model\ConnectionLogSuccess**](ConnectionLogSuccess.md) |  | [optional]
**context** | [**\Late\Model\ConnectionLogContext**](ConnectionLogContext.md) |  | [optional]
**duration_ms** | **int** | How long the operation took in milliseconds | [optional]
**metadata** | **object** | Additional metadata | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
