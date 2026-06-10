# # CreateStandaloneAdRequestCreativesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Exact name for this ad. Falls back to &#x60;&lt;name&gt; #N&#x60; (N &#x3D; 1-based position). | [optional]
**headline** | **string** |  |
**body** | **string** |  |
**description** | **string** | Link description for this ad (link_data.description; video creatives: video_data.link_description). Falls back to the top-level &#x60;description&#x60;; when both are omitted Meta scrapes the destination URL&#39;s OG description. | [optional]
**image_url** | **string** | Image creative. Mutually exclusive with &#x60;video&#x60;. | [optional]
**video** | [**\Zernio\Model\CreateStandaloneAdRequestCreativesInnerVideo**](CreateStandaloneAdRequestCreativesInnerVideo.md) |  | [optional]
**link_url** | **string** |  |
**call_to_action** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
