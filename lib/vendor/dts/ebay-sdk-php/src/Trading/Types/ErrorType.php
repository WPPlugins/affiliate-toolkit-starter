<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $ShortMessage
 * @property string $LongMessage
 * @property string $ErrorCode
 * @property boolean $UserDisplayHint
 * @property \DTS\eBaySDK\Trading\Enums\SeverityCodeType $SeverityCode
 * @property \DTS\eBaySDK\Trading\Types\ErrorParameterType[] $ErrorParameters
 * @property \DTS\eBaySDK\Trading\Enums\ErrorClassificationCodeType $ErrorClassification
 */
class ErrorType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShortMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShortMessage'
        ],
        'LongMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LongMessage'
        ],
        'ErrorCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorCode'
        ],
        'UserDisplayHint' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserDisplayHint'
        ],
        'SeverityCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SeverityCode'
        ],
        'ErrorParameters' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ErrorParameterType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ErrorParameters'
        ],
        'ErrorClassification' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorClassification'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
