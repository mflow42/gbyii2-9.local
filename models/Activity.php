<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property int    $id
 * @property int    $fk_user_id
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $started_at
 * @property string $ended_at
 * @property int    $is_repeated
 * @property int    $is_blocker
 *
 * @property User   $fkUser
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_user_id', 'title', 'description'], 'required'],
            [['fk_user_id', 'is_repeated', 'is_blocker'], 'integer'],
            [['created_at', 'updated_at', 'started_at', 'ended_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 2000],
            [
                ['fk_user_id'],
                'exist',
                'skipOnError'     => true,
                'targetClass'     => User::className(),
                'targetAttribute' => ['fk_user_id' => 'id']
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => 'ID',
            'fk_user_id'  => 'Fk User ID',
            'title'       => 'Title',
            'description' => 'Description',
            'created_at'  => 'Created At',
            'updated_at'  => 'Updated At',
            'started_at'  => 'Started At',
            'ended_at'    => 'Ended At',
            'is_repeated' => 'Is Repeated',
            'is_blocker'  => 'Is Blocker',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkUser()
    {
        return $this->hasOne(User::className(), ['id' => 'fk_user_id']);
    }
}
