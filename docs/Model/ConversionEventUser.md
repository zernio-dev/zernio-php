# # ConversionEventUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Plaintext email. Hashed server-side. | [optional]
**phone** | **string** | Phone number, ideally E.164. Hashed server-side. | [optional]
**first_name** | **string** | Plaintext first name. Hashed server-side. | [optional]
**last_name** | **string** | Plaintext last name. Hashed server-side. | [optional]
**external_id** | **string** | Stable customer identifier (e.g. CRM user ID). Hashed server-side for Meta and Google. Sent as plaintext to LinkedIn (LinkedIn&#39;s Conversions API spec requires the raw value). Maximum effective list size on LinkedIn is 1. | [optional]
**ip_address** | **string** | Client IP address. Sent plaintext (Meta, Pinterest, Reddit, OpenAI, Google Ads). | [optional]
**user_agent** | **string** | Client user-agent string. Sent plaintext (Meta, Pinterest, Reddit, OpenAI, Google Ads). | [optional]
**country** | **string** | ISO 3166-1 alpha-2 country code, e.g. &#39;us&#39;. | [optional]
**city** | **string** | Meta advanced matching (ct). Plaintext city; normalized + SHA-256 hashed server-side. Meta only. | [optional]
**state** | **string** | Meta advanced matching (st). 2-letter ANSI for US; hashed server-side. Meta only. | [optional]
**zip** | **string** | Postal code. Meta advanced matching (zp; US uses first 5 digits; hashed server-side). Google Ads sends it plain in an address identifier with firstName, lastName and country, only when all four are present. | [optional]
**dob** | **string** | Meta advanced matching (db). YYYYMMDD; hashed server-side. Meta only. | [optional]
**gender** | **string** | Meta advanced matching (ge). &#39;f&#39; or &#39;m&#39;; hashed server-side. Meta only. | [optional]
**lead_id** | **string** | Meta lead ID from a Lead Ad submission, as a string. Required for Conversion Leads CRM events: send it with &#x60;actionSource: &#39;crm&#39;&#x60; and &#x60;platformData: { event_source: &#39;crm&#39;, lead_event_source: &#39;&lt;CRM name&gt;&#39; }&#x60;. Forwarded unhashed to Meta&#39;s &#x60;user_data.lead_id&#x60;. Meta only. | [optional]
**click_ids** | [**\Zernio\Model\ConversionEventUserClickIds**](ConversionEventUserClickIds.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
