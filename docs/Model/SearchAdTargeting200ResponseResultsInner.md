# # SearchAdTargeting200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The platform&#39;s opaque id. Use as a geo &#x60;key&#x60; (regions/cities/zips/metros) or an entity &#x60;id&#x60; (interests/behaviors) in TargetingSpec. A &#x60;country&#x60; result is the exception on every platform: its id is the ISO 3166-1 alpha-2 code, which is what &#x60;targeting.countries&#x60; takes. |
**name** | **string** | Human-readable label. |
**type** | **string** | What the result is. Equals the requested dimension (interest, interestKeyword, behavior, hashtag, income, language, workPosition, workEmployer, workIndustry, industry, jobFunction, seniority, companySize), or the location level for geo (country, region, city, zip, metro, ...). |
**path** | **string[]** | Optional breadcrumb of parent labels (e.g. [&#39;United States&#39;, &#39;California&#39;, &#39;Los Angeles&#39;]). Disambiguates same-named results. | [optional]
**audience_size** | **int** | Optional estimated reachable users for this option, when the platform returns it. | [optional]
**status** | **string** | TikTok &#x60;interestKeyword&#x60; and &#x60;hashtag&#x60; results only: TikTok&#39;s availability status. &#x60;EFFECTIVE&#x60; / &#x60;INEFFECTIVE&#x60; for additional interests, &#x60;ONLINE&#x60; / &#x60;OFFLINE&#x60; for hashtags. Only &#x60;EFFECTIVE&#x60; and &#x60;ONLINE&#x60; ids can be targeted. | [optional]
**country_code** | **string** | ISO-3166 alpha-2 of the country a sub-country geo result (city, region, zip, metro) belongs to, when the platform reports it (Meta does). Useful to know whether a location falls under the EU DSA disclosure rules before creating the ad. | [optional]
**platform_id** | **string** | Only on &#x60;country&#x60; results: the platform&#39;s own id for the country, which &#x60;id&#x60; replaced with the ISO code (TikTok&#39;s native location_id, a GeoNames id such as 2635167 for GB; Meta&#39;s country key; Google&#39;s geo target constant id; X&#39;s targeting value; LinkedIn&#39;s geo URN). Use it to match a country against what the platform reports back, e.g. &#x60;location_ids&#x60; in a TikTok &#x60;nativeSettings&#x60; read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
