# # DeleteAdCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**platform** | **string** |  |
**account_id** | **string** | Zernio SocialAccount id owning the ad account. Required only to delete an EMPTY campaign (zero ads), which has no local Ad documents to resolve a token from. | [optional]
**ad_account_id** | **string** | X only, for an EMPTY campaign that was never synced: the X ad account id the campaign belongs to (lowercase letters and digits). The synced campaign&#39;s ad account wins when there is one. Also accepted on the query string. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
