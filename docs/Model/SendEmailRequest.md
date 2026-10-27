# # SendEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  |
**cc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**bcc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**reply_to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**from_name** | **string** |  | [optional]
**subject** | **string** |  |
**text** | **string** | Plain-text body. One of &#x60;text&#x60; or &#x60;html&#x60; is required. | [optional]
**html** | **string** |  | [optional]
**attachments** | [**\Zernio\Model\SendEmailRequestAttachmentsInner[]**](SendEmailRequestAttachmentsInner.md) | 25 MB in total; 3 MB per attachment on Microsoft. | [optional]
**headers** | **array<string,string>** | Custom &#x60;X-&#x60; headers only. &#x60;List-Unsubscribe&#x60; is dropped on Microsoft and reported in &#x60;metadata.droppedHeaders&#x60;. | [optional]
**metadata** | **array<string,string>** |  | [optional]
**scheduled_for** | **\DateTime** | Reserved; currently rejected. | [optional]
**hold_as_draft** | **bool** | Reserved; currently rejected. | [optional]
**track_opens** | **bool** | Not available; must be false. | [optional]
**track_links** | **bool** | Not available; must be false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
