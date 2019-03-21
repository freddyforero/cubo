<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL valida.',
    'after'                => 'El :attribute debe ser una fecha posterior de :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El :attribute solo puede contener letras.',
    'alpha_dash'           => 'El :attribute debe contener letras, números y dashes.',
    'alpha_num'            => 'El :attribute debe solo contener letras y números.',
    'array'                => 'El :attribute debe ser un arreglo.',
    'before'               => 'El :attribute debe ser una fecha antes que :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha antes o igual :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El :attribute campo debe ser verdadero o falso.',
    'confirmed'            => 'El :attribute confirmación no coincide.',
    'date'                 => 'El :attribute no es una fecha valida.',
    'date_format'          => 'El :attribute no coincide con el formato :format.',
    'different'            => 'El :attribute y :other debe ser diferente.',
    'digits'               => 'El :attribute debe ser :digits digitos.',
    'digits_between'       => 'El :attribute debe ser entre :min y :max digitos.',
    'dimensions'           => 'El :attribute tiene una dimension no valida.',
    'distinct'             => 'El :attribute campo tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser un correo electronico valido.',
    'exists'               => 'El :attribute seleccionado es no valido.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El :attribute campo debe ser un valor.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es no valido.',
    'in_array'             => 'El :attribute campo no existe en :other.',
    'integer'              => 'El :attribute debe ser un número.',
    'ip'                   => 'El :attribute debe ser una direccion I.P. valida.',
    'ipv4'                 => 'El :attribute debe ser una direccion IPv4 valida.',
    'ipv6'                 => 'El :attribute debe ser una direccion IPv6 valida.',
    'json'                 => 'El :attribute debe ser una palabra JSON valida.',
    'max'                  => [
        'numeric' => 'El :attribute puede no ser mas grande que :max.',
        'file'    => 'El :attribute puede no ser mas grande que :max kilobytes.',
        'string'  => 'El :attribute puede no ser mas grande que :max caracteres.',
        'array'   => 'El :attribute puede no ser mas grande que :max items.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de type: :values.',
    'mimetypes'            => 'El :attribute debe ser un archivo de type: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe ser mayor que :min.',
        'file'    => 'El :attribute debe ser mayor que :min kilobytes.',
        'string'  => 'El :attribute debe ser mayor que :min caracteres.',
        'array'   => 'El :attribute debe ser mayor que :min items.',
    ],
    'not_in'               => 'El seleccionado :attribute es no valido.',
    'numeric'              => 'El :attribute debe ser un número.',
    'present'              => 'El :attribute campo debe ser en presente.',
    'regex'                => 'El :attribute campo no es valido.',
    'required'             => 'El :attribute campo es requerido.',
    'required_if'          => 'El :attribute campo es requerido cuando :other es :value.',
    'required_unless'      => 'El :attribute campo es requerido unless :other es en :values.',
    'required_with'        => 'El :attribute campo es requerido cuando :values es presente.',
    'required_with_all'    => 'El :attribute campo es requerido cuando :values es presente.',
    'required_without'     => 'El :attribute campo es requerido cuando :values no esta presente.',
    'required_without_all' => 'El :attribute campo es requerido cuando ninguno de :values estan presentes.',
    'same'                 => 'El :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe ser :size caracteres.',
        'array'   => 'El :attribute debe contener :size items.',
    ],
    'string'               => 'El :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El :attribute debe ser una zona valida.',
    'unique'               => 'El :attribute esta listo para tener un taken.',
    'uploaded'             => 'El :attribute fallo en cargar.',
    'url'                  => 'El :attribute formato es no valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
