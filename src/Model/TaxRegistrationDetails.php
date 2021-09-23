<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Tax registration details of the entity.
 */
class TaxRegistrationDetails extends AbstractModel
{
    /**
     * The tax registration type for the entity.
     *
     * @var string
     */
    public $taxRegistrationType = null;

    /**
     * The tax registration number for the entity. For example, VAT ID.
     *
     * @var string
     */
    public $taxRegistrationNumber = null;
}
