# # TrackingSite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**status** | **string** | &#x60;paused&#x60; while the workspace is over its free website events for the month with no payment method: the site records nothing until one is added. | [optional]
**install** | [**\Zernio\Model\TrackingSiteInstall**](TrackingSiteInstall.md) |  | [optional]
**store_orders** | **bool** | True when the store&#39;s orders reach Zernio from the store itself, so website purchases are forwarded but not counted twice. | [optional]
**site_key** | **string** | Public key that names the site in the snippet, such as &#x60;zs_...&#x60;. | [optional]
**domains** | **string[]** |  | [optional]
**custom_hostname** | [**\Zernio\Model\TrackingSiteCustomHostname**](TrackingSiteCustomHostname.md) |  | [optional]
**proxy** | [**\Zernio\Model\TrackingSiteProxy**](TrackingSiteProxy.md) |  | [optional]
**google_tag_ids** | **string[]** | The site&#39;s own Google tags (Tag Manager, GA4, Google Ads) its own-domain path relays to Google, so they load and measure from the site&#39;s domain. | [optional]
**consent_mode** | [**\Zernio\Model\TrackingSiteConsentMode**](TrackingSiteConsentMode.md) |  | [optional]
**pixels** | [**\Zernio\Model\TrackingSitePixel[]**](TrackingSitePixel.md) | The ad pixels the tag loads itself. In the EEA, UK and Switzerland none loads before the visitor accepts on the site&#39;s consent banner; elsewhere &#x60;consentMode&#x60; decides. | [optional]
**consent_mode_bridge** | **bool** | The tag writes the answer on the site&#39;s consent banner into Google Consent Mode v2: denied by default in the EEA, UK and Switzerland, then updated. On for sites created from November 2026. | [optional]
**checks** | [**\Zernio\Model\TrackingSiteChecksInner[]**](TrackingSiteChecksInner.md) | One per setup step: &#x60;script&#x60; for the install, then one per ad account the site sends to, keyed by its platform and ids. | [optional]
**setup** | [**\Zernio\Model\TrackingSiteSetup**](TrackingSiteSetup.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
