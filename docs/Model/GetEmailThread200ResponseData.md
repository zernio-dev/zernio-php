# # GetEmailThread200ResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**provider** | **string** |  | [optional]
**subject** | **string** |  | [optional]
**snippet** | **string** |  | [optional]
**participants** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**message_ids** | **string[]** |  | [optional]
**draft_ids** | **string[]** |  | [optional]
**folders** | **string[]** |  | [optional]
**labels** | **string[]** | Every label (Gmail) or category (Outlook) on any message of the thread. | [optional]
**has_attachments** | **bool** |  | [optional]
**has_drafts** | **bool** |  | [optional]
**unread** | **bool** |  | [optional]
**starred** | **bool** |  | [optional]
**earliest_message_at** | **\DateTime** |  | [optional]
**latest_message_received_at** | **\DateTime** |  | [optional]
**latest_message_sent_at** | **\DateTime** |  | [optional]
**messages** | [**\Zernio\Model\EmailMessage[]**](EmailMessage.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
