<?php
/**
 * TssV2TransactionsGet200ResponsePaymentInformationBrands
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
 * TssV2TransactionsGet200ResponsePaymentInformationBrands Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponsePaymentInformationBrands implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_paymentInformation_brands';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'brandName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'brandName' => null
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
        'brandName' => 'brandName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'brandName' => 'setBrandName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'brandName' => 'getBrandName'
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
        $this->container['brandName'] = isset($data['brandName']) ? $data['brandName'] : null;
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
     * @param string $type Three-digit value that indicates the card type.  **IMPORTANT** It is strongly recommended that you include the card type field in request messages even if it is optional for your processor and card type. Omitting the card type can cause the transaction to be processed with the wrong card type.  Possible values: - `001`: Visa. For card-present transactions on all processors except SIX, the Visa Electron card type is processed the same way that the Visa debit card is processed. Use card type value `001` for Visa Electron. - `002`: Mastercard, Eurocard[^1], which is a European regional brand of Mastercard. - `003`: American Express - `004`: Discover - `005`: Diners Club - `006`: Carte Blanche[^1] - `007`: JCB[^1] - `014`: Enroute[^1] - `021`: JAL[^1] - `024`: Maestro (UK Domestic)[^1] - `031`: Delta[^1]: Use this value only for Ingenico ePayments. For other processors, use `001` for all Visa card types. - `033`: Visa Electron[^1]. Use this value only for Ingenico ePayments and SIX. For other processors, use `001` for all Visa card types. - `034`: Dankort[^1] - `036`: Cartes Bancaires[^1,4] - `037`: Carta Si[^1] - `039`: Encoded account number[^1] - `040`: UATP[^1] - `042`: Maestro (International)[^1] - `050`: Hipercard[^2,3] - `051`: Aura - `054`: Elo[^3] - `062`: China UnionPay - '070': EFTPOS  [^1]: For this card type, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in your request for an authorization or a stand-alone credit. [^2]: For this card type on Cielo 3.0, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in a request for an authorization or a stand-alone credit. This card type is not supported on Cielo 1.5. [^3]: For this card type on Getnet and Rede, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in a request for an authorization or a stand-alone credit. [^4]: For this card type, you must include the `paymentInformation.card.type` in your request for any payer authentication services.  #### Used by **Authorization** Required for Carte Blanche and JCB. Optional for all other card types.  #### Card Present reply This field is included in the reply message when the client software that is installed on the POS terminal uses the token management service (TMS) to retrieve tokenized payment details. You must contact customer support to have your account enabled to receive these fields in the credit reply message.  Returned by the Credit service.  This reply field is only supported by the following processors: - American Express Direct - Credit Mutuel-CIC - FDC Nashville Global - OmniPay Direct - SIX  #### Google Pay transactions For PAN-based Google Pay transactions, this field is returned in the API response.  #### GPX This field only supports transactions from the following card types: - Visa - Mastercard - AMEX - Discover - Diners - JCB - Union Pay International
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets brandName
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     * @param string $brandName This field contains the card brand name.   Some of the possible values (not an exhaustive list) are -    - VISA   - MASTERCARD   - AMERICAN EXPRESS   - DISCOVER   - DINERS CLUB   - CARTE BLANCHE   - JCB   - OPTIMA   - TWINPAY CREDIT CARD   - TWINPAY DEBIT CARD   - WALMART   - ENROUTE   - LOWES CONSUMER   - HOME DEPOT CONSUMER   - MBNA   - DICKS SPORTWEAR   - CASUAL CORNER   - SEARS   - JAL   - DISNEY CARD   - SWITCH/SOLO   - SAMS CLUB CONSUMER   - SAMS CLUB BUSINESS   - NICOS HOUSE CARD   - BEBE   - RESTORATION HARDWARE   - DELTA ONLINE   - SOLO   - VISA ELECTRON   - DANKORT   - LASER   - CARTE BANCAIRE   - CARTA SI   - ENCODED ACCOUNT   - UATP   - HOUSEHOLD   - MAESTRO   - GE CAPITAL   - KOREAN CARDS   - STYLE CARDS   - JCREW   - MEIJER   - HIPERCARD   - AURA   - REDECARD   - ORICO HOUSE CARD   - ELO   - CAPITAL ONE PRIVATE LABEL   - CARNET   - RUPAY   - CHINA UNION PAY   - FALABELLA PRIVATE LABEL   - PROMPTCARD   - KOREAN DOMESTIC   - BANRICOMPRAS
     * @return $this
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

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

