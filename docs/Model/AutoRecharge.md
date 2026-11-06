# # AutoRecharge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether auto-recharge is on. Charges happen only when this is true and disabledReason is null. |
**below_cents** | **int** | Recharge when the balance drops below this, in cents. |
**to_cents** | **int** | Recharge back up to this, in cents. The charge is toCents minus the balance, plus tax. |
**monthly_limit_cents** | **int** | Most auto-recharge may add per calendar month (UTC), before tax; null for no limit. |
**alert_below_cents** | **int** | Low-balance email threshold, sent once per drop below it; null for none. |
**disabled_reason** | **string** | &#x60;payment_failed&#x60; after four failed charges in a row. Updating the card clears it. |
**retry_count** | **int** | Failed charges in a row; 0 once one goes through. |
**next_retry_at** | **\DateTime** | When a declined recharge is tried again; null when none is waiting. |
**month_recharged_cents** | **int** | Auto-recharge top-ups this calendar month (UTC), paid or being paid, before tax. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
