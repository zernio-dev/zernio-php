# # RcsBrand

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** |  |
**legal_name** | **string** | Exactly as on IRS records. |
**legal_entity_type** | **string** |  |
**organization_type** | **string** |  |
**website_url** | **string** |  |
**tax_id** | **string** | US: the EIN, 9 digits, optionally NN-NNNNNNN. Elsewhere: the national tax or company registration id. |
**stock_symbol** | **string** | EXCHANGE:SYMBOL. Required for PUBLIC_PROFIT. | [optional]
**address** | [**\Zernio\Model\RcsBrandInputAddress**](RcsBrandInputAddress.md) |  |
**contact** | [**\Zernio\Model\RcsBrandInputContact**](RcsBrandInputContact.md) |  |
**id** | **string** |  | [optional]
**status** | **string** | draft &#x3D; not filed yet (still editable). | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
