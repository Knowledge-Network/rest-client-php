<?php
/**
 * RequestBody
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
 * RequestBody Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RequestBody implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'requestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organizationId' => 'string',
        'reportDefinitionName' => 'string',
        'reportFields' => 'string[]',
        'reportMimeType' => 'string',
        'reportName' => 'string',
        'timezone' => 'string',
        'reportStartTime' => '\DateTime',
        'reportEndTime' => '\DateTime',
        'reportFilters' => 'map[string,string[]]',
        'reportPreferences' => '\CyberSource\Model\Reportingv3reportsReportPreferences',
        'groupName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organizationId' => null,
        'reportDefinitionName' => null,
        'reportFields' => null,
        'reportMimeType' => null,
        'reportName' => null,
        'timezone' => null,
        'reportStartTime' => 'date-time',
        'reportEndTime' => 'date-time',
        'reportFilters' => null,
        'reportPreferences' => null,
        'groupName' => null
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
        'organizationId' => 'organizationId',
        'reportDefinitionName' => 'reportDefinitionName',
        'reportFields' => 'reportFields',
        'reportMimeType' => 'reportMimeType',
        'reportName' => 'reportName',
        'timezone' => 'timezone',
        'reportStartTime' => 'reportStartTime',
        'reportEndTime' => 'reportEndTime',
        'reportFilters' => 'reportFilters',
        'reportPreferences' => 'reportPreferences',
        'groupName' => 'groupName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'organizationId' => 'setOrganizationId',
        'reportDefinitionName' => 'setReportDefinitionName',
        'reportFields' => 'setReportFields',
        'reportMimeType' => 'setReportMimeType',
        'reportName' => 'setReportName',
        'timezone' => 'setTimezone',
        'reportStartTime' => 'setReportStartTime',
        'reportEndTime' => 'setReportEndTime',
        'reportFilters' => 'setReportFilters',
        'reportPreferences' => 'setReportPreferences',
        'groupName' => 'setGroupName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'organizationId' => 'getOrganizationId',
        'reportDefinitionName' => 'getReportDefinitionName',
        'reportFields' => 'getReportFields',
        'reportMimeType' => 'getReportMimeType',
        'reportName' => 'getReportName',
        'timezone' => 'getTimezone',
        'reportStartTime' => 'getReportStartTime',
        'reportEndTime' => 'getReportEndTime',
        'reportFilters' => 'getReportFilters',
        'reportPreferences' => 'getReportPreferences',
        'groupName' => 'getGroupName'
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

    const REPORT_MIME_TYPE_APPLICATIONXML = 'application/xml';
    const REPORT_MIME_TYPE_TEXTCSV = 'text/csv';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReportMimeTypeAllowableValues()
    {
        return [
            self::REPORT_MIME_TYPE_APPLICATIONXML,
            self::REPORT_MIME_TYPE_TEXTCSV,
        ];
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['reportDefinitionName'] = isset($data['reportDefinitionName']) ? $data['reportDefinitionName'] : null;
        $this->container['reportFields'] = isset($data['reportFields']) ? $data['reportFields'] : null;
        $this->container['reportMimeType'] = isset($data['reportMimeType']) ? $data['reportMimeType'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['reportStartTime'] = isset($data['reportStartTime']) ? $data['reportStartTime'] : null;
        $this->container['reportEndTime'] = isset($data['reportEndTime']) ? $data['reportEndTime'] : null;
        $this->container['reportFilters'] = isset($data['reportFilters']) ? $data['reportFilters'] : null;
        $this->container['reportPreferences'] = isset($data['reportPreferences']) ? $data['reportPreferences'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['organizationId']) && !preg_match("/[a-zA-Z0-9-_]+/", $this->container['organizationId'])) {
            $invalid_properties[] = "invalid value for 'organizationId', must be conform to the pattern /[a-zA-Z0-9-_]+/.";
        }

        if (!is_null($this->container['reportDefinitionName']) && (strlen($this->container['reportDefinitionName']) > 80)) {
            $invalid_properties[] = "invalid value for 'reportDefinitionName', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['reportDefinitionName']) && (strlen($this->container['reportDefinitionName']) < 1)) {
            $invalid_properties[] = "invalid value for 'reportDefinitionName', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['reportDefinitionName']) && !preg_match("/[a-zA-Z0-9-]+/", $this->container['reportDefinitionName'])) {
            $invalid_properties[] = "invalid value for 'reportDefinitionName', must be conform to the pattern /[a-zA-Z0-9-]+/.";
        }

        $allowed_values = $this->getReportMimeTypeAllowableValues();
        if (!in_array($this->container['reportMimeType'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'reportMimeType', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['reportName']) && (strlen($this->container['reportName']) > 128)) {
            $invalid_properties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['reportName']) && (strlen($this->container['reportName']) < 1)) {
            $invalid_properties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['reportName']) && !preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['reportName'])) {
            $invalid_properties[] = "invalid value for 'reportName', must be conform to the pattern /[a-zA-Z0-9-_ ]+/.";
        }

        if (!is_null($this->container['groupName']) && !preg_match("/[0-9]*/", $this->container['groupName'])) {
            $invalid_properties[] = "invalid value for 'groupName', must be conform to the pattern /[0-9]*/.";
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

        if (!preg_match("/[a-zA-Z0-9-_]+/", $this->container['organizationId'])) {
            return false;
        }
        if (strlen($this->container['reportDefinitionName']) > 80) {
            return false;
        }
        if (strlen($this->container['reportDefinitionName']) < 1) {
            return false;
        }
        if (!preg_match("/[a-zA-Z0-9-]+/", $this->container['reportDefinitionName'])) {
            return false;
        }
        $allowed_values = $this->getReportMimeTypeAllowableValues();
        if (!in_array($this->container['reportMimeType'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['reportName']) > 128) {
            return false;
        }
        if (strlen($this->container['reportName']) < 1) {
            return false;
        }
        if (!preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['reportName'])) {
            return false;
        }
        if (!preg_match("/[0-9]*/", $this->container['groupName'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Valid CyberSource Organization Id
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {

        if (!is_null($organizationId) && (!preg_match("/[a-zA-Z0-9-_]+/", $organizationId))) {
            throw new \InvalidArgumentException("invalid value for $organizationId when calling RequestBody., must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets reportDefinitionName
     * @return string
     */
    public function getReportDefinitionName()
    {
        return $this->container['reportDefinitionName'];
    }

    /**
     * Sets reportDefinitionName
     * @param string $reportDefinitionName
     * @return $this
     */
    public function setReportDefinitionName($reportDefinitionName)
    {
        if (!is_null($reportDefinitionName) && (strlen($reportDefinitionName) > 80)) {
            throw new \InvalidArgumentException('invalid length for $reportDefinitionName when calling RequestBody., must be smaller than or equal to 80.');
        }
        if (!is_null($reportDefinitionName) && (strlen($reportDefinitionName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reportDefinitionName when calling RequestBody., must be bigger than or equal to 1.');
        }
        if (!is_null($reportDefinitionName) && (!preg_match("/[a-zA-Z0-9-]+/", $reportDefinitionName))) {
            throw new \InvalidArgumentException("invalid value for $reportDefinitionName when calling RequestBody., must conform to the pattern /[a-zA-Z0-9-]+/.");
        }

        $this->container['reportDefinitionName'] = $reportDefinitionName;

        return $this;
    }

    /**
     * Gets reportFields
     * @return string[]
     */
    public function getReportFields()
    {
        return $this->container['reportFields'];
    }

    /**
     * Sets reportFields
     * @param string[] $reportFields List of fields which needs to get included in a report
     * @return $this
     */
    public function setReportFields($reportFields)
    {
        $this->container['reportFields'] = $reportFields;

        return $this;
    }

    /**
     * Gets reportMimeType
     * @return string
     */
    public function getReportMimeType()
    {
        return $this->container['reportMimeType'];
    }

    /**
     * Sets reportMimeType
     * @param string $reportMimeType Format of the report
     * @return $this
     */
    public function setReportMimeType($reportMimeType)
    {
        $allowed_values = $this->getReportMimeTypeAllowableValues();
        if (!is_null($reportMimeType) && !in_array($reportMimeType, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reportMimeType', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['reportMimeType'] = $reportMimeType;

        return $this;
    }

    /**
     * Gets reportName
     * @return string
     */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
     * Sets reportName
     * @param string $reportName Name of the report
     * @return $this
     */
    public function setReportName($reportName)
    {
        if (!is_null($reportName) && (strlen($reportName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $reportName when calling RequestBody., must be smaller than or equal to 128.');
        }
        if (!is_null($reportName) && (strlen($reportName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reportName when calling RequestBody., must be bigger than or equal to 1.');
        }
        if (!is_null($reportName) && (!preg_match("/[a-zA-Z0-9-_ ]+/", $reportName))) {
            throw new \InvalidArgumentException("invalid value for $reportName when calling RequestBody., must conform to the pattern /[a-zA-Z0-9-_ ]+/.");
        }

        $this->container['reportName'] = $reportName;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone Timezone of the report
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets reportStartTime
     * @return \DateTime
     */
    public function getReportStartTime()
    {
        return $this->container['reportStartTime'];
    }

    /**
     * Sets reportStartTime
     * @param \DateTime $reportStartTime Start time of the report
     * @return $this
     */
    public function setReportStartTime($reportStartTime)
    {
        $this->container['reportStartTime'] = $reportStartTime;

        return $this;
    }

    /**
     * Gets reportEndTime
     * @return \DateTime
     */
    public function getReportEndTime()
    {
        return $this->container['reportEndTime'];
    }

    /**
     * Sets reportEndTime
     * @param \DateTime $reportEndTime End time of the report
     * @return $this
     */
    public function setReportEndTime($reportEndTime)
    {
        $this->container['reportEndTime'] = $reportEndTime;

        return $this;
    }

    /**
     * Gets reportFilters
     * @return map[string,string[]]
     */
    public function getReportFilters()
    {
        return $this->container['reportFilters'];
    }

    /**
     * Sets reportFilters
     * @param map[string,string[]] $reportFilters List of filters to apply
     * @return $this
     */
    public function setReportFilters($reportFilters)
    {
        $this->container['reportFilters'] = $reportFilters;

        return $this;
    }

    /**
     * Gets reportPreferences
     * @return \CyberSource\Model\Reportingv3reportsReportPreferences
     */
    public function getReportPreferences()
    {
        return $this->container['reportPreferences'];
    }

    /**
     * Sets reportPreferences
     * @param \CyberSource\Model\Reportingv3reportsReportPreferences $reportPreferences
     * @return $this
     */
    public function setReportPreferences($reportPreferences)
    {
        $this->container['reportPreferences'] = $reportPreferences;

        return $this;
    }

    /**
     * Gets groupName
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     * @param string $groupName Specifies the group name
     * @return $this
     */
    public function setGroupName($groupName)
    {

        if (!is_null($groupName) && (!preg_match("/[0-9]*/", $groupName))) {
            throw new \InvalidArgumentException("invalid value for $groupName when calling RequestBody., must conform to the pattern /[0-9]*/.");
        }

        $this->container['groupName'] = $groupName;

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


