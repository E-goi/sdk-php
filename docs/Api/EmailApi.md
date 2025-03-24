# EgoiClient\EmailApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionEnableEmailRss()**](EmailApi.md#actionEnableEmailRss) | **POST** /campaigns/email/rss/{campaign_hash}/actions/enable | Enables a rss email campaign |
| [**actionSendEmail()**](EmailApi.md#actionSendEmail) | **POST** /campaigns/email/{campaign_hash}/actions/send | Send email message |
| [**createEmailCampaign()**](EmailApi.md#createEmailCampaign) | **POST** /campaigns/email | Create new email campaign |
| [**createEmailRssCampaign()**](EmailApi.md#createEmailRssCampaign) | **POST** /campaigns/email/rss | Create new email rss campaign |
| [**patchEmailCampaign()**](EmailApi.md#patchEmailCampaign) | **PATCH** /campaigns/email/{campaign_hash} | Update a specific email campaign |


## `actionEnableEmailRss()`

```php
actionEnableEmailRss($campaign_hash): \EgoiClient\EgoiModel\AcceptedResponse
```

Enables a rss email campaign

Enables a rss email message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | Hash of the Campaign

try {
    $result = $apiInstance->actionEnableEmailRss($campaign_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->actionEnableEmailRss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| Hash of the Campaign | |

### Return type

[**\EgoiClient\EgoiModel\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionSendEmail()`

```php
actionSendEmail($campaign_hash, $campaign_email_send_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Send email message

Deploys and sends an email message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | Hash of the Campaign
$campaign_email_send_request = new \EgoiClient\EgoiModel\CampaignEmailSendRequest(); // \EgoiClient\EgoiModel\CampaignEmailSendRequest | Parameters for the 'send email' action

try {
    $result = $apiInstance->actionSendEmail($campaign_hash, $campaign_email_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->actionSendEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| Hash of the Campaign | |
| **campaign_email_send_request** | [**\EgoiClient\EgoiModel\CampaignEmailSendRequest**](../Model/CampaignEmailSendRequest.md)| Parameters for the &#39;send email&#39; action | |

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

## `createEmailCampaign()`

```php
createEmailCampaign($email_campaign_create): \EgoiClient\EgoiModel\HashcodeCampaign
```

Create new email campaign

Create a new email campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_campaign_create = new \EgoiClient\EgoiModel\EmailCampaignCreate(); // \EgoiClient\EgoiModel\EmailCampaignCreate | Parameters for the Email Campaign

try {
    $result = $apiInstance->createEmailCampaign($email_campaign_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_campaign_create** | [**\EgoiClient\EgoiModel\EmailCampaignCreate**](../Model/EmailCampaignCreate.md)| Parameters for the Email Campaign | |

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

## `createEmailRssCampaign()`

```php
createEmailRssCampaign($email_rss_campaign_create): \EgoiClient\EgoiModel\HashcodeCampaign
```

Create new email rss campaign

Create a new email rss campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_rss_campaign_create = new \EgoiClient\EgoiModel\EmailRssCampaignCreate(); // \EgoiClient\EgoiModel\EmailRssCampaignCreate | Parameters for the Email Campaign

try {
    $result = $apiInstance->createEmailRssCampaign($email_rss_campaign_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmailRssCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_rss_campaign_create** | [**\EgoiClient\EgoiModel\EmailRssCampaignCreate**](../Model/EmailRssCampaignCreate.md)| Parameters for the Email Campaign | |

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

## `patchEmailCampaign()`

```php
patchEmailCampaign($campaign_hash, $email_campaign_patch): \EgoiClient\EgoiModel\HashcodeCampaign
```

Update a specific email campaign

Update email campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | Hash of the Campaign
$email_campaign_patch = new \EgoiClient\EgoiModel\EmailCampaignPatch(); // \EgoiClient\EgoiModel\EmailCampaignPatch | Parameters for the Email Campaign

try {
    $result = $apiInstance->patchEmailCampaign($campaign_hash, $email_campaign_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->patchEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| Hash of the Campaign | |
| **email_campaign_patch** | [**\EgoiClient\EgoiModel\EmailCampaignPatch**](../Model/EmailCampaignPatch.md)| Parameters for the Email Campaign | |

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
