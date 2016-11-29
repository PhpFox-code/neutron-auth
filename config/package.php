<?php

namespace Neutron\Auth;

use Neutron\Log\LogContainerFactory;

return [
    'auth.adapters'  => [],
    'log.containers' => [
        'log.auth' => [],
    ],
    'services'       => [
        'auth'     => [null, AuthManager::class],
        'log.auth' => [LogContainerFactory::class, null, 'log.auth'],
    ],
];