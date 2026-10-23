# # ConnectHandoff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**accounts** | [**\Zernio\Model\ConnectHandoffAccountsInner[]**](ConnectHandoffAccountsInner.md) | Filled when &#x60;status&#x60; is &#x60;connected&#x60;: every account the connect added (several when the user picked several pages, locations or organizations), each checked to be on the profile the connect was started for and written during this handoff. Empty otherwise. | [optional]
**error** | [**\Zernio\Model\ConnectHandoffError**](ConnectHandoffError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
