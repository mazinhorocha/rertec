<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!-- Preloader -->
<div class="preloader">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Header -->
<header class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container pt-1">
        </div>
    </div>
    <!-- Middle Header -->
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menubar-inner">
                        <div class="row">
                            <div class="col-lg-2 col-md-12 col-12">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="<?= Url::to('/') ?>"><img src="<?= Url::to('/theme/images/') ?>rrlogo.png" alt="logo"></a>
                                </div>
                                <!--/ End Logo -->
                                <div class="mobile-nav"></div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-12">
                                <div class="menu-inner">
                                    <nav class="mainmenu navbar-expand-lg">
                                        <div class="navbar-collapse">
                                            <ul class="nav navbar-nav menu">
                                                <li><a href="<?= Url::to('/admin') ?>">Dashboard</a></li>
                                                <li><a href="<?= Url::to('/admin/pages') ?>">Páginas</a></li>
                                                <li><a href="<?= Url::to('/admin/produtos') ?>">Produtos</a></li>
                                                <li><a href="<?= Url::to('/admin/servico') ?>">Serviços</a></li>
                                                <li><a href="<?= Url::to('/admin/post') ?>">Posts</a></li>
                                                <li>
                                                    <?= Html::beginForm(['/site/logout'], 'post') ?>
                                                    <?= Html::submitButton( '<i class="fa fa-ban"></i> &nbsp;Sair', ['class' => 'btn btn-label btn-label-brand btn-bold'] ) ?>
                                                    <?= Html::endForm() ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>