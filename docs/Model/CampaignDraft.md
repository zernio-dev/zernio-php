# # CampaignDraft

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**campaign_id** | **string** |  |
**participant_id** | **string** |  |
**creator** | [**\Zernio\Model\CreatorCampaignAdResultsSubmissionsInnerCreator**](CreatorCampaignAdResultsSubmissionsInnerCreator.md) |  |
**chain_id** | **string** | The id of the first version of the chain. |
**version** | **int** |  |
**revision_of** | **string** | The version this one answers; null on version 1. |
**media_url** | **string** |  |
**media_type** | **string** |  |
**caption** | **string** |  |
**status** | **string** | submitted: waits for review. approved: the creator may publish it. revision_requested: the creator should upload a new version. rejected: final. |
**review_note** | **string** | The note sent with a revision request, or the rejection reason. |
**reviewed_at** | **\DateTime** |  |
**submitted_at** | **\DateTime** |  |
**comments** | [**\Zernio\Model\CampaignDraftCommentsInner[]**](CampaignDraftCommentsInner.md) | Review comments on this version, in video order. |
**submission_id** | **string** | The live post submitted for this draft, once the creator published it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
