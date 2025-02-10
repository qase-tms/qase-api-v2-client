<?php
/**
 * ResultCreateFields
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Qase\APIClientV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Qase.io TestOps API v2
 *
 * Qase TestOps API v2 Specification.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@qase.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Qase\APIClientV2\Model;

use \ArrayAccess;
use \Qase\APIClientV2\ObjectSerializer;

/**
 * ResultCreateFields Class Doc Comment
 *
 * @category Class
 * @package  Qase\APIClientV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResultCreateFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResultCreate_fields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'author' => 'string',
        'description' => 'string',
        'preconditions' => 'string',
        'postconditions' => 'string',
        'layer' => 'string',
        'severity' => 'string',
        'priority' => 'string',
        'behavior' => 'string',
        'type' => 'string',
        'muted' => 'string',
        'isFlaky' => 'string',
        'executedBy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'author' => null,
        'description' => null,
        'preconditions' => null,
        'postconditions' => null,
        'layer' => null,
        'severity' => null,
        'priority' => null,
        'behavior' => null,
        'type' => null,
        'muted' => null,
        'isFlaky' => null,
        'executedBy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'author' => false,
        'description' => false,
        'preconditions' => false,
        'postconditions' => false,
        'layer' => false,
        'severity' => false,
        'priority' => false,
        'behavior' => false,
        'type' => false,
        'muted' => false,
        'isFlaky' => false,
        'executedBy' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
        'author' => 'author',
        'description' => 'description',
        'preconditions' => 'preconditions',
        'postconditions' => 'postconditions',
        'layer' => 'layer',
        'severity' => 'severity',
        'priority' => 'priority',
        'behavior' => 'behavior',
        'type' => 'type',
        'muted' => 'muted',
        'isFlaky' => 'is_flaky',
        'executedBy' => 'executed_by'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author' => 'setAuthor',
        'description' => 'setDescription',
        'preconditions' => 'setPreconditions',
        'postconditions' => 'setPostconditions',
        'layer' => 'setLayer',
        'severity' => 'setSeverity',
        'priority' => 'setPriority',
        'behavior' => 'setBehavior',
        'type' => 'setType',
        'muted' => 'setMuted',
        'isFlaky' => 'setIsFlaky',
        'executedBy' => 'setExecutedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author' => 'getAuthor',
        'description' => 'getDescription',
        'preconditions' => 'getPreconditions',
        'postconditions' => 'getPostconditions',
        'layer' => 'getLayer',
        'severity' => 'getSeverity',
        'priority' => 'getPriority',
        'behavior' => 'getBehavior',
        'type' => 'getType',
        'muted' => 'getMuted',
        'isFlaky' => 'getIsFlaky',
        'executedBy' => 'getExecutedBy'
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
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('preconditions', $data ?? [], null);
        $this->setIfExists('postconditions', $data ?? [], null);
        $this->setIfExists('layer', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('behavior', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('muted', $data ?? [], null);
        $this->setIfExists('isFlaky', $data ?? [], null);
        $this->setIfExists('executedBy', $data ?? [], null);
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
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author Author of the related test case (member id, name or email). If set and test case auto-creation is enabled, the author will be used to create the test case
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets preconditions
     *
     * @return string|null
     */
    public function getPreconditions()
    {
        return $this->container['preconditions'];
    }

    /**
     * Sets preconditions
     *
     * @param string|null $preconditions preconditions
     *
     * @return self
     */
    public function setPreconditions($preconditions)
    {
        if (is_null($preconditions)) {
            throw new \InvalidArgumentException('non-nullable preconditions cannot be null');
        }
        $this->container['preconditions'] = $preconditions;

        return $this;
    }

    /**
     * Gets postconditions
     *
     * @return string|null
     */
    public function getPostconditions()
    {
        return $this->container['postconditions'];
    }

    /**
     * Sets postconditions
     *
     * @param string|null $postconditions postconditions
     *
     * @return self
     */
    public function setPostconditions($postconditions)
    {
        if (is_null($postconditions)) {
            throw new \InvalidArgumentException('non-nullable postconditions cannot be null');
        }
        $this->container['postconditions'] = $postconditions;

        return $this;
    }

    /**
     * Gets layer
     *
     * @return string|null
     */
    public function getLayer()
    {
        return $this->container['layer'];
    }

    /**
     * Sets layer
     *
     * @param string|null $layer layer
     *
     * @return self
     */
    public function setLayer($layer)
    {
        if (is_null($layer)) {
            throw new \InvalidArgumentException('non-nullable layer cannot be null');
        }
        $this->container['layer'] = $layer;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets behavior
     *
     * @return string|null
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
     * Sets behavior
     *
     * @param string|null $behavior behavior
     *
     * @return self
     */
    public function setBehavior($behavior)
    {
        if (is_null($behavior)) {
            throw new \InvalidArgumentException('non-nullable behavior cannot be null');
        }
        $this->container['behavior'] = $behavior;

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
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets muted
     *
     * @return string|null
     */
    public function getMuted()
    {
        return $this->container['muted'];
    }

    /**
     * Sets muted
     *
     * @param string|null $muted muted
     *
     * @return self
     */
    public function setMuted($muted)
    {
        if (is_null($muted)) {
            throw new \InvalidArgumentException('non-nullable muted cannot be null');
        }
        $this->container['muted'] = $muted;

        return $this;
    }

    /**
     * Gets isFlaky
     *
     * @return string|null
     */
    public function getIsFlaky()
    {
        return $this->container['isFlaky'];
    }

    /**
     * Sets isFlaky
     *
     * @param string|null $isFlaky isFlaky
     *
     * @return self
     */
    public function setIsFlaky($isFlaky)
    {
        if (is_null($isFlaky)) {
            throw new \InvalidArgumentException('non-nullable isFlaky cannot be null');
        }
        $this->container['isFlaky'] = $isFlaky;

        return $this;
    }

    /**
     * Gets executedBy
     *
     * @return string|null
     */
    public function getExecutedBy()
    {
        return $this->container['executedBy'];
    }

    /**
     * Sets executedBy
     *
     * @param string|null $executedBy User who executed the test (member id, name or email)
     *
     * @return self
     */
    public function setExecutedBy($executedBy)
    {
        if (is_null($executedBy)) {
            throw new \InvalidArgumentException('non-nullable executedBy cannot be null');
        }
        $this->container['executedBy'] = $executedBy;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


