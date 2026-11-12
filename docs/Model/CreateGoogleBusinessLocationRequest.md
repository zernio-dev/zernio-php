# # CreateGoogleBusinessLocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Business name as shown on Google. |
**language_code** | **string** | BCP-47 language of the listing (e.g. \&quot;es\&quot;). Immutable after creation. |
**primary_category** | **string** | Category name from GET gmb-categories (e.g. \&quot;categories/gcid:cafe\&quot;). A bare \&quot;gcid:cafe\&quot; is also accepted. |
**additional_categories** | **string[]** | Further category names, same format as primaryCategory. | [optional]
**storefront_address** | [**\Zernio\Model\CreateGoogleBusinessLocationRequestStorefrontAddress**](CreateGoogleBusinessLocationRequestStorefrontAddress.md) |  | [optional]
**service_area** | [**\Zernio\Model\CreateGoogleBusinessLocationRequestServiceArea**](CreateGoogleBusinessLocationRequestServiceArea.md) |  | [optional]
**phone** | **string** | Primary phone number. Required when storefrontAddress is absent and websiteUri is not set. | [optional]
**website_uri** | **string** | Website URL. Required when storefrontAddress is absent and phone is not set. | [optional]
**description** | **string** | Business description (Google profile.description). | [optional]
**regular_hours** | **array<string,mixed>** | Google &#x60;regularHours&#x60; object (periods with openDay, openTime, closeDay, closeTime). | [optional]
**validate_only** | **bool** | Validate with Google without creating the listing or attaching anything. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
