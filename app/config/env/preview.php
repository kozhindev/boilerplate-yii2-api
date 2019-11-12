<?php

return [
    'runtimePath' => __DIR__ . '/../../../../files/runtime',
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../../../../files/assets',
        ],
        'mailer' => [
            'messageConfig' => [
                'from' => 'noreply@boilerplate-yii2-api.dev.kozhindev.com'
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'enableSchemaCache' => true,
        ],
        /*'log' => [
            'targets' => [
                [
                    'class' => 'notamedia\sentry\SentryTarget',
                    'dsn' => 'https://aaaaaaaaaaaaaaaaaaaaaaaa@sentry.kozhindev.com/bbbbb',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],*/
    ],
    'modules' => [
        'file' => [
            'filesRootPath' => __DIR__ . '/../../../../files/uploaded',
            'filesRootUrl' => '/files/uploaded',
        ],
    ],
];
