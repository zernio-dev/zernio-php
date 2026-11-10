# # CampaignSample

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**campaign_id** | **string** |  |
**participant_id** | **string** |  |
**creator** | [**\Zernio\Model\CreatorCampaignAdResultsSubmissionsInnerCreator**](CreatorCampaignAdResultsSubmissionsInnerCreator.md) |  |
**store_account_id** | **string** | The store the sample comes from. |
**product_id** | **string** |  |
**variant_id** | **string** |  |
**product_title** | **string** |  |
**variant_title** | **string** |  |
**shipping_address** | [**\Zernio\Model\CampaignSampleShippingAddress**](CampaignSampleShippingAddress.md) |  |
**note** | **string** | The creator&#39;s note. |
**status** | **string** | pending: waits for review. approved: a discount code was created. shipped: you recorded that you sent it. declined: final for this request. |
**decline_reason** | **string** |  |
**discount_code** | **string** | The 100%-off, single-use code for the product, set on approval. |
**tracking_url** | **string** |  |
**approved_at** | **\DateTime** |  |
**shipped_at** | **\DateTime** |  |
**requested_at** | **\DateTime** |  |
**content_due_at** | **\DateTime** | When a post is due: the approval plus the campaign&#39;s &#x60;sampleContentDueDays&#x60;. Null unless approved or shipped. |
**content_owed** | **bool** | True past &#x60;contentDueAt&#x60; when the creator submitted no post since the approval. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
