<?php

/* @var $this yii\web\View */
/* @var $page app\models\Pages */
/* @var $produtos app\models\Produtos */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $page->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

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
            <?php if($produtos) : ?>
                <?php foreach ($produtos as $produto): ?>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-service">
                        <div class="service-head">
                            <img src="<?= Url::to('@web/') . $produto->image ?>" alt="#">
                            <div class="icon"><i class="fa fa-anchor"></i></div>
                        </div>
                        <div class="service-bottom">
                            <p><small><?= $produto->subtitle ?></small></p>
                            <h2><?= $produto->title ?></h2>
                            <p><?= $produto->body ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>

</div>
