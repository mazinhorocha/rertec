<?php

/* @var $this yii\web\View */
/* @var $banner app\models\HomeBanner */
/* @var $sobre app\models\Pages */
/* @var $blog_page app\models\Pages */
/* @var $posts app\models\Post */
/* @var $numeros_page app\models\Pages */
/* @var $numeros app\models\Numeros */
/* @var $depoimentos_page app\models\Pages */
/* @var $depoimentos app\models\Depoimentos */
/* @var $clientes_page app\models\Pages */
/* @var $clientes app\models\NossosClientes */

use yii\helpers\Url;

$this->title = 'RR Tech';
?>
<div class="site-index">
    <!-- Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Hero Text -->
                    <div class="hero-text" style="text-transform: uppercase">
                        <h1 style="text-transform: uppercase" ><?= $banner->title ?></h1>
                        <h4 style="text-transform: uppercase"  class="cd-headline clip is-full-width">
                            <?= $banner->subtitle ?>
                            <?php if($banner->typpings && gettype(unserialize($banner->typpings)) === 'array') :?>
                            <span class="cd-words-wrapper">
                                <?php
                                    $index = 1;
                                    foreach (unserialize($banner->typpings) as $item) { ?>
                                        <b class="<?= $index === 1 ? 'is-visible' : ''?>"><?= $item ?></b>
                                <?php $index++; } ?>
                            </span>
                            <?php endif; ?>
                        </h4>
                        <p><?= $banner->text ?></p>
                        <div class="button">
                            <a href="<?= Url::to('/produtos') ?>" class="elena-btn bordered radius">Produtos</a>
                            <a href="<?= Url::to('/contato') ?>" class="elena-btn bordered primary radius">Fale Conosco</a>
                        </div>
                    </div>
                    <!--/ End Hero Text -->
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="hero-popup">
                        <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="video-popup mfp-fade"><i class="fa fa-play"></i></a>
                        <div class="clip-path">
                            <div class="hero-slider">
                                <div class="single-slider">
                                    <img src="<?= Url::to('/theme/images/') ?>hero-image.jpg" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="<?= Url::to('/theme/images/') ?>hero-image2.jpg" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="<?= Url::to('/theme/images/') ?>hero-image3.jpg" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Hero Area -->

    <!-- Features -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-inner overlay" style="background-image:url('<?= Url::to('/theme/images/') ?>features.jpg');">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Single Feature -->
                                <div class="single-feature">
                                    <div class="feature-head">
                                        <span>1</span>
                                        <i class="fa fa-handshake-o"></i>
                                    </div>
                                    <h2>Venda</h2>
                                    <p>A R & R Tecnologia comercializa os melhores sistemas de controle de acesso e pontos eletrônicos.</p>
                                </div>
                                <!-- End Single Feature -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Single Feature -->
                                <div class="single-feature">
                                    <div class="feature-head">
                                        <span>2</span>
                                        <i class="fa fa-magic"></i>
                                    </div>
                                    <h2>Instalação</h2>
                                    <p>Fazemos a instalação de seu equipamento seguindo todas as normas que o fabricante exige.</p>
                                </div>
                                <!-- End Single Feature -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Single Service -->
                                <div class="single-feature">
                                    <div class="feature-head">
                                        <span>3</span>
                                        <i class="fa fa-bolt"></i>
                                    </div>
                                    <h2>Manutenção</h2>
                                    <p>Trabalhamos com manutenção preventiva evitando assim gastos maiores para o cliente.</p>
                                </div>
                                <!-- End Single Feature -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Features -->

    <!-- Services -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 offset-md-2 col-12">
                    <div class="section-title">
                        <span class="title-bg"><?= $servico_page->backtitle ?></span>
                        <h1><?= $servico_page->title ?></h1>
                        <p><?= $servico_page->resume ?><p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($servicos as $servico) { ?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="<?= Url::to('@web/') . $servico->image ?>" alt="#">
                            </div>
                            <div class="blog-bottom">
                                <h4><a href="<?= Url::to(['blog/view', 'id' => $servico->id]) ?>">
                                        <?= $servico->title ?>
                                    </a></h4>
                                <div class="blog-meta">
                                    <span><i class="fa fa-calendar"></i>25 November, 2019</span>
                                </div>
                                <p><?= substr($servico->body, 0, 100) . ' [...]' ?></p>
                                <a href="<?= Url::to(['blog/view', 'id' => $servico->id]) ?>" class="elena-btn">Continuar lendo<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="button text-center m-top-50">
                        <a href="<?= Url::to('/contato') ?>" class="elena-btn primary radius">Fale conosco</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Services -->

    <!-- Call To Action -->
    <section class="call-action overlay section" data-stellar-background-ratio="0.5" style="background-image:url('<?= Url::to('/theme/images/') ?>parallax.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="call-text">
                        <h2><strong><?= $sobre->title ?></strong></h2>
                        <p class="text-uppercase"><strong><?= $sobre->resume ?></strong></p> <br>
                        <p><strong><?= $sobre->body ?></strong></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="call-video">
                        <img src="<?= Url::to('@web/') . $sobre->image ?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->

    <!-- Start Count Down -->
    <section class="countdown section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-8 offset-md-2 col-12">
                    <div class="section-title">
                        <span class="title-bg"><?= $numeros_page->backtitle ?></span>
                        <h1><?= $numeros_page->title ?></h1>
                        <p><?= $numeros_page->resume ?><p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <?php foreach ($numeros as $numero) { ?>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="single-count">
                                    <i class="fa fa-briefcase"></i>
                                    <b><span class="count"><?= $numero->numeros ?></span><?= $numero->strong ?></b>
                                    <h4><?= $numero->title ?></h4>
                                    <p><?= $numero->resume ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <!-- Count Image -->
                    <div class="count-image">
                        <img src="<?= Url::to('@web/') . $numeros_page->image; ?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Count Down -->

    <!-- Testimonials -->
    <section id="depoimentos" class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title">
                        <span class="title-bg"><?= $depoimentos_page->backtitle ?></span>
                        <h1><?= $depoimentos_page->title ?></h1>
                        <p><?= $depoimentos_page->resume ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="test-image" style="background-image:url('<?= Url::to('@web/') . $depoimentos_page->image ?>')">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-6 testimonial-carousel">

                                <div class="single-testimonial">
                                    <i class="fa fa-quote-right"></i>
                                    <div class="testimonial-content">
                                        <p>Muito satisfeito com a catraca digital da TopData, um produto de ótima qualidade, que trouxe eficiência e segurança para minha empresa.</p>
                                    </div>
                                    <div class="client-info">
                                        <img src="<?= Url::to('/theme/images/') ?>client-1.jpg" class="img-circle" alt="">
                                        <h6>Cristiane Rodovalho<span>CEO Presidente - Dream Park</span></h6>
                                    </div>
                                </div>

                                <div class="single-testimonial">
                                    <i class="fa fa-quote-right"></i>
                                    <div class="testimonial-content">
                                        <p>Muito satisfeito com a catraca digital da TopData, um produto de ótima qualidade, que trouxe eficiência e segurança para minha empresa.</p>
                                    </div>
                                    <!-- Client Info -->
                                    <div class="client-info">
                                        <img src="<?= Url::to('/theme/images/') ?>client-2.jpg" class="img-circle" alt="">
                                        <h6>Carlos Crivela<span>Gerente de Setor - Brasil Vida</span></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    <!-- Blogs Area -->
    <section class="blogs-main section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                    <div class="section-title">
                        <span class="title-bg"><?= $blog_page->backtitle ?></span>
                        <h1><?= $blog_page->name ?></h1>
                        <p><?= $blog_page->resume ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($posts as $post) { ?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="<?= Url::to('@web/') . $post->image ?>" alt="#">
                            </div>
                            <div class="blog-bottom">
                                <h4><a href="<?= Url::to(['blog/view', 'id' => $post->id]) ?>">
                                        <?= $post->title ?>
                                    </a></h4>
                                <div class="blog-meta">
                                    <span><i class="fa fa-calendar"></i>25 November, 2019</span>
                                </div>
                                <p><?= substr($post->body, 0, 100) . ' [...]' ?></p>
                                <a href="<?= Url::to(['blog/view', 'id' => $post->id]) ?>" class="elena-btn">Continuar lendo<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="button text-center m-top-50">
                        <a href="services.html" class="elena-btn primary radius">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blogs Area -->

    <!-- Start Clients -->
    <section id="clientes" class="clients overlay" data-stellar-background-ratio="0.5" style="background-image:url('<?= Url::to('/theme/images/') ?>bg2.jpeg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title">
                        <span class="title-bg"><?= $clientes_page->backtitle ?></span>
                        <h1><?= $clientes_page->title ?></h1>
                        <p><?= $clientes_page->resume ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-slider">

                        <?php foreach ($clientes as $cliente) : ?>
                            <div class="single-client">
                                ...<img src="<?= Url::to('@web/') . $cliente->image ?>" alt="#">
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Clients -->

</div>
