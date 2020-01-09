# # Form

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**form_id** | **int** |  | [optional] [readonly] 
**internal_title** | **string** | Internal title of the form | [optional] [default to '$request.body#/title']
**title** | **string** | Title of the form | 
**language** | [**\EgoiClient\EgoiModel\Language**](Language.md) |  | [optional] 
**list_id** | **int** |  | [optional] 
**default** | **bool** | True if this is the default form in the list, false otherwise | [optional] 
**owner** | **int** |  | [optional] 
**status** | **string** | Status of the form | [optional] [readonly] 
**created** | [**\DateTime**](\DateTime.md) | The date and time | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | The date and time | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


