# # SelectLinkedInOrganization200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** |  | [optional]
**redirect_url** | **string** | The redirect URL with connection params appended (only if redirect_url was provided in request) | [optional]
**account** | [**\Zernio\Model\SelectLinkedInOrganization200ResponseAccount**](SelectLinkedInOrganization200ResponseAccount.md) |  | [optional]
**accounts** | **object[]** | selections only. The connected accounts, same shape as &#x60;account&#x60;. The redirect_url then carries &#x60;accountIds&#x60; (comma-separated) and &#x60;accountId&#x60; of the first. | [optional]
**failed** | [**\Zernio\Model\SelectLinkedInOrganization200ResponseFailedInner[]**](SelectLinkedInOrganization200ResponseFailedInner.md) | selections only. The accounts that could not be connected while the others were. &#x60;id&#x60; is the organization URN or the member id, or &#x60;selections[i]&#x60; for an entry naming neither. | [optional]
**bulk_refresh** | [**\Zernio\Model\SelectLinkedInOrganization200ResponseBulkRefresh**](SelectLinkedInOrganization200ResponseBulkRefresh.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
