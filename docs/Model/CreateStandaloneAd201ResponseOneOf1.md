# # CreateStandaloneAd201ResponseOneOf1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\Zernio\Model\Ad[]**](Ad.md) |  | [optional]
**platform_campaign_id** | **string** |  | [optional]
**platform_ad_set_id** | **string** |  | [optional]
**applied_defaults** | [**\Zernio\Model\AdAppliedDefaults**](AdAppliedDefaults.md) |  | [optional]
**message** | **string** |  | [optional]
**recovered_writes** | [**\Zernio\Model\MetaRecoveredWritesInner[]**](MetaRecoveredWritesInner.md) | Meta only, present only when needed. Every object this request did not get confirmed by its first POST: found by name after Meta lost or failed its answer (&#x60;adopted&#x60;), or created by a second POST after a Meta 5xx (&#x60;repostedAfter&#x60;).  A re-POSTed object may have a twin from the first POST that Meta wrote late: check its parent for a duplicate name. Send &#x60;retryOnServerError: false&#x60; to never re-POST. | [optional]
**warnings** | **string[]** | Meta only, present only when needed.  An &#x60;activation_failed:&#x60; entry means Meta refused the final switch to ACTIVE for the ads it names (or for their ad set or campaign). The entry names what was kept PAUSED and what was switched ACTIVE, and quotes Meta&#39;s error and the status calls that switch the PAUSED ones on later. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
