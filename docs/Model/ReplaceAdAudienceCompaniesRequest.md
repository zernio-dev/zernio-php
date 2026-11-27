# # ReplaceAdAudienceCompaniesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**companies** | [**\Zernio\Model\ReplaceAdAudienceCompaniesRequestCompaniesInner[]**](ReplaceAdAudienceCompaniesRequestCompaniesInner.md) | The complete company list. Each row needs at least one of name, domain, website or linkedinPageUrl. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
