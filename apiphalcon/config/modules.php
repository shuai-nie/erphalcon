<?php

/**
 * Register application modules
 */
$application->registerModules([
    'frontend' => [
        'className' => 'Apiphalcon\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    ]
]);
