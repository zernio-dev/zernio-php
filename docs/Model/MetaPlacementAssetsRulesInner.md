# # MetaPlacementAssetsRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_url** | **string** | Image mode. The image to deliver for this rule&#39;s placements. | [optional]
**video_url** | **string** | Video mode. The video to deliver for this rule&#39;s placements. Each rule needs this or &#x60;videoId&#x60;. | [optional]
**video_id** | **string** | Video mode. ID of a video already on the ad account, used for this rule instead of uploading &#x60;videoUrl&#x60;. Wins over &#x60;videoUrl&#x60;. A video still processing after 30 seconds returns 409. | [optional]
**thumbnail_url** | **string** | Video mode (optional). Poster image for this rule&#39;s video; auto-generated when omitted. | [optional]
**headline** | **string** | One headline pinned to this rule. Omit to inherit the top-level headline. | [optional]
**body** | **string** | One primary text pinned to this rule. Omit to inherit the top-level body. | [optional]
**description** | **string** | One link description pinned to this rule. Omit to inherit the top-level description. | [optional]
**placements** | [**\Zernio\Model\MetaPlacementAssetsRulesInnerPlacements**](MetaPlacementAssetsRulesInnerPlacements.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
