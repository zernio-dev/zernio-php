# # BusinessAgentConnector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique per number. |
**description** | **string** | Tell the agent what the service provides. | [optional]
**base_url** | **string** | Public HTTPS URL reachable from Meta. |
**connector_protocol** | **string** |  | [optional]
**auth_type** | **string** |  |
**auth_config** | [**\Zernio\Model\BusinessAgentConnectorInputAuthConfig**](BusinessAgentConnectorInputAuthConfig.md) |  | [optional]
**user_auth_injection_config** | [**\Zernio\Model\BusinessAgentConnectorInputUserAuthInjectionConfig**](BusinessAgentConnectorInputUserAuthInjectionConfig.md) |  | [optional]
**requires_certificate** | **bool** |  | [optional]
**id** | **string** |  |
**mcp_tool_sync** | **array<string,mixed>** |  | [optional]
**mtls_config** | **array<string,mixed>** |  | [optional]
**connection_status** | [**\Zernio\Model\BusinessAgentConnectorAllOfConnectionStatus**](BusinessAgentConnectorAllOfConnectionStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
