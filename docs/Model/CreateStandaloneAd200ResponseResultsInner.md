# # CreateStandaloneAd200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**node** | **string** | &#x60;identity&#x60; is TikTok only: the identity the ad would run as. | [optional]
**status** | **string** |  | [optional]
**reason** | **string** | Explanation for the node&#39;s result:  - On skipped: why the node could not be validated. - On unverified: why the platform could not dry-run it although the other nodes passed (Meta), or what only a real create checks (TikTok). - On validated: what the dry run could not check, and what the request would do as sent. For example, a Performance Max validation with no location targeting reports here that the campaign would run worldwide. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
