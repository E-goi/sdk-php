<?php
/**
 * ComplexContactAllOfWebpushStats
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
 * ComplexContactAllOfWebpushStats Class Doc Comment
 *
 * @category Class
 * @description Webpush stats of the contact
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComplexContactAllOfWebpushStats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ComplexContact_allOf_webpush_stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sent' => 'int',
        'delivered' => 'int',
        'clicks' => 'int',
        'bounces' => 'int',
        'last_send_date' => '\DateTime',
        'last_delivery_date' => '\DateTime',
        'last_click_date' => '\DateTime',
        'last_bounce_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sent' => null,
        'delivered' => null,
        'clicks' => null,
        'bounces' => null,
        'last_send_date' => 'date-time',
        'last_delivery_date' => 'date-time',
        'last_click_date' => 'date-time',
        'last_bounce_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sent' => false,
		'delivered' => false,
		'clicks' => false,
		'bounces' => false,
		'last_send_date' => false,
		'last_delivery_date' => false,
		'last_click_date' => false,
		'last_bounce_date' => false
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
        'sent' => 'sent',
        'delivered' => 'delivered',
        'clicks' => 'clicks',
        'bounces' => 'bounces',
        'last_send_date' => 'last_send_date',
        'last_delivery_date' => 'last_delivery_date',
        'last_click_date' => 'last_click_date',
        'last_bounce_date' => 'last_bounce_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sent' => 'setSent',
        'delivered' => 'setDelivered',
        'clicks' => 'setClicks',
        'bounces' => 'setBounces',
        'last_send_date' => 'setLastSendDate',
        'last_delivery_date' => 'setLastDeliveryDate',
        'last_click_date' => 'setLastClickDate',
        'last_bounce_date' => 'setLastBounceDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sent' => 'getSent',
        'delivered' => 'getDelivered',
        'clicks' => 'getClicks',
        'bounces' => 'getBounces',
        'last_send_date' => 'getLastSendDate',
        'last_delivery_date' => 'getLastDeliveryDate',
        'last_click_date' => 'getLastClickDate',
        'last_bounce_date' => 'getLastBounceDate'
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
        $this->setIfExists('sent', $data ?? [], null);
        $this->setIfExists('delivered', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
        $this->setIfExists('bounces', $data ?? [], null);
        $this->setIfExists('last_send_date', $data ?? [], null);
        $this->setIfExists('last_delivery_date', $data ?? [], null);
        $this->setIfExists('last_click_date', $data ?? [], null);
        $this->setIfExists('last_bounce_date', $data ?? [], null);
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
     * Gets sent
     *
     * @return int|null
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     *
     * @param int|null $sent Webpush messages sent to the contact
     *
     * @return self
     */
    public function setSent($sent)
    {

        if (is_null($sent)) {
            throw new \InvalidArgumentException('non-nullable sent cannot be null');
        }

        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return int|null
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param int|null $delivered Webpush messages delivered to the contact
     *
     * @return self
     */
    public function setDelivered($delivered)
    {

        if (is_null($delivered)) {
            throw new \InvalidArgumentException('non-nullable delivered cannot be null');
        }

        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int|null $clicks Total number of clicks made by the contact
     *
     * @return self
     */
    public function setClicks($clicks)
    {

        if (is_null($clicks)) {
            throw new \InvalidArgumentException('non-nullable clicks cannot be null');
        }

        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets bounces
     *
     * @return int|null
     */
    public function getBounces()
    {
        return $this->container['bounces'];
    }

    /**
     * Sets bounces
     *
     * @param int|null $bounces Bounces for the contact
     *
     * @return self
     */
    public function setBounces($bounces)
    {

        if (is_null($bounces)) {
            throw new \InvalidArgumentException('non-nullable bounces cannot be null');
        }

        $this->container['bounces'] = $bounces;

        return $this;
    }

    /**
     * Gets last_send_date
     *
     * @return \DateTime|null
     */
    public function getLastSendDate()
    {
        return $this->container['last_send_date'];
    }

    /**
     * Sets last_send_date
     *
     * @param \DateTime|null $last_send_date Date of the last webpush message sent to the contact
     *
     * @return self
     */
    public function setLastSendDate($last_send_date)
    {

        if (is_null($last_send_date)) {
            throw new \InvalidArgumentException('non-nullable last_send_date cannot be null');
        }

        $this->container['last_send_date'] = $last_send_date;

        return $this;
    }

    /**
     * Gets last_delivery_date
     *
     * @return \DateTime|null
     */
    public function getLastDeliveryDate()
    {
        return $this->container['last_delivery_date'];
    }

    /**
     * Sets last_delivery_date
     *
     * @param \DateTime|null $last_delivery_date Date of the last webpush message delivered to the contact
     *
     * @return self
     */
    public function setLastDeliveryDate($last_delivery_date)
    {

        if (is_null($last_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable last_delivery_date cannot be null');
        }

        $this->container['last_delivery_date'] = $last_delivery_date;

        return $this;
    }

    /**
     * Gets last_click_date
     *
     * @return \DateTime|null
     */
    public function getLastClickDate()
    {
        return $this->container['last_click_date'];
    }

    /**
     * Sets last_click_date
     *
     * @param \DateTime|null $last_click_date Date of the last webpush message clicked by the contact
     *
     * @return self
     */
    public function setLastClickDate($last_click_date)
    {

        if (is_null($last_click_date)) {
            throw new \InvalidArgumentException('non-nullable last_click_date cannot be null');
        }

        $this->container['last_click_date'] = $last_click_date;

        return $this;
    }

    /**
     * Gets last_bounce_date
     *
     * @return \DateTime|null
     */
    public function getLastBounceDate()
    {
        return $this->container['last_bounce_date'];
    }

    /**
     * Sets last_bounce_date
     *
     * @param \DateTime|null $last_bounce_date Date of the last webpush bounce for the contact
     *
     * @return self
     */
    public function setLastBounceDate($last_bounce_date)
    {

        if (is_null($last_bounce_date)) {
            throw new \InvalidArgumentException('non-nullable last_bounce_date cannot be null');
        }

        $this->container['last_bounce_date'] = $last_bounce_date;

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


