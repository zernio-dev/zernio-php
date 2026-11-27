# # UpdateValueRuleSetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Zernio SocialAccount id (posting or ads variant); its platform decides where the campaign is created. |
**name** | **string** | Required: the update replaces the whole set. |
**rules** | [**\Zernio\Model\ValueRule[]**](ValueRule.md) | The COMPLETE rule list. Omitting a rule deletes it on Meta. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
