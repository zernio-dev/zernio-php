# # LinkedInPlatformDataAudience

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countries** | **string[]** | ISO 3166-1 alpha-2 codes with a built-in LinkedIn geo URN (same list as geoRestriction.countries, merged with it). Other countries and sub-country regions go in geoLocations. | [optional]
**geo_locations** | **string[]** | LinkedIn geo URNs or ids (urn:li:geo:103644278 or 103644278): countries, states, regions, cities. | [optional]
**interface_locales** | [**\Zernio\Model\LinkedInPlatformDataAudienceInterfaceLocalesInner[]**](LinkedInPlatformDataAudienceInterfaceLocalesInner.md) | Members&#39; LinkedIn interface locale, e.g. { language: es, country: ES }. | [optional]
**industries** | **string[]** | urn:li:industry:&lt;id&gt; or id. | [optional]
**job_functions** | **string[]** | urn:li:function:&lt;id&gt; or id. | [optional]
**seniorities** | **string[]** | urn:li:seniority:&lt;id&gt; or id. | [optional]
**staff_count_ranges** | **string[]** | Company size of the member&#39;s current employer. | [optional]
**degrees** | **string[]** | urn:li:degree:&lt;id&gt; or id (LinkedIn standardized degrees). | [optional]
**fields_of_study** | **string[]** | urn:li:fieldOfStudy:&lt;id&gt; or id (LinkedIn standardized fields of study). | [optional]
**organizations** | **string[]** | Schools, as urn:li:organization:&lt;id&gt; or id (LinkedIn&#39;s Organization Lookup). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
