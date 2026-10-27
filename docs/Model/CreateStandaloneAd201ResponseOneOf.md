# # CreateStandaloneAd201ResponseOneOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad** | [**\Zernio\Model\Ad**](Ad.md) |  | [optional]
**applied_defaults** | [**\Zernio\Model\AdAppliedDefaults**](AdAppliedDefaults.md) |  | [optional]
**message** | **string** |  | [optional]
**warnings** | **string[]** | Meta only, present only when needed. An &#x60;activation_failed:&#x60; entry means Meta refused the final switch to ACTIVE: the entry names what was kept PAUSED (the ad, and its ad set or campaign when Meta refused those) and what was switched ACTIVE, and quotes Meta&#39;s error and the status calls that switch the PAUSED ones on later. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
