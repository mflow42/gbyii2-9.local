<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 0:05
 */

namespace app\controllers;

class DayController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}