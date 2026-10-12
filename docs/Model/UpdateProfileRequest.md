# # UpdateProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** | Set to null to clear the description. | [optional]
**color** | **string** |  | [optional]
**timezone** | **string** | IANA timezone new posts on this profile use when they name no &#x60;timezone&#x60;. Set to null to go back to UTC. An unknown name returns 400. | [optional]
**external_id** | **string** | Your own identifier for this profile (1 to 255 characters, trimmed). Set to null to clear it. A value another profile of the same owner already holds returns 409 profile_external_id_conflict. | [optional]
**is_default** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
