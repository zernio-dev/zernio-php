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
**postback_url** | **string** | The server-to-server postback URL to give the network. Replace &#x60;{clickid}&#x60;, &#x60;{payout}&#x60; and &#x60;{txid}&#x60; with the network&#39;s own macros. It holds a secret: rotate it with &#x60;POST /v1/tracking-links/{linkId}/rotate-postback-token&#x60; if it leaks. | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
