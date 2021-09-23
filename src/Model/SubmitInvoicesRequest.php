<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the submitInvoices operation.
 */
class SubmitInvoicesRequest extends AbstractModel
{
    /**
     * @var \Amz\VendorInvoices\Model\Invoice[]
     */
    public $invoices = null;
}
