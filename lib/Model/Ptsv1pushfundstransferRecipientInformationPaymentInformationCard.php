<?php
/**
 * Ptsv1pushfundstransferRecipientInformationPaymentInformationCard
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
 * Ptsv1pushfundstransferRecipientInformationPaymentInformationCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferRecipientInformationPaymentInformationCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_recipientInformation_paymentInformation_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'securityCode' => 'string',
        'number' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'customer' => '\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardCustomer',
        'paymentInstrument' => '\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardPaymentInstrument',
        'instrumentIdentifier' => '\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardInstrumentIdentifier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'securityCode' => null,
        'number' => null,
        'expirationMonth' => null,
        'expirationYear' => null,
        'customer' => null,
        'paymentInstrument' => null,
        'instrumentIdentifier' => null
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
        'type' => 'type',
        'securityCode' => 'securityCode',
        'number' => 'number',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'customer' => 'customer',
        'paymentInstrument' => 'paymentInstrument',
        'instrumentIdentifier' => 'instrumentIdentifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'securityCode' => 'setSecurityCode',
        'number' => 'setNumber',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'customer' => 'setCustomer',
        'paymentInstrument' => 'setPaymentInstrument',
        'instrumentIdentifier' => 'setInstrumentIdentifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'securityCode' => 'getSecurityCode',
        'number' => 'getNumber',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'customer' => 'getCustomer',
        'paymentInstrument' => 'getPaymentInstrument',
        'instrumentIdentifier' => 'getInstrumentIdentifier'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['paymentInstrument'] = isset($data['paymentInstrument']) ? $data['paymentInstrument'] : null;
        $this->container['instrumentIdentifier'] = isset($data['instrumentIdentifier']) ? $data['instrumentIdentifier'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Three-digit value that indicates the card type. Mandatory if not present in a token.  Possible values:  Visa Platform Connect - `001`: Visa - `002`: Mastercard, Eurocard, which is a European regional brand of Mastercard. - `033`: Visa Electron - `024`: Maestro  Mastercard Send: - `002`: Mastercard, Eurocard, which is a European regional brand of Mastercard.  FDC Compass: - `001`: Visa - `002`: Mastercard, Eurocard, which is a European regional brand of Mastercard.  Chase Paymentech: - `001`: Visa - `002`: Mastercard, Eurocard, which is a European regional brand of Mastercard.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets securityCode
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->container['securityCode'];
    }

    /**
     * Sets securityCode
     * @param string $securityCode 3-digit value that indicates the cardCvv2Value. Values can be 0-9.
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        $this->container['securityCode'] = $securityCode;

        return $this;
    }

    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number The customer’s payment card number, also known as the Primary Account Number (PAN).  Conditional: this field is required if not using tokens.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth Two-digit month in which the payment card expires.  Format: MM.  Valid values: 01 through 12. Leading 0 is required.
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear Four-digit year in which the payment card expires.  Format: YYYY.
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        $this->container['expirationYear'] = $expirationYear;

        return $this;
    }

    /**
     * Gets customer
     * @return \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardCustomer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets paymentInstrument
     * @return \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardPaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->container['paymentInstrument'];
    }

    /**
     * Sets paymentInstrument
     * @param \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardPaymentInstrument $paymentInstrument
     * @return $this
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->container['paymentInstrument'] = $paymentInstrument;

        return $this;
    }

    /**
     * Gets instrumentIdentifier
     * @return \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardInstrumentIdentifier
     */
    public function getInstrumentIdentifier()
    {
        return $this->container['instrumentIdentifier'];
    }

    /**
     * Sets instrumentIdentifier
     * @param \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformationCardInstrumentIdentifier $instrumentIdentifier
     * @return $this
     */
    public function setInstrumentIdentifier($instrumentIdentifier)
    {
        $this->container['instrumentIdentifier'] = $instrumentIdentifier;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

