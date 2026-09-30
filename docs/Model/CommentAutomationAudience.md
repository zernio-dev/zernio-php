# # CommentAutomationAudience

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**follower_status** | **string** |  | [optional] [default to 'any']
**min_follower_count** | **int** | Skip commenters with fewer followers than this. Omit for no size rule. | [optional]
**when_unknown** | **string** | What to do when Instagram will not reveal the follow relationship.   * &#x60;send&#x60; (default) - deliver the DM anyway (fails open).   * &#x60;skip&#x60; - stay silent.   * &#x60;verify&#x60; - send &#x60;followGate.message&#x60; with a confirm button. Tapping it is a     message, which grants consent, so the re-check on the tap resolves and the     real DM (or &#x60;followGate.notFollowingMessage&#x60;) follows automatically. | [optional] [default to 'send']
**tap_to_unlock** | **bool** | Send &#x60;followGate.message&#x60; with its button to EVERY commenter and deliver the real DM when they tap it, with no follow check at any point. Cannot be combined with a &#x60;followerStatus&#x60; other than &#x60;any&#x60; or with &#x60;minFollowerCount&#x60; (400); &#x60;whenUnknown&#x60; is ignored. Instagram only. A PATCH that sends &#x60;audience&#x60; without this field clears it. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
