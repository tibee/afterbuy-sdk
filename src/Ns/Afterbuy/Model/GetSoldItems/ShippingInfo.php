<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractShippingInfo;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class ShippingInfo
 */
class ShippingInfo extends AbstractShippingInfo
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingAdditionalCost")
     * @var FloatType
     */
    protected $shippingAdditionalCost;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingTotalCost")
     * @var FloatType
     */
    protected $shippingTotalCost;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingTaxRate")
     * @var FloatType
     */
    protected $shippingTaxRate;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetSoldItems\ParcelLabel>")
     * @Serializer\XmlList(entry="ParcelLabel")
     * @Serializer\SerializedName("ParcelLabels")
     * @var ParcelLabel[]
     */
    protected $parcelLabels;

    /**
     * @return float
     */
    public function getShippingAdditionalCost()
    {
        return $this->shippingAdditionalCost->getValue();
    }

    /**
     * @return float
     */
    public function getShippingTotalCost()
    {
        return $this->shippingTotalCost->getValue();
    }

    /**
     * @return float
     */
    public function getShippingTaxRate()
    {
        return $this->shippingTaxRate->getValue();
    }

    /**
     * @return ParcelLabel[]
     */
    public function getParcelLabels()
    {
        return $this->parcelLabels;
    }

}
