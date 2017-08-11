<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ReturnManagement\Types\ReturnIdType $ReturnId
 * @property string $trackingNumber
 * @property string $carrierUsed
 * @property string $comments
 */
class ProvideTrackingInfoRequest extends \DTS\eBaySDK\ReturnManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ReturnId' => [
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ReturnIdType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnId'
        ],
        'trackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trackingNumber'
        ],
        'carrierUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierUsed'
        ],
        'comments' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comments'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'provideTrackingInfoRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
