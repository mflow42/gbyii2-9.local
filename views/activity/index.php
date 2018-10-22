<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 14:37
 */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>
  <h1><?= $model->title ?></h1>

<?php if ($model->startDay == $model->endDay): ?>
  <p>Событие на <?= date("d.m.Y", $model->startDay) ?></p>
<?php else: ?>
  <p>Событие c <?= date("d.m.Y", $model->startDay) ?> по <?= date("d.m.Y", $model->endDay) ?></p>
<?php endif; ?>
  
  <h3><?= $model->getAttributeLabel('body') ?></h3>
  <div><?= $model->body ?></div>
  
  <h3><?= $model->getAttributeLabel('idAuthor') ?></h3>
  <div><?= $model->idAuthor ?></div>
  
  <h3><?= $model->getAttributeLabel('isRepeat') ?></h3>
<?php if ($model->isRepeat === true): ?>
  <span>Да</span>
<?php else: ?>
  <span>Нет</span>
<?php endif; ?>
  
  <h3><?= $model->getAttributeLabel('isBlocker') ?></h3>
<?php if ($model->isBlocker === true): ?>
  <span>Да</span>
<?php else: ?>
  <span>Нет</span>
<?php endif; ?>
  
  <h3><?= $model->getAttributeLabel('isWeekend') ?></h3>
<?php if ($model->isWeekend === true): ?>
  <span>Да</span>
<?php else: ?>
  <span>Нет</span>
<?php endif; ?>