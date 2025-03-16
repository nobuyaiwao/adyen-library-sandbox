<?php

/**
 * Configuration API
 *
 * The version of the OpenAPI document: 2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\BalancePlatform;

use \ArrayAccess;
use Adyen\Model\BalancePlatform\ObjectSerializer;

/**
 * Card Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Card implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authentication' => '\Adyen\Model\BalancePlatform\Authentication',
        'bin' => 'string',
        'brand' => 'string',
        'brandVariant' => 'string',
        'cardholderName' => 'string',
        'configuration' => '\Adyen\Model\BalancePlatform\CardConfiguration',
        'cvc' => 'string',
        'deliveryContact' => '\Adyen\Model\BalancePlatform\DeliveryContact',
        'expiration' => '\Adyen\Model\BalancePlatform\Expiry',
        'formFactor' => 'string',
        'lastFour' => 'string',
        'number' => 'string',
        'threeDSecure' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authentication' => null,
        'bin' => null,
        'brand' => null,
        'brandVariant' => null,
        'cardholderName' => null,
        'configuration' => null,
        'cvc' => null,
        'deliveryContact' => null,
        'expiration' => null,
        'formFactor' => null,
        'lastFour' => null,
        'number' => null,
        'threeDSecure' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'authentication' => false,
        'bin' => false,
        'brand' => false,
        'brandVariant' => false,
        'cardholderName' => false,
        'configuration' => false,
        'cvc' => false,
        'deliveryContact' => false,
        'expiration' => false,
        'formFactor' => false,
        'lastFour' => false,
        'number' => false,
        'threeDSecure' => false
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
        'authentication' => 'authentication',
        'bin' => 'bin',
        'brand' => 'brand',
        'brandVariant' => 'brandVariant',
        'cardholderName' => 'cardholderName',
        'configuration' => 'configuration',
        'cvc' => 'cvc',
        'deliveryContact' => 'deliveryContact',
        'expiration' => 'expiration',
        'formFactor' => 'formFactor',
        'lastFour' => 'lastFour',
        'number' => 'number',
        'threeDSecure' => 'threeDSecure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication' => 'setAuthentication',
        'bin' => 'setBin',
        'brand' => 'setBrand',
        'brandVariant' => 'setBrandVariant',
        'cardholderName' => 'setCardholderName',
        'configuration' => 'setConfiguration',
        'cvc' => 'setCvc',
        'deliveryContact' => 'setDeliveryContact',
        'expiration' => 'setExpiration',
        'formFactor' => 'setFormFactor',
        'lastFour' => 'setLastFour',
        'number' => 'setNumber',
        'threeDSecure' => 'setThreeDSecure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication' => 'getAuthentication',
        'bin' => 'getBin',
        'brand' => 'getBrand',
        'brandVariant' => 'getBrandVariant',
        'cardholderName' => 'getCardholderName',
        'configuration' => 'getConfiguration',
        'cvc' => 'getCvc',
        'deliveryContact' => 'getDeliveryContact',
        'expiration' => 'getExpiration',
        'formFactor' => 'getFormFactor',
        'lastFour' => 'getLastFour',
        'number' => 'getNumber',
        'threeDSecure' => 'getThreeDSecure'
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

    public const FORM_FACTOR_PHYSICAL = 'physical';
    public const FORM_FACTOR_UNKNOWN = 'unknown';
    public const FORM_FACTOR_VIRTUAL = 'virtual';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormFactorAllowableValues()
    {
        return [
            self::FORM_FACTOR_PHYSICAL,
            self::FORM_FACTOR_UNKNOWN,
            self::FORM_FACTOR_VIRTUAL,
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
        $this->setIfExists('authentication', $data ?? [], null);
        $this->setIfExists('bin', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('brandVariant', $data ?? [], null);
        $this->setIfExists('cardholderName', $data ?? [], null);
        $this->setIfExists('configuration', $data ?? [], null);
        $this->setIfExists('cvc', $data ?? [], null);
        $this->setIfExists('deliveryContact', $data ?? [], null);
        $this->setIfExists('expiration', $data ?? [], null);
        $this->setIfExists('formFactor', $data ?? [], null);
        $this->setIfExists('lastFour', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('threeDSecure', $data ?? [], null);
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

        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
        }
        if ($this->container['brandVariant'] === null) {
            $invalidProperties[] = "'brandVariant' can't be null";
        }
        if ($this->container['cardholderName'] === null) {
            $invalidProperties[] = "'cardholderName' can't be null";
        }
        if ($this->container['formFactor'] === null) {
            $invalidProperties[] = "'formFactor' can't be null";
        }
        $allowedValues = $this->getFormFactorAllowableValues();
        if (!is_null($this->container['formFactor']) && !in_array($this->container['formFactor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'formFactor', must be one of '%s'",
                $this->container['formFactor'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
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
     * Gets authentication
     *
     * @return \Adyen\Model\BalancePlatform\Authentication|null
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     *
     * @param \Adyen\Model\BalancePlatform\Authentication|null $authentication authentication
     *
     * @return self
     */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin The bank identification number (BIN) of the card number.
     *
     * @return self
     */
    public function setBin($bin)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand The brand of the physical or the virtual card. Possible values: **visa**, **mc**.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets brandVariant
     *
     * @return string
     */
    public function getBrandVariant()
    {
        return $this->container['brandVariant'];
    }

    /**
     * Sets brandVariant
     *
     * @param string $brandVariant The brand variant of the physical or the virtual card. For example, **visadebit** or **mcprepaid**. >Reach out to your Adyen contact to get the values relevant for your integration.
     *
     * @return self
     */
    public function setBrandVariant($brandVariant)
    {
        $this->container['brandVariant'] = $brandVariant;

        return $this;
    }

    /**
     * Gets cardholderName
     *
     * @return string
     */
    public function getCardholderName()
    {
        return $this->container['cardholderName'];
    }

    /**
     * Sets cardholderName
     *
     * @param string $cardholderName The name of the cardholder.  Maximum length: 26 characters.
     *
     * @return self
     */
    public function setCardholderName($cardholderName)
    {
        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \Adyen\Model\BalancePlatform\CardConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Adyen\Model\BalancePlatform\CardConfiguration|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets cvc
     *
     * @return string|null
     */
    public function getCvc()
    {
        return $this->container['cvc'];
    }

    /**
     * Sets cvc
     *
     * @param string|null $cvc The CVC2 value of the card. > The CVC2 is not sent by default. This is only returned in the `POST` response for single-use virtual cards.
     *
     * @return self
     */
    public function setCvc($cvc)
    {
        $this->container['cvc'] = $cvc;

        return $this;
    }

    /**
     * Gets deliveryContact
     *
     * @return \Adyen\Model\BalancePlatform\DeliveryContact|null
     */
    public function getDeliveryContact()
    {
        return $this->container['deliveryContact'];
    }

    /**
     * Sets deliveryContact
     *
     * @param \Adyen\Model\BalancePlatform\DeliveryContact|null $deliveryContact deliveryContact
     *
     * @return self
     */
    public function setDeliveryContact($deliveryContact)
    {
        $this->container['deliveryContact'] = $deliveryContact;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \Adyen\Model\BalancePlatform\Expiry|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \Adyen\Model\BalancePlatform\Expiry|null $expiration expiration
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets formFactor
     *
     * @return string
     */
    public function getFormFactor()
    {
        return $this->container['formFactor'];
    }

    /**
     * Sets formFactor
     *
     * @param string $formFactor The form factor of the card. Possible values: **virtual**, **physical**.
     *
     * @return self
     */
    public function setFormFactor($formFactor)
    {
        $allowedValues = $this->getFormFactorAllowableValues();
        if (!in_array($formFactor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'formFactor', must be one of '%s'",
                    $formFactor,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['formFactor'] = $formFactor;

        return $this;
    }

    /**
     * Gets lastFour
     *
     * @return string|null
     */
    public function getLastFour()
    {
        return $this->container['lastFour'];
    }

    /**
     * Sets lastFour
     *
     * @param string|null $lastFour Last last four digits of the card number.
     *
     * @return self
     */
    public function setLastFour($lastFour)
    {
        $this->container['lastFour'] = $lastFour;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The primary account number (PAN) of the card. > The PAN is masked by default and returned only for single-use virtual cards.
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets threeDSecure
     *
     * @return string|null
     */
    public function getThreeDSecure()
    {
        return $this->container['threeDSecure'];
    }

    /**
     * Sets threeDSecure
     *
     * @param string|null $threeDSecure Allocates a specific product range for either a physical or a virtual card. Possible values: **fullySupported**, **secureCorporate**. >Reach out to your Adyen contact to get the values relevant for your integration.
     *
     * @return self
     */
    public function setThreeDSecure($threeDSecure)
    {
        $this->container['threeDSecure'] = $threeDSecure;

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
