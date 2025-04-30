# # ImportOrdersBulkBulkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Ecommerce order id |
**order_status** | **string** | Status of the order | [optional] [default to 'unknown']
**contact_id** | **string** | Contact ID is any non-empty unique string identifying the user (such as an email address or e-goi uid) |
**revenue** | **float** | Ecommerce order revenue. Must be greater than 0. |
**store_url** | **string** | Ecommerce store url |
**date** | **\DateTime** | Ecommerce order date (For technical reasons, all orders synchronized will have the date of synchronization.) |
**items** | [**\EgoiClient\EgoiModel\ImportOrdersBulkBulkRequestItems[]**](ImportOrdersBulkBulkRequestItems.md) | Array of ordered products |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
