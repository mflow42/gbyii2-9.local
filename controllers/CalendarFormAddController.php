<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 0:36
 */

namespace app\controllers;

use app\models\Calendar;
use yii\web\Controller;

class CalendarFormAdd {
  public function actionAdd() {
    $model = new CalendarForm();
    
    if ($model->load(\Yii::$app->request->post())){
      if($model->validate()) {
        // form inputs are valid, do something here
        return;
      }
    }
    
    return $this->render('add', [
            'model' => $model,
    ]);
  }
}