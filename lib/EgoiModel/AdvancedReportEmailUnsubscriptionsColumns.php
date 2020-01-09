<?php
/**
 * AdvancedReportEmailUnsubscriptionsColumns
 *
 * PHP version 5
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * APIv3 (Beta)
 *
 * # Introduction Just a quick pick!!! This is our new version of API. Remember, it is not stable yet!!! But we invite you play with it and give us your feedback ;) # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.   The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.   BaseURL = api.egoiapp.com  # HTTP Methods for RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication   We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:  #!/bin/bash  curl -X GET 'https://api.egoiapp.com/my-account' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:  #!/bin/bash  curl -X POST 'http://api.egoiapp.com/tags' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>' \\  -H 'Content-Type: application/json' \\  -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  <security-definitions/>
 *
 * The version of the OpenAPI document: 3.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3-SNAPSHOT
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
 * AdvancedReportEmailUnsubscriptionsColumns Class Doc Comment
 *
 * @category Class
 * @description Columns of the report
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdvancedReportEmailUnsubscriptionsColumns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdvancedReportEmailUnsubscriptionsColumns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'list_base_fields' => 'string[]',
        'list_extra_fields' => 'object[]',
        'list_stats_fields' => '\EgoiClient\EgoiModel\EmailUnsubscriptionsListStatsFields',
        'campaign_fields' => '\EgoiClient\EgoiModel\EmailUnsubscriptionsCampaignFields'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'list_base_fields' => null,
        'list_extra_fields' => null,
        'list_stats_fields' => null,
        'campaign_fields' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'list_base_fields' => 'list_base_fields',
        'list_extra_fields' => 'list_extra_fields',
        'list_stats_fields' => 'list_stats_fields',
        'campaign_fields' => 'campaign_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_base_fields' => 'setListBaseFields',
        'list_extra_fields' => 'setListExtraFields',
        'list_stats_fields' => 'setListStatsFields',
        'campaign_fields' => 'setCampaignFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_base_fields' => 'getListBaseFields',
        'list_extra_fields' => 'getListExtraFields',
        'list_stats_fields' => 'getListStatsFields',
        'campaign_fields' => 'getCampaignFields'
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
        $this->container['list_base_fields'] = isset($data['list_base_fields']) ? $data['list_base_fields'] : null;
        $this->container['list_extra_fields'] = isset($data['list_extra_fields']) ? $data['list_extra_fields'] : null;
        $this->container['list_stats_fields'] = isset($data['list_stats_fields']) ? $data['list_stats_fields'] : null;
        $this->container['campaign_fields'] = isset($data['campaign_fields']) ? $data['campaign_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['list_base_fields'] === null) {
            $invalidProperties[] = "'list_base_fields' can't be null";
        }
        if ($this->container['list_extra_fields'] === null) {
            $invalidProperties[] = "'list_extra_fields' can't be null";
        }
        if ($this->container['list_stats_fields'] === null) {
            $invalidProperties[] = "'list_stats_fields' can't be null";
        }
        if ($this->container['campaign_fields'] === null) {
            $invalidProperties[] = "'campaign_fields' can't be null";
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
     * Gets list_base_fields
     *
     * @return string[]
     */
    public function getListBaseFields()
    {
        return $this->container['list_base_fields'];
    }

    /**
     * Sets list_base_fields
     *
     * @param string[] $list_base_fields Array of base fields
     *
     * @return $this
     */
    public function setListBaseFields($list_base_fields)
    {
        $this->container['list_base_fields'] = $list_base_fields;

        return $this;
    }

    /**
     * Gets list_extra_fields
     *
     * @return object[]
     */
    public function getListExtraFields()
    {
        return $this->container['list_extra_fields'];
    }

    /**
     * Sets list_extra_fields
     *
     * @param object[] $list_extra_fields list_extra_fields
     *
     * @return $this
     */
    public function setListExtraFields($list_extra_fields)
    {
        $this->container['list_extra_fields'] = $list_extra_fields;

        return $this;
    }

    /**
     * Gets list_stats_fields
     *
     * @return \EgoiClient\EgoiModel\EmailUnsubscriptionsListStatsFields
     */
    public function getListStatsFields()
    {
        return $this->container['list_stats_fields'];
    }

    /**
     * Sets list_stats_fields
     *
     * @param \EgoiClient\EgoiModel\EmailUnsubscriptionsListStatsFields $list_stats_fields list_stats_fields
     *
     * @return $this
     */
    public function setListStatsFields($list_stats_fields)
    {
        $this->container['list_stats_fields'] = $list_stats_fields;

        return $this;
    }

    /**
     * Gets campaign_fields
     *
     * @return \EgoiClient\EgoiModel\EmailUnsubscriptionsCampaignFields
     */
    public function getCampaignFields()
    {
        return $this->container['campaign_fields'];
    }

    /**
     * Sets campaign_fields
     *
     * @param \EgoiClient\EgoiModel\EmailUnsubscriptionsCampaignFields $campaign_fields campaign_fields
     *
     * @return $this
     */
    public function setCampaignFields($campaign_fields)
    {
        $this->container['campaign_fields'] = $campaign_fields;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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

