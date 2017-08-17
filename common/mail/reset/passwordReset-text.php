<?php

/* @var $this yii\web\View */
/* @var $user myshop\entities\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['reset/confirm', 'token' => $user->password_reset_token]);
?>
Hello <?= $user->username ?>,

Follow the link below to reset your password:

<?php echo $resetLink; ?>
