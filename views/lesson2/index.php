<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 12:08
 */
/** @var $time string Текущее время в сек с 1970 года */
/** @var $this \yii\base\View */

?>

<h1>It is works!</h1>

<p>Time: <?= date('j.m.Y', $time) ?></p>

<hr>
<h1>Вариант 1 (когда файл находится в той же папке с view)</h1>

<?= $this->context->renderPartial('part') ?>

<hr>

<h1>Вариант 2 (когда файл находится в другой папке)</h1>
<?= Yii::$app->view->renderFile('@app/views/parts/fragment.php') ?>

<hr>

<h1>Алиасы</h1>

<?php
Yii::setAlias('@one', '/path/to/one')
?>

<ul>
  <li>@app - root каталог: <?= Yii::getAlias('@app') ?></li>
  <li>@yii - каталог, где находится BaseYii.php: <?= Yii::getAlias('@yii') ?></li>
  <li>@runtime - каталог с отладочной информацией: <?= Yii::getAlias('@runtime') ?></li>
  <li>@vendor - каталог с зависимостями: <?= Yii::getAlias('@vendor') ?></li>
  <li>@webroot - каталог текущего приложения (папка web): <?= Yii::getAlias('@webroot') ?></li>
  <li>@one - пользовательский алиас: <?= Yii::getAlias('@webroot') ?></li>
  <li>@bower: <?= Yii::getAlias('@bower') ?></li>
</ul>