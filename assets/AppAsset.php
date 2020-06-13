<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        'theme/css/bootstrap.min.css',
        'theme/css/animate.min.css',
        'theme/css/font-awesome.min.css',
        'theme/css/magnific-popup.min.css',
        'theme/css/jquery.fancybox.min.css',
        'theme/css/owl.carousel.min.css',
        'theme/css/cubeportfolio.min.css',
        'theme/css/niceselect.css',
        'theme/css/slicknav.min.css',
        'theme/css/animate-text.css',
        'theme/css/reset.css',
        'theme/css/style.css',
        'theme/css/responsive.css',
        'theme/css/skin.css',
    ];
    public $js = [
        'theme/js/jquery.min.js',
        'theme/js/popper.min.js',
        'theme/js/bootstrap.min.js',
        'theme/js/modernizr.min.js',
        'theme/js/elena-options.js',
        'theme/js/animate-text.js',
        'theme/js/jquery.fancybox.min.js',
        'theme/js/niceselect.js',
        'theme/js/owl.carousel.min.js',
        'theme/js/cubeportfolio.min.js',
        'theme/js/magnific-popup.min.js',
        'theme/js/easing.js',
        'theme/js/jquery.slicknav.min.js',
        'theme/js/jquery.stellar.min.js',
        'theme/js/wow.min.js',
        'theme/js/jquery.scrollUp.min.js',
        'theme/js/waypoints.min.js',
        'theme/js/jquery.counterup.min.js',
        'theme/js/particles.min.js',
        'theme/js/gmap.min.js',
        'theme/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
