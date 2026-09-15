# # SearchAdTargeting200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The platform&#39;s opaque id. Use as a geo &#x60;key&#x60; (regions/cities/zips/metros) or an entity &#x60;id&#x60; (interests/behaviors) in TargetingSpec. A &#x60;country&#x60; result is the exception on every platform: its id is the ISO 3166-1 alpha-2 code, which is what &#x60;targeting.countries&#x60; takes. |
**name** | **string** | Human-readable label. |
**type** | **string** | What the result is (e.g. city, region, country, zip, metro, location, interest, behavior, income, industry, jobFunction, seniority, companySize). |
**path** | **string[]** | Optional breadcrumb of parent labels (e.g. [&#39;United States&#39;, &#39;California&#39;, &#39;Los Angeles&#39;]). Disambiguates same-named results. | [optional]
**audience_size** | **int** | Optional estimated reachable users for this option, when the platform returns it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
