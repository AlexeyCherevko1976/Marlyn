<?php

namespace app\models;

use yii\base\Model;


class Signup extends Model
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['password', 'string', 'min'=>2, 'max'=>10],
        ];
    }


     
}
