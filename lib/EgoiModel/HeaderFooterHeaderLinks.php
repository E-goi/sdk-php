<?php
/**
 * HeaderFooterHeaderLinks
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
 * # Introduction This is our new version of API. We invite you to start using it and give us your feedback # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.  The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.      BaseURL = api.egoiapp.com  # RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication  We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:     #!/bin/bash     curl -X GET 'https://api.egoiapp.com/my-account' \\     -H 'accept: application/json' \\     -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:     #!/bin/bash     curl -X POST 'http://api.egoiapp.com/tags' \\     -H 'accept: application/json' \\     -H 'Apikey: <YOUR_APY_KEY>' \\     -H 'Content-Type: application/json' \\     -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  # SDK Get started quickly with E-goi with our integration tools. Our SDK is a modern open source library that makes it easy to integrate your application with E-goi services.  * <a href='https://github.com/E-goi/sdk-java'>Java</a>  * <a href='https://github.com/E-goi/sdk-php'>PHP</a>  * <a href='https://github.com/E-goi/sdk-python'>Python</a>  * <a href='https://github.com/E-goi/sdk-ruby'>Ruby</a>  * <a href='https://github.com/E-goi/sdk-javascript'>Javascript</a>  * <a href='https://github.com/E-goi/sdk-csharp'>C#</a>  # Stream Limits Stream limits are security mesures we have to make sure our API have a fair use policy, for this reason, any request that creates or modifies data (**POST**, **PATCH** and **PUT**) is limited to a maximum of **20MB** of content length. If you arrive to this limit in one of your request, you'll receive a HTTP code **413 (Request Entity Too Large)** and the request will be ignored. To avoid this error in importation's requests, it's advised the request's division in batches that have each one less than 20MB.  # Timeouts Timeouts set a maximum waiting time on a request's response. Our API, sets a default timeout for each request and when breached, you'll receive an HTTP **408 (Request Timeout)** error code. You should take into consideration that response times can vary widely based on the complexity of the request, amount of data being analyzed, and the load on the system and workspace at the time of the query. When dealing with such errors, you should first attempt to reduce the complexity and amount of data under analysis, and only then, if problems are still occurring ask for support.  For all these reasons, the default timeout for each request is **10 Seconds** and any request that creates or modifies data (**POST**, **PATCH** and **PUT**) will have a timeout of **60 Seconds**. Specific timeouts may exist for specific requests, these can be found in the request's documentation.  # Callbacks A callback is an asynchronous API request that originates from the API server and is sent to the client in response to a previous request sent by that client.  The API will make a **POST** request to the address defined in the URL with the information regarding the event of interest and share data related to that event.  <a href='/usecases/callbacks/' target='_blank'>[Go to callbacks documentation]</a>  ***Note:*** Only http or https protocols are supported in the Url parameter.  <security-definitions/>
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
 * HeaderFooterHeaderLinks Class Doc Comment
 *
 * @category Class
 * @description Ignored if provided ID is from a custom template
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HeaderFooterHeaderLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HeaderFooter_header_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'forward' => 'bool',
        'view_web' => 'bool',
        'unsubscribe' => 'bool',
        'edit' => 'bool',
        'social_share' => 'bool',
        'facebook_share' => 'bool',
        'twitter_share' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'forward' => null,
        'view_web' => null,
        'unsubscribe' => null,
        'edit' => null,
        'social_share' => null,
        'facebook_share' => null,
        'twitter_share' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'forward' => false,
		'view_web' => false,
		'unsubscribe' => false,
		'edit' => false,
		'social_share' => false,
		'facebook_share' => false,
		'twitter_share' => false
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
        'forward' => 'forward',
        'view_web' => 'view_web',
        'unsubscribe' => 'unsubscribe',
        'edit' => 'edit',
        'social_share' => 'social_share',
        'facebook_share' => 'facebook_share',
        'twitter_share' => 'twitter_share'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forward' => 'setForward',
        'view_web' => 'setViewWeb',
        'unsubscribe' => 'setUnsubscribe',
        'edit' => 'setEdit',
        'social_share' => 'setSocialShare',
        'facebook_share' => 'setFacebookShare',
        'twitter_share' => 'setTwitterShare'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forward' => 'getForward',
        'view_web' => 'getViewWeb',
        'unsubscribe' => 'getUnsubscribe',
        'edit' => 'getEdit',
        'social_share' => 'getSocialShare',
        'facebook_share' => 'getFacebookShare',
        'twitter_share' => 'getTwitterShare'
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
        $this->setIfExists('forward', $data ?? [], false);
        $this->setIfExists('view_web', $data ?? [], false);
        $this->setIfExists('unsubscribe', $data ?? [], false);
        $this->setIfExists('edit', $data ?? [], false);
        $this->setIfExists('social_share', $data ?? [], false);
        $this->setIfExists('facebook_share', $data ?? [], false);
        $this->setIfExists('twitter_share', $data ?? [], false);
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
     * Gets forward
     *
     * @return bool|null
     */
    public function getForward()
    {
        return $this->container['forward'];
    }

    /**
     * Sets forward
     *
     * @param bool|null $forward Use view forward header link
     *
     * @return self
     */
    public function setForward($forward)
    {

        if (is_null($forward)) {
            throw new \InvalidArgumentException('non-nullable forward cannot be null');
        }

        $this->container['forward'] = $forward;

        return $this;
    }

    /**
     * Gets view_web
     *
     * @return bool|null
     */
    public function getViewWeb()
    {
        return $this->container['view_web'];
    }

    /**
     * Sets view_web
     *
     * @param bool|null $view_web Use view view in web header link
     *
     * @return self
     */
    public function setViewWeb($view_web)
    {

        if (is_null($view_web)) {
            throw new \InvalidArgumentException('non-nullable view_web cannot be null');
        }

        $this->container['view_web'] = $view_web;

        return $this;
    }

    /**
     * Gets unsubscribe
     *
     * @return bool|null
     */
    public function getUnsubscribe()
    {
        return $this->container['unsubscribe'];
    }

    /**
     * Sets unsubscribe
     *
     * @param bool|null $unsubscribe Use view unsubscribe header link
     *
     * @return self
     */
    public function setUnsubscribe($unsubscribe)
    {

        if (is_null($unsubscribe)) {
            throw new \InvalidArgumentException('non-nullable unsubscribe cannot be null');
        }

        $this->container['unsubscribe'] = $unsubscribe;

        return $this;
    }

    /**
     * Gets edit
     *
     * @return bool|null
     */
    public function getEdit()
    {
        return $this->container['edit'];
    }

    /**
     * Sets edit
     *
     * @param bool|null $edit Use view edit header link
     *
     * @return self
     */
    public function setEdit($edit)
    {

        if (is_null($edit)) {
            throw new \InvalidArgumentException('non-nullable edit cannot be null');
        }

        $this->container['edit'] = $edit;

        return $this;
    }

    /**
     * Gets social_share
     *
     * @return bool|null
     */
    public function getSocialShare()
    {
        return $this->container['social_share'];
    }

    /**
     * Sets social_share
     *
     * @param bool|null $social_share Use view social share header link
     *
     * @return self
     */
    public function setSocialShare($social_share)
    {

        if (is_null($social_share)) {
            throw new \InvalidArgumentException('non-nullable social_share cannot be null');
        }

        $this->container['social_share'] = $social_share;

        return $this;
    }

    /**
     * Gets facebook_share
     *
     * @return bool|null
     */
    public function getFacebookShare()
    {
        return $this->container['facebook_share'];
    }

    /**
     * Sets facebook_share
     *
     * @param bool|null $facebook_share Use view facebook share header link
     *
     * @return self
     */
    public function setFacebookShare($facebook_share)
    {

        if (is_null($facebook_share)) {
            throw new \InvalidArgumentException('non-nullable facebook_share cannot be null');
        }

        $this->container['facebook_share'] = $facebook_share;

        return $this;
    }

    /**
     * Gets twitter_share
     *
     * @return bool|null
     */
    public function getTwitterShare()
    {
        return $this->container['twitter_share'];
    }

    /**
     * Sets twitter_share
     *
     * @param bool|null $twitter_share Use view twitter share header link
     *
     * @return self
     */
    public function setTwitterShare($twitter_share)
    {

        if (is_null($twitter_share)) {
            throw new \InvalidArgumentException('non-nullable twitter_share cannot be null');
        }

        $this->container['twitter_share'] = $twitter_share;

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


