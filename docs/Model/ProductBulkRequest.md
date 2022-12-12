# # ProductBulkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**products** | [**\EgoiClient\EgoiModel\Product[]**](Product.md) | Collection of products to import. Products having an incorrect format will be ignored |
**mode** | **string** | How the import will be processed:  *                      &#39;rewrite&#39; - catalog content will be erased and then the imported products will be added  *                      &#39;add&#39; - adds imported products to the catalog without replacing any content. Duplicates will                         not be added  *                      &#39;update&#39; - adds imported products to the catalog and updates any duplicates found | [optional] [default to 'update']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
