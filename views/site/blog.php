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

        <div class="row">

        </div>
    </div>
</div>
