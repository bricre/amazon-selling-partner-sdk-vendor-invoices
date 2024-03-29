<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class TransactionId extends AbstractModel
{
    /**
     * GUID to identify this transaction. This value can be used with the Transaction
     * Status API to return the status of this transaction.
     *
     * @var string
     */
    public $transactionId = null;
}
