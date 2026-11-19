# # AutoRecharge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether auto top-up is on. Charges happen only when this is true and disabledReason is null. |
**below_cents** | **int** | The below amount, in cents: when the balance drops below this, auto top-up brings it back to toCents. |
**to_cents** | **int** | The back-to amount, in cents. The charge is toCents minus the balance (at least $5, at most toCents unless the balance is below $0 or a monthly fee is due), plus tax. |
**monthly_limit_cents** | **int** | Most auto top-up may add per calendar month (UTC), before tax; null for no limit. |
**alert_below_cents** | **int** | Low-balance email threshold, sent once per drop below it; null for none. |
**disabled_reason** | **string** | &#x60;payment_failed&#x60; once a declined charge is not retried, or its one retry fails; updating the card clears it. &#x60;charge_error&#x60; after 24 charges in a row failed on our side (not the card); turning auto top-up back on (&#x60;enabled: true&#x60;) clears it. |
**retry_count** | **int** | Failed charges in a row; 0 once one goes through. |
**next_retry_at** | **\DateTime** | When a declined auto top-up is tried again; null when none is waiting. |
**month_recharged_cents** | **int** | Auto top-ups this calendar month (UTC), paid or being paid, before tax. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
