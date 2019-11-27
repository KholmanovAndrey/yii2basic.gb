<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 26.11.2019
 * Time: 20:25
 */

namespace app\controllers;

use app\models\TaskForm;
use yii\helpers\Url;
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
        $task = new TaskForm();
        $task->id = $id;
        $task->name = 'Job';
        $task->date = '2019-11-27 08:00';
        $task->text = 'Go';

        return $this->render('index', compact('task'));
    }

    /**
     * Редактирование задачи
     * @param $id - идентификатор задачи
     * @return string
     */
    public function actionEdit($id)
    {
        $task = new TaskForm();
        if (\Yii::$app->request->isPost) {
            if ($task->load(\Yii::$app->request->post())) {
                if ($task->validate()) {
                    return $this->render('submit', compact('task'));
                }
            }
        }

        // если ID нет, ошибка
        if (!$id) {
            return $this->redirect('site/error');
        }

        // вместо данных из базы
        $task->id = $id;
        $task->name = 'Job';
        $task->date = '2019-11-27 08:00';
        $task->text = 'Go';

        return $this->render('edit', compact('task'));
    }
}