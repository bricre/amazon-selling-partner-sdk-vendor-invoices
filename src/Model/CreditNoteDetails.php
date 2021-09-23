<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * References required in order to process a credit note. This information is
 * required only if InvoiceType is CreditNote.
 */
class CreditNoteDetails extends AbstractModel
{
    /**
     * Original Invoice Number when sending a credit note relating to an existing
     * invoice. One Invoice only to be processed per Credit Note. This is mandatory for
     * AP Credit Notes.
     *
     * @var string
     */
    public $referenceInvoiceNumber = null;

    /**
     * Debit Note Number as generated by Amazon. Recommended for Returns and COOP
     * Credit Notes.
     *
     * @var string
     */
    public $debitNoteNumber = null;

    /**
     * Identifies the Returns Notice Number. Mandatory for all Returns Credit Notes.
     *
     * @var string
     */
    public $returnsReferenceNumber = null;

    /**
     * Date that a return is received by the vendor. It is mandatory for Returns Credit
     * Note.
     *
     * @var \Amz\VendorInvoices\Model\DateTime
     */
    public $goodsReturnDate = null;

    /**
     * Identifies the Returned Merchandise Authorization ID, if generated.
     *
     * @var string
     */
    public $rmaId = null;

    /**
     * Identifies the COOP reference used for COOP agreement. Failure to provide the
     * COOP reference number or the Debit Note number may lead to a rejection of the
     * Credit Note.
     *
     * @var string
     */
    public $coopReferenceNumber = null;

    /**
     * Identifies the consignor reference number (VRET number), if generated by Amazon.
     *
     * @var string
     */
    public $consignorsReferenceNumber = null;
}
