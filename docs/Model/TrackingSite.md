# # TrackingSite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**status** | **string** |  | [optional]
**install** | [**\Zernio\Model\TrackingSiteInstall**](TrackingSiteInstall.md) |  | [optional]
**store_orders** | **bool** | True when the store&#39;s orders reach Zernio from the store itself, so website purchases are forwarded but not counted twice. | [optional]
**site_key** | **string** | Public key that names the site in the snippet, such as &#x60;zs_...&#x60;. | [optional]
**domains** | **string[]** |  | [optional]
**custom_hostname** | [**\Zernio\Model\TrackingSiteCustomHostname**](TrackingSiteCustomHostname.md) |  | [optional]
**consent_mode** | [**\Zernio\Model\TrackingSiteConsentMode**](TrackingSiteConsentMode.md) |  | [optional]
**checks** | [**\Zernio\Model\TrackingSiteChecksInner[]**](TrackingSiteChecksInner.md) | One per setup step: &#x60;script&#x60; for the install, then one per ad account the site sends to, keyed by its platform and ids. | [optional]
**setup** | [**\Zernio\Model\TrackingSiteSetup**](TrackingSiteSetup.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
