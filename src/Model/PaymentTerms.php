<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Terms of the payment for the invoice. The basis of the payment terms is the
 * invoice date.
 */
class PaymentTerms extends AbstractModel
{
    /**
     * The payment term type for the invoice.
     *
     * @var string
     */
    public $type = null;

    /**
     * The discount percent value, which is good until the discount due date.
     *
     * @var \Amz\VendorInvoices\Model\Decimal
     */
    public $discountPercent = null;

    /**
     * The number of calendar days from the Base date (Invoice date) until the discount
     * is no longer valid.
     *
     * @var float
     */
    public $discountDueDays = null;

    /**
     * The number of calendar days from the base date (invoice date) until the total
     * amount on the invoice is due.
     *
     * @var float
     */
    public $netDueDays = null;
}
