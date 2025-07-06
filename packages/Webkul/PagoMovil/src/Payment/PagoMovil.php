<?php

namespace Webkul\PagoMovil\Payment;

use Webkul\Payment\Payment\Payment;

use Illuminate\Support\Facades\Storage;

class PagoMovil extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'pagomovil';

    public function getRedirectUrl() {}

    public function getImage()
    {
        // Obtén la ruta desde la configuración
        $logo = core()->getConfigData('sales.payment_methods.pagomovil.image');

        // Si no hay logo, puedes poner una imagen por defecto
        if ($logo) {
            return Storage::url($logo);
        }

        return asset('vendor/webkul/pagomovil-payment/default-logo.png');
    }
}
