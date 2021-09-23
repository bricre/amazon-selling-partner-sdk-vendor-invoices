<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Invoice extends AbstractModel
{
    /**
     * Identifies the type of invoice.
     *
     * @var string
     */
    public $invoiceType = null;

    /**
     * Unique number relating to the charges defined in this document. This will be
     * invoice number if the document type is Invoice or CreditNote number if the
     * document type is Credit Note. Failure to provide this reference will result in a
     * rejection.
     *
     * @var string
     */
    public $id = null;

    /**
     * An additional unique reference number used for regulatory or other purposes.
     *
     * @var string
     */
    public $referenceNumber = null;

    /**
     * Date when the invoice/credit note information was generated in the origin's
     * accounting system. The invoice date should be on or after the purchase order
     * creation date.
     *
     * @var \Amz\VendorInvoices\Model\DateTime
     */
    public $date = null;

    /**
     * Name, address and tax details of the party receiving the payment of this
     * invoice.
     *
     * @var \Amz\VendorInvoices\Model\PartyIdentification
     */
    public $remitToParty = null;

    /**
     * Name, address and tax details of the party receiving a shipment of products.
     *
     * @var \Amz\VendorInvoices\Model\PartyIdentification
     */
    public $shipToParty = null;

    /**
     * Name, address and tax details of the party sending a shipment of products.
     *
     * @var \Amz\VendorInvoices\Model\PartyIdentification
     */
    public $shipFromParty = null;

    /**
     * Name, address and tax details of the party to whom this invoice is issued.
     *
     * @var \Amz\VendorInvoices\Model\PartyIdentification
     */
    public $billToParty = null;

    /**
     * The payment terms for the invoice.
     *
     * @var \Amz\VendorInvoices\Model\PaymentTerms
     */
    public $paymentTerms = null;

    /**
     * Total monetary amount charged in the invoice or full value of credit note to be
     * paid including all relevant taxes. It is the total amount of invoice (including
     * charges, less allowances) before terms discount (if discount is applicable).
     *
     * @var \Amz\VendorInvoices\Model\Money
     */
    public $invoiceTotal = null;

    /**
     * Total tax amount details for all line items.
     *
     * @var \Amz\VendorInvoices\Model\TaxDetails[]
     */
    public $taxDetails = null;

    /**
     * Additional details provided by the selling party, for tax related or other
     * purposes.
     *
     * @var \Amz\VendorInvoices\Model\AdditionalDetails[]
     */
    public $additionalDetails = null;

    /**
     * Total charge amount details for all line items.
     *
     * @var \Amz\VendorInvoices\Model\ChargeDetails[]
     */
    public $chargeDetails = null;

    /**
     * Total allowance amount details for all line items.
     *
     * @var \Amz\VendorInvoices\Model\AllowanceDetails[]
     */
    public $allowanceDetails = null;

    /**
     * The list of invoice items.
     *
     * @var \Amz\VendorInvoices\Model\InvoiceItem[]
     */
    public $items = null;
}
