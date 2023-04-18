# EgoiClient\FieldsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExtraField()**](FieldsApi.md#createExtraField) | **POST** /lists/{list_id}/fields/extra | Create extra field |
| [**createFieldOption()**](FieldsApi.md#createFieldOption) | **POST** /lists/{list_id}/fields/extra/{field_id}/options | Create new field option |
| [**deleteExtraField()**](FieldsApi.md#deleteExtraField) | **DELETE** /lists/{list_id}/fields/extra/{field_id} | Remove extra field |
| [**deleteFieldOption()**](FieldsApi.md#deleteFieldOption) | **DELETE** /lists/{list_id}/fields/extra/{field_id}/options/{option_id} | Deletes an option |
| [**getAllFieldOptions()**](FieldsApi.md#getAllFieldOptions) | **GET** /lists/{list_id}/fields/extra/{field_id}/options | Get all field options |
| [**getAllFields()**](FieldsApi.md#getAllFields) | **GET** /lists/{list_id}/fields | Get all fields |
| [**patchBaseField()**](FieldsApi.md#patchBaseField) | **PATCH** /lists/{list_id}/fields/base/{field_id} | Update base field |
| [**patchExtraField()**](FieldsApi.md#patchExtraField) | **PATCH** /lists/{list_id}/fields/extra/{field_id} | Update extra field |
| [**updateFieldOption()**](FieldsApi.md#updateFieldOption) | **PATCH** /lists/{list_id}/fields/extra/{field_id}/options/{option_id} | Update field option |


## `createExtraField()`

```php
createExtraField($list_id, $field): \EgoiClient\EgoiModel\Field
```

Create extra field

Creates an extra field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field = new \EgoiClient\EgoiModel\Field(); // \EgoiClient\EgoiModel\Field | Parameters for the extra field

try {
    $result = $apiInstance->createExtraField($list_id, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->createExtraField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field** | [**\EgoiClient\EgoiModel\Field**](../Model/Field.md)| Parameters for the extra field | |

### Return type

[**\EgoiClient\EgoiModel\Field**](../Model/Field.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFieldOption()`

```php
createFieldOption($list_id, $field_id, $field_option_post): \EgoiClient\EgoiModel\FieldOption
```

Create new field option

Creates a field option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field_id = 56; // int | ID of the Field
$field_option_post = new \EgoiClient\EgoiModel\FieldOptionPost(); // \EgoiClient\EgoiModel\FieldOptionPost | Parameters for the field option

try {
    $result = $apiInstance->createFieldOption($list_id, $field_id, $field_option_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->createFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field_id** | **int**| ID of the Field | |
| **field_option_post** | [**\EgoiClient\EgoiModel\FieldOptionPost**](../Model/FieldOptionPost.md)| Parameters for the field option | |

### Return type

[**\EgoiClient\EgoiModel\FieldOption**](../Model/FieldOption.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExtraField()`

```php
deleteExtraField($list_id, $field_id)
```

Remove extra field

Removes an extra field given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field_id = 56; // int | ID of the Field

try {
    $apiInstance->deleteExtraField($list_id, $field_id);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->deleteExtraField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field_id** | **int**| ID of the Field | |

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

## `deleteFieldOption()`

```php
deleteFieldOption($list_id, $field_id, $option_id)
```

Deletes an option

Deletes an option of a list of values field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field_id = 56; // int | ID of the Field
$option_id = 56; // int | ID of the field option

try {
    $apiInstance->deleteFieldOption($list_id, $field_id, $option_id);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->deleteFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field_id** | **int**| ID of the Field | |
| **option_id** | **int**| ID of the field option | |

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

## `getAllFieldOptions()`

```php
getAllFieldOptions($list_id, $field_id): \EgoiClient\EgoiModel\FieldOptionsCollection
```

Get all field options

Returns all options of a given field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field_id = 56; // int | ID of the Field

try {
    $result = $apiInstance->getAllFieldOptions($list_id, $field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getAllFieldOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field_id** | **int**| ID of the Field | |

### Return type

[**\EgoiClient\EgoiModel\FieldOptionsCollection**](../Model/FieldOptionsCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllFields()`

```php
getAllFields($list_id, $offset, $limit): \EgoiClient\EgoiModel\ComplexField[]
```

Get all fields

Returns all fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return

try {
    $result = $apiInstance->getAllFields($list_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getAllFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |

### Return type

[**\EgoiClient\EgoiModel\ComplexField[]**](../Model/ComplexField.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchBaseField()`

```php
patchBaseField($list_id, $field_id, $patch_request_base_field): \EgoiClient\EgoiModel\Field
```

Update base field

Updates a base field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field_id = 'field_id_example'; // string | ID of the base field
$patch_request_base_field = new \EgoiClient\EgoiModel\PatchRequestBaseField(); // \EgoiClient\EgoiModel\PatchRequestBaseField | Parameters for the extra field

try {
    $result = $apiInstance->patchBaseField($list_id, $field_id, $patch_request_base_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->patchBaseField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field_id** | **string**| ID of the base field | |
| **patch_request_base_field** | [**\EgoiClient\EgoiModel\PatchRequestBaseField**](../Model/PatchRequestBaseField.md)| Parameters for the extra field | |

### Return type

[**\EgoiClient\EgoiModel\Field**](../Model/Field.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchExtraField()`

```php
patchExtraField($list_id, $field_id, $patch_request_field): \EgoiClient\EgoiModel\Field
```

Update extra field

Updates an extra field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field_id = 56; // int | ID of the Field
$patch_request_field = new \EgoiClient\EgoiModel\PatchRequestField(); // \EgoiClient\EgoiModel\PatchRequestField | Parameters for the extra field

try {
    $result = $apiInstance->patchExtraField($list_id, $field_id, $patch_request_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->patchExtraField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field_id** | **int**| ID of the Field | |
| **patch_request_field** | [**\EgoiClient\EgoiModel\PatchRequestField**](../Model/PatchRequestField.md)| Parameters for the extra field | |

### Return type

[**\EgoiClient\EgoiModel\Field**](../Model/Field.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFieldOption()`

```php
updateFieldOption($list_id, $field_id, $option_id, $field_option_post): \EgoiClient\EgoiModel\FieldOption
```

Update field option

Updates a field option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$field_id = 56; // int | ID of the Field
$option_id = 56; // int | ID of the field option
$field_option_post = new \EgoiClient\EgoiModel\FieldOptionPost(); // \EgoiClient\EgoiModel\FieldOptionPost | Parameters for the field option

try {
    $result = $apiInstance->updateFieldOption($list_id, $field_id, $option_id, $field_option_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->updateFieldOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **field_id** | **int**| ID of the Field | |
| **option_id** | **int**| ID of the field option | |
| **field_option_post** | [**\EgoiClient\EgoiModel\FieldOptionPost**](../Model/FieldOptionPost.md)| Parameters for the field option | |

### Return type

[**\EgoiClient\EgoiModel\FieldOption**](../Model/FieldOption.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
