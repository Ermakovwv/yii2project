<?php

return [
    'class' => 'yii\web\UrlManager', // Чтобы наши UrlManager'ы распознавались
    'hostInfo' => $params['frontendHostInfo'], // Сообщаем UrlManager'у инфо о домене
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        '<_a:login|logout>' => 'site/<_a>',
        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<_c:[\w\-]+>/<id:\d+>/<_a:[\w-]+>' => '<_c>/<_a>',
    ],
];