<?php

namespace Phpfox\Auth;

return [
    'auth_adapters' => [
        'password' => '',
        'ticket'   => '',
    ],
    'services'     => [
        'auth' => AuthManager::class,
    ],
];