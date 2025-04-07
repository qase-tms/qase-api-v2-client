<?php
/**
 * ResultCreate
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
 * ResultCreate Class Doc Comment
 *
 * @category Class
 * @package  Qase\APIClientV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResultCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResultCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'execution' => '\Qase\APIClientV2\Model\ResultExecution',
        'id' => 'string',
        'signature' => 'string',
        'testopsId' => 'int',
        'testopsIds' => 'int[]',
        'fields' => '\Qase\APIClientV2\Model\ResultCreateFields',
        'attachments' => 'string[]',
        'steps' => '\Qase\APIClientV2\Model\ResultStep[]',
        'stepsType' => '\Qase\APIClientV2\Model\ResultStepsType',
        'params' => 'array<string,string>',
        'paramGroups' => 'string[][]',
        'relations' => '\Qase\APIClientV2\Model\ResultRelations',
        'message' => 'string',
        'defect' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'execution' => null,
        'id' => null,
        'signature' => null,
        'testopsId' => 'int64',
        'testopsIds' => 'int64',
        'fields' => null,
        'attachments' => null,
        'steps' => null,
        'stepsType' => null,
        'params' => null,
        'paramGroups' => null,
        'relations' => null,
        'message' => null,
        'defect' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
        'execution' => false,
        'id' => false,
        'signature' => false,
        'testopsId' => true,
        'testopsIds' => true,
        'fields' => false,
        'attachments' => false,
        'steps' => false,
        'stepsType' => true,
        'params' => false,
        'paramGroups' => true,
        'relations' => true,
        'message' => true,
        'defect' => false
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
        'title' => 'title',
        'execution' => 'execution',
        'id' => 'id',
        'signature' => 'signature',
        'testopsId' => 'testops_id',
        'testopsIds' => 'testops_ids',
        'fields' => 'fields',
        'attachments' => 'attachments',
        'steps' => 'steps',
        'stepsType' => 'steps_type',
        'params' => 'params',
        'paramGroups' => 'param_groups',
        'relations' => 'relations',
        'message' => 'message',
        'defect' => 'defect'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'execution' => 'setExecution',
        'id' => 'setId',
        'signature' => 'setSignature',
        'testopsId' => 'setTestopsId',
        'testopsIds' => 'setTestopsIds',
        'fields' => 'setFields',
        'attachments' => 'setAttachments',
        'steps' => 'setSteps',
        'stepsType' => 'setStepsType',
        'params' => 'setParams',
        'paramGroups' => 'setParamGroups',
        'relations' => 'setRelations',
        'message' => 'setMessage',
        'defect' => 'setDefect'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'execution' => 'getExecution',
        'id' => 'getId',
        'signature' => 'getSignature',
        'testopsId' => 'getTestopsId',
        'testopsIds' => 'getTestopsIds',
        'fields' => 'getFields',
        'attachments' => 'getAttachments',
        'steps' => 'getSteps',
        'stepsType' => 'getStepsType',
        'params' => 'getParams',
        'paramGroups' => 'getParamGroups',
        'relations' => 'getRelations',
        'message' => 'getMessage',
        'defect' => 'getDefect'
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('execution', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('signature', $data ?? [], null);
        $this->setIfExists('testopsId', $data ?? [], null);
        $this->setIfExists('testopsIds', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('steps', $data ?? [], null);
        $this->setIfExists('stepsType', $data ?? [], null);
        $this->setIfExists('params', $data ?? [], null);
        $this->setIfExists('paramGroups', $data ?? [], null);
        $this->setIfExists('relations', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('defect', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['execution'] === null) {
            $invalidProperties[] = "'execution' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets execution
     *
     * @return \Qase\APIClientV2\Model\ResultExecution
     */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
     * Sets execution
     *
     * @param \Qase\APIClientV2\Model\ResultExecution $execution execution
     *
     * @return self
     */
    public function setExecution($execution)
    {
        if (is_null($execution)) {
            throw new \InvalidArgumentException('non-nullable execution cannot be null');
        }
        $this->container['execution'] = $execution;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id If passed, used as an idempotency key
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string|null $signature signature
     *
     * @return self
     */
    public function setSignature($signature)
    {
        if (is_null($signature)) {
            throw new \InvalidArgumentException('non-nullable signature cannot be null');
        }
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets testopsId
     *
     * @return int|null
     */
    public function getTestopsId()
    {
        return $this->container['testopsId'];
    }

    /**
     * Sets testopsId
     *
     * @param int|null $testopsId ID of the test case. Cannot be specified together with testopd_ids.
     *
     * @return self
     */
    public function setTestopsId($testopsId)
    {
        if (is_null($testopsId)) {
            array_push($this->openAPINullablesSetToNull, 'testopsId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('testopsId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['testopsId'] = $testopsId;

        return $this;
    }

    /**
     * Gets testopsIds
     *
     * @return int[]|null
     */
    public function getTestopsIds()
    {
        return $this->container['testopsIds'];
    }

    /**
     * Sets testopsIds
     *
     * @param int[]|null $testopsIds IDs of the test cases. Cannot be specified together with testopd_id.
     *
     * @return self
     */
    public function setTestopsIds($testopsIds)
    {
        if (is_null($testopsIds)) {
            array_push($this->openAPINullablesSetToNull, 'testopsIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('testopsIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['testopsIds'] = $testopsIds;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Qase\APIClientV2\Model\ResultCreateFields|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Qase\APIClientV2\Model\ResultCreateFields|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \Qase\APIClientV2\Model\ResultStep[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \Qase\APIClientV2\Model\ResultStep[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        if (is_null($steps)) {
            throw new \InvalidArgumentException('non-nullable steps cannot be null');
        }
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets stepsType
     *
     * @return \Qase\APIClientV2\Model\ResultStepsType|null
     */
    public function getStepsType()
    {
        return $this->container['stepsType'];
    }

    /**
     * Sets stepsType
     *
     * @param \Qase\APIClientV2\Model\ResultStepsType|null $stepsType stepsType
     *
     * @return self
     */
    public function setStepsType($stepsType)
    {
        if (is_null($stepsType)) {
            array_push($this->openAPINullablesSetToNull, 'stepsType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stepsType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stepsType'] = $stepsType;

        return $this;
    }

    /**
     * Gets params
     *
     * @return array<string,string>|null
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param array<string,string>|null $params params
     *
     * @return self
     */
    public function setParams($params)
    {
        if (is_null($params)) {
            throw new \InvalidArgumentException('non-nullable params cannot be null');
        }
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets paramGroups
     *
     * @return string[][]|null
     */
    public function getParamGroups()
    {
        return $this->container['paramGroups'];
    }

    /**
     * Sets paramGroups
     *
     * @param string[][]|null $paramGroups List parameter groups by name only. Add their values in the 'params' field
     *
     * @return self
     */
    public function setParamGroups($paramGroups)
    {
        if (is_null($paramGroups)) {
            array_push($this->openAPINullablesSetToNull, 'paramGroups');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paramGroups', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paramGroups'] = $paramGroups;

        return $this;
    }

    /**
     * Gets relations
     *
     * @return \Qase\APIClientV2\Model\ResultRelations|null
     */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
     * Sets relations
     *
     * @param \Qase\APIClientV2\Model\ResultRelations|null $relations relations
     *
     * @return self
     */
    public function setRelations($relations)
    {
        if (is_null($relations)) {
            array_push($this->openAPINullablesSetToNull, 'relations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('relations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['relations'] = $relations;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            array_push($this->openAPINullablesSetToNull, 'message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets defect
     *
     * @return bool|null
     */
    public function getDefect()
    {
        return $this->container['defect'];
    }

    /**
     * Sets defect
     *
     * @param bool|null $defect If true and the result is failed, the defect associated with the result will be created
     *
     * @return self
     */
    public function setDefect($defect)
    {
        if (is_null($defect)) {
            throw new \InvalidArgumentException('non-nullable defect cannot be null');
        }
        $this->container['defect'] = $defect;

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


