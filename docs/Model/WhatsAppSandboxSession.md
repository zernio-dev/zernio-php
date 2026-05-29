# # WhatsAppSandboxSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Session id. Use this to revoke via DELETE. |
**phone_e164** | **string** | Digits-only E.164 form (no +, spaces, or dashes). |
**status** | **string** | &#x60;pending&#x60; until the phone replies to the activation template, then &#x60;active&#x60;. Expired sessions are pruned by TTL and never appear in list responses. |
**expires_at** | **\DateTime** | UTC timestamp at which the session becomes invalid. Pending sessions get a 24h window; activated sessions get 7 days. |
**activated_at** | **\DateTime** | When the session transitioned &#x60;pending → active&#x60;, or null. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
