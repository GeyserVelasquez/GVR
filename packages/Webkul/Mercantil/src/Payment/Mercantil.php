<?php

namespace Webkul\Mercantil\Payment;

use Webkul\Payment\Payment\Payment;

class Mercantil extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'mercantil';

        /**
     * Return mercantil redirect url.
     *
     * @return string
     */
    public function getRedirectUrl()
    {

        return route('mercantil');
        // return false;

        // $document = request()->input('customer_document'); // Obtiene el dato
        // dd($document);

    }

    public function getPaymentHtml()
    {
    }
}
