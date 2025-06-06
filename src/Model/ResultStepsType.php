<?php
/**
 * ResultStepsType
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
use \Qase\APIClientV2\ObjectSerializer;

/**
 * ResultStepsType Class Doc Comment
 *
 * @category Class
 * @package  Qase\APIClientV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResultStepsType
{
    /**
     * Possible values of this enum
     */
    public const CLASSIC = 'classic';

    public const GHERKIN = 'gherkin';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLASSIC,
            self::GHERKIN
        ];
    }
}


