# # CreateAdAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**account_id** | **string** | Zernio googleads SocialAccount ID whose Google user reaches the manager. |
**business_id** | **string** | Business portfolio that will own the account. |
**name** | **string** | Account name. Whitespace is trimmed. |
**currency** | **string** | Uppercase ISO 4217 currency. Cannot be changed after creation. |
**timezone_id** | **int** | Numeric Meta timezone ID from the linked timezone list. For example 1 is America/Los_Angeles. |
**end_advertiser** | **string** | End advertiser business or page ID. NONE uses the owning business. | [optional] [default to 'NONE']
**media_agency** | **string** | Media agency business or page ID. NONE for self-serve customers. | [optional] [default to 'NONE']
**partner** | **string** | Partner business or page ID. NONE for self-serve customers. | [optional] [default to 'NONE']
**invoice** | **bool** | Request Meta invoicing. Eligibility is determined by Meta. | [optional]
**invoice_group_id** | **string** | Existing Meta invoice group ID. | [optional]
**invoicing_emails** | **string[]** | Addresses for Meta invoices. | [optional]
**io** | **bool** | Meta insertion-order invoicing option. | [optional]
**po_number** | **string** | Purchase order number. | [optional]
**funding_id** | **string** | Existing Meta funding reference. Does not add a payment method. | [optional]
**ad_account_created_from_bm_flag** | **bool** | Meta Business Manager creation flag. | [optional]
**manager_customer_id** | **string** | Manager (MCC) customer id without dashes. The new account is created under it. List reachable managers with GET /v1/ads/accounts/hierarchy. |
**time_zone** | **string** | IANA time zone name, for example Europe/Madrid. Cannot be changed after creation. |
**validate_only** | **bool** | Ask Google to validate the request without creating the account. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
