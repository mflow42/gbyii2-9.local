<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 12:21
 */

/** @var $model \app\models\ReviewForm */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>

<div class="lesson2-review">
  <?php $form = ActiveForm::begin([//'id' => 'lesson2-review',
          ]
  ) ?>
  
  <?= $form->field($model, 'title')->textInput() ?>
  <?= $form->field($model, 'content')->textarea() ?>
  <?= $form->field($model, 'email')->textInput(['type' => 'email']) ?>
  
  <div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
  </div>
  
  <?php ActiveForm::end() ?>
</div>