# EgoiClient\EcommerceApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCart()**](EcommerceApi.md#createCart) | **POST** /{domain}/carts | Create cart |
| [**createCatalog()**](EcommerceApi.md#createCatalog) | **POST** /catalogs | Create new catalog |
| [**createOrder()**](EcommerceApi.md#createOrder) | **POST** /{domain}/orders | Create order |
| [**createProduct()**](EcommerceApi.md#createProduct) | **POST** /catalogs/{catalog_id}/products | Create new product |
| [**deleteCatalog()**](EcommerceApi.md#deleteCatalog) | **DELETE** /catalogs/{catalog_id} | Remove catalog |
| [**deleteProduct()**](EcommerceApi.md#deleteProduct) | **DELETE** /catalogs/{catalog_id}/products/{product_identifier} | Remove product |
| [**getAllCatalogs()**](EcommerceApi.md#getAllCatalogs) | **GET** /catalogs | Get all catalogs |
| [**getAllProducts()**](EcommerceApi.md#getAllProducts) | **GET** /catalogs/{catalog_id}/products | Get all products |
| [**getProduct()**](EcommerceApi.md#getProduct) | **GET** /catalogs/{catalog_id}/products/{product_identifier} | Get product |
| [**importProducts()**](EcommerceApi.md#importProducts) | **POST** /catalogs/{catalog_id}/products/actions/import | Import products |
| [**updateProduct()**](EcommerceApi.md#updateProduct) | **PATCH** /catalogs/{catalog_id}/products/{product_identifier} | Update product |


## `createCart()`

```php
createCart($domain, $cart): \EgoiClient\EgoiModel\AcceptedResponse
```

Create cart

Creates a new cart. If ***contact_id*** is specified, order will be atached to the contact, if the contact propreties are specified, we'll create the user, if its already in your list it will get the correct contact (**make sure you are sending atleast all configured list's unique fields**). This same logic is also applied to the **product_identifier**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain
$cart = new \EgoiClient\EgoiModel\Cart(); // \EgoiClient\EgoiModel\Cart | Parameters for the Carts

try {
    $result = $apiInstance->createCart($domain, $cart);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |
| **cart** | [**\EgoiClient\EgoiModel\Cart**](../Model/Cart.md)| Parameters for the Carts | |

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

## `createCatalog()`

```php
createCatalog($catalog_post_request): \EgoiClient\EgoiModel\Catalog
```

Create new catalog

Creates a new catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_post_request = new \EgoiClient\EgoiModel\CatalogPostRequest(); // \EgoiClient\EgoiModel\CatalogPostRequest | Parameters for the Catalog

try {
    $result = $apiInstance->createCatalog($catalog_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_post_request** | [**\EgoiClient\EgoiModel\CatalogPostRequest**](../Model/CatalogPostRequest.md)| Parameters for the Catalog | |

### Return type

[**\EgoiClient\EgoiModel\Catalog**](../Model/Catalog.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($domain, $create_order): \EgoiClient\EgoiModel\AcceptedResponse
```

Create order

Creates a new order. If **contact_id** is specified, order will be atached to the contact, if the contact propreties are specified, we'll create the user, if its already in your list it will get the correct contact (***make sure you are sending atleast all configured list's unique fields***). This same logic is also applied to the **product_identifier**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain
$create_order = new \EgoiClient\EgoiModel\CreateOrder(); // \EgoiClient\EgoiModel\CreateOrder | Parameters for the Orders

try {
    $result = $apiInstance->createOrder($domain, $create_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |
| **create_order** | [**\EgoiClient\EgoiModel\CreateOrder**](../Model/CreateOrder.md)| Parameters for the Orders | |

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

## `createProduct()`

```php
createProduct($catalog_id, $product_post_request): \EgoiClient\EgoiModel\Product
```

Create new product

Creates a new product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 56; // int | ID of the Catalog
$product_post_request = new \EgoiClient\EgoiModel\ProductPostRequest(); // \EgoiClient\EgoiModel\ProductPostRequest | Parameters for the Product

try {
    $result = $apiInstance->createProduct($catalog_id, $product_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **int**| ID of the Catalog | |
| **product_post_request** | [**\EgoiClient\EgoiModel\ProductPostRequest**](../Model/ProductPostRequest.md)| Parameters for the Product | |

### Return type

[**\EgoiClient\EgoiModel\Product**](../Model/Product.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCatalog()`

```php
deleteCatalog($catalog_id)
```

Remove catalog

Remove catalog information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 56; // int | ID of the Catalog

try {
    $apiInstance->deleteCatalog($catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->deleteCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **int**| ID of the Catalog | |

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

## `deleteProduct()`

```php
deleteProduct($catalog_id, $product_identifier)
```

Remove product

Remove product information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 56; // int | ID of the Catalog
$product_identifier = 'product_identifier_example'; // string | ID of the Product

try {
    $apiInstance->deleteProduct($catalog_id, $product_identifier);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **int**| ID of the Catalog | |
| **product_identifier** | **string**| ID of the Product | |

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

## `getAllCatalogs()`

```php
getAllCatalogs(): \EgoiClient\EgoiModel\CatalogCollection
```

Get all catalogs

Returns all catalogs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCatalogs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getAllCatalogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EgoiClient\EgoiModel\CatalogCollection**](../Model/CatalogCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProducts()`

```php
getAllProducts($catalog_id, $product_identifier, $name, $description, $sku, $upc, $ean, $gtin, $mpn, $price, $sale_price, $brand, $custom_attributes, $offset, $limit): \EgoiClient\EgoiModel\ProductCollection
```

Get all products

Returns all products for the given catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 56; // int | ID of the Catalog
$product_identifier = 'product_identifier_example'; // string | Filter by product ID in your store
$name = 'name_example'; // string | Filter by name of the product
$description = 'description_example'; // string | Filter by description of the product
$sku = 'sku_example'; // string | Filter by Stock Keeping Unit
$upc = 'upc_example'; // string | Filter by Universal Product Code
$ean = 'ean_example'; // string | Filter by European Article Numbering
$gtin = 'gtin_example'; // string | Filter by Global Trade Item Number
$mpn = 'mpn_example'; // string | Filter by Manufacturer Part Number
$price = 3.4; // float | Filter by price of the product
$sale_price = 3.4; // float | Filter by sale price of the product
$brand = 'brand_example'; // string | Filter by brand of the product
$custom_attributes = array('key' => new \EgoiClient\EgoiModel\GetAllProductsCustomAttributesParameter()); // GetAllProductsCustomAttributesParameter | Filter by custom attributes of products<div><span class='sc-cJSrbW cWGDGi'> Example: </span> <span class='sc-uJMKN cTkJKI'> 'custom_attributes[alias]=value' </span></div>
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return

try {
    $result = $apiInstance->getAllProducts($catalog_id, $product_identifier, $name, $description, $sku, $upc, $ean, $gtin, $mpn, $price, $sale_price, $brand, $custom_attributes, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getAllProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **int**| ID of the Catalog | |
| **product_identifier** | **string**| Filter by product ID in your store | [optional] |
| **name** | **string**| Filter by name of the product | [optional] |
| **description** | **string**| Filter by description of the product | [optional] |
| **sku** | **string**| Filter by Stock Keeping Unit | [optional] |
| **upc** | **string**| Filter by Universal Product Code | [optional] |
| **ean** | **string**| Filter by European Article Numbering | [optional] |
| **gtin** | **string**| Filter by Global Trade Item Number | [optional] |
| **mpn** | **string**| Filter by Manufacturer Part Number | [optional] |
| **price** | **float**| Filter by price of the product | [optional] |
| **sale_price** | **float**| Filter by sale price of the product | [optional] |
| **brand** | **string**| Filter by brand of the product | [optional] |
| **custom_attributes** | [**GetAllProductsCustomAttributesParameter**](../Model/.md)| Filter by custom attributes of products&lt;div&gt;&lt;span class&#x3D;&#39;sc-cJSrbW cWGDGi&#39;&gt; Example: &lt;/span&gt; &lt;span class&#x3D;&#39;sc-uJMKN cTkJKI&#39;&gt; &#39;custom_attributes[alias]&#x3D;value&#39; &lt;/span&gt;&lt;/div&gt; | [optional] |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |

### Return type

[**\EgoiClient\EgoiModel\ProductCollection**](../Model/ProductCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($catalog_id, $product_identifier): \EgoiClient\EgoiModel\Product
```

Get product

Returns product information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 56; // int | ID of the Catalog
$product_identifier = 'product_identifier_example'; // string | ID of the Product

try {
    $result = $apiInstance->getProduct($catalog_id, $product_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **int**| ID of the Catalog | |
| **product_identifier** | **string**| ID of the Product | |

### Return type

[**\EgoiClient\EgoiModel\Product**](../Model/Product.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importProducts()`

```php
importProducts($catalog_id, $product_bulk_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Import products

Imports a collection of products</br>      **DISCLAIMER:** stream limits applied. [view here](#section/Stream-Limits 'Stream Limits')

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 56; // int | ID of the Catalog
$product_bulk_request = new \EgoiClient\EgoiModel\ProductBulkRequest(); // \EgoiClient\EgoiModel\ProductBulkRequest | Parameters for the Product

try {
    $result = $apiInstance->importProducts($catalog_id, $product_bulk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->importProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **int**| ID of the Catalog | |
| **product_bulk_request** | [**\EgoiClient\EgoiModel\ProductBulkRequest**](../Model/ProductBulkRequest.md)| Parameters for the Product | |

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

## `updateProduct()`

```php
updateProduct($catalog_id, $product_identifier, $product_patch_request): \EgoiClient\EgoiModel\Product
```

Update product

Updates a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 56; // int | ID of the Catalog
$product_identifier = 'product_identifier_example'; // string | ID of the Product
$product_patch_request = new \EgoiClient\EgoiModel\ProductPatchRequest(); // \EgoiClient\EgoiModel\ProductPatchRequest | Parameters for the product

try {
    $result = $apiInstance->updateProduct($catalog_id, $product_identifier, $product_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **int**| ID of the Catalog | |
| **product_identifier** | **string**| ID of the Product | |
| **product_patch_request** | [**\EgoiClient\EgoiModel\ProductPatchRequest**](../Model/ProductPatchRequest.md)| Parameters for the product | |

### Return type

[**\EgoiClient\EgoiModel\Product**](../Model/Product.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
