<?php
/**
 * EmailEventsListStatsFields
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
 * EmailEventsListStatsFields Class Doc Comment
 *
 * @category Class
 * @description List stats fields to include in the report
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailEventsListStatsFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailEventsListStatsFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opens' => 'bool',
        'clicks' => 'bool',
        'complaints' => 'bool',
        'unsubscribes' => 'bool',
        'bounces' => 'bool',
        'forwards' => 'bool',
        'forwards_conversion' => 'bool',
        'fb_likes' => 'bool',
        'fb_shares' => 'bool',
        'tw_shares' => 'bool',
        'social_shares' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'opens' => null,
        'clicks' => null,
        'complaints' => null,
        'unsubscribes' => null,
        'bounces' => null,
        'forwards' => null,
        'forwards_conversion' => null,
        'fb_likes' => null,
        'fb_shares' => null,
        'tw_shares' => null,
        'social_shares' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'opens' => false,
		'clicks' => false,
		'complaints' => false,
		'unsubscribes' => false,
		'bounces' => false,
		'forwards' => false,
		'forwards_conversion' => false,
		'fb_likes' => false,
		'fb_shares' => false,
		'tw_shares' => false,
		'social_shares' => false
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
        'opens' => 'opens',
        'clicks' => 'clicks',
        'complaints' => 'complaints',
        'unsubscribes' => 'unsubscribes',
        'bounces' => 'bounces',
        'forwards' => 'forwards',
        'forwards_conversion' => 'forwards_conversion',
        'fb_likes' => 'fb_likes',
        'fb_shares' => 'fb_shares',
        'tw_shares' => 'tw_shares',
        'social_shares' => 'social_shares'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opens' => 'setOpens',
        'clicks' => 'setClicks',
        'complaints' => 'setComplaints',
        'unsubscribes' => 'setUnsubscribes',
        'bounces' => 'setBounces',
        'forwards' => 'setForwards',
        'forwards_conversion' => 'setForwardsConversion',
        'fb_likes' => 'setFbLikes',
        'fb_shares' => 'setFbShares',
        'tw_shares' => 'setTwShares',
        'social_shares' => 'setSocialShares'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opens' => 'getOpens',
        'clicks' => 'getClicks',
        'complaints' => 'getComplaints',
        'unsubscribes' => 'getUnsubscribes',
        'bounces' => 'getBounces',
        'forwards' => 'getForwards',
        'forwards_conversion' => 'getForwardsConversion',
        'fb_likes' => 'getFbLikes',
        'fb_shares' => 'getFbShares',
        'tw_shares' => 'getTwShares',
        'social_shares' => 'getSocialShares'
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
        $this->setIfExists('opens', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
        $this->setIfExists('complaints', $data ?? [], null);
        $this->setIfExists('unsubscribes', $data ?? [], null);
        $this->setIfExists('bounces', $data ?? [], null);
        $this->setIfExists('forwards', $data ?? [], null);
        $this->setIfExists('forwards_conversion', $data ?? [], null);
        $this->setIfExists('fb_likes', $data ?? [], null);
        $this->setIfExists('fb_shares', $data ?? [], null);
        $this->setIfExists('tw_shares', $data ?? [], null);
        $this->setIfExists('social_shares', $data ?? [], null);
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

        if ($this->container['opens'] === null) {
            $invalidProperties[] = "'opens' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalidProperties[] = "'clicks' can't be null";
        }
        if ($this->container['complaints'] === null) {
            $invalidProperties[] = "'complaints' can't be null";
        }
        if ($this->container['unsubscribes'] === null) {
            $invalidProperties[] = "'unsubscribes' can't be null";
        }
        if ($this->container['bounces'] === null) {
            $invalidProperties[] = "'bounces' can't be null";
        }
        if ($this->container['forwards'] === null) {
            $invalidProperties[] = "'forwards' can't be null";
        }
        if ($this->container['forwards_conversion'] === null) {
            $invalidProperties[] = "'forwards_conversion' can't be null";
        }
        if ($this->container['fb_likes'] === null) {
            $invalidProperties[] = "'fb_likes' can't be null";
        }
        if ($this->container['fb_shares'] === null) {
            $invalidProperties[] = "'fb_shares' can't be null";
        }
        if ($this->container['tw_shares'] === null) {
            $invalidProperties[] = "'tw_shares' can't be null";
        }
        if ($this->container['social_shares'] === null) {
            $invalidProperties[] = "'social_shares' can't be null";
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
     * Gets opens
     *
     * @return bool
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     *
     * @param bool $opens True to include opens, false otherwise
     *
     * @return self
     */
    public function setOpens($opens)
    {

        if (is_null($opens)) {
            throw new \InvalidArgumentException('non-nullable opens cannot be null');
        }

        $this->container['opens'] = $opens;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return bool
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param bool $clicks True to include clicks, false otherwise
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
     * Gets complaints
     *
     * @return bool
     */
    public function getComplaints()
    {
        return $this->container['complaints'];
    }

    /**
     * Sets complaints
     *
     * @param bool $complaints True to include complaints, false otherwise
     *
     * @return self
     */
    public function setComplaints($complaints)
    {

        if (is_null($complaints)) {
            throw new \InvalidArgumentException('non-nullable complaints cannot be null');
        }

        $this->container['complaints'] = $complaints;

        return $this;
    }

    /**
     * Gets unsubscribes
     *
     * @return bool
     */
    public function getUnsubscribes()
    {
        return $this->container['unsubscribes'];
    }

    /**
     * Sets unsubscribes
     *
     * @param bool $unsubscribes True to include unsubscriptions, false otherwise
     *
     * @return self
     */
    public function setUnsubscribes($unsubscribes)
    {

        if (is_null($unsubscribes)) {
            throw new \InvalidArgumentException('non-nullable unsubscribes cannot be null');
        }

        $this->container['unsubscribes'] = $unsubscribes;

        return $this;
    }

    /**
     * Gets bounces
     *
     * @return bool
     */
    public function getBounces()
    {
        return $this->container['bounces'];
    }

    /**
     * Sets bounces
     *
     * @param bool $bounces True to include bounces, false otherwise
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
     * Gets forwards
     *
     * @return bool
     */
    public function getForwards()
    {
        return $this->container['forwards'];
    }

    /**
     * Sets forwards
     *
     * @param bool $forwards True to include forwards, false otherwise
     *
     * @return self
     */
    public function setForwards($forwards)
    {

        if (is_null($forwards)) {
            throw new \InvalidArgumentException('non-nullable forwards cannot be null');
        }

        $this->container['forwards'] = $forwards;

        return $this;
    }

    /**
     * Gets forwards_conversion
     *
     * @return bool
     */
    public function getForwardsConversion()
    {
        return $this->container['forwards_conversion'];
    }

    /**
     * Sets forwards_conversion
     *
     * @param bool $forwards_conversion True to include converted forwards, false otherwise
     *
     * @return self
     */
    public function setForwardsConversion($forwards_conversion)
    {

        if (is_null($forwards_conversion)) {
            throw new \InvalidArgumentException('non-nullable forwards_conversion cannot be null');
        }

        $this->container['forwards_conversion'] = $forwards_conversion;

        return $this;
    }

    /**
     * Gets fb_likes
     *
     * @return bool
     */
    public function getFbLikes()
    {
        return $this->container['fb_likes'];
    }

    /**
     * Sets fb_likes
     *
     * @param bool $fb_likes True to include facebook likes, false otherwise
     *
     * @return self
     */
    public function setFbLikes($fb_likes)
    {

        if (is_null($fb_likes)) {
            throw new \InvalidArgumentException('non-nullable fb_likes cannot be null');
        }

        $this->container['fb_likes'] = $fb_likes;

        return $this;
    }

    /**
     * Gets fb_shares
     *
     * @return bool
     */
    public function getFbShares()
    {
        return $this->container['fb_shares'];
    }

    /**
     * Sets fb_shares
     *
     * @param bool $fb_shares True to include facebook shares, false otherwise
     *
     * @return self
     */
    public function setFbShares($fb_shares)
    {

        if (is_null($fb_shares)) {
            throw new \InvalidArgumentException('non-nullable fb_shares cannot be null');
        }

        $this->container['fb_shares'] = $fb_shares;

        return $this;
    }

    /**
     * Gets tw_shares
     *
     * @return bool
     */
    public function getTwShares()
    {
        return $this->container['tw_shares'];
    }

    /**
     * Sets tw_shares
     *
     * @param bool $tw_shares True to include twitter shares, false otherwise
     *
     * @return self
     */
    public function setTwShares($tw_shares)
    {

        if (is_null($tw_shares)) {
            throw new \InvalidArgumentException('non-nullable tw_shares cannot be null');
        }

        $this->container['tw_shares'] = $tw_shares;

        return $this;
    }

    /**
     * Gets social_shares
     *
     * @return bool
     */
    public function getSocialShares()
    {
        return $this->container['social_shares'];
    }

    /**
     * Sets social_shares
     *
     * @param bool $social_shares True to include social shares, false otherwise
     *
     * @return self
     */
    public function setSocialShares($social_shares)
    {

        if (is_null($social_shares)) {
            throw new \InvalidArgumentException('non-nullable social_shares cannot be null');
        }

        $this->container['social_shares'] = $social_shares;

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


