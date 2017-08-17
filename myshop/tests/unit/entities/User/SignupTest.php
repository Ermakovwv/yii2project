<?php

namespace myshop\tests\unit\entities\User;


use Codeception\Test\Unit;
use myshop\entities\User;

/**
 * Class SignupTest
 * @package common\tests\unit\entities\User
 */
class SignupTest extends Unit
{
    /**
     *  Тест регистрации
     */
    public function testSuccess()
    {
        $user = User::requestSignup(
            $username = 'username',
            $email = 'email@site.com',
            $password = 'password'
        );

        $this->assertEquals($username, $user->username);
        $this->assertEquals($email, $user->email);
        $this->assertNotEmpty($user->password_hash);
        $this->assertNotEquals($password, $user->password_hash);
        $this->assertNotEmpty($user->created_at);
        $this->assertNotEmpty($user->auth_key);
        $this->assertEquals(User::STATUS_WAIT, $user->status);
    }
}
