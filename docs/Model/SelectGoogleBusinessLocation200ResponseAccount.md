# # SelectGoogleBusinessLocation200ResponseAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | ID of the created SocialAccount | [optional]
**platform** | **string** |  | [optional]
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**is_active** | **bool** |  | [optional]
**selected_location_name** | **string** | Human-readable location display name, NOT a resource name. Do not use it to build API paths. | [optional]
**selected_location_id** | **string** | Bare GBP location id. Combine with the GBP account id as accounts/{gbpAccountId}/locations/{selectedLocationId} to form the location resource names that gmb-reviews/batch expects in locationNames. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
