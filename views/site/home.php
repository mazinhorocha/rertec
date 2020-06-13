<?php

/* @var $this yii\web\View */

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
                        <h1 style="text-transform: uppercase" >R&R Tecnologia</h1>
                        <h4 style="text-transform: uppercase"  class="cd-headline clip is-full-width">
                            A nº 1 em manutenção, suporte <br> e venda de
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Relógio de Ponto</b>
                                <b>Catracas de Acesso</b>
                                <b>Controles de Acesso</b>
                                <b>Bastão de Ronda</b>
                            </span>
                        </h4>
                        <p>
                            somos reconhecidos por oferecer produtos de qualidade, alta tecnologia e excelente relação custo benefício, atendendo as mais variadas finalidades em diversos empreendimentos de sucesso.
                        </p>
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
                                        <i class="fa fa-html5"></i>
                                    </div>
                                    <h2>Venda & Consultoria</h2>
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
                                        <i class="fa fa-bitbucket"></i>
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
                        <span class="title-bg">O que fazemos</span>
                        <h1>Serviços</h1>
                        <p>A R&R é referência do Centro Oeste em soluções para Controle de Ponto, Controle de Acesso, Controle de Rondas e Serviços de Manutenção e Assistência Técnica de grandes, médias e pequenas<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <div class="service-head">
                            <img src="<?= Url::to('/theme/images/') ?>service1.jpg" alt="#">
                            <div class="icon"><i class="fa fa-handshake-o"></i></div>
                        </div>
                        <div class="service-bottom">
                            <h2><a href="service-single.html">Consultoria</a></h2>
                            <p>Will know that there are millions of people out there. Every day besides so mandople joining this community manyea others</p>
                            <a href="#" class="elena-btn">Saiba Mais<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Service -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <div class="service-head">
                            <img src="<?= Url::to('/theme/images/') ?>service2.jpg" alt="#">
                            <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                        </div>
                        <div class="service-bottom">
                            <h2><a href="service-single.html">Implantação</a></h2>
                            <p>Will know that there are millions of people out there. Every day besides so mandople joining this community manyea others</p>
                            <a href="#" class="elena-btn">Saiba Mais<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Service -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <div class="service-head">
                            <img src="<?= Url::to('/theme/images/') ?>service3.jpg" alt="#">
                            <div class="icon"><i class="fa fa-briefcase"></i></div>
                        </div>
                        <div class="service-bottom">
                            <h2><a href="service-single.html">Suporte & Manutenção</a></h2>
                            <p>Will know that there are millions of people out there. Every day besides so mandople joining this community manyea others</p>
                            <a href="#" class="elena-btn">Saiba Mais<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Service -->
                </div>
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
                    <!-- Call Text -->
                    <div class="call-text">
                        <h2><strong>Nós somos R&R Tecnologia</strong></h2>
                        <h2>Missão</h2>
                        <p>Nam eleifend, turpis ac laoreet tincidunt, arcu purus ultricies nisl, quis molestie nibh lacus et dui. Nunc efficitur turpis lorem, bibendum dictum libero ornarea. Probinan ultricies nisl, quis molestie</p>
                        <br>
                        <h2>Valores</h2>
                        <p>Nam eleifend, turpis ac laoreet tincidunt, arcu purus ultricies nisl, quis molestie nibh lacus et dui. Nunc efficitur turpis lorem, bibendum dictum libero ornarea. Probinan ultricies nisl, quis molestie</p>
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
    <!--/ End Call To Action -->

    <!-- Start Count Down -->
    <section class="countdown section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="count-title">
                        <h2><span>Nossos números</span> ao longo dos anos</h2>
                        <p>Com responsabilidade e eficiência, a R&R tornou-se uma das mais importantes revendas TopData do Brasil.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <!-- Single Count -->
                            <div class="single-count">
                                <i class="fa fa-briefcase"></i>
                                <b><span class="count">3210</span>K</b>
                                <h4>consultorias</h4>
                                <p>We have done 3000+ project with high quality support.</p>
                            </div>
                            <!--/ End Single Count -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <!-- Single Count -->
                            <div class="single-count">
                                <i class="fa fa-code"></i>
                                <b><span class="count">5030</span>K</b>
                                <h4>Produtos Vendidos</h4>
                                <p>5k+ Hand writting Code type's by our creative developers.</p>
                            </div>
                            <!--/ End Single Count -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <!-- Single Count -->
                            <div class="single-count">
                                <i class="fa fa-handshake-o"></i>
                                <b><span class="count">2034</span>+</b>
                                <h4>Clientes Satisfeitos</h4>
                                <p>With our 4 years journy, we achived 2k+ happy clients.</p>
                            </div>
                            <!--/ End Single Count -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <!-- Single Count -->
                            <div class="single-count">
                                <i class="fa fa-support"></i>
                                <b><span class="count">12340</span>+</b>
                                <h4>Atendimentos de Suporte</h4>
                                <p>We received 12k+ unique tickets and fix all issue fast.</p>
                            </div>
                            <!--/ End Single Count -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <!-- Count Image -->
                    <div class="count-image">
                        <img src="<?= Url::to('/theme/images/') ?>count-image.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Count Down -->

    <!-- Testimonials -->
    <section class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title">
                        <span class="title-bg">Sucesso</span>
                        <h1>Casos de sucesso!</h1>
                        <p>Nós temos inúmeros clientes satisfeitos porque fazemos sempre o melhor!</p><p>
                        </p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="test-image" style="background-image:url('<?= Url::to('/theme/images/') ?>bg.jpg')">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-6 testimonial-carousel">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <i class="fa fa-quote-right"></i>
                                    <div class="testimonial-content">
                                        <p>Muito satisfeito com a catraca digital da TopData, um produto de ótima qualidade, que trouxe eficiência e segurança para minha empresa.</p>
                                    </div>
                                    <!-- Client Info -->
                                    <div class="client-info">
                                        <img src="<?= Url::to('/theme/images/') ?>client-1.jpg" class="img-circle" alt="">
                                        <h6>Cristiane Rodovalho<span>CEO Presidente - Dream Park</span></h6>
                                    </div>
                                </div>
                                <!--/ End Single Testimonial -->
                                <!-- Single Testimonial -->
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
                                <!--/ End Single Testimonial -->
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <i class="fa fa-quote-right"></i>
                                    <div class="testimonial-content">
                                        <p>Muito satisfeito com a catraca digital da TopData, um produto de ótima qualidade, que trouxe eficiência e segurança para minha empresa.</p>
                                    </div>
                                    <!-- Client Info -->
                                    <div class="client-info">
                                        <img src="<?= Url::to('/theme/images/') ?>client-3.jpg" class="img-circle" alt="">
                                        <h6>Monalia Carvalho<span>Chefe de Segurança - Passeio das Águas</span></h6>
                                    </div>
                                </div>
                                <!--/ End Single Testimonial -->
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <i class="fa fa-quote-right"></i>
                                    <div class="testimonial-content">
                                        <p>Muito satisfeito com a catraca digital da TopData, um produto de ótima qualidade, que trouxe eficiência e segurança para minha empresa.</p>
                                    </div>
                                    <!-- Client Info -->
                                    <div class="client-info">
                                        <img src="<?= Url::to('/theme/images/') ?>client-4.jpg" class="img-circle" alt="">
                                        <h6>Cristiano Araújo<span>Diretor Sênior - Hospital Araújo Jorge</span></h6>
                                    </div>
                                </div>
                                <!--/ End Single Testimonial -->
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
                        <span class="title-bg">Blog</span>
                        <h1>Blog</h1>
                        <p>Fique por dentro das tendências e novidades no mundo das tecnologias de controle de acesso</p><p>
                        </p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <!-- Blog Head -->
                        <div class="blog-head">
                            <div class="date"><a href="#">Business</a></div>
                            <img src="<?= Url::to('/theme/images/') ?>blog-1.jpg" alt="#">
                        </div>
                        <!-- Blog Bottom -->
                        <div class="blog-bottom">
                            <h4><a href="blog-single.html">Have there been a single good startup founded in welzo</a></h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-users"></i><a href="#">Elena Group</a></span>
                                <span><i class="fa fa-calendar"></i>25 November, 2019</span>
                            </div>
                            <p>All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this outline</p>
                            <a href="#" class="elena-btn">Continuar lendo<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <!-- Blog Head -->
                        <div class="blog-head">
                            <div class="date"><a href="#">Animation</a></div>
                            <img src="<?= Url::to('/theme/images/') ?>blog-2.jpg" alt="#">
                        </div>
                        <!-- Blog Bottom -->
                        <div class="blog-bottom">
                            <h4><a href="blog-single.html">We'll provide you best valuable product with gurantee</a></h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-users"></i><a href="#">Elena Group</a></span>
                                <span><i class="fa fa-calendar"></i>05 October, 2019</span>
                            </div>
                            <p>All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this outline</p>
                            <a href="#" class="elena-btn">Continuar lendo<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <!-- Blog Head -->
                        <div class="blog-head">
                            <div class="date"><a href="#">Creative</a></div>
                            <img src="<?= Url::to('/theme/images/') ?>blog-3.jpg" alt="#">
                        </div>
                        <!-- Blog Bottom -->
                        <div class="blog-bottom">
                            <h4><a href="blog-single.html">Amazing Design With Creative Features available Here</a></h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-users"></i><a href="#">Elena Group</a></span>
                                <span><i class="fa fa-calendar"></i>20 September, 2019</span>
                            </div>
                            <p>All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this outline</p>
                            <a href="#" class="elena-btn">Continuar lendo<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
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
    <section class="clients overlay" data-stellar-background-ratio="0.5" style="background-image:url('<?= Url::to('/theme/images/') ?>bg2.jpeg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title">
                        <span class="title-bg">Clientes</span>
                        <h1>Nossos Clientes</h1>
                        <p>Nosso compromisso é de entregar, aos nossos clientes, um produto de ótima qualidade, agregando serviços eficientes para garantir os resultados esperados.</p><p>
                        </p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-slider">
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-1.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-2.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-3.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-4.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-5.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-6.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-7.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                        <!-- Single Client -->
                        <div class="single-client">
                            <a href="#" target="_blank"><img src="<?= Url::to('/theme/images/') ?>partner-3.png" alt="#"></a>
                        </div>
                        <!--/ End Single Client -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Clients -->

</div>
