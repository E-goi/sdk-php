# EgoiClient\PushApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionSendPush()**](PushApi.md#actionSendPush) | **POST** /campaigns/push/{campaign_hash}/actions/send | Send push message |
| [**createPushCampaign()**](PushApi.md#createPushCampaign) | **POST** /campaigns/push | Create new push campaign |
| [**getPushApp()**](PushApi.md#getPushApp) | **GET** /push/apps/{app_id} | Get a Push application from E-goi |
| [**getPushApps()**](PushApi.md#getPushApps) | **GET** /push/apps | Get all Push applications from E-goi |
| [**patchPushCampaign()**](PushApi.md#patchPushCampaign) | **PATCH** /campaigns/push/{campaign_hash} | Update a specific push campaign |
| [**registerPushEvent()**](PushApi.md#registerPushEvent) | **POST** /push/apps/{app_id}/event | Registers an event from the push notification. |
| [**registerPushToken()**](PushApi.md#registerPushToken) | **POST** /push/apps/{app_id}/token | Registers a Firebase token |


## `actionSendPush()`

```php
actionSendPush($campaign_hash, $campaign_push_send_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Send push message

Deploys and sends a push message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | Hash of the Campaign
$campaign_push_send_request = new \EgoiClient\EgoiModel\CampaignPushSendRequest(); // \EgoiClient\EgoiModel\CampaignPushSendRequest | Parameters for the 'send push' action

try {
    $result = $apiInstance->actionSendPush($campaign_hash, $campaign_push_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->actionSendPush: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| Hash of the Campaign | |
| **campaign_push_send_request** | [**\EgoiClient\EgoiModel\CampaignPushSendRequest**](../Model/CampaignPushSendRequest.md)| Parameters for the &#39;send push&#39; action | |

### Return type

[**\EgoiClient\EgoiModel\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPushCampaign()`

```php
createPushCampaign($push_campaign_post_request): \EgoiClient\EgoiModel\HashcodeCampaign
```

Create new push campaign

Create a new push campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$push_campaign_post_request = new \EgoiClient\EgoiModel\PushCampaignPostRequest(); // \EgoiClient\EgoiModel\PushCampaignPostRequest | Parameters for the push campaign

try {
    $result = $apiInstance->createPushCampaign($push_campaign_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->createPushCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **push_campaign_post_request** | [**\EgoiClient\EgoiModel\PushCampaignPostRequest**](../Model/PushCampaignPostRequest.md)| Parameters for the push campaign | |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushApp()`

```php
getPushApp($app_id): \EgoiClient\EgoiModel\AppStructure
```

Get a Push application from E-goi

Get a Push application from E-goi

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | ID of the E-goi push app.

try {
    $result = $apiInstance->getPushApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->getPushApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| ID of the E-goi push app. | |

### Return type

[**\EgoiClient\EgoiModel\AppStructure**](../Model/AppStructure.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushApps()`

```php
getPushApps($list_id): \EgoiClient\EgoiModel\AppStructure[]
```

Get all Push applications from E-goi

Get all Push applications from E-goi

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the list to search for.

try {
    $result = $apiInstance->getPushApps($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->getPushApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the list to search for. | [optional] |

### Return type

[**\EgoiClient\EgoiModel\AppStructure[]**](../Model/AppStructure.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPushCampaign()`

```php
patchPushCampaign($campaign_hash, $push_campaign_patch_request): \EgoiClient\EgoiModel\HashcodeCampaign
```

Update a specific push campaign

Update push campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | Hash of the Campaign
$push_campaign_patch_request = new \EgoiClient\EgoiModel\PushCampaignPatchRequest(); // \EgoiClient\EgoiModel\PushCampaignPatchRequest | Parameters for the push campaign

try {
    $result = $apiInstance->patchPushCampaign($campaign_hash, $push_campaign_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->patchPushCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| Hash of the Campaign | |
| **push_campaign_patch_request** | [**\EgoiClient\EgoiModel\PushCampaignPatchRequest**](../Model/PushCampaignPatchRequest.md)| Parameters for the push campaign | |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerPushEvent()`

```php
registerPushEvent($app_id, $push_event): \EgoiClient\EgoiModel\PushResponse
```

Registers an event from the push notification.

Registers a Firebase token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | ID of the E-goi push app.
$push_event = new \EgoiClient\EgoiModel\PushEvent(); // \EgoiClient\EgoiModel\PushEvent | Parameters for the event

try {
    $result = $apiInstance->registerPushEvent($app_id, $push_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->registerPushEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| ID of the E-goi push app. | |
| **push_event** | [**\EgoiClient\EgoiModel\PushEvent**](../Model/PushEvent.md)| Parameters for the event | |

### Return type

[**\EgoiClient\EgoiModel\PushResponse**](../Model/PushResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerPushToken()`

```php
registerPushToken($app_id, $push_token): \EgoiClient\EgoiModel\PushResponse
```

Registers a Firebase token

Registers a Firebase token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | ID of the E-goi push app.
$push_token = new \EgoiClient\EgoiModel\PushToken(); // \EgoiClient\EgoiModel\PushToken | Parameters for the token

try {
    $result = $apiInstance->registerPushToken($app_id, $push_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->registerPushToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| ID of the E-goi push app. | |
| **push_token** | [**\EgoiClient\EgoiModel\PushToken**](../Model/PushToken.md)| Parameters for the token | |

### Return type

[**\EgoiClient\EgoiModel\PushResponse**](../Model/PushResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
