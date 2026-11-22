# # CommentAutomationDefinitionTrigger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;comment.keyword&#x60; for a comment on a post or reel. The &#x60;comment.received&#x60; event starts an event automation, not comment to DM. |
**profile_id** | **string** |  |
**account_id** | **string** | The account it answers on, on the profile. It cannot change once saved. |
**platform_post_id** | **string** | The platform post or story it answers. Null answers every one. One active automation per post. | [optional]
**post_id** | **string** | A Zernio post. A scheduled one is answered once it publishes. | [optional]
**post_title** | **string** |  | [optional]
**filter** | [**\Zernio\Model\CommentAutomationFilter**](CommentAutomationFilter.md) |  |
**entry** | **string[]** | The nodes a run starts at. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
