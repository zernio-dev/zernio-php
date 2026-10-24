# # UpdateFacebookPageInfoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**about** | **string** | Short description, shown as Description in the Page&#39;s Edit Page Info. | [optional]
**description** | **string** | Longer text, shown as Additional Information. | [optional]
**website** | **string** | URL of the Page&#39;s website. | [optional]
**phone** | **string** |  | [optional]
**emails** | **string[]** | Replaces every email listed on the Page. | [optional]
**hours** | **array<string,string>** | Replaces the opening hours. Keys are &#x60;{day}_{slot}_{open|close}&#x60; with day &#x60;mon&#x60; to &#x60;sun&#x60; and slot 1 or 2, values are 24h &#x60;HH:MM&#x60; times. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
