# # ImportBulkFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | Add new contacts only (&#39;add&#39;), add and replace existing ones (&#39;update&#39;) or only replace existing ones (&#39;update_only&#39;) |
**compare_field** | **string** | Field ID which will be mapped for comparison to prevent duplicates. Field must be set as unique in E-goi. |
**contacts** | [**\EgoiClient\EgoiModel\ContactBulk[]**](ContactBulk.md) | Array of contacts to import |
**force_empty** | **bool** | If &#39;true&#39; accepts empty values and erases those fields | [optional] [default to false]
**notify** | **int[]** | Array of IDs of the users to notify | [optional]
**callback_url** | **string** | Url to receive the report &lt;a href&#x3D;&#39;/usecases/callbacks/#import-collection-of-contacts&#39; target&#x3D;&#39;_blank&#39;&gt;[Go to callback documentation]&lt;/a&gt; | [optional]
**file** | [**\EgoiClient\EgoiModel\ImportBulkFileRequestSchemaFile**](ImportBulkFileRequestSchemaFile.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
