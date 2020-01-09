# EgoiClient\WebpushApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionEnableWebPushRss**](WebpushApi.md#actionEnableWebPushRss) | **POST** /campaigns/webpush/rss/{campaign_hash}/actions/enable | Enable a rss webpush campaign
[**actionSendWebPush**](WebpushApi.md#actionSendWebPush) | **POST** /campaigns/web-push/{campaign_hash}/actions/send | Send webpush message
[**createWebPushCampaign**](WebpushApi.md#createWebPushCampaign) | **POST** /campaigns/web-push | Create new webpush campaign
[**createWebPushRssCampaign**](WebpushApi.md#createWebPushRssCampaign) | **POST** /campaigns/webpush/rss | Create new webpush rss campaign
[**getAllWebPushSites**](WebpushApi.md#getAllWebPushSites) | **GET** /webpush/site | Get all webpush sites
[**patchWebPushCampaign**](WebpushApi.md#patchWebPushCampaign) | **PATCH** /campaigns/web-push/{campaign_hash} | Update a specific webpush campaign



## actionEnableWebPushRss

> \EgoiClient\EgoiModel\AcceptedResponse actionEnableWebPushRss($campaign_hash)

Enable a rss webpush campaign

Enable rss webpush message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign

try {
    $result = $apiInstance->actionEnableWebPushRss($campaign_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->actionEnableWebPushRss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |

### Return type

[**\EgoiClient\EgoiModel\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionSendWebPush

> \EgoiClient\EgoiModel\AcceptedResponse actionSendWebPush($campaign_hash, $campaign_web_push_send_request)

Send webpush message

Deploys and sends a webpush message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$campaign_web_push_send_request = new \EgoiClient\EgoiModel\CampaignWebPushSendRequest(); // \EgoiClient\EgoiModel\CampaignWebPushSendRequest | Parameters for the 'send web-push' action

try {
    $result = $apiInstance->actionSendWebPush($campaign_hash, $campaign_web_push_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->actionSendWebPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **campaign_web_push_send_request** | [**\EgoiClient\EgoiModel\CampaignWebPushSendRequest**](../Model/CampaignWebPushSendRequest.md)| Parameters for the &#39;send web-push&#39; action |

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


## createWebPushCampaign

> \EgoiClient\EgoiModel\CampaignHash createWebPushCampaign($web_push_campaign)

Create new webpush campaign

Create a new webpush campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_push_campaign = new \EgoiClient\EgoiModel\WebPushCampaign(); // \EgoiClient\EgoiModel\WebPushCampaign | Parameters for the webpush campaign

try {
    $result = $apiInstance->createWebPushCampaign($web_push_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->createWebPushCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_push_campaign** | [**\EgoiClient\EgoiModel\WebPushCampaign**](../Model/WebPushCampaign.md)| Parameters for the webpush campaign |

### Return type

[**\EgoiClient\EgoiModel\CampaignHash**](../Model/CampaignHash.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createWebPushRssCampaign

> \EgoiClient\EgoiModel\HashcodeCampaign createWebPushRssCampaign($web_push_rss_campaign)

Create new webpush rss campaign

Create a new webpush rss campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_push_rss_campaign = new \EgoiClient\EgoiModel\WebPushRssCampaign(); // \EgoiClient\EgoiModel\WebPushRssCampaign | Parameters for the WebPush Campaign

try {
    $result = $apiInstance->createWebPushRssCampaign($web_push_rss_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->createWebPushRssCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_push_rss_campaign** | [**\EgoiClient\EgoiModel\WebPushRssCampaign**](../Model/WebPushRssCampaign.md)| Parameters for the WebPush Campaign |

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


## getAllWebPushSites

> \EgoiClient\EgoiModel\TagCollection1 getAllWebPushSites($offset, $limit, $order, $order_by, $list_id)

Get all webpush sites

Returns all wepush's sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'list_id'; // string | Reference attribute to order sites
$list_id = 56; // int | Select sites referenced to a list

try {
    $result = $apiInstance->getAllWebPushSites($offset, $limit, $order, $order_by, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->getAllWebPushSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order sites | [optional] [default to &#39;list_id&#39;]
 **list_id** | **int**| Select sites referenced to a list | [optional]

### Return type

[**\EgoiClient\EgoiModel\TagCollection1**](../Model/TagCollection1.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchWebPushCampaign

> \EgoiClient\EgoiModel\CampaignHash patchWebPushCampaign($campaign_hash, $web_push_patch_campaign)

Update a specific webpush campaign

Update a webpush campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$web_push_patch_campaign = new \EgoiClient\EgoiModel\WebPushPatchCampaign(); // \EgoiClient\EgoiModel\WebPushPatchCampaign | Parameters for the Webpush Campaign

try {
    $result = $apiInstance->patchWebPushCampaign($campaign_hash, $web_push_patch_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->patchWebPushCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **web_push_patch_campaign** | [**\EgoiClient\EgoiModel\WebPushPatchCampaign**](../Model/WebPushPatchCampaign.md)| Parameters for the Webpush Campaign |

### Return type

[**\EgoiClient\EgoiModel\CampaignHash**](../Model/CampaignHash.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

