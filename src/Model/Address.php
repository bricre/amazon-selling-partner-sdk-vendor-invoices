<?php

namespace Amz\VendorInvoices\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A physical address.
 */
class Address extends AbstractModel
{
    /**
     * The name of the person, business or institution at that address.
     *
     * @var string
     */
    public $name = null;

    /**
     * First line of street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine3 = null;

    /**
     * The city where the person, business or institution is located.
     *
     * @var string
     */
    public $city = null;

    /**
     * The county where person, business or institution is located.
     *
     * @var string
     */
    public $county = null;

    /**
     * The district where person, business or institution is located.
     *
     * @var string
     */
    public $district = null;

    /**
     * The state or region where person, business or institution is located.
     *
     * @var string
     */
    public $stateOrRegion = null;

    /**
     * The postal or zip code of that address. It contains a series of letters or
     * digits or both, sometimes including spaces or punctuation.
     *
     * @var string
     */
    public $postalOrZipCode = null;

    /**
     * The two digit country code. In ISO 3166-1 alpha-2 format.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The phone number of the person, business or institution located at that address.
     *
     * @var string
     */
    public $phone = null;
}
