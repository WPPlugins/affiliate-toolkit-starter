<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property string $OriginatingPostalCode
 * @property \DTS\eBaySDK\MerchantData\Enums\MeasurementSystemCodeType $MeasurementUnit
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $PackageDepth
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $PackageLength
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $PackageWidth
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $PackagingHandlingCosts
 * @property boolean $ShippingIrregular
 * @property \DTS\eBaySDK\MerchantData\Enums\ShippingPackageCodeType $ShippingPackage
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $WeightMajor
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $WeightMinor
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $InternationalPackagingHandlingCosts
 */
class CalculatedShippingRateType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OriginatingPostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginatingPostalCode'
        ],
        'MeasurementUnit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MeasurementUnit'
        ],
        'PackageDepth' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ],
        'PackageLength' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ],
        'PackageWidth' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ],
        'PackagingHandlingCosts' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackagingHandlingCosts'
        ],
        'ShippingIrregular' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingIrregular'
        ],
        'ShippingPackage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ],
        'WeightMajor' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ],
        'WeightMinor' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
        ],
        'InternationalPackagingHandlingCosts' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalPackagingHandlingCosts'
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
