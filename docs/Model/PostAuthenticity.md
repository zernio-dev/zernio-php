# # PostAuthenticity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** | The external post the score belongs to |
**score** | **int** | Higher means the view pattern looks more organic |
**confidence** | **float** | How much data the score rests on |
**reasons** | [**\Zernio\Model\PostAuthenticityReasonsInner[]**](PostAuthenticityReasonsInner.md) | Each factor that lowered the score, with its weight in points |
**version** | **string** | Scoring model version |
**computed_at** | **\DateTime** |  |
**sample_count** | **int** | Number of samples the score was computed from |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
