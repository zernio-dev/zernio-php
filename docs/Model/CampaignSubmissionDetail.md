# # CampaignSubmissionDetail

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
**views_at_submission** | **int** | Views when the post was submitted. They count toward earnings like every later view. |
**views_latest** | **int** | Latest view count read for the post, frozen at the tracking window end. |
**views_eligible** | **int** | Views that count toward earnings: every view the platform reports for the post, including those before submission, read at the tracking window end at the latest: once the window completes or is cancelled, the last read at or before its end is final and this value stops moving. |
**engagements_latest** | **int** | The campaign engagement types summed at the latest read (all four on a views campaign), frozen at the tracking window end like &#x60;viewsEligible&#x60;. An &#x60;engagements&#x60; campaign earns on this count. |
**views_paid** | **int** | Views from ads the creator ran: YouTube views from the advertising traffic source, X impressions beyond the organic ones. Null on other platforms and before the first read. On an organic-only campaign &#x60;viewsEligible&#x60; is the latest views minus these. |
**paid_views_read_at** | **\DateTime** | When &#x60;viewsPaid&#x60; was last read. YouTube refreshes every 6 hours and reports ad views up to 2 days late; X about once a day while the post is under 30 days old. |
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
**samples** | [**\Zernio\Model\CampaignSubmissionDetailAllOfSamples[]**](CampaignSubmissionDetailAllOfSamples.md) | Counters per sync, newest first, up to 500. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
