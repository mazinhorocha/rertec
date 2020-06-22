<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DepoimentosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Depoimentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="depoimentos-index">

    <h3>
        <?= Html::encode($this->title) ?>
        <?= Html::a('Novo Depoimento', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </h3>
    <hr>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome',
            'empresa',
            //'cargo',
            //'depoimento:ntext',
            //'image',
            //['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align: right'],
                'template' => '{update}{delete}',
                'buttons' => [
                    'update'=>function ($url, $model) {
                        return Html::a("<i class='fa fa-edit'></i>", ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-info', 'style' => 'margin-right: 5px']);
                    },
                    'delete' => function($url, $model) {
                        return Html::a("<i class='fa fa-trash'></i>", ['delete', 'id' => $model->id], ['class' => 'btn btn-sm btn-danger', 'data-method' => 'post', 'data-confirm' => 'Excluir este produto?']);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>