# # CreateCrmActivityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | The text to log. |
**subject** | **string** | Salesforce Task subject (default &#x60;&lt;Channel&gt; activity (&lt;direction&gt;)&#x60;); on HubSpot, the bold first line; on GoHighLevel, the note&#39;s first line. | [optional]
**channel** | **string** |  | [optional] [default to 'other']
**direction** | **string** |  | [optional]
**occurred_at** | **\DateTime** | When it happened. Defaults to now. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
