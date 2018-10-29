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
use yii\helpers\Url;


class CalendarController extends Controller
{
    public function actionIndex()
    {
        $model = new Calendar();
        $now = getDate();

        if (!\Yii::$app->request->get('day')
            or !\Yii::$app->request->get('year')
            or \Yii::$app->request->get('year') < $now['year']
            or \Yii::$app->request->get('day') > 365
            or \Yii::$app->request->get('day') < 0
            or (\Yii::$app->request->get('year') == $now['year'] && \Yii::$app->request->get('day') <$now['yday'])
            or \Yii::$app->request->get('year') - $now['year'] > 1)
        {
            $data = $model -> getStartDay();
            $day = $data['day'];
            $year = $data['year'];
            $this -> redirect(Url::to(['/calendar/index', 'day' => $day, 'year' => $year]));
        }

        if (\Yii::$app->request->get('action')) {
            $action = \Yii::$app->request->get('action');
            $day = \Yii::$app->request->get('day');
            $year = \Yii::$app->request->get('year');
            $data = $model -> getStartDay($action, $day, $year);
            $day = $data['day'];
            $year = $data['year'];
            $this -> redirect(Url::to(['/calendar/index', 'day' => $day, 'year' => $year]));
        }

        return $this->render('index', ['model' => $model]);
    }

    //Add
    public function actionAdd()
    {
        $model = new CalendarFormAdd();
        return $this->render('add', [
            'model' => $model
        ]);
    }
}