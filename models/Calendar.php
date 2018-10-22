<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 0:10
 */

namespace app\models;
use yii\base\Model;


class Calendar extends Model {
  /**
   * Название события
   *
   * @var string
   */
  public $title;
  
  
  public function __construct($title) {
    parent::__construct();
    $this -> title = $title;
  }
  
  public function attributeLabels()
  {
    return [
            'title' => 'Календарь',
    ];
  }
  
}