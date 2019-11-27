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
echo $form->field($task, 'date')->textInput();
echo $form->field($task, 'text')->textarea();

echo \yii\helpers\Html::submitButton('Сохранить', ['class' => 'btn btn-danger']);

\yii\widgets\ActiveForm::end();
?>
