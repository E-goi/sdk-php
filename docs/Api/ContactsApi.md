# EgoiClient\ContactsApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionAttachTag**](ContactsApi.md#actionAttachTag) | **POST** /lists/{list_id}/contacts/actions/attach-tag | Attach tag to contact
[**actionDetachTag**](ContactsApi.md#actionDetachTag) | **POST** /lists/{list_id}/contacts/actions/detach-tag | Detach tag to contact
[**actionExportContacts**](ContactsApi.md#actionExportContacts) | **POST** /lists/{list_id}/contacts/actions/export | Exports a list of contacts
[**actionStartAutomation**](ContactsApi.md#actionStartAutomation) | **POST** /lists/{list_id}/contacts/actions/start-automation | Start automation
[**actionUnsubscribeContact**](ContactsApi.md#actionUnsubscribeContact) | **POST** /lists/{list_id}/contacts/actions/unsubscribe | Unsubscribes contacts
[**createContact**](ContactsApi.md#createContact) | **POST** /lists/{list_id}/contacts | Create new contact
[**getAllContactActivities**](ContactsApi.md#getAllContactActivities) | **GET** /lists/{list_id}/contacts/{contact_id}/activities | Get all contact activities
[**getAllContacts**](ContactsApi.md#getAllContacts) | **GET** /lists/{list_id}/contacts | Get all contacts
[**getContact**](ContactsApi.md#getContact) | **GET** /lists/{list_id}/contacts/{contact_id} | Get contact
[**patchContact**](ContactsApi.md#patchContact) | **PATCH** /lists/{list_id}/contacts/{contact_id} | Update a specific contact



## actionAttachTag

> \EgoiClient\EgoiModel\AttachTagResponse actionAttachTag($list_id, $attach_tag_request)

Attach tag to contact

Attaches a tag to the provided contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$attach_tag_request = new \EgoiClient\EgoiModel\AttachTagRequest(); // \EgoiClient\EgoiModel\AttachTagRequest | Parameters for the Tag

try {
    $result = $apiInstance->actionAttachTag($list_id, $attach_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionAttachTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the List |
 **attach_tag_request** | [**\EgoiClient\EgoiModel\AttachTagRequest**](../Model/AttachTagRequest.md)| Parameters for the Tag |

### Return type

[**\EgoiClient\EgoiModel\AttachTagResponse**](../Model/AttachTagResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionDetachTag

> \EgoiClient\EgoiModel\AttachTagResponse actionDetachTag($list_id, $attach_tag_request)

Detach tag to contact

Detach a tag to the provided contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$attach_tag_request = new \EgoiClient\EgoiModel\AttachTagRequest(); // \EgoiClient\EgoiModel\AttachTagRequest | Parameters for the Tag

try {
    $result = $apiInstance->actionDetachTag($list_id, $attach_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionDetachTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the List |
 **attach_tag_request** | [**\EgoiClient\EgoiModel\AttachTagRequest**](../Model/AttachTagRequest.md)| Parameters for the Tag |

### Return type

[**\EgoiClient\EgoiModel\AttachTagResponse**](../Model/AttachTagResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionExportContacts

> \EgoiClient\EgoiModel\AcceptedResponse actionExportContacts($list_id, $contact_export_request)

Exports a list of contacts

Exports a list of contacts to the desired callback url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$contact_export_request = new \EgoiClient\EgoiModel\ContactExportRequest(); // \EgoiClient\EgoiModel\ContactExportRequest | Parameters for export

try {
    $result = $apiInstance->actionExportContacts($list_id, $contact_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionExportContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the List |
 **contact_export_request** | [**\EgoiClient\EgoiModel\ContactExportRequest**](../Model/ContactExportRequest.md)| Parameters for export |

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


## actionStartAutomation

> \EgoiClient\EgoiModel\StartAutomationResponse actionStartAutomation($list_id, $start_automation_request)

Start automation

Start automation to the provided contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$start_automation_request = new \EgoiClient\EgoiModel\StartAutomationRequest(); // \EgoiClient\EgoiModel\StartAutomationRequest | Parameters for the operation to start automation

try {
    $result = $apiInstance->actionStartAutomation($list_id, $start_automation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionStartAutomation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the List |
 **start_automation_request** | [**\EgoiClient\EgoiModel\StartAutomationRequest**](../Model/StartAutomationRequest.md)| Parameters for the operation to start automation |

### Return type

[**\EgoiClient\EgoiModel\StartAutomationResponse**](../Model/StartAutomationResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionUnsubscribeContact

> \EgoiClient\EgoiModel\RemoveResponse actionUnsubscribeContact($list_id, $remove_request)

Unsubscribes contacts

Unsubscribes contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$remove_request = new \EgoiClient\EgoiModel\RemoveRequest(); // \EgoiClient\EgoiModel\RemoveRequest | Parameters for the contact to unsubscribe

try {
    $result = $apiInstance->actionUnsubscribeContact($list_id, $remove_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionUnsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the List |
 **remove_request** | [**\EgoiClient\EgoiModel\RemoveRequest**](../Model/RemoveRequest.md)| Parameters for the contact to unsubscribe |

### Return type

[**\EgoiClient\EgoiModel\RemoveResponse**](../Model/RemoveResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContact

> \EgoiClient\EgoiModel\CreateContactResponse createContact($list_id, $contact_base_extra)

Create new contact

Create a new contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the list where the contact belongs
$contact_base_extra = new \EgoiClient\EgoiModel\ContactBaseExtra(); // \EgoiClient\EgoiModel\ContactBaseExtra | Parameters for the Contact

try {
    $result = $apiInstance->createContact($list_id, $contact_base_extra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the list where the contact belongs |
 **contact_base_extra** | [**\EgoiClient\EgoiModel\ContactBaseExtra**](../Model/ContactBaseExtra.md)| Parameters for the Contact |

### Return type

[**\EgoiClient\EgoiModel\CreateContactResponse**](../Model/CreateContactResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllContactActivities

> \EgoiClient\EgoiModel\ActivityCollection getAllContactActivities($contact_id, $list_id, $offset, $limit, $date_min, $date_max)

Get all contact activities

Returns all contact activities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of the Contact
$list_id = 56; // int | ID of the List
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$date_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$date_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date

try {
    $result = $apiInstance->getAllContactActivities($contact_id, $list_id, $offset, $limit, $date_min, $date_max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAllContactActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| ID of the Contact |
 **list_id** | **int**| ID of the List |
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **date_min** | **\DateTime**| Start date | [optional]
 **date_max** | **\DateTime**| End date | [optional]

### Return type

[**\EgoiClient\EgoiModel\ActivityCollection**](../Model/ActivityCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllContacts

> \EgoiClient\EgoiModel\ContactCollection getAllContacts($list_id, $offset, $limit)

Get all contacts

Returns all contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return

try {
    $result = $apiInstance->getAllContacts($list_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAllContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the List |
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]

### Return type

[**\EgoiClient\EgoiModel\ContactCollection**](../Model/ContactCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContact

> \EgoiClient\EgoiModel\ComplexContact getContact($contact_id, $list_id)

Get contact

Returns contact information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of the Contact
$list_id = 56; // int | ID of the List

try {
    $result = $apiInstance->getContact($contact_id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| ID of the Contact |
 **list_id** | **int**| ID of the List |

### Return type

[**\EgoiClient\EgoiModel\ComplexContact**](../Model/ComplexContact.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchContact

> \EgoiClient\EgoiModel\CreateContactResponse patchContact($contact_id, $list_id, $contact_base_status_extra)

Update a specific contact

Update contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of the Contact
$list_id = 56; // int | ID of the List
$contact_base_status_extra = new \EgoiClient\EgoiModel\ContactBaseStatusExtra(); // \EgoiClient\EgoiModel\ContactBaseStatusExtra | Parameters for the contact

try {
    $result = $apiInstance->patchContact($contact_id, $list_id, $contact_base_status_extra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->patchContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| ID of the Contact |
 **list_id** | **int**| ID of the List |
 **contact_base_status_extra** | [**\EgoiClient\EgoiModel\ContactBaseStatusExtra**](../Model/ContactBaseStatusExtra.md)| Parameters for the contact |

### Return type

[**\EgoiClient\EgoiModel\CreateContactResponse**](../Model/CreateContactResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

