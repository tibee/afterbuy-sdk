<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class AlternativeItemNumber2Filter
 */
class AlternativeItemNumber2Filter extends AbstractFilter
{
    /**
     * @param int $shopId
     */
    public function __construct($alternativeItemNumber2)
    {
        parent::__construct('AlternativeItemNumber2');

        $this->filterValues['FilterValue'] = strval($alternativeItemNumber2);
    }
}
