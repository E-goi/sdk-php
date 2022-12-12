# # ImportBulkFileRequestSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | Add new contacts only (&#39;add&#39;) or add and replace existing ones (&#39;update&#39;) |
**compare_field** | **string** | Field ID which will be mapped for comparison to prevent duplicates) |
**file** | [**\EgoiClient\EgoiModel\ImportBulkFileRequestSchemaFile**](ImportBulkFileRequestSchemaFile.md) |  |
**force_empty** | **bool** | If &#39;true&#39; accepts empty values and erases those fields | [optional] [default to false]
**notify** | **int[]** | Array of IDs of the users to notify | [optional]
**callback_url** | **string** | Url to receive the report | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
