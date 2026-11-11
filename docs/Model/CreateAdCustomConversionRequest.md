# # CreateAdCustomConversionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The connected ads account (SocialAccount ID). |
**ad_account_id** | **string** | Platform ad account id (Meta act_&lt;n&gt;, Google customer id, LinkedIn account id, ...). |
**name** | **string** | Also the reuse key, together with pixelId. |
**pixel_id** | **string** | Meta pixel id (event_source_id). From GET /v1/accounts/{accountId}/tracking-tags. |
**custom_event_type** | **string** | Meta custom_event_type, e.g. LEAD, PURCHASE, OTHER. |
**rule** | **object** | Meta conversion rule, forwarded verbatim. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
