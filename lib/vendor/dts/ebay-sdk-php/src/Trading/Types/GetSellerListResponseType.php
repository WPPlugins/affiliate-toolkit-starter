<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 * @property boolean $HasMoreItems
 * @property \DTS\eBaySDK\Trading\Types\ItemArrayType $ItemArray
 * @property integer $ItemsPerPage
 * @property integer $PageNumber
 * @property integer $ReturnedItemCountActual
 * @property \DTS\eBaySDK\Trading\Types\UserType $Seller
 */
class GetSellerListResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PaginationResult' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
        ],
        'HasMoreItems' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasMoreItems'
        ],
        'ItemArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemArray'
        ],
        'ItemsPerPage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemsPerPage'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ],
        'ReturnedItemCountActual' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnedItemCountActual'
        ],
        'Seller' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Seller'
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
