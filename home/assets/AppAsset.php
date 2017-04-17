<?php
namespace home\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/web';
    public $baseUrl = '@web/web';
    public $css = [
        "ace/css/bootstrap.min.css",
        "ace/font-awesome/4.5.0/css/font-awesome.min.css",
        "ace/css/fonts.googleapis.com.css",
        "ace/css/ace.min.css",
        "ace/css/ace-part2.min.css" ,
        "ace/css/ace-skins.min.css" ,
        "ace/css/ace-rtl.min.css",
        "ace/css/ace-ie.min.css",

    ];
    public $js = [
        "ace/js/ace-extra.min.js",
        "ace/js/html5shiv.min.js",
        "ace/js/respond.min.js",
        "ace/js/jquery-2.1.4.min.js",
        "ace/js/jquery-1.11.3.min.js",
        "ace/js/bootstrap.min.js",
        "ace/js/ace-elements.min.js",
        "ace/js/ace.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}