<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 26.11.2019
 * Time: 20:32
 */
/** @var \app\models\TaskForm $task */
?>
<h1>Редактировать задачу <?= $task->name ?></h1>

<?php

$form = \yii\widgets\ActiveForm::begin();

echo $form->field($task, 'name')->textInput(['autofocus' => true]);
echo $form->field($task, 'started_at')->textInput();
echo $form->field($task, 'finished_at')->textInput();
echo $form->field($task, 'content')->textarea();
echo $form->field($task, 'cycle')->checkbox();
echo $form->field($task, 'main')->checkbox();
echo $form->field($task, 'files[]')->fileInput(['multiple' => true]);

echo \yii\helpers\Html::submitButton('Сохранить', ['class' => 'btn btn-danger']);

\yii\widgets\ActiveForm::end();
?>
