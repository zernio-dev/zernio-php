# # UpdateAutoRechargeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Turns auto top-up on or off. A rule switched off by failed charges stays off until the card is updated. | [optional]
**below_cents** | **int** | Auto top-up charges the card when the balance drops below this, in cents. At least $5. | [optional]
**to_cents** | **int** | Top back up to this, in cents. More than $5 above belowCents. | [optional]
**monthly_limit_cents** | **int** | Most auto top-up may add per calendar month (UTC), before tax. Null for no limit. | [optional]
**alert_below_cents** | **int** | Email the billing owner once each time the balance drops below this. Null for no email. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
