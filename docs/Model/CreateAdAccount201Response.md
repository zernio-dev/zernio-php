# # CreateAdAccount201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** | New Google Ads customer id for subsequent ads calls. |
**business_id** | **string** | Owning business portfolio ID. |
**connection_updated** | **bool** | Whether the customer was added to the connection and discovery was scheduled. When false the account exists: reconnect Google Ads instead of creating it again. |
**payment_method_required** | **bool** | Always true. The account has no billing until it is set up in Google Ads. |
**ads_manager_url** | **string** | Open the created account in Ads Manager. |
**next_steps** | **string** | Billing setup instructions for the user. |
**warnings** | **string[]** | Recovery instructions if the account could not be attached to the connection. |
**platform** | **string** |  |
**manager_customer_id** | **string** | Manager the account was created under. |
**validate_only** | **bool** | Always false on a 201. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
