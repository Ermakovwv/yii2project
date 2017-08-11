<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'aliases' => [
        '@bower' => '@vendor/bower-asset', // Переходим на Asset Packagist, новые пути
        '@npm' => '@vendor/npm-asset',
        ],
    // Регистрируем классы при загрузке
    'bootstrap' => [
        'common\bootstrap\SetUp',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\MemCache',
            'useMemcached' => true,
            // Переопределяем куда сохранять кэши(все, из трёх папок)
            //'cachePath' => '@common/runtime/cache',
        ],
    ],
];
