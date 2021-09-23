<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of quantity.
 */
class ItemQuantity extends AbstractModel
{
    /**
     * Quantity of an item. This value should not be zero.
     *
     * @var int
     */
    public $amount = null;

    /**
     * Unit of measure for the quantity.
     *
     * @var string
     */
    public $unitOfMeasure = null;

    /**
     * The case size, if the unit of measure value is Cases.
     *
     * @var int
     */
    public $unitSize = null;
}
