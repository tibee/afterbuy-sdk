<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class BaseProductData
 */
class BaseProductData extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("BaseProductType")
     * @var int
     */
    protected $baseProductType;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetSoldItems\ChildProduct>")
     * @Serializer\SerializedName("ChildProduct")
     * @Serializer\XmlList(inline=true, entry="ChildProduct")
     * @var ChildProduct[]
     */
    protected $childProduct;

    /**
     * @return int
     */
    public function getBaseProductType()
    {
        return $this->baseProductType;
    }

    /**
     * @return ChildProduct[]
     */
    public function getChildProduct()
    {
        return $this->childProduct;
    }
}
