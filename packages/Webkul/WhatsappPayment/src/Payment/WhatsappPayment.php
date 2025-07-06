<?php

namespace Webkul\WhatsappPayment\Payment;

use Webkul\Payment\Payment\Payment;

use Illuminate\Support\Facades\Storage;

class WhatsappPayment extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'whatsapppayment';

    public function getRedirectUrl() {}

    public function getImage()
    {
        // Obtén la ruta desde la configuración
        $logo = core()->getConfigData('sales.payment_methods.whatsapppayment.image');

        // Si no hay logo, puedes poner una imagen por defecto
        if ($logo) {
            return Storage::url($logo);
        }

        return asset('vendor/webkul/whatsapp-payment/default-logo.png');
    }
}
