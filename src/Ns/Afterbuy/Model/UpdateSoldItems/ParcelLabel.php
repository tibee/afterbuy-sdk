<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use \DateTime;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class ParcelLabel
 */
class ParcelLabel extends AbstractModel
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ItemID")
     * @var int
     */
    protected $itemId;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("PackageNumber")
     * @var string
     */
    protected $packageNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ParcelLabelNumber")
     * @var string
     */
    protected $parcelLabelNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ReturnLabelNumber")
     * @var string
     */
    protected $returnLabelNumber;

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }
    
    /**
     * @return integer
     */
    public function getPackageNumber()
    {
        return $this->packageNumber;
    }

    public function setPackageNumber($packageNumber)
    {
        $this->packageNumber = $packageNumber;
    }

    /**
     * @return string
     */
    public function getParcelLabelNumber()
    {
        return $this->parcelLabelNumber;
    }

    public function setParcelLabelNumber($parcelLabelNumber)
    {
        $this->parcelLabelNumber = $parcelLabelNumber;
    }

    /**
     * @return string
     */
    public function getReturnLabelNumber()
    {
        return $this->returnLabelNumber;
    }

    public function setReturnLabelNumber($returnLabelNumber)
    {
        $this->returnLabelNumber = $returnLabelNumber;
    }

    
}
