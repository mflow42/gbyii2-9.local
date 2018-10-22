<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 12:14
 */

namespace app\models;

use yii\base\Model;

class ReviewForm extends Model {
  public $title = 'Название отзыва';
  public $content;
  public $email;
  
  public function rules() {
    return [[['title', 'content'], 'required'], //Обязательные поля
            [['title', 'content', 'email'], 'string'], //Значения должны быть строковыми
            ['email', 'email'] //Проверка на email
    ];
  }
  
  public function attributeLabels() {
    return [
            'title' => 'Название отзыва',
            'content' => 'Текст',
            'email' => 'Адрес электронной почты',
            ];
  }
  
  
}