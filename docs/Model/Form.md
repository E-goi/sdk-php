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
**created** | **\DateTime** | The date and time | [optional]
**updated** | **\DateTime** | The date and time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
