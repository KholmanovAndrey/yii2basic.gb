<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'Username',
                'format' => 'raw',
                'value' => function(\app\models\Activity $model){
                    return Html::a($model->user->username, ['user/view', 'id' => $model->user->id]);
                }
            ],
            'name',
            'started_at',
            'finished_at',
            //'created_at',
            //'updated_at',
            //'content:ntext',
            //'cycle',
            //'main',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
