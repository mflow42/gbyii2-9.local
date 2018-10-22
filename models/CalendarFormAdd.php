<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 14:17
 */

namespace app\models;

use yii\base\Model;

/**
 * Activity класс
 *
 * Отражает сущность хранимого в календаре события
 */
class CalendarFormAdd extends Model {
  /**
   * Название события
   *
   * @var string
   */
  public $title;
  
  /**
   * День начала события. Хранится в Unix timestamp
   *
   * @var int
   */
  public $startDay;
  
  /**
   * День завершения события. Хранится в Unix timestamp
   *
   * @var int
   */
  public $endDay;
  
  /**
   * ID автора, создавшего события
   *
   * @var int
   */
  public $idAuthor;
  
  /**
   * Описание события
   *
   * @var string
   */
  public $body;
  
  /**
   * Повторяющееся или нет
   *
   * @var bool
   */
  public $isRepeat = false;
  
  /**
   * Является ли блокирующим
   *
   * @var bool
   */
  public $isBlocker = false;
  
  /**
   * Выходной или рабочий день
   *
   * @var string
   */
  public $isWeekend;
  
  public function rules()
  {
    return [
      // name, email, subject and body are required
      [['title', 'startDay', 'endDay', 'body'], 'required'],
      // verifyCode needs to be entered correctly
      ['verifyCode', 'captcha'],
    ];
  }
  
  public function attributeLabels()
  {
    return [
            'title' => 'Название события',
            'startDay' => 'Дата начала',
            'endDay' => 'Дата завершения',
            'isWeekend' => 'Выходного дня',
            'idAuthor' => 'Инициатор',
            'body' => 'Описание события',
            'isRepeat' => 'Повторяющееся',
            'isBlocker' => 'Блокирующее',
    ];
  }
}