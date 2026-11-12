# # SelectGoogleBusinessLocation200ResponseAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | ID of the created SocialAccount | [optional]
**platform** | **string** |  | [optional]
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**is_active** | **bool** |  | [optional]
**selected_location_name** | **string** | Human-readable location display name, NOT a resource name. Do not use it to build API paths. Null when connected with no location. | [optional]
**selected_location_id** | **string** | Bare Google Business Profile location id. Combine with the Google Business Profile account id as accounts/{gbpAccountId}/locations/{selectedLocationId} to form the location resource names that gmb-reviews/batch expects in locationNames. Null when connected with no location. | [optional]
**needs_location** | **bool** | Present and true when the account was connected with no location (allowNoLocation&#x3D;true). Create one with POST /v1/accounts/{accountId}/gmb-locations before using the location endpoints. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
