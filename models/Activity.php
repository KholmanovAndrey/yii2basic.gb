<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 24.11.2019
 * Time: 18:36
 */

namespace app\models;

use yii\db\ActiveRecord;

class Activity extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name', 'content', 'started_at'], 'required'],
            [['user_id', 'cycle', 'main'], 'integer'],
            [['started_at', 'finished_at', 'created_at', 'updated_at'], 'safe'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Название',
            'started_at' => 'Время начала задачи',
            'finished_at' => 'Время завершения задачи',
            'created_at' => 'Время создания задачи',
            'updated_at' => 'Время обновления задачи',
            'content' => 'Описание',
            'cycle' => 'Цикличность',
            'main' => 'Главная задача',
        ];
    }
}