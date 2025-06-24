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

    public function getRedirectUrl()
    {

        return false;

        // $document = request()->input('customer_document'); // Obtiene el dato
        // dd($document);

    }

    public function getPaymentHtml()
    {
        return view('mercantil::checkout.payment-method');
    }
}
