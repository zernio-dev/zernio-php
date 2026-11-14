# # ConnectLineCredentials200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** |  | [optional]
**account** | [**\Zernio\Model\ConnectedMessagingAccount**](ConnectedMessagingAccount.md) |  | [optional]
**webhook** | [**\Zernio\Model\ConnectLineCredentials200ResponseWebhook**](ConnectLineCredentials200ResponseWebhook.md) |  | [optional]
**next_steps** | **string[]** | Settings the account owner still has to change in LINE Official Account Manager. Led by the turn-on-Webhooks step when &#x60;webhook.active&#x60; is &#x60;false&#x60;, then by a warning when &#x60;webhook.previousUrl&#x60; is set. The turn-on-Webhooks step is left out when &#x60;webhook.active&#x60; is &#x60;true&#x60;. | [optional]
**redirect_url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
