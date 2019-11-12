<?php

namespace app\user\enums\meta;

use Yii;
use steroids\base\Enum;

abstract class UserRoleMeta extends Enum
{
    const ADMIN = 'admin';
    const MODERATOR = 'moderator';
    const USER = 'user';

    public static function getLabels()
    {
        return [
            self::ADMIN => Yii::t('app', 'Администратор'),
            self::MODERATOR => Yii::t('app', 'Модератор'),
            self::USER => Yii::t('app', 'Пользователь')
        ];
    }
}
