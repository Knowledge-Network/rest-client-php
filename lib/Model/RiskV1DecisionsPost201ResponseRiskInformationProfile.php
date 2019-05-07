<?php
/**
 * RiskV1DecisionsPost201ResponseRiskInformationProfile
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
 * RiskV1DecisionsPost201ResponseRiskInformationProfile Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1DecisionsPost201ResponseRiskInformationProfile implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1DecisionsPost201Response_riskInformation_profile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'desinationQueue' => 'string',
        'selectorRule' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'desinationQueue' => null,
        'selectorRule' => null
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
        'name' => 'name',
        'desinationQueue' => 'desinationQueue',
        'selectorRule' => 'selectorRule'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'desinationQueue' => 'setDesinationQueue',
        'selectorRule' => 'setSelectorRule'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'desinationQueue' => 'getDesinationQueue',
        'selectorRule' => 'getSelectorRule'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desinationQueue'] = isset($data['desinationQueue']) ? $data['desinationQueue'] : null;
        $this->container['selectorRule'] = isset($data['selectorRule']) ? $data['selectorRule'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 30)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['desinationQueue']) && (strlen($this->container['desinationQueue']) > 255)) {
            $invalid_properties[] = "invalid value for 'desinationQueue', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['selectorRule']) && (strlen($this->container['selectorRule']) > 255)) {
            $invalid_properties[] = "invalid value for 'selectorRule', the character length must be smaller than or equal to 255.";
        }

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

        if (strlen($this->container['name']) > 30) {
            return false;
        }
        if (strlen($this->container['desinationQueue']) > 255) {
            return false;
        }
        if (strlen($this->container['selectorRule']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the active profile chosen by the profile selector. If no profile selector exists, the default active profile is chosen.
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RiskV1DecisionsPost201ResponseRiskInformationProfile., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets desinationQueue
     * @return string
     */
    public function getDesinationQueue()
    {
        return $this->container['desinationQueue'];
    }

    /**
     * Sets desinationQueue
     * @param string $desinationQueue Name of the queue where orders that are not automatically accepted are sent.
     * @return $this
     */
    public function setDesinationQueue($desinationQueue)
    {
        if (!is_null($desinationQueue) && (strlen($desinationQueue) > 255)) {
            throw new \InvalidArgumentException('invalid length for $desinationQueue when calling RiskV1DecisionsPost201ResponseRiskInformationProfile., must be smaller than or equal to 255.');
        }

        $this->container['desinationQueue'] = $desinationQueue;

        return $this;
    }

    /**
     * Gets selectorRule
     * @return string
     */
    public function getSelectorRule()
    {
        return $this->container['selectorRule'];
    }

    /**
     * Sets selectorRule
     * @param string $selectorRule Name of the profile selector rule that chooses the profile to use for the transaction. If no profile selector exists, the value is Default Active Profile.
     * @return $this
     */
    public function setSelectorRule($selectorRule)
    {
        if (!is_null($selectorRule) && (strlen($selectorRule) > 255)) {
            throw new \InvalidArgumentException('invalid length for $selectorRule when calling RiskV1DecisionsPost201ResponseRiskInformationProfile., must be smaller than or equal to 255.');
        }

        $this->container['selectorRule'] = $selectorRule;

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


