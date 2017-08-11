<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ReturnManagement\Enums\ShipmentStatusType $shipmentStatus
 * @property string $trackingNumber
 * @property string $carrierUsed
 * @property \DateTime $deliveryDate
 * @property \DTS\eBaySDK\ReturnManagement\Types\Amount $shippingCost
 * @property \DTS\eBaySDK\ReturnManagement\Types\Address $shippingAddress
 * @property string $returnMerchandiseAuthorization
 * @property \DateTime $minEstDeliveryDate
 * @property \DateTime $maxEstDeliveryDate
 */
class ShipmentType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'shipmentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipmentStatus'
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
        'deliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDate'
        ],
        'shippingCost' => [
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost'
        ],
        'shippingAddress' => [
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\Address',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingAddress'
        ],
        'returnMerchandiseAuthorization' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnMerchandiseAuthorization'
        ],
        'minEstDeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minEstDeliveryDate'
        ],
        'maxEstDeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxEstDeliveryDate'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
