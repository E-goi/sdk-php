# EgoiClient\AdvancedReportsApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateEmailBouncesReport**](AdvancedReportsApi.md#generateEmailBouncesReport) | **POST** /reports/advanced/email-bounces | Generate email bounces report
[**generateEmailClicksByContactReport**](AdvancedReportsApi.md#generateEmailClicksByContactReport) | **POST** /reports/advanced/email-clicks-by-contact | Generate email clicks by contact report
[**generateEmailClicksByUrlReport**](AdvancedReportsApi.md#generateEmailClicksByUrlReport) | **POST** /reports/advanced/email-clicks-by-url | Generate email clicks by URL report
[**generateEmailEventsReport**](AdvancedReportsApi.md#generateEmailEventsReport) | **POST** /reports/advanced/email-events | Generate email events report
[**generateEmailSmsReport**](AdvancedReportsApi.md#generateEmailSmsReport) | **POST** /reports/advanced/sms-bounces | Generate SMS bounces report
[**generateEmailUnsubscriptionsReport**](AdvancedReportsApi.md#generateEmailUnsubscriptionsReport) | **POST** /reports/advanced/email-unsubscriptions | Generate email unsubscriptions report
[**generateFormAnswersReport**](AdvancedReportsApi.md#generateFormAnswersReport) | **POST** /reports/advanced/form-answers | Generate form answers report
[**generateSendsReport**](AdvancedReportsApi.md#generateSendsReport) | **POST** /reports/advanced/sends | Generate sends report
[**generateSmsEventsReport**](AdvancedReportsApi.md#generateSmsEventsReport) | **POST** /reports/advanced/sms-events | Generate SMS events report
[**generateSubscriptionsReport**](AdvancedReportsApi.md#generateSubscriptionsReport) | **POST** /reports/advanced/subscriptions | Generate subscriptions report
[**generateUnsubscriptionsReport**](AdvancedReportsApi.md#generateUnsubscriptionsReport) | **POST** /reports/advanced/unsubscriptions | Generate unsubscriptions report
[**getAllAdvancedReports**](AdvancedReportsApi.md#getAllAdvancedReports) | **GET** /reports/advanced | Get all advanced reports



## generateEmailBouncesReport

> \EgoiClient\EgoiModel\AcceptedResponse generateEmailBouncesReport($generate_email_bounces_report)

Generate email bounces report

Generates a new email bounces report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_email_bounces_report = new \EgoiClient\EgoiModel\GenerateEmailBouncesReport(); // \EgoiClient\EgoiModel\GenerateEmailBouncesReport | Parameters for the email bounces report

try {
    $result = $apiInstance->generateEmailBouncesReport($generate_email_bounces_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateEmailBouncesReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_email_bounces_report** | [**\EgoiClient\EgoiModel\GenerateEmailBouncesReport**](../Model/GenerateEmailBouncesReport.md)| Parameters for the email bounces report |

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


## generateEmailClicksByContactReport

> \EgoiClient\EgoiModel\AcceptedResponse generateEmailClicksByContactReport($generate_email_clicks_by_contact_report)

Generate email clicks by contact report

Generates a new email clicks by contact report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_email_clicks_by_contact_report = new \EgoiClient\EgoiModel\GenerateEmailClicksByContactReport(); // \EgoiClient\EgoiModel\GenerateEmailClicksByContactReport | Parameters for the email clicks by contact report

try {
    $result = $apiInstance->generateEmailClicksByContactReport($generate_email_clicks_by_contact_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateEmailClicksByContactReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_email_clicks_by_contact_report** | [**\EgoiClient\EgoiModel\GenerateEmailClicksByContactReport**](../Model/GenerateEmailClicksByContactReport.md)| Parameters for the email clicks by contact report |

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


## generateEmailClicksByUrlReport

> \EgoiClient\EgoiModel\AcceptedResponse generateEmailClicksByUrlReport($generate_email_clicks_by_url_report)

Generate email clicks by URL report

Generates a new email clicks by URL report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_email_clicks_by_url_report = new \EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport(); // \EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport | Parameters for the email clicks by URL report

try {
    $result = $apiInstance->generateEmailClicksByUrlReport($generate_email_clicks_by_url_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateEmailClicksByUrlReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_email_clicks_by_url_report** | [**\EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport**](../Model/GenerateEmailClicksByUrlReport.md)| Parameters for the email clicks by URL report |

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


## generateEmailEventsReport

> \EgoiClient\EgoiModel\AcceptedResponse generateEmailEventsReport($generate_email_events_report)

Generate email events report

Generates a new email events report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_email_events_report = new \EgoiClient\EgoiModel\GenerateEmailEventsReport(); // \EgoiClient\EgoiModel\GenerateEmailEventsReport | Parameters for the email events report

try {
    $result = $apiInstance->generateEmailEventsReport($generate_email_events_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateEmailEventsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_email_events_report** | [**\EgoiClient\EgoiModel\GenerateEmailEventsReport**](../Model/GenerateEmailEventsReport.md)| Parameters for the email events report |

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


## generateEmailSmsReport

> \EgoiClient\EgoiModel\AcceptedResponse generateEmailSmsReport($generate_sms_bounces_report)

Generate SMS bounces report

Generates a new SMS bounces report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_sms_bounces_report = new \EgoiClient\EgoiModel\GenerateSmsBouncesReport(); // \EgoiClient\EgoiModel\GenerateSmsBouncesReport | Parameters for the SMS bounces report

try {
    $result = $apiInstance->generateEmailSmsReport($generate_sms_bounces_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateEmailSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_sms_bounces_report** | [**\EgoiClient\EgoiModel\GenerateSmsBouncesReport**](../Model/GenerateSmsBouncesReport.md)| Parameters for the SMS bounces report |

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


## generateEmailUnsubscriptionsReport

> \EgoiClient\EgoiModel\AcceptedResponse generateEmailUnsubscriptionsReport($generate_email_unsubscriptions_report)

Generate email unsubscriptions report

Generates a new email unsubscriptions report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_email_unsubscriptions_report = new \EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport(); // \EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport | Parameters for the email unsubscriptions report

try {
    $result = $apiInstance->generateEmailUnsubscriptionsReport($generate_email_unsubscriptions_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateEmailUnsubscriptionsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_email_unsubscriptions_report** | [**\EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport**](../Model/GenerateEmailUnsubscriptionsReport.md)| Parameters for the email unsubscriptions report |

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


## generateFormAnswersReport

> \EgoiClient\EgoiModel\AcceptedResponse generateFormAnswersReport($generate_form_answers_report)

Generate form answers report

Generates a new form answers report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_form_answers_report = new \EgoiClient\EgoiModel\GenerateFormAnswersReport(); // \EgoiClient\EgoiModel\GenerateFormAnswersReport | Parameters for the form answers report

try {
    $result = $apiInstance->generateFormAnswersReport($generate_form_answers_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateFormAnswersReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_form_answers_report** | [**\EgoiClient\EgoiModel\GenerateFormAnswersReport**](../Model/GenerateFormAnswersReport.md)| Parameters for the form answers report |

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


## generateSendsReport

> \EgoiClient\EgoiModel\AcceptedResponse generateSendsReport($generate_sends_report)

Generate sends report

Generates a new sends report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_sends_report = new \EgoiClient\EgoiModel\GenerateSendsReport(); // \EgoiClient\EgoiModel\GenerateSendsReport | Parameters for the sends report

try {
    $result = $apiInstance->generateSendsReport($generate_sends_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateSendsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_sends_report** | [**\EgoiClient\EgoiModel\GenerateSendsReport**](../Model/GenerateSendsReport.md)| Parameters for the sends report |

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


## generateSmsEventsReport

> \EgoiClient\EgoiModel\AcceptedResponse generateSmsEventsReport($generate_sms_events_report)

Generate SMS events report

Generates a new SMS events report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_sms_events_report = new \EgoiClient\EgoiModel\GenerateSmsEventsReport(); // \EgoiClient\EgoiModel\GenerateSmsEventsReport | Parameters for the SMS events report

try {
    $result = $apiInstance->generateSmsEventsReport($generate_sms_events_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateSmsEventsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_sms_events_report** | [**\EgoiClient\EgoiModel\GenerateSmsEventsReport**](../Model/GenerateSmsEventsReport.md)| Parameters for the SMS events report |

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


## generateSubscriptionsReport

> \EgoiClient\EgoiModel\AcceptedResponse generateSubscriptionsReport($generate_subscriptions_report)

Generate subscriptions report

Generates a new subscriptions report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_subscriptions_report = new \EgoiClient\EgoiModel\GenerateSubscriptionsReport(); // \EgoiClient\EgoiModel\GenerateSubscriptionsReport | Parameters for the subscriptions report

try {
    $result = $apiInstance->generateSubscriptionsReport($generate_subscriptions_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateSubscriptionsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_subscriptions_report** | [**\EgoiClient\EgoiModel\GenerateSubscriptionsReport**](../Model/GenerateSubscriptionsReport.md)| Parameters for the subscriptions report |

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


## generateUnsubscriptionsReport

> \EgoiClient\EgoiModel\AcceptedResponse generateUnsubscriptionsReport($generate_unsubscriptions_report)

Generate unsubscriptions report

Generates a new unsubscriptions report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_unsubscriptions_report = new \EgoiClient\EgoiModel\GenerateUnsubscriptionsReport(); // \EgoiClient\EgoiModel\GenerateUnsubscriptionsReport | Parameters for the unsubscriptions report

try {
    $result = $apiInstance->generateUnsubscriptionsReport($generate_unsubscriptions_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateUnsubscriptionsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_unsubscriptions_report** | [**\EgoiClient\EgoiModel\GenerateUnsubscriptionsReport**](../Model/GenerateUnsubscriptionsReport.md)| Parameters for the unsubscriptions report |

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


## getAllAdvancedReports

> \EgoiClient\EgoiModel\AdvancedReportsCollection getAllAdvancedReports($status, $title, $created_min, $created_max, $offset, $limit, $order, $order_by)

Get all advanced reports

Returns all advanced reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Advanced report status
$title = 'title_example'; // string | Advanced report title
$created_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created initial date
$created_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created finish
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'advanced_report_id'; // string | Reference attribute to order the advanced reports

try {
    $result = $apiInstance->getAllAdvancedReports($status, $title, $created_min, $created_max, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->getAllAdvancedReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Advanced report status | [optional]
 **title** | **string**| Advanced report title | [optional]
 **created_min** | **\DateTime**| Created initial date | [optional]
 **created_max** | **\DateTime**| Created finish | [optional]
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order the advanced reports | [optional] [default to &#39;advanced_report_id&#39;]

### Return type

[**\EgoiClient\EgoiModel\AdvancedReportsCollection**](../Model/AdvancedReportsCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

