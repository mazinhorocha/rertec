<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <div class="container p-top-100 p-bottom-50">
        <div class="row">
            <div class="col-lg-8 col-md-8 offset-md-2 col-12">
                <div class="section-title">
                    <h1><?= $model->title ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="single-head" align="center">
                    <img src="<?= Url::to('@web/') . $model->image ?>" alt="#" style="margin: 0 auto">
                    <hr>
                    <div class="blog-meta" style="margin: 0 auto">
                        <span><i class="fa fa-users"></i>RR Tec</span>
                        <span><i class="fa fa-calendar"></i><?= date_create_from_format('Y-m-d H:i:s', $model->created_at)->format('d/m/Y') ?></span>
                    </div>
                </div>
                <!-- Single Content -->
                <div class="single-content">
                    <p><?= $model->body ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
