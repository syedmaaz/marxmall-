<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'I9eCTXOBE3fGd1aKmbI4Xsy-GaYL3gOL',
        ],
    ],
];


if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii']=[
                                'class' =>  'yii\gii\Module',
                                'allowedIPs' => ['*'],
                              ];
}

return $config;
