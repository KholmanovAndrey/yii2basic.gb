<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 24.11.2019
 * Time: 18:36
 */

namespace app\models;

use yii\base\Model;

class Activity extends Model
{
    public $cycle;
    public $isBlocked; // 0 - блокируем, 1 - не блокируем

    public function day($cycle, $main)
    {
        if ($main) {
            // TODO заглушка
        }
    }
}