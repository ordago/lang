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
    'accepted'             => ':Attribute måste accepteras.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':Attribute är inte en giltig webbadress.',
    'after'                => ':Attribute måste vara ett datum efter :date.',
    'after_or_equal'       => ':Attribute måste vara ett datum senare eller samma dag som :date.',
    'alpha'                => ':Attribute får endast innehålla bokstäver.',
    'alpha_dash'           => ':Attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'            => ':Attribute får endast innehålla bokstäver och siffror.',
    'array'                => ':Attribute måste vara en array.',
    'attached'             => 'Denna :attribute är redan bifogad.',
    'before'               => ':Attribute måste vara ett datum innan :date.',
    'before_or_equal'      => ':Attribute måste vara ett datum före eller samma dag som :date.',
    'between'              => [
        'array'   => ':Attribute måste innehålla mellan :min - :max objekt.',
        'file'    => ':Attribute måste vara mellan :min till :max kilobyte stor.',
        'numeric' => ':Attribute måste vara en siffra mellan :min och :max.',
        'string'  => ':Attribute måste innehålla :min till :max tecken.',
    ],
    'boolean'              => ':Attribute måste vara sant eller falskt.',
    'confirmed'            => ':Attribute bekräftelsen matchar inte.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':Attribute är inte ett giltigt datum.',
    'date_equals'          => ':Attribute måste vara ett datum lika med :date.',
    'date_format'          => ':Attribute matchar inte formatet :format.',
    'different'            => ':Attribute och :other får inte vara lika.',
    'digits'               => ':Attribute måste vara :digits tecken.',
    'digits_between'       => ':Attribute måste vara mellan :min och :max tecken.',
    'dimensions'           => ':Attribute har felaktiga bilddimensioner.',
    'distinct'             => ':Attribute innehåller fler än en repetition av samma element.',
    'email'                => ':Attribute måste innehålla en korrekt e-postadress.',
    'ends_with'            => ':Attribute måste sluta med en av följande: :values.',
    'exists'               => ':Attribute är ogiltigt.',
    'file'                 => ':Attribute måste vara en fil.',
    'filled'               => ':Attribute är obligatoriskt.',
    'gt'                   => [
        'array'   => ':Attribute måste innehålla fler än :value objekt.',
        'file'    => ':Attribute måste vara större än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara större än :value.',
        'string'  => ':Attribute måste vara längre än :value tecken.',
    ],
    'gte'                  => [
        'array'   => ':Attribute måste innehålla lika många eller fler än :value objekt.',
        'file'    => ':Attribute måste vara lika med eller större än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara lika med eller större än :value.',
        'string'  => ':Attribute måste vara lika med eller längre än :value tecken.',
    ],
    'image'                => ':Attribute måste vara en bild.',
    'in'                   => ':Attribute är ogiltigt.',
    'in_array'             => ':Attribute finns inte i :other.',
    'integer'              => ':Attribute måste vara en siffra.',
    'ip'                   => ':Attribute måste vara en giltig IP-adress.',
    'ipv4'                 => ':Attribute måste vara en giltig IPv4-adress.',
    'ipv6'                 => ':Attribute måste vara en giltig IPv6-adress.',
    'json'                 => ':Attribute måste vara en giltig JSON-sträng.',
    'lt'                   => [
        'array'   => ':Attribute måste innehålla färre än :value objekt.',
        'file'    => ':Attribute måste vara mindre än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara mindre än :value.',
        'string'  => ':Attribute måste vara kortare än :value tecken.',
    ],
    'lte'                  => [
        'array'   => ':Attribute måste innehålla lika många eller färre än :value objekt.',
        'file'    => ':Attribute måste vara lika med eller mindre än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara lika med eller mindre än :value.',
        'string'  => ':Attribute måste vara lika med eller kortare än :value tecken.',
    ],
    'max'                  => [
        'array'   => ':Attribute får inte innehålla mer än :max objekt.',
        'file'    => ':Attribute får max vara :max kilobyte stor.',
        'numeric' => ':Attribute får inte vara större än :max.',
        'string'  => ':Attribute får max innehålla :max tecken.',
    ],
    'mimes'                => ':Attribute måste vara en fil av typen: :values.',
    'mimetypes'            => ':Attribute måste vara en fil av typen: :values.',
    'min'                  => [
        'array'   => ':Attribute måste innehålla minst :min objekt.',
        'file'    => ':Attribute måste vara minst :min kilobyte stor.',
        'numeric' => ':Attribute måste vara större än :min.',
        'string'  => ':Attribute måste innehålla minst :min tecken.',
    ],
    'multiple_of'          => ':attribute måste vara en multipel av :value',
    'not_in'               => ':Attribute är ogiltigt.',
    'not_regex'            => 'Formatet för :attribute är ogiltigt.',
    'numeric'              => ':Attribute måste vara en siffra.',
    'password'             => 'Lösenordet är fel.',
    'present'              => ':Attribute måste finnas med.',
    'prohibited'           => 'Fältet :attribute är förbjudet.',
    'prohibited_if'        => ':attribute är förbjudet när :other är :value.',
    'prohibited_unless'    => ':attribute är förbjudet om inte :other är :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':Attribute har ogiltigt format.',
    'relatable'            => 'Denna :attribute kanske inte är associerad med den här resursen.',
    'required'             => ':Attribute är obligatoriskt.',
    'required_if'          => ':Attribute är obligatoriskt när :other är :value.',
    'required_unless'      => ':Attribute är obligatoriskt när inte :other finns bland :values.',
    'required_with'        => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_with_all'    => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_without'     => ':Attribute är obligatoriskt när :values ej är ifyllt.',
    'required_without_all' => ':Attribute är obligatoriskt när ingen av :values är ifyllt.',
    'same'                 => ':Attribute och :other måste vara lika.',
    'size'                 => [
        'array'   => ':Attribute måste innehålla :size objekt.',
        'file'    => ':Attribute får endast vara :size kilobyte stor.',
        'numeric' => ':Attribute måste vara :size.',
        'string'  => ':Attribute måste innehålla :size tecken.',
    ],
    'starts_with'          => ':Attribute måste börja med en av följande: :values',
    'string'               => ':Attribute måste vara en sträng.',
    'timezone'             => ':Attribute måste vara en giltig tidszon.',
    'unique'               => ':Attribute används redan.',
    'uploaded'             => ':Attribute kunde inte laddas upp.',
    'url'                  => ':Attribute har ett ogiltigt format.',
    'uuid'                 => ':Attribute måste vara ett giltigt UUID.',
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
