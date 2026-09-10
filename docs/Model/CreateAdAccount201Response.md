# # CreateAdAccount201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** | New Meta ad account ID for subsequent ads calls. |
**business_id** | **string** | Owning business portfolio ID. |
**connection_updated** | **bool** | Whether the connection scope and discovery schedule were updated. |
**payment_method_required** | **bool** | Always true as a delivery prerequisite. This is not a live funding-source check. Confirm payment or invoicing in Ads Manager. |
**ads_manager_url** | **string** | Open the created account in Ads Manager. |
**next_steps** | **string** | Payment setup instructions for the user. |
**warnings** | **string[]** | Recovery instructions if the account could not be attached to the connection. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
