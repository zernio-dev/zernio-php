# # BusinessAgentConnector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**description** | **string** |  | [optional]
**base_url** | **string** |  |
**connector_protocol** | **string** |  | [optional]
**auth_type** | **string** |  |
**auth_config** | **array<string,mixed>** | What Meta stores for the connector&#39;s auth (for example oauth2_client_credentials with token_url and client_id), without secret values. | [optional]
**user_auth_injection_config** | [**\Zernio\Model\BusinessAgentConnectorUserAuthInjectionConfig**](BusinessAgentConnectorUserAuthInjectionConfig.md) |  | [optional]
**requires_certificate** | **bool** |  | [optional]
**mcp_tool_sync** | **array<string,mixed>** |  | [optional]
**mtls_config** | **array<string,mixed>** | Certificate details, without client_key or private_key. | [optional]
**connection_status** | [**\Zernio\Model\BusinessAgentConnectorConnectionStatus**](BusinessAgentConnectorConnectionStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
