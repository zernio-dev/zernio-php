# # ApiChangelogEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable entry id; the same entry is never published twice. |
**type** | **string** | When &#x60;impact&#x60; is set, &#x60;breaking_change&#x60; means exactly &#x60;impact: action_required&#x60;. |
**impact** | **string** | What an integrator has to do, computed from the OpenAPI diff rather than from the prose. &#x60;action_required&#x60;: an existing call or parser can break (an operation, parameter or field removed, a field newly required, a type narrowed, an enum value removed, or authentication changed). &#x60;additive&#x60;: only new or looser things, existing integrations keep working. &#x60;none&#x60;: descriptions or examples only. Null on entries published before October 2026. |
**platforms** | **string[]** | Platform and area slugs the entry is about: a platform (&#x60;instagram&#x60;, &#x60;facebook&#x60;, &#x60;threads&#x60;, &#x60;tiktok&#x60;, &#x60;x&#x60;, &#x60;linkedin&#x60;, &#x60;youtube&#x60;, &#x60;pinterest&#x60;, &#x60;reddit&#x60;, &#x60;bluesky&#x60;, &#x60;telegram&#x60;, &#x60;snapchat&#x60;, &#x60;whatsapp&#x60;, &#x60;discord&#x60;, &#x60;slack&#x60;, &#x60;google-business&#x60;, &#x60;imessage&#x60;), an ads platform (&#x60;meta-ads&#x60;, &#x60;google-ads&#x60;, &#x60;tiktok-ads&#x60;, &#x60;linkedin-ads&#x60;, &#x60;pinterest-ads&#x60;, &#x60;x-ads&#x60;) or an area (&#x60;ads&#x60;, &#x60;publishing&#x60;, &#x60;inbox&#x60;, &#x60;telephony&#x60;, &#x60;commerce&#x60;, &#x60;analytics&#x60;, &#x60;webhooks&#x60;, &#x60;general&#x60;). Filter with the &#x60;platform&#x60; query parameter. |
**message** | **string** | The announcement, in Markdown. |
**published_at** | **\DateTime** |  |
**spec_version** | **string** | The &#x60;info.version&#x60; of the OpenAPI spec the entry describes, when known. |
**url** | **string** | The entry on the docs changelog. |
**changes** | [**\Zernio\Model\ApiChangelogEntryChanges**](ApiChangelogEntryChanges.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
