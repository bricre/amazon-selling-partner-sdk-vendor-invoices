<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitInvoices operation.
 */
class SubmitInvoicesResponse extends AbstractModel
{
    /**
     * The response payload for the submitInvoices operation.
     *
     * @var \Amz\VendorInvoices\Model\TransactionId
     */
    public $payload = null;

    /**
     * @var \Amz\VendorInvoices\Model\ErrorList
     */
    public $errors = null;
}
