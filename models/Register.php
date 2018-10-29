<?php

namespace app\models;
use Yii;


/**
 * This is the model class for table "register".
 *
 * @property string $login
 * @property string $password
 *
 * @property Register $register
 */
class Register extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'register';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
