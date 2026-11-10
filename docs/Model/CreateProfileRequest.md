# # CreateProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**color** | **string** |  | [optional]
**timezone** | **string** | IANA timezone new posts on this profile use when they name no &#x60;timezone&#x60;. Omit to keep UTC. An unknown name returns 400. | [optional]
**external_id** | **string** | Your own identifier for this profile, typically the id of the tenant or client it serves in your system (1 to 255 characters, trimmed). Unique among the profiles of the user who owns the profile: a duplicate returns 409 profile_external_id_conflict. Look a profile up by it with GET /v1/profiles?externalId&#x3D;. | [optional]
**content_retention** | **string** | Set &#x60;none&#x60; to create the profile with zero content retention, so nothing of its accounts is stored from the first sync. Only the team owner can, with a session or a full-access key; anyone else gets 403. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
