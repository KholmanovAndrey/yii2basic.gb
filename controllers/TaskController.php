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
    public function actionEdit($id)
    {
        $task = new Activity();
        if ($task->load(\Yii::$app->request->post())) {
            if ($task->validate()) {
                return $this->render('submit', compact('task'));
            }
        }

        // если ID нет, ошибка
        if (!$id) {
            return $this->redirect('site/error');
        }

        // вместо данных из базы
        $task->id = $id;
        $task->name = 'Job';
        $task->started_at = '2019-11-27 08:00';
        $task->finished_at = '2019-11-27 08:00';
        $task->content = 'Go';
        $task->cycle = 0;
        $task->main = 0;

        return $this->render('edit', compact('task'));
    }
}