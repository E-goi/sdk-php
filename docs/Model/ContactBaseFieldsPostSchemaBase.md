# # ContactBaseFieldsPostSchemaBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** |  | [optional] [readonly]
**status** | **string** | Status of the contact | [optional] [default to 'active']
**first_name** | **string** | First name of the contact | [optional]
**last_name** | **string** | Last name of the contact | [optional]
**birth_date** | **\DateTime** | Birth date of the contact | [optional]
**language** | [**\EgoiClient\EgoiModel\Language**](Language.md) |  | [optional]
**email** | **string** | Email of the contact | [optional]
**cellphone** | **string** | Cellphone of the contact | [optional]
**phone** | **string** | Phone of the contact | [optional]
**push_token_android** | [**\EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenAndroidInner[]**](ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenAndroidInner.md) | Android push token of the contact | [optional]
**push_token_ios** | [**\EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenIosInner[]**](ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenIosInner.md) | IOS push token of the contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
