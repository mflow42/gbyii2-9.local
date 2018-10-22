<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 12:03
 */

namespace app\controllers;

use app\models\ReviewForm;
use yii\web\Controller;


class Lesson2Controller extends Controller {
  public function actionIndex() {
    $time = time();
    return $this->render('index',
            ['time' => $time]
    );
  }
  
  //Review
  public function actionReview() {
    $model = new ReviewForm();
    return $this->render('review', [
            'model' => $model
    ]);
  }
}