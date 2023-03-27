<?php

return [
    'GET' => [
        // API
        'api\/users' => 'api/users/index',
        'users\/([0-9]+)' => 'api/users/view/$1',

        // WEB
        'users\/([0-9]+)' => 'web/users/view/$1',
        'users' => 'web/users/index',
        '' => 'web/main/index',
    ],
    'POST' => [
        // API
        'api\/users' => 'api/users/create',
        
    ],
    'PUT' => [
        // API
        'users\/([0-9]+)' => 'api/users/view/$1',

    ],
    'DELETE' => [
        // API
        'users\/([0-9]+)' => 'api/users/view/$1',

    ],
];

?>
