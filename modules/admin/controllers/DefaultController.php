<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller {
  /**
   * Renders the index view for the module
   * @return string
   */
  public function actionIndex() {
    if (!\Yii::$app->cache->exists('data')) {
      \Yii::$app->cache->set('data', time());
    }
    return $this->render('index');
  }
}
