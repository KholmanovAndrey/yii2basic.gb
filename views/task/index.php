<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 26.11.2019
 * Time: 20:31
 */

/** @var \app\models\TaskForm $task */
?>

<?= \yii\helpers\Html::a('Вернуться к календарю', \yii\helpers\Url::to(['calendar'])); ?>

<div class="task">
    <h1 class="task__name"><?= $task->name ?></h1>
    <div class="task__text"><?= $task->text ?></div>
    <div class="task__action">
        <?= \yii\helpers\Html::a('Редактировать', \yii\helpers\Url::to(['task/edit', 'id' => $task->id])); ?>
    </div>
</div>

