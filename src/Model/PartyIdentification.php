<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PartyIdentification extends AbstractModel
{
    /**
     * Assigned identification for the party.
     *
     * @var string
     */
    public $partyId = null;

    /**
     * Identification of the party by address.
     *
     * @var \Amz\VendorInvoices\Model\Address
     */
    public $address = null;

    /**
     * Tax registration details of the party.
     *
     * @var \Amz\VendorInvoices\Model\TaxRegistrationDetails[]
     */
    public $taxRegistrationDetails = null;
}
