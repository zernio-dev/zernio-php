# # CreatorPortalSubmission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**platform** | **string** |  |
**post_id** | **string** |  |
**url** | **string** |  |
**status** | **string** |  |
**submitted_at** | **\DateTime** |  |
**published_at** | **\DateTime** |  |
**views** | **int** | Latest view count read for the post. |
**engagements** | **int** | The campaign engagement types summed at the latest read. Null until the post is read. |
**views_from_ads** | **int** | Views that came from ads the creator ran, on YouTube and X. Null where the platform does not report them or before the first read. |
**earned_cents** | **int** |  |
**reject_reason** | **string** |  |
**flags** | **string[]** | Creator-safe flags only. Every other review flag shows as &#x60;under_review&#x60;. |
**tracking_ends_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
