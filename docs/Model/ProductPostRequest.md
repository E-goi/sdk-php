# # ProductPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categories** | **string[]** | Array of product categories, using the character &#39;&gt;&#39; as delimiter for the breadcrumb                                 syntax | [optional]
**related_products** | **string[]** | Related products, array of &#39;product_identifier&#39; | [optional]
**custom_attributes** | [**\EgoiClient\EgoiModel\ProductCustomAttributes[]**](ProductCustomAttributes.md) | Custom attributes | [optional]
**product_identifier** | **string** | The ID of the product in your store |
**catalog_id** | **int** |  | [optional] [readonly]
**name** | **string** | Name of the product |
**description** | **string** | Description of the product | [optional]
**sku** | **string** | Stock Keeping Unit | [optional]
**upc** | **string** | Universal Product Code | [optional]
**ean** | **string** | European Article Numbering | [optional]
**gtin** | **string** | Global Trade Item Number | [optional]
**mpn** | **string** | Manufacturer Part Number | [optional]
**link** | **string** | Link for the product | [optional]
**image_link** | **string** | Link for the product image | [optional]
**price** | **float** | Price of the product | [optional] [default to 0]
**sale_price** | **float** | Sale price of the product | [optional] [default to 0]
**brand** | **string** | Brand of the product | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
