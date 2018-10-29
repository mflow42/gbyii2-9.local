<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.10.2018
 * Time: 1:02
 */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>
<div class="user-add">
    <?php $form = ActiveForm::begin([//'id' => 'lesson2-review',
        ]
    ) ?>

  <div class="form-group">
    <div><?= $form->field($model, 'login')->textInput() ?></div>
    <div><?= $form->field($model, 'password')->textInput() ?></div>
    <div><?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?></div>
  </div>

    <?php ActiveForm::end() ?>
</div>