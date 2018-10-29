<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 14:26
 */

namespace app\controllers;

use app\models\Activity;
use yii\web\Controller;

class ActivityController extends Controller
{
    //Review
    public function actionIndex()
    {
        $model = new Activity('Тестовое событие', time(), time() + (60 * 60 * 24 * 7), 'Хемингуэй', 'Описание', 'false',
                'false', 'false');
        return $this->render('index', ['model' => $model]);
    }

    public function actionCreate()
    {
        return "Создание активности";
    }
}