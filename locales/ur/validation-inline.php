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
    'accepted'             => 'اس میدان قبول کرنا ضروری ہے.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'یہ نہیں ہے ایک درست یو آر ایل.',
    'after'                => 'یہ ہونا ضروری ہے ، ایک تاریخ کے بعد :date.',
    'after_or_equal'       => 'یہ ہونا ضروری ہے ، ایک تاریخ کے بعد یا اس کے برابر :date.',
    'alpha'                => 'اس میدان سکتا ہے صرف پر مشتمل خطوط.',
    'alpha_dash'           => 'اس میدان سکتا ہے صرف پر مشتمل خط, تعداد, ڈیش اور ظاہر کرتی ہے.',
    'alpha_num'            => 'اس میدان میں کر سکتے ہیں صرف حروف اور نمبر.',
    'array'                => 'اس میدان میں ہونا ضروری ہے ایک سرنی.',
    'attached'             => 'اس میدان میں پہلے سے ہی ہے کے ساتھ منسلک.',
    'before'               => 'یہ ہونا ضروری ہے ایک تاریخ سے پہلے :date.',
    'before_or_equal'      => 'یہ ہونا ضروری ہے ایک تاریخ سے پہلے یا اس کے برابر :date.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'اس میدان میں ہونا ضروری ہے سچ ہے یا جھوٹ.',
    'confirmed'            => 'تصدیق سے مماثل نہیں ہے.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'یہ نہیں ہے ایک درست تاریخ.',
    'date_equals'          => 'یہ ہونا ضروری ہے ، ایک تاریخ کے لئے برابر :date.',
    'date_format'          => 'اس کا مطلب یہ نہیں ملنے کی شکل :format.',
    'different'            => 'اس کی قیمت سے مختلف ہونا لازمی :other.',
    'digits'               => 'یہ ہونا ضروری ہے :digits ہندسے.',
    'digits_between'       => 'یہ ہونا چاہئے کے درمیان :min اور :max ہندسے.',
    'dimensions'           => 'اس تصویر باطل طول و عرض.',
    'distinct'             => 'اس میدان کی ایک نقل قیمت.',
    'email'                => 'اس کو ایک درست ای میل ایڈریس.',
    'ends_with'            => 'اس کو ختم کرنا ضروری ہے کے ساتھ مندرجہ ذیل میں سے ایک: :values.',
    'exists'               => 'منتخب قدر باطل ہے.',
    'file'                 => 'مواد ہونا ضروری ہے ایک فائل.',
    'filled'               => 'اس میدان میں ہونا ضروری ہے ، ایک قیمت ہے.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'یہ ہونا ضروری ہے ایک تصویر.',
    'in'                   => 'منتخب قدر باطل ہے.',
    'in_array'             => 'اس کی قیمت میں کوئی وجود نہیں :other.',
    'integer'              => 'یہ ہونا ضروری ہے ایک عدد صحیح.',
    'ip'                   => 'یہ ہونا ضروری ہے ایک درست IP ایڈریس.',
    'ipv4'                 => 'یہ ہونا ضروری ہے ایک درست IPv4 ایڈریس.',
    'ipv6'                 => 'یہ ہونا ضروری ہے ایک درست IPv6 ایڈریس.',
    'json'                 => 'یہ ہونا ضروری ہے ایک درست JSON سٹرنگ ہے.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'اس کو ایک فائل کی قسم: :values.',
    'mimetypes'            => 'اس کو ایک فائل کی قسم: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'قیمت ہونا ضروری ہے ایک سے زیادہ کے :value',
    'not_in'               => 'منتخب قدر باطل ہے.',
    'not_regex'            => 'اس کی شکل باطل ہے.',
    'numeric'              => 'یہ ہونا چاہئے ایک بڑی تعداد.',
    'password'             => 'پاس ورڈ غلط ہے.',
    'present'              => 'اس میدان میں موجود ہونا ضروری ہے.',
    'prohibited'           => 'اس میدان میں ممنوع ہے.',
    'prohibited_if'        => 'اس میدان ممنوع ہے جب :other ہے :value.',
    'prohibited_unless'    => 'اس میدان ممنوع ہے جب تک کہ :other میں ہے :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'اس کی شکل باطل ہے.',
    'relatable'            => 'اس میدان منسلک نہیں کیا جا سکتا کے ساتھ اس کے وسائل.',
    'required'             => 'اس میدان کی ضرورت ہے.',
    'required_if'          => 'اس میدان کی ضرورت ہے جب :other ہے :value.',
    'required_unless'      => 'اس میدان کی ضرورت ہے جب تک :other میں ہے :values.',
    'required_with'        => 'اس میدان کی ضرورت ہے جب :values موجود ہے.',
    'required_with_all'    => 'اس میدان کی ضرورت ہے جب :values موجود ہیں.',
    'required_without'     => 'اس میدان کی ضرورت ہے جب :values موجود نہیں ہے.',
    'required_without_all' => 'اس میدان کی ضرورت ہے جب سے کوئی بھی :values موجود ہیں.',
    'same'                 => 'قیمت کے اس میدان میں میچ ہونا ایک سے :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'اس کے ساتھ شروع ہونا چاہئے مندرجہ ذیل میں سے ایک: :values.',
    'string'               => 'یہ ہونا ضروری ہے ایک سٹرنگ ہے.',
    'timezone'             => 'یہ ہونا ضروری ہے ایک درست زون ہے.',
    'unique'               => 'اس نے پہلے ہی لے جایا گیا.',
    'uploaded'             => 'اس کے لئے میں ناکام رہے اپ لوڈ کریں.',
    'url'                  => 'اس کی شکل باطل ہے.',
    'uuid'                 => 'یہ ہونا ضروری ہے ایک درست UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
