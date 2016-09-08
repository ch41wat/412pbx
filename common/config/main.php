<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => '412PBX',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
