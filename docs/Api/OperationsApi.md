# EgoiClient\OperationsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionApproveOperation()**](OperationsApi.md#actionApproveOperation) | **POST** /operations/actions/approve | Approve operation |
| [**actionCancelOperation()**](OperationsApi.md#actionCancelOperation) | **POST** /operations/actions/cancel | Cancel operation |
| [**actionPauseOperation()**](OperationsApi.md#actionPauseOperation) | **POST** /operations/actions/pause | Pause operation |
| [**actionResumeOperation()**](OperationsApi.md#actionResumeOperation) | **POST** /operations/actions/resume | Resume operation |
| [**getAllOperations()**](OperationsApi.md#getAllOperations) | **GET** /operations | Get all queued operations |


## `actionApproveOperation()`

```php
actionApproveOperation($operation_action_request): \EgoiClient\EgoiModel\OperationActionResponse
```

Approve operation

Approves an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \EgoiClient\EgoiModel\OperationActionRequest(); // \EgoiClient\EgoiModel\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionApproveOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionApproveOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_action_request** | [**\EgoiClient\EgoiModel\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request | |

### Return type

[**\EgoiClient\EgoiModel\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionCancelOperation()`

```php
actionCancelOperation($operation_action_request): \EgoiClient\EgoiModel\OperationActionResponse
```

Cancel operation

Cancels an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \EgoiClient\EgoiModel\OperationActionRequest(); // \EgoiClient\EgoiModel\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionCancelOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionCancelOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_action_request** | [**\EgoiClient\EgoiModel\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request | |

### Return type

[**\EgoiClient\EgoiModel\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionPauseOperation()`

```php
actionPauseOperation($operation_action_request): \EgoiClient\EgoiModel\OperationActionResponse
```

Pause operation

Pauses an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \EgoiClient\EgoiModel\OperationActionRequest(); // \EgoiClient\EgoiModel\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionPauseOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionPauseOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_action_request** | [**\EgoiClient\EgoiModel\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request | |

### Return type

[**\EgoiClient\EgoiModel\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionResumeOperation()`

```php
actionResumeOperation($operation_action_request): \EgoiClient\EgoiModel\OperationActionResponse
```

Resume operation

Resumes an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \EgoiClient\EgoiModel\OperationActionRequest(); // \EgoiClient\EgoiModel\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionResumeOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionResumeOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_action_request** | [**\EgoiClient\EgoiModel\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request | |

### Return type

[**\EgoiClient\EgoiModel\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllOperations()`

```php
getAllOperations($type, $status, $offset, $limit, $order, $order_by): \EgoiClient\EgoiModel\OperationsCollection
```

Get all queued operations

Returns all operations in queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Operation type
$status = 'status_example'; // string | Operation state
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'order_by_example'; // string | Reference attribute to order operations

try {
    $result = $apiInstance->getAllOperations($type, $status, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getAllOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Operation type | [optional] |
| **status** | **string**| Operation state | [optional] |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;] |
| **order_by** | **string**| Reference attribute to order operations | [optional] |

### Return type

[**\EgoiClient\EgoiModel\OperationsCollection**](../Model/OperationsCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
