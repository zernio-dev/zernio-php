# # GetAccountHealth200ResponseLineWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | &#x60;false&#x60;: Webhooks are turned off in LINE Official Account Manager (LINE Developers Console: Use webhook), so LINE sends no messages to Zernio; turn it on in Settings &gt; Response settings. &#x60;null&#x60;: LINE could not be read, not evidence either way. | [optional]
**destination** | **string** | Where the channel&#39;s webhook URL points.  - &#x60;zernio&#x60;: the URL Zernio set for this account. - &#x60;another_zernio_account&#x60;: another Zernio account connected to the same channel, which receives its events instead. - &#x60;other&#x60;: another integration&#39;s URL (reconnect the account to point it back). - &#x60;missing&#x60;: no URL is set. - &#x60;null&#x60;: LINE could not be read. | [optional]
**checked_at** | **\DateTime** | When this live read ran (always the current request; never cached) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
