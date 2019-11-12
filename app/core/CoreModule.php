<?php

namespace app\core;

use steroids\base\Module;
use steroids\base\WebApplication;
use steroids\middleware\AccessMiddleware;
use steroids\middleware\AjaxResponseMiddleware;
use yii\base\BootstrapInterface;

class CoreModule extends Module implements BootstrapInterface
{
    /**
     * @param WebApplication $app
     */
    public function bootstrap($app)
    {
        if ($app instanceof WebApplication && !YII_ENV_TEST) {
            AccessMiddleware::register($app);
            AjaxResponseMiddleware::register($app);
        }
    }
}
