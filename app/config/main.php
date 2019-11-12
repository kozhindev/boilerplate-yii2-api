<?php

use steroids\helpers\DefaultConfig;

return DefaultConfig::getMainConfig([
    'id' => 'boilerplate-yii2-api',
    'name' => 'Boilerplate Yii2 Api',
    'language' => 'ru',
    'timeZone' => 'UTC',
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=boilerplate-yii2-api',
            'username' => '',
            'password' => '',
            'charset' => 'utf8mb4',
        ],
        'mailer' => [
            'class' => '\yii\swiftmailer\Mailer',
            'htmlLayout' => '@app/core/layouts/mail',
        ],
    ],
    'params' => [
        'adminEmail' => '',
    ],
]);

