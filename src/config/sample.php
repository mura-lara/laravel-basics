<?php

return [
    'message' => 'これはconfigで定義されたメッセージです。',
    'flag' => true,
    'num' => 1,
    'array' => ['array_value1','array_value2','array_value3'],
    'env' => env('CONFIG_SAMPLE_TEXT', 'envに定義がない場合のテキスト'),
];