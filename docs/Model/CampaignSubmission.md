# # CampaignSubmission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**campaign_id** | **string** |  |
**participant_id** | **string** |  |
**creator_id** | **string** |  |
**account_id** | **string** | The creator account the post was published from. |
**platform** | **string** |  |
**platform_post_id** | **string** |  |
**platform_post_url** | **string** |  |
**external_post_id** | **string** | The tracked external post (see /v1/external-posts). |
**tracking_window_id** | **string** |  |
**media_hash** | **string** |  |
**submitted_at** | **\DateTime** |  |
**post_published_at** | **\DateTime** |  |
**status** | **string** |  |
**reject_reason** | **string** |  |
**review_round** | **int** | How many times the post was reopened after a reject. 0 until the first reopen. |
**reviewed_by** | **string** | User id of the reviewer. |
**reviewed_at** | **\DateTime** |  |
**views_at_submission** | **int** | Views when the post was submitted; they never count toward earnings. |
**views_latest** | **int** | Latest view count read for the post, frozen at the tracking window end. |
**views_eligible** | **int** | Views gained after submission that count toward earnings, read at the tracking window end at the latest: once the window completes or is cancelled, the last read at or before its end is final and this value stops moving. |
**last_accrued_views** | **int** |  |
**accrued_cents** | **int** |  |
**approved_cents** | **int** |  |
**authenticity_score** | **int** |  |
**authenticity_confidence** | **float** |  |
**flags** | [**\Zernio\Model\CampaignSubmissionFlag[]**](CampaignSubmissionFlag.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**creator** | [**\Zernio\Model\WebhookPayloadCampaignSubmissionCreator**](WebhookPayloadCampaignSubmissionCreator.md) |  |
**authenticity** | [**\Zernio\Model\CampaignSubmissionAuthenticity**](CampaignSubmissionAuthenticity.md) |  |
**earned_cents** | **int** | approvedCents once approved, otherwise accruedCents. |
**released_cents** | **int** | Approved cents whose hold is over, so payable or already paid out. 0 unless approved. |
**paid_out_cents** | **int** | What rejecting this post could not take back now: releasedCents beyond the creator&#39;s payable balance. It stays paid; the dashboard warns before such a reject. |
**window** | [**\Zernio\Model\CampaignSubmissionWindow**](CampaignSubmissionWindow.md) |  |
**post** | [**\Zernio\Model\CampaignSubmissionPost**](CampaignSubmissionPost.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
