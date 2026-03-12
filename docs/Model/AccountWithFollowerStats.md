# # AccountWithFollowerStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**profile_id** | [**\Late\Model\SocialAccountProfileId**](SocialAccountProfileId.md) |  | [optional]
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**profile_url** | **string** | Full profile URL for the connected account on its platform. | [optional]
**is_active** | **bool** |  | [optional]
**followers_count** | **float** | Follower count (only included if user has analytics add-on) | [optional]
**followers_last_updated** | **\DateTime** | Last time follower count was updated (only included if user has analytics add-on) | [optional]
**profile_picture** | **string** |  | [optional]
**current_followers** | **float** | Current follower count | [optional]
**last_updated** | **\DateTime** |  | [optional]
**growth** | **float** | Follower change over period | [optional]
**growth_percentage** | **float** | Percentage growth | [optional]
**data_points** | **float** | Number of historical snapshots | [optional]
**account_stats** | [**\Late\Model\AccountWithFollowerStatsAllOfAccountStats**](AccountWithFollowerStatsAllOfAccountStats.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
