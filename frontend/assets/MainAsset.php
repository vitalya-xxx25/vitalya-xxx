<?php
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'source/css/fancybox/jquery.fancybox.css',
        'source/css/flexslider.css',
        'source/css/style.css',
        'source/skins/default.css',
    ];

    public $js = [
        'source/js/jquery.easing.1.3.js',
        'source/js/jquery.fancybox.pack.js',
        'source/js/jquery.fancybox-media.js',
        'source/js/google-code-prettify/prettify.js',
        'source/js/jquery.flexslider.js',
        'source/js/animate.js',
        'source/js/custom.js',
    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
      'position' =>  View::POS_HEAD,
    ];
}