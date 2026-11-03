# # GetCampaignResultsUpload200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upload_id** | **string** |  |
**status** | **string** |  |
**source** | **string** |  |
**rows_received** | **int** |  |
**rows_matched** | **int** |  |
**rows_unmatched** | **int** |  |
**unmatched** | [**\Zernio\Model\GetCampaignResultsUpload200ResponseUnmatchedInner[]**](GetCampaignResultsUpload200ResponseUnmatchedInner.md) |  |
**failure_reason** | **string** | Set when &#x60;status&#x60; is &#x60;failed&#x60;. &#x60;queue_unavailable&#x60;: the upload could not be queued. &#x60;processing_failed&#x60;: its rows could not be stored after several retries. Both are on our side. |
**created_at** | **\DateTime** |  |
**completed_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
