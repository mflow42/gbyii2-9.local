<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 14:37
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use \app\assets\CalendarAsset;

?>
<!--<h1>--><? //= $model->title ?><!--</h1>-->
<!--<a class="btn btn-primary active" href="--><? //= Url::to(['calendar/add']) ?><!--" role="button" aria-pressed="true"">Добавить событие</a>-->

<?php
CalendarAsset::register($this);

//$action = \Yii::$app->request->get('action');
//$day = \Yii::$app->request->get('day');
//$year = \Yii::$app->request->get('year');
//$dates = $model->getDates($action, $day, $year);
//$now = getdate();
?>
<div class="calendar">
  <div class="calendar__head">
    <div class="calendar__month"><?= Html::encode($dates[1]['month']) . ' ' . Html::encode($dates[1]['year']) . ' г.' ?> </div>
      <?php
      echo Nav::widget([
          'options' => ['class' => 'calendar__nav'],
          'items'   => [
              [
                  'label' => '<',
                  'url'   => Url::to(['/calendar/index', 'day' => $day, 'year' => $year, 'action' => 'prev'])
              ],
              [
                  'label' => '>',
                  'url'   => Url::to(['/calendar/index', 'day' => $day, 'year' => $year, 'action' => 'next'])
              ],
          ]
      ]);
      ?>
  </div>
  <div class="calendar__title">
    <div>пн</div>
    <div>вт</div>
    <div>ср</div>
    <div>чт</div>
    <div>пт</div>
    <div>сб</div>
    <div>вс</div>
  </div>
  <div class="calendar__flex">
<!--      --><?php //foreach ($dates as $date): ?>
<!--        <div class="calendar__day day">-->
<!--          <div class="day__head">-->
<!--              --><?php //if ($date['day'] === $now['mday'] && $date['month'] === $now['month'] && $date['year'] === $now['year']): ?>
<!--                <div class="day__date day__date_now">--><?//= Html::encode($date['day']) ?><!-- --><?//= Html::encode($date['month']) ?><!--</div>-->
<!--              --><?php //else: ?>
<!--                <div class="dat__date">--><?//= Html::encode($date['day']) ?><!-- --><?//= Html::encode($date['month']) ?><!--</div>-->
<!--              --><?php //endif; ?>
<!--            <a href="--><?//= Url::to(['/activity/add', 'id' => 1]) ?><!--" class="day__event">Тестовое событие</a>-->
<!--          </div>-->
<!--          <a href="--><?//= Url::toRoute('/calendar/add') ?><!--" class="day__create">+</a>-->
<!--        </div>-->
<!--      --><?php //endforeach; ?>
  </div>
</div>
<?php var_dump($activities);