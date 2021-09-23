<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of the item being invoiced.
 */
class InvoiceItem extends AbstractModel
{
    /**
     * Unique number related to this line item.
     *
     * @var int
     */
    public $itemSequenceNumber = null;

    /**
     * Amazon Standard Identification Number (ASIN) of an item.
     *
     * @var string
     */
    public $amazonProductIdentifier = null;

    /**
     * The vendor selected product identifier of the item. Should be the same as was
     * provided in the purchase order.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Invoiced quantity of this item. Quantity must be greater than zero.
     *
     * @var \Amz\VendorInvoices\Model\ItemQuantity
     */
    public $invoicedQuantity = null;

    /**
     * The item cost to Amazon, which should match the cost on the order. Price
     * information should not be zero or negative. It indicates net unit price. Net
     * cost means VAT is not included in cost.
     *
     * @var \Amz\VendorInvoices\Model\Money
     */
    public $netCost = null;

    /**
     * The Amazon purchase order number for this invoiced line item. Formatting Notes:
     * 8-character alpha-numeric code. This value is mandatory only when invoiceType is
     * Invoice, and is not required when invoiceType is CreditNote.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * HSN Tax code. The HSN number cannot contain alphabets.
     *
     * @var string
     */
    public $hsnCode = null;

    /**
     * Details required in order to process a credit note. This information is required
     * only if invoiceType is CreditNote.
     *
     * @var \Amz\VendorInvoices\Model\CreditNoteDetails
     */
    public $creditNoteDetails = null;

    /**
     * Individual tax details per line item.
     *
     * @var \Amz\VendorInvoices\Model\TaxDetails[]
     */
    public $taxDetails = null;

    /**
     * Individual charge details per line item.
     *
     * @var \Amz\VendorInvoices\Model\ChargeDetails[]
     */
    public $chargeDetails = null;

    /**
     * Individual allowance details per line item.
     *
     * @var \Amz\VendorInvoices\Model\AllowanceDetails[]
     */
    public $allowanceDetails = null;
}
