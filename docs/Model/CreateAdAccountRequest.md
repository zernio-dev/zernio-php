# # CreateAdAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio metaads SocialAccount ID. |
**business_id** | **string** | Business portfolio that will own the account. |
**name** | **string** | Ad account name. Whitespace is trimmed. |
**currency** | **string** | Uppercase ISO 4217 currency supported by Meta. |
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
