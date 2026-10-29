# # LinkedInAdsPlatformDataThoughtLeader

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_urn** | **string** | LinkedIn share or ugcPost URN: urn:li:share:N or urn:li:ugcPost:N.  Get it via \&quot;Copy link to post\&quot; on the target LinkedIn post. The URL contains -share- (share) or -ugcPost- (ugcPost), then the numeric id.  The post must be authored by an organization (Company Page). Member (personal profile) posts, i.e. Thought Leader Ads proper, are rejected by LinkedIn&#39;s public Marketing API regardless of sponsorship approval and post type.  This is a LinkedIn limitation (Campaign Manager creates those through a private API). Referencing a member post returns a 422 with a clear error. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
