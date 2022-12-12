<?php
/**
 * ProductPostRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * APIv3 (New)
 *
 * # Introduction This is our new version of API. We invite you to start using it and give us your feedback # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.  The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.      BaseURL = api.egoiapp.com  # RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication  We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:     #!/bin/bash     curl -X GET 'https://api.egoiapp.com/my-account' \\     -H 'accept: application/json' \\     -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:     #!/bin/bash     curl -X POST 'http://api.egoiapp.com/tags' \\     -H 'accept: application/json' \\     -H 'Apikey: <YOUR_APY_KEY>' \\     -H 'Content-Type: application/json' \\     -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  # SDK Get started quickly with E-goi with our integration tools. Our SDK is a modern open source library that makes it easy to integrate your application with E-goi services.  * <a href='https://github.com/E-goi/sdk-java'>Java</a>  * <a href='https://github.com/E-goi/sdk-php'>PHP</a>  * <a href='https://github.com/E-goi/sdk-python'>Python</a>  * <a href='https://github.com/E-goi/sdk-ruby'>Ruby</a>  * <a href='https://github.com/E-goi/sdk-javascript'>Javascript</a>  * <a href='https://github.com/E-goi/sdk-csharp'>C#</a>  # Stream Limits Stream limits are security mesures we have to make sure our API have a fair use policy, for this reason, any request that creates or modifies data (**POST**, **PATCH** and **PUT**) is limited to a maximum of **20MB** of content length. If you arrive to this limit in one of your request, you'll receive a HTTP code **413 (Request Entity Too Large)** and the request will be ignored. To avoid this error in importation's requests, it's advised the request's division in batches that have each one less than 20MB.  # Timeouts Timeouts set a maximum waiting time on a request's response. Our API, sets a default timeout for each request and when breached, you'll receive an HTTP **408 (Request Timeout)** error code. You should take into consideration that response times can vary widely based on the complexity of the request, amount of data being analyzed, and the load on the system and workspace at the time of the query. When dealing with such errors, you should first attempt to reduce the complexity and amount of data under analysis, and only then, if problems are still occurring ask for support.  For all these reasons, the default timeout for each request is **10 Seconds** and any request that creates or modifies data (**POST**, **PATCH** and **PUT**) will have a timeout of **60 Seconds**. Specific timeouts may exist for specific requests, these can be found in the request's documentation.  # Callbacks A callback is an asynchronous API request that originates from the API server and is sent to the client in response to a previous request sent by that client.  The API will make a **POST** request to the address defined in the URL with the information regarding the event of interest and share data related to that event.  ***Note:*** Only http or https protocols are supported in the Url parameter.  <security-definitions/>
 *
 * The version of the OpenAPI document: 3.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EgoiClient\EgoiModel;

use \ArrayAccess;
use \EgoiClient\ObjectSerializer;

/**
 * ProductPostRequest Class Doc Comment
 *
 * @category Class
 * @description Product post request schema
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductPostRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categories' => 'string[]',
        'related_products' => 'string[]',
        'custom_attributes' => '\EgoiClient\EgoiModel\ProductCustomAttributes[]',
        'product_identifier' => 'string',
        'catalog_id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'sku' => 'string',
        'upc' => 'string',
        'ean' => 'string',
        'gtin' => 'string',
        'mpn' => 'string',
        'link' => 'string',
        'image_link' => 'string',
        'price' => 'float',
        'sale_price' => 'float',
        'brand' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categories' => null,
        'related_products' => null,
        'custom_attributes' => null,
        'product_identifier' => null,
        'catalog_id' => null,
        'name' => null,
        'description' => null,
        'sku' => null,
        'upc' => null,
        'ean' => null,
        'gtin' => null,
        'mpn' => null,
        'link' => null,
        'image_link' => null,
        'price' => 'double',
        'sale_price' => 'double',
        'brand' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'categories' => false,
		'related_products' => false,
		'custom_attributes' => false,
		'product_identifier' => false,
		'catalog_id' => false,
		'name' => false,
		'description' => false,
		'sku' => false,
		'upc' => false,
		'ean' => false,
		'gtin' => false,
		'mpn' => false,
		'link' => false,
		'image_link' => false,
		'price' => false,
		'sale_price' => false,
		'brand' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'categories' => 'categories',
        'related_products' => 'related_products',
        'custom_attributes' => 'custom_attributes',
        'product_identifier' => 'product_identifier',
        'catalog_id' => 'catalog_id',
        'name' => 'name',
        'description' => 'description',
        'sku' => 'sku',
        'upc' => 'upc',
        'ean' => 'ean',
        'gtin' => 'gtin',
        'mpn' => 'mpn',
        'link' => 'link',
        'image_link' => 'image_link',
        'price' => 'price',
        'sale_price' => 'sale_price',
        'brand' => 'brand'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categories' => 'setCategories',
        'related_products' => 'setRelatedProducts',
        'custom_attributes' => 'setCustomAttributes',
        'product_identifier' => 'setProductIdentifier',
        'catalog_id' => 'setCatalogId',
        'name' => 'setName',
        'description' => 'setDescription',
        'sku' => 'setSku',
        'upc' => 'setUpc',
        'ean' => 'setEan',
        'gtin' => 'setGtin',
        'mpn' => 'setMpn',
        'link' => 'setLink',
        'image_link' => 'setImageLink',
        'price' => 'setPrice',
        'sale_price' => 'setSalePrice',
        'brand' => 'setBrand'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categories' => 'getCategories',
        'related_products' => 'getRelatedProducts',
        'custom_attributes' => 'getCustomAttributes',
        'product_identifier' => 'getProductIdentifier',
        'catalog_id' => 'getCatalogId',
        'name' => 'getName',
        'description' => 'getDescription',
        'sku' => 'getSku',
        'upc' => 'getUpc',
        'ean' => 'getEan',
        'gtin' => 'getGtin',
        'mpn' => 'getMpn',
        'link' => 'getLink',
        'image_link' => 'getImageLink',
        'price' => 'getPrice',
        'sale_price' => 'getSalePrice',
        'brand' => 'getBrand'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('related_products', $data ?? [], null);
        $this->setIfExists('custom_attributes', $data ?? [], null);
        $this->setIfExists('product_identifier', $data ?? [], null);
        $this->setIfExists('catalog_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('upc', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('mpn', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('image_link', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], 0);
        $this->setIfExists('sale_price', $data ?? [], 0);
        $this->setIfExists('brand', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_identifier'] === null) {
            $invalidProperties[] = "'product_identifier' can't be null";
        }
        if (!preg_match("/[a-zA-Z0-9\\_\\-.]/", $this->container['product_identifier'])) {
            $invalidProperties[] = "invalid value for 'product_identifier', must be conform to the pattern /[a-zA-Z0-9\\_\\-.]/.";
        }

        if (!is_null($this->container['catalog_id']) && ($this->container['catalog_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'catalog_id', must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories Array of product categories, using the character '>' as delimiter for the breadcrumb                                 syntax
     *
     * @return self
     */
    public function setCategories($categories)
    {

        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }

        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets related_products
     *
     * @return string[]|null
     */
    public function getRelatedProducts()
    {
        return $this->container['related_products'];
    }

    /**
     * Sets related_products
     *
     * @param string[]|null $related_products Related products
     *
     * @return self
     */
    public function setRelatedProducts($related_products)
    {

        if (is_null($related_products)) {
            throw new \InvalidArgumentException('non-nullable related_products cannot be null');
        }

        $this->container['related_products'] = $related_products;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \EgoiClient\EgoiModel\ProductCustomAttributes[]|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \EgoiClient\EgoiModel\ProductCustomAttributes[]|null $custom_attributes Custom attributes
     *
     * @return self
     */
    public function setCustomAttributes($custom_attributes)
    {

        if (is_null($custom_attributes)) {
            throw new \InvalidArgumentException('non-nullable custom_attributes cannot be null');
        }

        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets product_identifier
     *
     * @return string
     */
    public function getProductIdentifier()
    {
        return $this->container['product_identifier'];
    }

    /**
     * Sets product_identifier
     *
     * @param string $product_identifier The ID of the product in your store
     *
     * @return self
     */
    public function setProductIdentifier($product_identifier)
    {

        if ((!preg_match("/[a-zA-Z0-9\\_\\-.]/", $product_identifier))) {
            throw new \InvalidArgumentException("invalid value for \$product_identifier when calling ProductPostRequest., must conform to the pattern /[a-zA-Z0-9\\_\\-.]/.");
        }


        if (is_null($product_identifier)) {
            throw new \InvalidArgumentException('non-nullable product_identifier cannot be null');
        }

        $this->container['product_identifier'] = $product_identifier;

        return $this;
    }

    /**
     * Gets catalog_id
     *
     * @return int|null
     */
    public function getCatalogId()
    {
        return $this->container['catalog_id'];
    }

    /**
     * Sets catalog_id
     *
     * @param int|null $catalog_id catalog_id
     *
     * @return self
     */
    public function setCatalogId($catalog_id)
    {

        if (!is_null($catalog_id) && ($catalog_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $catalog_id when calling ProductPostRequest., must be bigger than or equal to 1.');
        }


        if (is_null($catalog_id)) {
            throw new \InvalidArgumentException('non-nullable catalog_id cannot be null');
        }

        $this->container['catalog_id'] = $catalog_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the product
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the product
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Stock Keeping Unit
     *
     * @return self
     */
    public function setSku($sku)
    {

        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string|null
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string|null $upc Universal Product Code
     *
     * @return self
     */
    public function setUpc($upc)
    {

        if (is_null($upc)) {
            throw new \InvalidArgumentException('non-nullable upc cannot be null');
        }

        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean European Article Numbering
     *
     * @return self
     */
    public function setEan($ean)
    {

        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }

        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin Global Trade Item Number
     *
     * @return self
     */
    public function setGtin($gtin)
    {

        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string|null $mpn Manufacturer Part Number
     *
     * @return self
     */
    public function setMpn($mpn)
    {

        if (is_null($mpn)) {
            throw new \InvalidArgumentException('non-nullable mpn cannot be null');
        }

        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link Link for the product
     *
     * @return self
     */
    public function setLink($link)
    {

        if (is_null($link)) {
            throw new \InvalidArgumentException('non-nullable link cannot be null');
        }

        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets image_link
     *
     * @return string|null
     */
    public function getImageLink()
    {
        return $this->container['image_link'];
    }

    /**
     * Sets image_link
     *
     * @param string|null $image_link Link for the product image
     *
     * @return self
     */
    public function setImageLink($image_link)
    {

        if (is_null($image_link)) {
            throw new \InvalidArgumentException('non-nullable image_link cannot be null');
        }

        $this->container['image_link'] = $image_link;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Price of the product
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return float|null
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param float|null $sale_price Sale price of the product
     *
     * @return self
     */
    public function setSalePrice($sale_price)
    {

        if (is_null($sale_price)) {
            throw new \InvalidArgumentException('non-nullable sale_price cannot be null');
        }

        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Brand of the product
     *
     * @return self
     */
    public function setBrand($brand)
    {

        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }

        $this->container['brand'] = $brand;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


