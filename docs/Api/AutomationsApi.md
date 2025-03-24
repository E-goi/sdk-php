# EgoiClient\AutomationsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAutomation()**](AutomationsApi.md#deleteAutomation) | **DELETE** /automations/{automation_id} | Remove automation |
| [**getAllActions()**](AutomationsApi.md#getAllActions) | **GET** /automations/{automation_id}/actions | Get all actions from given automation |
| [**getAllAutomations()**](AutomationsApi.md#getAllAutomations) | **GET** /automations | Get all automations |


## `deleteAutomation()`

```php
deleteAutomation($automation_id)
```

Remove automation

Remove automation information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 56; // int | ID of the Automation

try {
    $apiInstance->deleteAutomation($automation_id);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->deleteAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **int**| ID of the Automation | |

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

## `getAllActions()`

```php
getAllActions($automation_id, $offset, $limit): \EgoiClient\EgoiModel\AutomationActionsCollection
```

Get all actions from given automation

Returns all actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 56; // int | Reference attribute to automation id
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return

try {
    $result = $apiInstance->getAllActions($automation_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAllActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **int**| Reference attribute to automation id | [optional] |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |

### Return type

[**\EgoiClient\EgoiModel\AutomationActionsCollection**](../Model/AutomationActionsCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAutomations()`

```php
getAllAutomations($automation_id, $title, $created_by, $list_id, $status, $offset, $limit, $order, $order_by): \EgoiClient\EgoiModel\AutomationCollection
```

Get all automations

Returns all automations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 56; // int | Reference attribute to automation id
$title = 'title_example'; // string | Reference attribute to title
$created_by = 56; // int | Reference attribute to created by
$list_id = 56; // int | ID of the list that owns the automation
$status = 'status_example'; // string | Automation status
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'automation_id'; // string | Reference attribute to order automations

try {
    $result = $apiInstance->getAllAutomations($automation_id, $title, $created_by, $list_id, $status, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAllAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **int**| Reference attribute to automation id | [optional] |
| **title** | **string**| Reference attribute to title | [optional] |
| **created_by** | **int**| Reference attribute to created by | [optional] |
| **list_id** | **int**| ID of the list that owns the automation | [optional] |
| **status** | **string**| Automation status | [optional] |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;] |
| **order_by** | **string**| Reference attribute to order automations | [optional] [default to &#39;automation_id&#39;] |

### Return type

[**\EgoiClient\EgoiModel\AutomationCollection**](../Model/AutomationCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
