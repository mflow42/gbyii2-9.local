<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 0:10
 */

namespace app\models;

use yii\base\Model;


class Day extends Model
{
    /**
     * Тип рабочий/выходной
     * @var string
     */
    public $type;

    public function getEvent($eventId) {

    }

    public function getEvents($userId, $dayId) {

    }

    public function addEvent($title, $startDay, $idAuthor, $body, $endDay) {

    }
}