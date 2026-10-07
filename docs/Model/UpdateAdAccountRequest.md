# # UpdateAdAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Account ID (metaads, or a facebook/instagram posting account) |
**ad_account_id** | **string** | Meta ad account ID (act_...) |
**name** | **string** | New ad account name. | [optional]
**spend_cap** | **float** | Account spend cap in whole currency units; null removes it. | [optional]
**reset_amount_spent** | **bool** | Restart the amount counted against the cap from zero. Cannot be combined with spendCap null. | [optional]
**default_dsa_beneficiary** | **string** | Legal entity benefiting from ads on this ad account | [optional]
**default_dsa_payor** | **string** | Legal entity paying for ads on this ad account. Defaults to defaultDsaBeneficiary when omitted. Requires defaultDsaBeneficiary. | [optional]
**tracking_url_template** | **string** | **Google only.** Account tracking template (customer.tracking_url_template); an empty string clears it. | [optional]
**final_url_suffix** | **string** | **Google only.** Account final URL suffix (customer.final_url_suffix); an empty string clears it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
