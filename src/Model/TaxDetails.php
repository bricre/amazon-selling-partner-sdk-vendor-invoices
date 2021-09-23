<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of tax amount applied.
 */
class TaxDetails extends AbstractModel
{
    /**
     * Type of the tax applied.
     *
     * @var string
     */
    public $taxType = null;

    /**
     * Tax percentage applied. Percentage must be expressed in decimal.
     *
     * @var \Amz\VendorInvoices\Model\Decimal
     */
    public $taxRate = null;

    /**
     * Total tax amount applied on invoice total or an item total.
     *
     * @var \Amz\VendorInvoices\Model\Money
     */
    public $taxAmount = null;

    /**
     * The invoice amount that is taxable at the rate specified in the tax rate field.
     *
     * @var \Amz\VendorInvoices\Model\Money
     */
    public $taxableAmount = null;
}
