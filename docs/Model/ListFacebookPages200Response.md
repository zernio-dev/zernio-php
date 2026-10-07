# # ListFacebookPages200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pages** | [**\Zernio\Model\ListFacebookPages200ResponsePagesInner[]**](ListFacebookPages200ResponsePagesInner.md) |  | [optional]
**truncated** | **bool** | True when Meta still had more Pages after the listing hit its time budget or the 10,000 Page cap, so &#x60;pages&#x60; is incomplete. Do not ask the user to reconnect with fewer Pages ticked: Meta replaces the Page grant on every authorization, so unticked Pages lose access. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
