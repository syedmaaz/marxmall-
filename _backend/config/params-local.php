<?php
return [
'components' => [
        // Configuration Request Backend [Yii2-User] //
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'baseUrl' => '/admin',
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
            'cookieValidationKey' => 'OJp79x4y2u4D017tKrSnNEcFwKOt__I6',
            'csrfParam' => '_backendCSRF',
            'csrfCookie' => [
                'httpOnly' => true,
                'path' => '/admin',
            ],
        ],
        // Configuration Session Backend [Yii2-User] //
        'session' => [
            'name' => 'BACKENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path' => '/admin',
            ],
        ],        
    ],        
];
