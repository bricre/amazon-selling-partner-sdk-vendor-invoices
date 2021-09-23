<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Monetary and tax details of the charge.
 */
class ChargeDetails extends AbstractModel
{
    /**
     * Type of the charge applied.
     *
     * @var string
     */
    public $type = null;

    /**
     * Description of the charge.
     *
     * @var string
     */
    public $description = null;

    /**
     * Total monetary amount related to this charge.
     *
     * @var \Amz\VendorInvoices\Model\Money
     */
    public $chargeAmount = null;

    /**
     * Tax amount details applied on this charge.
     *
     * @var \Amz\VendorInvoices\Model\TaxDetails[]
     */
    public $taxDetails = null;
}
