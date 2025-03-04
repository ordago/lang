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
    'accepted'             => 'Câmpul :attribute trebuie să fie acceptat.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'Câmpul :attribute nu este un URL valid.',
    'after'                => 'Câmpul :attribute trebuie să fie o dată după :date.',
    'after_or_equal'       => 'Câmpul :attribute trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha'                => 'Câmpul :attribute poate conține doar litere.',
    'alpha_dash'           => 'Câmpul :attribute poate conține doar litere, numere și cratime.',
    'alpha_num'            => 'Câmpul :attribute poate conține doar litere și numere.',
    'array'                => 'Câmpul :attribute trebuie să fie un array.',
    'attached'             => 'Acest :attribute este deja atașat.',
    'before'               => 'Câmpul :attribute trebuie să fie o dată înainte de :date.',
    'before_or_equal'      => 'Câmpul :attribute trebuie să fie o dată înainte sau egală cu :date.',
    'between'              => [
        'array'   => 'Câmpul :attribute trebuie să aibă între :min și :max elemente.',
        'file'    => 'Câmpul :attribute trebuie să fie între :min și :max kiloocteți.',
        'numeric' => 'Câmpul :attribute trebuie să fie între :min și :max.',
        'string'  => 'Câmpul :attribute trebuie să fie între :min și :max caractere.',
    ],
    'boolean'              => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed'            => 'Confirmarea :attribute nu se potrivește.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Câmpul :attribute nu este o dată validă.',
    'date_equals'          => 'Aceasta :attribute trebuie să fie o dată egală cu :date.',
    'date_format'          => 'Câmpul :attribute trebuie să fie în formatul :format.',
    'different'            => 'Câmpurile :attribute și :other trebuie să fie diferite.',
    'digits'               => 'Câmpul :attribute trebuie să aibă :digits cifre.',
    'digits_between'       => 'Câmpul :attribute trebuie să aibă între :min și :max cifre.',
    'dimensions'           => 'Câmpul :attribute are dimensiuni de imagine nevalide.',
    'distinct'             => 'Câmpul :attribute are o valoare duplicat.',
    'email'                => 'Câmpul :attribute trebuie să fie o adresă de e-mail validă.',
    'ends_with'            => 'Câmpul :attribute trebuie să se încheie cu una din următoarele valori: :values',
    'exists'               => 'Câmpul :attribute selectat nu este valid.',
    'file'                 => 'Câmpul :attribute trebuie să fie un fișier.',
    'filled'               => 'Câmpul :attribute trebuie completat.',
    'gt'                   => [
        'array'   => 'Câmpul :attribute trebuie să aibă mai multe de :value elemente.',
        'file'    => 'Câmpul :attribute trebuie să fie mai mare de :value kilobyți.',
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare de :value.',
        'string'  => 'Câmpul :attribute trebuie să fie mai mare de :value caractere.',
    ],
    'gte'                  => [
        'array'   => 'Câmpul :attribute trebuie să aibă :value elemente sau mai multe.',
        'file'    => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value kilobyți.',
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value.',
        'string'  => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value caractere.',
    ],
    'image'                => 'Câmpul :attribute trebuie să fie o imagine.',
    'in'                   => 'Câmpul :attribute selectat nu este valid.',
    'in_array'             => 'Câmpul :attribute nu există în :other.',
    'integer'              => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'ip'                   => 'Câmpul :attribute trebuie să fie o adresă IP validă.',
    'ipv4'                 => 'Câmpul :attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6'                 => 'Câmpul :attribute trebuie să fie o adresă IPv6 validă.',
    'json'                 => 'Câmpul :attribute trebuie să fie un string JSON valid.',
    'lt'                   => [
        'array'   => 'Câmpul :attribute trebuie să aibă mai puțin de :value elemente.',
        'file'    => 'Câmpul :attribute trebuie să fie mai mic de :value kilobyți.',
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic de :value.',
        'string'  => 'Câmpul :attribute trebuie să fie mai mic de :value caractere.',
    ],
    'lte'                  => [
        'array'   => 'Câmpul :attribute trebuie să aibă :value elemente sau mai puține.',
        'file'    => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value kilobyți.',
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value.',
        'string'  => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value caractere.',
    ],
    'max'                  => [
        'array'   => 'Câmpul :attribute nu poate avea mai mult de :max elemente.',
        'file'    => 'Câmpul :attribute nu poate avea mai mult de :max kiloocteți.',
        'numeric' => 'Câmpul :attribute nu poate fi mai mare de :max.',
        'string'  => 'Câmpul :attribute nu poate avea mai mult de :max caractere.',
    ],
    'mimes'                => 'Câmpul :attribute trebuie să fie un fișier de tipul: :values.',
    'mimetypes'            => 'Câmpul :attribute trebuie să fie un fișier de tipul: :values.',
    'min'                  => [
        'array'   => 'Câmpul :attribute trebuie să aibă cel puțin :min elemente.',
        'file'    => 'Câmpul :attribute trebuie să aibă cel puțin :min kiloocteți.',
        'numeric' => 'Câmpul :attribute nu poate fi mai mic de :min.',
        'string'  => 'Câmpul :attribute trebuie să aibă cel puțin :min caractere.',
    ],
    'multiple_of'          => ':attribute trebuie să fie un multiplu de :value',
    'not_in'               => 'Câmpul :attribute selectat nu este valid.',
    'not_regex'            => 'Câmpul :attribute nu are un format valid.',
    'numeric'              => 'Câmpul :attribute trebuie să fie un număr.',
    'password'             => 'Parola este greșită.',
    'present'              => 'Câmpul :attribute trebuie să fie prezent.',
    'prohibited'           => 'Câmpul :attribute este interzis.',
    'prohibited_if'        => 'Câmpul :attribute este interzis atunci când :other este :value.',
    'prohibited_unless'    => 'Câmpul :attribute este interzis, cu excepția cazului în care :other este în :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Câmpul :attribute nu are un format valid.',
    'relatable'            => 'Acest :attribute nu poate fi asociat cu această resursă.',
    'required'             => 'Câmpul :attribute este obligatoriu.',
    'required_if'          => 'Câmpul :attribute este necesar când :other este :value.',
    'required_unless'      => 'Câmpul :attribute este necesar, cu excepția cazului :other este in :values.',
    'required_with'        => 'Câmpul :attribute este necesar când există :values.',
    'required_with_all'    => 'Câmpul :attribute este necesar când există :values.',
    'required_without'     => 'Câmpul :attribute este necesar când nu există :values.',
    'required_without_all' => 'Câmpul :attribute este necesar când niciunul(una) dintre :values nu există.',
    'same'                 => 'Câmpul :attribute și :other trebuie să fie identice.',
    'size'                 => [
        'array'   => 'Câmpul :attribute trebuie să aibă :size elemente.',
        'file'    => 'Câmpul :attribute trebuie să aibă :size kiloocteți.',
        'numeric' => 'Câmpul :attribute trebuie să fie :size.',
        'string'  => 'Câmpul :attribute trebuie să aibă :size caractere.',
    ],
    'starts_with'          => 'Acesta :attribute trebuie să înceapă cu una din următoarele: :values',
    'string'               => 'Câmpul :attribute trebuie să fie string.',
    'timezone'             => 'Câmpul :attribute trebuie să fie un fus orar valid.',
    'unique'               => 'Câmpul :attribute a fost deja folosit.',
    'uploaded'             => 'Câmpul :attribute nu a reușit încărcarea.',
    'url'                  => 'Câmpul :attribute nu este un URL valid.',
    'uuid'                 => 'Acesta :attribute trebuie să fie un cod UUID valid.',
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
