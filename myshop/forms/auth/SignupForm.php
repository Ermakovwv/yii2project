<?php

namespace myshop\forms\auth;

use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    /**
     * Необходимые поля для регистрации
     *
     * @inheritdoc
     */
    public function rules()
    {

        // Условия проверки ввода данных
        return [
            ['username', 'trim'],
            ['username', 'required'],
            // Проверка существования логина
            ['username', 'unique', 'targetClass' => '\myshop\entities\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            // Проверка существования email
            ['email', 'unique', 'targetClass' => '\myshop\entities\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }
}
