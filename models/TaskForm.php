<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 27.11.2019
 * Time: 14:24
 */

namespace app\models;

use yii\base\Model;

class TaskForm extends Model
{
    public $id;
    public $name;
    public $date;
    public $text;

    public function rules()
    {
        return [
            [['name', 'date', 'text'], 'required'],
            [['name', 'date', 'text'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Задача',
            'date' => 'Дата',
            'text' => 'Описание',
        ];
    }
}