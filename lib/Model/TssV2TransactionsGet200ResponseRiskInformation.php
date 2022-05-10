<?php
/**
 * TssV2TransactionsGet200ResponseRiskInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * TssV2TransactionsGet200ResponseRiskInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseRiskInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_riskInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profile' => '\CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationProfile',
        'rules' => '\CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationRules[]',
        'passiveProfile' => '\CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationProfile',
        'passiveRules' => '\CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationRules[]',
        'score' => '\CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationScore',
        'localTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profile' => null,
        'rules' => null,
        'passiveProfile' => null,
        'passiveRules' => null,
        'score' => null,
        'localTime' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'profile' => 'profile',
        'rules' => 'rules',
        'passiveProfile' => 'passiveProfile',
        'passiveRules' => 'passiveRules',
        'score' => 'score',
        'localTime' => 'localTime'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'profile' => 'setProfile',
        'rules' => 'setRules',
        'passiveProfile' => 'setPassiveProfile',
        'passiveRules' => 'setPassiveRules',
        'score' => 'setScore',
        'localTime' => 'setLocalTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'profile' => 'getProfile',
        'rules' => 'getRules',
        'passiveProfile' => 'getPassiveProfile',
        'passiveRules' => 'getPassiveRules',
        'score' => 'getScore',
        'localTime' => 'getLocalTime'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['passiveProfile'] = isset($data['passiveProfile']) ? $data['passiveProfile'] : null;
        $this->container['passiveRules'] = isset($data['passiveRules']) ? $data['passiveRules'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['localTime'] = isset($data['localTime']) ? $data['localTime'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets profile
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationProfile
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationProfile $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets rules
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationRules[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationRules[] $rules
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

        return $this;
    }

    /**
     * Gets passiveProfile
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationProfile
     */
    public function getPassiveProfile()
    {
        return $this->container['passiveProfile'];
    }

    /**
     * Sets passiveProfile
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationProfile $passiveProfile
     * @return $this
     */
    public function setPassiveProfile($passiveProfile)
    {
        $this->container['passiveProfile'] = $passiveProfile;

        return $this;
    }

    /**
     * Gets passiveRules
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationRules[]
     */
    public function getPassiveRules()
    {
        return $this->container['passiveRules'];
    }

    /**
     * Sets passiveRules
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationRules[] $passiveRules
     * @return $this
     */
    public function setPassiveRules($passiveRules)
    {
        $this->container['passiveRules'] = $passiveRules;

        return $this;
    }

    /**
     * Gets score
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationScore
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseRiskInformationScore $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets localTime
     * @return string
     */
    public function getLocalTime()
    {
        return $this->container['localTime'];
    }

    /**
     * Sets localTime
     * @param string $localTime Time that the transaction was submitted in local time. Generated by Cybersource.
     * @return $this
     */
    public function setLocalTime($localTime)
    {
        $this->container['localTime'] = $localTime;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


