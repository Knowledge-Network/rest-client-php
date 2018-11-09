<?php
/**
 * TssV2TransactionsGet200ResponsePaymentInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
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
 * TssV2TransactionsGet200ResponsePaymentInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponsePaymentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_paymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentType' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationPaymentType',
        'customer' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer',
        'card' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCard',
        'invoice' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInvoice',
        'bank' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBank',
        'accountFeatures' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationAccountFeatures'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentType' => null,
        'customer' => null,
        'card' => null,
        'invoice' => null,
        'bank' => null,
        'accountFeatures' => null
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
        'paymentType' => 'paymentType',
        'customer' => 'customer',
        'card' => 'card',
        'invoice' => 'invoice',
        'bank' => 'bank',
        'accountFeatures' => 'accountFeatures'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentType' => 'setPaymentType',
        'customer' => 'setCustomer',
        'card' => 'setCard',
        'invoice' => 'setInvoice',
        'bank' => 'setBank',
        'accountFeatures' => 'setAccountFeatures'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentType' => 'getPaymentType',
        'customer' => 'getCustomer',
        'card' => 'getCard',
        'invoice' => 'getInvoice',
        'bank' => 'getBank',
        'accountFeatures' => 'getAccountFeatures'
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
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['accountFeatures'] = isset($data['accountFeatures']) ? $data['accountFeatures'] : null;
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
     * Gets paymentType
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationPaymentType
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationPaymentType $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets customer
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets invoice
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInvoice
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInvoice $invoice
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets bank
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBank
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBank $bank
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets accountFeatures
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationAccountFeatures
     */
    public function getAccountFeatures()
    {
        return $this->container['accountFeatures'];
    }

    /**
     * Sets accountFeatures
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationAccountFeatures $accountFeatures
     * @return $this
     */
    public function setAccountFeatures($accountFeatures)
    {
        $this->container['accountFeatures'] = $accountFeatures;

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


