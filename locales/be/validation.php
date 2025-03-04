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
    'accepted'             => 'Вы павінны прыняць :attribute.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'Поле :attribute утрымлівае несапраўдны URL.',
    'after'                => 'У полі :attribute павінна быць дата пасля :date.',
    'after_or_equal'       => ':attribute павінна быць датай пасля або роўнай :date.',
    'alpha'                => 'Поле :attribute можа мець толькі літары.',
    'alpha_dash'           => 'Поле :attribute можа мець толькі літары, лічбы і злучок.',
    'alpha_num'            => 'Поле :attribute можа мець толькі літары і лічбы.',
    'array'                => 'Поле :attribute павінна быць масівам.',
    'attached'             => 'Гэты нумар :attribute ўжо прымацаваны.',
    'before'               => 'У полі :attribute павінна быць дата да :date.',
    'before_or_equal'      => ':attribute павінна быць датай да або роўнай :date.',
    'between'              => [
        'array'   => 'Колькасць элементаў у поле :attribute павінна быць паміж :min і :max.',
        'file'    => 'Памер файла ў поле :attribute павінен быць паміж :min і :max кілабайт.',
        'numeric' => 'Поле :attribute павінна быць паміж :min і :max.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute павінна быць паміж :min і :max.',
    ],
    'boolean'              => 'Поле :attribute павінна мець значэнне лагічнага тыпу.',
    'confirmed'            => 'Поле :attribute не супадае з пацвярджэннем.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Поле :attribute не з\'яўляецца датай.',
    'date_equals'          => ':attribute павінна быць датай, роўнай :date.',
    'date_format'          => 'Поле :attribute не адпавядае фармату :format.',
    'different'            => 'Палі :attribute і :other павінны адрознівацца.',
    'digits'               => 'Даўжыня лічбавага поля :attribute павінна быць :digits.',
    'digits_between'       => 'Даўжыня лічбавага поля :attribute павінна быць паміж :min і :max.',
    'dimensions'           => ':attribute мае недапушчальныя памеры малюнка.',
    'distinct'             => 'Поле :attribute мае паўтаральнае значэнне.',
    'email'                => 'Поле :attribute павінна быць сапраўдным электронным адрасам.',
    'ends_with'            => ':attribute павінен заканчвацца адным з наступных: :values.',
    'exists'               => 'Выбранае значэнне для :attribute некарэктна.',
    'file'                 => ':attribute павінен быць файлам.',
    'filled'               => 'Поле :attribute абавязкова для запаўнення.',
    'gt'                   => [
        'array'   => 'The :attribute must have more than :value items.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string'  => 'The :attribute must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The :attribute must have :value items or more.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
    ],
    'image'                => 'Поле :attribute павінна быць малюнкам.',
    'in'                   => 'Выбранае значэнне для :attribute памылкова.',
    'in_array'             => 'Поле :attribute не існуе ў :other.',
    'integer'              => 'Поле :attribute павінна быць цэлым лікам.',
    'ip'                   => 'Поле :attribute дпавінна быць сапраўдным IP-адрасам.',
    'ipv4'                 => ':attribute павінен быць сапраўдным IPv4-адрасам.',
    'ipv6'                 => ':attribute павінен быць сапраўдным IPv6-адрасам.',
    'json'                 => 'Поле :attribute павінна быць JSON радком.',
    'lt'                   => [
        'array'   => 'The :attribute must have less than :value items.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string'  => 'The :attribute must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The :attribute must not have more than :value items.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal :value.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'Колькасць элементаў у поле :attribute не можа перавышаць :max.',
        'file'    => 'Памер файла ў поле :attribute не можа быць больш :max кілабайт).',
        'numeric' => 'Поле :attribute не можа быць больш :max.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute не можа перавышаць :max.',
    ],
    'mimes'                => 'Поле :attribute павінна быць файлам аднаго з наступных тыпаў: :values.',
    'mimetypes'            => 'Поле :attribute павінна быць файлам аднаго з наступных тыпаў: :values.',
    'min'                  => [
        'array'   => 'Колькасць элементаў у поле :attribute павінна быць не менш :min.',
        'file'    => 'Памер файла ў полее :attribute павінен быць не менш :min кілабайт.',
        'numeric' => 'Поле :attribute павінна быць не менш :min.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute павінна быць не менш :min.',
    ],
    'multiple_of'          => 'Лік :attribute павінна быць Кратна :value',
    'not_in'               => 'Выбранае значэнне для :attribute памылкова.',
    'not_regex'            => 'Фармат :attribute недапушчальны.',
    'numeric'              => 'Поле :attribute павінна быць лікам.',
    'password'             => 'Пароль няправільны.',
    'present'              => 'Поле :attribute павінна прысутнічаць.',
    'prohibited'           => 'Поле :attribute забаронена.',
    'prohibited_if'        => 'Поле :attribute забаронена, калі :other роўна :value.',
    'prohibited_unless'    => 'Поле :attribute забаронена, калі толькі :other не знаходзіцца ў :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Поле :attribute мае памылковы фармат.',
    'relatable'            => 'Гэты :attribute можа быць не звязаны з гэтым рэсурсам.',
    'required'             => 'Поле :attribute абавязкова для запаўнення.',
    'required_if'          => 'Поле :attribute абавязкова для запаўнення, калі :other раўняецца :value.',
    'required_unless'      => 'Поле :attribute абавязкова для запаўнення, калі :other не раўняецца :values.',
    'required_with'        => 'Поле :attribute абавязкова для запаўнення, калі :values ўказана.',
    'required_with_all'    => 'Поле :attribute абавязкова для запаўнення, калі :values ўказана.',
    'required_without'     => 'Поле :attribute абавязкова для запаўнення, калі :values не ўказана.',
    'required_without_all' => 'Поле :attribute абавязкова для запаўнення, калі ні адно з :values не ўказана.',
    'same'                 => 'Значэнне :attribute павінна супадаць з :other.',
    'size'                 => [
        'array'   => 'Колькасць элементаў у поле :attribute павінна быць :size.',
        'file'    => 'Размер файла в поле :attribute павінен быць :size кілабайт.',
        'numeric' => 'Поле :attribute павінна быць :size.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute павінна быць :size.',
    ],
    'starts_with'          => ':attribute павінен пачынацца з аднаго з наступных значэнняў: :values.',
    'string'               => 'Поле :attribute павінна быць радком.',
    'timezone'             => 'Поле :attribute павінна быць сапраўдным гадзінным поясам.',
    'unique'               => 'Такое значэнне поля :attribute ўжо існуе.',
    'uploaded'             => ':attribute не ўдалося загрузіць.',
    'url'                  => 'Поле :attribute мае памылковы фармат.',
    'uuid'                 => ':attribute павінен быць сапраўдным UUID.',
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
