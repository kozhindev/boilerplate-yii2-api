<?php

use steroids\helpers\DefaultConfig;

return DefaultConfig::getWebConfig([
    'components' => [
        'request' => [
            'cookieValidationKey' => '7bQvXpI1iKZHdn68JbHUGoDu2qfNOTse',
        ],
        'user' => [
            'class' => 'app\auth\components\ContextTokenUser',
        ],
    ],
]);
