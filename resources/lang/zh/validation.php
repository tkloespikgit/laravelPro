<?php
return [
    'unique'               => ':attribute已存在',
    'accepted'             => ':attribute是被接受的',
    'active_url'           => ':attribute必须是一个合法的 URL',
    'after'                => ':attribute必须是 :date 之后的一个日期',
    'alpha'                => ':attribute必须全部由字母字符构成。',
    'alpha_dash'           => ':attribute必须全部由字母、数字、中划线或下划线字符构成',
    'alpha_num'            => ':attribute必须全部由字母和数字构成',
    'array'                => ':attribute必须是个数组',
    'before'               => ':attribute必须是 :date 之前的一个日期',
    'between'              => [
        'numeric' => ':attribute必须在 :min 到 :max 之间',
        'file'    => ':attribute必须在 :min 到 :max KB之间',
        'string'  => ':attribute必须在 :min 到 :max 个字符之间',
        'array'   => ':attribute必须在 :min 到 :max 项之间',
    ],
    'boolean'              => ':attribute字符必须是 true 或 false',
    'confirmed'            => ':attribute二次确认不匹配',
    'date'                 => ':attribute必须是一个合法的日期',
    'date_format'          => ':attribute与给定的格式 :format 不符合',
    'different'            => ':attribute必须不同于:other',
    'digits'               => ':attribute必须是 :digits 位',
    'digits_between'       => ':attribute必须在 :min and :max 位之间',
    'email'                => ':attribute必须是一个合法的电子邮件地址。',
    'filled'               => ':attribute的字段是必填的',
    'exists'               => '选定的 :attribute是无效的',
    'image'                => ':attribute必须是一个图片 (jpeg, png, bmp 或者 gif)',
    'in'                   => '选定的 :attribute是无效的',
    'integer'              => ':attribute必须是个整数',
    'ip'                   => ':attribute必须是一个合法的 IP 地址。',
    'max'                  => [
        'numeric' => ':attribute的最大长度为 :max 位',
        'file'    => ':attribute的最大为 :max',
        'string'  => ':attribute的最大长度为 :max 字符',
        'array'   => ':attribute的最大个数为 :max 个',
    ],
    'mimes'                => ':attribute的文件类型必须是:values',
    'min'                  => [
        'numeric' => ':attribute的最小长度为 :min 位',
        'string'  => ':attribute的最小长度为 :min 字符',
        'file'    => ':attribute大小至少为:min KB',
        'array'   => ':attribute至少有 :min 项',
    ],
    'not_in'               => '选定的 :attribute是无效的',
    'numeric'              => ':attribute必须是数字',
    'regex'                => ':attribute格式是无效的',
    'required'             => ':attribute字段必须填写',
    'required_if'          => ':attribute字段是必须的当 :other 是 :value',
    'required_with'        => ':attribute字段是必须的当 :values 是存在的',
    'required_with_all'    => ':attribute字段是必须的当 :values 是存在的',
    'required_without'     => ':attribute字段是必须的当 :values 是不存在的',
    'required_without_all' => ':attribute字段是必须的当 没有一个 :values 是存在的',
    'same'                 => ':attribute和 :other 必须匹配',
    'size'                 => [
        'numeric' => ':attribute必须是 :size 位',
        'file'    => ':attribute必须是 :size KB',
        'string'  => ':attribute必须是 :size 个字符',
        'array'   => ':attribute必须包括 :size 项',
    ],
    'url'                  => ':attribute无效的格式',
    'timezone'             => ':attribute必须个有效的时区',
    'uploaded'             => ':attribute上传失败.',
    'phone' => ':attribute不是合法的手机好',
    'captcha' => '图形验证码不正确',
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
    'custom'               => [
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
    'attributes'           => [
        'username' => '用户名',
        'account'  => '账号',
        'captcha'  => '验证码',
        'mobile'   => '手机号',
        'password' => '密码',
        'content'  => '内容',
        'identity' => '手机号/用户名',
    ],
];
