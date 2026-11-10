# # ScheduledEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The &#x60;scheduleId&#x60;. | [optional]
**account_id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**subject** | **string** | Empty on a reply that keeps the thread subject. &#x60;null&#x60; once the send finishes under zero content retention. | [optional]
**content_not_retained** | **bool** | Present and &#x60;true&#x60; when the email content was dropped under [zero content retention](/security/zero-content-retention). | [optional]
**reply_to_message_id** | **string** | Set when scheduled through the reply route. | [optional]
**metadata** | **array<string,string>** |  | [optional]
**sent_at** | **\DateTime** |  | [optional]
**sent_message_id** | **string** | Provider id of the sent message once &#x60;status&#x60; is sent. | [optional]
**sent_thread_id** | **string** |  | [optional]
**error** | **string** | Why a failed send did not leave. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
