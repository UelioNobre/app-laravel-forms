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

    'accepted' => 'O campo :attribute deve ser aceitável.',
    'accepted_if' => 'O campo :attribute deve ser aceitável quando :other é :value.',
    'active_url' => 'O campo :attribute deve seruma URL válida.',
    'after' => 'O campo :attribute deve ser uma data depois :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data depois ou igual a :date.',
    'alpha' => 'O campo :attribute deve conter somente letras.',
    'alpha_dash' => 'O campo :attribute deve conter somente letras, numbers, dashes, and underscores.',
    'alpha_num' => 'O campo :attribute deve conter somente letras e numeros.',
    'array' => 'O campo :attribute deve ser an array.',
    'ascii' => 'O campo :attribute must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'O campo :attribute deve ser uma data anterior :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'array' => 'O campo :attribute deve ter entre :min e :max items.',
        'file' => 'O campo :attribute deve estar entre :min e :max kilobytes.',
        'numeric' => 'O campo :attribute deve estar entre :min and :max.',
        'string' => 'O campo :attribute deve estar entre :min e :max characters.',
    ],
    'boolean' => 'O campo :attribute deve ser true or false.',
    'can' => 'O campo :attribute contém algum valor não autorizado.',
    'confirmed' => 'O campo :attribute confirmation does not match.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O campo :attribute deve ser a valid date.',
    'date_equals' => 'O campo :attribute deve ser a date equal to :date.',
    'date_format' => 'O campo :attribute must match the format :format.',
    'decimal' => 'O campo :attribute must have :decimal decimal places.',
    'declined' => 'O campo :attribute deve ser declined.',
    'declined_if' => 'O campo :attribute deve ser declined quando :other é :value.',
    'different' => 'O campo :attribute and :other must be different.',
    'digits' => 'O campo :attribute deve ser :digits digits.',
    'digits_between' => 'O campo :attribute deve estar entre :min e :max digits.',
    'dimensions' => 'O campo :attribute has invalid image dimensions.',
    'distinct' => 'O campo :attribute has a duplicate value.',
    'doesnt_end_with' => 'O campo :attribute must not end with one of the following: :values.',
    'doesnt_start_with' => 'O campo :attribute must not start with one of the following: :values.',
    'email' => 'O campo :attribute deve ser a valid email address.',
    'ends_with' => 'O campo :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'extensions' => 'O campo :attribute must have one of the following extensions: :values.',
    'file' => 'O campo :attribute deve ser a file.',
    'filled' => 'O campo :attribute must have a value.',
    'gt' => [
        'array' => 'O campo :attribute must have more than :value items.',
        'file' => 'O campo :attribute deve ser greater than :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser greater than :value.',
        'string' => 'O campo :attribute deve ser greater than :value characters.',
    ],
    'gte' => [
        'array' => 'O campo :attribute must have :value items or more.',
        'file' => 'O campo :attribute deve ser greater than ou igual a :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser greater than ou igual a :value.',
        'string' => 'O campo :attribute deve ser greater than ou igual a :value characters.',
    ],
    'hex_color' => 'O campo :attribute deve ser a valid hexadecimal color.',
    'image' => 'O campo :attribute deve ser an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'O campo :attribute must exist in :other.',
    'integer' => 'O campo :attribute deve ser an integer.',
    'ip' => 'O campo :attribute deve ser a valid IP address.',
    'ipv4' => 'O campo :attribute deve ser a valid IPv4 address.',
    'ipv6' => 'O campo :attribute deve ser a valid IPv6 address.',
    'json' => 'O campo :attribute deve ser a valid JSON string.',
    'lowercase' => 'O campo :attribute deve ser lowercase.',
    'lt' => [
        'array' => 'O campo :attribute must have less than :value items.',
        'file' => 'O campo :attribute deve ser less than :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser less than :value.',
        'string' => 'O campo :attribute deve ser less than :value characters.',
    ],
    'lte' => [
        'array' => 'O campo :attribute não deve ser maior que :value items.',
        'file' => 'O campo :attribute deve ser less than ou igual a :value kilobytes.',
        'numeric' => 'O campo :attribute deve ser less than ou igual a :value.',
        'string' => 'O campo :attribute deve ser less than ou igual a :value characters.',
    ],
    'mac_address' => 'O campo :attribute deve ser a valid MAC address.',
    'max' => [
        'array' => 'O campo :attribute não deve ser maior que :max items.',
        'file' => 'O campo :attribute não deve ser maior que :max kilobytes.',
        'numeric' => 'O campo :attribute não deve ser maior que :max.',
        'string' => 'O campo :attribute não deve ser maior que :max characters.',
    ],
    'max_digits' => 'O campo :attribute não deve ser maior que :max digits.',
    'mimes' => 'O campo :attribute deve ser a file of type: :values.',
    'mimetypes' => 'O campo :attribute deve ser a file of type: :values.',
    'min' => [
        'array' => 'O campo :attribute deve ter no mínimo :min items.',
        'file' => 'O campo :attribute deve ter no mínimo :min kilobytes.',
        'numeric' => 'O campo :attribute deve ter no mínimo :min.',
        'string' => 'O campo :attribute deve ter no mínimo :min characters.',
    ],
    'min_digits' => 'O campo :attribute deve ter no mínimo :min digits.',
    'missing' => 'O campo :attribute deve ser missing.',
    'missing_if' => 'O campo :attribute deve ser missing quando :other é :value.',
    'missing_unless' => 'O campo :attribute deve ser missing unless :other is :value.',
    'missing_with' => 'O campo :attribute deve ser missing when :values is present.',
    'missing_with_all' => 'O campo :attribute deve ser missing when :values are present.',
    'multiple_of' => 'O campo :attribute deve ser a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'O campo :attribute format is invalid.',
    'numeric' => 'O campo :attribute deve ser a number.',
    'password' => [
        'letters' => 'O campo :attribute must contain at least one letter.',
        'mixed' => 'O campo :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'O campo :attribute must contain at least one number.',
        'symbols' => 'O campo :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'O campo :attribute deve ser present.',
    'present_if' => 'O campo :attribute deve ser present quando :other é :value.',
    'present_unless' => 'O campo :attribute deve ser present unless :other is :value.',
    'present_with' => 'O campo :attribute deve ser present when :values is present.',
    'present_with_all' => 'O campo :attribute deve ser present when :values are present.',
    'prohibited' => 'O campo :attribute is prohibited.',
    'prohibited_if' => 'O campo :attribute is prohibited quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute is prohibited unless :other is in :values.',
    'prohibits' => 'O campo :attribute prohibits :other from being present.',
    'regex' => 'O campo :attribute format is invalid.',
    'required' => 'O campo :attribute is required.',
    'required_array_keys' => 'O campo :attribute must contain entries for: :values.',
    'required_if' => 'O campo :attribute is required quando :other é :value.',
    'required_if_accepted' => 'O campo :attribute is required when :other is aceitável.',
    'required_unless' => 'O campo :attribute is required unless :other is in :values.',
    'required_with' => 'O campo :attribute is required when :values is present.',
    'required_with_all' => 'O campo :attribute is required when :values are present.',
    'required_without' => 'O campo :attribute is required when :values is not present.',
    'required_without_all' => 'O campo :attribute is required when none of :values are present.',
    'same' => 'O campo :attribute must match :other.',
    'size' => [
        'array' => 'O campo :attribute must contain :size items.',
        'file' => 'O campo :attribute deve ser :size kilobytes.',
        'numeric' => 'O campo :attribute deve ser :size.',
        'string' => 'O campo :attribute deve ser :size characters.',
    ],
    'starts_with' => 'O campo :attribute must start with one of the following: :values.',
    'string' => 'O campo :attribute deve ser a string.',
    'timezone' => 'O campo :attribute deve ser a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'O campo :attribute deve ser uppercase.',
    'url' => 'O campo :attribute deve seruma URL válida.',
    'ulid' => 'O campo :attribute deve ser a valid ULID.',
    'uuid' => 'O campo :attribute deve ser a valid UUID.',

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
 | The following language lines are used to swap our attribute placeholder
 | with something more reader friendly such as "E-Mail Address" instead
 | of "email". This simply helps us make our message more expressive.
 |
 */

    'attributes' => [],

];
