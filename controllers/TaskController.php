<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 26.11.2019
 * Time: 20:25
 */

namespace app\controllers;

use app\models\Activity;
use yii\web\Controller;

class TaskController extends Controller
{
    /**
     * Просмотр задачи
     * @param $id - идентификатор задачи
     * @return string|\yii\web\Response
     */
    public function actionIndex($id)
    {
        // если ID нет, ошибка
        if (!$id) {
            return $this->redirect('site/error');
        }

        // вместо данных из базы
        $task = new Activity();
        $task->id = $id;
        $task->name = 'Job';
        $task->started_at = '2019-11-27 08:00';
        $task->finished_at = '2019-11-27 08:00';
        $task->content = 'Go';
        $task->cycle = 0;
        $task->main = 0;

        return $this->render('index', compact('task'));
    }

    /**
     * Редактирование задачи
     * @param $id - идентификатор задачи
     * @return string
     */
    public function actionEdit()
    {
        $id = \Yii::$app->request->get('id');

        $task = $this->findTask($id);
        if ($task->load(\Yii::$app->request->post())) {
            if ($task->validate()) {
                // проверка на пустое поле finished_at
                if (!$task->finished_at) {
                    $task->finished_at = $task->started_at;
                }
                // проверка finished_at не может бы быть меньше started_at
                if ($task->started_at > $task->finished_at) {
                    $task->finished_at = $task->started_at;
                }

                $task->user_id = \Yii::$app->user->id;
                if ($task->id) {
                    $task->updated_at = date('Y-m-d');
                } else {
                    $task->created_at = date('Y-m-d');
                }

                if ($task->save()) {
                    return $this->render('submit', compact('task'));
                }
            }
        }

        return $this->render('edit', compact('task'));
    }

    public function findTask($id)
    {
        if ($id) {
            return Activity::findOne($id);
        }

        return new Activity();
    }
}