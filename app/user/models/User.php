<?php

namespace app\user\models;

use \Yii;
use app\user\models\meta\UserMeta;
use steroids\auth\models\AuthConfirm;
use steroids\auth\UserInterface;
use steroids\auth\UserTrait;

/**
 * @property-read string $name
 */
class User extends UserMeta implements UserInterface
{
    use UserTrait;

    /**
     * @inheritDoc
     */
    public function fields()
    {
        return array_merge(parent::fields(), [
            'name',
            'email',
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->username ?: '#' . $this->primaryKey;
    }

    /**
     * @param string $templateName
     * @param array $params
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function sendNotify($templateName, $params = [])
    {
        if (!$this->isUnSubscribed || $templateName === AuthConfirm::TEMPLATE_NAME) {
            Yii::$app->notifier->send(null, $templateName, $params, $this->language);
        }
    }

    /**
     * @inheritDoc
     * @throws \Throwable
     */
    public function beforeDelete()
    {
        foreach ($this->confirms as $confirm) {
            $confirm->deleteOrPanic();
        }
        foreach ($this->logins as $login) {
            $login->deleteOrPanic();
        }

        return parent::beforeDelete();
    }

}
