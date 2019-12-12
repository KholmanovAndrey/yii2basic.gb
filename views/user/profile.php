<?php
/** @var \app\models\User $model */
?>

<h1><?= $model->username ?></h1>
<?= \yii\helpers\Html::a('Update', ['user/update', 'id' => $model->id]) ?>
<? var_dump($model) ?>

