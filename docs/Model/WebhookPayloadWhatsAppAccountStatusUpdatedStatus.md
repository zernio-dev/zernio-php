# # WebhookPayloadWhatsAppAccountStatusUpdatedStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | &#x60;active&#x60; only on a reinstatement (DISABLED_UPDATE with ban state REINSTATE). |
**meta_event** | **string** | Meta &#x60;account_update&#x60; event: ACCOUNT_RESTRICTION, ACCOUNT_VIOLATION, ACCOUNT_DELETED or DISABLED_UPDATE. |
**reason** | **string** | Human-readable summary. Null on reinstatement. |
**violation_type** | **string** | ACCOUNT_VIOLATION only, for example SCAM, ADULT. |
**restrictions** | [**\Zernio\Model\WebhookPayloadWhatsAppAccountStatusUpdatedStatusRestrictionsInner[]**](WebhookPayloadWhatsAppAccountStatusUpdatedStatusRestrictionsInner.md) | ACCOUNT_RESTRICTION only. Empty otherwise. |
**ban_state** | **string** | DISABLED_UPDATE only (for example DISABLE, REINSTATE). |
**ban_date** | **string** | DISABLED_UPDATE only, as Meta sent it (for example \&quot;September 23, 2026\&quot;). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
