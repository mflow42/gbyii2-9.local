<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 14:37
 */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\helpers\Url;

?>
<h1><?= $model->title ?></h1>
<a class="btn btn-primary active" href="<?= Url::to(['calendar/add']) ?>" role="button" aria-pressed="true"">Добавить событие</a>

