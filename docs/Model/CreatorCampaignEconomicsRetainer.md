# # CreatorCampaignEconomicsRetainer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**mode** | **string** | &#x60;standard&#x60; pays &#x60;amountCents&#x60; per period. &#x60;smart&#x60; guarantees it: the commission the creator earned in the period is topped up to &#x60;amountCents&#x60;. Smart needs &#x60;commission&#x60; and a linked store. | [optional] [default to 'standard']
**amount_cents** | **int** |  |
**period** | **string** | Weeks start Monday 00:00 UTC, months on the 1st. A period is paid within a day after it ends. A standard &#x60;once&#x60; retainer pays as soon as the posts are approved; a smart one when the campaign ends. |
**required_approved_posts** | **int** | Posts approved within the period that it needs. 0 pays without posts. |
**commission** | [**\Zernio\Model\CreatorCampaignCommissionTerms**](CreatorCampaignCommissionTerms.md) |  | [optional]
**budget_cents** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
