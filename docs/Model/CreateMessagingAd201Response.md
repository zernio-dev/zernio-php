# # CreateMessagingAd201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_type** | **string** |  |
**ad** | **object** | The persisted Ad document. |
**message** | **string** |  |
**warnings** | **string[]** | Present when Meta created the ad set differently from the request: a multi-destination ad set (&#x60;destinations&#x60; including whatsapp) that Meta kept without the requested &#x60;whatsappPhoneNumber&#x60; in its promoted_object, which an existing ad set cannot change (a WhatsApp-only ad set returns no such warning, because every ad routes conversations by the number on its WhatsApp button), or the ad set joined a CBO campaign (&#x60;existingCampaignId&#x60;) whose own bid strategy applies, so a different &#x60;bidStrategy&#x60; or a &#x60;roasAverageFloor&#x60; that strategy cannot take was not applied. | [optional]
**ads** | **object[]** | The persisted Ad documents (one per creative), all sharing the same &#x60;platformCampaignId&#x60; and &#x60;platformAdSetId&#x60;. |
**platform_campaign_id** | **string** |  |
**platform_ad_set_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
