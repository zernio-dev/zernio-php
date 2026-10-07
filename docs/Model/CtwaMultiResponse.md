# # CtwaMultiResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_type** | **string** |  |
**ads** | **object[]** | The persisted Ad documents (one per creative), all sharing the same &#x60;platformCampaignId&#x60; and &#x60;platformAdSetId&#x60;. |
**platform_campaign_id** | **string** |  |
**platform_ad_set_id** | **string** |  |
**message** | **string** |  |
**warnings** | **string[]** | Present when Meta created the ad set differently from the request. Today: Meta kept the ad set without the requested &#x60;whatsappPhoneNumber&#x60; in its promoted_object (the ads still carry it on their WhatsApp button). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
