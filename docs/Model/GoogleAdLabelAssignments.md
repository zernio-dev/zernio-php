# # GoogleAdLabelAssignments

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Zernio SocialAccount id (Google Ads) |
**ad_account_id** | **string** | Google customer id. Required when the connection has multiple customers. | [optional]
**customer_id** | **string** | Alias of adAccountId | [optional]
**campaign_ids** | **string[]** | Google campaign ids | [optional]
**ad_set_ids** | **string[]** | Google ad group ids | [optional]
**ad_ids** | **string[]** | Google ad group ad ids, {adGroupId}~{adId} | [optional]
**keyword_ids** | **string[]** | Google keyword criterion ids, {adGroupId}~{criterionId} | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
