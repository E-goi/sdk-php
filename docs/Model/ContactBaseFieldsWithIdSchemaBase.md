# # ContactBaseFieldsWithIdSchemaBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** |  | [optional]
**status** | **string** | Status of the contact | [optional] [default to 'active']
**consent** | **string** | Contact consent | [optional] [readonly] [default to 'consent']
**consent_date** | **\DateTime** | Date and hour of the contact consent | [optional] [readonly]
**subscription_method** | **string** | Contact subscription method | [optional] [readonly]
**subscription_date** | **\DateTime** | Date and hour of the contact subscription | [optional] [readonly]
**subscription_form** | **int** | Contact subscription form | [optional] [readonly]
**unsubscription_method** | **string** | Contact unsubscription method | [optional] [readonly]
**unsubscription_reason** | **string** | Contact unsubscription reason | [optional] [readonly]
**unsubscription_observation** | **string** | Contact unsubscription observation | [optional] [readonly]
**unsubscription_date** | **\DateTime** | Contact unsubscription date | [optional] [readonly]
**change_date** | **\DateTime** | Last modification date of the contact | [optional] [readonly]
**first_name** | **string** | First name of the contact | [optional]
**last_name** | **string** | Last name of the contact | [optional]
**birth_date** | **\DateTime** | Birth date of the contact | [optional]
**language** | [**\EgoiClient\EgoiModel\Language**](Language.md) |  | [optional]
**email** | **string** | Email of the contact | [optional]
**email_status** | **string** | Email channel status | [optional] [readonly] [default to 'active']
**cellphone** | **string** | Cellphone of the contact | [optional]
**cellphone_status** | **string** | Cellphone channel status | [optional] [readonly] [default to 'active']
**phone** | **string** | Phone of the contact | [optional]
**phone_status** | **string** | Phone channel status | [optional] [readonly] [default to 'active']
**push_token_android** | [**\EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenAndroidInner[]**](ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenAndroidInner.md) | Android push token of the contact | [optional]
**push_token_ios** | [**\EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenIosInner[]**](ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenIosInner.md) | IOS push token of the contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
