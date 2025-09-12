<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

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
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    
    /**
     * @return integer
     */
    public function getPackageNumber()
    {
        return $this->packageNumber;
    }

    /**
     * @return string
     */
    public function getParcelLabelNumber()
    {
        return $this->parcelLabelNumber;
    }

    /**
     * @return ParcelLabel[]
     */
    public function getParcelLabels()
    {
        return $this->parcelLabels;
    }
    
}
