<?php

/* @var $this yii\web\View */

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
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <!-- Address -->
                    <ul class="address">
                        <li><a href="mailto:mail@elena-biz.com"><i class="fa fa-paper-plane"></i>fale@rertec.com</a></li>
                        <li><i class="fa fa-map-marker"></i>Av. Fued José Sebba, 296, Goânia - GO</li>
                    </ul>
                    <!--/ End Address -->
                </div>
                <div class="col-lg-5 col-12">'
                    <!-- Top Info -->
                    <div class="top-info">
                        <div class="phone">
                            <p style="display: flex"><i class="fa fa-phone"></i>Vendas (62)3434-0020 /0021</a></p>
                        </div>
                        <div class="button">
                            <a href="contact.html" class="elena-btn">Orçamento</a>
                        </div>
                    </div>
                    <!--/ End Top Info -->
                </div>
            </div>
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
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="<?= Url::to('/sobre-nos') ?>">Sobre Nós</a></li>
                                                <li><a href="<?= Url::to('/servicos') ?>">Serviços</a></li>
                                                <li><a href="<?= Url::to('/produtos') ?>">Produtos</a></li>
                                                <li><a href="<?= Url::to('/blog') ?>">Blog</a></li>
                                                <li><a href="<?= Url::to('/contato') ?>">Fale Conosco</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                    <!-- Search Form-->
                                    <div class="search-area">
                                        <a href="#header"><i class="fa fa-search"></i></a>
                                        <div class="search-form">
                                            <form class="form" action="#">
                                                <input type="search" placeholder="Type something..">
                                                <button type="submit" value="send"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--/ End Search Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Middle Header -->
</header>
<!--/ End Header -->