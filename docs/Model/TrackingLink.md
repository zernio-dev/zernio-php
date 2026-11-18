# # TrackingLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**code** | **string** | The short code in &#x60;url&#x60;, such as &#x60;aB3dE5fG&#x60;. Unique across Zernio. | [optional]
**site_id** | **string** | The tracking site the link belongs to. | [optional]
**profile_id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**destinations** | [**\Zernio\Model\TrackingLinkDestination[]**](TrackingLinkDestination.md) |  | [optional]
**campaign** | [**\Zernio\Model\TrackingLinkCampaign**](TrackingLinkCampaign.md) |  | [optional]
**url** | **string** | The link to put in ads, such as &#x60;https://t.brand.com/r/aB3dE5fG&#x60;. It uses the site&#39;s custom subdomain once that is active. | [optional]
**postback_url** | **string** | The server-to-server postback URL for the network, with its own macros in place of &#x60;{clickid}&#x60;, &#x60;{payout}&#x60; and &#x60;{txid}&#x60;. A &#x60;status&#x60; of &#x60;rejected&#x60;, &#x60;declined&#x60;, &#x60;refunded&#x60;, &#x60;reversed&#x60; or &#x60;chargeback&#x60; retracts the conversion; &#x60;pending&#x60; is ignored. It holds a secret: rotate it with &#x60;POST /v1/tracking-links/{linkId}/rotate-postback-token&#x60; if it leaks. | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
