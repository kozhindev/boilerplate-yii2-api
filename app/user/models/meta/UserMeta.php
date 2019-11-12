<?php

namespace app\user\models\meta;

use steroids\auth\models\AuthConfirm;
use steroids\auth\models\AuthLogin;
use steroids\base\Model;
use steroids\behaviors\TimestampBehavior;
use steroids\validators\PhoneValidator;
use \Yii;
use yii\db\ActiveQuery;

/**
 * @property string $id
 * @property string $role
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $passwordHash
 * @property string $language
 * @property boolean $isBanned
 * @property boolean $isUnSubscribed
 * @property string $createTime
 * @property string $updateTime
 * @property-read AuthLogin[] $logins
 * @property-read AuthConfirm[] $confirms
 */
abstract class UserMeta extends Model
{
    public static function tableName()
    {
        return 'users';
    }

    public function fields()
    {
        return [
            'id',
            'role',
        ];
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
            [['role', 'username', 'email'], 'string', 'max' => 255],
            ['email', 'required'],
            ['email', 'email'],
            ['phone', PhoneValidator::class],
            ['passwordHash', 'string'],
            ['language', 'string', 'max' => '10'],
            [['isBanned', 'isUnSubscribed'], 'boolean'],
        ]);
    }

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            TimestampBehavior::class,
        ]);
    }

    /**
     * @return ActiveQuery
     */
    public function getLogins()
    {
        return $this->hasMany(AuthLogin::class, ['userId' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getConfirms()
    {
        return $this->hasMany(AuthConfirm::class, ['userId' => 'id']);
    }

    public static function meta()
    {
        return array_merge(parent::meta(), [
            'id' => [
                'label' => Yii::t('app', 'ИД'),
                'appType' => 'primaryKey',
                'isPublishToFrontend' => true
            ],
            'role' => [
                'label' => Yii::t('app', 'Роль'),
                'isPublishToFrontend' => true
            ],
            'username' => [
                'isPublishToFrontend' => true
            ],
            'email' => [
                'label' => Yii::t('app', 'Email'),
                'appType' => 'email',
                'isRequired' => true,
                'isPublishToFrontend' => true
            ],
            'phone' => [
                'label' => Yii::t('app', 'Телефон'),
                'appType' => 'phone',
            ],
            'passwordHash' => [
                'label' => Yii::t('app', 'Пароль'),
                'appType' => 'text'
            ],
            'language' => [
                'label' => Yii::t('app', 'Язык'),
                'stringLength' => '10'
            ],
            'isBanned' => [
                'label' => Yii::t('app', 'Заблокирован?'),
                'appType' => 'boolean',
                'isPublishToFrontend' => true
            ],
            'isUnSubscribed' => [
                'appType' => 'boolean'
            ],
            'createTime' => [
                'label' => Yii::t('app', 'Дата регистрации'),
                'appType' => 'autoTime'
            ],
            'updateTime' => [
                'label' => Yii::t('app', 'Дата обновления'),
                'appType' => 'autoTime',
                'touchOnUpdate' => true
            ],
        ]);
    }
}
