<?php

namespace Phpfox\Auth;

return [
    'auth'     => [
        'adapters' => [],
    ],
    'services' => [
        'map' => [
            'auth' => [null, AuthManager::class],
        ],
    ],
];