<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $CategoryVersion
 * @property \DateTime $UpdateTime
 * @property \DTS\eBaySDK\Trading\Types\CategoryFeatureType[] $Category
 * @property \DTS\eBaySDK\Trading\Types\SiteDefaultsType $SiteDefaults
 * @property \DTS\eBaySDK\Trading\Types\FeatureDefinitionsType $FeatureDefinitions
 */
class GetCategoryFeaturesResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CategoryVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryVersion'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ],
        'Category' => [
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryFeatureType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Category'
        ],
        'SiteDefaults' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SiteDefaultsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SiteDefaults'
        ],
        'FeatureDefinitions' => [
            'type' => 'DTS\eBaySDK\Trading\Types\FeatureDefinitionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeatureDefinitions'
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
