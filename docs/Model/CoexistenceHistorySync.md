# # CoexistenceHistorySync

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | - &#x60;requested&#x60;: Meta accepted the request and has not sent history yet, which can take a while. - &#x60;imported&#x60;: Meta sent chat history to this account, including history a reconnect kept. - &#x60;declined&#x60;: the business chose not to share its chat history in Meta&#39;s window. - &#x60;already_synced&#x60;: Meta refused the request because an earlier connection already used the number&#39;s one history share. Disconnecting inside the WhatsApp Business app (Settings &gt; Account &gt; Business Platform), then connecting again gets a new import. - &#x60;refused&#x60;: Meta refused it for another reason. | [optional]
**request_id** | **string** | The id of the last history request Meta accepted, kept across reconnects. Quote it in a Meta support case. | [optional]
**refused_at** | **\DateTime** | When Meta refused the latest request. Null when it was accepted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
