<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class InvoiceNumbersFilter
 */
class InvoiceNumbersFilter extends AbstractFilter
{

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetSoldItems\Filter\FilterValue>")
     * @Serializer\XmlList(entry="FilterValue")
     * @Serializer\SerializedName("FilterValues")
     * @var array
     */
    protected $filterValues = [];

    /**
     * @param $invoiceNumbers
     */
    public function __construct($invoiceNumbers)
    {
        parent::__construct('InvoiceNumber');

        foreach ($invoiceNumbers as $invoiceNumber) {
            $this->filterValues[] = (new FilterValue())->setFilterValue($invoiceNumber);
        }
    }

}
