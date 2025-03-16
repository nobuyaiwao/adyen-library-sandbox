<?php

/**
 * Adyen Payout API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payout;

use \ArrayAccess;
use Adyen\Model\Payout\ObjectSerializer;

/**
 * ResponseAdditionalDataInstallments Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResponseAdditionalDataInstallments implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResponseAdditionalDataInstallments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'installmentPaymentDataInstallmentType' => 'string',
        'installmentPaymentDataOptionItemNrAnnualPercentageRate' => 'string',
        'installmentPaymentDataOptionItemNrFirstInstallmentAmount' => 'string',
        'installmentPaymentDataOptionItemNrInstallmentFee' => 'string',
        'installmentPaymentDataOptionItemNrInterestRate' => 'string',
        'installmentPaymentDataOptionItemNrMaximumNumberOfInstallments' => 'string',
        'installmentPaymentDataOptionItemNrMinimumNumberOfInstallments' => 'string',
        'installmentPaymentDataOptionItemNrNumberOfInstallments' => 'string',
        'installmentPaymentDataOptionItemNrSubsequentInstallmentAmount' => 'string',
        'installmentPaymentDataOptionItemNrTotalAmountDue' => 'string',
        'installmentPaymentDataPaymentOptions' => 'string',
        'installmentsValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'installmentPaymentDataInstallmentType' => null,
        'installmentPaymentDataOptionItemNrAnnualPercentageRate' => null,
        'installmentPaymentDataOptionItemNrFirstInstallmentAmount' => null,
        'installmentPaymentDataOptionItemNrInstallmentFee' => null,
        'installmentPaymentDataOptionItemNrInterestRate' => null,
        'installmentPaymentDataOptionItemNrMaximumNumberOfInstallments' => null,
        'installmentPaymentDataOptionItemNrMinimumNumberOfInstallments' => null,
        'installmentPaymentDataOptionItemNrNumberOfInstallments' => null,
        'installmentPaymentDataOptionItemNrSubsequentInstallmentAmount' => null,
        'installmentPaymentDataOptionItemNrTotalAmountDue' => null,
        'installmentPaymentDataPaymentOptions' => null,
        'installmentsValue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'installmentPaymentDataInstallmentType' => false,
        'installmentPaymentDataOptionItemNrAnnualPercentageRate' => false,
        'installmentPaymentDataOptionItemNrFirstInstallmentAmount' => false,
        'installmentPaymentDataOptionItemNrInstallmentFee' => false,
        'installmentPaymentDataOptionItemNrInterestRate' => false,
        'installmentPaymentDataOptionItemNrMaximumNumberOfInstallments' => false,
        'installmentPaymentDataOptionItemNrMinimumNumberOfInstallments' => false,
        'installmentPaymentDataOptionItemNrNumberOfInstallments' => false,
        'installmentPaymentDataOptionItemNrSubsequentInstallmentAmount' => false,
        'installmentPaymentDataOptionItemNrTotalAmountDue' => false,
        'installmentPaymentDataPaymentOptions' => false,
        'installmentsValue' => false
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
        'installmentPaymentDataInstallmentType' => 'installmentPaymentData.installmentType',
        'installmentPaymentDataOptionItemNrAnnualPercentageRate' => 'installmentPaymentData.option[itemNr].annualPercentageRate',
        'installmentPaymentDataOptionItemNrFirstInstallmentAmount' => 'installmentPaymentData.option[itemNr].firstInstallmentAmount',
        'installmentPaymentDataOptionItemNrInstallmentFee' => 'installmentPaymentData.option[itemNr].installmentFee',
        'installmentPaymentDataOptionItemNrInterestRate' => 'installmentPaymentData.option[itemNr].interestRate',
        'installmentPaymentDataOptionItemNrMaximumNumberOfInstallments' => 'installmentPaymentData.option[itemNr].maximumNumberOfInstallments',
        'installmentPaymentDataOptionItemNrMinimumNumberOfInstallments' => 'installmentPaymentData.option[itemNr].minimumNumberOfInstallments',
        'installmentPaymentDataOptionItemNrNumberOfInstallments' => 'installmentPaymentData.option[itemNr].numberOfInstallments',
        'installmentPaymentDataOptionItemNrSubsequentInstallmentAmount' => 'installmentPaymentData.option[itemNr].subsequentInstallmentAmount',
        'installmentPaymentDataOptionItemNrTotalAmountDue' => 'installmentPaymentData.option[itemNr].totalAmountDue',
        'installmentPaymentDataPaymentOptions' => 'installmentPaymentData.paymentOptions',
        'installmentsValue' => 'installments.value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'installmentPaymentDataInstallmentType' => 'setInstallmentPaymentDataInstallmentType',
        'installmentPaymentDataOptionItemNrAnnualPercentageRate' => 'setInstallmentPaymentDataOptionItemNrAnnualPercentageRate',
        'installmentPaymentDataOptionItemNrFirstInstallmentAmount' => 'setInstallmentPaymentDataOptionItemNrFirstInstallmentAmount',
        'installmentPaymentDataOptionItemNrInstallmentFee' => 'setInstallmentPaymentDataOptionItemNrInstallmentFee',
        'installmentPaymentDataOptionItemNrInterestRate' => 'setInstallmentPaymentDataOptionItemNrInterestRate',
        'installmentPaymentDataOptionItemNrMaximumNumberOfInstallments' => 'setInstallmentPaymentDataOptionItemNrMaximumNumberOfInstallments',
        'installmentPaymentDataOptionItemNrMinimumNumberOfInstallments' => 'setInstallmentPaymentDataOptionItemNrMinimumNumberOfInstallments',
        'installmentPaymentDataOptionItemNrNumberOfInstallments' => 'setInstallmentPaymentDataOptionItemNrNumberOfInstallments',
        'installmentPaymentDataOptionItemNrSubsequentInstallmentAmount' => 'setInstallmentPaymentDataOptionItemNrSubsequentInstallmentAmount',
        'installmentPaymentDataOptionItemNrTotalAmountDue' => 'setInstallmentPaymentDataOptionItemNrTotalAmountDue',
        'installmentPaymentDataPaymentOptions' => 'setInstallmentPaymentDataPaymentOptions',
        'installmentsValue' => 'setInstallmentsValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'installmentPaymentDataInstallmentType' => 'getInstallmentPaymentDataInstallmentType',
        'installmentPaymentDataOptionItemNrAnnualPercentageRate' => 'getInstallmentPaymentDataOptionItemNrAnnualPercentageRate',
        'installmentPaymentDataOptionItemNrFirstInstallmentAmount' => 'getInstallmentPaymentDataOptionItemNrFirstInstallmentAmount',
        'installmentPaymentDataOptionItemNrInstallmentFee' => 'getInstallmentPaymentDataOptionItemNrInstallmentFee',
        'installmentPaymentDataOptionItemNrInterestRate' => 'getInstallmentPaymentDataOptionItemNrInterestRate',
        'installmentPaymentDataOptionItemNrMaximumNumberOfInstallments' => 'getInstallmentPaymentDataOptionItemNrMaximumNumberOfInstallments',
        'installmentPaymentDataOptionItemNrMinimumNumberOfInstallments' => 'getInstallmentPaymentDataOptionItemNrMinimumNumberOfInstallments',
        'installmentPaymentDataOptionItemNrNumberOfInstallments' => 'getInstallmentPaymentDataOptionItemNrNumberOfInstallments',
        'installmentPaymentDataOptionItemNrSubsequentInstallmentAmount' => 'getInstallmentPaymentDataOptionItemNrSubsequentInstallmentAmount',
        'installmentPaymentDataOptionItemNrTotalAmountDue' => 'getInstallmentPaymentDataOptionItemNrTotalAmountDue',
        'installmentPaymentDataPaymentOptions' => 'getInstallmentPaymentDataPaymentOptions',
        'installmentsValue' => 'getInstallmentsValue'
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
        $this->setIfExists('installmentPaymentDataInstallmentType', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrAnnualPercentageRate', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrFirstInstallmentAmount', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrInstallmentFee', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrInterestRate', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrMaximumNumberOfInstallments', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrMinimumNumberOfInstallments', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrNumberOfInstallments', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrSubsequentInstallmentAmount', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataOptionItemNrTotalAmountDue', $data ?? [], null);
        $this->setIfExists('installmentPaymentDataPaymentOptions', $data ?? [], null);
        $this->setIfExists('installmentsValue', $data ?? [], null);
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
     * Gets installmentPaymentDataInstallmentType
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataInstallmentType()
    {
        return $this->container['installmentPaymentDataInstallmentType'];
    }

    /**
     * Sets installmentPaymentDataInstallmentType
     *
     * @param string|null $installmentPaymentDataInstallmentType Type of installment. The value of `installmentType` should be **IssuerFinanced**.
     *
     * @return self
     */
    public function setInstallmentPaymentDataInstallmentType($installmentPaymentDataInstallmentType)
    {
        $this->container['installmentPaymentDataInstallmentType'] = $installmentPaymentDataInstallmentType;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrAnnualPercentageRate
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrAnnualPercentageRate()
    {
        return $this->container['installmentPaymentDataOptionItemNrAnnualPercentageRate'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrAnnualPercentageRate
     *
     * @param string|null $installmentPaymentDataOptionItemNrAnnualPercentageRate Annual interest rate.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrAnnualPercentageRate($installmentPaymentDataOptionItemNrAnnualPercentageRate)
    {
        $this->container['installmentPaymentDataOptionItemNrAnnualPercentageRate'] = $installmentPaymentDataOptionItemNrAnnualPercentageRate;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrFirstInstallmentAmount
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrFirstInstallmentAmount()
    {
        return $this->container['installmentPaymentDataOptionItemNrFirstInstallmentAmount'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrFirstInstallmentAmount
     *
     * @param string|null $installmentPaymentDataOptionItemNrFirstInstallmentAmount First Installment Amount in minor units.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrFirstInstallmentAmount($installmentPaymentDataOptionItemNrFirstInstallmentAmount)
    {
        $this->container['installmentPaymentDataOptionItemNrFirstInstallmentAmount'] = $installmentPaymentDataOptionItemNrFirstInstallmentAmount;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrInstallmentFee
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrInstallmentFee()
    {
        return $this->container['installmentPaymentDataOptionItemNrInstallmentFee'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrInstallmentFee
     *
     * @param string|null $installmentPaymentDataOptionItemNrInstallmentFee Installment fee amount in minor units.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrInstallmentFee($installmentPaymentDataOptionItemNrInstallmentFee)
    {
        $this->container['installmentPaymentDataOptionItemNrInstallmentFee'] = $installmentPaymentDataOptionItemNrInstallmentFee;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrInterestRate
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrInterestRate()
    {
        return $this->container['installmentPaymentDataOptionItemNrInterestRate'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrInterestRate
     *
     * @param string|null $installmentPaymentDataOptionItemNrInterestRate Interest rate for the installment period.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrInterestRate($installmentPaymentDataOptionItemNrInterestRate)
    {
        $this->container['installmentPaymentDataOptionItemNrInterestRate'] = $installmentPaymentDataOptionItemNrInterestRate;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrMaximumNumberOfInstallments
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrMaximumNumberOfInstallments()
    {
        return $this->container['installmentPaymentDataOptionItemNrMaximumNumberOfInstallments'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrMaximumNumberOfInstallments
     *
     * @param string|null $installmentPaymentDataOptionItemNrMaximumNumberOfInstallments Maximum number of installments possible for this payment.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrMaximumNumberOfInstallments($installmentPaymentDataOptionItemNrMaximumNumberOfInstallments)
    {
        $this->container['installmentPaymentDataOptionItemNrMaximumNumberOfInstallments'] = $installmentPaymentDataOptionItemNrMaximumNumberOfInstallments;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrMinimumNumberOfInstallments
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrMinimumNumberOfInstallments()
    {
        return $this->container['installmentPaymentDataOptionItemNrMinimumNumberOfInstallments'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrMinimumNumberOfInstallments
     *
     * @param string|null $installmentPaymentDataOptionItemNrMinimumNumberOfInstallments Minimum number of installments possible for this payment.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrMinimumNumberOfInstallments($installmentPaymentDataOptionItemNrMinimumNumberOfInstallments)
    {
        $this->container['installmentPaymentDataOptionItemNrMinimumNumberOfInstallments'] = $installmentPaymentDataOptionItemNrMinimumNumberOfInstallments;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrNumberOfInstallments
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrNumberOfInstallments()
    {
        return $this->container['installmentPaymentDataOptionItemNrNumberOfInstallments'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrNumberOfInstallments
     *
     * @param string|null $installmentPaymentDataOptionItemNrNumberOfInstallments Total number of installments possible for this payment.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrNumberOfInstallments($installmentPaymentDataOptionItemNrNumberOfInstallments)
    {
        $this->container['installmentPaymentDataOptionItemNrNumberOfInstallments'] = $installmentPaymentDataOptionItemNrNumberOfInstallments;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrSubsequentInstallmentAmount
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrSubsequentInstallmentAmount()
    {
        return $this->container['installmentPaymentDataOptionItemNrSubsequentInstallmentAmount'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrSubsequentInstallmentAmount
     *
     * @param string|null $installmentPaymentDataOptionItemNrSubsequentInstallmentAmount Subsequent Installment Amount in minor units.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrSubsequentInstallmentAmount($installmentPaymentDataOptionItemNrSubsequentInstallmentAmount)
    {
        $this->container['installmentPaymentDataOptionItemNrSubsequentInstallmentAmount'] = $installmentPaymentDataOptionItemNrSubsequentInstallmentAmount;

        return $this;
    }

    /**
     * Gets installmentPaymentDataOptionItemNrTotalAmountDue
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataOptionItemNrTotalAmountDue()
    {
        return $this->container['installmentPaymentDataOptionItemNrTotalAmountDue'];
    }

    /**
     * Sets installmentPaymentDataOptionItemNrTotalAmountDue
     *
     * @param string|null $installmentPaymentDataOptionItemNrTotalAmountDue Total amount in minor units.
     *
     * @return self
     */
    public function setInstallmentPaymentDataOptionItemNrTotalAmountDue($installmentPaymentDataOptionItemNrTotalAmountDue)
    {
        $this->container['installmentPaymentDataOptionItemNrTotalAmountDue'] = $installmentPaymentDataOptionItemNrTotalAmountDue;

        return $this;
    }

    /**
     * Gets installmentPaymentDataPaymentOptions
     *
     * @return string|null
     */
    public function getInstallmentPaymentDataPaymentOptions()
    {
        return $this->container['installmentPaymentDataPaymentOptions'];
    }

    /**
     * Sets installmentPaymentDataPaymentOptions
     *
     * @param string|null $installmentPaymentDataPaymentOptions Possible values: * PayInInstallmentsOnly * PayInFullOnly * PayInFullOrInstallments
     *
     * @return self
     */
    public function setInstallmentPaymentDataPaymentOptions($installmentPaymentDataPaymentOptions)
    {
        $this->container['installmentPaymentDataPaymentOptions'] = $installmentPaymentDataPaymentOptions;

        return $this;
    }

    /**
     * Gets installmentsValue
     *
     * @return string|null
     */
    public function getInstallmentsValue()
    {
        return $this->container['installmentsValue'];
    }

    /**
     * Sets installmentsValue
     *
     * @param string|null $installmentsValue The number of installments that the payment amount should be charged with.  Example: 5 > Only relevant for card payments in countries that support installments.
     *
     * @return self
     */
    public function setInstallmentsValue($installmentsValue)
    {
        $this->container['installmentsValue'] = $installmentsValue;

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
