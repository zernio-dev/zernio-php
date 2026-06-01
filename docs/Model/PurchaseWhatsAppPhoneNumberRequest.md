# # PurchaseWhatsAppPhoneNumberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile to associate the number with |
**country** | **string** | ISO 3166-1 alpha-2 country for the number (default US). International numbers require usage-based billing. Tier 3/4 countries return 202 { status: \&quot;kyc_required\&quot;, kycUrl } — the customer must complete KYC at that URL before the number is ordered. See GET /v1/whatsapp/phone-numbers/countries. | [optional] [default to 'US']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
