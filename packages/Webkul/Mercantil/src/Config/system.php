<?php

return [
    [
        'key'    => 'sales.payment_methods.mercantil',
        'info' => 'app.configuration.info', // Campo
        'name'   => 'Mercantil',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'description',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'active',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'customer_document', // Nombre del campo (se usará en la base de datos)
                'title'         => 'Número de documento', // Título que verá el admin
                'type'          => 'text', // Tipo de campo (text, number, select, etc.)
                'validation'    => 'required', // Obligatorio
                'channel_based' => false,
                'locale_based'  => false,
                'customer_editable' => true, // Permite que el cliente lo complete en el checkout
            ],
        ]
    ]
];
