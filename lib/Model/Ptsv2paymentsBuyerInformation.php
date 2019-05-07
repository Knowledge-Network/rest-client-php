<?php
/**
 * Ptsv2paymentsBuyerInformation
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
 * Ptsv2paymentsBuyerInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsBuyerInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_buyerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantCustomerId' => 'string',
        'dateOfBirth' => 'string',
        'vatRegistrationNumber' => 'string',
        'companyTaxId' => 'string',
        'personalIdentification' => '\CyberSource\Model\Ptsv2paymentsBuyerInformationPersonalIdentification[]',
        'hashedPassword' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantCustomerId' => null,
        'dateOfBirth' => null,
        'vatRegistrationNumber' => null,
        'companyTaxId' => null,
        'personalIdentification' => null,
        'hashedPassword' => null
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
        'merchantCustomerId' => 'merchantCustomerId',
        'dateOfBirth' => 'dateOfBirth',
        'vatRegistrationNumber' => 'vatRegistrationNumber',
        'companyTaxId' => 'companyTaxId',
        'personalIdentification' => 'personalIdentification',
        'hashedPassword' => 'hashedPassword'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantCustomerId' => 'setMerchantCustomerId',
        'dateOfBirth' => 'setDateOfBirth',
        'vatRegistrationNumber' => 'setVatRegistrationNumber',
        'companyTaxId' => 'setCompanyTaxId',
        'personalIdentification' => 'setPersonalIdentification',
        'hashedPassword' => 'setHashedPassword'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantCustomerId' => 'getMerchantCustomerId',
        'dateOfBirth' => 'getDateOfBirth',
        'vatRegistrationNumber' => 'getVatRegistrationNumber',
        'companyTaxId' => 'getCompanyTaxId',
        'personalIdentification' => 'getPersonalIdentification',
        'hashedPassword' => 'getHashedPassword'
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
        $this->container['merchantCustomerId'] = isset($data['merchantCustomerId']) ? $data['merchantCustomerId'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['vatRegistrationNumber'] = isset($data['vatRegistrationNumber']) ? $data['vatRegistrationNumber'] : null;
        $this->container['companyTaxId'] = isset($data['companyTaxId']) ? $data['companyTaxId'] : null;
        $this->container['personalIdentification'] = isset($data['personalIdentification']) ? $data['personalIdentification'] : null;
        $this->container['hashedPassword'] = isset($data['hashedPassword']) ? $data['hashedPassword'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['merchantCustomerId']) && (strlen($this->container['merchantCustomerId']) > 100)) {
            $invalid_properties[] = "invalid value for 'merchantCustomerId', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['dateOfBirth']) && (strlen($this->container['dateOfBirth']) > 8)) {
            $invalid_properties[] = "invalid value for 'dateOfBirth', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['vatRegistrationNumber']) && (strlen($this->container['vatRegistrationNumber']) > 20)) {
            $invalid_properties[] = "invalid value for 'vatRegistrationNumber', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['companyTaxId']) && (strlen($this->container['companyTaxId']) > 9)) {
            $invalid_properties[] = "invalid value for 'companyTaxId', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['hashedPassword']) && (strlen($this->container['hashedPassword']) > 100)) {
            $invalid_properties[] = "invalid value for 'hashedPassword', the character length must be smaller than or equal to 100.";
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

        if (strlen($this->container['merchantCustomerId']) > 100) {
            return false;
        }
        if (strlen($this->container['dateOfBirth']) > 8) {
            return false;
        }
        if (strlen($this->container['vatRegistrationNumber']) > 20) {
            return false;
        }
        if (strlen($this->container['companyTaxId']) > 9) {
            return false;
        }
        if (strlen($this->container['hashedPassword']) > 100) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantCustomerId
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->container['merchantCustomerId'];
    }

    /**
     * Sets merchantCustomerId
     * @param string $merchantCustomerId Your identifier for the customer.  When a subscription or customer profile is being created, the maximum length for this field for most processors is 30. Otherwise, the maximum length is 100.  **Comercio Latino**\\ For recurring payments in Mexico, the value is the customer’s contract number. Note Before you request the authorization, you must inform the issuer of the customer contract numbers that will be used for recurring transactions.  **Litle**\\ For a follow-on credit with Litle, CyberSource checks the following locations, in the order given, for a customer account ID value and uses the first value it finds: 1. `customer_account_id` value in the follow-on credit request 2. Customer account ID value that was used for the capture that is being credited 3. Customer account ID value that was used for the original authorization If a customer account ID value cannot be found in any of these locations, then no value is used.  For processor-specific information, see the customer_account_id field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setMerchantCustomerId($merchantCustomerId)
    {
        if (!is_null($merchantCustomerId) && (strlen($merchantCustomerId) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchantCustomerId when calling Ptsv2paymentsBuyerInformation., must be smaller than or equal to 100.');
        }

        $this->container['merchantCustomerId'] = $merchantCustomerId;

        return $this;
    }

    /**
     * Gets dateOfBirth
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     * @param string $dateOfBirth Recipient’s date of birth. **Format**: `YYYYMMDD`.  This field is a pass-through, which means that CyberSource ensures that the value is eight numeric characters but otherwise does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, CyberSource does not forward it to the processor.  For more details, see \"Recipients,\" page 224.
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        if (!is_null($dateOfBirth) && (strlen($dateOfBirth) > 8)) {
            throw new \InvalidArgumentException('invalid length for $dateOfBirth when calling Ptsv2paymentsBuyerInformation., must be smaller than or equal to 8.');
        }

        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets vatRegistrationNumber
     * @return string
     */
    public function getVatRegistrationNumber()
    {
        return $this->container['vatRegistrationNumber'];
    }

    /**
     * Sets vatRegistrationNumber
     * @param string $vatRegistrationNumber Customer’s government-assigned tax identification number.  For processor-specific information, see the purchaser_vat_registration_number field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setVatRegistrationNumber($vatRegistrationNumber)
    {
        if (!is_null($vatRegistrationNumber) && (strlen($vatRegistrationNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $vatRegistrationNumber when calling Ptsv2paymentsBuyerInformation., must be smaller than or equal to 20.');
        }

        $this->container['vatRegistrationNumber'] = $vatRegistrationNumber;

        return $this;
    }

    /**
     * Gets companyTaxId
     * @return string
     */
    public function getCompanyTaxId()
    {
        return $this->container['companyTaxId'];
    }

    /**
     * Sets companyTaxId
     * @param string $companyTaxId Company’s tax identifier. This is only used for eCheck service.  ** TeleCheck ** Contact your TeleCheck representative to find out whether this field is required or optional.  ** All Other Processors ** Not used
     * @return $this
     */
    public function setCompanyTaxId($companyTaxId)
    {
        if (!is_null($companyTaxId) && (strlen($companyTaxId) > 9)) {
            throw new \InvalidArgumentException('invalid length for $companyTaxId when calling Ptsv2paymentsBuyerInformation., must be smaller than or equal to 9.');
        }

        $this->container['companyTaxId'] = $companyTaxId;

        return $this;
    }

    /**
     * Gets personalIdentification
     * @return \CyberSource\Model\Ptsv2paymentsBuyerInformationPersonalIdentification[]
     */
    public function getPersonalIdentification()
    {
        return $this->container['personalIdentification'];
    }

    /**
     * Sets personalIdentification
     * @param \CyberSource\Model\Ptsv2paymentsBuyerInformationPersonalIdentification[] $personalIdentification
     * @return $this
     */
    public function setPersonalIdentification($personalIdentification)
    {
        $this->container['personalIdentification'] = $personalIdentification;

        return $this;
    }

    /**
     * Gets hashedPassword
     * @return string
     */
    public function getHashedPassword()
    {
        return $this->container['hashedPassword'];
    }

    /**
     * Sets hashedPassword
     * @param string $hashedPassword The description for this field is not available.
     * @return $this
     */
    public function setHashedPassword($hashedPassword)
    {
        if (!is_null($hashedPassword) && (strlen($hashedPassword) > 100)) {
            throw new \InvalidArgumentException('invalid length for $hashedPassword when calling Ptsv2paymentsBuyerInformation., must be smaller than or equal to 100.');
        }

        $this->container['hashedPassword'] = $hashedPassword;

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


