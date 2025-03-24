# EgoiClient\ListsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createList()**](ListsApi.md#createList) | **POST** /lists | Create new list |
| [**deleteList()**](ListsApi.md#deleteList) | **DELETE** /lists/{list_id} | Remove list |
| [**getAllLists()**](ListsApi.md#getAllLists) | **GET** /lists | Get all lists |
| [**getList()**](ListsApi.md#getList) | **GET** /lists/{list_id} | Get list |
| [**updateList()**](ListsApi.md#updateList) | **PATCH** /lists/{list_id} | Update a specific list |


## `createList()`

```php
createList($post_request_list): \EgoiClient\EgoiModel\ModelList
```

Create new list

Create a new list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_request_list = new \EgoiClient\EgoiModel\PostRequestList(); // \EgoiClient\EgoiModel\PostRequestList | Parameters for the List

try {
    $result = $apiInstance->createList($post_request_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->createList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_request_list** | [**\EgoiClient\EgoiModel\PostRequestList**](../Model/PostRequestList.md)| Parameters for the List | |

### Return type

[**\EgoiClient\EgoiModel\ModelList**](../Model/ModelList.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteList()`

```php
deleteList($list_id)
```

Remove list

Remove list information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List

try {
    $apiInstance->deleteList($list_id);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |

### Return type

void (empty response body)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllLists()`

```php
getAllLists($offset, $limit, $order, $order_by, $internal_name, $public_name, $created_min, $created_max, $updated_min, $updated_max): \EgoiClient\EgoiModel\ListCollection
```

Get all lists

Returns all lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'list_id'; // string | Reference attribute to order lists
$internal_name = 'internal_name_example'; // string | Internal name of the list
$public_name = 'public_name_example'; // string | Public name of the list
$created_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created initial date
$created_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created finish
$updated_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated initial
$updated_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated finish

try {
    $result = $apiInstance->getAllLists($offset, $limit, $order, $order_by, $internal_name, $public_name, $created_min, $created_max, $updated_min, $updated_max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getAllLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;] |
| **order_by** | **string**| Reference attribute to order lists | [optional] [default to &#39;list_id&#39;] |
| **internal_name** | **string**| Internal name of the list | [optional] |
| **public_name** | **string**| Public name of the list | [optional] |
| **created_min** | **\DateTime**| Created initial date | [optional] |
| **created_max** | **\DateTime**| Created finish | [optional] |
| **updated_min** | **\DateTime**| Updated initial | [optional] |
| **updated_max** | **\DateTime**| Updated finish | [optional] |

### Return type

[**\EgoiClient\EgoiModel\ListCollection**](../Model/ListCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getList()`

```php
getList($list_id): \EgoiClient\EgoiModel\ComplexList
```

Get list

Returns list information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List

try {
    $result = $apiInstance->getList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |

### Return type

[**\EgoiClient\EgoiModel\ComplexList**](../Model/ComplexList.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateList()`

```php
updateList($list_id, $patch_request_list): \EgoiClient\EgoiModel\ModelList
```

Update a specific list

Update a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$patch_request_list = new \EgoiClient\EgoiModel\PatchRequestList(); // \EgoiClient\EgoiModel\PatchRequestList | Parameters for the List

try {
    $result = $apiInstance->updateList($list_id, $patch_request_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->updateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **patch_request_list** | [**\EgoiClient\EgoiModel\PatchRequestList**](../Model/PatchRequestList.md)| Parameters for the List | |

### Return type

[**\EgoiClient\EgoiModel\ModelList**](../Model/ModelList.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
