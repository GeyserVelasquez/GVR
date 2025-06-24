<?php

namespace Webkul\Bancamiga\Payment;

use Webkul\Payment\Payment\Payment;

class Bancamiga extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'bancamiga';

    public function getRedirectUrl()
    {
        
    }
}