<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
?>

<div class="single-blog">
    <div class="blog-head">
        <img src="<?= Url::to('@web/') . $model->image ?>" alt="#">
    </div>
    <div class="blog-bottom">
        <h4><a href="<?= Url::to(['view', 'id' => $model->id]) ?>">
                <?= $model->title ?>
            </a></h4>
        <div class="blog-meta">
            <span><i class="fa fa-calendar"></i>25 November, 2019</span>
        </div>
        <p><?= substr($model->body, 0, 100) . ' [...]' ?></p>
        <a href="<?= Url::to(['view', 'id' => $model->id]) ?>" class="elena-btn">Continuar lendo<i class="fa fa-angle-right"></i></a>
    </div>
</div>
