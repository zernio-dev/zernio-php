# # CreateMessagingAd201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_type** | **string** |  |
**ad** | **object** | The persisted Ad document. |
**message** | **string** |  |
**warnings** | **string[]** | Present when Meta created the ad set differently from the request:  - A multi-destination ad set (&#x60;destinations&#x60; including whatsapp) that Meta kept without the requested &#x60;whatsappPhoneNumber&#x60; in its promoted_object, which an existing ad set cannot change. A WhatsApp-only ad set returns no such warning, because every ad routes conversations by the number on its WhatsApp button. - The ad set joined a CBO campaign (&#x60;existingCampaignId&#x60;) whose own bid strategy applies, so a different &#x60;bidStrategy&#x60;, or a &#x60;roasAverageFloor&#x60; that strategy cannot take, was not applied. - An entry starting with &#x60;activation_failed:&#x60; when Meta refused the final switch to ACTIVE. Nothing was deleted; the entry names what was kept PAUSED and what was switched ACTIVE, and quotes Meta&#39;s error and the status calls that switch the PAUSED ones on later. | [optional]
**ads** | **object[]** | The persisted Ad documents (one per creative), all sharing the same &#x60;platformCampaignId&#x60; and &#x60;platformAdSetId&#x60;. |
**platform_campaign_id** | **string** |  |
**platform_ad_set_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
