<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 0:18
 */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

//use yii\helpers\Html;
//use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\CalendarFormAdd */
/* @var $form ActiveForm */
?>
<div class="calendar-add">
  <?php $form = ActiveForm::begin([//'id' => 'lesson2-review',
          ]
  ) ?>
  
  <div class="form-group">
    <div><?= $form->field($model, 'title')->textInput() ?></div>
    <div><?= $form->field($model, 'startDay')->textInput(['type' => 'date']) ?></div>
    <div><?= $form->field($model, 'endDay')->textInput(['type' => 'date']) ?></div>
    <div><?= $form->field($model, 'idAuthor')->textInput(['type' => 'number']) ?></div>
    <div><?= $form->field($model, 'body')->textarea() ?></div>
    <div><?= Html::checkbox('isRepeat', false, ['label' => 'Повторяющееся']) ?></div>
    <div><?= Html::checkbox('isBlocker', false, ['label' => 'Блокирующее']) ?></div>
    <div><?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?></div>
  </div>
  
  <?php ActiveForm::end() ?>
</div>