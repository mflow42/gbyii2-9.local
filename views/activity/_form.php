<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_user_id')->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'login')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'started_at')->textInput() ?>

    <?= $form->field($model, 'ended_at')->textInput() ?>

    <?= $form->field($model, 'is_repeated')->textInput() ?>

    <?= $form->field($model, 'is_blocker')->textInput() ?>

  <div class="form-group">
      <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

    <?php ActiveForm::end(); ?>

</div>
