<?php

namespace app\auth\controllers;

use Yii;
use steroids\modules\steroids\controllers\SteroidsFieldsController;
use yii\helpers\Url;
use yii\web\Controller;

class InitController extends Controller
{
    public $enableCsrfValidation = false;

    public static function apiMap()
    {
        return [
            'init' => 'api/v1/init',
        ];
    }

    /**
     * Init data
     * @return array
     * @throws \Exception
     */
    public function actionInit()
    {
        $timestamp = Yii::$app->request->post('timestamp');
        return [
            'config' => [
                'http' => [
                    'csrfToken' => Yii::$app->request->csrfToken,
                ],
                'locale' => [
                    'language' => Yii::$app->language,
                    'backendTimeZone' => Yii::$app->timeZone === 'Europe/Moscow' ? '+0300' : '+0000',
                    'backendTimeDiff' => $timestamp ? round(microtime(true) * 1000 - $timestamp) : null,
                ],
                'ui' => [
                    'fields' => [
                        'form.FileField' => [
                            'backendUrl' => Url::to(['/file/upload/index']),
                        ],
                    ],
                ],
            ],
            'user' => Yii::$app->user->isGuest
                ? null
                : Yii::$app->user->model,
            'meta' => array_merge(
                SteroidsFieldsController::exportModels(\Yii::$app->request->post('models', [])),
                SteroidsFieldsController::exportEnums(\Yii::$app->request->post('enums', []))
            ),
            'homeUrl' => \Yii::$app->homeUrl,
        ];
    }
}
