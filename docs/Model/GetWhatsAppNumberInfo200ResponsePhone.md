# # GetWhatsAppNumberInfo200ResponsePhone

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_phone_number** | **string** |  | [optional]
**verified_name** | **string** |  | [optional]
**name_status** | **string** | APPROVED, AVAILABLE_WITHOUT_REVIEW, PENDING_REVIEW, DECLINED, EXPIRED, NONE | [optional]
**quality_rating** | **string** | GREEN, YELLOW, RED, UNKNOWN | [optional]
**messaging_limit_tier** | **string** | e.g. TIER_250, TIER_1K, TIER_UNLIMITED | [optional]
**throughput** | [**\Zernio\Model\GetWhatsAppNumberInfo200ResponsePhoneThroughput**](GetWhatsAppNumberInfo200ResponsePhoneThroughput.md) |  | [optional]
**status** | **string** | e.g. CONNECTED | [optional]
**is_official_business_account** | **bool** |  | [optional]
**platform_type** | **string** | e.g. CLOUD_API | [optional]
**health_status** | **object** | Meta&#39;s can_send_message health object (messaging + calling signals) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
