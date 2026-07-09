# # SetCommentModerationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The social account ID |
**platform** | **string** | Only YouTube supports comment moderation |
**moderation_status** | **string** | published approves the comment, rejected removes it, heldForReview returns it to the queue. |
**ban_author** | **bool** | Also ban the comment&#39;s author, auto-rejecting their future comments. Only valid when moderationStatus is \&quot;rejected\&quot;; any other pairing is a 400. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
