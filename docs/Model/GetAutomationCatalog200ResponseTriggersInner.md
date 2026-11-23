# # GetAutomationCatalog200ResponseTriggersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** |  |
**type** | **string** | &#x60;schedule&#x60;, &#x60;enrollment&#x60;, a comment door such as &#x60;comment.keyword&#x60; (comment to DM), a flow trigger such as &#x60;inbound_message&#x60;, or the Zernio event name. |
**label** | **string** | Event triggers only. | [optional]
**subject** | **string** | What an event is about, such as &#x60;post&#x60; or &#x60;account&#x60;. | [optional]
**scope** | **object** | Which of &#x60;profileId&#x60;, &#x60;accountId&#x60;, &#x60;accountIds&#x60; and &#x60;platformPostId&#x60; the trigger needs. | [optional]
**platforms** | **string[]** | The platforms a sequence, comment to DM or flow trigger runs on. | [optional]
**facts** | [**\Zernio\Model\GetAutomationCatalog200ResponseTriggersInnerFactsInner[]**](GetAutomationCatalog200ResponseTriggersInnerFactsInner.md) | The facts a &#x60;filter&#x60; can compare, for an event trigger. | [optional]
**subjects** | **object[]** | Scheduled trigger only: what it can check (&#x60;post&#x60;), with the facts of each. | [optional]
**every** | **string[]** |  | [optional]
**times** | **object** | Ad rule trigger only: the weekly set times it takes. | [optional]
**filter_operators** | **string[]** |  | [optional]
**steps** | **string[]** | The step types the trigger takes. For an event, only those its subject can reach. | [optional]
**boost** | **object** | Scheduled trigger only: the platforms, goals, most days and most boosts a day of &#x60;ads.boost_post&#x60;. | [optional]
**limits** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
