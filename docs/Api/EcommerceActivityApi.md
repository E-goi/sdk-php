# EgoiClient\EcommerceActivityApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importOrdersBulk**](EcommerceActivityApi.md#importOrdersBulk) | **POST** /lists/{list_id}/orders | Orders import bulk request



## importOrdersBulk

> \EgoiClient\EgoiModel\AcceptedResponse importOrdersBulk($list_id, $import_orders_bulk_bulk_request)

Orders import bulk request

Creates new bulk orders syncronization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$import_orders_bulk_bulk_request = array(new \EgoiClient\EgoiModel\ImportOrdersBulkBulkRequest()); // \EgoiClient\EgoiModel\ImportOrdersBulkBulkRequest[] | Parameters for the Orders

try {
    $result = $apiInstance->importOrdersBulk($list_id, $import_orders_bulk_bulk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceActivityApi->importOrdersBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the List |
 **import_orders_bulk_bulk_request** | [**\EgoiClient\EgoiModel\ImportOrdersBulkBulkRequest[]**](../Model/ImportOrdersBulkBulkRequest.md)| Parameters for the Orders |

### Return type

[**\EgoiClient\EgoiModel\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

