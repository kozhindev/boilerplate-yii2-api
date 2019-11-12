<?php

return [
    'bootstrap' => ['debug'],
    'components' => [
        'mailer' => [
            'useFileTransport' => true,
        ],
    ],
    'modules' => [
        'debug' => 'yii\debug\Module',
        'gii' => [
            'generateJsMeta' => false,
        ],
    ],
];
