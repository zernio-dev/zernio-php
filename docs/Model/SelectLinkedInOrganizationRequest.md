# # SelectLinkedInOrganizationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**temp_token** | **string** |  |
**user_profile** | **object** |  |
**account_type** | **string** | Send this (with selectedOrganization for an organization) or selections, not both. | [optional]
**selections** | [**\Zernio\Model\SelectLinkedInOrganizationRequestSelectionsInner[]**](SelectLinkedInOrganizationRequestSelectionsInner.md) | Several accounts to connect from one sign-in (yourself and/or organizations), each as its own account. With two or more entries the response lists &#x60;accounts&#x60; and &#x60;failed&#x60; instead of &#x60;account&#x60;, and the request is refused with 400 while a profile holds one LinkedIn account and on a reconnect or an ads connect. A single entry behaves exactly like accountType. | [optional]
**selected_organization** | [**\Zernio\Model\SelectLinkedInOrganizationRequestSelectedOrganization**](SelectLinkedInOrganizationRequestSelectedOrganization.md) |  | [optional]
**redirect_url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
