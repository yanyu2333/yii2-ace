<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 17-4-16
 * Time: 上午11:41
 */
$params = require (__DIR__.'/params.php');
$config = [
    'id' => 'erinnyes',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@home' => dirname(__DIR__),
      //  '@assets' => dirname(dirname(__DIR__)) . '/assets',
    ],
    'controllerNamespace' => 'home\controllers',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'params' => $params,

    'bootstrap' => ['debug','gii'],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ]
    ],

    'components' => [
        'assetManager' => [
            'basePath' => '@webroot/web',
            'baseUrl' => '@web/web'
        ],
        'request' =>[
            'cookieValidationKey' => 'erinnyes'
        ]
    ]

    //'layout' => null
];

return $config;