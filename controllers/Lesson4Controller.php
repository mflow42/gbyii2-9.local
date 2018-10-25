<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.10.2018
 * Time: 12:03
 */

namespace app\controllers;

use yii\web\Controller;
use yii\db\Query;


class Lesson4Controller extends Controller {
  public function actionIndex() {
    //SQL запросы
    
    //Все записи
    //$data = \Yii::$app->db->createCommand('SELECT * FROM person')->queryAll();
    
    //Одна запись
    $data = \Yii::$app->db->createCommand('SELECT * FROM person')->queryOne();
    
    //Получение одной колонки
    $column = \Yii::$app->db->createCommand('SELECT name FROM person')->queryColumn();
    
    //Получение одного значения - обвчно используется с агрегатными функциями
    $count = \Yii::$app->db->createCommand('SELECT count(*) FROM person')->queryScalar();
    
    //Привязка параметров
    $idParam = 3;
    $dataParam = \Yii::$app->db->createCommand('SELECT * FROM person where id =:id ')
            ->bindValue(':id', $idParam)
            ->queryOne();
    
    $sql = 'select p.id, p.name, ps.id, ps.name from `person` p right JOIN `position` ps on ps.id = p.position_id;';
    $dataStrong = \Yii::$app->db->createCommand($sql)->queryAll();
    
    return $this->render('index', [
            'data' => $data,
            'column' => $column,
            'count' => $count,
            'dataParam' => $dataParam,
            'dataStrong' => $dataStrong,
    ]);
  }
  
  public function actionInsert() {
    //insert, update, delete
    \Yii::$app->db->createCommand()->insert('person', [
            'name' => 'Новый пользователь',
            'position_id' => 2
    ])->execute();
  }
  
  public function actionTransaction(){
    $currentDb = \Yii::$app->db;
    $transaction = $currentDb->beginTransaction();
    
    try {
      \Yii::$app->db->createCommand()->insert('person', [
              'name' => 'Новый пользователь 2 (tr)',
              'position_id' => 2
      ])->execute();
      \Yii::$app->db->createCommand()->insert('person', [
              'name' => 'Новый пользователь 3 (tr)',
              'position_id' => 3
      ])->execute();
      
      //Если все успешно
      $transaction->commit();
      //Если не успешно
      //$transaction->rollBack();
    } catch (\Exception $exception) {
      $transaction->rollBack(); //Отмена транзакции
      throw $exception;
    }
    
  }
  
  public function actionDao() {
    
    $query = (new Query())
            ->select('*')
            ->from('person')
            ->limit(2);
    $data = $query->all();
    
    $query2 = (new Query())
            ->select('id, name')
            ->from('person')
            ->where(['id' => 2])
            ->limit(1);
    $data2 = $query2->one();
    
    $queryWithParam = (new Query())
            ->select(['id', 'name'])
            ->from('person')
            ->where('id=:id')
            ->addParams([':id' => 3])
            ->limit(1);
  
    $sqlOne = $queryWithParam->createCommand()->sql;
    $sqlTwo = $queryWithParam->createCommand()->rawSql; //С учетом всех параметров
    
    $dataWithParam = $queryWithParam->one();
    
//select p.id, p.name, ps.id, ps.name from `person` p inner JOIN `position` ps on ps.id = p.position_id;

    $queryJoin = (new Query())
            ->select('p.id, p.name, ps.id, ps.name')
            ->from('`person` p')
            ->innerJoin('`position` ps', 'ps.id = p.position_id');
    $sql = $queryJoin->createCommand()->sql;
    $dataJoin = $queryJoin->all();
    
    
    return $this->render('dao', [
            'data'=>$data,
            'data2'=>$data2,
            'dataWithParam'=>$dataWithParam,
            'dataJoin'=>$dataJoin,
            'sql'=>$sql,
            'sqlOne'=>$sqlOne,
            'sqlTwo'=>$sqlTwo,
    ]);
  }
}