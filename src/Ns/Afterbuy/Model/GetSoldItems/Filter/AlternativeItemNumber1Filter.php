<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class AlternativeItemNumber1Filter
 */
class AlternativeItemNumber1Filter extends AbstractFilter
{
    /**
     * @param int $shopId
     */
    public function __construct($alternativeItemNumber1)
    {
        parent::__construct('AlternativeItemNumber1');

        $this->filterValues['FilterValue'] = strval($alternativeItemNumber1);
    }
}
