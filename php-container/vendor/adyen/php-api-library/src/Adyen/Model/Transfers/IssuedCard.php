<?php

/**
 * Transfers API
 *
 * The version of the OpenAPI document: 4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Transfers;

use \ArrayAccess;
use Adyen\Model\Transfers\ObjectSerializer;

/**
 * IssuedCard Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IssuedCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authorisationType' => 'string',
        'panEntryMode' => 'string',
        'processingType' => 'string',
        'relayedAuthorisationData' => '\Adyen\Model\Transfers\RelayedAuthorisationData',
        'schemeTraceId' => 'string',
        'schemeUniqueTransactionId' => 'string',
        'type' => 'string',
        'validationFacts' => '\Adyen\Model\Transfers\TransferNotificationValidationFact[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authorisationType' => null,
        'panEntryMode' => null,
        'processingType' => null,
        'relayedAuthorisationData' => null,
        'schemeTraceId' => null,
        'schemeUniqueTransactionId' => null,
        'type' => null,
        'validationFacts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'authorisationType' => false,
        'panEntryMode' => false,
        'processingType' => false,
        'relayedAuthorisationData' => false,
        'schemeTraceId' => false,
        'schemeUniqueTransactionId' => false,
        'type' => false,
        'validationFacts' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'authorisationType' => 'authorisationType',
        'panEntryMode' => 'panEntryMode',
        'processingType' => 'processingType',
        'relayedAuthorisationData' => 'relayedAuthorisationData',
        'schemeTraceId' => 'schemeTraceId',
        'schemeUniqueTransactionId' => 'schemeUniqueTransactionId',
        'type' => 'type',
        'validationFacts' => 'validationFacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorisationType' => 'setAuthorisationType',
        'panEntryMode' => 'setPanEntryMode',
        'processingType' => 'setProcessingType',
        'relayedAuthorisationData' => 'setRelayedAuthorisationData',
        'schemeTraceId' => 'setSchemeTraceId',
        'schemeUniqueTransactionId' => 'setSchemeUniqueTransactionId',
        'type' => 'setType',
        'validationFacts' => 'setValidationFacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorisationType' => 'getAuthorisationType',
        'panEntryMode' => 'getPanEntryMode',
        'processingType' => 'getProcessingType',
        'relayedAuthorisationData' => 'getRelayedAuthorisationData',
        'schemeTraceId' => 'getSchemeTraceId',
        'schemeUniqueTransactionId' => 'getSchemeUniqueTransactionId',
        'type' => 'getType',
        'validationFacts' => 'getValidationFacts'
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

    public const PAN_ENTRY_MODE_CHIP = 'chip';
    public const PAN_ENTRY_MODE_COF = 'cof';
    public const PAN_ENTRY_MODE_CONTACTLESS = 'contactless';
    public const PAN_ENTRY_MODE_ECOMMERCE = 'ecommerce';
    public const PAN_ENTRY_MODE_MAGSTRIPE = 'magstripe';
    public const PAN_ENTRY_MODE_MANUAL = 'manual';
    public const PAN_ENTRY_MODE_TOKEN = 'token';
    public const PROCESSING_TYPE_ATM_WITHDRAW = 'atmWithdraw';
    public const PROCESSING_TYPE_BALANCE_INQUIRY = 'balanceInquiry';
    public const PROCESSING_TYPE_ECOMMERCE = 'ecommerce';
    public const PROCESSING_TYPE_MOTO = 'moto';
    public const PROCESSING_TYPE_POS = 'pos';
    public const PROCESSING_TYPE_PURCHASE_WITH_CASHBACK = 'purchaseWithCashback';
    public const PROCESSING_TYPE_RECURRING = 'recurring';
    public const PROCESSING_TYPE_TOKEN = 'token';
    public const TYPE_ISSUED_CARD = 'issuedCard';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPanEntryModeAllowableValues()
    {
        return [
            self::PAN_ENTRY_MODE_CHIP,
            self::PAN_ENTRY_MODE_COF,
            self::PAN_ENTRY_MODE_CONTACTLESS,
            self::PAN_ENTRY_MODE_ECOMMERCE,
            self::PAN_ENTRY_MODE_MAGSTRIPE,
            self::PAN_ENTRY_MODE_MANUAL,
            self::PAN_ENTRY_MODE_TOKEN,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingTypeAllowableValues()
    {
        return [
            self::PROCESSING_TYPE_ATM_WITHDRAW,
            self::PROCESSING_TYPE_BALANCE_INQUIRY,
            self::PROCESSING_TYPE_ECOMMERCE,
            self::PROCESSING_TYPE_MOTO,
            self::PROCESSING_TYPE_POS,
            self::PROCESSING_TYPE_PURCHASE_WITH_CASHBACK,
            self::PROCESSING_TYPE_RECURRING,
            self::PROCESSING_TYPE_TOKEN,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ISSUED_CARD,
        ];
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
        $this->setIfExists('authorisationType', $data ?? [], null);
        $this->setIfExists('panEntryMode', $data ?? [], null);
        $this->setIfExists('processingType', $data ?? [], null);
        $this->setIfExists('relayedAuthorisationData', $data ?? [], null);
        $this->setIfExists('schemeTraceId', $data ?? [], null);
        $this->setIfExists('schemeUniqueTransactionId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('validationFacts', $data ?? [], null);
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

        $allowedValues = $this->getPanEntryModeAllowableValues();
        if (!is_null($this->container['panEntryMode']) && !in_array($this->container['panEntryMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'panEntryMode', must be one of '%s'",
                $this->container['panEntryMode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProcessingTypeAllowableValues();
        if (!is_null($this->container['processingType']) && !in_array($this->container['processingType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'processingType', must be one of '%s'",
                $this->container['processingType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets authorisationType
     *
     * @return string|null
     */
    public function getAuthorisationType()
    {
        return $this->container['authorisationType'];
    }

    /**
     * Sets authorisationType
     *
     * @param string|null $authorisationType The authorisation type. For example, **defaultAuthorisation**, **preAuthorisation**, **finalAuthorisation**
     *
     * @return self
     */
    public function setAuthorisationType($authorisationType)
    {
        $this->container['authorisationType'] = $authorisationType;

        return $this;
    }

    /**
     * Gets panEntryMode
     *
     * @return string|null
     */
    public function getPanEntryMode()
    {
        return $this->container['panEntryMode'];
    }

    /**
     * Sets panEntryMode
     *
     * @param string|null $panEntryMode Indicates the method used for entering the PAN to initiate a transaction.  Possible values: **manual**, **chip**, **magstripe**, **contactless**, **cof**, **ecommerce**, **token**.
     *
     * @return self
     */
    public function setPanEntryMode($panEntryMode)
    {
        $allowedValues = $this->getPanEntryModeAllowableValues();
        if (!in_array($panEntryMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'panEntryMode', must be one of '%s'",
                    $panEntryMode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['panEntryMode'] = $panEntryMode;

        return $this;
    }

    /**
     * Gets processingType
     *
     * @return string|null
     */
    public function getProcessingType()
    {
        return $this->container['processingType'];
    }

    /**
     * Sets processingType
     *
     * @param string|null $processingType Contains information about how the payment was processed. For example, **ecommerce** for online or **pos** for in-person payments.
     *
     * @return self
     */
    public function setProcessingType($processingType)
    {
        $allowedValues = $this->getProcessingTypeAllowableValues();
        if (!in_array($processingType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'processingType', must be one of '%s'",
                    $processingType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processingType'] = $processingType;

        return $this;
    }

    /**
     * Gets relayedAuthorisationData
     *
     * @return \Adyen\Model\Transfers\RelayedAuthorisationData|null
     */
    public function getRelayedAuthorisationData()
    {
        return $this->container['relayedAuthorisationData'];
    }

    /**
     * Sets relayedAuthorisationData
     *
     * @param \Adyen\Model\Transfers\RelayedAuthorisationData|null $relayedAuthorisationData relayedAuthorisationData
     *
     * @return self
     */
    public function setRelayedAuthorisationData($relayedAuthorisationData)
    {
        $this->container['relayedAuthorisationData'] = $relayedAuthorisationData;

        return $this;
    }

    /**
     * Gets schemeTraceId
     *
     * @return string|null
     */
    public function getSchemeTraceId()
    {
        return $this->container['schemeTraceId'];
    }

    /**
     * Sets schemeTraceId
     *
     * @param string|null $schemeTraceId The identifier of the original payment. This ID is provided by the scheme and can be alphanumeric or numeric, depending on the scheme. The `schemeTraceID` should refer to an original `schemeUniqueTransactionID` provided in an earlier payment (not necessarily processed by Adyen). A `schemeTraceId` is typically available for authorization adjustments or recurring payments.
     *
     * @return self
     */
    public function setSchemeTraceId($schemeTraceId)
    {
        $this->container['schemeTraceId'] = $schemeTraceId;

        return $this;
    }

    /**
     * Gets schemeUniqueTransactionId
     *
     * @return string|null
     */
    public function getSchemeUniqueTransactionId()
    {
        return $this->container['schemeUniqueTransactionId'];
    }

    /**
     * Sets schemeUniqueTransactionId
     *
     * @param string|null $schemeUniqueTransactionId The unique identifier created by the scheme. This ID can be alphanumeric or numeric depending on the scheme.
     *
     * @return self
     */
    public function setSchemeUniqueTransactionId($schemeUniqueTransactionId)
    {
        $this->container['schemeUniqueTransactionId'] = $schemeUniqueTransactionId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type **issuedCard**
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets validationFacts
     *
     * @return \Adyen\Model\Transfers\TransferNotificationValidationFact[]|null
     */
    public function getValidationFacts()
    {
        return $this->container['validationFacts'];
    }

    /**
     * Sets validationFacts
     *
     * @param \Adyen\Model\Transfers\TransferNotificationValidationFact[]|null $validationFacts The evaluation of the validation facts. See [validation checks](https://docs.adyen.com/issuing/validation-checks) for more information.
     *
     * @return self
     */
    public function setValidationFacts($validationFacts)
    {
        $this->container['validationFacts'] = $validationFacts;

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

    public function toArray(): array
    {
        $array = [];
        foreach (self::$openAPITypes as $propertyName => $propertyType) {
            $propertyValue = $this[$propertyName];
            if ($propertyValue !== null) {
                // Check if the property value is an object and has a toArray() method
                if (is_object($propertyValue) && method_exists($propertyValue, 'toArray')) {
                    $array[$propertyName] = $propertyValue->toArray();
                // Check if it's type datetime
                } elseif ($propertyValue instanceof \DateTime) {
                    $array[$propertyName] = $propertyValue->format(DATE_ATOM);
                // If it's an array type we should check whether it contains objects and if so call toArray method
                } elseif (is_array($propertyValue)) {
                    $array[$propertyName] = array_map(function ($item) {
                        return $item instanceof ModelInterface ? $item->toArray() : $item;
                    }, $propertyValue);
                } else {
                    // Otherwise, directly assign the property value to the array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }
        return $array;
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
}
