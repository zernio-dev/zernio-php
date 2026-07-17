# # PurchasePhoneNumberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile to associate the number with |
**country** | **string** | ISO 3166-1 alpha-2 country for the number (default US). International numbers require usage-based billing. Tier 3/4 countries return 202 { status: \&quot;kyc_required\&quot;, kycUrl } — the customer must complete KYC at that URL before the number is ordered. See GET /v1/phone-numbers/countries. | [optional] [default to 'US']
**number_type** | **string** | Which of the country&#39;s offered number types to order (see &#x60;types[]&#x60; on GET /v1/phone-numbers/countries). Omitted &#x3D; the country&#39;s default type, which is always the WhatsApp-safe choice. Capabilities, price, and KYC requirements are per (country, type): toll_free can never connect WhatsApp (400 when combined with connectWhatsapp:true), and wantsSms:true requires an SMS-capable type. | [optional]
**connect_whatsapp** | **bool** | A phone number is the unit; WhatsApp is one optional feature. Pass false to buy a STANDALONE number (Calls/SMS only): provisioning skips the Meta pre-verify/OTP steps and the number activates immediately. Omitted defaults to the WhatsApp provisioning path. WhatsApp can be connected to a standalone number later from the connect flow. | [optional] [default to true]
**wants_sms** | **bool** | SMS capability is per-number, not per-country. Pass true to provision from the SMS-capable inventory pool so the number can actually text (see also GET /v1/phone-numbers/available with sms&#x3D;true, and smsAvailable on GET /v1/phone-numbers/countries). | [optional] [default to false]
**purchase_intent_id** | **string** | Optional idempotency key. Send the same value when retrying a purchase: if a number was already bought under this key, the API returns { status: \&quot;already_purchased\&quot;, numberId, phoneNumber } instead of provisioning a second number. Generate a fresh key for each genuinely new purchase. | [optional]
**allow_multiple** | **bool** | Any second purchase within 10 minutes of a previous one is rejected with 409 code PURCHASE_VELOCITY as duplicate protection. Pass true to confirm the additional purchase is intentional (e.g. bulk provisioning). | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
