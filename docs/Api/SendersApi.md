# EgoiClient\SendersApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCellphoneSender()**](SendersApi.md#createCellphoneSender) | **POST** /senders/cellphone | Create cellphone sender |
| [**createEmailSender()**](SendersApi.md#createEmailSender) | **POST** /senders/email | Create email sender |
| [**createPhoneSender()**](SendersApi.md#createPhoneSender) | **POST** /senders/phone | Create phone sender |
| [**deleteCellphoneSender()**](SendersApi.md#deleteCellphoneSender) | **DELETE** /senders/cellphone/{sender_id} | Remove cellphone sender |
| [**deleteEmailSender()**](SendersApi.md#deleteEmailSender) | **DELETE** /senders/email/{sender_id} | Remove email sender |
| [**deletePhoneSender()**](SendersApi.md#deletePhoneSender) | **DELETE** /senders/phone/{sender_id} | Remove phone sender |
| [**getAllCellphoneSenders()**](SendersApi.md#getAllCellphoneSenders) | **GET** /senders/cellphone | Get all cellphone senders |
| [**getAllEmailSenders()**](SendersApi.md#getAllEmailSenders) | **GET** /senders/email | Get all email senders |
| [**getAllPhoneSenders()**](SendersApi.md#getAllPhoneSenders) | **GET** /senders/phone | Get all phone senders |
| [**putEmailSender()**](SendersApi.md#putEmailSender) | **PUT** /senders/email/{sender_id} | Update email sender |


## `createCellphoneSender()`

```php
createCellphoneSender($cellphone_sender_post): \EgoiClient\EgoiModel\CellphoneSender
```

Create cellphone sender

Creates a cellphone sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cellphone_sender_post = new \EgoiClient\EgoiModel\CellphoneSenderPost(); // \EgoiClient\EgoiModel\CellphoneSenderPost | Parameters for the sender

try {
    $result = $apiInstance->createCellphoneSender($cellphone_sender_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->createCellphoneSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cellphone_sender_post** | [**\EgoiClient\EgoiModel\CellphoneSenderPost**](../Model/CellphoneSenderPost.md)| Parameters for the sender | |

### Return type

[**\EgoiClient\EgoiModel\CellphoneSender**](../Model/CellphoneSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailSender()`

```php
createEmailSender($email_sender_post): \EgoiClient\EgoiModel\EmailSender
```

Create email sender

Creates an email sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_sender_post = new \EgoiClient\EgoiModel\EmailSenderPost(); // \EgoiClient\EgoiModel\EmailSenderPost | Parameters for the sender

try {
    $result = $apiInstance->createEmailSender($email_sender_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->createEmailSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_sender_post** | [**\EgoiClient\EgoiModel\EmailSenderPost**](../Model/EmailSenderPost.md)| Parameters for the sender | |

### Return type

[**\EgoiClient\EgoiModel\EmailSender**](../Model/EmailSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPhoneSender()`

```php
createPhoneSender($phone_sender_post): \EgoiClient\EgoiModel\PhoneSender
```

Create phone sender

Creates a phone sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_sender_post = new \EgoiClient\EgoiModel\PhoneSenderPost(); // \EgoiClient\EgoiModel\PhoneSenderPost | Parameters for the sender

try {
    $result = $apiInstance->createPhoneSender($phone_sender_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->createPhoneSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_sender_post** | [**\EgoiClient\EgoiModel\PhoneSenderPost**](../Model/PhoneSenderPost.md)| Parameters for the sender | |

### Return type

[**\EgoiClient\EgoiModel\PhoneSender**](../Model/PhoneSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCellphoneSender()`

```php
deleteCellphoneSender($sender_id)
```

Remove cellphone sender

Remove sender information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender

try {
    $apiInstance->deleteCellphoneSender($sender_id);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->deleteCellphoneSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **int**| ID of the Sender | |

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

## `deleteEmailSender()`

```php
deleteEmailSender($sender_id)
```

Remove email sender

Remove sender information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender

try {
    $apiInstance->deleteEmailSender($sender_id);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->deleteEmailSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **int**| ID of the Sender | |

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

## `deletePhoneSender()`

```php
deletePhoneSender($sender_id)
```

Remove phone sender

Remove sender information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender

try {
    $apiInstance->deletePhoneSender($sender_id);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->deletePhoneSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **int**| ID of the Sender | |

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

## `getAllCellphoneSenders()`

```php
getAllCellphoneSenders($offset, $limit, $status): \EgoiClient\EgoiModel\CellphoneSenderCollection
```

Get all cellphone senders

Returns all cellphone senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$status = 'status_example'; // string | Status filter

try {
    $result = $apiInstance->getAllCellphoneSenders($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getAllCellphoneSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **status** | **string**| Status filter | [optional] |

### Return type

[**\EgoiClient\EgoiModel\CellphoneSenderCollection**](../Model/CellphoneSenderCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllEmailSenders()`

```php
getAllEmailSenders($offset, $limit, $status): \EgoiClient\EgoiModel\EmailSenderCollection
```

Get all email senders

Returns all email senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$status = 'status_example'; // string | Status filter

try {
    $result = $apiInstance->getAllEmailSenders($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getAllEmailSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **status** | **string**| Status filter | [optional] |

### Return type

[**\EgoiClient\EgoiModel\EmailSenderCollection**](../Model/EmailSenderCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPhoneSenders()`

```php
getAllPhoneSenders($offset, $limit, $status): \EgoiClient\EgoiModel\PhoneSenderCollection
```

Get all phone senders

Returns all phone senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$status = 'status_example'; // string | Status filter

try {
    $result = $apiInstance->getAllPhoneSenders($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getAllPhoneSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **status** | **string**| Status filter | [optional] |

### Return type

[**\EgoiClient\EgoiModel\PhoneSenderCollection**](../Model/PhoneSenderCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEmailSender()`

```php
putEmailSender($sender_id, $email_sender_put_request): \EgoiClient\EgoiModel\EmailSender
```

Update email sender

Updates an email sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender
$email_sender_put_request = new \EgoiClient\EgoiModel\EmailSenderPutRequest(); // \EgoiClient\EgoiModel\EmailSenderPutRequest | Parameters for the contact

try {
    $result = $apiInstance->putEmailSender($sender_id, $email_sender_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->putEmailSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **int**| ID of the Sender | |
| **email_sender_put_request** | [**\EgoiClient\EgoiModel\EmailSenderPutRequest**](../Model/EmailSenderPutRequest.md)| Parameters for the contact | |

### Return type

[**\EgoiClient\EgoiModel\EmailSender**](../Model/EmailSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
