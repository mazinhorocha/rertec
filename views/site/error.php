<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<div class="site-error">

    <div class="container p-top-100 p-bottom-50">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <!-- Error Inner -->
                <div class="error-inner">
                    <h2><?= Html::encode($this->title) ?></h2>
                    <p><?= nl2br(Html::encode($message)) ?></p>
                </div>
                <br>
                <div class="button">
                    <a href="index.html" class="elena-btn bordered">Ir para Home</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <img src="<?= Url::to('@web/theme/images/')?>error.png" alt="#">
            </div>
        </div>
    </div>

</div>
