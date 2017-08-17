<?php

namespace common\bootstrap;

use myshop\services\auth\AuthService;
use myshop\services\auth\PasswordResetService;
use myshop\services\auth\SignupService;
use myshop\services\ContactService;
use myshop\services\auth\NetworkService;
use yii\base\BootstrapInterface;
use yii\di\Instance;
use yii\mail\MailerInterface;

/**
 * Class SetUp
 * @package common\bootstrap
 */
class SetUp implements BootstrapInterface
{
    /**
     * При создании сервиса создаётся его объект
     *
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $container = \Yii::$container;
        //$container->setSingleton(PasswordResetService::class);
        // При парсинге конструктора при недостающем параметре вызовется через рефлексию
        $container->setSingleton(MailerInterface::class, function () use ($app) {
            return $app->mailer;
        });
        $container->setSingleton(ContactService::class,[],[$app->params['adminEmail']]);
        $container->setSingleton(SignupService::class);
        $container->setSingleton(AuthService::class);
        $container->setSingleton(NetworkService::class);

    }
}