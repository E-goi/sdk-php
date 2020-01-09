# # UserPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** |  | [optional] [readonly] 
**username** | **string** | User login | [optional] [readonly] 
**is_admin** | **bool** | True if user is admin, false otherwise | [optional] [readonly] [default to false]
**first_name** | **string** | First name of the user | [optional] 
**last_name** | **string** | Last name of the user | [optional] 
**email** | **string** | Email of the user | [optional] 
**phone** | **string** | User&#39;s phone (may be cellphone or phone) | [optional] 
**profile_image** | **string** | User&#39;s profile image | [optional] [readonly] 
**status** | **string** | User status | [optional] [readonly] 
**created** | [**\DateTime**](\DateTime.md) | The date and time | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | The date and time | [optional] 
**language** | [**\EgoiClient\EgoiModel\Language**](Language.md) |  | [optional] 
**timezone** | **string** | User timezone | [optional] [readonly] 
**show_removed_contacts** | **bool** | True if the user can see removed contacts, false otherwise | [optional] [readonly] [default to true]
**gender** | **string** | User gender | [optional] 
**password** | **string** | User password | [optional] 
**password_confirmation** | **string** | User password confirmation | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


