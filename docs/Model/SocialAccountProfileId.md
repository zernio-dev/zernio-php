# # SocialAccountProfileId

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**color** | **string** |  | [optional]
**timezone** | **string** | IANA timezone new posts on this profile use when the request names no &#x60;timezone&#x60;. Null means UTC. | [optional]
**external_id** | **string** | Your own identifier for this profile, set on create or update. Null when none is set. | [optional]
**content_retention** | **string** | This profile&#39;s own zero content retention setting. &#x60;none&#x60; stores identifiers and metadata only for this profile. Change it with &#x60;contentRetention&#x60; on update; only the team owner can. | [optional]
**effective_content_retention** | **string** | The mode that applies to this profile: &#x60;none&#x60; when the profile or the whole team uses zero content retention. | [optional]
**is_default** | **bool** |  | [optional]
**is_over_limit** | **bool** | Only present when includeOverLimit&#x3D;true. Indicates if this profile exceeds the plan limit. | [optional]
**account_count** | **int** | In the profile list. Connected accounts on the profile, including ones that need reconnecting; phone and SMS number internals and posting accounts hidden by an ads connect are not counted. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
