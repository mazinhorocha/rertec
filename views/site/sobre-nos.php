<?php

/* @var $this yii\web\View */
/* @var $page app\models\Pages */

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
    </div>
    <section class="call-action overlay section" data-stellar-background-ratio="0.5" style="background-image:url('<?= Url::to('/theme/images/') ?>parallax.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Call Text -->
                    <div class="call-text">
                        <h2><strong><?= $page->title ?></strong></h2>
                        <?php if($page->fields) : ?>
                            <?php foreach ($page->fields as $item) : ?>
                                <h2><?= $item->name ?></h2>
                                <p><?= $item->value ?></p>
                                <br>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Video Popup -->
                    <div class="call-video">
                        <img src="<?= Url::to('/theme/images/') ?>access-control.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
