<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int        $id
 * @property string     $login
 * @property string     $password
 * @property string     $name
 * @property string     $email
 * @property int        $created_at
 * @property int        $updated_at
 * @property string     $auth_key
 * @property string     $access_token
 * @property int        $banned
 * @property int        $banned_at
 *
 * @property Activity[] $activities
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'name', 'email', 'created_at', 'banned'], 'required'],
            [['created_at', 'updated_at', 'banned', 'banned_at'], 'integer'],
            [['login', 'password', 'name', 'email'], 'string', 'max' => 50],
            [['auth_key', 'access_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'           => 'ID',
            'login'        => 'Login',
            'password'     => 'Password',
            'name'         => 'Name',
            'email'        => 'Email',
            'created_at'   => 'Created At',
            'updated_at'   => 'Updated At',
            'auth_key'     => 'Auth Key',
            'access_token' => 'Access Token',
            'banned'       => 'Banned',
            'banned_at'    => 'Banned At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(Activity::className(), ['fk_user_id' => 'id']);
    }
}
