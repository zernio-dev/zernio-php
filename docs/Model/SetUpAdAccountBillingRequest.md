# # SetUpAdAccountBillingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Google ads SocialAccount id. |
**ad_account_id** | **string** | Google Ads customer id to bill, digits only. |
**payments_account_id** | **string** | Monthly invoicing payments account from GET /v1/ads/accounts/billing. |
**spending_limit** | **float** | Account budget cap in the account currency. Omit for an unlimited budget. | [optional]
**budget_name** | **string** |  | [optional] [default to 'Zernio account budget']
**purchase_order_number** | **string** | Printed on the invoice. No effect on delivery. | [optional]
**validate_only** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
