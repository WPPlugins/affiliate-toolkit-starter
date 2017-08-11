<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property boolean $Adult
 * @property boolean $BindingAuction
 * @property boolean $CheckoutEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedBuyItNowPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedStartPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedReservePrice
 * @property boolean $HasReservePrice
 * @property string $RelistedItemID
 * @property string $SecondChanceOriginalItemID
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property string $ViewItemURL
 * @property boolean $HasUnansweredQuestions
 * @property boolean $HasPublicMessages
 * @property boolean $BuyItNowAvailable
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $MinimumBestOfferPrice
 * @property string $LocalListingDistance
 * @property string $TCROriginalItemID
 * @property string $ViewItemURLForNaturalSearch
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BestOfferAutoAcceptPrice
 * @property \DTS\eBaySDK\MerchantData\Enums\EndReasonCodeType $EndingReason
 */
class ListingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Adult' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Adult'
        ],
        'BindingAuction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BindingAuction'
        ],
        'CheckoutEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutEnabled'
        ],
        'ConvertedBuyItNowPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ],
        'ConvertedStartPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedStartPrice'
        ],
        'ConvertedReservePrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedReservePrice'
        ],
        'HasReservePrice' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasReservePrice'
        ],
        'RelistedItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistedItemID'
        ],
        'SecondChanceOriginalItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOriginalItemID'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'ViewItemURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURL'
        ],
        'HasUnansweredQuestions' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasUnansweredQuestions'
        ],
        'HasPublicMessages' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasPublicMessages'
        ],
        'BuyItNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ],
        'MinimumBestOfferPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumBestOfferPrice'
        ],
        'LocalListingDistance' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistance'
        ],
        'TCROriginalItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TCROriginalItemID'
        ],
        'ViewItemURLForNaturalSearch' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ],
        'BestOfferAutoAcceptPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptPrice'
        ],
        'EndingReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndingReason'
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
