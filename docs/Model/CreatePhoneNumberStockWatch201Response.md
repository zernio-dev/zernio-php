# # CreatePhoneNumberStockWatch201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**country** | **string** | ISO 3166-1 alpha-2. |
**country_name** | **string** |  |
**number_type** | **string** | The watched number type, or null when the watch covers every type in the country. |
**area_code** | **string** | The watched area code (NDC), or null when the watch covers every area. | [optional]
**created_at** | **\DateTime** |  |
**pre_orderable** | **bool** | True when the watched area can be bought today as a pre-order (the carrier lists nothing there and the type is a document tier): submit KYC with &#x60;areaCode&#x60; and &#x60;preOrder: true&#x60; instead of waiting, usually 2 to 4 weeks, nothing billed until active. The watch is armed either way. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
