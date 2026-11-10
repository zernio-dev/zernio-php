# # ListLeads200ResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_checked_at** | **\DateTime** | Meta only, present when &#x60;accountId&#x60; is passed: when Zernio last re-read the Page&#39;s forms from Meta to catch leads the webhook missed. Null when no leads matched or before the first pass. | [optional]
**last_updated** | **\DateTime** |  | [optional]
**content_not_retained** | **bool** | True when this team does not retain content. Answers and form names are not searchable with &#x60;q&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
