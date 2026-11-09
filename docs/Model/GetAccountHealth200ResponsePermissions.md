# # GetAccountHealth200ResponsePermissions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posting** | [**\Zernio\Model\GetAccountHealth200ResponsePermissionsPostingInner[]**](GetAccountHealth200ResponsePermissionsPostingInner.md) |  | [optional]
**analytics** | [**\Zernio\Model\GetAccountHealth200ResponsePermissionsPostingInner[]**](GetAccountHealth200ResponsePermissionsPostingInner.md) |  | [optional]
**optional** | [**\Zernio\Model\GetAccountHealth200ResponsePermissionsPostingInner[]**](GetAccountHealth200ResponsePermissionsPostingInner.md) |  | [optional]
**can_post** | **bool** | Whether the granted OAuth scopes allow posting. Scopes only: for WhatsApp, whether Meta lets the number send is &#x60;platformConnection.phoneStatus&#x60; and the overall &#x60;status&#x60;. | [optional]
**can_fetch_analytics** | **bool** |  | [optional]
**missing_required** | **string[]** |  | [optional]
**scope_areas** | **array<string,string>** | Present when the account connected with &#x60;scopes&#x60; or through your own OAuth app: each permission area the platform splits, as granted, missing or not_requested. An area never requested does not make the account unhealthy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
