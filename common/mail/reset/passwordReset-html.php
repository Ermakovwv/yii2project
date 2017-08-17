<?php

use yii\helpers\Html;

/**
 * Генерит ссылку на восстановление пароля
 *
 * @var $this yii\web\View
 * @var $user myshop\entities\User
 */

    $resetLink = Yii::$app->urlManager->createAbsoluteUrl(['reset/confirm', 'token' => $user->password_reset_token]);
?>
<div class = "password-reset">
    <p>Hello <?= Html::encode($user->username) ?>,</p>

    <p>Follow the link below to reset your password:</p>

    <p><?php echo Html::a(Html::encode($resetLink),$resetLink); ?></p>
</div>
