# # RedditComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Reddit comment ID (without type prefix) | [optional]
**fullname** | **string** | Reddit fullname (e.g. t1_abc123) | [optional]
**parent_id** | **string** | Fullname of what the comment answers: the post (t3_…) or a parent comment (t1_…) | [optional]
**author** | **string** | The username, or [deleted] | [optional]
**body** | **string** | Comment text as written (Markdown, not HTML-escaped), or [deleted] / [removed] | [optional]
**permalink** | **string** | Full permalink to the comment | [optional]
**created_utc** | **float** | Unix timestamp of the comment | [optional]
**score** | **int** |  | [optional]
**num_replies** | **int** | Direct replies included in this response; replies Reddit left out are listed in more | [optional]
**depth** | **int** | 0 for a top-level comment of this response, 1 for a reply to it, and so on | [optional]
**is_submitter** | **bool** | Whether the author is the post&#39;s author | [optional]
**edited** | **bool** |  | [optional]
**stickied** | **bool** |  | [optional]
**distinguished** | **string** | \&quot;moderator\&quot; or \&quot;admin\&quot; when the comment is distinguished, else null | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
