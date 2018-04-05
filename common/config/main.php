<?php
return [

    'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=stocks',
            'username' => 'root',
            'password' => 'Goojia123@qwe',
            'charset' => 'utf8',
        ],
    'mongodb' => [
            'class' => '\yii\mongodb\Connection',
            'dsn' => 'mongodb://jmrh:jmrh@121.40.180.111:27016/jmrh_develop',
        ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
