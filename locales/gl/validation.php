<?php

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

return [
    'accepted'             => ':attribute debe ser aceptado.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':attribute non é unha URL válida.',
    'after'                => ':attribute debe ser unha data posterior a :date.',
    'after_or_equal'       => ':attribute debe ser unha data posterior ou igual a :date.',
    'alpha'                => ':attribute só debe conter letras.',
    'alpha_dash'           => ':attribute só debe conter letras, números, guións e guións baixos.',
    'alpha_num'            => ':attribute só debe conter letras e números.',
    'array'                => ':attribute debe ser un conxunto.',
    'attached'             => 'Este :attribute xa está conectado.',
    'before'               => ':attribute debe ser unha data previa a :date.',
    'before_or_equal'      => ':attribute debe ser unha data previa ou igual a :date.',
    'between'              => [
        'array'   => ':attribute debe conter entre :min e :max elementos.',
        'file'    => ':attribute debe ter entre :min e :max quilobites.',
        'numeric' => ':attribute debe estar entre :min e :max.',
        'string'  => ':attribute debe ter entre :min e :max caracteres.',
    ],
    'boolean'              => 'O campo :attribute debe ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmación de :attribute non coincide.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':attribute non é unha data válida.',
    'date_equals'          => ':attribute debe ser unha data igual a :date.',
    'date_format'          => ':attribute non coincide co formato :format.',
    'different'            => ':attribute e :other deben ser diferentes.',
    'digits'               => ':attribute debe ter :digits díxitos.',
    'digits_between'       => ':attribute debe ter entre :min e :max díxitos.',
    'dimensions'           => 'As dimensións da imaxe :attribute no son válidas.',
    'distinct'             => 'O campo :attribute contén un valor duplicado.',
    'email'                => ':attribute debe ser unha dirección de correo electrónico válida.',
    'ends_with'            => ':attribute debe finalizar cun dos seguintes valores: :values',
    'exists'               => ':attribute seleccionado non é válido.',
    'file'                 => ':attribute debe ser un arquivo.',
    'filled'               => 'O campo :attribute debe ter un valor.',
    'gt'                   => [
        'array'   => ':attribute debe ter máis de :value elementos.',
        'file'    => ':attribute debe ter máis de :value quilobytes.',
        'numeric' => ':attribute debe ser maior que :value.',
        'string'  => ':attribute debe ter máis de :value caracteres.',
    ],
    'gte'                  => [
        'array'   => ':attribute debe ter polo menos :value elementos.',
        'file'    => ':attribute debe ter polo menos :value quilobytes.',
        'numeric' => ':attribute debe ser polo menos :value.',
        'string'  => ':attribute debe ter polo menos :value caracteres.',
    ],
    'image'                => ':attribute debe ser unha imaxe.',
    'in'                   => ':attribute seleccionado non é válido.',
    'in_array'             => 'O campo :attribute non existe en :other.',
    'integer'              => ':attribute debe ser un número enteiro.',
    'ip'                   => ':attribute debe ser unha dirección IP válida.',
    'ipv4'                 => ':attribute debe ser unha dirección IPv4 válida.',
    'ipv6'                 => ':attribute debe ser unha dirección IPv6 válida.',
    'json'                 => ':attribute debe ser unha cadea JSON válida.',
    'lt'                   => [
        'array'   => ':attribute debe ter menos de :value elementos.',
        'file'    => ':attribute debe ter menos de :value quilobytes.',
        'numeric' => ':attribute debe ser menor que :value.',
        'string'  => ':attribute debe ter menos de :value caracteres.',
    ],
    'lte'                  => [
        'array'   => ':attribute non debe ter máis de :value elementos.',
        'file'    => ':attribute debe ter como máximo :value quilobytes.',
        'numeric' => ':attribute debe ser como máximo :value.',
        'string'  => ':attribute debe ter como máximo :value caracteres.',
    ],
    'max'                  => [
        'array'   => ':attribute non debe ter máis de :max elementos.',
        'file'    => ':attribute non debe ser maior de :max quilobites.',
        'numeric' => ':attribute non debe ser maior de :max.',
        'string'  => ':attribute non debe ser maior de :max caracteres.',
    ],
    'mimes'                => ':attribute debe ser un arquivo de tipo: :values.',
    'mimetypes'            => ':attribute debe ser un arquivo de tipo: :values.',
    'min'                  => [
        'array'   => ':attribute debe ter polo menos :min elementos.',
        'file'    => ':attribute debe ser polo menos de :min quilobites.',
        'numeric' => ':attribute debe ser polo menos :min.',
        'string'  => ':attribute debe ser polo menos de :min caracteres.',
    ],
    'multiple_of'          => 'O :attribute debe ser un múltiplo de :value',
    'not_in'               => ':attribute seleccionado non é válido.',
    'not_regex'            => 'O formato de :attribute non é válido.',
    'numeric'              => ':attribute debe ser un número.',
    'password'             => 'O contrasinal é incorrecto.',
    'present'              => 'O campo :attribute debe estar presente.',
    'prohibited'           => 'O :attribute campo está prohibida.',
    'prohibited_if'        => 'O :attribute campo está prohibida cando :other é :value.',
    'prohibited_unless'    => 'O :attribute campo está prohibido, a menos que :other é en :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'O formato de :attribute non é válido.',
    'relatable'            => 'Este :attribute non pode ser asociado con este recurso.',
    'required'             => 'O campo :attribute é obrigatorio.',
    'required_if'          => 'O campo :attribute é obrigatorio cando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatorio excepto que :other estea en :values.',
    'required_with'        => 'O campo :attribute é obrigatorio cando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatorio cando :values están presentes.',
    'required_without'     => 'O campo :attribute é obrigatorio cando :values non está presente.',
    'required_without_all' => 'O campo :attribute é obrigatorio cando ningún de :values están presentes.',
    'same'                 => ':attribute e :other deben coincidir.',
    'size'                 => [
        'array'   => ':attribute debe conter :size elementos.',
        'file'    => ':attribute debe ter :size quilobites.',
        'numeric' => ':attribute debe ser :size.',
        'string'  => ':attribute debe ter :size caracteres.',
    ],
    'starts_with'          => ':attribute debe comezar cun dos seguintes valores: :values',
    'string'               => ':attribute debe ser unha cadea de caracteres.',
    'timezone'             => ':attribute debe ser unha zona válida.',
    'unique'               => ':attribute xa foi empregado.',
    'uploaded'             => ':attribute fallou na subida.',
    'url'                  => 'O formato de :attribute non é válido.',
    'uuid'                 => ':attribute debe ser un UUID válido.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [
        'address'               => 'Address',
        'age'                   => 'Age',
        'body'                  => 'Body',
        'city'                  => 'City',
        'content'               => 'Content',
        'country'               => 'Country',
        'date'                  => 'Date',
        'day'                   => 'Day',
        'description'           => 'Description',
        'email'                 => 'Email',
        'excerpt'               => 'Excerpt',
        'first_name'            => 'First Name',
        'gender'                => 'Gender',
        'hour'                  => 'Hour',
        'last_name'             => 'Last Name',
        'message'               => 'Message',
        'minute'                => 'Minute',
        'mobile'                => 'Mobile',
        'month'                 => 'Month',
        'name'                  => 'Name',
        'password'              => 'Password',
        'password_confirmation' => 'Password Confirmation',
        'phone'                 => 'Phone',
        'photo'                 => 'Photo',
        'price'                 => 'Price',
        'role'                  => 'Role',
        'second'                => 'Second',
        'sex'                   => 'Sex',
        'subject'               => 'Subject',
        'terms'                 => 'Terms',
        'time'                  => 'Time',
        'title'                 => 'Title',
        'username'              => 'Username',
        'year'                  => 'Year',
    ],
];
