<?php

namespace Amz\VendorInvoices\Api;

use Amz\VendorInvoices\Model\SubmitInvoicesRequest as SubmitInvoicesRequest;
use Amz\VendorInvoices\Model\SubmitInvoicesResponse as SubmitInvoicesResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorPayments extends AbstractAPI
{
    /**
     * Submit new invoices to Amazon.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param SubmitInvoicesRequest $Model Submit new invoices to Amazon.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitInvoicesResponse
     */
    public function submitInvoices(SubmitInvoicesRequest $Model): SubmitInvoicesResponse
    {
        return $this->client->request('submitInvoices', 'POST', 'vendor/payments/v1/invoices',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
