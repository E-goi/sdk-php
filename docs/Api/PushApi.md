# EgoiClient\PushApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionSendPush**](PushApi.md#actionSendPush) | **POST** /campaigns/push/{campaign_hash}/actions/send | Send push message
[**createPushCampaign**](PushApi.md#createPushCampaign) | **POST** /campaigns/push | Create new push campaign
[**patchPushCampaign**](PushApi.md#patchPushCampaign) | **PATCH** /campaigns/push/{campaign_hash} | Update a specific push campaign



## actionSendPush

> \EgoiClient\EgoiModel\AcceptedResponse actionSendPush($campaign_hash, $campaign_push_send_request)

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
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$campaign_push_send_request = new \EgoiClient\EgoiModel\CampaignPushSendRequest(); // \EgoiClient\EgoiModel\CampaignPushSendRequest | Parameters for the 'send push' action

try {
    $result = $apiInstance->actionSendPush($campaign_hash, $campaign_push_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->actionSendPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **campaign_push_send_request** | [**\EgoiClient\EgoiModel\CampaignPushSendRequest**](../Model/CampaignPushSendRequest.md)| Parameters for the &#39;send push&#39; action |

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


## createPushCampaign

> \EgoiClient\EgoiModel\HashcodeCampaign createPushCampaign($push_campaign_post_request)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_campaign_post_request** | [**\EgoiClient\EgoiModel\PushCampaignPostRequest**](../Model/PushCampaignPostRequest.md)| Parameters for the push campaign |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchPushCampaign

> \EgoiClient\EgoiModel\HashcodeCampaign patchPushCampaign($campaign_hash, $push_campaign_patch_request)

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
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$push_campaign_patch_request = new \EgoiClient\EgoiModel\PushCampaignPatchRequest(); // \EgoiClient\EgoiModel\PushCampaignPatchRequest | Parameters for the push campaign

try {
    $result = $apiInstance->patchPushCampaign($campaign_hash, $push_campaign_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->patchPushCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **push_campaign_patch_request** | [**\EgoiClient\EgoiModel\PushCampaignPatchRequest**](../Model/PushCampaignPatchRequest.md)| Parameters for the push campaign |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

