<?php

/**
 * Adyen Stored Value API
 *
 * The version of the OpenAPI document: 46
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\StoredValue;

use \ArrayAccess;
use Adyen\Model\StoredValue\ObjectSerializer;

/**
 * StoredValueVoidResponse Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StoredValueVoidResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoredValueVoidResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentBalance' => '\Adyen\Model\StoredValue\Amount',
        'pspReference' => 'string',
        'refusalReason' => 'string',
        'resultCode' => 'string',
        'thirdPartyRefusalReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currentBalance' => null,
        'pspReference' => null,
        'refusalReason' => null,
        'resultCode' => null,
        'thirdPartyRefusalReason' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'currentBalance' => false,
        'pspReference' => false,
        'refusalReason' => false,
        'resultCode' => false,
        'thirdPartyRefusalReason' => false
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
        'currentBalance' => 'currentBalance',
        'pspReference' => 'pspReference',
        'refusalReason' => 'refusalReason',
        'resultCode' => 'resultCode',
        'thirdPartyRefusalReason' => 'thirdPartyRefusalReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentBalance' => 'setCurrentBalance',
        'pspReference' => 'setPspReference',
        'refusalReason' => 'setRefusalReason',
        'resultCode' => 'setResultCode',
        'thirdPartyRefusalReason' => 'setThirdPartyRefusalReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentBalance' => 'getCurrentBalance',
        'pspReference' => 'getPspReference',
        'refusalReason' => 'getRefusalReason',
        'resultCode' => 'getResultCode',
        'thirdPartyRefusalReason' => 'getThirdPartyRefusalReason'
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

    public const RESULT_CODE_SUCCESS = 'Success';
    public const RESULT_CODE_REFUSED = 'Refused';
    public const RESULT_CODE_ERROR = 'Error';
    public const RESULT_CODE_NOT_ENOUGH_BALANCE = 'NotEnoughBalance';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultCodeAllowableValues()
    {
        return [
            self::RESULT_CODE_SUCCESS,
            self::RESULT_CODE_REFUSED,
            self::RESULT_CODE_ERROR,
            self::RESULT_CODE_NOT_ENOUGH_BALANCE,
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
        $this->setIfExists('currentBalance', $data ?? [], null);
        $this->setIfExists('pspReference', $data ?? [], null);
        $this->setIfExists('refusalReason', $data ?? [], null);
        $this->setIfExists('resultCode', $data ?? [], null);
        $this->setIfExists('thirdPartyRefusalReason', $data ?? [], null);
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

        $allowedValues = $this->getResultCodeAllowableValues();
        if (!is_null($this->container['resultCode']) && !in_array($this->container['resultCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resultCode', must be one of '%s'",
                $this->container['resultCode'],
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
     * Gets currentBalance
     *
     * @return \Adyen\Model\StoredValue\Amount|null
     */
    public function getCurrentBalance()
    {
        return $this->container['currentBalance'];
    }

    /**
     * Sets currentBalance
     *
     * @param \Adyen\Model\StoredValue\Amount|null $currentBalance currentBalance
     *
     * @return self
     */
    public function setCurrentBalance($currentBalance)
    {
        $this->container['currentBalance'] = $currentBalance;

        return $this;
    }

    /**
     * Gets pspReference
     *
     * @return string|null
     */
    public function getPspReference()
    {
        return $this->container['pspReference'];
    }

    /**
     * Sets pspReference
     *
     * @param string|null $pspReference Adyen's 16-character string reference associated with the transaction/request. This value is globally unique; quote it when communicating with us about this request.
     *
     * @return self
     */
    public function setPspReference($pspReference)
    {
        $this->container['pspReference'] = $pspReference;

        return $this;
    }

    /**
     * Gets refusalReason
     *
     * @return string|null
     */
    public function getRefusalReason()
    {
        return $this->container['refusalReason'];
    }

    /**
     * Sets refusalReason
     *
     * @param string|null $refusalReason If the transaction is refused or an error occurs, this field holds Adyen's mapped reason for the refusal or a description of the error.  When a transaction fails, the authorisation response includes `resultCode` and `refusalReason` values.
     *
     * @return self
     */
    public function setRefusalReason($refusalReason)
    {
        $this->container['refusalReason'] = $refusalReason;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string|null $resultCode The result of the payment. Possible values:  * **Success** – The operation has been completed successfully.  * **Refused** – The operation was refused. The reason is given in the `refusalReason` field.  * **Error** – There was an error when the operation was processed. The reason is given in the `refusalReason` field.  * **NotEnoughBalance** – The amount on the payment method is lower than the amount given in the request. Only applicable to balance checks.
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $allowedValues = $this->getResultCodeAllowableValues();
        if (!in_array($resultCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resultCode', must be one of '%s'",
                    $resultCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets thirdPartyRefusalReason
     *
     * @return string|null
     */
    public function getThirdPartyRefusalReason()
    {
        return $this->container['thirdPartyRefusalReason'];
    }

    /**
     * Sets thirdPartyRefusalReason
     *
     * @param string|null $thirdPartyRefusalReason Raw refusal reason received from the third party, where available
     *
     * @return self
     */
    public function setThirdPartyRefusalReason($thirdPartyRefusalReason)
    {
        $this->container['thirdPartyRefusalReason'] = $thirdPartyRefusalReason;

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
