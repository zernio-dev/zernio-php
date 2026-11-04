# # AdRuleSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**every_minutes** | **int** | How often the rule runs, in minutes. Null on a rule that runs at set times. | [optional]
**times** | [**\Zernio\Model\AdRuleScheduleTimesInner[]**](AdRuleScheduleTimesInner.md) | Set weekly times in the ad account timezone, instead of an interval. A rule that changes ads needs a cooldown of at least the shortest gap between two times. | [optional]
**starts_at** | **\DateTime** | The rule runs from this time on. | [optional]
**ends_at** | **\DateTime** | The rule stops running after this time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
