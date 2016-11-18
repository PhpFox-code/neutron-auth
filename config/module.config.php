<?php

namespace Phpfox\Auth;


return [
    'auth_adapters' => [
        'password' => '',
        'ticket'   => '',
    ],
    'factories'     => [
        'auth' => AuthManagerFactory::class,
    ],
];