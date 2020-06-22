<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $page app\models\Pages */

$this->title = $page->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">
    <div class="container p-top-100 p-bottom-50">
        <div class="row">
            <div class="col-lg-8 col-md-8 offset-md-2 col-12">
                <div class="section-title">
                    <span class="title-bg"><?= $page->backtitle ?></span>
                    <h1><?= $page->name ?></h1>
                    <p><?= $page->resume ?><p>
                </div>
            </div>
        </div>

        <div class="row">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => '{items}',
                'options' => ['class' => 'row'],
                'itemOptions' => ['class' => 'col-4'],
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_loop', ['model' => $model]);
                },
            ]) ?>
        </div>
    </div>

</div>
