<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractModel;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class FilterValue
 */
class FilterValue extends AbstractModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlList(inline=true, entry="FilterValue")
     * @var array
     */
    protected $filterValue;

    /**
     * @return array
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }

    /**
     * @param $filterValue
     * @return $this
     */
    public function setFilterValue($filterValue)
    {
        $this->filterValue = $filterValue;
        return $this;
    }

}
