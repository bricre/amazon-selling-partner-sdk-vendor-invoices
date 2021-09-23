<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Monetary and tax details of the allowance.
 */
class AllowanceDetails extends AbstractModel
{
    /**
     * Type of the allowance applied.
     *
     * @var string
     */
    public $type = null;

    /**
     * Description of the allowance.
     *
     * @var string
     */
    public $description = null;

    /**
     * Total monetary amount related to this allowance.
     *
     * @var \Amz\VendorInvoices\Model\Money
     */
    public $allowanceAmount = null;

    /**
     * Tax amount details applied on this allowance.
     *
     * @var \Amz\VendorInvoices\Model\TaxDetails[]
     */
    public $taxDetails = null;
}
