<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 12:03
 */

namespace app\controllers;

use app\models\User;
use app\models\Register;
use yii\web\Controller;

class RegisterController extends Controller
{
    public function actionIndex()
    {
        $model = new Register();
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionAddUser()
    {
        $user = new User();
        $user->login = 'admin';
        $user->password = $user->getPasswordHash('1234');
        $user->name = 'Олег';

        if ($user->save()) {
            \Yii::info('Успешно');
        } else {

        }
    }
}
