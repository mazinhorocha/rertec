<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'R&R Tec',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'pt_BR',
    'sourceLanguage' => 'pt-BR',
    'timeZone' => 'America/Sao_Paulo',
    'charset' => 'UTF-8',
    'components' => [
        'formatter' => [
            'class'			=> 'yii\i18n\Formatter',
            'dateFormat'		=> 'dd/MM/yyyy',
            'datetimeFormat'	=> 'php:d/m/Y H:i:s',
            'timeFormat'		=> 'php:H:i:s',
            'decimalSeparator'	=> ',',
            'thousandSeparator'	=> '.',
            'currencyCode'		=> 'R$',
            'locale'		=> 'pt_br',
            'defaultTimeZone'	=> 'America/Recife',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '7Ag1PaEOL7kNY83T1e4B7FXfSn8jiOLA',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
            'authTimeout' => 3600,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'home' => '/',
                'sobre-nos' => 'site/sobre-nos',
                'produtos' => 'site/produtos',
                'servicos' => 'site/servicos',
                //'blog' => 'site/blog',
                'tecnologia' => 'site/sobre-nos',
                'contato' => 'site/contato',
            ],
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => '@app/modules/admin/views/layouts/main'
        ],
    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
