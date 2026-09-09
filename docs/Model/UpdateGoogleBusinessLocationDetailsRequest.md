# # UpdateGoogleBusinessLocationDetailsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**update_mask** | **string** | Required. Comma-separated fields to update (e.g. &#39;regularHours&#39;, &#39;specialHours&#39;, &#39;profile.description&#39;, &#39;categories&#39;, &#39;serviceItems&#39;). Any valid Google Business Information API updateMask field is supported. |
**regular_hours** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestRegularHours**](UpdateGoogleBusinessLocationDetailsRequestRegularHours.md) |  | [optional]
**special_hours** | [**\Zernio\Model\GetGoogleBusinessLocationDetails200ResponseSpecialHours**](GetGoogleBusinessLocationDetails200ResponseSpecialHours.md) |  | [optional]
**profile** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestProfile**](UpdateGoogleBusinessLocationDetailsRequestProfile.md) |  | [optional]
**website_uri** | **string** |  | [optional]
**phone_numbers** | [**\Zernio\Model\GetGoogleBusinessLocationDetails200ResponsePhoneNumbers**](GetGoogleBusinessLocationDetails200ResponsePhoneNumbers.md) |  | [optional]
**categories** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestCategories**](UpdateGoogleBusinessLocationDetailsRequestCategories.md) |  | [optional]
**service_items** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestServiceItemsInner[]**](UpdateGoogleBusinessLocationDetailsRequestServiceItemsInner.md) | Services offered by the business. Use updateMask&#x3D;&#39;serviceItems&#39; to update. | [optional]
**title** | **string** | Business name. Use updateMask&#x3D;&#39;title&#39;. | [optional]
**store_code** | **string** | External store identifier, unique within the account. Use updateMask&#x3D;&#39;storeCode&#39;. | [optional]
**labels** | **string[]** | Free-form, internal-only labels for grouping (1-255 characters each). Use updateMask&#x3D;&#39;labels&#39;. | [optional]
**storefront_address** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestStorefrontAddress**](UpdateGoogleBusinessLocationDetailsRequestStorefrontAddress.md) |  | [optional]
**service_area** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestServiceArea**](UpdateGoogleBusinessLocationDetailsRequestServiceArea.md) |  | [optional]
**open_info** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestOpenInfo**](UpdateGoogleBusinessLocationDetailsRequestOpenInfo.md) |  | [optional]
**more_hours** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestMoreHoursInner[]**](UpdateGoogleBusinessLocationDetailsRequestMoreHoursInner.md) | Additional hours for specific services (delivery, drive-through, etc.). Use updateMask&#x3D;&#39;moreHours&#39;. | [optional]
**latlng** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestLatlng**](UpdateGoogleBusinessLocationDetailsRequestLatlng.md) |  | [optional]
**ad_words_location_extensions** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequestAdWordsLocationExtensions**](UpdateGoogleBusinessLocationDetailsRequestAdWordsLocationExtensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
