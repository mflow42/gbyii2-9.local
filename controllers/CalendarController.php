<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 0:05
 */

namespace app\controllers;

use app\models\Calendar;
use app\models\CalendarFormAdd;
use yii\web\Controller;


class CalendarController extends Controller {
  public function actionIndex() {
    $model = new Calendar('Календарь');
    return $this->render('index', ['model' => $model]);
  }
  
  //Add
  public function actionAdd() {
    $model = new CalendarFormAdd();
    return $this->render('add', [
            'model' => $model
    ]);
  }
}