# # CampaignParticipantPayout

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | &#x60;not_started&#x60;: no payout account yet. &#x60;onboarding&#x60;: setup started or under review. &#x60;ready&#x60;: payouts enabled. &#x60;restricted&#x60;: Stripe needs more information before paying out. |
**country** | **string** | ISO 3166-1 alpha-2 country of the payout account, null before setup starts. Zernio pays out only to the US, Canada, the UK, the EEA, Switzerland and Gibraltar; pay creators elsewhere yourself and record it with &#x60;recordOnly: true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
