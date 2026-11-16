# # GetAccountHealth200ResponseSendCap

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **int** | Today&#39;s cap: the base cap, doubled after 14 days of sending with no spam signal. | [optional]
**base_limit** | **int** | The cap before doubling. | [optional]
**doubled** | **bool** |  | [optional]
**doubles_at** | **\DateTime** | When the cap doubles if the mailbox sends every day from now on and raises no spam signal. Null once doubled, with a manual limit, and on IMAP. | [optional]
**used** | **int** |  | [optional]
**resets_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
